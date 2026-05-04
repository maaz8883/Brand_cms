<?php

/**
 * The Global Publishers — Blog Detail Page
 * URL: /theglobalpublish/blog/{slug}
 * Data pre-fetched in inc/tgp-blog-detail-data.php (before head.php).
 */

$blog = $tgp_blog_data ?? null;
if ($blog === null) {
    header('Location: ' . $base_url . '404');
    exit;
}

$blogTitle    = htmlspecialchars((string) ($blog['title'] ?? 'Untitled'), ENT_QUOTES, 'UTF-8');
$blogContent  = $blog['content'] ?? '';
$blogImage    = ! empty($blog['featured_image']) ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8') : '';
$blogAlt      = htmlspecialchars(
    (string) (! empty($blog['image_alt_tag']) ? $blog['image_alt_tag'] : ($blog['title'] ?? 'Blog image')),
    ENT_QUOTES,
    'UTF-8'
);
$blogDate     = ! empty($blog['created_at']) ? date('F j, Y', strtotime((string) $blog['created_at'])) : '';
$blogAuthor   = htmlspecialchars((string) ($blog['author'] ?? ($blog['user']['name'] ?? '')), ENT_QUOTES, 'UTF-8');
$blogSlugSafe = htmlspecialchars((string) ($blog['slug'] ?? ($tgp_blog_slug_raw ?? '')), ENT_QUOTES, 'UTF-8');
$canonicalUrl = htmlspecialchars(rtrim((string) $url, '/') . '/blog/' . $blogSlugSafe, ENT_QUOTES, 'UTF-8');
$blogsUrl     = htmlspecialchars((string) ($blogs_url ?? (rtrim((string) $base_url, '/') . '/blogs')), ENT_QUOTES, 'UTF-8');
?>

<!-- Inner Banner -->
<section class="sec1 innerBanner AboutUsBanner tgp-blog-detail-banner">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <div class="innerBannerContent">
                    <h1><?= $blogTitle ?></h1>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $blogsUrl ?>">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $blogTitle ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article -->
<section class="tgp-blog-detail-section">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Main Content -->
            <div class="col-lg-8 col-xl-8 mx-auto">
                <article class="tgp-article">

                    <!-- Meta -->
                    <?php if ($blogDate || $blogAuthor) : ?>
                        <div class="tgp-article__meta">
                            <?php if ($blogDate) : ?>
                                <span><?= $blogDate ?></span>
                            <?php endif; ?>
                            <?php if ($blogAuthor) : ?>
                                <span>By <?= $blogAuthor ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Featured Image -->
                    <?php if ($blogImage) : ?>
                        <figure class="tgp-article__img">
                            <img src="<?= $blogImage ?>" alt="<?= $blogAlt ?>"
                                style="width:100%;height:auto;border-radius:10px;max-height:460px;object-fit:cover;"
                                loading="eager">
                        </figure>
                    <?php endif; ?>

                    <!-- Content -->
                    <div class="tgp-article__content">
                        <?= $blogContent ?>
                    </div>

                    <!-- Share -->
                    <div class="tgp-article__share">
                        <!-- <span>Share:</span> -->
                        <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonicalUrl) ?>"
                            target="_blank" rel="noopener noreferrer" class="tgp-share-btn tgp-share-fb">Facebook</a>
                        <a href="https://twitter.com/intent/tweet?url=<?= urlencode($canonicalUrl) ?>&text=<?= urlencode($blogTitle) ?>"
                            target="_blank" rel="noopener noreferrer" class="tgp-share-btn tgp-share-tw">Twitter</a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($canonicalUrl) ?>&title=<?= urlencode($blogTitle) ?>"
                            target="_blank" rel="noopener noreferrer" class="tgp-share-btn tgp-share-li">LinkedIn</a> -->
                    </div>

                    <div class="tgp-back-link">
                        <a href="<?= $blogsUrl ?>">← Back to Blog</a>
                    </div>

                </article>
            </div>

            <!-- Sidebar -->
            <!-- <aside class="col-lg-4 mt-4 mt-lg-0">

                
                <div class="tgp-sidebar-cta">
                    <h3>Ready to Publish Your Book?</h3>
                    <p>Let our expert team guide you from manuscript to market.</p>
                    <a href="javascript:;" class="btnPrimary openPopup"><span>Get a Free Quote</span></a>
                </div>

                
                <div class="tgp-sidebar-contact">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="<?= htmlspecialchars($no1, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($no, ENT_QUOTES, 'UTF-8') ?></a></li>
                        <li><a href="mailto:<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></a></li>
                    </ul>
                </div>

            </aside> -->

        </div>
    </div>
