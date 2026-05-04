<?php
require '../inc/global.php';
require '../inc/form.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="" content="Publish your book, Self-Publish your book, Self-publishing agency, Publish your own book, Book Publishing agency, Book Publishing Experts">
    <title>Publish Your Book with Professional Publishing Services!</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon-global.png" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preload" rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://cdn.jsdelivr.net"> 
	<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
	<link rel="stylesheet" rel="preload" as="style" type="text/css"  href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css"  />
    <link href="css/animate.css" rel="preload" rel="stylesheet">
    <!-- <link href="css/fancybox.css" rel="preload" rel="stylesheet"> -->
    <!--<link href="css/owl.carousel.css" rel="preload" rel="stylesheet">-->
    <link href="css/slick.css" rel="preload" rel="stylesheet">
    <link href="css/slick-theme.css" rel="preload" rel="stylesheet">

    <!-- Add Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Add Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="preload" rel="stylesheet">


    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">


    <!-- Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17303111894"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
     
      gtag('config', 'AW-17303111894');
    </script>
    <!-- End Google Tag Manager -->


    <style>
        @font-face {
            font-display: swap;
            font-family: 'Bebas Neue';
            font-style: normal;
            font-weight: 400;
            src: url('fonts/bebas-neue-v9-latin-regular.eot');
            src: url('fonts/bebas-neue-v9-latin-regular.eot?#iefix') format('embedded-opentype'),
                url('fonts/bebas-neue-v9-latin-regular.woff2') format('woff2'),
                url('fonts/bebas-neue-v9-latin-regular.woff') format('woff'),
                url('fonts/bebas-neue-v9-latin-regular.ttf') format('truetype'),
                url('fonts/bebas-neue-v9-latin-regular.svg#BebasNeue') format('svg');
        }

        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url('fonts/poppins-v20-latin-regular.eot');
            src: url('fonts/poppins-v20-latin-regular.eot?#iefix') format('embedded-opentype'),
                url('fonts/poppins-v20-latin-regular.woff2') format('woff2'),
                url('fonts/poppins-v20-latin-regular.woff') format('woff'),
                url('fonts/poppins-v20-latin-regular.ttf') format('truetype'),
                url('fonts/poppins-v20-latin-regular.svg#Poppins') format('svg');
        }

        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: url('fonts/poppins-v20-latin-600.eot');
            src: url('fonts/poppins-v20-latin-600.eot?#iefix') format('embedded-opentype'),
                url('fonts/poppins-v20-latin-600.woff2') format('woff2'),
                url('fonts/poppins-v20-latin-600.woff') format('woff'),
                url('fonts/poppins-v20-latin-600.ttf') format('truetype'),
                url('fonts/poppins-v20-latin-600.svg#Poppins') format('svg');
        }

        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 800;
            src: url('fonts/poppins-v20-latin-800.eot');
            src: url('fonts/poppins-v20-latin-800.eot?#iefix') format('embedded-opentype'),
                url('fonts/poppins-v20-latin-800.woff2') format('woff2'),
                url('fonts/poppins-v20-latin-800.woff') format('woff'),
                url('fonts/poppins-v20-latin-800.ttf') format('truetype'),
                url('fonts/poppins-v20-latin-800.svg#Poppins') format('svg');
        }
    </style>


</head>

