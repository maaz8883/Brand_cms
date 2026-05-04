<?php

declare(strict_types=1);

require_once __DIR__ . '/inc/hab-api-config.php';
require_once __DIR__ . '/inc/hab-api-service.php';

$siteUrl = 'https://hireabookwriter.com/';
$now     = gmdate('c');

// ── Static pages ──────────────────────────────────────────────────────────────
$staticUrls = [
    ['loc' => $siteUrl,                                                    'priority' => '1.00', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'about-us',                                       'priority' => '0.80', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'contact',                                        'priority' => '0.80', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'ghostwriting-services',                          'priority' => '0.95', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'book-publication-company',                       'priority' => '0.95', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'book-editing-services',                          'priority' => '0.95', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'book-marketing-company',                         'priority' => '0.95', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'story-writing-services',                         'priority' => '0.90', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'autobiography-writing-services',                 'priority' => '0.90', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'novel-writing',                                  'priority' => '0.90', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'songwriting-services',                           'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'seo-content-writing-services',                   'priority' => '0.90', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'wiki-writing',                                   'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'memoir-writing-services',                        'priority' => '0.90', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'military-fiction-writing',                       'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'speech-writing',                                 'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'non-fiction-writing-services',                   'priority' => '0.90', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'script-writing-services',                        'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'movie-writing',                                  'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'rhyme-writing-services',                         'priority' => '0.80', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'narrative-writing-services',                     'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'screen-writing',                                 'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'comic-writing',                                  'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'fantasy-writing',                                'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'fiction-writing-servces',                        'priority' => '0.90', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'horror-book-writing',                            'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'science-fiction-writing',                        'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'action-adventure',                               'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'biography-writing-services',                     'priority' => '0.90', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'book-formatting',                                'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'children-book-editors',                          'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'book-proofreaders',                              'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'book-cover',                                     'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'translation',                                    'priority' => '0.80', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'audiobook-narrators',                            'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'book-trailer',                                   'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'book-illustration-services',                     'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'author-website-design',                          'priority' => '0.85', 'lastmod' => '2026-02-25'],
    ['loc' => $siteUrl . 'children-book',                                  'priority' => '0.85', 'lastmod' => '2026-02-25'],
    // Blog listing page
    ['loc' => $siteUrl . 'blogs',                                          'priority' => '0.80', 'lastmod' => $now, 'changefreq' => 'daily'],
];

$urls = [];
foreach ($staticUrls as $u) {
    $urls[] = [
        'loc'        => $u['loc'],
        'lastmod'    => $u['lastmod'] ?? $now,
        'changefreq' => $u['changefreq'] ?? 'monthly',
        'priority'   => $u['priority'],
    ];
}

// ── Dynamic blog posts from API ───────────────────────────────────────────────
$payload = habFetchJson(habBlogsApiBase() . '/blogs?brand=' . rawurlencode(HAB_BRAND_SLUG) . '&status=published&per_page=500');
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
            'loc'        => $siteUrl . 'blog/' . $slug,   // singular /blog/ — matches our routing
            'lastmod'    => is_string($lm) && $lm !== '' ? $lm : $now,
            'changefreq' => 'monthly',
            'priority'   => '0.70',
        ];
    }
}

// ── Output XML ────────────────────────────────────────────────────────────────
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
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