</section>

<?php if (! empty($tgp_blog_schema_script)) echo $tgp_blog_schema_script; ?>

<style>
    .tgp-blog-detail-banner .innerBannerContent h1,
    .tgp-blog-detail-banner .innerBannerContent p,
    .tgp-blog-detail-banner .breadcrumb .breadcrumb-item,
    .tgp-blog-detail-banner .breadcrumb .breadcrumb-item a {
        color: #fff !important;
    }

    .tgp-blog-detail-banner .breadcrumb .breadcrumb-item.active {
        color: #fff !important;
        opacity: .9;
    }

    .tgp-blog-detail-section {
        padding: 60px 0;
    }

    .tgp-article {
        background: #fff;
        border-radius: 12px;
        padding: 35px;
        box-shadow: 0 2px 16px rgba(0, 0, 0, .07);
    }

    .tgp-article__meta {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        font-size: 14px;
        color: #888;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }

    .tgp-article__img {
        margin: 0 0 25px;
    }

    .tgp-article__content {
        font-size: 1.05rem;
        line-height: 1.85;
        color: #333;
    }

    .tgp-article__content h1,
    .tgp-article__content h2,
    .tgp-article__content h3,
    .tgp-article__content h4,
    .tgp-article__content h5,
    .tgp-article__content h6 {
        color: #000;
        margin-top: 1.8rem;
        margin-bottom: .8rem;
        font-weight: 700;
    }

    .tgp-article__content p {
        margin-bottom: 1.2rem;
    }

    .tgp-article__content ul,
    .tgp-article__content ol {
        padding-left: 1.5rem;
        margin-bottom: 1.2rem;
    }

    .tgp-article__content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1rem 0;
    }

    .tgp-article__content blockquote {
        border-left: 4px solid var(--primary-color, #6c3eb5);
        padding: .8rem 1.2rem;
        background: #f5f0ff;
        border-radius: 0 8px 8px 0;
        font-style: italic;
        margin: 1.5rem 0;
    }

    .tgp-article__content a {
        color: #000 !important;
        text-decoration: underline;
    }

    .tgp-article__share {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
        font-weight: 700;
    }

    .tgp-share-btn {
        padding: 7px 16px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        color: #fff;
    }

    .tgp-share-fb {
        background: #1877f2;
    }

    .tgp-share-tw {
        background: #1da1f2;
    }

    .tgp-share-li {
        background: #0077b5;
    }

    .tgp-back-link {
        margin-top: 20px;
    }

    .tgp-back-link a {
        color: #6c3eb5;
        background: #f3ecff;
        border: 1px solid #6c3eb5;
        border-radius: 6px;
        padding: 8px 12px;
        display: inline-block;
        font-weight: 700;
        font-size: 16px;
        text-decoration: none;
        transition: all .2s ease;
    }

    .tgp-back-link a:hover {
        color: #fff;
        background: #6c3eb5;
        border-color: #6c3eb5;
    }

    .tgp-sidebar-cta {
        background: var(--primary-color, #6c3eb5);
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        margin-bottom: 20px;
        color: #fff;
    }

    .tgp-sidebar-cta h3 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .tgp-sidebar-cta p {
        font-size: 14px;
        margin-bottom: 15px;
        opacity: .9;
    }

    .tgp-sidebar-cta .btnPrimary {
        display: inline-block;
    }

    .tgp-sidebar-contact {
        background: #fff;
        border-radius: 12px;
        border: 1px solid #e0e0e0;
        padding: 25px;
    }

    .tgp-sidebar-contact h3 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 15px;
        color: var(--primary-color, #6c3eb5);
    }

    .tgp-sidebar-contact ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .tgp-sidebar-contact ul li {
        margin-bottom: 10px;
    }

    .tgp-sidebar-contact ul li a {
        color: #333;
        text-decoration: none;
        font-size: 14px;
    }
</style>
