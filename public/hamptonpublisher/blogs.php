<?php

/**
 * Hampton Publisher — Blog Listing Page
 * URL: /hamptonpublisher/blogs
 */

require_once __DIR__.'/inc/hp-api-config.php';
require_once __DIR__.'/inc/hp-api-service.php';

// ── Pagination ────────────────────────────────────────────────────────────────
$currentPage = max(1, (int) ($_GET['page'] ?? 1));
$perPage = 9;

// ── Fetch blogs from API ──────────────────────────────────────────────────────
$listUrl = hpBlogsApiBase().'/blogs?brand='.rawurlencode(HP_BRAND_SLUG)
    .'&status=published&per_page='.$perPage.'&page='.$currentPage;

$payload = hpFetchJson($listUrl);
$blogs = [];
$totalPages = 1;
$totalCount = 0;

if (is_array($payload) && ! empty($payload['success'])) {
    $blogs = $payload['data'] ?? [];
    if (isset($payload['meta'])) {
        $totalPages = (int) ($payload['meta']['last_page'] ?? 1);
        $totalCount = (int) ($payload['meta']['total'] ?? count($blogs));
    }
}

// ── Pagination base URL ───────────────────────────────────────────────────────
$blogListUrl = rtrim($base_url, '/').'/blogs';
?>

<!-- Inner Banner -->
<section class="inner-banner" style="background: url('images/inner.jpg') center/cover no-repeat; padding: 100px 0 60px;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h1 style="color:#fff; font-size:42px; font-weight:700;">Our <span style="color:#f5a623;">Blog</span></h1>
                <p style="color:#fff; font-size:18px; margin-top:10px;">
                    Expert insights on book publishing, writing, editing, and marketing — from the <?= htmlspecialchars($bname, ENT_QUOTES, 'UTF-8') ?> team.
                </p>
                <nav aria-label="breadcrumb" style="margin-top:15px;">
                    <ol class="breadcrumb justify-content-center" style="background:transparent; padding:0;">
                        <li class="breadcrumb-item"><a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>" style="color:#f5a623;">Home</a></li>
                        <li class="breadcrumb-item active" style="color:#fff;" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section style="padding: 60px 0; background:#f9f9f9;">
    <div class="container">

        <?php if (empty($blogs)) { ?>
            <div class="row justify-content-center text-center" style="padding:60px 0;">
                <div class="col-md-6">
                    <h2 style="color:#0e3193;">No Posts Yet</h2>
                    <p>Check back soon — we're working on fresh content for you.</p>
                    <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>" class="btn" style="background:#0e3193; color:#fff; padding:10px 30px; border-radius:5px; margin-top:15px; display:inline-block;">Back to Home</a>
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
                        $blogExcerpt = htmlspecialchars(mb_substr($plain, 0, 140), ENT_QUOTES, 'UTF-8');
                        if (mb_strlen($plain) > 140) {
                            $blogExcerpt .= '…';
                        }
                    }
                    $blogImage = ! empty($blog['featured_image'])
                        ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8')
                        : 'images/blog.jpg';
                    $blogAlt = htmlspecialchars(
                        (string) (! empty($blog['image_alt_tag']) ? $blog['image_alt_tag'] : ($blog['title'] ?? 'Blog image')),
                        ENT_QUOTES,
                        'UTF-8'
                    );
                    $blogDate = ! empty($blog['created_at']) ? date('M j, Y', strtotime((string) $blog['created_at'])) : '';
                    $blogAuthor = htmlspecialchars((string) ($blog['author'] ?? ($blog['user']['name'] ?? '')), ENT_QUOTES, 'UTF-8');
                    $detailUrl = htmlspecialchars(rtrim($base_url, '/').'/blog/'.$blogSlug, ENT_QUOTES, 'UTF-8');
                    ?>
                    <div class="col-md-4 col-sm-6 col-12 mb-4">
                        <article class="hp-blog-card">
                            <a href="<?= $detailUrl ?>" class="hp-blog-card__img-wrap" aria-label="<?= $blogTitle ?>">
                                <img src="<?= $blogImage ?>" alt="<?= $blogAlt ?>" class="hp-blog-card__img" loading="lazy">
                            </a>
                            <div class="hp-blog-card__body">
                                <?php if ($blogDate || $blogAuthor) { ?>
                                    <div class="hp-blog-card__meta">
                                        <?php if ($blogDate) { ?>
                                            <span><i class="fa fa-calendar"></i> <?= $blogDate ?></span>
                                        <?php } ?>
                                        <?php if ($blogAuthor) { ?>
                                            <span><i class="fa fa-user"></i> <?= $blogAuthor ?></span>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                <h2 class="hp-blog-card__title">
                                    <a href="<?= $detailUrl ?>"><?= $blogTitle ?></a>
                                </h2>
                                <?php if ($blogExcerpt) { ?>
                                    <p class="hp-blog-card__excerpt"><?= $blogExcerpt ?></p>
                                <?php } ?>
                                <a href="<?= $detailUrl ?>" class="hp-blog-card__readmore">
                                    Read More <i class="fa fa-arrow-right"></i>
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
                        <ul class="pagination hp-pagination">
                            <?php if ($currentPage > 1) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= $blogListUrl ?>?page=<?= $currentPage - 1 ?>" aria-label="Previous">&laquo;</a>
                                </li>
                            <?php } ?>
                            <?php for ($p = 1; $p <= $totalPages; $p++) { ?>
                                <li class="page-item <?= $p === $currentPage ? 'active' : '' ?>">
                                    <a class="page-link" href="<?= $blogListUrl ?>?page=<?= $p ?>"><?= $p ?></a>
                                </li>
                            <?php } ?>
                            <?php if ($currentPage < $totalPages) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= $blogListUrl ?>?page=<?= $currentPage + 1 ?>" aria-label="Next">&raquo;</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>

        <?php } ?>

    </div>
