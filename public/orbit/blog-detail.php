<?php

/**
 * Orbit Blog Detail Page
 * URL: /orbit/blog/{slug}
 *
 * Data is pre-fetched in inc/blog-detail-data.php (included by index.php
 * before head.php) and stored in $orbit_blog_data.
 */

// $orbit_blog_data is already set by inc/blog-detail-data.php
$blog = $orbit_blog_data ?? null;

if ($blog === null) {
    // Shouldn't reach here (blog-detail-data.php redirects on null), but guard anyway
    header('Location: '.$base_url.'404');
    exit;
}

// ── View helpers ──────────────────────────────────────────────────────────────
$blogTitle = htmlspecialchars((string) ($blog['title'] ?? 'Untitled'), ENT_QUOTES, 'UTF-8');
$blogContent = $blog['content'] ?? '';   // raw HTML — rendered as-is
$blogImage = ! empty($blog['featured_image'])
    ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8')
    : '';
$blogAlt = ! empty($blog['image_alt_tag'])
    ? htmlspecialchars((string) $blog['image_alt_tag'], ENT_QUOTES, 'UTF-8')
    : $blogTitle;
$blogDate = ! empty($blog['created_at'])
    ? date('F j, Y', strtotime((string) $blog['created_at']))
    : '';
$blogAuthor = htmlspecialchars(
    (string) ($blog['author'] ?? ($blog['user']['name'] ?? '')),
    ENT_QUOTES,
    'UTF-8'
);
$blogSlugSafe = htmlspecialchars(
    (string) ($blog['slug'] ?? ($orbit_blog_slug ?? '')),
    ENT_QUOTES,
    'UTF-8'
);
$canonicalUrl = htmlspecialchars($base_url.'blog/'.$blogSlugSafe, ENT_QUOTES, 'UTF-8');
?>

<!-- ── Hero Banner ─────────────────────────────────────────────────────────── -->
<section class="inner-banner lozad bg py-5"
    data-background-image="assets/img/new-banner-2.webp">
    <div class="container-lg py-5 mt-sm-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-10 mt-5">
                <h1 class="f-50 fw-700 main-head"><?= $blogTitle ?></h1>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= htmlspecialchars($base_url.'blogs', ENT_QUOTES, 'UTF-8') ?>">Blog</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $blogTitle ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- ── Article Body ────────────────────────────────────────────────────────── -->
