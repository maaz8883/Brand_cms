<?php

/**
 * Orbit Blog Listing Page
 * URL: /orbit/blogs
 * Fetches published blogs for the "orbit" brand from the Laravel API.
 */

require_once __DIR__.'/inc/orbit-api-service.php';

// ── Pagination ────────────────────────────────────────────────────────────────
$currentPage = max(1, (int) ($_GET['page'] ?? 1));
$perPage = 9;

// ── Fetch blogs from API ──────────────────────────────────────────────────────
$apiBase = orbitApiBaseUrl();
// The blogs API lives at /api/blogs (not /api/v1/blogs)
$blogsApiBase = preg_replace('#/api/v1$#', '/api', $apiBase);
$listUrl = $blogsApiBase.'/blogs?brand='.rawurlencode(ORBIT_BRAND_SLUG)
    .'&status=published&per_page='.$perPage.'&page='.$currentPage;

$payload = orbitFetchJson($listUrl);

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

// ── SEO (used by head.php) ────────────────────────────────────────────────────
$title = 'Blog | Orbit Book Publishers';
$discription = 'Explore expert articles, tips, and insights on book publishing, writing, editing, and marketing from Orbit Book Publishers.';
$robots = 'INDEX, FOLLOW';
$class = 'blogs-page';
$script = '';
?>

<!-- ── Hero Banner ─────────────────────────────────────────────────────────── -->
<section class="inner-banner lozad bg py-5" data-background-image="assets/img/new-banner-2.webp">
    <div class="container-lg py-5 mt-sm-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-10 mt-5">
                <h1 class="f-60 fw-700 main-head">Our <span class="px-2 bg-2 clr-l">Blog</span></h1>
                <p class="fw-500 f-20 main-head">
                    Expert insights on book publishing, writing, editing, and marketing — straight from the <?= htmlspecialchars($bname, ENT_QUOTES, 'UTF-8') ?> team.
                </p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- ── Blog Grid ───────────────────────────────────────────────────────────── -->
