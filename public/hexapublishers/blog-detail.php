<?php

/**
 * Hexa Publishers — Blog Detail Page
 * URL: /hexapublishers/blog/{slug}
 * Data pre-fetched in inc/hp-blog-detail-data.php (before head.php).
 */

$blog = $hp_blog_data ?? null;
if ($blog === null) {
    header('Location: ' . $base_url . '404');
    exit;
}

$blogTitle    = htmlspecialchars((string) ($blog['title'] ?? 'Untitled'), ENT_QUOTES, 'UTF-8');
$blogContent  = $blog['content'] ?? '';
$blogImage    = ! empty($blog['featured_image'])
    ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8')
    : '';
$blogAlt      = htmlspecialchars(
    (string) (! empty($blog['image_alt_tag']) ? $blog['image_alt_tag'] : ($blog['title'] ?? 'Blog image')),
    ENT_QUOTES,
    'UTF-8'
);
$blogDate     = ! empty($blog['created_at']) ? date('F j, Y', strtotime((string) $blog['created_at'])) : '';
$blogAuthor   = htmlspecialchars((string) ($blog['author'] ?? ($blog['user']['name'] ?? '')), ENT_QUOTES, 'UTF-8');
$blogSlugSafe = htmlspecialchars((string) ($blog['slug'] ?? ($hp_blog_slug_raw ?? '')), ENT_QUOTES, 'UTF-8');
$canonicalUrl = htmlspecialchars(rtrim((string) $url, '/') . '/blog/' . $blogSlugSafe, ENT_QUOTES, 'UTF-8');
$blogsUrl     = htmlspecialchars(rtrim((string) $base_url, '/') . '/blogs', ENT_QUOTES, 'UTF-8');

// Banner background — use featured image if available, else site default
$bannerBg = $blogImage ?: getImagePath('assets/img/', 'banner');
?>

<!-- ── Inner Banner (same pattern as component.php) ─────────────────────────── -->
<section class="banner bg lozad" data-background-image="<?= $bannerBg ?>">
    <div class="overlay-light py-5">
        <div class="container-fluid py-5">
            <div class="row justify-content-center text-center align-items-center pt-5">
                <div class="col-md-8">
                    <span class="clr-1 fw-700 f-24">Blog</span>
                    <h1 class="f-55 fw-700"><?= $blogTitle ?></h1>
                    <nav aria-label="breadcrumb" class="mt-3">
                        <ol class="breadcrumb justify-content-center" style="background:transparent;">
                            <li class="breadcrumb-item">
                                <a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?= $blogsUrl ?>">Blog</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $blogTitle ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── Article Body ──────────────────────────────────────────────────────────── -->
