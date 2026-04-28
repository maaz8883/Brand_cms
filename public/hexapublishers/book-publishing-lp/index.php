<?php
require '../inc/global.php';
require '../inc/form.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $bname?></title>
    <link rel="icon" href="<?php echo $base_url; ?>assets/img/hexa-fav.webp" type="image/png">
    <link rel="preload" as="font" type="font/woff2" href="<?php echo $base_url; ?>assets/fonts/S6uyw4BMUTPHjx4wXg.woff2" crossorigin="anonymous" media="all" />
    <link rel="preload" as="font" type="font/woff2" href="<?php echo $base_url; ?>assets/fonts/S6u9w4BMUTPHh6UVSwiPGQ.woff2" crossorigin="anonymous" media="all" />
    <link rel="preload" as="font" type="font/woff2" href="<?php echo $base_url; ?>assets/fonts/u-440qyriQwlOrhSvowK_l5-fCZM.woff2" crossorigin="anonymous" media="all" />
    <link rel="preload" as="font" type="font/woff2" href="<?php echo $base_url; ?>assets/fonts/u-4n0qyriQwlOrhSvowK_l52xwNZWMf6.woff2" crossorigin="anonymous" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="<?php echo $base_url; ?>assets/css/intlTelInput.css" />
    <link rel="stylesheet" rel="preload" as="style" href="<?php echo $base_url; ?>assets/css/vendor.css">
    <link rel="stylesheet" rel="preload" as="style" href="<?php echo $base_url; ?>assets/css/style.css">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
	<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
	<link rel="stylesheet" rel="preload" as="style" type="text/css" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script type="text/javascript" src="<?php echo $base_url; ?>assets/js/jquery-3.7.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2">
    <!-- <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/all.min.css"> -->
    
    <!-- Start of andersonpublishers Zendesk Widget script -->
<!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=10b11ce3-0be0-4ff9-af28-daf706752f2a"> </script> -->
<!-- End of andersonpublishers Zendesk Widget script -->



    
    <style>
        footer.footer-main-sec {
            background: #001d30;
            position: relative;
            z-index: 1
        }
        .footer-main-sec .footer-top {
            padding: 50px 0
        }
        .footer-top .footer-logo-area {
            margin: 0 0 20px
        }
        .footer-logo-area .footer-logo {
            width: 170px;
            margin: 0 0 20px
        }
        .footer-info-area h4,
        .footer-logo-area h4 {
            color: #fff;
            margin: 0 0 20px
        }
        .footer-logo-area p {
            color: #ffffff
        }
        .footer-info-area ul {
            display: flex;
            flex-direction: column
        }
        .footer-info-area ul li a,
        .footer-info-area ul li p {
            color: #ffffff;
            align-items: center;
            display: flex;
            transition: .3s ease-in-out;
            margin: 0
        }
        .footer-info-area ul li {
            margin: 0 0 10px
        }

        .footer-info-area ul li a {
            font-size: 16px;
            line-height: 22px;
            text-transform: lowercase
        }

        .footer-info-area ul li a i,
        .footer-info-area ul li p i {
            background: #02678f;
            color: #181818;
            font-size: 16px;
            font-weight: 600;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            margin: 0 10px 0 0;
            border-radius: 5px
        }

        .footer-info-area ul li a:hover {
            color: #fff !important
        }

        .footer-info-area ul li a:hover i,
        .footer-info-area ul li p:hover i,
        .footer-social-area ul li a:hover {
            background: #fec195;
            color: #001d30
        }

        .footer-info-area ul li p:hover,
        ul.footer-nav-links li a:hover {
            color: #fff
        }

        .footer-links-area ul.footer-nav-links,
        .footer-social-area ul {
            display: flex;
            align-items: center
        }

        .footer-social-area ul li {
            margin: 0 2px
        }

        .footer-social-area ul li a {
            background: #02678f;
            color: #181818;
            font-size: 18px;
            width: 30px;
            height: 30px;
            line-height: 33px;
            text-align: center;
            display: block;
            border-radius: 5px;
            transition: .3s ease-in-out
        }

        .footer-social-area ul li a img {
            width: 20px;
            margin: -5px 0 0
        }

        .footer-main-sec .footer-bottom {
            padding: 20px 0;
            border-top: 2px solid #3c3c3c
        }

        .footer-links-area ul.footer-nav-links li {
            border-right: 1px solid #707070;
            padding: 0 10px;
            display: inline-block;
            margin: 0
        }

        .footer-links-area ul.footer-nav-links li:last-child {
            border-right: none
        }

        ul.footer-nav-links li a {
            color: #868686;
            font-size: 14px;
            margin: 0;
            transition: .3s ease-in-out;
            display: block
        }

        .footer-bottom .footer-copyright {
            text-align: right
        }

        .footer-copyright p {
            color: #ffffff;
            margin: 0
        }

        @media only screen and (min-width:768px) and (max-width:991px) {
            .footer-main-sec .footer-top {
                padding: 30px 0
            }

            .footer-top .footer-social-area {
                margin: 0 0 20px
            }
        }

        @media only screen and (min-width:576px) and (max-width:767px) {
            .footer-main-sec .footer-top {
                padding: 30px 0
            }

            .footer-logo-area .footer-logo {
                width: 200px
            }

            .footer-top .footer-info-area,
            .footer-top .footer-social-area {
                margin: 0 0 20px
            }

            .footer-info-area ul li a {
                font-size: 14px;
                line-height: 20px
            }

            .footer-info-area ul li a i,
            .footer-info-area ul li p i {
                font-size: 14px;
                width: 25px;
                height: 25px;
                line-height: 25px
            }

            .footer-social-area ul li a {
                font-size: 16px;
                width: 25px;
                height: 25px;
                line-height: 28px
            }

            .footer-links-area ul.footer-nav-links {
                justify-content: center;
                margin: 0 0 5px
            }

            .footer-bottom .footer-copyright {
                text-align: center
            }
        }

        @media only screen and (min-width:300px) and (max-width:575px) {
            .footer-main-sec .footer-top {
                padding: 30px 0
            }

            .footer-logo-area .footer-logo {
                width: 200px
            }

            .footer-top .footer-info-area,
            .footer-top .footer-social-area {
                margin: 0 0 20px
            }

            .footer-info-area ul li a {
                font-size: 14px;
                line-height: 20px
            }

            .footer-info-area ul li a i,
            .footer-info-area ul li p i {
                font-size: 14px;
                width: 25px;
                height: 25px;
                line-height: 25px
            }

            .footer-social-area ul li a {
                font-size: 16px;
                width: 25px;
                height: 25px;
                line-height: 28px
            }

            .footer-links-area ul.footer-nav-links {
                justify-content: center;
                margin: 0 0 5px
            }

            .footer-bottom .footer-copyright {
                text-align: center
            }
        }

        .btn-close {
            --bs-btn-close-bg: none !important;
        }
    </style>


