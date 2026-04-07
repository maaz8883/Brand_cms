<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
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
                1 => 'name',
                2 => 'slug',
                3 => 'description',
                4 => 'created_at',
            ];

            $total = Brand::count();
            $query = Brand::query();

            $searchValue = trim((string) $request->input('search.value', ''));
            if ($searchValue !== '') {
                $query->where(function ($q) use ($searchValue) {
                    $q->where('name', 'like', "%{$searchValue}%")
                        ->orWhere('slug', 'like', "%{$searchValue}%")
                        ->orWhere('description', 'like', "%{$searchValue}%");
                });
            }

            $filtered = (clone $query)->count();

            $orderColumnIndex = (int) $request->input('order.0.column', 0);
            $orderDirection = strtolower((string) $request->input('order.0.dir', 'desc')) === 'asc' ? 'asc' : 'desc';
            $orderColumn = $columns[$orderColumnIndex] ?? 'id';

            $start = max((int) $request->input('start', 0), 0);
            $length = (int) $request->input('length', 10);
            if ($length < 1) {
                $length = 10;
            }

            $brands = $query->orderBy($orderColumn, $orderDirection)
                ->skip($start)
                ->take($length)
                ->get();

            $data = $brands->map(function (Brand $brand) {
                $actions = '
                    <a href="' . route('admin.brands.services.index', $brand) . '" class="btn btn-sm btn-primary" title="Service pages">
                        <i class="bi bi-journal-richtext"></i>
                    </a>
                    <a href="' . route('admin.brands.show', $brand) . '" class="btn btn-sm btn-info" title="View">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="' . route('admin.brands.edit', $brand) . '" class="btn btn-sm btn-warning" title="Edit">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="' . route('admin.brands.destroy', $brand) . '" method="POST" class="d-inline js-admin-delete-form" data-swal-title="' . e('Delete brand?') . '" data-swal-text="' . e('This action cannot be undone.') . '">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>';

                return [
                    'id' => $brand->id,
                    'name' => '<strong>' . e($brand->name) . '</strong>',
                    'slug' => '<code>' . e($brand->slug) . '</code>',
                    'description' => e(Str::limit($brand->description ?? '', 40)),
                    'created_at' => $brand->created_at ? $brand->created_at->format('M d, Y') : '-',
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

        return view('admin.brands.index');
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $validated['slug'] = $this->makeUniqueSlug(Str::slug($validated['name']));

        Brand::create($validated);

        return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully.');
    }

    public function show(Brand $brand)
    {
        $brand->load('blogs');

        return view('admin.brands.show', compact('brand'));
    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $validated['slug'] = $this->makeUniqueSlug(Str::slug($validated['name']), $brand->id);

        $brand->update($validated);

        return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully.');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('admin.brands.index')->with('success', 'Brand deleted successfully.');
    }

    private function makeUniqueSlug(string $base, ?int $ignoreId = null): string
    {
        $slug = $base;
        $n = 1;
        while (
            Brand::query()
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->where('slug', $slug)
                ->exists()
        ) {
            $slug = $base . '-' . $n++;
        }

        return $slug;
    }
}
