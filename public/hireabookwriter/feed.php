<?php

/**
 * RSS Feed for Hire a Book Writer Blog
 * URL: /hireabookwriter/feed.php or /hireabookwriter/feed
 * Generates RSS 2.0 feed for Telegram and other RSS readers
 */

require_once __DIR__.'/inc/hab-api-service.php';

// Set content type to XML
header('Content-Type: application/xml; charset=utf-8');

// Fetch blogs from API
$apiBase = habApiBaseUrl();
$blogsApiBase = habBlogsApiBase();
$listUrl = $blogsApiBase.'/blogs?brand='.rawurlencode(HAB_BRAND_SLUG)
    .'&status=published&per_page=50'; // Last 50 blogs

$payload = habFetchJson($listUrl);

$blogs = [];
if (is_array($payload) && !empty($payload['success'])) {
    $blogs = $payload['data'] ?? [];
}

// RSS Feed Configuration
$_isLocalhost = in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1'], true)
    || str_starts_with($_SERVER['HTTP_HOST'], 'localhost:')
    || str_starts_with($_SERVER['HTTP_HOST'], '127.0.0.1:');
$_scheme = $_isLocalhost ? 'http' : ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http');

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
$requestPath = str_replace('\\', '/', $requestPath);
$brandPos = stripos($requestPath, '/hireabookwriter/');
if ($brandPos !== false) {
    $siteUrl = $_scheme . '://' . $_SERVER['HTTP_HOST'];
    $siteUrl .= substr($requestPath, 0, $brandPos + strlen('/hireabookwriter'));
} else {
    $siteUrl = $_isLocalhost 
        ? $_scheme . '://' . $_SERVER['HTTP_HOST'] . '/hireabookwriter'
        : 'https://hireabookwriter.com';
}

$feedTitle = 'Hire a Book Writer - Blog';
$feedDescription = 'Latest articles, tips, and insights on book writing, ghostwriting, editing, publishing, and author services from Hire a Book Writer.';
$feedLanguage = 'en-us';
$feedCopyright = 'Copyright ' . date('Y') . ' Hire a Book Writer';
$feedImage = $siteUrl . '/assets/images/header-logo.webp';

// Build date (latest blog or now)
$buildDate = date(DATE_RFC2822);
if (!empty($blogs) && !empty($blogs[0]['created_at'])) {
    $buildDate = date(DATE_RFC2822, strtotime($blogs[0]['created_at']));
}

// Helper function to get media URL
function habMediaUrl(?string $path): string
{
    if ($path === null || $path === '') {
        return '';
    }
    if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
        return $path;
    }
    
    $apiBase = habApiBaseUrl();
    $cmsBase = preg_replace('#/api/v1$#', '', $apiBase);
    return rtrim($cmsBase, '/') . '/' . ltrim($path, '/');
}

// Start XML output
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<rss version="2.0" 
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?= htmlspecialchars($feedTitle, ENT_XML1, 'UTF-8') ?></title>
        <link><?= htmlspecialchars($siteUrl, ENT_XML1, 'UTF-8') ?></link>
        <description><?= htmlspecialchars($feedDescription, ENT_XML1, 'UTF-8') ?></description>
        <language><?= htmlspecialchars($feedLanguage, ENT_XML1, 'UTF-8') ?></language>
        <copyright><?= htmlspecialchars($feedCopyright, ENT_XML1, 'UTF-8') ?></copyright>
        <lastBuildDate><?= htmlspecialchars($buildDate, ENT_XML1, 'UTF-8') ?></lastBuildDate>
        <atom:link href="<?= htmlspecialchars($siteUrl . '/feed.php', ENT_XML1, 'UTF-8') ?>" rel="self" type="application/rss+xml" />
        <image>
            <url><?= htmlspecialchars($feedImage, ENT_XML1, 'UTF-8') ?></url>
            <title><?= htmlspecialchars($feedTitle, ENT_XML1, 'UTF-8') ?></title>
            <link><?= htmlspecialchars($siteUrl, ENT_XML1, 'UTF-8') ?></link>
        </image>

<?php foreach ($blogs as $blog) {
    $blogSlug = $blog['slug'] ?? '';
    $blogTitle = $blog['title'] ?? 'Untitled';
    $blogUrl = $siteUrl . '/blog-detail?slug=' . $blogSlug;
    
    // Get description
    $blogDescription = '';
    if (!empty($blog['short_description'])) {
        $blogDescription = strip_tags($blog['short_description']);
    } elseif (!empty($blog['content'])) {
        $blogDescription = mb_substr(strip_tags($blog['content']), 0, 300);
    }
    
    // Get full content
    $blogContent = $blog['content'] ?? $blogDescription;
    
    // Get image
    $blogImage = '';
    if (!empty($blog['featured_image'])) {
        $blogImage = $blog['featured_image'];
        if (!str_starts_with($blogImage, 'http')) {
            $blogImage = habMediaUrl($blogImage);
        }
    }
    
    // Get author
    $blogAuthor = $blog['author'] ?? ($blog['user']['name'] ?? 'Hire a Book Writer');
    
    // Get date
    $blogDate = !empty($blog['created_at']) 
        ? date(DATE_RFC2822, strtotime($blog['created_at'])) 
        : date(DATE_RFC2822);
    
    // Create GUID (unique identifier)
    $guid = $blogUrl;
    
    // Add image to content if exists
    if ($blogImage) {
        $blogContent = '<img src="' . htmlspecialchars($blogImage, ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($blogTitle, ENT_QUOTES, 'UTF-8') . '" style="max-width:100%;height:auto;margin-bottom:15px;" />' . $blogContent;
    }
?>
        <item>
            <title><?= htmlspecialchars($blogTitle, ENT_XML1, 'UTF-8') ?></title>
            <link><?= htmlspecialchars($blogUrl, ENT_XML1, 'UTF-8') ?></link>
            <description><![CDATA[<?= $blogDescription ?>]]></description>
            <content:encoded><![CDATA[<?= $blogContent ?>]]></content:encoded>
            <dc:creator><?= htmlspecialchars($blogAuthor, ENT_XML1, 'UTF-8') ?></dc:creator>
            <pubDate><?= htmlspecialchars($blogDate, ENT_XML1, 'UTF-8') ?></pubDate>
            <guid isPermaLink="true"><?= htmlspecialchars($guid, ENT_XML1, 'UTF-8') ?></guid>
<?php if ($blogImage) { ?>
            <enclosure url="<?= htmlspecialchars($blogImage, ENT_XML1, 'UTF-8') ?>" type="image/jpeg" />
<?php } ?>
        </item>
<?php } ?>

    </channel>
</rss>