<section class="py-5">
    <div class="container-xxl">
        <div class="row justify-content-center g-5">

            <!-- Main Content -->
            <div class="col-lg-8">

                <!-- Meta bar -->
                <?php if ($blogDate || $blogAuthor) : ?>
                    <div class="d-flex flex-wrap gap-4 mb-4 pb-3 border-bottom f-15">
                        <?php if ($blogDate) : ?>
                            <span class="clr-1 fw-600">
                                <i class="icon-calendar me-1"></i><?= $blogDate ?>
                            </span>
                        <?php endif; ?>
                        <?php if ($blogAuthor) : ?>
                            <span class="fw-500">
                                <i class="icon-user me-1"></i>By <?= $blogAuthor ?>
                            </span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- Featured Image -->
                <?php if ($blogImage) : ?>
                    <figure class="mb-4">
                        <img src="<?= $blogImage ?>"
                            alt="<?= $blogAlt ?>"
                            class="img-fluid rounded-3 w-100"
                            style="max-height:460px;object-fit:cover;"
                            loading="eager">
                    </figure>
                <?php endif; ?>

                <!-- Content -->
                <div class="blog-article-body">
                    <?= $blogContent ?>
                </div>

                <!-- Share -->
                <div class="d-flex align-items-center gap-3 flex-wrap mt-5 pt-4 border-top">
                    <!-- <span class="fw-700 f-16">Share:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonicalUrl) ?>"
                        target="_blank" rel="noopener noreferrer"
                        class="btn btn-sm"
                        style="background:rgba(var(--clr-1),1);color:#fff;">
                        <span class="icon-Path-39336 me-1"></span> Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?= urlencode($canonicalUrl) ?>&text=<?= urlencode($blogTitle) ?>"
                        target="_blank" rel="noopener noreferrer"
                        class="btn btn-sm"
                        style="background:#1da1f2;color:#fff;">
                        𝕏 Twitter
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($canonicalUrl) ?>&title=<?= urlencode($blogTitle) ?>"
                        target="_blank" rel="noopener noreferrer"
                        class="btn btn-sm"
                        style="background:#0077b5;color:#fff;">
                        in LinkedIn
                    </a> -->
                </div>

                <div class="mt-4">
                    <a href="<?= $blogsUrl ?>" class="clr-1 fw-600" style="text-decoration:none;">
                        ← Back to Blog
                    </a>
                </div>

            </div>

            <!-- Sidebar -->
            <!-- <aside class="col-lg-4">


                <div class="rounded-3 p-4 text-center mb-4"
                    style="background:rgba(var(--clr-1),1);">
                    <h3 class="clr-l fw-700 f-22 mb-2">Ready to Publish?</h3>
                    <p class="clr-l f-15 mb-3" style="opacity:.9;">
                        Let our experts guide you from manuscript to market.
                    </p>
                    <button class="btn w-100 fw-700"
                        style="background:#fff;color:rgba(var(--clr-1),1);"
                        type="button" data-bs-toggle="modal" data-bs-target="#quote">
                        Get a Free Quote
                    </button>
                </div>


                <div class="rounded-3 border p-4">
                    <h3 class="clr-1 fw-700 f-18 mb-3">Contact Us</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                            <a href="tel:<?= htmlspecialchars($no, ENT_QUOTES, 'UTF-8') ?>"
                                class="d-flex align-items-center gap-2 fw-500"
                                style="color:inherit;text-decoration:none;">
                                <span class="icon-Group-15957 clr-1 f-20"></span>
                                <?= htmlspecialchars($no, ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?= htmlspecialchars($cta_email, ENT_QUOTES, 'UTF-8') ?>"
                                class="d-flex align-items-center gap-2 fw-500"
                                style="color:inherit;text-decoration:none;">
                                <span class="icon-Group-15959 clr-1 f-20"></span>
                                <?= htmlspecialchars($cta_email, ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside> -->

        </div>
    </div>
</section>

<style>
    /* Blog article content styling */
    .blog-article-body {
        font-size: 1.05rem;
        line-height: 1.85;
    }

    .blog-article-body h2,
    .blog-article-body h3,
    .blog-article-body h4 {
        color: rgba(var(--clr-1), 1);
        margin-top: 1.8rem;
        margin-bottom: .8rem;
        font-weight: 700;
    }

    .blog-article-body p {
        margin-bottom: 1.2rem;
    }

    .blog-article-body ul,
    .blog-article-body ol {
        padding-left: 1.5rem;
        margin-bottom: 1.2rem;
    }

    .blog-article-body img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1rem 0;
    }

    .blog-article-body blockquote {
        border-left: 4px solid rgba(var(--clr-1), 1);
        padding: .8rem 1.2rem;
        background: rgba(var(--clr-1), .05);
        border-radius: 0 8px 8px 0;
        font-style: italic;
        margin: 1.5rem 0;
    }

    .blog-article-body a {
        color: rgba(var(--clr-1), 1);
        text-decoration: underline;
    }

    .blog-article-body table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1.2rem;
    }

    .blog-article-body table th,
    .blog-article-body table td {
        border: 1px solid #dee2e6;
        padding: .5rem .75rem;
    }

    .blog-article-body table th {
        background: rgba(var(--clr-1), .08);
        font-weight: 700;
    }
</style>
