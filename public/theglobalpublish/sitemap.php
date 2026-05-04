<?php

declare(strict_types=1);

require_once __DIR__ . '/inc/tgp-api-config.php';
require_once __DIR__ . '/inc/tgp-api-service.php';

$siteUrl = 'https://theglobalpublishers.com/';
$now     = gmdate('c');
$lastmod = '2025-07-11T20:59:28+00:00';

// ── Static pages (preserved from original sitemap.xml) ────────────────────────
$staticPaths = [
    ''                        => ['priority' => '1.00'],
    'about-us'                => ['priority' => '0.80'],
    'contact-us'              => ['priority' => '0.80'],
    'book-publishing'         => ['priority' => '0.80'],
    'ghostwriting-services'   => ['priority' => '0.80'],
    'ebook-writing'           => ['priority' => '0.80'],
    'memoir-writing'          => ['priority' => '0.80'],
    'biography-writing'       => ['priority' => '0.80'],
    'business-book-writing'   => ['priority' => '0.80'],
    'non-fiction-writing'     => ['priority' => '0.80'],
    'fiction-writing'         => ['priority' => '0.80'],
    'action-writing'          => ['priority' => '0.80'],
    'fantasy-writing'         => ['priority' => '0.80'],
    'science-fiction-writing' => ['priority' => '0.80'],
    'horror-book-writing'     => ['priority' => '0.80'],
    'drama-writing'           => ['priority' => '0.80'],
    'suspense-thriller-writing' => ['priority' => '0.80'],
    'romance-writing'         => ['priority' => '0.80'],
    'mystery-writing'         => ['priority' => '0.80'],
    'book-editing-services'   => ['priority' => '0.80'],
    'book-formatting-services' => ['priority' => '0.80'],
    'book-marketing'          => ['priority' => '0.80'],
    'audiobook-narrators'     => ['priority' => '0.80'],
    'author-website-design'   => ['priority' => '0.80'],
    // Blog listing page
    'blogs'                   => ['priority' => '0.80', 'changefreq' => 'daily', 'lastmod' => $now],
];

$urls = [];
foreach ($staticPaths as $path => $meta) {
    $urls[] = [
        'loc'        => $siteUrl . $path,
        'lastmod'    => $meta['lastmod'] ?? $lastmod,
        'changefreq' => $meta['changefreq'] ?? 'monthly',
        'priority'   => $meta['priority'],
    ];
}

// ── Dynamic blog posts from API ───────────────────────────────────────────────
$payload = tgpFetchJson(tgpBlogsApiBase() . '/blogs?brand=' . rawurlencode(TGP_BRAND_SLUG) . '&status=published&per_page=500');
if (is_array($payload) && ! empty($payload['success'])) {
    foreach ($payload['data'] ?? [] as $blog) {
        if (! is_array($blog)) {
            continue;
        }
        $slug = trim((string) ($blog['slug'] ?? ''));
        if ($slug === '') {
            continue;
        }
        $lm = $blog['updated_at'] ?? $blog['created_at'] ?? null;
        $urls[] = [
            'loc'        => $siteUrl . 'blog/' . $slug,
            'lastmod'    => is_string($lm) && $lm !== '' ? $lm : $now,
            'changefreq' => 'monthly',
            'priority'   => '0.70',
        ];
    }
}

// ── Output XML ────────────────────────────────────────────────────────────────
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
echo '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
echo '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
echo '              http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

foreach ($urls as $u) {
    $e = static fn(string $s): string => htmlspecialchars($s, ENT_XML1 | ENT_QUOTES, 'UTF-8');
    echo "  <url>\n";
    echo '    <loc>'        . $e($u['loc'])        . "</loc>\n";
    echo '    <lastmod>'    . $e($u['lastmod'])    . "</lastmod>\n";
    echo '    <changefreq>' . $e($u['changefreq']) . "</changefreq>\n";
    echo '    <priority>'   . $e($u['priority'])   . "</priority>\n";
    echo "  </url>\n";
}

echo "</urlset>\n";
