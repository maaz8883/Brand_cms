<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogApiController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::with(['user', 'brand'])->latest();

        // Filter by brand slug: ?brand=orbit
        if ($request->filled('brand')) {
            $query->whereHas('brand', function ($q) use ($request) {
                $q->where('slug', $request->input('brand'));
            });
        }

        // Filter by status: ?status=published (default to published for public API)
        $status = $request->input('status', 'published');
        if ($status !== 'all') {
            $query->where('status', $status);
        }

        // Pagination: ?per_page=12&page=1
        $perPage = min((int) $request->input('per_page', 0), 100);
        if ($perPage > 0) {
            $paginated = $query->paginate($perPage);
            $blogs = collect($paginated->items())->map(fn($blog) => $this->formatBlogResponse($blog));

            return response()->json([
                'success' => true,
                'data' => $blogs,
                'meta' => [
                    'current_page' => $paginated->currentPage(),
                    'last_page' => $paginated->lastPage(),
                    'per_page' => $paginated->perPage(),
                    'total' => $paginated->total(),
                ],
            ]);
        }

        $blogs = $query->get()->map(fn($blog) => $this->formatBlogResponse($blog));

        return response()->json([
            'success' => true,
            'data' => $blogs,
        ]);
    }

    public function show($slug)
    {
        // Support both slug and slug_en columns
        $blog = Blog::with(['user', 'brand'])
            ->where(function ($q) use ($slug) {
                $q->where('slug_en', $slug)->orWhere('slug', $slug);
            })
            ->first();

        if (! $blog) {
            return response()->json([
                'success' => false,
                'message' => 'Blog not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $this->formatBlogResponse($blog),
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'brand_id' => 'nullable|exists:brands,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $payload = [
            'title_en' => $data['title'],
            'slug_en' => Str::slug($data['title']),
            'content_en' => $data['content'],
            'status' => $data['status'],
            'user_id' => auth()->id() ?? 1,
            'brand_id' => $data['brand_id'] ?? null,
        ];

        if ($request->hasFile('featured_image')) {
            $payload['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        $blog = Blog::create($payload);
        $blog->load(['user', 'brand']);

        return response()->json([
            'success' => true,
            'message' => 'Blog created successfully',
            'data' => $this->formatBlogResponse($blog),
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if (! $blog) {
            return response()->json([
                'success' => false,
                'message' => 'Blog not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'brand_id' => 'nullable|exists:brands,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $payload = [
            'title_en' => $data['title'],
            'slug_en' => Str::slug($data['title']),
            'content_en' => $data['content'],
            'status' => $data['status'],
        ];
        if (array_key_exists('brand_id', $data)) {
            $payload['brand_id'] = $data['brand_id'];
        }

        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                \Storage::disk('public')->delete($blog->featured_image);
            }
            $payload['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        $blog->update($payload);
        $blog->load(['user', 'brand']);

        return response()->json([
            'success' => true,
            'message' => 'Blog updated successfully',
            'data' => $this->formatBlogResponse($blog),
        ]);
    }

    /**
     * Format blog response with full URL for featured_image.
     * Handles both bare filenames (e.g. "1744190412.jpg") stored without
     * the subfolder prefix, and full paths (e.g. "blogs/1744190412.jpg").
     */
    private function formatBlogResponse(Blog $blog): array
    {
        $featured = null;
        if (! empty($blog->featured_image)) {
            $path = $blog->featured_image;
            // If the stored value has no directory separator it's a bare filename —
            // prepend the blogs/ subfolder so Storage::url() resolves correctly.
            if (! str_contains($path, '/') && ! str_contains($path, '\\')) {
                $path = 'blogs/' . $path;
            }
            $featured = url(Storage::url($path));
            // $featured = asset(Storage::url($path));
        }

        // return $featured;

        return [
            'id' => $blog->id,
            'title' => $blog->title_en,
            'slug' => $blog->slug_en,
            'content' => $blog->content_en,
            'short_description' => $blog->short_description_en,
            'featured_image' => $featured,
            'image_alt_tag' => $blog->image_alt_tag,
            'json_ld' => $blog->json_ld,
            'status' => $blog->status,
            'author' => $blog->author,
            'brand_id' => $blog->brand_id,
            'user_id' => $blog->user_id,
            'created_at' => $blog->created_at?->toIso8601String(),
            'updated_at' => $blog->updated_at?->toIso8601String(),
            'user' => $blog->relationLoaded('user') && $blog->user ? [
                'id' => $blog->user->id,
                'name' => $blog->user->name,
            ] : null,
            'brand' => $blog->relationLoaded('brand') && $blog->getRelation('brand') ? [
                'id' => $blog->getRelation('brand')->id,
                'name' => $blog->getRelation('brand')->name,
                'slug' => $blog->getRelation('brand')->slug,
            ] : null,
        ];
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (! $blog) {
            return response()->json([
                'success' => false,
                'message' => 'Blog not found',
            ], 404);
        }

        if ($blog->featured_image) {
            \Storage::disk('public')->delete($blog->featured_image);
        }

        $blog->delete();

        return response()->json([
            'success' => true,
            'message' => 'Blog deleted successfully',
        ]);
    }
}
