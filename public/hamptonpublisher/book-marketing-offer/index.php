<?php
require '../inc/global.php';
require '../inc/form.php';
?>

<!DOCTYPE html>
<html>

<head>

    <title>Reach Your Readers Worldwide with Hamton Publishers </title>
    <meta name="description"
        content="Boost book sales and exposure with our book marketing services. Our professionals focus on effective promotion, social media outreach, and targeted advertising." />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo.png">
    <link href="assets/css/m-style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
      <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
      <link rel="stylesheet" as="style" type="text/css" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css">
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TNRCHRH3');</script>
<!-- End Google Tag Manager -->

    <!--<meta name="ip2loc" content="36.50.12.97">-->

 
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNRCHRH3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
    <section>
        <div class="floatbutton">
          <div class="btns_wrap">
              <a href="javascript:void(toggleChat())" class="chat_wrap" title="Live Chat" target="_self" contenteditable="false" style="cursor: pointer;">
                <span class="icoo"><i class="fa fa-comment"></i></span>
                  <span>Chat With Us</span>
              </a>
              <a href="<?php echo $no1 ?>" class="call_wrap" contenteditable="false" style="cursor: pointer;">
                  <span class="icoo"><i class="fa fa-phone"></i></span>
                  <span><?php echo $no ?> </span>
              </a>
          </div>
          <div class="clickbutton">
              <div class="crossplus open_popup" role="button" contenteditable="false"> LET'S GET STARTED</div>
          </div>
          <div class="banner-form">
              <h3 class="px-3 py-2">Sign Up Now &amp; <br><strong>&amp; GET 60% OFF</strong></h3>
              <div class="banform">
                  <div class="container">
                      <div class="row">
                          <div class="ban-form">
                              <form class="addsender"  action="<?php echo $current_url ?>" method="post">
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
                                              <input class="form-control" name="email" placeholder="Enter your email" type="text" required 
                  value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
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
                                           <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="fldset">
                                              <input id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit" class="addsenderbtn">
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
      </section>


    <header id="myHeader" class="">
        <nav class="py-3">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col-md-3 col-6">
                        <a href="index.php" class="logo">
                            <img class=" lozad" data-src="assets/images/logo.png" alt="Hamton Publishers" />
                        </a>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9 col-5">
                        <ul class="list-unstyled mb-0 d-flex justify-content-end align-items-center">
                            <li class="me-5 d-none d-md-block">
                                <a href="<?php echo $no1 ?>" class="text-white fw-700 d-flex align-items-center">
                                    <i class="fas fa-phone-alt me-3 clr-2"></i>
                                    <?php echo $no ?>
                                </a>
                            </li>
                            <li class="me-5 d-none d-md-block">
                                <a href="javascript:;" class="btn chat">
                                    <span class="fw-500">
                                        Let’s Chat
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                            </li>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
       
    </header>
    
    <section class="index-wrap-1 home-banner lozad position-relative" data-background-image="assets/images/banner-bg-1.jpg"
        data-background-image="assets/images/banner-bg-1.jpg" >
        <div class="container position-relative">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-7 mouseovr_elmnt_lft_cls wow bounceInLeft" data-wow-duration="2s"
                    data-wow-delay="0.2s">
                    <div class="position-relative banner-content">
                        <p class="p-sub-heading text-uppercase pb-2 text-white">
                            WELCOME TO OUR WEBSITE
                        </p>
                        <h1 class="text-white pb-3" style="font-size: 50px;">
                            Unlocking Success <br>
                            <span class="text-white d-inline-block position-relative banner-round-border-parent">
                                Through</span><span class="clr-2"> Book Marketing!</span>
                        </h1>
                        <p class="mb-xxl-5 mb-lg-4 text-white">
                            Get ready to see your book soar to new heights with Hampton Publishers! We're here to help
                            your book get the attention it deserves. With our exceptional book marketing services, we'll
                            boost your book's visibility and skyrocket your sales. Let's turn those pages into profits
                            together!

                        </p>
                        <a href="javascript:;" class="btn btn-dark me-2 me-md-4 popup-btn">
                            <span class="fw-500">
                                Get Started
                            </span>
                            <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                alt="Hamton Publishers" />
                        </a>
                        <a href="javascript:;" class="btn chat">
                            <span class="fw-500">
                                Let’s Chat
                            </span>
                            <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                alt="Hamton Publishers" />
                        </a> <img class="lozad banner-plane d-none d-md-block" data-src="assets/images/banner-plane.png"
                            alt="Hamton Publishers" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 d-lg-block mouseovr_elmnt_rght_cls wow bounceInRight" data-wow-duration="2s"
                    data-wow-delay="0.2s">
                    <div class="position-relative text-center">
                        <img class="lozad main-banner-book" data-src="assets/images/banner-book.png"
                            alt="Hamton Publishers" />
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="index-wrap-2 lozad position-relative"
        data-background-image="#!">
        <div class="container position-relative ">
            <div class="row">
                <div class="col-xl-5 col-md-6 col-lg-6 text-white wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                    <p class="p-sub-heading text-uppercase pb-2">
                        About
                    </p>
                    <h2 class="pb-3">
                        Supercharge Your Book's Success with Targeted <span class="clr-2">Marketing!
                        </span>
                    </h2>
                    <p class="pb-4">
                        Unlock your path to literary triumph with Hampton Publishers! We're your trusted partner in the
                        world of book marketing and book promotion services, renowned for our strategic process. Our
                        mission is to empower authors like you to reach new heights effortlessly. Let our expert team
                        work their magic, utilizing state-of-the-art strategies to turn your book into a bestseller. Get
                        ready to captivate audiences and achieve unprecedented success with us!

                    </p>
                    <a href="javascript:;" class="btn btn-dark me-2 me-md-4 popup-btn">
                        <span class="fw-500">
                            Get Started
                        </span>
                        <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                            alt="Hamton Publishers" />
                    </a>
                    <a href="javascript:;" class="btn chat">
                        <span class="fw-500">
                            Let’s Chat
                        </span>
                        <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                            alt="Hamton Publishers" />
                    </a>
                </div>
                <div class="col-lg-7 col-md-6 text-end wow bounceInRight" style="text-align: center !important;" data-wow-duration="2s" data-wow-delay="0.3s">
                    <img class="lozad  d-lg-inline-block about-img" data-src="assets/images/new-index-about.png"
                        alt="Hamton Publishers"/>
                </div>
            </div>
        </div>
    </section>
    <section class="book-marketing-wrap-3 lozad" data-background-image="assets/images/book-marketing/wrap-3-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-dark">
                        Diverse Book <span class="clr-1">Promo</span> <span class="clr-2">Methods </span>
                    </h2>
                </div>
            </div>
            <div class="row mt-xxl-5 mt-lg-3 pt-4 align-items-center">
                <div class="col-lg-3">
                    <ul class="tabs book-marketing-inner-tab-ul mb-0 list-unstyled">
                        <li class="current" data-targetit="marketing-1">
                            <div class="img-icon">
                                <img class="lozad" data-src="assets/images/wrap-3-icon-1.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="content">
                                <h6 class="mb-0">
                                    Social Media <br> Marketing
                                </h6>
                            </div>
                        </li>
                        <li class="" data-targetit="marketing-2">
                            <div class="img-icon">
                                <img class="lozad" data-src="assets/images/book-promotion/wrap-3-icon-2.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="content">
                                <h6 class="mb-0">
                                    Search Engine <br> Optimization
                                </h6>
                            </div>
                        </li>
                        <li class="" data-targetit="marketing-3">
                            <div class="img-icon">
                                <img class="lozad" data-src="assets/images/book-promotion/wrap-3-icon-3.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="content">
                                <h6 class="mb-0">
                                    Amazon <br> Marketing
                                </h6>
                            </div>
                        </li>
                        <li class="" data-targetit="marketing-4">
                            <div class="img-icon">
                                <img class="lozad" data-src="assets/images/book-promotion/wrap-3-icon-4.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="content">
                                <h6 class="mb-0">
                                    Content <br> Marketing
                                </h6>
                            </div>
                        </li>
                        <li class="" data-targetit="marketing-5">
                            <div class="img-icon">
                                <img class="lozad" data-src="assets/images/book-promotion/new-index-tab-icon-5.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="content">
                                <h6 class="mb-0">
                                    Email <br> Marketing
                                </h6>
                            </div>
                        </li>
                        <li class="" data-targetit="marketing-6">
                            <div class="img-icon">
                                <img class="lozad" data-src="assets/images/book-promotion/new-index-tab-icon-6.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="content">
                                <h6 class="mb-0">
                                    TV <br> Interview
                                </h6>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 text-center text-lg-start pt-3 pt-lg-0">
                    <div class="current my-tabs marketing-1">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-12">
                                <h3 class="mb-3">
                                    Boost Your Book's Buzz with Social Media Magic!

                                </h3>
                                <p class="mb-4">
                                    Online platforms like Facebook, Instagram, and LinkedIn are like treasure troves for
                                    authors, letting you connect with readers from all corners of the globe. With our
                                    expert social media marketing, your book's journey goes from discovery to full-on
                                    engagement! We use laser-focused targeting to make sure your story reaches just the
                                    right people, skyrocketing your sales and making your literary adventure a smashing
                                    success!

                                </p>
                                <a href="javascript:;" class="btn btn-dark me-2 me-md-4 popup-btn">
                                    <span class="fw-500">
                                        Get Started
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                                <a href="javascript:;" class="btn chat">
                                    <span class="fw-500">
                                        Let’s Chat
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                            </div>
                            <div class="col-lg-6 d-none d-xl-block">
                                <img class="lozad w-100" data-src="assets/images/new-index-tab-1.png"
                                    alt="Hamton Publishers" />
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs marketing-2">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-12">
                                <h3 class="mb-3">
                                    Search Engine Optimization
                                </h3>
                                <p class="mb-4">
                                    We specialize in the art of optimizing book websites for search engines. Our mission
                                    is simple yet powerful: to ensure maximum visibility and increased discoverability
                                    for your online platform. With our cutting-edge techniques and strategic approach,
                                    we'll help your website rise above the competition and attract the attention it
                                    deserves.

                                </p>
                                <a href="javascript:;" class="btn btn-dark me-2 me-md-4 popup-btn">
                                    <span class="fw-500">
                                        Get Started
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                                <a href="javascript:;" class="btn chat">
                                    <span class="fw-500">
                                        Let’s Chat
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                            </div>
                            <div class="col-lg-6 d-none d-xl-block">
                                <img class="lozad w-100" data-src="assets/images/new-index-tab-2.png"
                                    alt="Hamton Publishers" />
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs marketing-3">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-12">
                                <h3 class="mb-3">
                                    Amazon Marketing
                                </h3>
                                <p class="mb-4">
                                    Use our tried-and-true marketing techniques to increase your book's visibility on
                                    Amazon. Our tailored approach has led to a staggering 30% increase in book sales and
                                    a 40% rise in positive reviews. Don't miss the opportunity to reach millions of
                                    readers—let us propel your book to success!

                                </p>
                                <a href="javascript:;" class="btn btn-dark me-2 me-md-4 popup-btn">
                                    <span class="fw-500">
                                        Get Started
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                                <a href="javascript:;" class="btn chat">
                                    <span class="fw-500">
                                        Let’s Chat
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                            </div>
                            <div class="col-lg-6 d-none d-xl-block">
                                <img class="lozad w-100" data-src="assets/images/new-index-tab-3.png"
                                    alt="Hamton Publishers" />
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs marketing-4">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-12">
                                <h3 class="mb-3">
                                    Content Marketing (Press release, & featured articles)
                                </h3>
                                <p class="mb-4">
                                    Discover the power of words with our exclusive Content Marketing services, tailored
                                    to authors and their books. Our skillfully prepared press releases and fascinating
                                    featured articles will heighten your literary gem. Experience our book promotion
                                    strategy that guarantees your book will shine on center stage, engaging audiences
                                    and leaving a lasting literary effect.

                                </p>
                                <a href="javascript:;" class="btn btn-dark me-2 me-md-4 popup-btn">
                                    <span class="fw-500">
                                        Get Started
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                                <a href="javascript:;" class="btn chat">
                                    <span class="fw-500">
                                        Let’s Chat
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                            </div>
                            <div class="col-lg-6 d-none d-xl-block">
                                <img class="lozad w-100" data-src="assets/images/new-index-tab-4.png"
                                    alt="Hamton Publishers" />
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs marketing-5">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-12">
                                <h3 class="mb-3">
                                    Email Marketing
                                </h3>
                                <p class="mb-4">
                                    Do you want your stories to land directly in the hearts and inboxes of your audience? Join the journey where each email sparks excitement and anticipation. Explore the untapped potential of our email marketing – where connection and engagement come alive.

                                </p>
                                <a href="javascript:;" class="btn btn-dark me-2 me-md-4 popup-btn">
                                    <span class="fw-500">
                                        Get Started
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                                <a href="javascript:;" class="btn chat">
                                    <span class="fw-500">
                                        Let’s Chat
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                            </div>
                            <div class="col-lg-6 d-none d-xl-block">
                                <img class="lozad w-100" data-src="assets/images/new-index-tab-5.png"
                                    alt="Hamton Publishers" />
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs marketing-6">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-12">
                                <h3 class="mb-3">
                                    TV Interview
                                </h3>
                                <p class="mb-4">
                                    Using the transformative power of television interviews, propel your book to the forefront. Connect with a vast audience by imparting the fundamental nature of your literary masterpiece; establish a profound connection with them. Promote your authorial stature using engaging television exposure, skillfully constructing a memorable storyline that transcends the confines of the screen.

                                </p>
                                <a href="javascript:;" class="btn btn-dark me-2 me-md-4 popup-btn">
                                    <span class="fw-500">
                                        Get Started
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                                <a href="javascript:;" class="btn chat">
                                    <span class="fw-500">
                                        Let’s Chat
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                                        alt="Hamton Publishers" />
                                </a>
                            </div>
                            <div class="col-lg-6 d-none d-xl-block">
                                <img class="lozad w-100" data-src="assets/images/new-index-tab-6.png"
                                    alt="Hamton Publishers" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-6 col-md-5 col-12 text-white mb-4 mb-md-0 wow bounceInLeft" data-wow-duration="2s"
                    data-wow-delay="0.2s">
                    <h4 class="mb-0">
                        Start Marketing Today!
                    </h4>
                </div>
                <div class="col-lg-6 col-md-7 col-12 text-center text-md-end wow bounceInRight" data-wow-duration="2s"
                    data-wow-delay="0.3s">
                    <a href="javascript:;" class="btn btn-dark me-2 me-md-4 popup-btn">
                        <span class="fw-500">
                            Get Started
                        </span>
                        <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                            alt="Hamton Publishers" />
                    </a>
                    <a href="javascript:;" class="btn chat">
                        <span class="fw-500">
                            Let’s Chat
                        </span>
                        <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg"
                            alt="Hamton Publishers" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="mb-4">
        <section class="index-wrap-3 position-relative wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.2s">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <ul class="nav-1 tabs tabs-slider">
                            <li class="current code-1" data-targetit="portfolio-1"><a href="javascript:;">Fiction</a>
                            </li>
                            <li class="code-2" data-targetit="portfolio-2"><a href="javascript:;">Non-Fiction</a></li>
                            <li class="code-3" data-targetit="portfolio-3"><a href="javascript:;">Biography</a></li>
                            <li class="code-4" data-targetit="portfolio-4"><a href="javascript:;">Autobiography</a></li>
                            <li class="code-5" data-targetit="portfolio-5"><a href="javascript:;">Memoir</a></li>
                            <li class="code-6" data-targetit="portfolio-6"><a href="javascript:;">Novel</a></li>
                            <li class="code-7" data-targetit="portfolio-7"><a href="javascript:;">Comic</a></li>
                            <li class="code-8" data-targetit="portfolio-8"><a href="javascript:;">Speech</a></li>
                            <!-- <li class="code-9" data-targetit="portfolio-9"><a href="javascript:;">Children Book</a></li>
                            <li class="code-10" data-targetit="portfolio-10"><a href="javascript:;">Horror</a></li>
                            <li class="code-11" data-targetit="portfolio-11"><a href="javascript:;">Sci-Fi</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="padding-custom">
                    <div class="current my-tabs portfolio-1">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Fiction
                                </h3>
                                <p>
                                    With the magic of words, our eBook ghostwriter can create a peculiar world where
                                    Frankenstein’s monster cackles, brews stained cauldrons, and rides a broom.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/fiction/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/fiction/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/fiction/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/fiction/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs portfolio-2">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Non-Fiction
                                </h3>
                                <p>
                                    Quality-assured ghostwriting services – our professional ghostwriting services have
                                    a fundamental approach to narrative (storytelling) and often refer specifically to
                                    prose writing.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/non-fiction/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/non-fiction/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/non-fiction/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/non-fiction/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs portfolio-3">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Biography
                                </h3>
                                <p>
                                    Over the years, through our eBook ghostwriting services, we have authored
                                    innumerable poignant biographies that chronicle insights into personal entries and
                                    evoke diverse emotions.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/biography/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/biography/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/biography/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/biography/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs portfolio-4">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Autobiography
                                </h3>
                                <p>
                                    You don’t have to be famous to tell your story. Our ghost writing services can mold
                                    personal life stories into immaculate masterpieces.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/autobiography/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/autobiography/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/autobiography/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/autobiography/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs portfolio-5">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Memoir
                                </h3>
                                <p>
                                    Every person is a living vault of stories that come from their personal experiences.
                                    Our ghostwriting services weave those memories and produce an impeccable memoir.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/memoir-writing/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/memoir-writing/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/memoir-writing/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/memoir-writing/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs portfolio-6">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Novel Writing
                                </h3>
                                <p>
                                    We have helped individuals to achieve their dream of becoming the next Stephen King.
                                    Our ghostwriting services will help you write the next page-turner.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/novel-writing/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/novel-writing/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/novel-writing/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/novel-writing/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs portfolio-7">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Comic Writing
                                </h3>
                                <p>
                                    Our eBook ghostwriting services have authored comic books for individuals who were
                                    adamant about the idea and perception that pictures speak a thousand words.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/comic-book-writing/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/comic-book-writing/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/comic-book-writing/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/comic-book-writing/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs portfolio-8">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Speech Writing
                                </h3>
                                <p>
                                    Our professional ghostwriting services can help you orate a speech that delivers the
                                    desired effect on the audience. Mastering public speaking has never been easier.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/speech-writing/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/speech-writing/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/speech-writing/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/speech-writing/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="my-tabs portfolio-9">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Children Book Writing
                                </h3>
                                <p>
                                    Everybody deserves to read, right? We think so, too. Our ghostwriting services have
                                    helped authors curate children’s books that are now mainstays of multiple
                                    kindergarten libraries.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/children-book-writing/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/children-book-writing/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/children-book-writing/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/children-book-writing/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs portfolio-10">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Horror Writing
                                </h3>
                                <p>
                                    Expect the unexpected. Our ghostwriting services can produce spine-chilling
                                    masterpieces that will haunt your readers to the core – forcing them to keep the
                                    night light on.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/horror-writing/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/horror-writing/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/horror-writing/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/horror-writing/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-tabs portfolio-11">
                        <div class="row pb-3 text-white">
                            <div class="col-lg-10">
                                <h3 class="pb-2">
                                    Sci-Fi Writing
                                </h3>
                                <p>
                                    Our eBook ghostwriter can produce works that are beyond admirable. They can sign a
                                    peace treaty between aliens and humans – land a flying saucer on Earth.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/scifi-writing/1.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/scifi-writing/2.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/scifi-writing/3.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="portfolio-item">
                                    <img class="lozad" data-src="assets/images/portfolio/scifi-writing/4.png"
                                        alt="Hamton Publishers" />
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    </div>
    <section class="index-wrap-5 lozad" data-background-image="assets/images/wrap-5-bg.png">
        <div class="container">
            <div class="row justify-content-center  wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="col-lg-7 text-center">
                    <h2 class="text-black pb-1 pb-md-3">
                        Words That Transcend
                    </h2>
                    <p>
                        Our expert services for authors and eBook ghostwriters inspire unbounded creativity. Once you work with our skilled eBook ghostwriter, you will know.

                    </p>
                </div>
            </div>
            <div class="row pt-0 pt-md-5 justify-content-lg-start justify-content-center">
                <div class="col-lg-3 col-md-4 col-10 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="wrap-5-item-main wrap-5-item-main-2 lozad"
                        data-background-image="assets/images/wrap-5-item-bg.png">
                        <div class="wrap-5-item-main-icon">
                            <img class="lozad" data-src="assets/images/wrap-5-icon-1.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="wrap-5-item-main-content">
                            <h5 class="mb-0">
                                <a href="book-promotion.html">Book Promotion</a>
                            </h5>
                            <div class="wrap-5-item-main-content-parah scroll-invisible">
                                <p class="mb-0">
                                    Effective book promotion is more than just writing; it's about showing your story of the book. Professional ghostwriting services can help ambitious authors flourish.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="wrap-5-item-main lozad" data-background-image="assets/images/wrap-5-item-bg.png">
                        <div class="wrap-5-item-main-icon">
                            <img class="lozad" data-src="assets/images/wrap-5-icon-2.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="wrap-5-item-main-content">
                            <h5 class="mb-0">
                                <a href="book-editing-and-formatting.html">Book Editing</a>
                            </h5>
                            <div class="wrap-5-item-main-content-parah scroll-invisible">
                                <p class="mb-0">
                                    Professional ghostwriting services expand to demanding book editing, ensuring your treasured and esteemed manuscript is polished to perfection before publication.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="wrap-5-item-main wrap-5-item-main-2 lozad"
                        data-background-image="assets/images/wrap-5-item-bg.png">
                        <div class="wrap-5-item-main-icon">
                            <img class="lozad" data-src="assets/images/wrap-5-icon-3.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="wrap-5-item-main-content">
                            <h5 class="mb-0">
                                <a href="author-branding.html">Author Branding</a>
                            </h5>
                            <div class="wrap-5-item-main-content-parah scroll-invisible">
                                <p class="mb-0">
                                    Build your author brand with expert ghostwriting and eBook ghostwriting services, ensuring that your distinct voice resonates perfectly.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 mt-0 mt-md-4 mt-lg-0 wow bounceInUp" data-wow-duration="2s"
                    data-wow-delay="0.6s">
                    <div class="wrap-5-item-main  lozad" data-background-image="assets/images/wrap-5-item-bg.png">
                        <div class="wrap-5-item-main-icon">
                            <img class="lozad" data-src="assets/images/wrap-5-icon-4.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="wrap-5-item-main-content">
                            <h5 class="mb-0">
                                <a href="book-publishing.html">Book Publishing</a>
                            </h5>
                            <div class="wrap-5-item-main-content-parah scroll-invisible">
                                <p class="mb-0">
                                    Expert ghostwriter services are necessary for book publishing so that your unique work may be properly organized.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-0 mt-lg-3 col-md-4 col-10 wow bounceInUp" data-wow-duration="2s"
                    data-wow-delay="0.4s">
                    <div class="wrap-5-item-main  wrap-5-item-main-2 lozad"
                        data-background-image="assets/images/wrap-5-item-bg.png">
                        <div class="wrap-5-item-main-icon">
                            <img class="lozad" data-src="assets/images/wrap-5-icon-5.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="wrap-5-item-main-content">
                            <h5 class="mb-0">
                                <a href="book-cover.html">Book Cover </a>
                            </h5>
                            <div class="wrap-5-item-main-content-parah scroll-invisible">
                                <p class="mb-0">
                                    With our book cover design services, you can give your book a tempting appearance and attract the correct readers.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-0 mt-lg-3 col-md-4 col-10 wow bounceInUp" data-wow-duration="2s"
                    data-wow-delay="0.5s">
                    <div class="wrap-5-item-main  lozad" data-background-image="assets/images/wrap-5-item-bg.png">
                        <div class="wrap-5-item-main-icon">
                            <img class="lozad" data-src="assets/images/wrap-5-icon-6.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="wrap-5-item-main-content">
                            <h5 class="mb-0">
                                <a href="book-illustration.html">Book Illustration </a>
                            </h5>
                            <div class="wrap-5-item-main-content-parah scroll-invisible">
                                <p class="mb-0">
                                    Our book illustration services are designed to bring your story to life with captivating images.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-0 mt-lg-3 col-md-4 col-10 mt-0 mt-md-4 mt-lg-0 wow bounceInUp"
                    data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="wrap-5-item-main wrap-5-item-main-2 lozad"
                        data-background-image="assets/images/wrap-5-item-bg.png">
                        <div class="wrap-5-item-main-icon">
                            <img class="lozad" data-src="assets/images/wrap-5-icon-7.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="wrap-5-item-main-content">
                            <h5 class="mb-0">
                                <a href="book-trailer.html">Book Trailer </a>
                            </h5>
                            <div class="wrap-5-item-main-content-parah scroll-invisible">
                                <p class="mb-0">
                                    Give your story to life and boost reader engagement and accessibility with our book trailer services.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-0 mt-lg-3 col-md-4 col-10 mt-0 mt-md-4 mt-lg-0 wow bounceInUp"
                    data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="wrap-5-item-main lozad" data-background-image="assets/images/wrap-5-item-bg.png">
                        <div class="wrap-5-item-main-icon">
                            <img class="lozad" data-src="assets/images/wrap-5-icon-8.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="wrap-5-item-main-content">
                            <h5 class="mb-0">
                                <a href="ghostwriting.html">Ghostwriting </a>
                            </h5>
                            <div class="wrap-5-item-main-content-parah scroll-invisible">
                                <p class="mb-0">
                                    As expert ghostwriters, we work together with customers to know their objectives, voice, and vision before transforming them into engrossing narratives for books, articles, speeches, and other written works.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book-marketing-wrap-4 mt-5">
        <div class="container">
            <div class="row justify-content-center pb-lg-5 pb-md-2 wow bounceInUp" data-wow-duration="2s"
                data-wow-delay="0.2s">
                <div class="col-lg-7 text-center col-one text-white">
                    <h3 class="pb-2">
                        Why Choose Us?
                    </h3>
                    <p>
                        Our seasoned team, strategic approach, and dedication set us apart, ensuring your book not only stands out but reaches its fullest potential. Choose excellence; choose us.

                    </p>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-around">
                <div class="col-lg-3 col-md-4 col-10 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="book-marketing-wrap-4-item">
                        <div class="book-marketing-wrap-4-item-img">
                            <img class="lozad" data-src="assets/images/book-marketing/wrap-4-img-1.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="book-marketing-wrap-4-item-content text-center">
                            <h6>
                                Targeted advertising
                            </h6>
                            <div class="book-marketing-wrap-4-item-content-parah overflow-hidden-scroll">
                                <p class="mb-0">
                                    Pinpoint your audience, maximize impact, and boost book promotion and sales.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="book-marketing-wrap-4-item">
                        <div class="book-marketing-wrap-4-item-img">
                            <img class="lozad" data-src="assets/images/book-marketing/wrap-4-img-2.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="book-marketing-wrap-4-item-content text-center">
                            <h6>
                                Tailored solutions
                            </h6>
                            <div class="book-marketing-wrap-4-item-content-parah overflow-hidden-scroll">
                                <p class="mb-0">
                                    Craft a unique marketing path for long-lasting literary success.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="book-marketing-wrap-4-item">
                        <div class="book-marketing-wrap-4-item-img">
                            <img class="lozad" data-src="assets/images/book-marketing/wrap-4-img-3.png"
                                alt="Hamton Publishers" />
                        </div>
                        <div class="book-marketing-wrap-4-item-content text-center">
                            <h6>
                                Promotional strategy
                            </h6>
                            <div class="book-marketing-wrap-4-item-content-parah overflow-hidden-scroll">
                                <p class="mb-0">
                                    Skillfully traverse the literary terrain using persuasive tactics.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-4">
        <section class="index-wrap-7 wcag-sec position-relative">
            <div class="container">
                <div class="row justify-content-center index-wrap-7-row">
                    <div class="col-lg-11">
                        <div class="row justify-content-lg-between justify-content-md-between">
                            <div class="col-lg-4 col-md-5 col-12 ">
                                <div class="index-wrap-7-item index-wrap-7-item-one adddme">
                                    <h4>
                                        Discovery
                                    </h4>
                                    <p>
                                        Explore your book's potential through extensive market insights, identifying key growth opportunities.

                                    </p>
                                    <div class="number">
                                        <p class="mb-0">
                                            1
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-12 ">
                                <div class="index-wrap-7-item index-wrap-7-item-two adddme">
                                    <h4>
                                        Strategize
                                    </h4>
                                    <p>
                                        Devise a personalized marketing plan, leveraging innovative tactics to enhance your book's visibility and impact.

                                    </p>
                                    <div class="number">
                                        <p class="mb-0">
                                            2
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-lg-between justify-content-md-between padding-top-custom">
                            <div class="col-lg-4 col-md-5 col-12 offset-lg-2 offset-md-0 ">
                                <div class="index-wrap-7-item index-wrap-7-item-three adddme">
                                    <h4>
                                        Execute
                                    </h4>
                                    <p>
                                        By using a variety of channels to connect with your targeted audience, you can increase engagement and implement your carefully prepared strategy.

                                    </p>
                                    <div class="number">
                                        <p class="mb-0">
                                            3
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-12 ">
                                <div class="index-wrap-7-item index-wrap-7-item-four adddme">
                                    <h4>
                                        Optimize
                                    </h4>
                                    <p>
                                        Continuously refine and optimize our approach based on real-time data, ensuring sustained success and growth.

                                    </p>
                                    <div class="number">
                                        <p class="mb-0">
                                            4
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="lozad line-img" data-src="assets/images/wrap-7-line.png" alt="Hamton Publishers" />
        </section>
    </div>
    <section class="index-wrap-8 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="tabs review-inner-tab-ul fw-400 mb-0 list-unstyled">
                        <li class="current wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.2s"
                            data-targetit="review-1">
                            <span>
                                <img class="lozad" data-src="assets/images/review/1.png"
                                    alt="Hamton Publishers" />
                            </span>
                            Valarie Neff
                        </li>
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s"
                            data-targetit="review-2">
                            <span>
                                <img class="lozad" data-src="assets/images/review/2.png"
                                    alt="Hamton Publishers" />
                            </span>
                            Chrystal Riggs

                        </li>
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.4s"
                            data-targetit="review-3">
                            <span>
                                <img class="lozad" data-src="assets/images/review/3.png"
                                    alt="Hamton Publishers" />
                            </span>
                            Lynda Newsome
                        </li>
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s"
                            data-targetit="review-4">
                            <span>
                                <img class="lozad" data-src="assets/images/review/5.png"
                                    alt="Hamton Publishers" />
                            </span>
                            Dortha Guy
                        </li>
                        <!-- <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                            data-targetit="review-5">
                            <span>
                                <img class="lozad" data-src="assets/images/review/4.png"
                                    alt="Hamton Publishers" />
                            </span>
                            Janine Weinstein
                        </li> -->

                    </ul>
                </div>
            </div>
        </div>
        <div class="index-wrap-8-content-bg position-relative wow bounceInUp" data-wow-duration="2s"
            data-wow-delay="1s">
            <div class="current my-tabs review-1">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-lg-9">
                        <p class="p-main text-center">
                            “Wow! Hampton Publishers went above and beyond for me! Their dedication and expertise were incredible. I had a basic idea for my project, but they transformed it into something extraordinary. I'm absolutely amazed by the results. If you're looking for exceptional ghostwriting services, look no further. Highly recommended!”
                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="wrap-8-content-review-img me-3">
                                <img class="lozad" data-src="assets/images/review/1.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="wrap-8-content-review-name">
                                <p class="mb-0">
                                    Valarie Neff
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-tabs review-2">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-lg-9">
                        <p class="p-main text-center">
                            “Their eBook ghostwriting services are top-notch. Hampton Publishers brought my story to life beautifully. They even made arcs for my characters and all their suggestions proved to be amazing. I could have never done it without them. Fantastic team, highly skilled, and great communication throughout the project.”

                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="wrap-8-content-review-img me-3">
                                <img class="lozad" data-src="assets/images/review/2.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="wrap-8-content-review-name">
                                <p class="mb-0">
                                    Chrystal Riggs
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-tabs review-3">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-lg-9">
                        <p class="p-main text-center">
                            "Looking for top-notch ghostwriting? Look no further than Hampton Publishers! They made my project smooth sailing and delivered nothing short of excellence. I'm over the moon with the final result, and so are all my friends. Hampton Publishers truly exceeded expectations!"

                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="wrap-8-content-review-img me-3">
                                <img class="lozad" data-src="assets/images/review/3.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="wrap-8-content-review-name">
                                <p class="mb-0">
                                    Lynda Newsome
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-tabs review-4">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-lg-9">
                        <p class="p-main text-center">
                            "Hampton Book Publishers blew me away! Their attentiveness to detail and creative flair are evident in every word. I'm so impressed that I've already got more ideas I want to collaborate with them on. If you're working on a writing project, I highly recommend them!"

                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="wrap-8-content-review-img me-3">
                                <img class="lozad" data-src="assets/images/review/5.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="wrap-8-content-review-name">
                                <p class="mb-0">
                                    Dortha Guy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="my-tabs review-5">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-lg-9">
                        <p class="p-main text-center">
                            “I couldn't be happier with the ghostwriting services I received. Hamton Publishers
                            transformed my ideas into a masterpiece. The idea occurred to me while I was in bed, and
                            they polished it to the extent that I keep rereading my own book. I'm grateful for their
                            creativity and dedication.”
                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="wrap-8-content-review-img me-3">
                                <img class="lozad" data-src="assets/images/review/4.png"
                                    alt="Hamton Publishers" />
                            </div>
                            <div class="wrap-8-content-review-name">
                                <p class="mb-0">
                                    Janine Weinstein
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <img class="lozad index-wrap-8-content-bg-coma" data-src="assets/images/review/coma.png"
                alt="Hamton Publishers" /> -->
        </div>
    </section>
    <section class="faq-section mt-4 mb-4 lozad"
        data-background-image="assets/images/book-marketing/faq-section-bg.png">
        <div class="container">
            <div class="row wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="col-lg-12 text-center pb-2 pb-md-4">
                    <h3 class="text-black">
                        Frequently <span class="clr-1">Asked</span> <span class="clr-2">Questions</span>
                    </h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <ul class="accordion-list">
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <h3>In what ways may book marketing be helpful for me as an author?</h3>
                            <div class="answer">
                                <p>As an author, one of the most important things in expanding your reach through book marketing. Choosing the right platform that provides exceptional book marketing services that make your book more visible, draw in more readers, and improve its chances of being found.
                                </p>
                            </div>
                        </li>
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <h3>Which social media sites work best for book marketing, and is social media marketing necessary?
                            </h3>
                            <div class="answer">
                                <p>Indeed, social media is a useful instrument for book promotion. Certain platforms—like LinkedIn—may be better suited for professional networking or specialized genres, but generally speaking, platforms like Instagram, Twitter, Facebook, and Goodreads are popular for interacting with readers.
                                </p>
                            </div>
                        </li>
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h3>What is SEO book marketing, and why is it important for authors?
                            </h3>
                            <div class="answer">
                                <p>SEO book marketing involves optimizing online content related to a book to improve its visibility in search engine results. It's crucial for authors because it helps potential readers discover their books.
                                </p>
                            </div>
                        </li>
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <h3>What do book marketing services attempt to achieve?</h3>
                            <div class="answer">
                                <p>For a variety of reasons, book marketing services are crucial for publishers, writers, and book promotion.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="index-wrap-9 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.2s">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-lg-11 col-md-11">
                    <ul class="list-unstyled d-flex align-items-center justify-content-between mb-0">
                        <li>
                            <img class="lozad" data-src="assets/images/brand-logo/1.png"
                                alt="Hamton Publishers" />
                        </li>
                        <li>
                            <img class="lozad" data-src="assets/images/brand-logo/2.png"
                                alt="Hamton Publishers" />
                        </li>
                        <li>
                            <img class="lozad" data-src="assets/images/brand-logo/3.png"
                                alt="Hamton Publishers" />
                        </li>
                        <li>
                            <img class="lozad" data-src="assets/images/brand-logo/4.png"
                                alt="Hamton Publishers" />
                        </li>
                        <li>
                            <img class="lozad" data-src="assets/images/brand-logo/5.png"
                                alt="Hamton Publishers" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="index-wrap-10 pt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0 col-md-12 ps-lg-0 ps-md-2 colum-1 wow bounceInLeft"
                    data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="index-wrap-10-col-1">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-7 col-md-4 text-white">
                                <p class="fw-600 p-head pb-4">
                                    Contact Info
                                </p>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="<?php echo $no1 ?>" class="d-flex ">
                                            <p><i class="fas fa-phone-alt me-3"></i></p>
                                            <p class="fw-600 mb-0">
                                                Phone <br>
                                                <span class="fw-300"><?php echo $no ?></span>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:<?php echo $email ?>" class="d-flex ">
                                            <p><i class="fas fa-envelope me-3"></i></p>
                                            <p class="fw-600 mb-0">
                                                Mail <br>
                                                <span class="fw-300"><?php echo $email ?></span>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="d-flex ">
                                            <p><i class="fas fa-map-marker-alt me-3"></i></p>
                                            <p class="fw-600 mb-0">
                                                Head Office <br>
                                                <span class="fw-300"><?php echo $add1 ?></span>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="d-flex ">
                                            <p><i class="fas fa-map-marker-alt me-3"></i></p>
                                            <p class="fw-600 mb-0">
                                                Location <br>
                                                <span class="fw-300"><?php echo $add ?></span>
                                            </p>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- <div class="col-xxl-6 col-lg-5 col-md-4 text-white">
                                <p class="fw-600 p-head pb-4">
                                    Quick Links
                                </p>
                                <ul class="list-unstyled index-wrap-10-col-1-ul-2">
                                    <li><a href="index-2.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="authors.html">Authors</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div> -->
                            <div class="col-lg-12 col-md-4 text-white pt-xxl-4 pt-lg-2">
                                <p class="fw-600 p-head pb-2 ">
                                    Follow Us
                                </p>
                                <ul class="list-unstyled d-flex align-items-center index-wrap-10-col-1-ul-3">
                                    <a href="https://www.facebook.com/HamptonPublishers ">
                                        <li class="fb"><img class="lozad " data-src="assets/images/icons/fb.png"
                                                alt="Hamton Publishers" /></li>
                                    </a>
                                    <!--<a-->
                                    <!--    href="https://www.linkedin.com/">-->
                                    <!--    <li class="link"><img class="lozad " data-src="assets/images/icons/link.png"-->
                                    <!--            alt="Hamton Publishers"/>-->
                                    <!--            </li>-->
                                    <!--</a>-->
                                     <a
                                        href="https://www.instagram.com/hamptonpublisherss/">
                                    <li class="insta">
                                        <img class="lozad " data-src="assets/images/icons/insta.png"
                                            alt="Hamton Publishers" /></li>
                                            </a>
                                             <a
                                       href="https://twitter.com/Hamptonpublish ">
                                    <li class="twitter">
                                        <img class="lozad " data-src="assets/images/icons/x-icon.png"
                                            alt="Hamton Publishers"/>
                                            </li>
                                            </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 colum-2 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="index-wrap-10-col-2">
                        <form  class="row " action="<?php echo $current_url ?>" method="post">
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
               
               
                            <div class="form-group mb-xxl-5  col-lg-12  position-relative inputicon ">
                                <label for="name">Name*</label>
                                 <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
                            </div>
                           
                            <div class="form-group mb-xxl-5  col-lg-12  position-relative inputicon ">
                                <label for="email">E Mail</label>