<body>


    <!-- Google Tag Manager (noscript) -->
    <!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M354D54Q"-->
    <!--        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
    <!-- End Google Tag Manager (noscript) -->

    <div class="top-bar-main new-header-set-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                    <ul>
                        <li><a href="<?php echo $no1 ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $no ?></a></li>
                        <li><a href="mailto:<?php echo $email ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $email ?></a></li>
                        <li><a href="javascript:;" onclick="toggleChat()"><i class="fa fa-comment" aria-hidden="true"></i>Live Chat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="head_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="logo">
                        <img width="100%" height="100%" alt="<?php echo $bname ?>" src="images/white-logo.png" data-toggle="modal" data-target="#staticBackdrop1">
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="serv-cta-btn inr-tab-btn header-btn cta-tab-btn">
                        <a href="<?php echo $no1 ?>" class="serv-cta-tel"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $no ?></a>
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1" class="serv-cta-tel">Get Started</a>
                        <a href="javascript:;" class="serv-cta-chat chats" onclick="toggleChat()">Live Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="banner one-banner main-banner">
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <div class="row ">
                <div class="col-md-6 new-sect aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                    <h5 class="text-white pb-3">Publish Your Book Without Feeling Tense</h5>
                    <h1 class="text-white">Readers Waiting For A Book They Can’t Put Down - Let’s Surprise Them</h1>
                    <ul class="banner-list">
                        <li>
                            <p>All-in-One Publishing Support</p>
                        </li>
                        <li>
                            <p>Global Distribution</p>
                        </li>

                        <li>
                            <p>Personalized Author Guidance</p>
                        </li>
                        <li>
                            <p>Flexible & Author-Friendly</p>
                        </li>
                    </ul>
                    <!-- <p class="text-white py-3 ">
                We aim to assist you with all the latest industry tools and Publish Your Own Book by connecting you with expert book marketers in the USA.


                </p> -->
                    <div class="trust">

                        <div class="serv-cta-btn inr-tab-btn header-btn cta-tab-btn">
                            <a href="<?php echo $no1 ?>" class="serv-cta-tel"><i class="fa fa-phone" aria-hidden="true"></i>
                                <?php echo $no ?></a>
                            <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1"
                                class="serv-cta-tel">Get Started</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="banner-form">
                        <div class="banner-form-box">
                            <div class="">
                                <h2 class="text-center">Start Your Publishing Journey</h2>
                            </div>
                        </div>
                        <form method="POST" class="right" action="sending2.php">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <select name="su" class="form-select" aria-label="Default select example" required>
                                        <option selected disabled>Do you have a manuscript ready?</option>
                                        <option value="Yes, I'm ready to publish today">Yes, I'm ready to publish today
                                        </option>
                                        <option value="Yes, I'll be ready to publish in 1 to 3 months">Yes, I'll be ready to
                                            publish in 1 to 3 months</option>
                                        <option value="Yes, I'll be ready to publish in 3 to 6 months">Yes, I'll be ready to
                                            publish in 3 to 6 months</option>
                                        <option value="Yes, I’ll be ready to publish in 6 to 12 months">Yes, I’ll be ready
                                            to publish in 6 to 12 months</option>
                                        <option value="No, I do not have a book or manuscript ready">No, I do not have a
                                            book or manuscript ready</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <select name="si" class="form-select" aria-label="Default select example" required>
                                        <option selected disabled>Have you published before?</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <select name="pb" class="form-select"
                                        aria-label="Default select example" required>
                                        <option selected disabled>What type of book do you plan to publishing?</option>
                                        <option value="Business">Business</option>
                                        <option value="Biography">Biography</option>
                                        <option value="Inspirational">Inspirational</option>
                                        <option value="Non-Fiction">Non-Fiction</option>
                                        <option value="How-To">How-To</option>
                                        <option value="Autobiography/Memoir">Autobiography/Memoir</option>
                                        <option value="Self-Help">Self-Help</option>
                                        <option value="Children">Children</option>
                                        <option value="Spiritual/Religious">Spiritual/Religious</option>
                                        <option value="Fiction">Fiction</option>
                                        <option value="Art/Photography">Art/Photography</option>
                                        <option value="Cookbook">Cookbook</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group-select">
                                    <h6>What services are you looking for?</h6>
                                    <div class="form-check-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="sp"
                                                value="Self Publishing" id="selfPublishing">
                                            <label class="form-check-label" for="selfPublishing">
                                                Self Publishing
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="ep" value="Editing"
                                                id="editing">
                                            <label class="form-check-label" for="editing">
                                                Editing
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="cd"
                                                value="Cover Design" id="coverDesign">
                                            <label class="form-check-label" for="coverDesign">
                                                Cover Design
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pi" value="Printing"
                                                id="printing">
                                            <label class="form-check-label" for="printing">
                                                Purchase ISBN
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="if"
                                                value="Interior Formatting" id="interiorFormatting">
                                            <label class="form-check-label" for="interiorFormatting">
                                                Interior Formatting
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="il"
                                                value="Illustration" id="illustration">
                                            <label class="form-check-label" for="illustration">
                                                Illustration
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-width mb-4 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <input type="text" class="form-control" placeholder="Full Name" name="cn"
                                    required>
                            </div>
                            <div class="full-width margin-bottom-10 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <input type="email" class="form-control" placeholder="Email Address"
                                    name="em" required>
                            </div>
                            <div
                                class="full-width margin-bottom-10 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <input id="phone-countr" name="pn" class="form-control"
                                    placeholder="Phone" required>
                            </div>

                            <!-- <input type="text" name="content" value=" https://www.Tyndalebookpublisher.com/lp/publishing/" id="content" hidden=""> -->
                            <input name="domain" value="Tyndalebookpublisher.com" type="text" hidden="">
                            <div class="text-center">
                                <input type="submit" class="btn btn_green" id="BPE-lp1-btn" name="submit"
                                    value="Lets Get Started" />

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <marquee>
        <div class="clients-new">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
            <img src="images/home-authors.webp" class="img-fluid">
        </div>
    </marquee>

    <!-- <section class="client-logo">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cl-logo-slid">
                    <div class="cl-logo-slider">
                        <div>
                            <div class="cl-logo-img" data-toggle="modal" data-target="#staticBackdrop1">
                                <img width="200" height="51" alt="<?php echo $bname ?>" class="lazy"
                                    src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                    data-src="images/cl-1.webp">
                            </div>
                        </div>
                        <div>
                            <div class="cl-logo-img" data-toggle="modal" data-target="#staticBackdrop1">
                                <img width="200" height="51" alt="<?php echo $bname ?>" class="lazy"
                                    src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                    data-src="images/cl-2.webp">
                            </div>
                        </div>
                        <div>
                            <div class="cl-logo-img" data-toggle="modal" data-target="#staticBackdrop1">
                                <img width="200" height="51" alt="<?php echo $bname ?>" class="lazy"
                                    src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                    data-src="images/cl-3.webp">
                            </div>
                        </div>
                        <div>
                            <div class="cl-logo-img" data-toggle="modal" data-target="#staticBackdrop1">
                                <img width="200" height="51" alt="<?php echo $bname ?>" class="lazy"
                                    src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                    data-src="images/cl-4.webp">
                            </div>
                        </div>
                        <div>
                            <div class="cl-logo-img" data-toggle="modal" data-target="#staticBackdrop1">
                                <img width="200" height="51" alt="<?php echo $bname ?>" class="lazy"
                                    src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                    data-src="images/cl-5.webp">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

    <section class="stellar-design">
        <div class="container">
            <div class="row">
                <div class="rdes-head col-md-12">
                    <div class="hd-txt serv-txt ">
                        <h2>
                            We Know The Worth Of Your Book

                        </h2>
                        <p>Unsure of the quality of your book? No worries. We know what’s inside your book and what it can do to the readers. Be ready to achieve your dream of becoming a self-published author. Picture yourself reaching your goal of having as many book sales as you've always wanted. This isn't just a dream; with the help of professional book promotion services, it's possible. The best Book Publishing Agency is essential for standing out in today's crowded publishing market. Envision a team of experienced Self-publishing agencies that will make your book a bestseller.


                        </p>
                    </div>
                    <div class="serv-cta-btn inr-tab-btn header-btn cta-tab-btn ">
                        <a href="<?php echo $no1 ?>" class="serv-cta-tel"><i class="fa fa-phone" aria-hidden="true"></i>
                            <?php echo $no ?></a>
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1" class="serv-cta-tel">Get
                            Started</a>
                        <!-- <a href="javascript:;" class="serv-cta-chat chats" onclick="toggleChat()">Live Chat</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta book-Publishing-cta looking-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ">
                    <h3 class="">Saying Goodbye to Publishing Hurdles</h3>
                    <h4 class="">It’s Time to Reach the Best Book Publishing Agency To Make Your Author Journey A Life-Changing Experience
                    </h4>
                    <p class="">In an exceedingly competitive market for ghostwriting services. Book Publishing Experts are known as expert book authors in a variety of categories. Our expert book writers work on the idea of providing well-written, high-quality material with the certainty of complete client satisfaction. We provide everything you need as an author:

                    </p>
                    <ul class="an-check-llist">
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Ebook writing
                        </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Proofreading services</li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Book
                            Editing </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Book
                            Formating </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Video
                            Trailer </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Audio
                            Book </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Book
                            cover designing </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Author
                            website </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Book
                            Marketing </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Press Release
                        </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Author Platform
                        </li>
                        <li data-aos="zoom-in" data-aos-duration="1000"> <i class="fa-solid fa-star"></i>
                            Copyright Registration
                        </li>

                    </ul>




                    <div class="serv-cta-btn inr-tab-btn header-btn cta-tab-btn ">
                        <a href="<?php echo $no1 ?>" class="serv-cta-tel"><i class="fa fa-phone" aria-hidden="true"></i>
                            <?php echo $no ?></a>
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1" class="serv-cta-tel">Get
                            Started</a>
                        <!-- <a href="javascript:;" class="serv-cta-chat chats" onclick="toggleChat()">Live Chat</a> -->
                    </div>
                </div>
            </div>
        </div>



    </section>


    <section class="our-serv-sec">




        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto text-center new-class-here-for-padding">

                    <div class="hd-txt serv-txt ">
                        <h2>10+ Years of Producing Top-Rated Books
                        </h2>
                        <p>As a leading book publishing agency, we provide tailored solutions to meet your needs and enhance your author's journey experience.


                        </p>
                    </div>

                </div>
                <div class="col-sm-12 p0 serv-col-main">
                    <div class="col-sm-4">
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1">
                            <div class="serv-bx even">
                                <img width="50" height="50" alt="<?php echo $bname ?>" src="images/service-icon-1.webp"
                                    data-src="images/service-icon-1.webp">
                                <h3>Concept-to-Manuscript Service</h3>
                                <p>Our professional writers will publish your book based on your ideas and vision, ensuring a polished manuscript without the hassle of writing it yourself.
                                </p>

                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1">
                            <div class="serv-bx">
                                <img width="50" height="50" alt="<?php echo $bname ?>" src="images/service-icon-2.webp"
                                    data-src="images/service-icon-2.webp">
                                <h3>Manuscript Refinement Service</h3>
                                <p>Our skilled editors will refine your manuscript by enhancing clarity, coherence, and consistency, making it ready for readers.
                                </p>

                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1">
                            <div class="serv-bx even">
                                <img width="50" height="50" alt="<?php echo $bname ?>" src="images/service-icon-3.webp"
                                    data-src="images/service-icon-3.webp">
                                <h3>Comprehensive Publishing Service</h3>
                                <p>Streamline the publishing process with our comprehensive assistance in formatting, printing, and distribution, helping you reach a wider audience. Strategic Book Promotion Service
                                </p>

                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1">
                            <div class="serv-bx">
                                <img width="50" height="50" alt="<?php echo $bname ?>" src="images/service-icon-4.webp"
                                    data-src="images/service-icon-4.webp">
                                <h3>Strategic Book Promotion Service</h3>
                                <p>We will strategically promote your book through targeted campaigns, increasing its visibility, engagement, and sales in a competitive market.
                                </p>

                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1">
                            <div class="serv-bx even">
                                <img width="50" height="50" alt="<?php echo $bname ?>" src="images/service-icon-6.webp"
                                    data-src="images/service-icon-6.webp">
                                <h3>E-Book Conversion Service</h3>
                                <p>Convert your manuscript into digital formats, allowing for wider distribution across various e-book platforms to increase accessibility and reach.
                                </p>

                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1">
                            <div class="serv-bx">
                                <img width="50" height="50" alt="<?php echo $bname ?>" src="images/service-icon-1.webp"
                                    data-src="images/service-icon-1.webp">
                                <h3>Custom Book Cover Design Service</h3>
                                <p>Our professional designers will create eye-catching covers that capture attention, convey the essence of your book, and entice readers to explore further.</p>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <div class="serv-cta-btn inr-tab-btn header-btn cta-tab-btn ">
                            <a href="<?php echo $no1 ?>" class="serv-cta-tel"><i class="fa fa-phone" aria-hidden="true"></i>
                                <?php echo $no ?></a>
                            <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1" class="serv-cta-tel">Get
                                Started</a>
                            <!-- <a href="javascript:;" class="serv-cta-chat chats" onclick="toggleChat()">Live Chat</a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="cta-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-7">
                    <div class="hd-txt">
                        <h2>Don’t Let Publishing Headache Push You Back - Get It Done With Our Help
                        </h2>
                        <p>We can be considered the top book publishing agency, as we have a proven track record of our published works
                        </p>
                        <div class="serv-cta-btn inr-tab-btn cta-tab-btn">
                            <!-- <a href="<?php echo $no1 ?>" class="serv-cta-tel"><i class="fa fa-phone" aria-hidden="true"></i> +1 (914) 259 5105</a> -->
                            <a href="javascript:;" class="serv-cta-tel ml-15" data-toggle="modal" data-target="#staticBackdrop1">Get Started</a>
                            <a href="javascript:;" class="serv-cta-chat chats" onclick="toggleChat()">Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 ">
                    <div class="cta-side-img ">
                        <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1">
                            <img class="cta-book" alt="<?php echo $bname ?>" class="lazy mt-5 loaded" src="images/cta-book.png" data-src="images/cta-book.png" data-was-processed="true">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="polaroid module">
        <div class="side-before-1">
            <img class="side-post" src="images/side2.png" alt="">
        </div>
        <div class="container">
            <div class="grid-construct polaroid__box">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div>
                            <h2 class="main-heading">Book Bestsellers </span></h2>
                        </div>
                    </div>
                </div>
                <div class="tabs_home_portfolio">
                    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link" id="pills-fiction-tab" data-toggle="pill" href="#pills-fiction" role="tab"
                                aria-controls="pills-fiction" aria-selected="true">Fiction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-sports-tab" data-toggle="pill" href="#pills-sports" role="tab"
                                aria-controls="pills-sports" aria-selected="false">Sports Recreation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-growth-tab" data-toggle="pill" href="#pills-growth" role="tab"
                                aria-controls="pills-growth" aria-selected="false">Personal Growth</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" id="pills-non-fiction-tab" data-toggle="pill"
                                href="#pills-non-fiction" role="tab" aria-controls="pills-non-fiction"
                                aria-selected="false">Non Fiction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-politics-tab" data-toggle="pill" href="#pills-politics" role="tab"
                                aria-controls="pills-politics" aria-selected="false">Politics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-leadership-tab" data-toggle="pill" href="#pills-leadership"
                                role="tab" aria-controls="pills-leadership" aria-selected="false">Leadership </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="pills-kids-tab" data-toggle="pill" href="#pills-kids" role="tab"
                                aria-controls="pills-kids" aria-selected="false">Kids</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="pills-health-tab" data-toggle="pill" href="#pills-health" role="tab"
                                aria-controls="pills-health" aria-selected="false">Health & Fitness</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="pills-romantic-tab" data-toggle="pill" href="#pills-romantic" role="tab"
                                aria-controls="pills-romantic" aria-selected="false">Romantic Suspense</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active in" id="pills-fiction" role="tabpanel" aria-labelledby="pills-fiction-tab">
                            <div class="portfolio_wrapper_bwl">
                                <div class="row">
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Hidden-Prince-Tessa-Afshar/dp/1496458222/ref=sr_1_1?dib=eyJ2IjoiMSJ9.72sQYUH-4X4NNk2anoex4Q.Uk4GVr_YchGl0WahRnrmzMhgBiy0PSYZLrWqdOO89cI&amp;dib_tag=se&amp;keywords=9781496458216&amp;qid=1721678624&amp;sr=8-1"
                                                class="fancybox" rel="ligthbox" target="_blank" tabindex="0">
                                                <img loading="lazy" src="images/books/fiction/01.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/fiction/001.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/fiction/001.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Lineage-Grace-Stories-Unlikely-Eternity/dp/0842356320/ref=sr_1_1?dib=eyJ2IjoiMSJ9.CWbAlNUHrGpJYHlXGPV910vM-sTvFjmscZuzqzXO1P0.XO9rVp3SFPY-08dl9oApiWm_pbEo06v64nc8wbKi63Q&amp;dib_tag=se&amp;keywords=9780842356329&amp;qid=1721678592&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/fiction/02.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/fiction/02.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/fiction/02.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Land-Silence-Tessa-Afshar/dp/149640646X/ref=sr_1_1?dib=eyJ2IjoiMSJ9.qlQfNCPRIyN9XZEQrZ2Prg.d0mOHa5J8-S1fvEp8rZAhOyiYWqMbZ8OPV0WRp6HceU&amp;dib_tag=se&amp;keywords=9781496406460&amp;qid=1721678563&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/fiction/03.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/fiction/03.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/fiction/03.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Daughter-Rome-Tessa-Afshar/dp/1496428714/ref=sr_1_1?dib=eyJ2IjoiMSJ9.UEmOoI56-zhvg6n-jqIX5Q.wNdKwRANp2Huv1lO4RqVQ54v05mFLcb2lXRXXfOs4kE&amp;dib_tag=se&amp;keywords=9781496428714&amp;qid=1721678474&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/fiction/04.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/fiction/004.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/fiction/004.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Jewel-Nile-Tessa-Afshar/dp/1496428765/ref=sr_1_1?dib=eyJ2IjoiMSJ9.Gh5QHWjPtuFNe5IW7aNpQg.y5AWdjkJr9X6YiH6t7KnvxLt2m6H4qyncOoLNCSJpDk&amp;dib_tag=se&amp;keywords=9781496428752&amp;qid=1721678537&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/fiction/05.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/fiction/005.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/fiction/005.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Sons-Encouragement-Francine-Rivers/dp/1414348169/ref=sr_1_1?dib=eyJ2IjoiMSJ9.hsShVNN5N_ku1KaQzB_Nww.qIzz-Mg-WZ1vMvMb1dM6jjtMLsMpV_marfvOSCZnLFU&amp;dib_tag=se&amp;keywords=9781414348162&amp;qid=1721678648&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/fiction/06.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/fiction/06.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/fiction/06.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-politics" role="tabpanel" aria-labelledby="pills-politics-tab">
                            <div class="portfolio_wrapper_bwl">
                                <div class="row">
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Unified-Unlikely-Friendship-Divided-Country/dp/1496430417?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/non-fiction/01.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/non-fiction/001.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/non-fiction/001.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/God-Churchill-Leaders-Destiny-Troubled/dp/1496419839?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/non-fiction/02.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/non-fiction/02.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/non-fiction/02.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Implosion-America-Economic-Spiritual-Challenges-ebook/dp/B007V69E9Y?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/non-fiction/03.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/non-fiction/03.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/non-fiction/03.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Breaking-Cover-Secret-Taught-Fighting/dp/149641960X?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/non-fiction/04.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/non-fiction/004.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/non-fiction/004.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/They-Say-Are-Infidels-Persecuted/dp/149641148X?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/non-fiction/05.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/non-fiction/005.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/non-fiction/005.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Mind-Terror-Explores-Motivates-Extremist/dp/1496411870?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/non-fiction/06.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/non-fiction/06.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/non-fiction/06.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-leadership" role="tabpanel"
                            aria-labelledby="pills-leadership-tab">
                            <div class="portfolio_wrapper_bwl">
                                <div class="row">
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Mentor-Leader-Secrets-Building-Consistently/dp/1414338066?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/biography/01.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/biography/01.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/biography/01.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/God-Churchill-Leaders-Destiny-Troubled/dp/1496419839?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/biography/02.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/biography/02.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/biography/02.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Unleashing-Power-Rubber-Bands-Non-Linear-ebook/dp/B001DUGOBU?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/biography/03.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/biography/03.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/biography/03.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/High-Performance-Ethics-Principles-Next-Generation-Leadership-ebook/dp/B000WT51G2?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/biography/04.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/biography/04.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/biography/04.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Sticking-Points-Generations-Working-Together/dp/1496447840?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/biography/05.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/biography/05.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/biography/05.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Soul-Team-Modern-Day-Winning-Teamwork/dp/1496413768?ref_=ast_sto_dp"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/biography/06.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/biography/06.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/biography/06.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade  " id="pills-non-fiction" role="tabpanel"
                            aria-labelledby="pills-non-fiction-tab">
                            <div class="portfolio_wrapper_bwl">
                                <div class="row">
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Holiness-God-R-C-Sproul/dp/0842339655/ref=pd_bxgy_thbs_d_sccl_1/141-2669864-2957514?pd_rd_w=nmpBI&amp;content-id=amzn1.sym.c51e3ad7-b551-4b1a-b43c-3cf69addb649&amp;pf_rd_p=c51e3ad7-b551-4b1a-b43c-3cf69addb649&amp;pf_rd_r=E7R4T9PZMZ0TH1EHTYF2&amp;pd_rd_wg=aPkkP&amp;pd_rd_r=ce73afae-7481-412f-9f31-d96d2596c06d&amp;pd_rd_i=0842339655&amp;psc=1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/auto-biography/06.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/auto-biography/006.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/auto-biography/006.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Essential-Truths-Christian-Faith-Sproul/dp/0842320016/ref=sr_1_1?dib=eyJ2IjoiMSJ9.66lJgXkjNtmvwsjaPdGfCw.qLo50nrhmIUOWZY81Cq7RY3Xfys17nDuwMY7kbyyH6g&amp;dib_tag=se&amp;keywords=9780842320016&amp;qid=1721680247&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/auto-biography/02.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/auto-biography/02.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/auto-biography/02.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Kingdom-Focus-Rethinking-Today-Eternity/dp/1589979524/ref=sr_1_1?dib=eyJ2IjoiMSJ9.QL7aYNQKFESb7vMeXLnIZA.d_1FfxBtgiBweDe-Jw6r94fItl8sVhzWF1ygF2aKyTY&amp;dib_tag=se&amp;keywords=9781589979529&amp;qid=1721680056&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/auto-biography/03.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/auto-biography/003.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/auto-biography/003.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Starved-Spiritual-Anxious-Overwhelmed-Fulfilled/dp/1496460294/ref=sr_1_1?dib=eyJ2IjoiMSJ9.SVX3w1BU93MJeQF1X7FJaA.ulQrnqLZt4TnsKFROv-sPZXylTmCVrx8FaAiNBtWTOw&amp;dib_tag=se&amp;keywords=9781496460295&amp;qid=1721680134&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/auto-biography/04.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/auto-biography/004.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/auto-biography/004.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Heaven-Randy-Alcorn/dp/0842379428/ref=sr_1_1?dib=eyJ2IjoiMSJ9.dXcEiWFPgdAWqv4S4a29-RhTxoEuAdJ0NPXimtJXsMA.29g4QMgpn5EfTLN5S5-H5YYMLOJ46MhNQAzTnJZf1Yw&amp;dib_tag=se&amp;keywords=9780842379427&amp;qid=1721680199&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/auto-biography/05.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/auto-biography/005.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/auto-biography/005.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Believing-Seeing-Physicist-Shattered-Necessity/dp/1496455584/ref=sr_1_1?dib=eyJ2IjoiMSJ9.0Etr-Afr6s1YB92U84RFaQ.mIJIwnNfyDBn93GGPPFDORyCNEHHyb-wPSTkZVfipFo&amp;dib_tag=se&amp;keywords=9781496455581&amp;qid=1721679576&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/auto-biography/01.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/auto-biography/001.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/auto-biography/001.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-kids" role="tabpanel" aria-labelledby="pills-kids-tab">
                            <div class="portfolio_wrapper_bwl">
                                <div class="row">
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Made-Create-Heart-Soul-Worship-through-Art/dp/1496431278/ref=sr_1_1?dib=eyJ2IjoiMSJ9.JA4lQ1fp86Yy1dqEj1TG6g.4EGUNsLpKZtV84zD0C39MwuIwGxXDeMkPyK6dr1wm3A&amp;dib_tag=se&amp;keywords=9781496431271&amp;qid=1721681379&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/children/01.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/children/01.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/children/01.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Bible-Stories-about-Jesus-Elementary/dp/1628629746/ref=sr_1_1?dib=eyJ2IjoiMSJ9.ayRyPXgqgbCam1wn6jiCWQ.pdx_cXO3roNZ3LdRK54KrS4ftTNqPlekHUT1eJ3BDpw&amp;dib_tag=se&amp;keywords=9781628629743&amp;qid=1721680604&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/children/02.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/children/02.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/children/02.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Year-Devotions-Preschoolers-Little-Blessings/dp/0842389407/ref=sr_1_1?dib=eyJ2IjoiMSJ9.ICoVl1WooCkL90wxcGxH8w.IUN3Ez6ef96MhFSYPeLa0WsqMtcDNLOytYD7h9PKuKs&amp;dib_tag=se&amp;keywords=9780842389402&amp;qid=1721680745&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/children/03.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/children/03.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/children/03.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Hands-Bible-365-Devotions-Kids/dp/149641053X/ref=sr_1_1?dib=eyJ2IjoiMSJ9.Kna74XeaMWRZegNG-yCPmA.I6-mwW2FTdeTsamceC_fPdEul_gY2R58J72ofDJh8L8&amp;dib_tag=se&amp;keywords=9781496410535&amp;qid=1721680783&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/children/04.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/children/04.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/children/04.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Faith-Science-Dr-Fizzlebop-Fizztastically/dp/1496458168/ref=sr_1_1?dib=eyJ2IjoiMSJ9.9R6xu7yPGbr83Jzkz_cN_Q.3jr-Von6_FifwgSbkqoaZiVYIFTPi-HlESbJndyvWOs&amp;dib_tag=se&amp;keywords=9781496458162&amp;qid=1721680809&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/children/05.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/children/05.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/children/05.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Quirky-Critter-Devotions-Wild-Wonders/dp/1496477006/ref=sr_1_1?dib=eyJ2IjoiMSJ9.4U9hIhro2Fi-PFZGfRT2RA.-kom7W6jUiM1dc84XaGODMBnIAnv2GHzDz5RliVCTmM&amp;dib_tag=se&amp;keywords=9781496477002&amp;qid=1721681340&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/children/06.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/children/06.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/children/06.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-growth" role="tabpanel" aria-labelledby="pills-growth-tab">
                            <div class="portfolio_wrapper_bwl">
                                <div class="row">
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/All-My-Knotted-Up-Life-Memoir/dp/B0BP9PFGF2/ref=sr_1_1?dib=eyJ2IjoiMSJ9.X-b5FmYRTUcgF1Mcg1bclA.7D17_fif4g0zzd1ou7-qKSBk8yma31pV8RweYOl0Htw&amp;dib_tag=se&amp;keywords=9781496472670&amp;qid=1721763863&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/personal/01.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/personal/01.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/personal/01.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Well-Watered-Woman-Rooted-Growing-Flourishing/dp/1496445457/ref=sr_1_1?dib=eyJ2IjoiMSJ9.0EKKVjXGFYbE99oCLEPD0ePK7qnH-QZcTSlQXAWOvuI.RGvpAlyynK-qsnWAFXBnJClNHLfli9unae-VHG7Wtpc&amp;dib_tag=se&amp;keywords=9781496445452&amp;qid=1721763895&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/personal/02.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/personal/02.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/personal/02.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Conquer-Your-Negative-Thoughts-Emotional/dp/1496457641/ref=sr_1_1?dib=eyJ2IjoiMSJ9.QjjF6ww1Y9DNxo1B8wLoVQ.AflZRRQyNc-HwjNgGaPEzyhzLvrMWKxqbYPtk9ihC2c&amp;dib_tag=se&amp;keywords=9781496457646&amp;qid=1721763942&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/personal/03.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/personal/03.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/personal/03.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Pawverbs-Dog-Lovers-Heart-Faithfulness/dp/1496447271/ref=sr_1_1?dib=eyJ2IjoiMSJ9.nPdld6G1vOnVY_TyKEZSFg3398ajZRLQbHc0Z-"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/personal/04.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/personal/04.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/personal/04.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Establishing-Home-Creating-Beautiful-Friends/dp/1496460413/ref=sr_1_1?dib=eyJ2IjoiMSJ9.7JHMjrqP7KV5ZEIbK2JOLw.Ugarkr2MiuWM_NALadB_J1NXJEj3aA11XSGHANorP_4&amp;dib_tag=se&amp;keywords=9781496460417&amp;qid=1721763993&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/personal/05.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/personal/05.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/personal/05.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Strong-like-Water-Things-Flourishing/dp/1496454715/ref=sr_1_1?dib=eyJ2IjoiMSJ9._eFyyyINBB5ZJysk7lC2Vw.7VSVCXI8Ej2cj1M5EQhNIWM8xN2iJVz9IxCxL8jb-3I&amp;dib_tag=se&amp;keywords=9781496454713&amp;qid=1721764021&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/personal/06.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/personal/06.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/personal/06.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-health" role="tabpanel" aria-labelledby="pills-health-tab">
                            <div class="portfolio_wrapper_bwl">
                                <div class="row">
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Conquer-Worry-Anxiety-Secret-Mastering/dp/1496446593/ref=sr_1_1?dib=eyJ2IjoiMSJ9.rLKc7oVtLA1lc6uu4UYE4g.Iqxd3AsjfU5zqlBLUGnQ0ZLwSl0am-vthJd_O9VYMbs&amp;dib_tag=se&amp;keywords=9781496446596&amp;qid=1721764084&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/health/01.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/health/01.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/health/01.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Body-Revelation-Spiritual-Practices-Metabolize/dp/1496462602/ref=sr_1_1?dib=eyJ2IjoiMSJ9.EYaZ-LCYUbKNA33tnIV6HA.x6fedYVKDsaOY8V20KFG2t3l79vtkpxmTpanfwRrruE&amp;dib_tag=se&amp;keywords=9781496462602&amp;qid=1721764159&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/health/02.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/health/02.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/health/02.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Your-Brain-Always-Listening-Happiness/dp/1496438205/ref=sr_1_1?dib=eyJ2IjoiMSJ9.kJJ9Y2XGulH0vA3SBSfqIw.v2-PB3HAWRJeHl7l8VliNeD3WDmSccIQ9jB52X7m8vE&amp;dib_tag=se&amp;keywords=9781496438201&amp;qid=1721764187&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/health/03.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/health/03.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/health/03.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Feel-Better-Fast-Make-Last/dp/1496425669/ref=sr_1_1?dib=eyJ2IjoiMSJ9.15ze3_Vsype8uk9GwYtAnw.S2NJXeWn9lQUXYvJYgbUxcNekV1KKTuOC7OYtDYSnTk&amp;dib_tag=se&amp;keywords=9781496425669&amp;qid=1721764254&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/health/04.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/health/04.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/health/04.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Well-Core-Realistic-Guilt-Free-Approach/dp/1496472624/ref=sr_1_1?dib=eyJ2IjoiMSJ9.aogGhhbj8kWY111qvNlK0A.RfNUSJKqyx9Jzp1tq4AxUfIIq4GIks8OxDwCIuPal3M&amp;dib_tag=se&amp;keywords=9781496472625&amp;qid=1721764324&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/health/05.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/health/05.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/health/05.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Canary-Coal-Mine-Forgotten-Community/dp/1496446488/ref=sr_1_1?dib=eyJ2IjoiMSJ9.3AjZaqVdMJBtvsW46_JMCw.45wyu906juqNhLcTy9DwH7r1c-AfHex0ZJpwlfY--Vw&amp;dib_tag=se&amp;keywords=9781496446497&amp;qid=1721764355&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/health/06.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/health/06.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/health/06.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-sports" role="tabpanel" aria-labelledby="pills-sports-tab">
                            <div class="portfolio_wrapper_bwl">
                                <div class="row">
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Mentor-Leader-Secrets-Building-Consistently/dp/1414338066/ref=sr_1_1?dib=eyJ2IjoiMSJ9.-oO6rcqZ8HF1OXxYm_hb0A.Tr8Za13-NlX_od1kecPjlX8SRmEDgoF_z50IPI5eQQY&amp;dib_tag=se&amp;keywords=9781414338064&amp;qid=1721764474&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/sports/01.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/sports/01.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/sports/01.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Quiet-Strength-Principles-Practices-Priorities/dp/1414318022/ref=sr_1_1?dib=eyJ2IjoiMSJ9.sM6oi9WzaFcQfd6SppewlA.VJF_S7qEkP89We5QChUMKXRotVz7I7nNiiV5Pb10yU0&amp;dib_tag=se&amp;keywords=9781414318028&amp;qid=1721764535&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/sports/02.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/sports/02.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/sports/02.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Coming-Back-Stronger-Unleashing-Adversity/dp/1414339445/ref=sr_1_1?dib=eyJ2IjoiMSJ9.DUiyzXOPfJuQFrHeaGP_xg.QXH0w2vxjJPuJGHBLhH2dvn9jF9rM--ouV09FuLbEHg&amp;dib_tag=se&amp;keywords=9781414339443&amp;qid=1721764565&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/sports/03.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/sports/03.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/sports/03.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Impact-Player-Leaving-Lasting-Legacy/dp/1414372736/ref=sr_1_1?dib=eyJ2IjoiMSJ9.niwGzaF0aXvwuYNAoSIhLw.5OJBA-S4hB23BKjK37RqXskc4UMCRcNb42RvKwAIuIA&amp;dib_tag=se&amp;keywords=9781414372730&amp;qid=1721764588&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/sports/04.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/sports/04.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/sports/04.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Unthinkable-audiobook/dp/B002V0FGY2/ref=sr_1_1?dib=eyJ2IjoiMSJ9.obbOKqI3WmrTb4PWBKhDSw.UPTwPfhzhhd7J1RUWb9akhXRFFoiuq_WVN0SS1ymz9A&amp;dib_tag=se&amp;keywords=9781414333144&amp;qid=1721764617&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/sports/05.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/sports/05.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/sports/05.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Wrestling-Devil-Lex-Luger/dp/149647869X/ref=sr_1_1?dib=eyJ2IjoiMSJ9.mB7SI7SWBD8LeBENcfPidg.Tbyov44BhTbKh6x14uW4fu_jF6D7IfotjduCECXzxMc&amp;dib_tag=se&amp;keywords=9781414383798&amp;qid=1721764656&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/sports/06.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/sports/06.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/sports/06.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-romantic" role="tabpanel" aria-labelledby="pills-romantic-tab">
                            <div class="portfolio_wrapper_bwl">
                                <div class="row">
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Concrete-Evidence-DiAnn-Mills-ebook/dp/B09TQ3TN6K/ref=sr_1_1?dib=eyJ2IjoiMSJ9.sGVJutAkWPh6a0FfuC6AIg.iqFwvt6KxsVtTaAflayoNruJbVre9MsrsbuBtW1GAY8&amp;dib_tag=se&amp;keywords=9781496451897&amp;qid=1721764953&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/romantic/01.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/romantic/01.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/romantic/01.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Audible-Code-of-Courage/dp/B0B4YFDL2N/ref=sr_1_1?dib=eyJ2IjoiMSJ9.Yt3HwWO2J4sgJ6GxlwMC7g.Vc1CmPmT_lJrwJwoXKpZFIKiu7koK7hLJ-ePS1Tm3pU&amp;dib_tag=se&amp;keywords=9781496457561&amp;qid=1721764979&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/romantic/02.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/romantic/02.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/romantic/02.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Audible-Facing-the-Enemy/dp/B0C9SCGPMX/ref=sr_1_1?dib=eyJ2IjoiMSJ9.9vxpglrUy2ulROT9ZJAQSg.FDteDC4Xb-SVXFwjhqREK2ZJXwIPOt6NPbAWBC3OkYw&amp;dib_tag=se&amp;keywords=9781496451941&amp;qid=1721764999&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/romantic/03.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/romantic/03.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/romantic/03.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Airborne/dp/B08HNKL94T/ref=sr_1_1?dib=eyJ2IjoiMSJ9.pIZKFHqXyJOEVTfyTPs7CQ.aLEP7f_zpb6tYpyh219iOlCAIbF5XICRwKZR2nUgig4&amp;dib_tag=se&amp;keywords=9781496427175&amp;qid=1721765020&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/romantic/04.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/romantic/04.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/romantic/04.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Trace-Doubt-DiAnn-Mills/dp/1496451856/ref=sr_1_1?dib=eyJ2IjoiMSJ9.NOpWiV4tXqJI3K1Vqf1svA.TLi4JvJ_kd5k32cZZsITpiu3aU5XMwXmJ7cQgHt6368&amp;dib_tag=se&amp;keywords=9781496451859&amp;qid=1721765043&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/romantic/05.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/romantic/05.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/romantic/05.webp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 port-web-col-4">
                                        <div class="port-img port-web-img-st">
                                            <a href="https://www.amazon.com/Audible-Breach-of-Honor/dp/B0973JYPD9/ref=sr_1_1?dib=eyJ2IjoiMSJ9.6HUKdSrPPT4Qy8jaziNVXg.Xu7td_H0tTOgkoeUZYIvjc3E5nct3Eo7vf802_pd3h8&amp;dib_tag=se&amp;keywords=9781496443090&amp;qid=1721765091&amp;sr=8-1"
                                                target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                                                <img loading="lazy" src="images/books/romantic/06.webp">
                                            </a>
                                            <img class="port-web-st port-web-th-img1"
                                                src="images/books/romantic/06.webp">
                                            <img class="port-web-st port-web-th-img2"
                                                src="images/books/romantic/06.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-after-1">
            <img class="side-post" src="images/side3.png" alt="">
        </div>
    </section>

    <section class="cta-sec cta-sec-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hd-txt">
                        <h2>97.66 % of First-Time Authors Succeed Faster with the Right Publishing Team: You Are The Next
                        </h2>
                        <p>Share your publishing vision with seasoned literary professionals and turn your ideas into powerful, market-ready books that resonate.
                        </p>
                        <div class="serv-cta-btn inr-tab-btn cta-tab-btn">
                            <!-- <a href="<?php echo $no1 ?>" class="serv-cta-tel"><i class="fa fa-phone" aria-hidden="true"></i> +1 (914) 259 5105</a> -->
                            <a href="javascript:;" class="serv-cta-tel ml-15" data-toggle="modal" data-target="#staticBackdrop1">Get Started</a>
                            <a href="javascript:;" class="serv-cta-chat chats" onclick="toggleChat()">Live Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-choose-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <h2>Why We Are The Best Choice
                    </h2>
                    <p>Our process is designed to take the hard work off your hands, allowing us to handle everything for you through our cost-effective, tailored publishing solutions that meet all your needs.
                    </p>
                    <div class="why-choose-service-head">
                        <div class="choose_inner_div">
                            <!-- <h3>Exceptional Digital Publishing</h3> -->
                            <h3>Economical Rates
                            </h3>
                            <p>We provide high-quality services at affordable prices, making excellence accessible to everyone.
                            </p>
                        </div>
                        <div class="choose_inner_div even">
                            <!-- <h3>Compelling Book Advertisement</h3> -->

                            <h3>Robust Security
                            </h3>
                            <p>We ensure maximum confidentiality and protection of sensitive information through strong security measures.
                            </p>
                        </div>
                        <div class="choose_inner_div even">
                            <!-- <h3>Reach a Wider Audience</h3> -->
                            <h3>Authentic Research
                            </h3>
                            <p>We maximise return on investment by focusing on sustainable development, efficient operations, and strategic planning.
                            </p>
                        </div>
                        <div class="choose_inner_div ">
                            <!-- <h3>A Proactive Approach</h3> -->
                            <h3>Profitability</h3>
                            <p>Our self-publishing agency optimises author revenues. We offer distribution, publishing, and sales support to help you effectively sell your book.
                            </p>
                        </div>
                        <div class="choose_inner_div ">
                            <!-- <h3>A Proactive Approach</h3> -->
                            <h3>100% Customer Satisfaction
                            </h3>
                            <p>We prioritise the needs and expectations of our clients, delivering exceptional experiences and results that exceed expectations.
                            </p>
                        </div>
                        <div class="choose_inner_div even">
                            <!-- <h3>A Proactive Approach</h3> -->
                            <h3>On-Time Delivery
                            </h3>
                            <p>We meet deadlines accurately and reliably, ensuring that tasks are completed quickly and efficiently.
                            </p>
                        </div>
                    </div>
                    <div class="serv-cta-btn inr-tab-btn header-btn cta-tab-btn mt-5">
                        <!-- <a href="<?php echo $no1 ?>" class="serv-cta-tel"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $no ?></a> -->
                        <a data-toggle="modal" href="javascript:;" class="serv-cta-tel" data-target="#staticBackdrop1">Get Started</a>
                        <a href="javascript:;" class="serv-cta-chat chats" onclick="toggleChat()">Live Chat</a>
                    </div>
                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>
    </section>

    <section class="cta-sample-section py-3">
        <div class="auto-container " bis_skin_checked="1">
            <div class="row align-items-center" bis_skin_checked="1">
                <div class="col-lg-6 col-md-6 col-sm-12" bis_skin_checked="1">
                    <div class="cta-sample-heading" bis_skin_checked="1">
                        <span>Ready to Self-Publish Your Book?
                        </span>
                    </div>
                    <div class="cta-content-hire" bis_skin_checked="1">
                        <p>Have a powerful story, but not sure how to bring it to life? Our top-rated book publishing agency in the USA helps turn your ideas into professionally crafted, market-ready books.
                        </p>
                        <div class="btn-box" bis_skin_checked="1">
                            <a href="javascript:void(toggleChat())" class="theme-btn btn-style-one">
                                <span class="txt">

                                    Hire a Publishing Expert
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" bis_skin_checked="1">
                    <div class="hire-img" bis_skin_checked="1">
                        <img src="./images/cta-2-img.webp" class="img-fluid ls-is-cached lazyloaded"
                            alt=" Books  " title="Books">
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="cta-sec-vid case-tr-silla">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">

                <img loading="lazy" class="kenal-img-2" src="./images/hero-icon.webp">
                <img loading="lazy" class="kenal-img-3" src="./images/key-icon.webp">
                <div class="col-sm-8" bis_skin_checked="1">
                    <div class="cta-new-sec" bis_skin_checked="1">
                        <h2>Broaden Your
                            <br> Story’s Reach with a<br> Trusted Book Publishing Companion
                        </h2>
                        <p>Are you a self-publishing author looking to make a global impact? With our premium publishing services, we help you bring your stories to life and publish them on one of the world’s largest book platforms.


                        </p>
                        <div class="bnr-btn wow fadeInUp animated" data-wow-duration="4s" bis_skin_checked="1"
                            style="visibility: visible; animation-duration: 4s;">
                            <a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1" class="get-btn "> Get Statred</a>
                            <a href="javascript:;" onclick="toggleChat()" class="get-btn chatt">Chat with us </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="test_section">
        <div class="container-fluid">
            <div class="row align-items-md-center">
                <div class="col-md-5">
                    <img src="./images/testimonial-img-01.webp" alt="">
                </div>
                <div class="col-md-7">
                    <h2>Our Happy Authors</h2>
                    <div class="testimonials-carousel owl-carousel owl-theme">
                        <div class="item">
                            <li class="card">
                                <div class="inner-box" bis_skin_checked="1">
                                    <img src="./images/quote-blue.webp" class="img-fluid" alt="">
                                    <div class="reviews-star" bis_skin_checked="1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="text" bis_skin_checked="1">Working with <?php echo $bname ?> was a seamless experience. The editing team was meticulous, and the custom cover design exceeded my expectations. They truly understood my vision and elevated the final product to a professional standard. Highly recommended for authors who take their work seriously.</div>
                                    <div class="author-info" bis_skin_checked="1">
                                        <div class="info-inner" bis_skin_checked="1">
                                            <span class="reviews-title-name">Franklin </span>
                                            <div class="circle" bis_skin_checked="1">
                                                <span>FL</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quote-icon flaticon-quote-2" bis_skin_checked="1"></div>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="card">
                                <div class="inner-box" bis_skin_checked="1">
                                    <img src="./images/quote-blue.webp" class="img-fluid" alt="">
                                    <div class="reviews-star" bis_skin_checked="1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="text" bis_skin_checked="1">I was totally lost about publishing until I found them. They walked me through everything with so much patience and care. I never felt rushed or ignored. From emails to calls, their team really made me feel like my book mattered. So grateful!</div>
                                    <div class="author-info" bis_skin_checked="1">
                                        <div class="info-inner" bis_skin_checked="1">
                                            <span class="reviews-title-name">Amelie Griffith</span>
                                            <div class="circle" bis_skin_checked="1">
                                                <span>AG</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quote-icon flaticon-quote-2" bis_skin_checked="1"></div>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="card">
                                <div class="inner-box" bis_skin_checked="1">
                                    <img src="./images/quote-blue.webp" class="img-fluid" alt="">
                                    <div class="reviews-star" bis_skin_checked="1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="text" bis_skin_checked="1"> My book is on Amazon, Barnes & Noble, and even international stores. How cool is that? They didn’t just publish my book; they gave it a real chance to be seen.</div>
                                    <div class="author-info" bis_skin_checked="1">
                                        <div class="info-inner" bis_skin_checked="1">
                                            <span class="reviews-title-name">Bowen Higgins</span>
                                            <div class="circle" bis_skin_checked="1">
                                                <span>BH</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quote-icon flaticon-quote-2" bis_skin_checked="1"></div>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="card">
                                <div class="inner-box" bis_skin_checked="1">
                                    <img src="./images/quote-blue.webp" class="img-fluid" alt="">
                                    <div class="reviews-star" bis_skin_checked="1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="text" bis_skin_checked="1">Publishing can be a vulnerable process, especially when it’s your first time. What stood out about <?php echo $bname ?> was the trust they built from day one. This was more than a business exchange; it felt like a creative partnership.</div>
                                    <div class="author-info" bis_skin_checked="1">
                                        <div class="info-inner" bis_skin_checked="1">

                                            <span class="reviews-title-name">Patricia Robert</span>
                                            <div class="circle" bis_skin_checked="1">
                                                <span>PR</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quote-icon flaticon-quote-2" bis_skin_checked="1"></div>
                                </div>
                            </li>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="form_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="banner-title"> <img src="./images/service-icon1.webp" class="img-fluid" width="60"
                            height="60" alt="Publishing services" title="Publishing services"> Contact Our Publishing
                        Experts Today! </h1>
                </div>
                <div class="col-md-6">
                    <div class="contact-img">
                        <img src="./images/form-img.webp" class="img-fluid" width="570" height="650" alt="contact us"
                            title="contact us">
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <div class=" contact-form">

                        <form action="<?php echo $current_url ?>" method="post" class="am-contact-style">

                           <input type="hidden" name="domain" value="<?php echo $domainname?>">
               <input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="url" value='<?php echo $current_url;?>'>
               <input type="hidden" name="domain" value="<?php echo $domainname?>">
               <input type="hidden" name="subject" value="Popup Form (<?php echo $url?>)">
               <input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
               <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
               <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">
               <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
               <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
               <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">


                            <div class="form-text-style">
                                <span> Get in Touch to Kick-start your Publishing Project Today!</span>
                                <h2>Reach out to our best writing partners for your job</h2>
                                <p>Fill out the form below with the necessary details to initiate your project!</p>
                            </div>

                            <div class="row">
                                <div class=" col-lg-6  col-md-6 col-sm-12 form-group">

                                  <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
                                </div>
                                <div class="col-lg-6  col-md-6 col-sm-12 form-group">
                                      <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>


                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12  col-md-12 col-sm-12 form-group">

                                   <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12  col-md-12 col-sm-12 form-group">

                                   <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>
                                </div>

                            </div>
                            <div class="row">
                                
                                <div class="col-lg-12  col-md-12 col-sm-12 form-group">
                                    <input class="btn banner-form-btn"
                                        id="BPE-lp2-btn"  id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">
                                </div>

                            </div>
                        </form>
                    </div>







                </div>
            </div>
        </div>
    </section>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal_content_inner">
                <div class="modal-header">
                    <button type="button" class="fancybox-close-small close" data-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-4 col-12"></div>
                        <div class="col-md-7 col-sm-8 col-12 modal_heading">
                            <h3>Don’t be late, <span>the offer won't wait</span></h3>
                            <h4>
                                <span>
                                    25 <strong>% OFF</strong>
                                </span>
                                On all Publishing Services
                            </h4>
                           <form action="<?php echo $current_url ?>" method="post">
                             <input type="hidden" name="domain" value="<?php echo $domainname?>">
               <input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="url" value='<?php echo $current_url;?>'>
               <input type="hidden" name="domain" value="<?php echo $domainname?>">
               <input type="hidden" name="subject" value="Popup Form (<?php echo $url?>)">
               <input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
               <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
               <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">
               <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
               <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
               <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">

                                <div class="form-group">

                                     <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>

                                </div>
                                <div class="form-group">

                                    <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
                                </div>
                                <div class="form-group">

                                    <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
                                </div>
                                <div class="form-group">
                                   <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>

                                </div>
                               
                                <button type="submit d-block" id="BPE-lp3-btn" class="btn btn-primary"  cite="Submit" data-hover="Submit" name="cta1" value="submit">Submit</button>

                            </form>
                        </div>
                        <!-- <div class="col-md-6"></div> -->
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="floatbutton">
        <div class="btns_wrap">
            <a href="javascript:;" class="chat_wrap borderOnly" onclick="toggleChat()">
                <span class="icoo"><i class="fa fa-comment" aria-hidden="true"></i></span>
                <span>Chat With Us</span> </a>
            <a href="<?php echo $no1 ?>" class="call_wrap borderOnly">
                <span class="icoo"><i class="fa fa-phone" aria-hidden="true"></i></span>
                <span> <?php echo $no ?></span> </a>
        </div>
        <div class="clickbutton borderOnly">
            <div class="crossplus">Get 25% Off Today</div>
        </div>
        <div class="banner-form borderOnly">
            <button id="cross-side-bar-btn"><span><i class="fa fa-times" aria-hidden="true"></i></span></button>
            <h3>Chat With Us to Avail <br><span>25% Discount Now!</span></h3>
            <div class="banform">
                <div>
                    <div class="row">
                        <div class="ban-form">
                            <form action="<?php echo $current_url ?>" method="post">
                                <input type="hidden" name="domain" value="<?php echo $domainname?>">
               <input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="url" value='<?php echo $current_url;?>'>
               <input type="hidden" name="domain" value="<?php echo $domainname?>">
               <input type="hidden" name="subject" value="Popup Form (<?php echo $url?>)">
               <input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
               <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
               <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">
               <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
               <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
               <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="fldset">

                                             <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                              <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input id="BPE-lp5-btn" placeholder="Connect With Us"   cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <footer class="footer-main">

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="get-in-touch">
                            <p>Get in Touch With us
                                <a href="<?php echo $no1 ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $no ?></a>
                                <a href="mailto:<?php echo $email ?>"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <?php echo $email ?></a>
                                <a href="javascript:;"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    10754 129TH ST S RICHMOND HL, NY 11419
                                </a>

                            </p>
                            <span class="footer_img_div">

                                <a href='#' target='_blank'><img src="images/bark-pro-small.png" class="img-fluid footer_images" alt="img"></a>
                                <a href='#' target='_blank'><img src="images/review-io.svg" class="img-fluid footer_images" alt="img"></a>
                                <a href='#' target='_blank'><img src="images/site-jabbar.svg" class="img-fluid footer_images" alt="img"></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-last">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="copyright">
                            <p>Copyright © <?php echo $bname ?> 2025. All rights reserved | Powered By The
                                <?php echo $bname ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="disclaimer-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="disclaimer">
                            <strong>Disclaimer:</strong><br />
                            The services provided by <?php echo $bname ?> become clients' property once delivered. <?php echo $bname ?> will not hold any ownership rights once your work is successfully accepted by a publishing
                            house.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!--modal -->

    <script defer src="js/jquery-1.10.2.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/wow.min.js"></script>
    <!-- <script defer src="js/fancybox.js"></script> -->
    <script defer src="js/slick.js"></script>
    <script defer src="js/owl.carousel.min.js"></script>

    <script defer src="js/jquery.validate.min.js"></script>
    <script defer type="text/javascript" src="js/lazyload.min.js"></script>
    <script defer src="js/owl.carousel.min.js"></script>
    <script defer src="js/all.min.js"></script>
    <script defer src="js/slick.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    
<?php
require '../inc/chat.php';


?>