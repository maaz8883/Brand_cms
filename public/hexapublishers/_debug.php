<?php
require_once __DIR__ . '/inc/hp-api-config.php';
require_once __DIR__ . '/inc/hp-api-service.php';

$apiBase   = hpApiBaseUrl();
$blogsBase = hpBlogsApiBase();

// Test 1: with brand filter
$url1 = $blogsBase . '/blogs?brand=' . rawurlencode(HP_BRAND_SLUG) . '&status=published&per_page=3';
// Test 2: without brand filter (all blogs)
$url2 = $blogsBase . '/blogs?status=published&per_page=3';
// Test 3: all blogs no filter
$url3 = $blogsBase . '/blogs?per_page=3';

echo "<pre>";
echo "HP_BRAND_SLUG : " . HP_BRAND_SLUG . "\n";
echo "API Base      : " . $apiBase . "\n";
echo "Blogs Base    : " . $blogsBase . "\n\n";

echo "=== Test 1: with brand filter ===\n";
echo "URL: $url1\n";
$r1 = hpFetchJson($url1);
echo "total: " . ($r1['meta']['total'] ?? ($r1['success'] ? count($r1['data'] ?? []) : 'N/A')) . "\n";
echo "success: " . ($r1['success'] ? 'true' : 'false') . "\n\n";

echo "=== Test 2: published only (no brand) ===\n";
echo "URL: $url2\n";
$r2 = hpFetchJson($url2);
echo "total: " . ($r2['meta']['total'] ?? ($r2['success'] ? count($r2['data'] ?? []) : 'N/A')) . "\n";
if (!empty($r2['data'][0])) {
    echo "first blog brand_id: " . ($r2['data'][0]['brand_id'] ?? 'N/A') . "\n";
    echo "first blog brand slug: " . ($r2['data'][0]['brand']['slug'] ?? 'N/A') . "\n";
}
echo "\n";

echo "=== Test 3: all blogs ===\n";
echo "URL: $url3\n";
$r3 = hpFetchJson($url3);
echo "total: " . ($r3['meta']['total'] ?? ($r3['success'] ? count($r3['data'] ?? []) : 'N/A')) . "\n";
if (!empty($r3['data'][0])) {
    echo "first blog brand_id: " . ($r3['data'][0]['brand_id'] ?? 'N/A') . "\n";
    echo "first blog brand slug: " . ($r3['data'][0]['brand']['slug'] ?? 'N/A') . "\n";
}
echo "</pre>";
