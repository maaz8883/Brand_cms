<?php

/**
 * Hampton Publisher — Blog detail data fetcher.
 * Included by index.php BEFORE inc/head.php so SEO vars are ready.
 *
 * Sets: $hp_blog_data, $hp_blog_slug_raw
 * Also sets: $hp_blog_title, $hp_blog_description for meta.php injection.
 */

require_once __DIR__ . '/hp-api-config.php';
require_once __DIR__ . '/hp-api-service.php';

// Slug comes from index.php routing ($hp_blog_slug) or fallback from URI
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
    header('Location: ' . $base_url . '404');
    exit;
}

// ── SEO vars used by meta.php ─────────────────────────────────────────────────
$hp_blog_title = ! empty($hp_blog_data['title'])
    ? htmlspecialchars((string) $hp_blog_data['title'], ENT_QUOTES, 'UTF-8') . ' | ' . $bname
    : $bname . ' Blog';

$hp_blog_description = '';
if (! empty($hp_blog_data['short_description'])) {
    $hp_blog_description = htmlspecialchars(
        mb_substr(strip_tags((string) $hp_blog_data['short_description']), 0, 160),
        ENT_QUOTES,
        'UTF-8'
    );
} elseif (! empty($hp_blog_data['content'])) {
    $hp_blog_description = htmlspecialchars(
        mb_substr(strip_tags((string) $hp_blog_data['content']), 0, 160),
        ENT_QUOTES,
        'UTF-8'
    );
}

// ── JSON-LD schema: use manual json_ld from admin if set, else auto-generate ─
$_manualJsonLd = trim((string) ($hp_blog_data['json_ld'] ?? ''));

if ($_manualJsonLd !== '') {
    // Admin ne manual JSON-LD set kiya hai — use it directly
    $hp_blog_schema_script = '<script type="application/ld+json">' . $_manualJsonLd . '</script>';
} else {
    // Auto-generate BlogPosting schema
    $_hpBlogUrl     = rtrim((string) $url, '/') . '/blog/' . rawurlencode((string) ($hp_blog_data['slug'] ?? $hp_blog_slug_raw));
    $_hpBlogImgUrl  = (string) ($hp_blog_data['featured_image'] ?? '');
    $_hpBlogDate    = (string) ($hp_blog_data['created_at'] ?? '');
    $_hpBlogUpd     = (string) ($hp_blog_data['updated_at'] ?? $_hpBlogDate);
    $_hpAuthorName  = (string) ($hp_blog_data['author'] ?? ($hp_blog_data['user']['name'] ?? $bname));

    $_hpSchema = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            array_merge(
                [
                    '@type'            => 'BlogPosting',
                    '@id'              => $_hpBlogUrl . '#blogposting',
                    'headline'         => (string) ($hp_blog_data['title'] ?? ''),
                    'description'      => mb_substr(strip_tags((string) ($hp_blog_data['short_description'] ?? $hp_blog_data['content'] ?? '')), 0, 200),
                    'url'              => $_hpBlogUrl,
                    'datePublished'    => $_hpBlogDate,
                    'dateModified'     => $_hpBlogUpd,
                    'author'           => ['@type' => 'Person', 'name' => $_hpAuthorName],
                    'publisher'        => [
                        '@type' => 'Organization',
                        '@id'   => 'https://hamptonpublishers.com/#organization',
                        'name'  => $bname,
                        'logo'  => ['@type' => 'ImageObject', 'url' => 'https://hamptonpublishers.com/images/logo2.png'],
                    ],
                    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $_hpBlogUrl],
                ],
                $_hpBlogImgUrl !== '' ? ['image' => ['@type' => 'ImageObject', 'url' => $_hpBlogImgUrl]] : []
            ),
            [
                '@type'           => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',  'item' => rtrim((string) $url, '/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',  'item' => rtrim((string) $url, '/') . '/blogs'],
                    ['@type' => 'ListItem', 'position' => 3, 'name' => (string) ($hp_blog_data['title'] ?? ''), 'item' => $_hpBlogUrl],
                ],
            ],
        ],
    ];

    $hp_blog_schema_script = '<script type="application/ld+json">'
        . json_encode($_hpSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        . '</script>';
}
