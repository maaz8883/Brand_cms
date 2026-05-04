<?php include '../include/header.php' ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $url = 'https://blog.staffshaw.com/domainBlog/TheGlobalPublishers/' . $id;

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification (not recommended in production)

    // Execute the request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }

    // Close cURL session
    curl_close($ch);

    // Check if response is valid JSON
    $rs = json_decode($response, true); // Decode JSON as associative array
    if ($rs === null && json_last_error() !== JSON_ERROR_NONE) {
        echo 'Error decoding JSON: ' . json_last_error_msg();
    }
}
?>



<link rel="stylesheet" href="<?php echo BASE_URL; ?>blogs/blog-style.css" />
<title><?php echo $rs['blog']['title']; ?> </title>
<meta name="description" content="<?php echo $res['meta_description'] ?>" />
<section class="sec1 innerBanner AboutUsBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bannertextLeft">
                <div class="bannerTextInner">
                    <h1><?php echo $rs['blog']['title']; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sidebar-page-container">
    <div class="container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="blog-detail">
                    <div class="inner-box">
                        <div class="image">
                            <img src="https://blog.staffshaw.com/public/admin/uploads/<?php echo $rs['blog']['image']  ?>"
                                alt="" class="img-fluid">
                        </div>
                        <div class="lower-content">
                            <?php echo $rs['blog']['content'] ?>
                        </div>
                    </div>

                    <!-- Author Box -->


                    <!-- Related News -->
                    <div class="related-news">
                        <h4>Related Blogs</h4>
                        <div class="row clearfix">
                            <?php foreach ($rs['relatedBlogs'] as $res) { ?>
                            <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="<?php echo $res['slug']; ?>"><img
                                                src="https://blog.staffshaw.com/public/admin/uploads/<?php echo $res['image']  ?>"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="lower-content">

                                        <h4><a href="<?php echo $res['slug']; ?>"><?php echo $res['title'] ?></a></h4>
                                        <div class="blog-desc"><?php echo $res['meta_description'] ?> </div>
                                        <div class="lower-box">
                                            <div class="clearfix">
                                                <div class="">
                                                    <!-- Author Box -->
                                                    <div class="author-box">
                                                        <div class="read-more">
                                                            <!-- <a href=""><button>Read
                                                                    More</button></a> -->
                                                            <a href="<?php echo $res['slug']; ?>"
                                                                class="btnPrimary openPopup"><span>Read More <svg
                                                                        class="svg-inline--fa fa-arrow-right"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="arrow-right"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                        </path>
                                                                    </svg></span></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <!-- End Related News -->





                </div>
            </div>

            <!-- Sidebar Side -->


        </div>
    </div>
</div>


<script>
window.onload = function() {

    document.title = "<?php echo $rs->blog->title  ?>";
    document.getElementsByTagName('meta')["description"].content = "<?php echo $rs->blog->meta_description ?>";
    document.getElementsByTagName('meta')["keywords"].content = "<?php echo $rs->blog->keywords ?>";
};
// $('meta[name=author]').attr('content', 'New Author Name');
</script>
<script>
window.onload = function() {
    $('h1').attr('style', '');
    $('h2').attr('style', '');
    $('p').attr('style', '');
    $('span').attr('style', '');
    $('b').attr('style', '');
    $('ul').attr('style', '');
    $('li').attr('style', '');
    $('ol').attr('style', '');
}
</script>



<?php include '../include/footer.php' ?>