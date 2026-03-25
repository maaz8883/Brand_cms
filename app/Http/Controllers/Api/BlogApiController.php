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
            ->orWhere('slug_de', $slug)
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
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->id() ?? 1;

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        $blog = Blog::create($data);
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
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                \Storage::disk('public')->delete($blog->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        $blog->update($data);
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
    private function formatBlogResponse($blog)
    {
        $blogArray = $blog->toArray();
        
        // Convert featured_image path to full URL
        if (!empty($blogArray['featured_image'])) {
            $blogArray['featured_image'] = Storage::url($blogArray['featured_image']);
            // Get full URL with domain
            $blogArray['featured_image'] = url($blogArray['featured_image']);
        } else {
            $blogArray['featured_image'] = null;
        }
        
        return $blogArray;
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
