<?php

declare(strict_types=1);

require_once __DIR__ . '/inc/hp-api-config.php';
require_once __DIR__ . '/inc/hp-api-service.php';

$siteUrl = 'https://hexapublishers.com/';
$now     = gmdate('c');

$staticPaths = [
    ''                 => ['changefreq' => 'weekly',  'priority' => '1.0'],
    'about'            => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-publishing'  => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-marketing'   => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'author-website'   => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'audio-book'       => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-cover'       => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-editing'     => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-video'       => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-writing'     => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'illustration'     => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'case-studies'     => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'contact-us'       => ['changefreq' => 'monthly', 'priority' => '0.6'],
    'privacy-policy'   => ['changefreq' => 'yearly',  'priority' => '0.3'],
    'terms-conditions' => ['changefreq' => 'yearly',  'priority' => '0.3'],
    'blogs'            => ['changefreq' => 'daily',   'priority' => '0.8'],
];

$urls = [];
foreach ($staticPaths as $path => $meta) {
    $urls[] = [
        'loc' => $siteUrl . $path,
        'lastmod' => $now,
        'changefreq' => $meta['changefreq'],
        'priority' => $meta['priority']
    ];
}

// Blog posts
$payload = hpFetchJson(hpBlogsApiBase() . '/blogs?brand=' . rawurlencode(HP_BRAND_SLUG) . '&status=published&per_page=500');
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
            'loc' => $siteUrl . 'blog/' . $slug,
            'lastmod' => is_string($lm) && $lm !== '' ? $lm : $now,
            'changefreq' => 'monthly',
            'priority' => '0.7'
        ];
    }
}

header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as $u) {
    $e = static fn(string $s): string => htmlspecialchars($s, ENT_XML1 | ENT_QUOTES, 'UTF-8');
    echo "  <url>\n    <loc>{$e($u['loc'])}</loc>\n    <lastmod>{$e($u['lastmod'])}</lastmod>\n    <changefreq>{$e($u['changefreq'])}</changefreq>\n    <priority>{$e($u['priority'])}</priority>\n  </url>\n";
}
echo "</urlset>\n";
