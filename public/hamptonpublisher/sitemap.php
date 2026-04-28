<?php

declare(strict_types=1);

require_once __DIR__ . '/inc/hp-api-config.php';
require_once __DIR__ . '/inc/hp-api-service.php';

$siteUrl = 'https://hamptonpublishers.com/';
$now     = gmdate('c');

// ── Static pages ──────────────────────────────────────────────────────────────
$staticPaths = [
    ''                       => ['changefreq' => 'weekly',  'priority' => '1.0'],
    'about'                  => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'ghostwriting'           => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-cover-design'      => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-editing'           => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-publishing'        => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'book-marketing'         => ['changefreq' => 'monthly', 'priority' => '0.8'],
    'non-fiction-writing'    => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'song-writing'           => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'rhymes-writing'         => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'e-book-writing'         => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'memoir-writing'         => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'author-website-deisgn'  => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'children-book-printing' => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'amazon-publishing'      => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'audiobook-narrator'     => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'book-trailer'           => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'novel-writing'          => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'script-writing'         => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'narative-writing'       => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'children-book'          => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'story-writing'          => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'wiki-writing'           => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'testimonial'            => ['changefreq' => 'monthly', 'priority' => '0.6'],
    'privacy'                => ['changefreq' => 'yearly',  'priority' => '0.3'],
    'terms'                  => ['changefreq' => 'yearly',  'priority' => '0.3'],
    // Blog listing
    'blogs'                  => ['changefreq' => 'daily',   'priority' => '0.8'],
];

$urls = [];
foreach ($staticPaths as $path => $meta) {
    $urls[] = [
        'loc'        => $siteUrl . $path,
        'lastmod'    => $now,
        'changefreq' => $meta['changefreq'],
        'priority'   => $meta['priority'],
    ];
}

// ── Blog posts ────────────────────────────────────────────────────────────────
$blogsUrl = hpBlogsApiBase() . '/blogs?brand=' . rawurlencode(HP_BRAND_SLUG) . '&status=published&per_page=500';
$payload  = hpFetchJson($blogsUrl);

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
            'priority'   => '0.7',
        ];
    }
}

// ── Output XML ────────────────────────────────────────────────────────────────
header('Content-Type: application/xml; charset=UTF-8');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($urls as $u) {
    $esc = static fn(string $s): string => htmlspecialchars($s, ENT_XML1 | ENT_QUOTES, 'UTF-8');
    echo "  <url>\n";
    echo '    <loc>'        . $esc($u['loc'])        . "</loc>\n";
    echo '    <lastmod>'    . $esc($u['lastmod'])    . "</lastmod>\n";
    echo '    <changefreq>' . $esc($u['changefreq']) . "</changefreq>\n";
    echo '    <priority>'   . $esc($u['priority'])   . "</priority>\n";
    echo "  </url>\n";
}

echo "</urlset>\n";
