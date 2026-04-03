<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BlogApiController extends Controller
{
    public function index()
    {
        $blogs = Blog::with(['user', 'category'])->latest()->get();
        $blogs = $blogs->map(function ($blog) {
            return $this->formatBlogResponse($blog);
        });
        
        return response()->json([
            'success' => true,
            'data' => $blogs
        ]);
    }

    public function show($slug)
    {
        $blog = Blog::with(['user', 'category'])
            ->where('slug_en', $slug)
            ->first();
        
        if (!$blog) {
            return response()->json([
                'success' => false,
                'message' => 'Blog not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $this->formatBlogResponse($blog)
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $payload = [
            'title_en' => $data['title'],
            'slug_en' => Str::slug($data['title']),
            'content_en' => $data['content'],
            'status' => $data['status'],
            'user_id' => auth()->id() ?? 1,
        ];

        if ($request->hasFile('featured_image')) {
            $payload['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        $blog = Blog::create($payload);
        $blog->load('user');

        return response()->json([
            'success' => true,
            'message' => 'Blog created successfully',
            'data' => $this->formatBlogResponse($blog)
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json([
                'success' => false,
                'message' => 'Blog not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();
        $payload = [
            'title_en' => $data['title'],
            'slug_en' => Str::slug($data['title']),
            'content_en' => $data['content'],
            'status' => $data['status'],
        ];

        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                \Storage::disk('public')->delete($blog->featured_image);
            }
            $payload['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        $blog->update($payload);
        $blog->load('user');

        return response()->json([
            'success' => true,
            'message' => 'Blog updated successfully',
            'data' => $this->formatBlogResponse($blog)
        ]);
    }
    
    /**
     * Format blog response with full URL for featured_image
     */
    private function formatBlogResponse(Blog $blog): array
    {
        $featured = null;
        if (! empty($blog->featured_image)) {
            $featured = url(Storage::url($blog->featured_image));
        }

        return [
            'id' => $blog->id,
            'title' => $blog->title_en,
            'slug' => $blog->slug_en,
            'content' => $blog->content_en,
            'short_description' => $blog->short_description_en,
            'featured_image' => $featured,
            'status' => $blog->status,
            'author' => $blog->author,
            'category_id' => $blog->category_id,
            'user_id' => $blog->user_id,
            'created_at' => $blog->created_at?->toIso8601String(),
            'updated_at' => $blog->updated_at?->toIso8601String(),
            'user' => $blog->relationLoaded('user') && $blog->user ? [
                'id' => $blog->user->id,
                'name' => $blog->user->name,
            ] : null,
            'category' => $blog->relationLoaded('category') && $blog->category ? [
                'id' => $blog->category->id,
                'name_en' => $blog->category->name_en,
                'name_de' => $blog->category->name_de,
            ] : null,
        ];
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json([
                'success' => false,
                'message' => 'Blog not found'
            ], 404);
        }

        if ($blog->featured_image) {
            \Storage::disk('public')->delete($blog->featured_image);
        }

        $blog->delete();

        return response()->json([
            'success' => true,
            'message' => 'Blog deleted successfully'
        ]);
    }
}
