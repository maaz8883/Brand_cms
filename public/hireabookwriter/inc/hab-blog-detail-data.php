<?php

/**
 * Hire a Book Writer — Blog detail data fetcher.
 * Included by index.php BEFORE head.php so SEO vars are ready.
 */

require_once __DIR__ . '/hab-api-config.php';
require_once __DIR__ . '/hab-api-service.php';

$hab_blog_slug_raw = isset($hab_blog_slug) ? (string) $hab_blog_slug : '';
if ($hab_blog_slug_raw === '') {
    $rp = str_replace('\\', '/', parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
    if (preg_match('#/blog/([^/?#]+)#i', $rp, $m)) {
        $hab_blog_slug_raw = $m[1];
    }
}

$hab_blog_data = null;
if ($hab_blog_slug_raw !== '') {
    $payload = habFetchJson(habBlogsApiBase() . '/blogs/' . rawurlencode($hab_blog_slug_raw));
    if (is_array($payload) && ! empty($payload['success']) && is_array($payload['data'] ?? null)) {
        $hab_blog_data = $payload['data'];
    }
}

if ($hab_blog_data === null) {
    header('Location: ' . $base_url . '404');
    exit;
}

// ── SEO vars for head.php ─────────────────────────────────────────────────────
$hab_blog_seo_title = ! empty($hab_blog_data['title'])
    ? htmlspecialchars((string) $hab_blog_data['title'], ENT_QUOTES, 'UTF-8') . ' | ' . $bname
    : $bname . ' Blog';

$hab_blog_seo_desc = '';
if (! empty($hab_blog_data['short_description'])) {
    $hab_blog_seo_desc = htmlspecialchars(mb_substr(strip_tags((string) $hab_blog_data['short_description']), 0, 160), ENT_QUOTES, 'UTF-8');
} elseif (! empty($hab_blog_data['content'])) {
    $hab_blog_seo_desc = htmlspecialchars(mb_substr(strip_tags((string) $hab_blog_data['content']), 0, 160), ENT_QUOTES, 'UTF-8');
}

// ── JSON-LD schema: use manual json_ld from admin if set, else auto-generate ─
$_manualJsonLd = trim((string) ($hab_blog_data['json_ld'] ?? ''));

if ($_manualJsonLd !== '') {
    $hab_blog_schema_script = '<script type="application/ld+json">' . $_manualJsonLd . '</script>';
} else {
    $_habBlogUrl   = rtrim((string) $url, '/') . '/blog/' . rawurlencode((string) ($hab_blog_data['slug'] ?? $hab_blog_slug_raw));
    $_habBlogImg   = (string) ($hab_blog_data['featured_image'] ?? '');
    $_habBlogDate  = (string) ($hab_blog_data['created_at'] ?? '');
    $_habBlogUpd   = (string) ($hab_blog_data['updated_at'] ?? $_habBlogDate);
    $_habAuthor    = (string) ($hab_blog_data['author'] ?? ($hab_blog_data['user']['name'] ?? $bname));

    $_habSchema = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            array_merge(
                [
                    '@type' => 'BlogPosting',
                    '@id' => $_habBlogUrl . '#blogposting',
                    'headline' => (string) ($hab_blog_data['title'] ?? ''),
                    'description' => mb_substr(strip_tags((string) ($hab_blog_data['short_description'] ?? $hab_blog_data['content'] ?? '')), 0, 200),
                    'url' => $_habBlogUrl,
                    'datePublished' => $_habBlogDate,
                    'dateModified' => $_habBlogUpd,
                    'author' => ['@type' => 'Person', 'name' => $_habAuthor],
                    'publisher' => [
                        '@type' => 'Organization',
                        '@id' => 'https://hireabookwriter.com/#organization',
                        'name' => $bname,
                        'logo' => ['@type' => 'ImageObject', 'url' => 'https://hireabookwriter.com/assets/images/header-logo.webp']
                    ],
                    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $_habBlogUrl]
                ],
                $_habBlogImg !== '' ? ['image' => ['@type' => 'ImageObject', 'url' => $_habBlogImg]] : []
            ),
            ['@type' => 'BreadcrumbList', 'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',  'item' => rtrim((string) $url, '/')],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',  'item' => rtrim((string) $url, '/') . '/blogs'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => (string) ($hab_blog_data['title'] ?? ''), 'item' => $_habBlogUrl],
            ]],
        ],
    ];
    $hab_blog_schema_script = '<script type="application/ld+json">' . json_encode($_habSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}