<section class="py-5">
    <div class="container-xl">
        <div class="row justify-content-center">

            <!-- Main Content -->
            <div class="col-lg-8">
                <article class="blog-article">

                    <!-- Meta -->
                    <?php if ($blogDate || $blogAuthor) { ?>
                        <div class="blog-article__meta d-flex flex-wrap align-items-center gap-3 mb-4 f-15 border-bottom pb-3">
                            <?php if ($blogDate) { ?>
                                <span class="clr-1 fw-600">
                                    <span class="icon-calendar me-1"></span><?= $blogDate ?>
                                </span>
                            <?php } ?>
                            <?php if ($blogAuthor) { ?>
                                <span><span class="icon-user me-1"></span>By <?= $blogAuthor ?></span>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <!-- Featured Image -->
                    <?php if ($blogImage) { ?>
                        <figure class="blog-article__featured mb-4">
                            <img src="<?= $blogImage ?>"
                                alt="<?= $blogAlt ?>"
                                class="img-fluid rounded w-100"
                                width="900" height="500"
                                loading="eager">
                        </figure>
                    <?php } ?>

                    <!-- Content -->
                    <div class="blog-article__content">
                        <?= $blogContent ?>
                    </div>

                    <!-- Share -->
                    <div class="blog-article__share mt-5 pt-4 border-top d-flex align-items-center gap-3 flex-wrap">
                        <!-- <span class="fw-700 f-16">Share:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonicalUrl) ?>"
                            target="_blank" rel="noopener noreferrer"
                            class="btn btn-sm btn-outline-primary"
                            aria-label="Share on Facebook">
                            <span class="icon-fb me-1"></span> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?= urlencode($canonicalUrl) ?>&text=<?= urlencode($blogTitle) ?>"
                            target="_blank" rel="noopener noreferrer"
                            class="btn btn-sm btn-outline-dark"
                            aria-label="Share on Twitter / X">
                            𝕏 Twitter
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($canonicalUrl) ?>&title=<?= urlencode($blogTitle) ?>"
                            target="_blank" rel="noopener noreferrer"
                            class="btn btn-sm btn-outline-primary"
                            aria-label="Share on LinkedIn">
                            in LinkedIn
                        </a> -->
                    </div>

                </article>

                <!-- Back link -->
                <div class="mt-4">
                    <a href="<?= htmlspecialchars($base_url.'blogs', ENT_QUOTES, 'UTF-8') ?>"
                        class="clr-1 fw-600">
                        <span class="icon-arrow-left me-1"></span> Back to Blog
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <!-- <aside class="col-lg-4 mt-5 mt-lg-0" aria-label="Blog sidebar">

                
                <div class="sidebar-cta p-4 rounded text-center mb-4">
                    <h3 class="f-22 fw-700 mb-2 clr-l">Ready to Publish?</h3>
                    <p class="f-15 mb-3 clr-l">Let our experts guide you from manuscript to market.</p>
                    <button class="btn btn-light fw-700 w-100"
                        data-bs-toggle="modal" data-bs-target="#quote">
                        Get a Free Quote
                    </button>
                </div>

                
                <div class="sidebar-contact p-4 rounded border mb-4">
                    <h3 class="f-18 fw-700 mb-3 clr-1">Contact Us</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <a href="tel:<?= htmlspecialchars($no, ENT_QUOTES, 'UTF-8') ?>"
                                class="d-flex align-items-center">
                                <span class="icon-phone me-2 clr-1"></span>
                                <?= htmlspecialchars($no, ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:sales@<?= htmlspecialchars($domainname, ENT_QUOTES, 'UTF-8') ?>"
                                class="d-flex align-items-center">
                                <span class="icon-mail me-2 clr-1"></span>
                                sales@<?= htmlspecialchars($domainname, ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside> -->

        </div>
    </div>
</section>

<!-- ── CTA Strip ───────────────────────────────────────────────────────────── -->
<section class="py-5 bg-1 text-center">
    <div class="container-lg">
        <h2 class="clr-l fw-700 f-36 mb-3">Start Your Publishing Journey Today</h2>
        <p class="clr-l f-18 mb-4">Professional book publishing, editing, and marketing — all under one roof.</p>
        <button class="btn btn-light fw-700 px-5"
            data-bs-toggle="modal" data-bs-target="#quote">Get Started</button>
    </div>
</section>

<style>
    .blog-article__content {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
    }

    .blog-article__content h2,
    .blog-article__content h3,
    .blog-article__content h4 {
        color: var(--clr-1, #0a3d62);
        margin-top: 1.8rem;
        margin-bottom: .8rem;
        font-weight: 700;
    }

    .blog-article__content p {
        margin-bottom: 1.2rem;
    }

    .blog-article__content ul,
    .blog-article__content ol {
        padding-left: 1.5rem;
        margin-bottom: 1.2rem;
    }

    .blog-article__content img {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
        margin: 1rem 0;
    }

    .blog-article__content blockquote {
        border-left: 4px solid var(--clr-1, #0a3d62);
        padding: .8rem 1.2rem;
        background: #f8f9fa;
        border-radius: 0 6px 6px 0;
        font-style: italic;
        margin: 1.5rem 0;
    }

    .blog-article__content a {
        color: var(--clr-1, #0a3d62);
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

    .sidebar-cta {
        background: var(--bg-1, #0a3d62);
    }
</style>
