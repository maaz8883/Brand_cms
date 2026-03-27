<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\BrandService;
use App\Support\BrandServicePageDefaults;
use Illuminate\Support\Collection;

class BrandServiceApiController extends Controller
{
    /**
     * List published service pages for a brand (by brand slug), nested by parent/child.
     */
    public function index(string $brandSlug)
    {
        $brand = Brand::where('slug', $brandSlug)->firstOrFail();

        $all = BrandService::query()
            ->where('brand_id', $brand->id)
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return response()->json([
            'success' => true,
            'brand' => [
                'name' => $brand->name,
                'slug' => $brand->slug,
            ],
            'data' => $this->buildPublishedTree($all),
        ]);
    }

    /**
     * Full JSON payload for one service page (for headless / static site generators).
     */
    public function show(string $brandSlug, string $servicePath)
    {
        $brand = Brand::where('slug', $brandSlug)->firstOrFail();
        $segments = array_values(array_filter(explode('/', trim($servicePath, '/'))));
        abort_if($segments === [], 404);

        $parentId = null;
        $service = null;
        foreach ($segments as $slug) {
            $service = BrandService::query()
                ->where('brand_id', $brand->id)
                ->where('is_published', true)
                ->where('slug', $slug)
                ->when(
                    $parentId === null,
                    fn ($q) => $q->whereNull('parent_id'),
                    fn ($q) => $q->where('parent_id', $parentId)
                )
                ->first();

            if (! $service) {
                abort(404);
            }

            $parentId = $service->id;
        }

        $childRows = BrandService::query()
            ->where('brand_id', $brand->id)
            ->where('parent_id', $service->id)
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get(['id', 'title', 'slug']);

        $children = $childRows->map(fn (BrandService $c) => [
            'id' => $c->id,
            'title' => $c->title,
            'slug' => $c->slug,
        ])->values()->all();

        return response()->json([
            'success' => true,
            'data' => [
                'brand' => [
                    'name' => $brand->name,
                    'slug' => $brand->slug,
                    'description' => $brand->description,
                ],
                'service' => [
                    'id' => $service->id,
                    'parent_id' => $service->parent_id,
                    'title' => $service->title,
                    'slug' => $service->slug,
                    'meta_title' => $service->meta_title,
                    'meta_description' => $service->meta_description,
                    'breadcrumb' => $service->breadcrumbTrail(),
                    'children' => $children,
                    'content' => BrandServicePageDefaults::stripLayoutOnlyKeys($service->content ?? []),
                    'updated_at' => $service->updated_at?->toIso8601String(),
                ],
            ],
        ]);
    }

    /**
     * @param  Collection<int, BrandService>  $all
     * @return array<int, array<string, mixed>>
     */
    private function buildPublishedTree(Collection $all, ?int $parentId = null): array
    {
        $children = $all
            ->filter(function (BrandService $s) use ($parentId) {
                if ($parentId === null) {
                    return $s->parent_id === null;
                }

                return (int) $s->parent_id === (int) $parentId;
            })
            ->sortBy(fn (BrandService $s) => sprintf('%05d-%010d', $s->sort_order, $s->id))
            ->values();

        $out = [];
        foreach ($children as $s) {
            $out[] = [
                'id' => $s->id,
                'title' => $s->title,
                'slug' => $s->slug,
                'meta_title' => $s->meta_title,
                'meta_description' => $s->meta_description,
                'updated_at' => $s->updated_at?->toIso8601String(),
                'children' => $this->buildPublishedTree($all, $s->id),
            ];
        }

        return $out;
    }
}
