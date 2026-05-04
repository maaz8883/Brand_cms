<?php

/**
 * Hire a Book Writer — Blog Listing Page
 * URL: /hireabookwriter/blogs
 */

require_once __DIR__.'/inc/hab-api-config.php';
require_once __DIR__.'/inc/hab-api-service.php';

$currentPage = max(1, (int) ($_GET['page'] ?? 1));
$perPage = 9;

$listUrl = habBlogsApiBase().'/blogs?brand='.rawurlencode(HAB_BRAND_SLUG)
    .'&status=published&per_page='.$perPage.'&page='.$currentPage;

$payload = habFetchJson($listUrl);
$blogs = [];
$totalPages = 1;

if (is_array($payload) && ! empty($payload['success'])) {
    $blogs = $payload['data'] ?? [];
    if (isset($payload['meta'])) {
        $totalPages = (int) ($payload['meta']['last_page'] ?? 1);
    }
}

$blogListUrl = rtrim($base_url, '/').'/blogs';
?>

<!-- Inner Banner -->
<section class="inner-banner all-section" style="background:url('assets/images/about-banner.webp') center/cover no-repeat; padding:80px 0 50px; position:relative;">
    <div style="position:absolute;inset:0;background:rgba(0,0,0,.55);"></div>
    <div class="container" style="position:relative;z-index:1;">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h1 style="color:#fff;font-size:42px;font-weight:700;margin-bottom:12px;">
                    Our <span style="color:#f5a623;">Blog</span>
                </h1>
                <p style="color:rgba(255,255,255,.9);font-size:17px;margin-bottom:15px;">
                    Expert insights on ghostwriting, book publishing, editing, and marketing — from the <?= htmlspecialchars($bname, ENT_QUOTES, 'UTF-8') ?> team.
                </p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background:transparent;padding:0;">
                        <li class="breadcrumb-item"><a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>" style="color:#f5a623;">Home</a></li>
                        <li class="breadcrumb-item active" style="color:rgba(255,255,255,.75);" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="all-section" style="padding:60px 0;background:#f8f9fa;">
    <div class="container">

        <?php if (empty($blogs)) { ?>
            <div class="row justify-content-center text-center" style="padding:60px 0;">
                <div class="col-md-6">
                    <h2 style="font-size:28px;font-weight:700;margin-bottom:15px;">No Posts Yet</h2>
                    <p>Check back soon — we're working on fresh content for you.</p>
                    <a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>" class="theme_btn" style="display:inline-block;margin-top:15px;">Back to Home</a>
                </div>
            </div>
        <?php } else { ?>

            <div class="row">
                <?php foreach ($blogs as $blog) {
                    $blogSlug = htmlspecialchars((string) ($blog['slug'] ?? ''), ENT_QUOTES, 'UTF-8');
                    $blogTitle = htmlspecialchars((string) ($blog['title'] ?? 'Untitled'), ENT_QUOTES, 'UTF-8');
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
                    $blogImage = ! empty($blog['featured_image'])
                        ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8')
                        : 'assets/images/blog-placeholder.webp';
                    $blogAlt = htmlspecialchars(
                        (string) (! empty($blog['image_alt_tag']) ? $blog['image_alt_tag'] : ($blog['title'] ?? 'Blog image')),
                        ENT_QUOTES,
                        'UTF-8'
                    );
                    $blogDate = ! empty($blog['created_at']) ? date('M j, Y', strtotime((string) $blog['created_at'])) : '';
                    $blogAuthor = htmlspecialchars((string) ($blog['author'] ?? ($blog['user']['name'] ?? '')), ENT_QUOTES, 'UTF-8');
                    $detailUrl = htmlspecialchars(rtrim($base_url, '/').'/blog/'.$blogSlug, ENT_QUOTES, 'UTF-8');
                    ?>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <article class="hab-blog-card">
                            <a href="<?= $detailUrl ?>" class="hab-blog-card__img-wrap" aria-label="<?= $blogTitle ?>">
                                <img src="<?= $blogImage ?>" alt="<?= $blogAlt ?>" class="hab-blog-card__img" loading="lazy">
                            </a>
                            <div class="hab-blog-card__body">
                                <?php if ($blogDate || $blogAuthor) { ?>
                                    <div class="hab-blog-card__meta">
                                        <?php if ($blogDate) { ?>
                                            <span><i class="fas fa-calendar-alt"></i> <?= $blogDate ?></span>
                                        <?php } ?>
                                        <?php if ($blogAuthor) { ?>
                                            <span><i class="fas fa-user"></i> <?= $blogAuthor ?></span>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                <h2 class="hab-blog-card__title">
                                    <a href="<?= $detailUrl ?>"><?= $blogTitle ?></a>
                                </h2>
                                <?php if ($blogExcerpt) { ?>
                                    <p class="hab-blog-card__excerpt"><?= $blogExcerpt ?></p>
                                <?php } ?>
                                <a href="<?= $detailUrl ?>" class="hab-blog-card__readmore">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1) { ?>
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-center">
                        <ul class="pagination hab-pagination">
                            <?php if ($currentPage > 1) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= $blogListUrl ?>?page=<?= $currentPage - 1 ?>">&laquo;</a>
                                </li>
                            <?php } ?>
                            <?php for ($p = 1; $p <= $totalPages; $p++) { ?>
                                <li class="page-item <?= $p === $currentPage ? 'active' : '' ?>">
                                    <a class="page-link" href="<?= $blogListUrl ?>?page=<?= $p ?>"><?= $p ?></a>
                                </li>
                            <?php } ?>
                            <?php if ($currentPage < $totalPages) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= $blogListUrl ?>?page=<?= $currentPage + 1 ?>">&raquo;</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>

        <?php } ?>
    </div>
</section>

<!-- CTA -->
<section class="all-section" style="background:#1a1a2e;padding:50px 0;text-align:center;">
    <div class="container">
        <h2 style="color:#fff;font-size:32px;font-weight:700;margin-bottom:10px;">Ready to Write Your Book?</h2>
        <p style="color:rgba(255,255,255,.85);font-size:17px;margin-bottom:25px;">Professional ghostwriting, publishing, and marketing — all under one roof.</p>
        <a href="javascript:void(0)" onclick="toggleChat()" class="theme_btn">Let's Talk</a>
    </div>
</section>

<style>
    .hab-blog-card {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 14px rgba(0, 0, 0, .08);
        transition: transform .2s, box-shadow .2s;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .hab-blog-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, .14);
    }

    .hab-blog-card__img-wrap {
        display: block;
        overflow: hidden;
    }

    .hab-blog-card__img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform .4s;
    }

    .hab-blog-card__img-wrap:hover .hab-blog-card__img {
        transform: scale(1.04);
    }

    .hab-blog-card__body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .hab-blog-card__meta {
        font-size: 13px;
        color: #888;
        margin-bottom: 10px;
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .hab-blog-card__meta i {
        margin-right: 4px;
    }

    .hab-blog-card__title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .hab-blog-card__title a {
        color: #1a1a2e;
        text-decoration: none;
    }

    .hab-blog-card__title a:hover {
        color: #f5a623;
    }

    .hab-blog-card__excerpt {
        font-size: 14px;
        color: #555;
        line-height: 1.7;
        flex: 1;
        margin-bottom: 15px;
    }

    .hab-blog-card__readmore {
        color: #f5a623;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        margin-top: auto;
    }

    .hab-blog-card__readmore:hover {
        text-decoration: underline;
    }

    .hab-pagination .page-link {
        color: #1a1a2e;
        border-color: #dee2e6;
    }

    .hab-pagination .page-link:hover {
        background-color: #f5a623 !important;
        border-color: #f5a623 !important;
        color: #fff !important;
    }

    .hab-pagination .page-item.active .page-link {
        background-color: #f5a623 !important;
        border-color: #f5a623 !important;
        color: #fff !important;
        font-weight: 700;
    }
</style>
