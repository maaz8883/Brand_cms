<?php include '../include/header.php' ?>
<?php

// $rs = file_get_contents("https://blog.staffshaw.com/domainBlogs/webcreatorshub");

// $rs = json_decode($rs);

$url = 'https://blog.staffshaw.com/domainBlogs/TheGlobalPublishers';

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

$ris = json_decode($response);

// echo "<pre>Decoded JSON:\n";
// print_r($ris);
// echo "</pre>";

?>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>blogs/blog-style.css" />

<section class="sec1 innerBanner AboutUsBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bannertextLeft">
                <div class="bannerTextInner">
                    <h1>Blogs</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-page-section">
    <div class="container">
        <div class="row clearfix">
            <!-- News Block -->

            <?php foreach ($ris as $res) { ?>
                <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="<?php echo $res->slug; ?>"><img
                                    src="https://blog.staffshaw.com/public/admin/uploads/<?php echo $res->image  ?>" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="lower-content">

                            <h4><a href="<?php echo $res->slug; ?>"><?php echo $res->title ?></a></h4>
                            <div class="blog-desc"><?php echo $res->meta_description ?></div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="">
                                        <!-- Author Box -->
                                        <div class="author-box">
                                            <div class="read-more">
                                                <!-- <a href=""><button>Read More</button></a> -->
                                                <a href="<?php echo $res->slug; ?>" class="btnPrimary openPopup"><span>Read
                                                        More <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="arrow-right"
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
            <!-- News Block -->




        </div>



    </div>
</section>


<?php include '../include/footer.php' ?>