<input class="form-control" name="email" placeholder="Enter your email" type="text" required 
                  value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
                            </div>
                            <div class="form-group mb-xxl-5  col-lg-12  position-relative inputicon ">
                                <label for="number">Phone</label>
                                <input class="form-control phone_new"  name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
                            </div>
                            <!-- <div class="form-group mb-xxl-5  col-lg-12  position-relative inputicon ">
                                <label for="service">What type service do you need?</label>
                                <div class="d-flex pt-3 flex-contact-radio align-items-center justify-content-between">
                                    <label class="custom-checkbox mb-3 mb-xxl-0">
                                        <input type="checkbox" value="Ghostwriting" name="fintrest[]" checked="checked">
                                        <span class="checkbox"></span>
                                        Ghostwriting
                                    </label>
                                    <label class="custom-checkbox mb-3 mb-xxl-0"><input type="checkbox"
                                            name="fintrest[]" value="Book Promotion">
                                        <span class="checkbox"></span>
                                        Book Promotion
                                    </label>
                                    <label class="custom-checkbox mb-3 mb-xxl-0"><input type="checkbox"
                                            name="fintrest[]" value="Book Editing & Formatting">
                                        <span class="checkbox"></span>
                                        Editing & Formatting
                                    </label>
                                    <label class="custom-checkbox mb-3 mb-md-0"><input type="checkbox" name="fintrest[]"
                                            value="Author Branding">
                                        <span class="checkbox"></span>
                                        Author Branding
                                    </label>
                                    <label class="custom-checkbox"><input type="checkbox" name="fintrest[]"
                                            value="Book Publishing">
                                        <span class="checkbox"></span>
                                        Book Publishing
                                    </label>
                                    <label class="custom-checkbox"><input type="checkbox" name="fintrest[]"
                                            value="Other">
                                        <span class="checkbox"></span>
                                        Other
                                    </label>
                                </div>
                            </div> -->
                            <div class="form-group mb-xxl-5  col-lg-12  position-relative inputicon ">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>
                            </div>
                            <div class="form-group mb-xxl-5  col-lg-12  position-relative inputicon ">
                                <button class="btn btn-dark me-2 me-md-4 popup-btn" id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">
                                    <span class="fw-500">
                                       Submit
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg" alt="Hampton Publishers" src="assets/images/icons/arrow.svg" data-loaded="true">
                                </button>
                            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-white text-center">
                    <p class="mb-0">
                        © Copyright 2026 - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/mlib.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- START POPUP MODAL -->
    <div class="modal modal-one" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div style="display: inline-block;" class="balti_popup" id="balti_popup">
            <div class="row">
                <div class=" col-xxl-7 col-lg-7">
                    <h2>Let’s Start a <span class="clr-1">New Project!</span></h2>
                    <p class="mb-4">
                        Just fill the below given form, and let our experts handle the rest. Our customer service
                        representatives are here to assist.
                    </p>
                    <form action="<?php echo $current_url ?>" method="post"
                        class="validate-balti_popup ">
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
                            <div class="modal-input-main mb-4">
                                <div class="col-md-12 mb-xxl-4 mb-lg-2 mb-2">
                                    <ul>
                                        <li>
                                          <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12 mb-xxl-4 mb-lg-2 mb-2">
                                    <ul>
                                        <li>
                                             <input class="form-control" name="email" placeholder="Enter your email" type="text" required 
                  value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12 mb-lg-2 mb-2">
                                    <ul>
                                        <li>
                                            <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12 mb-lg-2 mb-2">
                                    <ul>
                                        <li>
                                             <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>
                                        </li>
                                    </ul>
                                </div>
                                 <div class="col-md-12 mb-lg-2 mb-2">
                                <button class="btn btn-dark me-2 me-md-4 popup-btn" id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">
                                    <span class="fw-500">
                                       Submit
                                    </span>
                                    <img class="lozad icon-img" data-src="assets/images/icons/arrow.svg" alt="Hamton Publishers" src="assets/images/icons/arrow.svg" data-loaded="true">
                                </button>
                                </div>
                            </div>
                          
                        </div>
                    </form>
                </div>
            </div>
            <button data-fancybox-close="" class="close-modal"><img class=" lozad" src="assets/images/cross.png"
                    alt="Hamton Publishers" /></button>
            <img class="lozad modal-img d-none d-lg-block" src="assets/images/modal-img.png"
                alt="Hamton Publishers" />
        </div>
    </div>



    <script>
        $(".close-modal").click(function () {
            $(".modal-one").hide()
        })
        $(".popup-btn").click(function () {
            $(".modal-one").show()
        });
    </script><!-- START POPUP MODAL -->
    



    <script>
        $(".close-modal").click(function () {
            $(".modal-one").hide()
        })
        $(".popup-btn").click(function () {
            $(".modal-one").show()
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".item").click(function () {
                var clickedItem = $(this).data("item");
                $(".item").removeClass("slide-active");
                $(this).addClass("slide-active");
            });
        });
    </script>
    <script>
        setTimeout(function () {
            $(".modal-one").show();
        }, 4000);
    </script>
    <script>
        $(document).ready(function () {
            //jquery for toggle sub menus
            $('.sub-btn').click(function () {
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown-test').toggleClass('rotate');
            });

            //jquery for expand and collapse the sidebar
            $('.menu-btn').click(function () {
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility", "hidden");
            });

            $('.close-btn').click(function () {
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
            });
        });
    </script>
    <script>
        $('.dropdown-btn-active-custom-inner').click(function () {
            $(this).parent('.drop-down-parent-custom-inner').toggleClass('active');
        });
    </script>
 
    <script>
   
    

    <script>
        $(".clickbutton").click(function() {
  $('.floatbutton').toggleClass("active");
//   $('.crossplus').toggleClass("rotate");
});
    </script>
    
<?php
require '../inc/chat.php';
?>