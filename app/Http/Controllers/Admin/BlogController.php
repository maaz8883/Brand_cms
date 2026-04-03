<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::with(['user', 'category'])->latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'category_id' => 'nullable|exists:categories,id',
            'author' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
        ]);

        $data = [
            'title_en' => $validated['title'],
            'slug_en' => Str::slug($validated['title']),
            'content_en' => $validated['content'],
            'short_description_en' => $validated['short_description'] ?? null,
            'status' => $validated['status'],
            'category_id' => $validated['category_id'] ?? null,
            'author' => $validated['author'] ?? null,
            'user_id' => auth()->id(),
        ];

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'category_id' => 'nullable|exists:categories,id',
            'author' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
        ]);

        $data = [
            'title_en' => $validated['title'],
            'slug_en' => Str::slug($validated['title']),
            'content_en' => $validated['content'],
            'short_description_en' => $validated['short_description'] ?? null,
            'status' => $validated['status'],
            'category_id' => $validated['category_id'] ?? null,
            'author' => $validated['author'] ?? null,
        ];

        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                \Storage::disk('public')->delete($blog->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->featured_image) {
            \Storage::disk('public')->delete($blog->featured_image);
        }
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