</head>

<body>
    <header class="py-2 text-white">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-2 col-md-4 col-3 d-md-none">
                    <a href="<?php echo $base_url; ?>" class="chat d-flex align-items-center"> <img src="./assets/icons/speech-bubble.png"
                            style="background-color: #531a3b; padding: 10px; border-radius: 50%; margin-right: 5px;"
                            alt=""></a> </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-6"><a class="logo" href="<?php echo $base_url; ?>index.php"><img class="lozad" data-src="<?php echo $base_url; ?>assets/img/2.png"></a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-9 col-3 ">
                    <div class="row justify-content-end">
                        <div class="col-lg-3 col-md-3 col-6 align-self-center d-none d-md-block"> <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat d-flex align-items-center"> <span class=" me-2 icon" style="background: #67d503"></span>
                            <span class="anim-clr fw-700">Chat Now To Avail Discounted Offer!</span><br></a></div>
                        <div class="col-xl-4 col-md-4 col-12 "> <a href="<?php echo $no?>"
                                class="call d-flex align-items-center justify-content-end justify-content-md-start"><i
                                    class="fa-solid fa-phone"
                                    style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                <span class="d-none d-md-block"><span class="anim-clr fw-700">Call Now</span><br> <span
                                        class="anim-clr fw-700"><?php echo $no?></span></span> </a> </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 d-none d-md-block"> <button class="w-100" type="button"
                                data-bs-toggle="modal" data-bs-target="#getaquote">Get Started</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="banner bg lozad" data-background-image=""
        style="background: linear-gradient(180deg, #0080ff, #0066cc, #004c99);">
        <div class="overlay pt-5 "><img class="d-lg-block d-none left" src="<?php echo $base_url; ?>assets/img/left.webp">
            <div class="container-xl pt-5 mt-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-8 col-lg-10 text-center ">
                        <p class=" subhead text-white">Are you looking for A Book Publishing company?</p>
                        <h1 class="f-50 text-white">Empowering Authors with Top Book Publishers for Success</h1>
                        <p class="text-white description">Entrust our team of professional book publishers from the best
                            book publishing companies to provide a seamless publishing experience specifically designed
                            to propel your book towards success.</p>
                        <div class="row justify-content-center py-2">
                            <div class="col-sm-8 col-10">
                                <ul
                                    class="list-unstyled text-white c-list row row-cols-md-2 row-cols-1 text-md-start mb-0 white-11">
                                    <li class="col mb-2">Publishing by experts</li>
                                    <li class="col mb-2">10,000+ Publishing Platforms.</li>
                                    <li class="col mb-2">Author guidance.</li>
                                    <li class="col mb-2">Quick Turn Around Time.</li>
                                </ul>
                            </div>
                        </div>
                        <form class="text-start mt-3 mb-4"action="<?php echo $post_url; ?>" method="post">
                            <img class="lozad" data-src="<?php echo $base_url; ?>assets/img/header-before.webp">
                            <div class="row justify-content-center">
                                <div class="form-group col-lg-3 col-md-6 mb-3">
                                    <input class="form-control" type="text" name="name" placeholder="Your Name" required=""
									autocomplete="name"
									value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
								<?php echo !empty($error['name']) ? $error['name'] : ''; ?>
                                </div>
                                <div class="form-group col-lg-3 col-md-6 mb-3">
                                    <input class="form-control" type="email" name="email" placeholder="Your Email"
									value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>"
									required="required" autocomplete="email">
								<?php echo !empty($error['email']) ? $error['email'] : ''; ?>
                                </div>
                                <div class="form-group col-lg-3 col-md-6 mb-3">
                                    <input class="form-control" type="tel" name="phone" minlength="10" maxlength="12"
									placeholder="Your Phone"
									value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required="required" autocomplete="tel">
								<?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>
                                </div>
                                <div class="form-group col-lg-3 col-md-6 mb-3">
                                    <input class="form-control" autocomplete="off" name="message"
									placeholder="Enter Brief"value="<?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?>">
								<?php echo !empty($error['message']) ? $error['message'] : ''; ?>
                                </div>
                                <div class="form-group col-lg-3 col-md-6">
                                    <button class="btn w-100" type="submit"  name="cta1" value="Submit Now">Submit</button>
                                    <input type="hidden" name="domain" value="<?php echo $domainname ?>">
                				<input type="hidden" name="ip" value="<?php echo $geoplugin->ip ?>">
                				<input type="hidden" name="city" value="<?php echo $geoplugin->city ?>">
                				<input type="hidden" name="region" value="<?php echo $geoplugin->region ?>">
                				<input type="hidden" name="country" value="<?php echo $geoplugin->countryName ?>">
                				<input type="hidden" name="url" value='<?php echo $current_url ?>'>
                				<input type="hidden" name="domain" value="<?php echo $domainname ?>">
                				<input type="hidden" name="subject" value="Popup Form (<?php echo $current_url ?>)">
                				<input type="hidden" name="source" value="<?php echo $lead_source ?>">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><img class="d-lg-block d-none right" src="<?php echo $base_url; ?>assets/img/right.webp"><img class="lozad w-100"
                data-src="<?php echo $base_url; ?>assets/img/banner.webp">
        </div>
    </section>
    <section class="platforms">
        <div class="container">
            <div class="slider">
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/1.webp"></div>
                </div>
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/2.webp"></div>
                </div>
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/3.webp"></div>
                </div>
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/4.webp"></div>
                </div>
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/5.webp"></div>
                </div>
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/6.webp"></div>
                </div>
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/7.webp"></div>
                </div>
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/8.webp"></div>
                </div>
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/9.webp"></div>
                </div>
                <div class="item px-4">
                    <div class="platform"><img data-lazy="assets/img/platforms/10.webp"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-do py-5">
        <div class="container-xl">
            <div class="row text-center justify-content-center ">
                <div class="col-lg-10 col-xl-8 ">
                    <h2 class="f-700 f-40">What We Do?</h2>
                    <p><?php echo $bname?> offers comprehensive range of book publishing services to help authors publish
                        their books.Our self book publishing experts have a decade of experience and are committed to
                        meeting all your expectations.</p>
                </div>
            </div>
            <div class="container-xl">
                <ul class="nav nav-tabs row row-cols-lg-6 row-cols-md-4 justify-content-center row-cols-2 text-center"
                    id="service" role="tablist">
                    <li class="nav-item mb-4" role="presentation"> <button class="nav-link active" id="1-tab"
                            data-bs-toggle="tab" data-bs-target="#1" type="button" role="tab" aria-controls="1"
                            aria-selected="true"> <img class="lozad d-block mx-auto"
                                data-src="<?php echo $base_url; ?>assets/img/service/1.webp"> Book Publishing </button> </li>
                    <li class="nav-item mb-4" role="presentation"> <button class="nav-link" id="2-tab"
                            data-bs-toggle="tab" data-bs-target="#2" type="button" role="tab" aria-controls="2"
                            aria-selected="false"><img class="lozad d-block mx-auto"
                                data-src="<?php echo $base_url; ?>assets/img/service/2.webp"> Ghostwriting Service </button> </li>
                    <li class="nav-item mb-4" role="presentation"> <button class="nav-link" id="3-tab"
                            data-bs-toggle="tab" data-bs-target="#3" type="button" role="tab" aria-controls="3"
                            aria-selected="false"> <img class="lozad d-block mx-auto"
                                data-src="<?php echo $base_url; ?>assets/img/service/3.webp"> Book Marketing </button> </li>
                    <li class="nav-item mb-4" role="presentation"> <button class="nav-link " id="4-tab"
                            data-bs-toggle="tab" data-bs-target="#4" type="button" role="tab" aria-controls="4"
                            aria-selected="true"> <img class="lozad d-block mx-auto"
                                data-src="<?php echo $base_url; ?>assets/img/service/4.webp"> E-Book </button> </li>
                    <li class="nav-item mb-4" role="presentation"> <button class="nav-link" id="5-tab"
                            data-bs-toggle="tab" data-bs-target="#5" type="button" role="tab" aria-controls="5"
                            aria-selected="false"><img class="lozad d-block mx-auto"
                                data-src="<?php echo $base_url; ?>assets/img/service/5.webp"> Book Cover Design </button> </li>
                    <li class="nav-item mb-4" role="presentation"> <button class="nav-link" id="6-tab"
                            data-bs-toggle="tab" data-bs-target="#6" type="button" role="tab" aria-controls="6"
                            aria-selected="false"> <img class="lozad d-block mx-auto"
                                data-src="<?php echo $base_url; ?>assets/img/service/6.webp"> E-Book Editing </button> </li>
                </ul>
            </div>
            <div class="tab-content" id="serviceContent">
                <div class="tab-pane fade show active" id="1" role="tabpanel" aria-labelledby="1-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="service"> <img class="w-100 lozad"
                                    data-src="<?php echo $base_url; ?>assets/img/service/publishing.webp"> </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="fw-700 f-30">
                                Turn Your Dream Into Reality By Becoming A Published Author.</h3>
                            <p>Our excellence has earned us a reputation as one of the best book publishing services
                                around. We assure you that your book is of the highest quality. Let us help you achieve
                                your goal of publishing your own book on Amazon.</p>
                            <ul class="list-unstyled c-list row row-cols-md-2 row-cols-1">
                                <li class="mb-2">Book Design & Formatting</li>
                                <li class="mb-2">Printing & Production</li>
                                <li class="mb-2">Self Publishing</li>
                                <li class="mb-2">Author Support</li>
                            </ul>
                            <div class="row justify-content-lg-end justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-md-4 mb-3"> <button class="w-100" type="button"
                                        data-bs-toggle="modal" data-bs-target="#getaquote">Request Quote</button> </div>
                                <div class="col-xl-4 col-md-4 mb-2">
                                    <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat d-flex align-items-center">
                                        <i class="fa-solid fa-message" style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                        <span class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> 
                                        <span class="fw-700">Let's Talk</span> </span>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-md-4 mb-2 "> <a href="<?php echo $no?>"
                                        class="call d-flex align-items-center"><i class="fa-solid fa-phone"
                                            style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                        <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span
                                                class="fw-700"><?php echo $no?></span> </span> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="2-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="service"> <img class="w-100 lozad" data-src="<?php echo $base_url; ?>assets/img/service/writing.webp">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="fw-700 f-30">Your Words, Our Expertise: Tailored Ghostwriting for Your Book</h3>
                            <p>We will work with you to make and write a book that perfectly reflects your ideas and
                                style. You will work directly with experts in book publishing and the best writers, who
                                will make sure that your dream book is of the highest
                                quality.</p>
                            <ul class="list-unstyled c-list row row-cols-md-2 row-cols-1">
                                <li class="mb-2">Publishing Guidance</li>
                                <li class="mb-2">Book Formatting</li>
                                <li class="mb-2">Revisions and Feedback</li>
                                <li class="mb-2">Writing and Editing</li>
                            </ul>
                            <div class="row justify-content-lg-end justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-md-4 mb-3"> <button class="w-100" type="button"
                                        data-bs-toggle="modal" data-bs-target="#getaquote">Request Quote</button> </div>
                                <div class="col-xl-4 col-md-4 mb-2">
                                    <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat d-flex align-items-center"><i class="fa-solid fa-message" style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                        <span class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span
                                                class="fw-700">Let's Talk</span> </span> </a> </div>
                                <div class="col-xl-4 col-md-4 mb-2 "> <a href="<?php echo $no?>"
                                        class="call d-flex align-items-center"><i class="fa-solid fa-phone"
                                            style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                        <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span
                                                class="fw-700"><?php echo $no?></span> </span> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="3" role="tabpanel" aria-labelledby="3-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="service"> <img class="w-100 lozad" data-src="<?php echo $base_url; ?>assets/img/service/marketing.webp">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="fw-700 f-30">Our Strategic Marketing Plans to Get Noticed Your Book</h3>
                            <p> The goal of our book marketing service is to help authors succeed in the competitive
                                world of publishing. We understand that writing a great book is a challenging process,
                                but getting your book noticed is also a daunting task.
                                Our expert will create a marketing plan that will expand your author platform and boost
                                book sales.</p>
                            <ul class="list-unstyled c-list row row-cols-md-2 row-cols-1">
                                <li class="mb-2">Strategic Planning</li>
                                <li class="mb-2">Targeted Audience</li>
                                <li class="mb-2">High Conversion</li>
                                <li class="mb-2">Proper Distribution</li>
                            </ul>
                            <div class="row justify-content-lg-end justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-md-4 mb-3"> <button class="w-100" type="button"
                                        data-bs-toggle="modal" data-bs-target="#getaquote">Request Quote</button> </div>
                                <div class="col-xl-4 col-md-4 mb-2">
                                    <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat d-flex align-items-center"><i class="fa-solid fa-message" style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i><span
                                            class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span
                                                class="fw-700">Let's Talk</span> </span> </a> </div>
                                <div class="col-xl-4 col-md-4 mb-2 "> <a href="<?php echo $no?>"
                                        class="call d-flex align-items-center"><i class="fa-solid fa-phone"
                                            style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                        <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span
                                                class="fw-700"><?php echo $no?></span> </span> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="4" role="tabpanel" aria-labelledby="4-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="service"> <img class="w-100 lozad" data-src="<?php echo $base_url; ?>assets/img/service/ebook.webp">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="fw-700 f-30">Your E-Book Will Be High Quality & Impactful.</h3>
                            <p>We offer E-Book editing, writing and publishing services that are designed to help you
                                share your ideas with the world. Our customizable range will fit your needs. </p>
                            <ul class="list-unstyled c-list row row-cols-md-2 row-cols-1">
                                <li class="mb-2">Distribution</li>
                                <li class="mb-2">Formatting</li>
                                <li class="mb-2">Cover Design</li>
                                <li class="mb-2">Editing & Proofreading</li>
                            </ul>
                            <div class="row justify-content-lg-end justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-md-4 mb-3"> <button class="w-100" type="button"
                                        data-bs-toggle="modal" data-bs-target="#getaquote">Request Quote</button> </div>
                                <div class="col-xl-4 col-md-4 mb-2">
                                    <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat d-flex align-items-center"><i class="fa-solid fa-message" style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i><span
                                            class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span
                                                class="fw-700">Let's Talk</span> </span> </a> </div>
                                <div class="col-xl-4 col-md-4 mb-2 "> <a href="<?php echo $no?>"
                                        class="call d-flex align-items-center"><i class="fa-solid fa-phone"
                                            style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                        <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span
                                                class="fw-700"><?php echo $no?></span> </span> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="5" role="tabpanel" aria-labelledby="5-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="service"> <img class="w-100 lozad" data-src="<?php echo $base_url; ?>assets/img/service/cover.webp">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="fw-700 f-30">Stand Out On The Shelf With Designs For Your Book Covers.</h3>
                            <p>Don't be careless with the cover of your book. A professionally designed book cover
                                instantly conveys the essence and message of your book. Our expert designers have a
                                decade of experience designing book covers of various genres.</p>
                            <ul class="list-unstyled c-list row row-cols-md-2 row-cols-1">
                                <li class="mb-2">Typography Book Covers</li>
                                <li class="mb-2">Graphic designing</li>
                                <li class="mb-2">Typography</li>
                                <li class="mb-2">Cover formatting</li>
                            </ul>
                            <div class="row justify-content-lg-end justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-md-4 mb-3"> <button class="w-100" type="button"
                                        data-bs-toggle="modal" data-bs-target="#getaquote">Request Quote</button> </div>
                                <div class="col-xl-4 col-md-4 mb-2">
                                    <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat d-flex align-items-center"><i class="fa-solid fa-message" style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i><span
                                            class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span
                                                class="fw-700">Let's Talk</span> </span> </a> </div>
                                <div class="col-xl-4 col-md-4 mb-2 "> <a href="<?php echo $no?>"
                                        class="call d-flex align-items-center"><i class="fa-solid fa-phone"
                                            style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                        <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span
                                                class="fw-700"><?php echo $no?></span> </span> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="6" role="tabpanel" aria-labelledby="6-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="service"> <img class="w-100 lozad" data-src="<?php echo $base_url; ?>assets/img/service/editing.webp">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="fw-700 f-30">Experienced Editors Will Evaluate The Quality of Your Books.</h3>
                            <p>At <?php echo $bname?>, we offer the best book editing services that help authors refine and
                                polish their manuscripts. Our team of experienced editors provides personalized feedback
                                and guidance to ensure that every book
                                is of the highest quality. </p>
                            <ul class="list-unstyled c-list row row-cols-md-2 row-cols-1">
                                <li class="mb-2">Line by Line Editing</li>
                                <li class="mb-2">Developmental Editing</li>
                                <li class="mb-2">Proofreading</li>
                                <li class="mb-2">Line Editing</li>
                            </ul>
                            <div class="row justify-content-lg-end justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-md-4 mb-3"> <button class="w-100" type="button"
                                        data-bs-toggle="modal" data-bs-target="#getaquote">Request Quote</button> </div>
                                <div class="col-xl-4 col-md-4 mb-2">
                                    <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat d-flex align-items-center"><i class="fa-solid fa-message" style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i><span
                                            class=""> <span class="clr-1 fw-700">Chat With Us</span> <br> <span
                                                class="fw-700">Let's Talk</span> </span> </a> </div>
                                <div class="col-xl-4 col-md-4 mb-2 "> <a href="<?php echo $no?>"
                                        class="call d-flex align-items-center"><i class="fa-solid fa-phone"
                                            style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                        <span class=""> <span class="clr-1 fw-700">Call Now</span> <br> <span
                                                class="fw-700"><?php echo $no?></span> </span> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="genere py-5 text-center">
        <div class="container-xl">
            <div class="row justify-content-center ">
                <div class="col-lg-10 col-xl-8 ">
                    <h2 class="f-700 f-40">Offering a Wide range of Genres</h2>
                    <p>Our excellence has earned us a reputation as one of the best book publishing services around. We
                        assure you that your book is of the highest quality. Let us help you achieve your goal of
                        publishing your own book on Amazon.</p>
                </div>
            </div>
            <div class="slider">
                <div class="item px-4">
                    <div class="cat"><img data-lazy="assets/img/genre/1.webp">
                        <h6 class="f-24 fw-700">Travel</h6>
                        <p>We offer professional book publishing services for travelogues and outdoor travel guides.</p>
                    </div>
                </div>
                <div class="item px-4">
                    <div class="cat"><img data-lazy="assets/img/genre/2.webp">
                        <h6 class="f-24 fw-700">Action & Adventure</h6>
                        <p>The most popular type of book publishing keeps readers entertained and excited.</p>
                    </div>
                </div>
                <div class="item px-4">
                    <div class="cat"><img data-lazy="assets/img/genre/3.webp">
                        <h6 class="f-24 fw-700">Comics</h6>
                        <p>You can publish thrilling, adventure-serialized stories through comic books.</p>
                    </div>
                </div>
                <div class="item px-4">
                    <div class="cat"><img data-lazy="assets/img/genre/5.webp">
                        <h6 class="f-24 fw-700">Drama</h6>
                        <p>We offer professional book publishing for your characters and drama series.</p>
                    </div>
                </div>
                <div class="item px-4">
                    <div class="cat"><img data-lazy="assets/img/genre/6.webp">
                        <h6 class="f-24 fw-700">Health</h6>
                        <p>Expert-written health books can help people stay healthy.</p>
                    </div>
                </div>
                <div class="item px-4">
                    <div class="cat"><img data-lazy="assets/img/genre/7.webp">
                        <h6 class="f-24 fw-700">Horror</h6>
                        <p>People want thrills and new experiences, so publish your horror stories.</p>
                    </div>
                </div>
                <div class="item px-4">
                    <div class="cat"><img data-lazy="assets/img/genre/8.webp">
                        <h6 class="f-24 fw-700">Romance</h6>
                        <p>Are you a romance author? Show your romantic words to the lovers.</p>
                    </div>
                </div>
                <div class="item px-4">
                    <div class="cat"><img data-lazy="assets/img/genre/9.webp">
                        <h6 class="f-24 fw-700">Science Fiction</h6>
                        <p>Publish the facts about how actual or imagined science affects people and societies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container cta">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-xl-4 col-md-6">
                    <h3 class="f-30 override">Publish Your Own Book</h3>
                    <p class="mb-0 override">Don't wait any longer to share your story with the world. We make it easy
                        and affordable.</p>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-2">
                            <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat d-flex align-items-center"><i class="fa-solid fa-message"
                                    style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                <span class=""> <span class="fw-700 override">Chat With Us</span> <br> <span
                                        class="fw-700 override">Let's Talk</span> </span> </a> </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-2 "> <a href="<?php echo $no?>"
                                class="call d-flex align-items-center"> <i class="fa-solid fa-phone"
                                    style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                <span class=""> <span class="override fw-700">Call Now</span> <br> <span
                                        class="fw-700 override"><?php echo $no?></span> </span> </a> </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 "> <button class="w-100" type="button"
                                data-bs-toggle="modal" data-bs-target="#getaquote">Request Quote</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="fw-700 f-40">Our Process: From Concept to Perfection</h3>
                </div>
            </div>
            <div class="process-wrapper">
                <div class="process-item">
                    <h3>Idea Sharing</h3>
                    <div> <img src="<?php echo $base_url; ?>assets/img/p-1.png"> <img class="p-img" src="<?php echo $base_url; ?>assets/img/p-img-top.webp"> <img
                            src="<?php echo $base_url; ?>assets/img/p-img.png"> <img src="<?php echo $base_url; ?>assets/img/p-img1.png"> </div>
                </div>
                <div class="process-item">
                    <h3>Plot Development</h3>
                    <div> <img src="<?php echo $base_url; ?>assets/img/p-2.png"> <img class="p-img" src="<?php echo $base_url; ?>assets/img/p-img-bottom.webp"> <img
                            src="<?php echo $base_url; ?>assets/img/p-img.png"> <img src="<?php echo $base_url; ?>assets/img/p-img1.png"> </div>
                </div>
                <div class="process-item active">
                    <h3>Character Creation</h3>
                    <div> <img src="<?php echo $base_url; ?>assets/img/p-3.png"> <img class="p-img" src="<?php echo $base_url; ?>assets/img/p-img-top.webp"> <img
                            src="<?php echo $base_url; ?>assets/img/p-img.png"> <img src="<?php echo $base_url; ?>assets/img/p-img1.png"> </div>
                </div>
                <div class="process-item">
                    <h3>Draft Creation</h3>
                    <div> <img src="<?php echo $base_url; ?>assets/img/p-4.png"> <img class="p-img" src="<?php echo $base_url; ?>assets/img/p-img-bottom.webp"> <img
                            src="<?php echo $base_url; ?>assets/img/p-img.png"> <img src="<?php echo $base_url; ?>assets/img/p-img1.png"> </div>
                </div>
                <div class="process-item">
                    <h3>Author Feedback</h3>
                    <div> <img src="<?php echo $base_url; ?>assets/img/p-5.png"> <img class="p-img" src="<?php echo $base_url; ?>assets/img/p-img-top.webp"> <img
                            src="<?php echo $base_url; ?>assets/img/p-img.png"> <img src="<?php echo $base_url; ?>assets/img/p-img1.png"> </div>
                </div>
                <div class="process-item">
                    <h3>Revisions</h3>
                    <div> <img src="<?php echo $base_url; ?>assets/img/p-6.png"> <img class="p-img" src="<?php echo $base_url; ?>assets/img/p-img-bottom.webp"> <img
                            src="<?php echo $base_url; ?>assets/img/p-img.png"> <img src="<?php echo $base_url; ?>assets/img/p-img1.png"> </div>
                </div>
                <div class="process-item">
                    <h3>Final Polishing</h3>
                    <div> <img src="<?php echo $base_url; ?>assets/img/p-7.png"> <img class="p-img" src="<?php echo $base_url; ?>assets/img/p-img-top.webp"> <img
                            src="<?php echo $base_url; ?>assets/img/p-img.png"> <img src="<?php echo $base_url; ?>assets/img/p-img1.png"> </div>
                </div>
                <div class="process-item">
                    <h3>Author Approval</h3>
                    <div> <img src="<?php echo $base_url; ?>assets/img/p-8.png"> <img class="p-img" src="<?php echo $base_url; ?>assets/img/p-img-bottom.webp"> <img
                            src="<?php echo $base_url; ?>assets/img/p-img.png"> <img src="<?php echo $base_url; ?>assets/img/p-img1.png"> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 pricing">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h3 class="fw-700 f-40">Providing You The Most Affordable Pricing</h3>
                    <p>Our spectrum of publishing services at affordable rates and prices offers you a qualified team of
                        professional writers, editors, and publishing mavericks who work collaboratively</p>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 justify-content-center">
                <div class="col mb-4 mb-lg-0">
                    <div class="package">
                        <div class="price">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4 class="f-30">Silver</h4>
                                </div>
                                <!--<div class="col-6 text-end">-->
                                <!--    <p class="mb-0 pe-5">Only</p>-->
                                <!--    <p class="mb-0 f-30 fw-700 my-anim-clr">$499</p>-->
                                <!--    <p class="mb-0 mystrike">$1,099</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="details">
                            <ul class="list-unstyled c-list">
                                <li class="override"> Editing/Formatting according to IPS </li>
                                <li class="override"> Cover, Back, Spine Design </li>
                                <li class="override"> Publishing the book in all 3 formats (eBook, paperback and
                                    Hardcover) </li>
                                <li class="override"> Global availability on Amazon, KDP, Barnes & Noble </li>
                                <li class="override"> Unlimited revisions </li>
                                <li class="override"> ISBN Barcodes </li>
                                <li class="override"> Copyrights </li>
                                <li class="override"> 100% ownership </li>
                                <li class="override"> 100% satisfaction </li>
                                <li class="override"> 100% royalties </li>
                            </ul>
                        </div>
                        <div class="action">
                            <div class="row px-4 mb-2">
                                <div class="col-6"><a href="<?php echo $no?>" class="override">Share your
                                        idea?<br><span class="f-18 fw-700 override"><?php echo $no?></a></div>
                                <div class="col-6">
                                    <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat override">Want to discuss?<br><span
                                            class="f-18 fw-700 override">Live Chat Now</a></div>
                            </div><button class="w-100" type="button" data-bs-toggle="modal"
                                data-bs-target="#getaquote">GET STARTED</button>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mb-lg-0">
                    <div class="package">
                        <div class="price">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4 class="f-30">Gold</h4>
                                </div>
                                <!--<div class="col-6 text-end">-->
                                <!--    <p class="mb-0 pe-5">Only</p>-->
                                <!--    <p class="mb-0 f-30 fw-700 my-anim-clr">$799</p>-->
                                <!--    <p class="mb-0 mystrike">$1,499</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="details">
                            <ul class="list-unstyled c-list">
                                <li class="override">Editing/Proofreading of the complete manuscript</li>
                                <li class="override">Formatting according to IPS</li>
                                <li class="override">Cover, Back, Spine Design</li>
                                <li class="override">Images/illustrations</li>
                                <li class="override">Author Central Page Creation</li>
                                <li class="override">Unlimited revisions</li>
                                <li class="override">Publishing the book in all 3 formats (eBook, paperback and
                                    Hardcover)</li>
                                <li class="override">Global availability on Amazon, KDP, other 10+ Platforms</li>
                                <li class="override">2 Unique Book cover design according to your instruction</li>
                                <li class="override">Publication Consultancy</li>
                                <li class="override">ISBN Barcodes</li>
                                <li class="override">Copyrights</li>
                                <li class="override">100% ownership</li>
                                <li class="override">100% royalties</li>
                                <li class="override">100% satisfaction guarantee</li>
                            </ul>
                        </div>
                        <div class="action">
                            <div class="row px-4 mb-2">
                                <div class="col-6"><a href="<?php echo $no?>" class="override">Share your
                                        idea?<br><span class="f-18 fw-700 override"><?php echo $no?></a></div>
                                <div class="col-6">
                                    <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat override">Want to discuss?<br><span
                                            class="f-18 fw-700 override">Live Chat Now</a></div>
                            </div><button class="w-100" type="button" data-bs-toggle="modal"
                                data-bs-target="#getaquote">GET STARTED</button>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mb-lg-0">
                    <div class="package">
                        <div class="price">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4 class="f-30">Platinum</h4>
                                </div>
                                <!--<div class="col-6 text-end">-->
                                <!--    <p class="mb-0 pe-5">Only</p>-->
                                <!--    <p class="mb-0 f-30 fw-700 my-anim-clr">$1,499</p>-->
                                <!--    <p class="mb-0 mystrike">$3,000</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="details">
                            <ul class="list-unstyled c-list">
                                <li class="override">Editing/Proofreading of the complete manuscript</li>
                                <li class="override">Interior Design (Black and White / Full Color)</li>
                                <li class="override">Formatting according to IPS</li>
                                <li class="override">Typesetting/ Layout Adjusments</li>
                                <li class="override">Images/illustrations</li>
                                <li class="override">Author Central Page Creation</li>
                                <li class="override">Unlimited revisions</li>
                                <li class="override">Publishing the book in all 3 formats (eBook, paperback and
                                    Hardcover)</li>
                                <li class="override">Global availability on Amazon, Kdp, B&N Press, Apple & Google Book
                                    Store and 100+ other platforms</li>
                                <li class="override">3 Unique Book cover design according to your instruction</li>
                                <li class="override">Publication Consultancy</li>
                                <li class="override">ISBN Barcodes</li>
                                <li class="override">Author & Book Website Setup</li>
                                <li class="override">Copyrights</li>
                                <li class="override">100% ownership</li>
                                <li class="override">100% royalties</li>
                                <li class="override">100% satisfaction guarantee</li>
                            </ul>
                        </div>
                        <div class="action">
                            <div class="row px-4 mb-2">
                                <div class="col-6"><a href="<?php echo $no?>" class="override">Share your
                                        idea?<br><span class="f-18 fw-700 override"><?php echo $no?></a></div>
                                <div class="col-6">
                                    <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat override">Want to discuss?<br>
                                        <span class="f-18 fw-700 override">Live Chat Now</a></div>
                            </div><button class="w-100" type="button" data-bs-toggle="modal"
                                data-bs-target="#getaquote">GET STARTED</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 pricing">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h3 class="fw-700 f-40">Why Choose Us?</h3>
                    <p><?php echo $bname?> offers comprehensive range of book publishing services to help authors publish
                        their books.Our self book publishing experts have a decade of experience and are committed to
                        meeting all your expectations.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row mb-2">
                        <div class="col-2"><strong class="clr-1 f-70 subhead">01</strong></div>
                        <div class="col-10">
                            <h4 class="fw-700 f-24">100% Ownership</h4>
                            <p>You get all the Ownership We make all the effort. You get all the possessions with our
                                expert book Publishing help.</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2"><strong class="clr-1 f-70 subhead">02</strong></div>
                        <div class="col-10">
                            <h4 class="fw-700 f-24">Affordability</h4>
                            <p>We are perfectionists and firmly believe perfection shouldn’t cost your life savings. Our
                                prices are affordable, and our expert book Publishing online services are unbeatable.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2"><strong class="clr-1 f-70 subhead">03</strong></div>
                        <div class="col-10">
                            <h4 class="fw-700 f-24">Fast Delivery</h4>
                            <p>Our top notch work not only delivers as per your specifications, we understand that time
                                is money and meet all our deadlines through expert book Publishing help.</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2"><strong class="clr-1 f-70 subhead">04</strong></div>
                        <div class="col-10">
                            <h4 class="fw-700 f-24">Customer Satisfaction</h4>
                            <p>Customer satisfaction is our most priority, as it’s the most crucial part of any
                                business. We have proved every time that we never compromise on the quality and
                                standards of our work.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row text-center">
                        <div class="col-6 ">
                            <div class="box mb-3">
                                <p class="fw-700 override f-40 mb-0 subhead">900</p>
                                <p class="mb-0 override">Books Published</p>
                            </div>
                            <div class="box">
                                <p class="fw-700 override f-40 mb-0 subhead">50</p>
                                <p class="mb-0 override">Publishing Experts</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box mb-3 mt-lg-3">
                                <p class="fw-700 override f-40 mb-0 subhead">7</p>
                                <p class="mb-0 override">Year of Experience</p>
                            </div>
                            <div class="box ">
                                <p class="fw-700 override f-40 mb-0 subhead">100%</p>
                                <p class="mb-0 override">Satisfaction Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container cta">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-xl-4 col-md-6">
                    <h3 class="f-30 override">Publish Your Own Book</h3>
                    <p class="mb-0 override">Don't wait any longer to share your story with the world. We make it easy
                        and affordable.</p>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-2">
                            <a href="<?php echo $base_url; ?>javascript:void(toggleChat())" class="chat d-flex align-items-center"><i class="fa-solid fa-message"
                                    style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                <span class=""> <span class="override fw-700">Chat With Us</span> <br> <span
                                        class="fw-700 override">Let's Talk</span> </span> </a> </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-2 "> <a href="<?php echo $no?>"
                                class="call d-flex align-items-center"> <i class="fa-solid fa-phone"
                                    style="color: #ffffff; background-color:#531a3b; padding: 8px; border-radius: 50px; margin-right: 5px;"></i>
                                <span class=""> <span class="override fw-700">Call Now</span> <br> <span
                                        class="fw-700 override"><?php echo $no?></span> </span> </a> </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 "> <button class="w-100" type="button"
                                data-bs-toggle="modal" data-bs-target="#getaquote">Request Quote</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 reviews">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h3 class="fw-700 f-40">What Our Clients Say</h3>
                    <p>We have been in the industry for a long period, allowing us to gather a bunch of customers who
                        praise our work. Don’t just believe it, read it yourself.</p>
                </div>
            </div>
            <div class="slider">
                <div class="item px-3">
                    <div class="box review p-3 text-center">
                        <div class="image"><img class="mx-auto" data-lazy="assets/img/client-1.webp"></div>
                        <div class="discription override"><strong>Lucy Oliver</strong>
                            <p class="override">I haven't found a company that has been great about helping me resolve
                                the issues I encountered with my book. Their work is wonderful, and the staff is
                                responsive. They are a great partner to have on my publishing journey.</p>
                        </div>
                    </div>
                </div>
                <div class="item px-3">
                    <div class="box review p-3 text-center">
                        <div class="image"><img class="mx-auto" data-lazy="assets/img/client-2.webp"></div>
                        <div class="discription override"><strong>Nancy Clavin</strong>
                            <p class="override"><?php echo $bname?> are the best for book publishing. I am thankful to them
                                for helping me in this matter, as I was very worried about designing my book cover
                                myself and editing manuscript but their service is very professional. I am planning to
                                hire them for marketing in future as well.</p>
                        </div>
                    </div>
                </div>
                <div class="item px-3">
                    <div class="box review p-3 text-center">
                        <div class="image"><img class="mx-auto" data-lazy="assets/img/client-1.webp"></div>
                        <div class="discription override"><strong>Nora Tinsley</strong>
                            <p class="override">I had a great experience with Dan Harvey and <?php echo $bname?>. They
                                helped me with every aspect of publishing, including editing, formatting and book
                                covers. I would recommend them to my relatives.</p>
                        </div>
                    </div>
                </div>
                <div class="item px-3">
                    <div class="box review p-3 text-center">
                        <div class="image"><img class="mx-auto" data-lazy="assets/img/client-2.webp"></div>
                        <div class="discription override"><strong>Steve Griffin</strong>
                            <p class="override"><?php echo $bname?> exceeded my expectations. Their attention to detail,
                                professionalism, and dedication made the entire publishing process smooth and
                                stress-free. Highly recommended!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-main-sec">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row justify-content-between">
                            <div class="col-lg-2 col-md-8 col-sm-12 col-12">
                                <div class="footer-logo-area">
                                    <div class="footer-logo">
                                        <img src="./assets/img/2.png" alt="logo" class="img-fluid" width="200px">
                                    </div>
                                </div>

                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="footer-info-area text-white">
                                    <h4>About Us</h4>
                                    <p>We provide excellent and customized editing, proofreading, and publishing
                                        services to our clients at a reasonable price. We also assist our clients in
                                        promoting their work through various media and channels, leveraging cutting-edge
                                        techniques and skills. <?php echo $bname?> is your one-stop shop for all content
                                        needs.</p>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="footer-info-area">
                                    <ul class="list-unstyled">
                                        <li>
                                            <p>
                                                <i class="fa-solid fa-location-dot px-2"></i>
                                                <?php echo $add?>
                                            </p>
                                        </li>
                                        <li>
                                            <a href="<?php echo $no?>">
                                                <i class="fa-solid fa-phone"></i> <?php echo $no?> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url; ?>mailto:info@<?php echo $domainname?>">
                                                <i class="fa-solid fa-envelope"></i>
                                                info@<?php echo $domainname?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer-links-area">

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center footer-copyright">
                            <p>© <?php echo $bname?> 2026. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="getaquote" tabindex="-1" aria-labelledby="getaquoteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body lozad" data-background-image="assets/img/newyear-offer.webp"
                    style="background-size:cover;background-position:center">
                    <h3 class="f-24 fw-700 text-center">Publish your book @ 50% Off<span class="clr-1"></span><br>Few
                        Slots Left</h3> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <form class="text-start mt-5 mb-4" action="sending.php" method="post">
                        <div class="row justify-content-center">
                            <div class="form-group col-md-12 ">
                                <input class="form-control mb-3" type="text" name="name" placeholder="Your Name" required=""
									autocomplete="name"
									value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
								<?php echo !empty($error['name']) ? $error['name'] : ''; ?>
                                <input class="form-control mb-3" type="email" name="email" placeholder="Your Email"
									value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>"
									required="required" autocomplete="email">
								<?php echo !empty($error['email']) ? $error['email'] : ''; ?> 
								
                                <input class="form-control new-phone mb-3" type="tel" name="phone" minlength="10" maxlength="12"
									placeholder="Your Phone"
									value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required="required" autocomplete="tel">
								<?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>
                            </div>
                            <div class="form-group col-md-12 ">
                               <input class="form-control" autocomplete="off" name="message"
									placeholder="Enter Brief"value="<?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?>">
								<?php echo !empty($error['message']) ? $error['message'] : ''; ?>
                                <button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="Submit Now" style="margin-bottom: 15px !important;">Submit</button> 
                                <input type="hidden" name="domain" value="<?php echo $domainname ?>">
                				<input type="hidden" name="ip" value="<?php echo $geoplugin->ip ?>">
                				<input type="hidden" name="city" value="<?php echo $geoplugin->city ?>">
                				<input type="hidden" name="region" value="<?php echo $geoplugin->region ?>">
                				<input type="hidden" name="country" value="<?php echo $geoplugin->countryName ?>">
                				<input type="hidden" name="url" value='<?php echo $current_url ?>'>
                				<input type="hidden" name="domain" value="<?php echo $domainname ?>">
                				<input type="hidden" name="subject" value="Popup Form (<?php echo $current_url ?>)">
                				<input type="hidden" name="source" value="<?php echo $lead_source ?>">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="modal fade" id="offerModal" tabindex="-1" aria-labelledby="offerModalLabel" aria-hidden="true">-->
    <!--    <div class="modal-dialog modal-dialog-centered modal-xl">-->
    <!--        <div class="modal-content lozad " data-background-image="assets/img/newyear-offer.webp"-->
    <!--            style="background-size: cover;background-position: top;">-->
    <!--            <div class="modal-body text-center py-4 px-0"><button type="button" class="btn-close"-->
    <!--                    data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--                <h1 class="f-40 fw-700">Only 10 Slots Lef</h1>-->
    <!--                <h2 class="f-30 fw-700">Reserve Your Discount</h2>-->
    <!--                <form class="text-start mb-5" action="sending.php" method="post">-->
    <!--                    <div class="row justify-content-center ">-->
    <!--                        <div class="form-group col-md-5 ">-->
    <!--                            <input class="form-control mb-3" type="text" name="cn"-->
    <!--                                placeholder="Your Name">-->
    <!--                                <input class="form-control mb-3" type="email" name="em" placeholder="Your Email" required="required">-->
    <!--                                <input class="form-control " type="tel" name="pn" placeholder="Your Phone" value="" required="required">-->
    <!--                        </div>-->
    <!--                        <div class="form-group col-md-5 ">-->
    <!--                            <textarea class="form-control mb-3" autocomplete="nope" name="msg" placeholder="Enter Brief" rows="4"></textarea>-->
    <!--                            <button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="Submit Now">Submit</button>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </form>-->
    <!--                <p class="c-claim ">Signup Today to Claim Your Discount. Get<br> Started before it’s too late!</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <script type="text/javascript" src="<?php echo $base_url; ?>assets/js/plugin.js"></script>
    <script type="text/javascript" src="<?php echo $base_url; ?>assets/js/lozad.min.js"></script>
    <script type="text/javascript" src="<?php echo $base_url; ?>assets/js/custom.js"></script>
    <script>
        const observer = lozad('.lozad', {
            rootMargin: '10px 0px',
            threshold: 0.1,
            enableAutoReload: true
        });
        observer.observe();
    </script>
    <script>
        setTimeout(function () {
            $('#getaquote').modal('show');
        }, 10);
        $(function () {
            var $anchors = $('.process-item');
            (function _loop(idx) {
                $anchors.removeClass('active').eq(idx).addClass('active');
                setTimeout(function () {
                    _loop((idx + 1) % $anchors.length);
                }, 3000);
            }(0));
        });
    </script>
    <script src="<?php echo $base_url; ?>assets/js/intlTelInput-jquery.min.js"></script>
    <script src="<?php echo $base_url; ?>assets/js/utils.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                var myModal = new bootstrap.Modal(document.getElementById("getaquote"));
                myModal.show();
            }, 3000); // 3 seconds ke baad modal open hoga
        });
    </script>
<?php require '../inc/chat.php';?>