<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\BrandService;
use App\Support\BrandServicePageDefaults;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class BrandServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Brand $brand)
    {
        $services = BrandService::query()
            ->where('brand_id', $brand->id)
            ->whereNull('parent_id')
            ->with('parent')
            ->orderBy('sort_order')
            ->orderBy('id')
            ->paginate(25);

        return view('admin.brand-services.index', compact('brand', 'services'));
    }

    public function children(Brand $brand, BrandService $service)
    {
        $this->authorizeBrand($brand, $service);

        $children = BrandService::query()
            ->where('brand_id', $brand->id)
            ->where('parent_id', $service->id)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->paginate(25);

        return view('admin.brand-services.children', compact('brand', 'service', 'children'));
    }

    public function create(Brand $brand, Request $request)
    {
        $service = new BrandService([
            'content' => BrandServicePageDefaults::all(),
            'is_published' => true,
            'sort_order' => 0,
        ]);

        $pid = $request->query('parent_id');
        if ($pid && BrandService::where('brand_id', $brand->id)->where('id', (int) $pid)->exists()) {
            $service->parent_id = (int) $pid;
        }

        $parentOptions = $this->parentOptionsForBrand($brand);

        return view('admin.brand-services.create', compact('brand', 'service', 'parentOptions'));
    }

    public function store(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'parent_id' => [
                'nullable',
                'integer',
                Rule::exists('brand_services', 'id')->where('brand_id', $brand->id),
            ],
            'is_published' => 'sometimes|boolean',
            'sort_order' => 'nullable|integer|min:0|max:65535',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'content' => 'nullable|array',
        ]);

        $validated['parent_id'] = $request->filled('parent_id')
            ? (int) $validated['parent_id']
            : null;

        $baseSlug = Str::slug($validated['slug'] ?: $validated['title']);
        $validated['slug'] = $this->uniqueSlugForBrand($brand->id, $baseSlug);
        $validated['brand_id'] = $brand->id;
        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $content = BrandServicePageDefaults::merge(
            BrandServicePageDefaults::all(),
            $request->input('content', [])
        );
        $this->syncFeaturedLogosFromRequest($request, $content);
        $this->syncPlatformRowLogosFromRequest($request, $content);
        $content = BrandServicePageDefaults::stripLayoutOnlyKeys($content);

        $validated['content'] = $content;

        $service = BrandService::create($validated);

        $merged = $service->content;
        $this->processFileUploads($request, $brand, $service, $merged);
        $merged = BrandServicePageDefaults::stripLayoutOnlyKeys($merged);
        $service->content = $merged;
        $service->save();

        $parentService = null;
        if ($service->parent_id) {
            $parentService = BrandService::query()
                ->where('brand_id', $brand->id)
                ->where('id', $service->parent_id)
                ->first();
        }

        $redirectRoute = $parentService
            ? route('admin.brands.services.children', [$brand, $parentService])
            : route('admin.brands.services.index', $brand);

        return redirect($redirectRoute)
            ->with('success', 'Service page created successfully.');
    }

    public function edit(Brand $brand, BrandService $service)
    {
        $this->authorizeBrand($brand, $service);

        $parentOptions = $this->parentOptionsForBrand($brand, $service);

        return view('admin.brand-services.edit', compact('brand', 'service', 'parentOptions'));
    }

    public function update(Request $request, Brand $brand, BrandService $service)
    {
        $this->authorizeBrand($brand, $service);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'parent_id' => [
                'nullable',
                'integer',
                Rule::exists('brand_services', 'id')->where('brand_id', $brand->id),
            ],
            'is_published' => 'sometimes|boolean',
            'sort_order' => 'nullable|integer|min:0|max:65535',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'content' => 'nullable|array',
        ]);

        $newParentId = $request->filled('parent_id') ? (int) $validated['parent_id'] : null;
        if ($newParentId !== null && in_array($newParentId, $service->descendantIds(), true)) {
            return back()
                ->withErrors(['parent_id' => 'Parent cannot be this page or one of its sub-services.'])
                ->withInput();
        }
        $validated['parent_id'] = $newParentId;

        $baseSlug = Str::slug($validated['slug'] ?: $validated['title']);
        $validated['slug'] = $this->uniqueSlugForBrand($brand->id, $baseSlug, $service->id);
        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order'] = $validated['sort_order'] ?? $service->sort_order;

        $base = BrandServicePageDefaults::merge(
            BrandServicePageDefaults::all(),
            $service->content ?? []
        );
        $content = BrandServicePageDefaults::merge($base, $request->input('content', []));
        $this->syncFeaturedLogosFromRequest($request, $content);
        $this->syncPlatformRowLogosFromRequest($request, $content);
        $content = BrandServicePageDefaults::stripLayoutOnlyKeys($content);

        $service->fill($validated);
        $this->processFileUploads($request, $brand, $service, $content);
        $content = BrandServicePageDefaults::stripLayoutOnlyKeys($content);
        $service->content = $content;
        $service->save();

        return redirect()
            ->route('admin.brands.services.edit', [$brand, $service])
            ->with('success', 'Service page updated.');
    }

    public function destroy(Brand $brand, BrandService $service)
    {
        $this->authorizeBrand($brand, $service);
        $service->delete();

        return redirect()
            ->route('admin.brands.services.index', $brand)
            ->with('success', 'Service page deleted (including nested sub-services).');
    }

    /**
     * @return array<int, string>
     */
    private function parentOptionsForBrand(Brand $brand, ?BrandService $exclude = null): array
    {
        $q = BrandService::query()
            ->where('brand_id', $brand->id)
            ->orderBy('sort_order')
            ->orderBy('title');

        if ($exclude) {
            $q->whereNotIn('id', $exclude->descendantIds());
        }

        $map = [];
        foreach ($q->get() as $s) {
            $map[$s->id] = str_repeat('— ', $s->depth()) . $s->title . ' (' . $s->slug . ')';
        }

        return $map;
    }

    private function authorizeBrand(Brand $brand, BrandService $service): void
    {
        abort_unless($service->brand_id === $brand->id, 404);
    }

    private function uniqueSlugForBrand(int $brandId, string $base, ?int $ignoreId = null): string
    {
        $slug = $base ?: 'service';
        $n = 1;
        while (
            BrandService::query()
                ->where('brand_id', $brandId)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->where('slug', $slug)
                ->exists()
        ) {
            $slug = $base . '-' . $n++;
        }

        return $slug;
    }

    private function processFileUploads(Request $request, Brand $brand, BrandService $service, array &$content): void
    {
        $dir = 'brand-services/' . $brand->id . '/' . $service->id;

        $map = [
            'file_hero_background' => 'hero.background_image',
            'file_mid_cta_background' => 'mid_cta.background_image',
            'file_platform_side' => 'platform_section.side_image',
            'file_secondary_image' => 'secondary_section.image',
            'file_process_center_logo' => 'process.center_logo',
            'file_faq_side_image' => 'faq.side_image',
        ];

        foreach ($map as $fileKey => $dotPath) {
            if ($request->hasFile($fileKey)) {
                $path = $request->file($fileKey)->store($dir, 'public');
                data_set($content, $dotPath, Storage::url($path));
            }
        }

        foreach ([0, 1, 2] as $i) {
            $fk = 'file_tab_image_' . $i;
            if ($request->hasFile($fk)) {
                $path = $request->file($fk)->store($dir, 'public');
                data_set($content, "service_tabs.tabs.$i.image", Storage::url($path));
            }
        }

        foreach (range(0, 7) as $i) {
            $fk = 'file_success_item_' . $i;
            if ($request->hasFile($fk)) {
                $path = $request->file($fk)->store($dir, 'public');
                data_set($content, "success_features.items.$i.image", Storage::url($path));
            }
        }

        $featFiles = $request->file('file_featured_logo');
        if (is_array($featFiles)) {
            foreach ($featFiles as $idx => $file) {
                if ($file && $file->isValid()) {
                    $path = $file->store($dir.'/featured-in', 'public');
                    data_set($content, 'featured_in.logos.'.$idx, Storage::url($path));
                }
            }
        }

        $featLogos = data_get($content, 'featured_in.logos', []);
        if (is_array($featLogos)) {
            foreach (array_keys($featLogos) as $idx) {
                if ($request->boolean('remove_featured_logo.'.$idx) && ! $request->hasFile('file_featured_logo.'.$idx)) {
                    unset($featLogos[$idx]);
                }
            }
            $featLogos = array_values(array_filter($featLogos, static fn ($u) => $u !== null && $u !== '' && trim((string) $u) !== ''));
            data_set($content, 'featured_in.logos', $featLogos);
        }

        $platRowFiles = $request->file('file_platform_row_logo');
        if (is_array($platRowFiles)) {
            foreach ($platRowFiles as $idx => $file) {
                if ($file && $file->isValid()) {
                    $path = $file->store($dir.'/platform-row', 'public');
                    data_set($content, 'platform_logos_row.logos.'.$idx, Storage::url($path));
                }
            }
        }

        $platRowLogos = data_get($content, 'platform_logos_row.logos', []);
        if (is_array($platRowLogos)) {
            foreach (array_keys($platRowLogos) as $idx) {
                if ($request->boolean('remove_platform_row_logo.'.$idx) && ! $request->hasFile('file_platform_row_logo.'.$idx)) {
                    unset($platRowLogos[$idx]);
                }
            }
            $platRowLogos = array_values(array_filter($platRowLogos, static fn ($u) => $u !== null && $u !== '' && trim((string) $u) !== ''));
            data_set($content, 'platform_logos_row.logos', $platRowLogos);
        }

        if ($request->boolean('remove_portfolio_images')) {
            if ($request->hasFile('portfolio_images')) {
                $images = [];
                foreach ($request->file('portfolio_images') as $file) {
                    if ($file && $file->isValid()) {
                        $path = $file->store($dir . '/portfolio', 'public');
                        $images[] = Storage::url($path);
                    }
                }
                data_set($content, 'portfolio.images', $images);
            } else {
                data_set($content, 'portfolio.images', []);
            }
        } elseif ($request->hasFile('portfolio_images')) {
            $images = data_get($content, 'portfolio.images', []) ?: [];
            foreach ($request->file('portfolio_images') as $file) {
                if ($file && $file->isValid()) {
                    $path = $file->store($dir . '/portfolio', 'public');
                    $images[] = Storage::url($path);
                }
            }
            data_set($content, 'portfolio.images', $images);
        }

        $singleRemovals = [
            ['remove_hero_background', 'file_hero_background', 'hero.background_image'],
            ['remove_mid_cta_background', 'file_mid_cta_background', 'mid_cta.background_image'],
            ['remove_platform_side_image', 'file_platform_side', 'platform_section.side_image'],
            ['remove_secondary_image', 'file_secondary_image', 'secondary_section.image'],
            ['remove_process_center_logo', 'file_process_center_logo', 'process.center_logo'],
            ['remove_faq_side_image', 'file_faq_side_image', 'faq.side_image'],
        ];
        foreach ($singleRemovals as [$flag, $fileKey, $dotPath]) {
            if ($request->boolean($flag) && ! $request->hasFile($fileKey)) {
                data_set($content, $dotPath, '');
            }
        }
        foreach ([0, 1, 2] as $i) {
            if ($request->boolean('remove_tab_image_'.$i) && ! $request->hasFile('file_tab_image_'.$i)) {
                data_set($content, 'service_tabs.tabs.'.$i.'.image', '');
            }
        }
        foreach (range(0, 7) as $i) {
            if ($request->boolean('remove_success_item_'.$i) && ! $request->hasFile('file_success_item_'.$i)) {
                data_set($content, 'success_features.items.'.$i.'.image', '');
            }
        }
    }

    /**
     * Replace merged logos with raw POST so removed rows disappear (deep merge would keep stale indices).
     */
    private function syncFeaturedLogosFromRequest(Request $request, array &$content): void
    {
        $raw = data_get($request->input('content'), 'featured_in.logos');
        if (! is_array($raw)) {
            return;
        }
        data_set($content, 'featured_in.logos', $raw);
    }

    /**
     * Replace merged platform row logos with raw POST so removed rows disappear (deep merge would keep stale indices).
     */
    private function syncPlatformRowLogosFromRequest(Request $request, array &$content): void
    {
        $raw = data_get($request->input('content'), 'platform_logos_row.logos');
        if (! is_array($raw)) {
            return;
        }
        data_set($content, 'platform_logos_row.logos', $raw);
    }
}
