<?php

/**
 * Blog detail data fetcher — included by index.php BEFORE head.php
 * so that $title / $discription / $robots are available for the <head>.
 *
 * Sets:
 *   $orbit_blog_data   — the blog array from API (or null on failure)
 *   $title, $discription, $robots, $class, $script — SEO vars for head.php
 */

// $orbit_blog_slug is set by index.php from the URL segment
$blogSlugRaw = isset($orbit_blog_slug) ? (string) $orbit_blog_slug : '';

// Fallback: parse from REQUEST_URI if somehow not set
if ($blogSlugRaw === '') {
    $rp = str_replace('\\', '/', parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
    if (preg_match('#/blog/([^/?#]+)#i', $rp, $m)) {
        $blogSlugRaw = $m[1];
    }
}

$orbit_blog_data = null;

if ($blogSlugRaw !== '') {
    $apiBase      = orbitApiBaseUrl();
    // Blogs API is at /api/blogs, not /api/v1/blogs
    $blogsApiBase = preg_replace('#/api/v1$#', '/api', $apiBase);
    $fetchUrl     = $blogsApiBase . '/blogs/' . rawurlencode($blogSlugRaw);

    $payload = orbitFetchJson($fetchUrl);

    if (is_array($payload) && ! empty($payload['success']) && is_array($payload['data'] ?? null)) {
        $orbit_blog_data = $payload['data'];
    }
}

// Redirect to 404 if blog not found
if ($orbit_blog_data === null) {
    header('Location: ' . $base_url . '404');
    exit;
}

// ── SEO vars for head.php ─────────────────────────────────────────────────────
$title = ! empty($orbit_blog_data['title'])
    ? htmlspecialchars((string) $orbit_blog_data['title'], ENT_QUOTES, 'UTF-8') . ' | ' . $bname
    : $bname . ' Blog';

$discription = '';
if (! empty($orbit_blog_data['short_description'])) {
    $discription = htmlspecialchars(
        mb_substr(strip_tags((string) $orbit_blog_data['short_description']), 0, 160),
        ENT_QUOTES,
        'UTF-8'
    );
} elseif (! empty($orbit_blog_data['content'])) {
    $discription = htmlspecialchars(
        mb_substr(strip_tags((string) $orbit_blog_data['content']), 0, 160),
        ENT_QUOTES,
        'UTF-8'
    );
}

$robots = 'INDEX, FOLLOW';
$class  = 'blog-detail-page';
$script = '';
