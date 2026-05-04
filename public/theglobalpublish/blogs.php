<?php

/**
 * The Global Publishers — Blog Listing Page
 * URL: /theglobalpublish/blogs
 */

require_once __DIR__ . '/inc/tgp-api-config.php';
require_once __DIR__ . '/inc/tgp-api-service.php';

$currentPage = max(1, (int) ($_GET['blog_page'] ?? 1));
$perPage     = 9;

$listUrl = tgpBlogsApiBase() . '/blogs?brand=' . rawurlencode(TGP_BRAND_SLUG)
    . '&status=published&per_page=' . $perPage . '&page=' . $currentPage;

$payload    = tgpFetchJson($listUrl);
$blogs      = [];
$totalPages = 1;

if (is_array($payload) && ! empty($payload['success'])) {
    $blogs = $payload['data'] ?? [];
    if (isset($payload['meta'])) {
        $totalPages = (int) ($payload['meta']['last_page'] ?? 1);
    }
}

$blogListUrl = $blogs_url ?? (rtrim($base_url, '/') . '/blogs');
?>

<!-- Inner Banner -->
<section class="sec1 innerBanner AboutUsBanner tgp-blogs-banner">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <div class="innerBannerContent">
                    <h1>Our <span>Blog</span></h1>
                    <p>Expert insights on book publishing, ghostwriting, editing, and marketing — from the <?= htmlspecialchars($bname, ENT_QUOTES, 'UTF-8') ?> team.</p>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="tgp-blogs-section">
    <div class="container">

        <?php if (empty($blogs)) : ?>
            <div class="row justify-content-center text-center" style="padding:60px 0;">
                <div class="col-md-6">
                    <h2>No Posts Yet</h2>
                    <p>Check back soon — we're working on fresh content for you.</p>
                    <a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>" class="btnPrimary" style="display:inline-block;margin-top:15px;"><span>Back to Home</span></a>
                </div>
            </div>
        <?php else : ?>

            <div class="row">
                <?php foreach ($blogs as $blog) :
                    $blogSlug    = htmlspecialchars((string) ($blog['slug'] ?? ''), ENT_QUOTES, 'UTF-8');
                    $blogTitle   = htmlspecialchars((string) ($blog['title'] ?? 'Untitled'), ENT_QUOTES, 'UTF-8');
                    $blogExcerpt = '';
                    if (! empty($blog['short_description'])) {
                        $blogExcerpt = htmlspecialchars(strip_tags((string) $blog['short_description']), ENT_QUOTES, 'UTF-8');
                    } elseif (! empty($blog['content'])) {
                        $plain = strip_tags((string) $blog['content']);
                        $blogExcerpt = htmlspecialchars(mb_substr($plain, 0, 130), ENT_QUOTES, 'UTF-8');
                        if (mb_strlen($plain) > 130) {
                            $blogExcerpt .= '…';
                        }
                    }
                    $blogImage  = ! empty($blog['featured_image'])
                        ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8')
                        : 'assets/images/blog-placeholder.webp';
                    $blogAlt    = htmlspecialchars(
                        (string) (! empty($blog['image_alt_tag']) ? $blog['image_alt_tag'] : ($blog['title'] ?? 'Blog image')),
                        ENT_QUOTES,
                        'UTF-8'
                    );
                    $blogDate   = ! empty($blog['created_at']) ? date('M j, Y', strtotime((string) $blog['created_at'])) : '';
                    $blogAuthor = htmlspecialchars((string) ($blog['author'] ?? ($blog['user']['name'] ?? '')), ENT_QUOTES, 'UTF-8');
                    $detailUrl  = htmlspecialchars(rtrim($base_url, '/') . '/blog/' . $blogSlug, ENT_QUOTES, 'UTF-8');
                ?>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <article class="tgp-blog-card">
                            <a href="<?= $detailUrl ?>" class="tgp-blog-card__img-wrap" aria-label="<?= $blogTitle ?>">
                                <img src="<?= $blogImage ?>" alt="<?= $blogAlt ?>" class="tgp-blog-card__img" loading="lazy">
                            </a>
                            <div class="tgp-blog-card__body">
                                <?php if ($blogDate || $blogAuthor) : ?>
                                    <div class="tgp-blog-card__meta">
                                        <?php if ($blogDate) : ?>
                                            <span><?= $blogDate ?></span>
                                        <?php endif; ?>
                                        <?php if ($blogAuthor) : ?>
                                            <span>By <?= $blogAuthor ?></span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <h2 class="tgp-blog-card__title">
                                    <a href="<?= $detailUrl ?>"><?= $blogTitle ?></a>
                                </h2>
                                <?php if ($blogExcerpt) : ?>
                                    <p class="tgp-blog-card__excerpt"><?= $blogExcerpt ?></p>
                                <?php endif; ?>
                                <a href="<?= $detailUrl ?>" class="tgp-blog-card__readmore">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14" height="14" fill="currentColor">
                                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1) : ?>
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-center">
                        <ul class="pagination tgp-pagination">
                            <?php if ($currentPage > 1) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= $blogListUrl ?>?blog_page=<?= $currentPage - 1 ?>">&laquo;</a>
                                </li>
                            <?php endif; ?>
                            <?php for ($p = 1; $p <= $totalPages; $p++) : ?>
                                <li class="page-item <?= $p === $currentPage ? 'active' : '' ?>">
                                    <a class="page-link" href="<?= $blogListUrl ?>?blog_page=<?= $p ?>"><?= $p ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if ($currentPage < $totalPages) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= $blogListUrl ?>?blog_page=<?= $currentPage + 1 ?>">&raquo;</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

        <?php endif; ?>
    </div>
