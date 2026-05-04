<?php

/**
 * Hampton Publisher — Blog Detail Page
 * URL: /hamptonpublisher/blog/{slug}
 * Data pre-fetched in inc/hp-blog-detail-data.php (included by index.php before head.php).
 */
$blog = $hp_blog_data ?? null;

if ($blog === null) {
    header('Location: '.$base_url.'404');
    exit;
}

// ── View helpers ──────────────────────────────────────────────────────────────
$blogTitle = htmlspecialchars((string) ($blog['title'] ?? 'Untitled'), ENT_QUOTES, 'UTF-8');
$blogContent = $blog['content'] ?? '';
$blogImage = ! empty($blog['featured_image'])
    ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8')
    : '';
$blogAlt = htmlspecialchars(
    (string) (! empty($blog['image_alt_tag']) ? $blog['image_alt_tag'] : ($blog['title'] ?? 'Blog image')),
    ENT_QUOTES,
    'UTF-8'
);
$blogDate = ! empty($blog['created_at']) ? date('F j, Y', strtotime((string) $blog['created_at'])) : '';
$blogAuthor = htmlspecialchars((string) ($blog['author'] ?? ($blog['user']['name'] ?? '')), ENT_QUOTES, 'UTF-8');
$blogSlugSafe = htmlspecialchars((string) ($blog['slug'] ?? ($hp_blog_slug_raw ?? '')), ENT_QUOTES, 'UTF-8');
$canonicalUrl = htmlspecialchars(rtrim((string) $url, '/').'/blog/'.$blogSlugSafe, ENT_QUOTES, 'UTF-8');
$blogsUrl = htmlspecialchars(rtrim((string) $base_url, '/').'/blogs', ENT_QUOTES, 'UTF-8');
?>

<!-- Inner Banner -->
<section class="inner-banner" style="background: url('<?= $base_url ?>images/inner.jpg') center/cover no-repeat; padding:100px 0 60px; position:relative;">
    <div style="position:absolute;inset:0;background:rgba(0,0,0,.55);"></div>
    <div class="container" style="position:relative;z-index:1;">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h1 style="color:#fff; font-size:36px; font-weight:700; line-height:1.3;"><?= $blogTitle ?></h1>
                <nav aria-label="breadcrumb" style="margin-top:15px;">
                    <ol class="breadcrumb justify-content-center" style="background:transparent; padding:0;">
                        <li class="breadcrumb-item"><a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>" style="color:#f5a623;">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $blogsUrl ?>" style="color:#f5a623;">Blog</a></li>
                        <li class="breadcrumb-item active" style="color:#fff;" aria-current="page"><?= $blogTitle ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Article Body -->
