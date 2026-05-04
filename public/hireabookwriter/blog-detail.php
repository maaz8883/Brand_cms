<?php

/**
 * Hire a Book Writer — Blog Detail Page
 * URL: /hireabookwriter/blog/{slug}
 * Data pre-fetched in inc/hab-blog-detail-data.php (before head.php).
 */
$blog = $hab_blog_data ?? null;
if ($blog === null) {
    header('Location: '.$base_url.'404');
    exit;
}

$blogTitle = htmlspecialchars((string) ($blog['title'] ?? 'Untitled'), ENT_QUOTES, 'UTF-8');
$blogContent = $blog['content'] ?? '';
$blogImage = ! empty($blog['featured_image']) ? htmlspecialchars((string) $blog['featured_image'], ENT_QUOTES, 'UTF-8') : '';
$blogAlt = htmlspecialchars(
    (string) (! empty($blog['image_alt_tag']) ? $blog['image_alt_tag'] : ($blog['title'] ?? 'Blog image')),
    ENT_QUOTES,
    'UTF-8'
);
$blogDate = ! empty($blog['created_at']) ? date('F j, Y', strtotime((string) $blog['created_at'])) : '';
$blogAuthor = htmlspecialchars((string) ($blog['author'] ?? ($blog['user']['name'] ?? '')), ENT_QUOTES, 'UTF-8');
$blogSlugSafe = htmlspecialchars((string) ($blog['slug'] ?? ($hab_blog_slug_raw ?? '')), ENT_QUOTES, 'UTF-8');
$canonicalUrl = htmlspecialchars(rtrim((string) $url, '/').'/blog/'.$blogSlugSafe, ENT_QUOTES, 'UTF-8');
$blogsUrl = htmlspecialchars(rtrim((string) $base_url, '/').'/blogs', ENT_QUOTES, 'UTF-8');
?>

<!-- Inner Banner -->
<section class="inner-banner all-section" style="background:url('<?= $base_url ?>assets/images/about-banner.webp') center/cover no-repeat; padding:80px 0 50px; position:relative;">
    <div style="position:absolute;inset:0;background:rgba(0,0,0,.6);"></div>
    <div class="container" style="position:relative;z-index:1;">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h1 style="color:#fff;font-size:36px;font-weight:700;line-height:1.3;margin-bottom:15px;"><?= $blogTitle ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background:transparent;padding:0;">
                        <li class="breadcrumb-item"><a href="<?= htmlspecialchars($base_url, ENT_QUOTES, 'UTF-8') ?>" style="color:#f5a623;">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $blogsUrl ?>" style="color:#f5a623;">Blog</a></li>
                        <li class="breadcrumb-item active" style="color:rgba(255,255,255,.75);" aria-current="page"><?= $blogTitle ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Article -->
