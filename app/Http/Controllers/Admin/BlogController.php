<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
                0 => 'blogs.id',
                1 => 'blogs.title',
                2 => 'brand_name',
                3 => 'blogs.image',
                4 => 'blogs.created_at',
            ];

            $total = Blog::count();
            $query = Blog::query()
                ->leftJoin('brands as br', 'br.id', '=', 'blogs.brand_id')
                ->select('blogs.*', 'br.name as brand_name');

            $searchValue = $request->input('search.value');
            if (! empty($searchValue)) {
                $query->where(function ($q) use ($searchValue) {
                    $q->where('blogs.title', 'like', "%{$searchValue}%")
                        ->orWhere('blogs.brand', 'like', "%{$searchValue}%")
                        ->orWhere('br.name', 'like', "%{$searchValue}%")
                        ->orWhere('blogs.slug', 'like', "%{$searchValue}%")
                        ->orWhere('blogs.meta_title', 'like', "%{$searchValue}%")
                        ->orWhere('blogs.meta_description', 'like', "%{$searchValue}%");
                });
            }

            $brandId = $request->input('brand_id');
            if (! empty($brandId)) {
                $query->where('blogs.brand_id', (int) $brandId);
            }

            $dateFrom = $request->input('date_from');
            if (! empty($dateFrom)) {
                $query->whereDate('blogs.created_at', '>=', $dateFrom);
            }

            $dateTo = $request->input('date_to');
            if (! empty($dateTo)) {
                $query->whereDate('blogs.created_at', '<=', $dateTo);
            }

            $filtered = $query->count();

            $orderColumnIndex = (int) $request->input('order.0.column', 0);
            $orderDir = $request->input('order.0.dir', 'desc') === 'asc' ? 'asc' : 'desc';
            $orderColumn = $columns[$orderColumnIndex] ?? 'blogs.id';

            $start = (int) $request->input('start', 0);
            $length = (int) $request->input('length', 10);

            $blogs = $query
                ->orderBy($orderColumn, $orderDir)
                ->skip($start)
                ->take($length)
                ->get();

            $data = $blogs->map(function (Blog $blog, int $index) use ($start) {
                $serial = $start + $index + 1;

                $showUrl = route('admin.blogs.show', $blog);
                $editUrl = route('admin.blogs.edit', $blog);
                $deleteUrl = route('admin.blogs.destroy', $blog);
                $token = csrf_token();

                $actions = '
                    <a href="' . $showUrl . '" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                    <a href="' . $editUrl . '" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                    <form action="' . $deleteUrl . '" method="POST" class="d-inline js-admin-delete-form" data-swal-title="' . e('Delete blog?') . '" data-swal-text="' . e('This blog will be removed permanently.') . '">
                        <input type="hidden" name="_token" value="' . $token . '">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>';

                $imageUrl = $this->resolveBlogImageUrl($blog->image);
                $imageHtml = $imageUrl
                    ? '<img src="' . e($imageUrl) . '" alt="" class="rounded border" style="max-height:48px;max-width:80px;object-fit:cover;">'
                    : '<span class="text-muted">—</span>';

                return [
                    'serial' => $serial,
                    'title' => e($blog->title ?? '-'),
                    'brand' => e($blog->brand_name ?? $blog->brand ?? '-'),
                    'image' => $imageHtml,
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

        $brands = Brand::query()->orderBy('name')->get(['id', 'name']);

        return view('admin.blogs.index', compact('brands'));
    }

    public function create()
    {
        $brands = Brand::query()->orderBy('name')->get(['id', 'name']);

        return view('admin.blogs.create', compact('brands'));
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
            'brand_id' => 'nullable|exists:brands,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:4096',
        ]);

        $slug = $validated['slug'] ?? Str::slug($validated['title']);
        $selectedBrand = ! empty($validated['brand_id'])
            ? Brand::query()->find($validated['brand_id'])
            : null;
        $imagePath = null;
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            while (Storage::disk('public')->exists('blogs/' . $filename)) {
                $filename = (time() + random_int(1, 9999)) . '.' . $request->file('image')->getClientOriginalExtension();
            }
            $request->file('image')->storeAs('blogs', $filename, 'public');
            $imagePath = $filename;
        }

        $data = [
            'title' => $validated['title'],
            'meta_title' => $validated['meta_title'] ?? $validated['title'],
            'meta_description' => $validated['meta_description'] ?? null,
            'slug' => $slug,
            'keywords' => $validated['keywords'] ?? null,
            'content' => $validated['content'] ?? null,
            'brand' => $selectedBrand?->name,
            'brand_id' => $selectedBrand?->id,
            'image' => $imagePath,
            // Keep old columns in sync for backward compatibility.
            'title_en' => $validated['title'],
            'slug_en' => $slug,
            'content_en' => $validated['content'] ?? null,
            'short_description_en' => $validated['meta_description'] ?? null,
            'user_id' => auth()->id(),
            'status' => 'published',
            'author' => $selectedBrand?->name,
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
        $brands = Brand::query()->orderBy('name')->get(['id', 'name']);

        return view('admin.blogs.edit', compact('blog', 'brands'));
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
            'brand_id' => 'nullable|exists:brands,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:4096',
        ]);

        $slug = $validated['slug'] ?? Str::slug($validated['title']);
        $selectedBrand = ! empty($validated['brand_id'])
            ? Brand::query()->find($validated['brand_id'])
            : null;
        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            while (Storage::disk('public')->exists('blogs/' . $filename)) {
                $filename = (time() + random_int(1, 9999)) . '.' . $request->file('image')->getClientOriginalExtension();
            }
            $request->file('image')->storeAs('blogs', $filename, 'public');
            $imagePath = $filename;

            if (! empty($blog->image) && Storage::disk('public')->exists('blogs/' . $blog->image)) {
                Storage::disk('public')->delete('blogs/' . $blog->image);
            } elseif (! empty($blog->image) && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
        }

        $data = [
            'title' => $validated['title'],
            'meta_title' => $validated['meta_title'] ?? $validated['title'],
            'meta_description' => $validated['meta_description'] ?? null,
            'slug' => $slug,
            'keywords' => $validated['keywords'] ?? null,
            'content' => $validated['content'] ?? null,
            'brand' => $selectedBrand?->name,
            'brand_id' => $selectedBrand?->id,
            'image' => $imagePath,
            // Keep old columns in sync for backward compatibility.
            'title_en' => $validated['title'],
            'slug_en' => $slug,
            'content_en' => $validated['content'] ?? null,
            'short_description_en' => $validated['meta_description'] ?? null,
            'author' => $selectedBrand?->name,
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

    private function resolveBlogImageUrl(?string $image): ?string
    {
        if ($image === null || $image === '') {
            return null;
        }

        if (Str::startsWith($image, ['http://', 'https://'])) {
            return $image;
        }

        if (Storage::disk('public')->exists('blogs/' . $image)) {
            return asset('storage/blogs/' . $image);
        }

        if (Storage::disk('public')->exists($image)) {
            return asset('storage/' . $image);
        }

        return asset($image);
    }
}
