<?php

/**
 * Hexa Publishers — Blog Listing Page
 * URL: /hexapublishers/blogs
 */

require_once __DIR__ . '/inc/hp-api-config.php';
require_once __DIR__ . '/inc/hp-api-service.php';

$currentPage = max(1, (int) ($_GET['page'] ?? 1));
$perPage     = 9;

$listUrl = hpBlogsApiBase() . '/blogs?brand=' . rawurlencode(HP_BRAND_SLUG)
    . '&status=published&per_page=' . $perPage . '&page=' . $currentPage;

$payload    = hpFetchJson($listUrl);
$blogs      = [];
$totalPages = 1;

if (is_array($payload) && ! empty($payload['success'])) {
    $blogs = $payload['data'] ?? [];
    if (isset($payload['meta'])) {
        $totalPages = (int) ($payload['meta']['last_page'] ?? 1);
    }
}

$blogListUrl = rtrim($base_url, '/') . '/blogs';
?>

<!-- Inner Banner -->
<section class="inner-banner py-5 lozad bg" data-background-image="assets/img/banner.webp">
    <div class="container-xxl py-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-10 mt-4">
                <h1 class="fw-700 clr-l f-60">Our <span class="clr-1">Blog</span></h1>
                <p class="clr-l f-18 fw-500 mt-3">
                    Expert insights on book publishing, writing, editing, and marketing — from the <?= htmlspecialchars($bname, ENT_QUOTES, 'UTF-8') ?> team.
                </p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb justify-content-center" style="background:transparent;">
                        <li class="breadcrumb-item"><a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>" class="clr-1">Home</a></li>
                        <li class="breadcrumb-item active clr-l" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-5">
    <div class="container-xxl">

        <?php if (empty($blogs)) : ?>
            <div class="row justify-content-center text-center py-5">
                <div class="col-md-6">
                    <h2 class="clr-1 f-30 fw-700">No Posts Yet</h2>
                    <p>Check back soon — we're working on fresh content for you.</p>
                    <a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>" class="btn mt-3">Back to Home</a>
                </div>
            </div>
        <?php else : ?>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
                <?php foreach ($blogs as $blog) :
                    $blogSlug    = htmlspecialchars((string) ($blog['slug'] ?? ''), ENT_QUOTES, 'UTF-8');
                    $blogTitle   = htmlspecialchars((string) ($blog['title'] ?? 'Untitled'), ENT_QUOTES, 'UTF-8');
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
                    $blogImage  = ! empty($blog['featured_image'])
                        ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8')
                        : 'assets/img/banner.webp';
                    $blogAlt    = htmlspecialchars(
                        (string) (! empty($blog['image_alt_tag']) ? $blog['image_alt_tag'] : ($blog['title'] ?? 'Blog image')),
                        ENT_QUOTES,
                        'UTF-8'
                    );
                    $blogDate   = ! empty($blog['created_at']) ? date('M j, Y', strtotime((string) $blog['created_at'])) : '';
                    $blogAuthor = htmlspecialchars((string) ($blog['author'] ?? ($blog['user']['name'] ?? '')), ENT_QUOTES, 'UTF-8');
                    $detailUrl  = htmlspecialchars(rtrim($base_url, '/') . '/blog/' . $blogSlug, ENT_QUOTES, 'UTF-8');
                ?>
                    <div class="col">
                        <article class="hp-blog-card h-100 d-flex flex-column">
                            <a href="<?= $detailUrl ?>" class="hp-blog-card__img-wrap d-block overflow-hidden" aria-label="<?= $blogTitle ?>">
                                <img src="<?= $blogImage ?>" alt="<?= $blogAlt ?>" class="hp-blog-card__img w-100" loading="lazy">
                            </a>
                            <div class="hp-blog-card__body p-4 d-flex flex-column flex-grow-1">
                                <?php if ($blogDate || $blogAuthor) : ?>
                                    <div class="hp-blog-card__meta d-flex gap-3 mb-2 f-14">
                                        <?php if ($blogDate) : ?>
                                            <span class="clr-1"><span class="icon-calendar me-1"></span><?= $blogDate ?></span>
                                        <?php endif; ?>
                                        <?php if ($blogAuthor) : ?>
                                            <span><span class="icon-user me-1"></span><?= $blogAuthor ?></span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <h2 class="hp-blog-card__title f-20 fw-700 mb-2">
                                    <a href="<?= $detailUrl ?>"><?= $blogTitle ?></a>
                                </h2>
                                <?php if ($blogExcerpt) : ?>
                                    <p class="f-15 mb-3 flex-grow-1"><?= $blogExcerpt ?></p>
                                <?php endif; ?>
                                <a href="<?= $detailUrl ?>" class="clr-1 fw-600 f-15 mt-auto" style="text-decoration:none;">
                                    Read More <span class="icon-arrow-right ms-1"></span>
                                </a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1) : ?>
                <nav aria-label="Blog pagination" class="d-flex justify-content-center">
                    <ul class="pagination hp-pagination">
                        <?php if ($currentPage > 1) : ?>
                            <li class="page-item">
                                <a class="page-link" href="<?= $blogListUrl ?>?page=<?= $currentPage - 1 ?>">&laquo;</a>
                            </li>
                        <?php endif; ?>
                        <?php for ($p = 1; $p <= $totalPages; $p++) : ?>
                            <li class="page-item <?= $p === $currentPage ? 'active' : '' ?>">
                                <a class="page-link" href="<?= $blogListUrl ?>?page=<?= $p ?>"><?= $p ?></a>
                            </li>
                        <?php endfor; ?>
                        <?php if ($currentPage < $totalPages) : ?>
                            <li class="page-item">
                                <a class="page-link" href="<?= $blogListUrl ?>?page=<?= $currentPage + 1 ?>">&raquo;</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            <?php endif; ?>

        <?php endif; ?>
    </div>
</section>

<style>
    .hp-blog-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 16px rgba(0, 0, 0, .08);
        transition: transform .2s, box-shadow .2s;
    }

    .hp-blog-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 28px rgba(0, 0, 0, .14);
    }

    .hp-blog-card__img {
        height: 220px;
        object-fit: cover;
        transition: transform .4s;
    }

    .hp-blog-card__img-wrap:hover .hp-blog-card__img {
        transform: scale(1.04);
    }

    .hp-blog-card__meta {
        color: #888;
    }

    .hp-blog-card__title a {
        color: #1a1a1a;
        text-decoration: none;
    }

    .hp-blog-card__title a:hover {
        color: var(--clr-1);
    }

    .hp-pagination .page-link {
        color: var(--clr-1);
        border-color: #dee2e6;
    }

    .hp-pagination .page-link:hover,
    .hp-pagination .page-item.active .page-link {
        background: var(--clr-1);
        border-color: var(--clr-1);
        color: #fff;
    }

    .inner-banner {
        min-height: 300px;
        display: flex;
        align-items: center;
    }
</style>
