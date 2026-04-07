<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $columns = [
                0 => 'id',
                1 => 'title',
                2 => 'brand',
                3 => 'slug',
                4 => 'created_at',
            ];

            $total = Blog::count();
            $query = Blog::query();

            $searchValue = $request->input('search.value');
            if (! empty($searchValue)) {
                $query->where(function ($q) use ($searchValue) {
                    $q->where('title', 'like', "%{$searchValue}%")
                        ->orWhere('brand', 'like', "%{$searchValue}%")
                        ->orWhere('slug', 'like', "%{$searchValue}%")
                        ->orWhere('meta_title', 'like', "%{$searchValue}%")
                        ->orWhere('meta_description', 'like', "%{$searchValue}%");
                });
            }

            $filtered = $query->count();

            $orderColumnIndex = (int) $request->input('order.0.column', 0);
            $orderDir = $request->input('order.0.dir', 'desc') === 'asc' ? 'asc' : 'desc';
            $orderColumn = $columns[$orderColumnIndex] ?? 'id';

            $start = (int) $request->input('start', 0);
            $length = (int) $request->input('length', 10);

            $blogs = $query
                ->orderBy($orderColumn, $orderDir)
                ->skip($start)
                ->take($length)
                ->get();

            $data = $blogs->map(function (Blog $blog) {
                $showUrl = route('admin.blogs.show', $blog);
                $editUrl = route('admin.blogs.edit', $blog);
                $deleteUrl = route('admin.blogs.destroy', $blog);
                $token = csrf_token();

                $actions = '
                    <a href="' . $showUrl . '" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                    <a href="' . $editUrl . '" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                    <form action="' . $deleteUrl . '" method="POST" class="d-inline">
                        <input type="hidden" name="_token" value="' . $token . '">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>';

                return [
                    'id' => $blog->id,
                    'title' => e($blog->title ?? '-'),
                    'brand' => e($blog->brand ?? '-'),
                    'slug' => '<code>' . e($blog->slug ?? '-') . '</code>',
                    'created_at' => $blog->created_at ? $blog->created_at->format('M d, Y') : '-',
                    'actions' => $actions,
                ];
            })->values();

            return response()->json([
                'draw' => (int) $request->input('draw'),
                'recordsTotal' => $total,
                'recordsFiltered' => $filtered,
                'data' => $data,
            ]);
        }

        return view('admin.blogs.index');
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'slug' => 'nullable|string|max:255|unique:blogs,slug',
            'keywords' => 'nullable|string',
            'content' => 'nullable|string',
            'brand' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
        ]);

        $slug = $validated['slug'] ?? Str::slug($validated['title']);

        $data = [
            'title' => $validated['title'],
            'meta_title' => $validated['meta_title'] ?? $validated['title'],
            'meta_description' => $validated['meta_description'] ?? null,
            'slug' => $slug,
            'keywords' => $validated['keywords'] ?? null,
            'content' => $validated['content'] ?? null,
            'brand' => $validated['brand'] ?? null,
            'image' => $validated['image'] ?? null,
            // Keep old columns in sync for backward compatibility.
            'title_en' => $validated['title'],
            'slug_en' => $slug,
            'content_en' => $validated['content'] ?? null,
            'short_description_en' => $validated['meta_description'] ?? null,
            'user_id' => auth()->id(),
            'status' => 'published',
            'author' => $validated['brand'] ?? null,
        ];
        $data['featured_image'] = $data['image'];

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'slug' => 'nullable|string|max:255|unique:blogs,slug,' . $blog->id,
            'keywords' => 'nullable|string',
            'content' => 'nullable|string',
            'brand' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
        ]);

        $slug = $validated['slug'] ?? Str::slug($validated['title']);

        $data = [
            'title' => $validated['title'],
            'meta_title' => $validated['meta_title'] ?? $validated['title'],
            'meta_description' => $validated['meta_description'] ?? null,
            'slug' => $slug,
            'keywords' => $validated['keywords'] ?? null,
            'content' => $validated['content'] ?? null,
            'brand' => $validated['brand'] ?? null,
            'image' => $validated['image'] ?? null,
            // Keep old columns in sync for backward compatibility.
            'title_en' => $validated['title'],
            'slug_en' => $slug,
            'content_en' => $validated['content'] ?? null,
            'short_description_en' => $validated['meta_description'] ?? null,
            'author' => $validated['brand'] ?? null,
        ];
        $data['featured_image'] = $data['image'];

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