<section class="all-section" style="padding:60px 0;background:#f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Main Content -->
            <div class="col-lg-8 m-auto">
                <article style="background:#fff;border-radius:8px;padding:35px;box-shadow:0 2px 14px rgba(0,0,0,.07);">

                    <!-- Meta -->
                    <?php if ($blogDate || $blogAuthor) { ?>
                        <div style="display:flex;flex-wrap:wrap;gap:20px;margin-bottom:20px;padding-bottom:15px;border-bottom:1px solid #eee;font-size:14px;color:#888;">
                            <?php if ($blogDate) { ?>
                                <span><i class="fas fa-calendar-alt" style="margin-right:5px;color:#f5a623;"></i><?= $blogDate ?></span>
                            <?php } ?>
                            <?php if ($blogAuthor) { ?>
                                <span><i class="fas fa-user" style="margin-right:5px;color:#f5a623;"></i>By <?= $blogAuthor ?></span>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <!-- Featured Image -->
                    <?php if ($blogImage) { ?>
                        <figure style="margin:0 0 25px;">
                            <img src="<?= $blogImage ?>" alt="<?= $blogAlt ?>"
                                style="width:100%;height:auto;border-radius:6px;max-height:450px;object-fit:cover;"
                                loading="eager">
                        </figure>
                    <?php } ?>

                    <!-- Content -->
                    <div class="hab-blog-content">
                        <?= $blogContent ?>
                    </div>

                    <!-- Share -->
                    <div style="display:flex;align-items:center;gap:12px;flex-wrap:wrap;margin-top:30px;padding-top:20px;border-top:1px solid #eee;">
                        <!-- <span style="font-weight:700;font-size:15px;">Share:</span> -->
                        <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonicalUrl) ?>"
                            target="_blank" rel="noopener noreferrer"
                            style="background:#1877f2;color:#fff;padding:7px 16px;border-radius:4px;text-decoration:none;font-size:13px;font-weight:600;">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?= urlencode($canonicalUrl) ?>&text=<?= urlencode($blogTitle) ?>"
                            target="_blank" rel="noopener noreferrer"
                            style="background:#1da1f2;color:#fff;padding:7px 16px;border-radius:4px;text-decoration:none;font-size:13px;font-weight:600;">
                            𝕏 Twitter
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($canonicalUrl) ?>&title=<?= urlencode($blogTitle) ?>"
                            target="_blank" rel="noopener noreferrer"
                            style="background:#0077b5;color:#fff;padding:7px 16px;border-radius:4px;text-decoration:none;font-size:13px;font-weight:600;">
                            <i class="fab fa-linkedin-in"></i> LinkedIn
                        </a> -->
                    </div>

                    <div style="margin-top:20px;">
                        <a href="<?= $blogsUrl ?>" style="color:#f5a623;font-weight:600;text-decoration:none;">
                            <i class="fas fa-arrow-left"></i> Back to Blog
                        </a>
                    </div>

                </article>
            </div>

            <!-- Sidebar -->
            <!-- <aside class="col-lg-4 mt-4 mt-lg-0">

                
                <div style="background:#1a1a2e;border-radius:8px;padding:25px;text-align:center;margin-bottom:20px;">
                    <h3 style="color:#fff;font-size:20px;font-weight:700;margin-bottom:10px;">Ready to Write Your Book?</h3>
                    <p style="color:rgba(255,255,255,.85);font-size:14px;margin-bottom:15px;">Let our expert ghostwriters bring your story to life.</p>
                    <a href="javascript:void(0)" onclick="toggleChat()" class="theme_btn" style="display:inline-block;width:100%;text-align:center;">
                        Let's Talk
                    </a>
                </div>

                
                <div style="background:#fff;border-radius:8px;border:1px solid #e0e0e0;padding:25px;">
                    <h3 style="font-size:18px;font-weight:700;margin-bottom:15px;color:#1a1a2e;">Contact Us</h3>
                    <ul style="list-style:none;padding:0;margin:0;">
                        <li style="margin-bottom:12px;">
                            <a href="<?= htmlspecialchars($no1, ENT_QUOTES, 'UTF-8') ?>"
                                style="color:#333;text-decoration:none;display:flex;align-items:center;gap:8px;">
                                <i class="fas fa-phone-alt" style="color:#f5a623;"></i>
                                <?= htmlspecialchars($no, ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>"
                                style="color:#333;text-decoration:none;display:flex;align-items:center;gap:8px;">
                                <i class="fa fa-envelope" style="color:#f5a623;"></i>
                                <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside> -->

        </div>
    </div>
</section>

<!-- CTA Strip -->
<section class="all-section" style="background:#1a1a2e;padding:50px 0;text-align:center;">
    <div class="container">
        <h2 style="color:#fff;font-size:32px;font-weight:700;margin-bottom:10px;">Start Your Book Writing Journey Today</h2>
        <p style="color:rgba(255,255,255,.85);font-size:17px;margin-bottom:25px;">Professional ghostwriting, editing, publishing, and marketing — all under one roof.</p>
        <a href="javascript:void(0)" onclick="toggleChat()" class="theme_btn">Get Started</a>
    </div>
</section>

<?php if (! empty($hab_blog_schema_script)) {
    echo $hab_blog_schema_script;
} ?>

<style>
    .hab-blog-content {
        font-size: 1.05rem;
        line-height: 1.85;
        color: #333;
    }

    .hab-blog-content h2,
    .hab-blog-content h3,
    .hab-blog-content h4 {
        color: #1a1a2e;
        margin-top: 1.8rem;
        margin-bottom: .8rem;
        font-weight: 700;
    }

    .hab-blog-content p {
        margin-bottom: 1.2rem;
    }

    .hab-blog-content ul,
    .hab-blog-content ol {
        padding-left: 1.5rem;
        margin-bottom: 1.2rem;
    }

    .hab-blog-content img {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
        margin: 1rem 0;
    }

    .hab-blog-content blockquote {
        border-left: 4px solid #f5a623;
        padding: .8rem 1.2rem;
        background: #fff8ee;
        border-radius: 0 6px 6px 0;
        font-style: italic;
        margin: 1.5rem 0;
    }

    .hab-blog-content a {
        color: #f5a623;
        text-decoration: underline;
    }
</style>