</section>

<style>
    .tgp-blogs-banner .innerBannerContent h1,
    .tgp-blogs-banner .innerBannerContent p,
    .tgp-blogs-banner .breadcrumb .breadcrumb-item,
    .tgp-blogs-banner .breadcrumb .breadcrumb-item a {
        color: #fff !important;
    }

    .tgp-blogs-banner .breadcrumb .breadcrumb-item.active {
        color: #fff !important;
        opacity: .9;
    }

    .tgp-blogs-section {
        padding: 60px 0;
    }

    .tgp-blog-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 16px rgba(0, 0, 0, .08);
        transition: transform .2s, box-shadow .2s;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .tgp-blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, .14);
    }

    .tgp-blog-card__img-wrap {
        display: block;
        overflow: hidden;
    }

    .tgp-blog-card__img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform .4s;
    }

    .tgp-blog-card__img-wrap:hover .tgp-blog-card__img {
        transform: scale(1.05);
    }

    .tgp-blog-card__body {
        padding: 22px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .tgp-blog-card__meta {
        font-size: 13px;
        color: #888;
        margin-bottom: 10px;
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .tgp-blog-card__title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .tgp-blog-card__title a {
        color: #1a1a2e !important;
        text-decoration: none !important;
    }

    .tgp-blog-card__title a:hover {
        color: #005d56 !important;
    }

    .tgp-blog-card__excerpt {
        font-size: 14px;
        color: #555 !important;
        line-height: 1.7;
        flex: 1;
        margin-bottom: 15px;
    }

    .tgp-blog-card__readmore {
        color: #005d56 !important;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none !important;
        margin-top: auto;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .tgp-blog-card__readmore:hover {
        text-decoration: underline !important;
    }

    .tgp-pagination .page-link {
        color: #005d56 !important;
        border-color: #dee2e6;
    }

    .tgp-pagination .page-link:hover {
        background-color: #005d56 !important;
        border-color: #005d56 !important;
        color: #fff !important;
    }

    .tgp-pagination .page-item.active .page-link {
        background-color: #005d56 !important;
        border-color: #005d56 !important;
        color: #fff !important;
        font-weight: 700;
    }
</style>