<section class="py-5">
    <div class="container-xl">

        <?php if (empty($blogs)) { ?>
            <div class="row justify-content-center text-center py-5">
                <div class="col-md-6">
                    <h2 class="clr-1 f-30 fw-700">No Posts Yet</h2>
                    <p>Check back soon — we're working on fresh content for you.</p>
                    <a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>" class="btn mt-3">Back to Home</a>
                </div>
            </div>
        <?php } else { ?>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
                <?php foreach ($blogs as $blog) {
                    $blogSlug = htmlspecialchars((string) ($blog['slug'] ?? ''), ENT_QUOTES, 'UTF-8');
                    $blogTitle = htmlspecialchars((string) ($blog['title'] ?? 'Untitled'), ENT_QUOTES, 'UTF-8');
                    $blogExcerpt = '';
                    if (! empty($blog['short_description'])) {
                        $blogExcerpt = htmlspecialchars(strip_tags((string) $blog['short_description']), ENT_QUOTES, 'UTF-8');
                    } elseif (! empty($blog['content'])) {
                        $blogExcerpt = htmlspecialchars(mb_substr(strip_tags((string) $blog['content']), 0, 140), ENT_QUOTES, 'UTF-8');
                        if (mb_strlen(strip_tags((string) $blog['content'])) > 140) {
                            $blogExcerpt .= '…';
                        }
                    }
                    $blogImage = ! empty($blog['featured_image']) ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8') : 'assets/img/article-side.webp';
                    // echo '<pre>';
                    // print_r($blogImage);
                    // echo '</pre>';
                    $blogAlt = ! empty($blog['image_alt_tag']) ? htmlspecialchars((string) $blog['image_alt_tag'], ENT_QUOTES, 'UTF-8') : $blogTitle;
                    $blogDate = ! empty($blog['created_at']) ? date('M j, Y', strtotime((string) $blog['created_at'])) : '';
                    $blogAuthor = htmlspecialchars((string) ($blog['author'] ?? ($blog['user']['name'] ?? '')), ENT_QUOTES, 'UTF-8');
                    $detailUrl = htmlspecialchars($base_url.'blog/'.$blogSlug, ENT_QUOTES, 'UTF-8');
                    ?>
                    <div class="col">
                        <article class="blog-card h-100 d-flex flex-column shadow-sm rounded overflow-hidden">
                            <a href="<?= $detailUrl ?>" class="blog-card__img-wrap d-block overflow-hidden" aria-label="<?= $blogTitle ?>">
                                <img class="lozad blog-card__img w-100"
                                    data-src="<?= $blogImage ?>"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                    alt="<?= $blogAlt ?>"
                                    width="600" height="380"
                                    loading="lazy">
                            </a>
                            <div class="blog-card__body p-4 d-flex flex-column flex-grow-1">
                                <?php if ($blogDate || $blogAuthor) { ?>
                                    <div class="blog-card__meta d-flex align-items-center gap-3 mb-2 f-14">
                                        <?php if ($blogDate) { ?>
                                            <span class="clr-1"><span class="icon-calendar me-1"></span><?= $blogDate ?></span>
                                        <?php } ?>
                                        <?php if ($blogAuthor) { ?>
                                            <span><span class="icon-user me-1"></span><?= $blogAuthor ?></span>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                <h2 class="blog-card__title f-20 fw-700 mb-2">
                                    <a href="<?= $detailUrl ?>" class="clr-dark"><?= $blogTitle ?></a>
                                </h2>
                                <?php if ($blogExcerpt) { ?>
                                    <p class="blog-card__excerpt f-15 mb-3 flex-grow-1"><?= $blogExcerpt ?></p>
                                <?php } ?>
                                <a href="<?= $detailUrl ?>" class="blog-card__read-more clr-1 fw-600 f-15 mt-auto">
                                    Read More <span class="icon-arrow-right ms-1"></span>
                                </a>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>

            <!-- ── Pagination ──────────────────────────────────────────────── -->
            <?php if ($totalPages > 1) { ?>
                <nav aria-label="Blog pagination" class="d-flex justify-content-center">
                    <ul class="pagination">
                        <?php if ($currentPage > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="<?= htmlspecialchars($base_url.'blogs?page='.($currentPage - 1), ENT_QUOTES, 'UTF-8') ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php for ($p = 1; $p <= $totalPages; $p++) { ?>
                            <li class="page-item <?= $p === $currentPage ? 'active' : '' ?>">
                                <a class="page-link" href="<?= htmlspecialchars($base_url.'blogs?page='.$p, ENT_QUOTES, 'UTF-8') ?>"><?= $p ?></a>
                            </li>
                        <?php } ?>

                        <?php if ($currentPage < $totalPages) { ?>
                            <li class="page-item">
                                <a class="page-link" href="<?= htmlspecialchars($base_url.'blogs?page='.($currentPage + 1), ENT_QUOTES, 'UTF-8') ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            <?php } ?>

        <?php } ?>

    </div>
</section>

<!-- ── CTA Strip ───────────────────────────────────────────────────────────── -->
<section class="py-5 bg-1 text-center">
    <div class="container-lg">
        <h2 class="clr-l fw-700 f-36 mb-3">Ready to Publish Your Book?</h2>
        <p class="clr-l f-18 mb-4">Let our experts guide you from manuscript to market.</p>
        <button class="btn btn-light fw-700 px-5" data-bs-toggle="modal" data-bs-target="#quote">Get Started Today</button>
    </div>
</section>

<style>
    .blog-card {
        transition: transform .2s, box-shadow .2s;
        background: #fff;
    }

    .blog-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, .12) !important;
    }

    .blog-card__img {
        height: 220px;
        object-fit: cover;
        transition: transform .4s;
    }

    .blog-card__img-wrap:hover .blog-card__img {
        transform: scale(1.04);
    }

    .blog-card__read-more {
        text-decoration: none;
    }

    .blog-card__read-more:hover {
        text-decoration: underline;
    }

    .inner-banner {
        min-height: 320px;
        display: flex;
        align-items: center;
    }

    .breadcrumb-item a {
        color: #fff;
    }

    .breadcrumb-item.active {
        color: rgba(255, 255, 255, .75);
    }

    .breadcrumb-item+.breadcrumb-item::before {
        color: rgba(255, 255, 255, .5);
    }

    .pagination .page-link {
        color: rgb(81, 223, 207);
    }

    .pagination .page-item.active .page-link {
        background-color: rgb(81, 223, 207);
        border-color: rgb(81, 223, 207);
        color: #fff;
    }
</style>
