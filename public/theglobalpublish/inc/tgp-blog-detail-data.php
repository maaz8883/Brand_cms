<?php

/**
 * The Global Publishers — Blog detail data fetcher.
 * Included by index.php BEFORE head.php so SEO vars are ready.
 */

require_once __DIR__ . '/tgp-api-config.php';
require_once __DIR__ . '/tgp-api-service.php';

$tgp_blog_slug_raw = isset($tgp_blog_slug) ? (string) $tgp_blog_slug : '';
if ($tgp_blog_slug_raw === '') {
    $rp = str_replace('\\', '/', parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
    if (preg_match('#/blog/([^/?#]+)#i', $rp, $m)) {
        $tgp_blog_slug_raw = $m[1];
    }
}

$tgp_blog_data = null;
if ($tgp_blog_slug_raw !== '') {
    $payload = tgpFetchJson(tgpBlogsApiBase() . '/blogs/' . rawurlencode($tgp_blog_slug_raw));
    if (is_array($payload) && ! empty($payload['success']) && is_array($payload['data'] ?? null)) {
        $tgp_blog_data = $payload['data'];
    }
}

if ($tgp_blog_data === null) {
    header('Location: ' . $base_url . '404');
    exit;
}

// ── SEO vars for head.php ─────────────────────────────────────────────────────
$tgp_blog_seo_title = ! empty($tgp_blog_data['title'])
    ? htmlspecialchars((string) $tgp_blog_data['title'], ENT_QUOTES, 'UTF-8') . ' | ' . $bname
    : $bname . ' Blog';

$tgp_blog_seo_desc = '';
if (! empty($tgp_blog_data['short_description'])) {
    $tgp_blog_seo_desc = htmlspecialchars(mb_substr(strip_tags((string) $tgp_blog_data['short_description']), 0, 160), ENT_QUOTES, 'UTF-8');
} elseif (! empty($tgp_blog_data['content'])) {
    $tgp_blog_seo_desc = htmlspecialchars(mb_substr(strip_tags((string) $tgp_blog_data['content']), 0, 160), ENT_QUOTES, 'UTF-8');
}

// ── JSON-LD BlogPosting schema ────────────────────────────────────────────────
$_tgpBlogUrl  = rtrim((string) $url, '/') . '/blog/' . rawurlencode((string) ($tgp_blog_data['slug'] ?? $tgp_blog_slug_raw));
$_tgpBlogImg  = (string) ($tgp_blog_data['featured_image'] ?? '');
$_tgpDate     = (string) ($tgp_blog_data['created_at'] ?? '');
$_tgpUpd      = (string) ($tgp_blog_data['updated_at'] ?? $_tgpDate);
$_tgpAuthor   = (string) ($tgp_blog_data['author'] ?? ($tgp_blog_data['user']['name'] ?? $bname));

$_tgpSchema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        array_merge(
            [
                '@type' => 'BlogPosting',
                '@id' => $_tgpBlogUrl . '#blogposting',
                'headline' => (string) ($tgp_blog_data['title'] ?? ''),
                'description' => mb_substr(strip_tags((string) ($tgp_blog_data['short_description'] ?? $tgp_blog_data['content'] ?? '')), 0, 200),
                'url' => $_tgpBlogUrl,
                'datePublished' => $_tgpDate,
                'dateModified' => $_tgpUpd,
                'author' => ['@type' => 'Person', 'name' => $_tgpAuthor],
                'publisher' => [
                    '@type' => 'Organization',
                    '@id' => 'https://theglobalpublishers.com/#organization',
                    'name' => $bname,
                    'logo' => ['@type' => 'ImageObject', 'url' => 'https://theglobalpublishers.com/assets/images/logo.webp']
                ],
                'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $_tgpBlogUrl]
            ],
            $_tgpBlogImg !== '' ? ['image' => ['@type' => 'ImageObject', 'url' => $_tgpBlogImg]] : []
        ),
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',  'item' => rtrim((string) $url, '/')],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',  'item' => rtrim((string) $url, '/') . '/blogs'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => (string) ($tgp_blog_data['title'] ?? ''), 'item' => $_tgpBlogUrl],
        ]],
    ],
];
$tgp_blog_schema_script = '<script type="application/ld+json">' . json_encode($_tgpSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
