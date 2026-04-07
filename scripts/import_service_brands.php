<?php

use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

$rawBrands = DB::table('services')
    ->select('brand')
    ->whereNotNull('brand')
    ->groupBy('brand')
    ->pluck('brand');

$created = 0;
$skipped = 0;

foreach ($rawBrands as $rawBrand) {
    $name = trim((string) $rawBrand);

    if ($name === '') {
        $skipped++;
        continue;
    }

    $existing = Brand::query()
        ->whereRaw('LOWER(name) = ?', [Str::lower($name)])
        ->first();

    if ($existing) {
        $skipped++;
        continue;
    }

    $baseSlug = Str::slug($name);
    if ($baseSlug === '') {
        $baseSlug = 'brand';
    }

    $slug = $baseSlug;
    $suffix = 2;
    while (Brand::query()->where('slug', $slug)->exists()) {
        $slug = $baseSlug . '-' . $suffix;
        $suffix++;
    }

    Brand::query()->create([
        'name' => $name,
        'slug' => $slug,
        'description' => null,
    ]);

    $created++;
}

echo "Service brands import completed. Created: {$created}, Skipped: {$skipped}" . PHP_EOL;
