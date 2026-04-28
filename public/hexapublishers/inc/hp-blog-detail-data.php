<?php

/**
 * Hexa Publishers — Blog detail data fetcher.
 * Included by index.php BEFORE inc/head.php so SEO vars are ready for meta.php.
 */

require_once __DIR__ . '/hp-api-config.php';
require_once __DIR__ . '/hp-api-service.php';

$hp_blog_slug_raw = isset($hp_blog_slug) ? (string) $hp_blog_slug : '';
if ($hp_blog_slug_raw === '') {
    $rp = str_replace('\\', '/', parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
    if (preg_match('#/blog/([^/?#]+)#i', $rp, $m)) {
        $hp_blog_slug_raw = $m[1];
    }
}

$hp_blog_data = null;
if ($hp_blog_slug_raw !== '') {
    $fetchUrl = hpBlogsApiBase() . '/blogs/' . rawurlencode($hp_blog_slug_raw);
    $payload  = hpFetchJson($fetchUrl);
    if (is_array($payload) && ! empty($payload['success']) && is_array($payload['data'] ?? null)) {
        $hp_blog_data = $payload['data'];
    }
}

if ($hp_blog_data === null) {
    // Don't redirect to 404 — show empty page instead so we can debug
    // header('Location: ' . $base_url . '404');
    // exit;
    $hp_blog_data = [
        'title'          => 'Blog Post Not Found',
        'content'        => '<p>Sorry, this blog post could not be loaded. Please try again later.</p>',
        'featured_image' => '',
        'slug'           => $hp_blog_slug_raw,
        'created_at'     => '',
        'author'         => '',
    ];
}

// ── SEO vars — picked up by meta.php via $activePage = 'blog-detail' ─────────
$hp_blog_seo_title = ! empty($hp_blog_data['title'])
    ? htmlspecialchars((string) $hp_blog_data['title'], ENT_QUOTES, 'UTF-8') . ' | ' . $bname
    : $bname . ' Blog';

$hp_blog_seo_desc = '';
if (! empty($hp_blog_data['short_description'])) {
    $hp_blog_seo_desc = htmlspecialchars(mb_substr(strip_tags((string) $hp_blog_data['short_description']), 0, 160), ENT_QUOTES, 'UTF-8');
} elseif (! empty($hp_blog_data['content'])) {
    $hp_blog_seo_desc = htmlspecialchars(mb_substr(strip_tags((string) $hp_blog_data['content']), 0, 160), ENT_QUOTES, 'UTF-8');
}

// ── JSON-LD BlogPosting schema ────────────────────────────────────────────────
$_hpBlogUrl    = rtrim((string) $url, '/') . '/blog/' . rawurlencode((string) ($hp_blog_data['slug'] ?? $hp_blog_slug_raw));
$_hpBlogImg    = (string) ($hp_blog_data['featured_image'] ?? '');
$_hpBlogDate   = (string) ($hp_blog_data['created_at'] ?? '');
$_hpBlogUpd    = (string) ($hp_blog_data['updated_at'] ?? $_hpBlogDate);
$_hpAuthor     = (string) ($hp_blog_data['author'] ?? ($hp_blog_data['user']['name'] ?? $bname));

$_hpSchema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        array_merge(
            [
                '@type' => 'BlogPosting',
                '@id' => $_hpBlogUrl . '#blogposting',
                'headline' => (string) ($hp_blog_data['title'] ?? ''),
                'description' => mb_substr(strip_tags((string) ($hp_blog_data['short_description'] ?? $hp_blog_data['content'] ?? '')), 0, 200),
                'url' => $_hpBlogUrl,
                'datePublished' => $_hpBlogDate,
                'dateModified' => $_hpBlogUpd,
                'author' => ['@type' => 'Person', 'name' => $_hpAuthor],
                'publisher' => [
                    '@type' => 'Organization',
                    '@id' => 'https://hexapublishers.com/#organization',
                    'name' => $bname,
                    'logo' => ['@type' => 'ImageObject', 'url' => 'https://hexapublishers.com/assets/img/logo-blck.webp']
                ],
                'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $_hpBlogUrl]
            ],
            $_hpBlogImg !== '' ? ['image' => ['@type' => 'ImageObject', 'url' => $_hpBlogImg]] : []
        ),
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',  'item' => rtrim((string) $url, '/')],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',  'item' => rtrim((string) $url, '/') . '/blogs'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => (string) ($hp_blog_data['title'] ?? ''), 'item' => $_hpBlogUrl],
        ]],
    ],
];
$hp_blog_schema_script = '<script type="application/ld+json">' . json_encode($_hpSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