<section style="padding:60px 0; background:#f9f9f9;">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Main Content -->
            <div class="col-lg-8 col-md-12 m-auto">
                <article class="hp-blog-article">

                    <!-- Meta -->
                    <?php if ($blogDate || $blogAuthor) { ?>
                        <div class="hp-blog-article__meta">
                            <?php if ($blogDate) { ?>
                                <span><i class="fa fa-calendar"></i> <?= $blogDate ?></span>
                            <?php } ?>
                            <?php if ($blogAuthor) { ?>
                                <span><i class="fa fa-user"></i> By <?= $blogAuthor ?></span>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <!-- Featured Image -->
                    <?php if ($blogImage) { ?>
                        <figure style="margin:0 0 25px;">
                            <img src="<?= $blogImage ?>"
                                alt="<?= $blogAlt ?>"
                                style="width:100%; height:auto; border-radius:8px; max-height:450px; object-fit:cover;"
                                loading="eager">
                        </figure>
                    <?php } ?>

                    <!-- Content -->
                    <div class="hp-blog-article__content">
                        <?= $blogContent ?>
                    </div>

                    <!-- Share -->
                    <div class="hp-blog-article__share">
                        <!-- <span style="font-weight:700;">Share:</span> -->
                        <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonicalUrl) ?>"
                            target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook">
                            <i class="fa fa-facebook"></i> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?= urlencode($canonicalUrl) ?>&text=<?= urlencode($blogTitle) ?>"
                            target="_blank" rel="noopener noreferrer" aria-label="Share on Twitter">
                            <i class="fa fa-twitter"></i> Twitter
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($canonicalUrl) ?>&title=<?= urlencode($blogTitle) ?>"
                            target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn">
                            <i class="fa fa-linkedin"></i> LinkedIn
                        </a> -->
                    </div>

                    <!-- Back link -->
                    <div style="margin-top:25px;">
                        <a href="<?= $blogsUrl ?>" style="color:#0e3193; font-weight:600; text-decoration:none;">
                            <i class="fa fa-arrow-left"></i> Back to Blog
                        </a>
                    </div>

                </article>
            </div>

            <!-- Sidebar -->
            <!-- <aside class="col-lg-4 col-md-12 mt-4 mt-lg-0">

               
                <div class="hp-sidebar-cta">
                    <h3>Ready to Publish?</h3>
                    <p>Let our experts guide you from manuscript to market.</p>
                    <a href="#!" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get a Free Quote</a>
                </div>

                
                <div class="hp-sidebar-contact">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="<?= htmlspecialchars($no1, ENT_QUOTES, 'UTF-8') ?>"><i class="fa fa-phone"></i> <?= htmlspecialchars($no, ENT_QUOTES, 'UTF-8') ?></a></li>
                        <li><a href="mailto:<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>"><i class="fa fa-envelope"></i> <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></a></li>
                    </ul>
                </div>

            </aside> -->

        </div>
    </div>
</section>

<!-- CTA Strip -->
<section style="background:#0e3193; padding:50px 0; text-align:center;">
    <div class="container">
        <h2 style="color:#fff; font-size:32px; font-weight:700; margin-bottom:10px;">Start Your Publishing Journey Today</h2>
        <p style="color:rgba(255,255,255,.85); font-size:17px; margin-bottom:25px;">Professional book publishing, editing, and marketing — all under one roof.</p>
        <a href="#!" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
            style="background:#f5a623; color:#fff; padding:14px 40px; border-radius:5px; font-weight:700; font-size:16px; text-decoration:none; display:inline-block;">
            Get Started
        </a>
    </div>
</section>

<?php if (! empty($hp_blog_schema_script)) { ?>
    <?= $hp_blog_schema_script ?>
<?php } ?>

<style>
    /* ── Article ── */
    .hp-blog-article__meta {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        font-size: 14px;
        color: #888;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }

    .hp-blog-article__meta i {
        margin-right: 5px;
        color: #0e3193;
    }

    .hp-blog-article__content {
        font-size: 16px;
        line-height: 1.85;
        color: #333;
    }

    .hp-blog-article__content h2,
    .hp-blog-article__content h3,
    .hp-blog-article__content h4 {
        color: #0e3193;
        margin-top: 1.8rem;
        margin-bottom: .8rem;
        font-weight: 700;
    }

    .hp-blog-article__content p {
        margin-bottom: 1.2rem;
    }

    .hp-blog-article__content ul,
    .hp-blog-article__content ol {
        padding-left: 1.5rem;
        margin-bottom: 1.2rem;
    }

    .hp-blog-article__content img {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
        margin: 1rem 0;
    }

    .hp-blog-article__content blockquote {
        border-left: 4px solid #0e3193;
        padding: .8rem 1.2rem;
        background: #f0f4ff;
        border-radius: 0 6px 6px 0;
        font-style: italic;
        margin: 1.5rem 0;
    }

    .hp-blog-article__content a {
        color: #0e3193;
        text-decoration: underline;
    }

    .hp-blog-article__share {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
        display: flex;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .hp-blog-article__share a {
        background: #0e3193;
        color: #fff;
        padding: 7px 16px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
    }

    .hp-blog-article__share a:hover {
        background: #0a2a7a;
    }

    /* ── Sidebar ── */
    .hp-sidebar-cta {
        background: #0e3193;
        color: #fff;
        padding: 25px;
        border-radius: 8px;
        text-align: center;
        margin-bottom: 20px;
    }

    .hp-sidebar-cta h3 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .hp-sidebar-cta p {
        font-size: 14px;
        margin-bottom: 15px;
        opacity: .9;
    }

    .hp-sidebar-cta a {
        background: #f5a623;
        color: #fff;
        padding: 10px 25px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 700;
        display: inline-block;
    }

    .hp-sidebar-contact {
        background: #fff;
        border: 1px solid #e0e0e0;
        padding: 25px;
        border-radius: 8px;
    }

    .hp-sidebar-contact h3 {
        font-size: 18px;
        font-weight: 700;
        color: #0e3193;
        margin-bottom: 15px;
    }

    .hp-sidebar-contact ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .hp-sidebar-contact ul li {
        margin-bottom: 10px;
    }

    .hp-sidebar-contact ul li a {
        color: #333;
        text-decoration: none;
        font-size: 14px;
    }

    .hp-sidebar-contact ul li a i {
        margin-right: 8px;
        color: #0e3193;
    }
</style>