</section>

<!-- CTA Strip -->
<section style="background:#0e3193; padding:50px 0; text-align:center;">
    <div class="container">
        <h2 style="color:#fff; font-size:32px; font-weight:700; margin-bottom:10px;">Ready to Publish Your Book?</h2>
        <p style="color:rgba(255,255,255,.85); font-size:17px; margin-bottom:25px;">Let our experts guide you from manuscript to market.</p>
        <a href="#!" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
            style="background:#f5a623; color:#fff; padding:14px 40px; border-radius:5px; font-weight:700; font-size:16px; text-decoration:none; display:inline-block;">
            Get Started Today
        </a>
    </div>
</section>

<style>
    /* ── Blog Cards ── */
    .hp-blog-card {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(0, 0, 0, .08);
        transition: transform .2s, box-shadow .2s;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .hp-blog-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, .14);
    }

    .hp-blog-card__img-wrap {
        display: block;
        overflow: hidden;
    }

    .hp-blog-card__img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform .4s;
    }

    .hp-blog-card__img-wrap:hover .hp-blog-card__img {
        transform: scale(1.04);
    }

    .hp-blog-card__body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .hp-blog-card__meta {
        font-size: 13px;
        color: #888;
        margin-bottom: 10px;
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .hp-blog-card__meta i {
        margin-right: 4px;
        color: #0e3193;
    }

    .hp-blog-card__title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .hp-blog-card__title a {
        color: #1a1a1a;
        text-decoration: none;
    }

    .hp-blog-card__title a:hover {
        color: #0e3193;
    }

    .hp-blog-card__excerpt {
        font-size: 14px;
        color: #555;
        line-height: 1.7;
        flex: 1;
        margin-bottom: 15px;
    }

    .hp-blog-card__readmore {
        color: #0e3193;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        margin-top: auto;
    }

    .hp-blog-card__readmore:hover {
        text-decoration: underline;
    }

    .hp-blog-card__readmore i {
        margin-left: 5px;
    }

    /* ── Pagination ── */
    .hp-pagination .page-link {
        color: #0e3193;
        border-color: #dee2e6;
    }

    .hp-pagination .page-link:hover {
        background: #0e3193;
        border-color: #0e3193;
        color: #fff;
    }

    .hp-pagination .page-item.active .page-link {
        background: #0e3193;
        border-color: #0e3193;
        color: #fff;
    }
</style>
