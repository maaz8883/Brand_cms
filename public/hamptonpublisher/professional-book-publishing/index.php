<?php
require '../inc/global.php';
require '../inc/form.php';
?>
<!DOCTYPE html>
<html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Get your book published with our top-rated services. From editing to distribution, we provide everything you need for successful book publishing.">
      <meta name="author" content>
      <link rel="shortcut icon" type="image/x-icon"
         href="images/amazing-logo.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/slick-theme.css">
      <link rel="stylesheet" href="css/fancybox.min.css">
         <link rel="preconnect" href="https://cdn.jsdelivr.net">
      <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
      <link rel="stylesheet" as="style" type="text/css" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css">
      <title>Top Book Publishing Services</title>
      <script>(function(w, d, t, u, o) {w[u] = w[u] || [], o.ts = (new Date).getTime();var n = d.createElement(t);n.src = "https://bat.bing.net/bat.js?ti=" + o.ti + ("uetq" != u ? "&q=" + u : ""),n.async = 1, n.onload = n.onreadystatechange = function() {var s = this.readyState;s && "loaded" !== s && "complete" !== s ||(o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad"),n.onload = n.onreadystatechange = null)};var i = d.getElementsByTagName(t)[0];i.parentNode.insertBefore(n, i);})(window, document, "script", "uetq", {ti: "187245231",enableAutoSpaTracking: true});</script>
      <!-- 
         <script>
         window.addEventListener('load', function() {
         setTimeout(function() {
           var modal = new bootstrap.Modal(document.getElementById('exampleModal'));
           modal.show();
         }, 4000); // 4000 milliseconds = 4 seconds
         });
         </script> -->
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-WGSPZTH3');
      </script>
      <!-- End Google Tag Manager -->
   </head>
   <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGSPZTH3"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <!-- Header Start -->
      <header>
         <div class="top-bar">
            <div class="container">
               <div class="tp-bar-blk">
                  <a class="hdr-email"
                     href="mailto:<?php echo $email ?>"><i
                     class="fa fa-envelope"
                     aria-hidden="true"></i><?php echo $email ?></a>
                  <ul>
                     <li><a href="https://twitter.com/Hamptonpublish"
                        target="_blank"><i class="fa fa-twitter"
                        aria-hidden="true"></i></a></li>
                     <!-- <li><a target="_blank"
                        href="https://www.pinterest.com/amazingpublishers/"><i
                           class="fa fa-pinterest"
                           aria-hidden="true"></i></a></li> -->
                     <li><a target="_blank"
                        href="https://www.facebook.com/HamptonPublishers"><i
                        class="fa fa-facebook"
                        aria-hidden="true"></i></a></li>
                     <li><a target="_blank"
                        href="https://www.instagram.com/hamptonpublisherss/"><i
                        class="fa fa-instagram"
                        aria-hidden="true"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="hdr-btm">
            <div class="container">
               <div class="hdr-blk">
                  <a class="brand-name"
                     href="<?php echo $current_url ?>"><img
                     src="images/amazing-logo.png" alt></a>
                  <div class="hdr-btn">
                     <button type="button"
                        class="hvr-grow tc-image-effect-shine calle"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Get Started<i
                        class="fa fa-angle-right"
                        aria-hidden="true"></i></button>
                     <a class="hdr-btn2 calle" href="<?php echo $no1 ?>‬">
                     <?php echo $no ?>‬<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header End -->
      <section class="banner">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="slide-cap">
                     <h1>Bring Out Your Masterpiece Through Our Book Publishing Services
                     </h1>
                     <ul>
                        <li>Book Editing, Formatting, Proofreading & Typesetting.</li>
                        <li>Free Individual Consultation with a Writing Expert.</li>
                        <li>Free Book Cover Design with up to 10 Revisions.</li>
                        <li>Free ISBN</li>
                        <li>Publish a book on paperback and amz compositions.</li>
                        <li>10 Printed paperbacks shipped down to your doorstep.</li>
                     </ul>
                     <div class="theme-btn ">
                        <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle banner-chat-btn" id="calles">Lets Chat</a>
                        <!--<a class="thmn-btn1 calle calles" href="javascript:$zopim.livechat.window.show()"-->
                        <!--   onclick="setButtonURL()">Let's Chat<i-->
                        <!--      class="fa fa-angle-right"-->
                        <!--      aria-hidden="true"></i></a> -->
                        <a class="thmn-btn1 calle" href="<?php echo $no1 ?>‬">Get a Quote Now <i class="fa fa-angle-right"
                           aria-hidden="true"></i></a>
                        <button type="button"
                           class="hvr-grow tc-image-effect-shine"
                           data-bs-toggle="modal"
                           data-bs-target="#exampleModal">Get Started<i
                           class="fa fa-angle-right"
                           aria-hidden="true"></i></button>
                     </div>
                  </div>
               </div>
               <div class="col-md-1">
               </div>
               <div class="col-md-5 ">
                  <div class="leaf-img"><img src="images/book-public-bfr.png"
                     alt></div>
                  <div class="hdr-form">
                     <h3>Start Your Publishing Journey Today
                     </h3>
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
                        <select required name="manuscript_ready">
                           <option selected disabled>Do you have a manuscript
                              ready?
                           </option>
                           <option value="Yes, I'm ready to publish today">Yes,
                              I'm ready to publish today
                           </option>
                           <option
                              value="Yes, I'll be ready to publish in 1 to 3 months">Yes,
                              I'll be ready to publish in 1 to 3 months
                           </option>
                           <option
                              value="Yes, I'll be ready to publish in 3 to 6 months">Yes,
                              I'll be ready to publish in 3 to 6 months
                           </option>
                           <option
                              value="Yes, I’ll be ready to publish in 6 to 12 months">Yes,
                              I’ll be ready to publish in 6 to 12
                              months
                           </option>
                           <option
                              value="No, I do not have a book or manuscript ready">No,
                              I do not have a book or manuscript ready
                           </option>
                        </select>
                        <select required name="published_before">
                           <option selected disabled>Have you published
                              before?
                           </option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                        <select required name="plan_on_publishing">
                           <option selected disabled>What type of book do you
                              plan on publishing?
                           </option>
                           <option value="Business">Business</option>
                           <option value="Biography">Biography</option>
                           <option value="Inspirational">Inspirational</option>
                           <option value="Non-Fiction">Non-Fiction</option>
                           <option value="How-To">How-To</option>
                           <option
                              value="Autobiography/Memoir">Autobiography/Memoir</option>
                           <option value="Self-Help">Self-Help</option>
                           <option value="Children">Children</option>
                           <option
                              value="Spiritual/Religious">Spiritual/Religious</option>
                           <option value="Fiction">Fiction</option>
                           <option
                              value="Art/Photography">Art/Photography</option>
                           <option value="Cookbook">Cookbook</option>
                           <option value="Other">Other</option>
                        </select>
                        <div class="serv-looking">
                           <h4>What services are you looking for?</h4>
                           <label>
                           <input type="checkbox"  name="services[]"
                              value="Self Publishing" id="selfPublishing">
                           <span>Self Publishing</span>
                           </label>
                           <label>
                           <input type="checkbox"  name="services[]"
                              value="editing" id="editing">
                           <span>Editing</span>
                           </label>
                           <label>
                           <input type="checkbox"  name="services[]"
                              value="cover-design" id="cover-design">
                           <span>Cover Design</span>
                           </label>
                           <label>
                           <input type="checkbox"  name="services[]"
                              value="audio-book" id="audio-book">
                           <span>Audio book publishing</span>
                           </label>
                           <label>
                           <input type="checkbox"  name="services[]"
                              value="Barnes-Noble" id="Barnes-Noble">
                           <span>Barnes and noble publishing</span>
                           </label>
                           <label>
                           <input type="checkbox"  name="services[]"
                              value="Illustration" id="Illustration">
                           <span>Illustration</span>
                           </label>
                           <label>
                           <input type="checkbox" 
                              name="services[]"
                              value="self-publishing"
                              id="selfPublishing">
                           <span>Self Publishing</span>
                           </label>
                           <label>
                           <input type="checkbox"  name="services[]"
                              value="purchase-isbn" id="purchase-isbn">
                           <span>Purchase ISBN</span>
                           </label>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <input name="name" placeholder="Enter your name" type="text" required 
                                 value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
                              <?php echo !empty($error['name']) ? $error['name']:'';?>
                           </div>
                           <div class="col-md-6">
                              <input class="form-control phno" name="phone" placeholder="Enter your phone number" type="tel"
                                 value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
                              <?php echo !empty($error['phone']) ? $error['phone']:'';?>
                           </div>
                           <div class="col-md-12">
                              <input name="email" placeholder="Enter your email" type="text" required 
                                 value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
                              <?php echo !empty($error['email']) ? $error['email']:'';?>
                              <button id="" cite="Submit" data-hover="Submit" type="submit" name="cta3" value="submit" 
                                 class="hvr-grow tc-image-effect-shine">Get
                              Started<i class="fa fa-angle-right"
                                 aria-hidden="true"></i></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="partner-logo">
         <div class="container">
            <div class="part-logos">
               <div class="parts-logo-slide">
                  <img src="images/logo-001.png" alt>
               </div>
               <div class="parts-logo-slide">
                  <img src="images/logo-002.png" alt>
               </div>
               <div class="parts-logo-slide">
                  <img src="images/logo-003.png" alt>
               </div>
               <div class="parts-logo-slide">
                  <img src="images/logo-004.png" alt>
               </div>
               <div class="parts-logo-slide">
                  <img src="images/logo-005.png" alt>
               </div>
            </div>
         </div>
      </section>
      <img src="images/home-authors.webp" width="100%">
      <section class="book-gallery">
         <div class="container">
            <div class="book-glry-title">
               <h2>Turn Your Words into Reality: Publish with Hampton Publishers
               </h2>
               <!--<h6>We have helped a broad range of authors publish their books successfully. Our projects include books of different genres.</h6>-->
               <p>Are you prepared to tell your story to the world? At Hampton Publishers, we are dedicated to assisting writers like you in realizing their publishing aspirations.
               </p>
            </div>
            <div class="books-slider-main">
               <div class="book-slides">
                  <a href="images/portfolio/1.png" data-fancybox><img
                     src="images/portfolio/1.png" alt></a>
               </div>
               <div class="book-slides"><a href="images/portfolio/2.png"
                  data-fancybox>
                  <img src="images/portfolio/2.png" alt>
                  </a>
               </div>
               <div class="book-slides"><a href="images/portfolio/3.png"
                  data-fancybox>
                  <img src="images/portfolio/3.png" alt>
                  </a>
               </div>
               <div class="book-slides"><a href="images/portfolio/4.png"
                  data-fancybox>
                  <img src="images/portfolio/4.png" alt>
                  </a>
               </div>
               <div class="book-slides"><a href="images/portfolio/5.png"
                  data-fancybox>
                  <img src="images/portfolio/5.png" alt>
                  </a>
               </div>
               <div class="book-slides"><a href="images/portfolio/6.png"
                  data-fancybox>
                  <img src="images/portfolio/6.png" alt>
                  </a>
               </div>
               <div class="book-slides"><a href="images/portfolio/7.png"
                  data-fancybox>
                  <img src="images/portfolio/7.png" alt>
                  </a>
               </div>
               <div class="book-slides"><a href="images/portfolio/8.png"
                  data-fancybox>
                  <img src="images/portfolio/8.png" alt>
                  </a>
               </div>
               <div class="book-slides"><a href="images/portfolio/9.png"
                  data-fancybox>
                  <img src="images/portfolio/9.png" alt>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="packagesSec">
         <div class="container">
            <h2>BOOK PUBLISHING PACKAGES</h2>
            <div class="row">
               <div class="col-md-4">
                  <div class="pkBox">
                     <h3>Basic Package
                     </h3>
                     <!--<span class="price">$699 <sup>$1399 </sup></span>-->
                     <!--<span class="price"> <sup> </sup></span>-->
                     <ul>
                        <h4>	FEATURES</h4>
                        <li>Editing</li>
                        <li>Proofreading</li>
                        <li>Typesetting</li>
                        <li>Layout Adjustment</li>
                        <li>Formatting</li>
                        <li>Full Ownership Rights</li>
                     </ul>
                     <a href="javascript:void(0);" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" class="btn">Sign up today
                     </a>
                     <a href="<?php echo $no1 ?>‬" class="btn chat calle">Get a Quote Now </a>
                     <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle" id="calles">Lets Chat</a>
                     <!--<a href="javascript:$zopim.livechat.window.show()" onclick="setButtonURL()"-->
                     <!--   class="btn chat calle" id="calles">Lets Chat </a>-->
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="pkBox">
                     <h3>Startup Package
                     </h3>
                     <!--<span class="price">$1,199 <sup>$2,399 </sup></span>-->
                     <ul>
                        <h4>	FEATURES</h4>
                        <li>Editing</li>
                        <li>Proofreading</li>
                        <li>Typesetting</li>
                        <li>Layout Adjustment
                        </li>
                        <li>Formatting</li>
                        <li>Full Ownership Rights
                        </li>
                        <li>Book Cover Design
                        </li>
                        <li>Publication On Cross Platform
                        </li>
                        <li>E-Book Format
                        </li>
                     </ul>
                     <a href="javascript:void(0);" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" class="btn">Sign up today
                     </a>
                     <a href="<?php echo $no1 ?>‬" class="btn chat calle">Get a Quote Now </a>
                     <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle" id="calles">Lets Chat</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="pkBox">
                     <!--<div class="ribbon ribbon-top-right"><span>Best Seller</span></div>-->
                     <h3>Standard Package
                     </h3>
                     <!--<span class="price">$1,499 <sup>$2999 </sup></span>-->
                     <ul>
                        <h4>	FEATURES</h4>
                        <li>Editing</li>
                        <li>Proofreading</li>
                        <liTypesetting</li>
                        <li>Layout Adjustment
                        </li>
                        <li>Formatting</li>
                        <li>Full Ownership Rights</li>
                        <li>Book Cover Design</li>
                        <li>ISBN</li>
                        <li>Publication On Cross Platform
                        </li>
                        <li>E-Book, Paperback, (2 Formats Of Your
                           Book)
                        </li>
                     </ul>
                     <a href="javascript:void(0);" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" class="btn">Sign up today
                     </a>
                     <a href="<?php echo $no1 ?>‬" class="btn chat calle">Get a Quote Now </a>
                     <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle" id="calles">Lets Chat</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="pkBox">
                     <h3>Onboarding</h3>
                     <!--<span class="price">$2,499 <sup>$4999 </sup></span>-->
                     <ul>
                        <h4>	FEATURES</h4>
                        <li>Editing</li>
                        <li>Content Editing
                        </li>
                        <li>Copy Editing
                        </li>
                        <li>Line Editing
                        </li>
                        <li>Developmental Editing
                        </li>
                        <li>Proofreading
                        </li>
                        <li>Consistency Check
                        </li>
                        <li>ISBN</li>
                        <li>Final Quality Assurance
                        </li>
                        <li>Typesetting
                        </li>
                        <li>
                           Font Selection
                        </li>
                        <li>
                           Page Design
                        </li>
                        <li>
                           Formatting
                        </li>
                        <li>
                           Citation And Reference Styling
                        </li>
                        <li>
                           Table Of Contents
                        </li>
                        <li>
                           Full Ownership Rights
                        </li>
                        <li>
                           3D Cover Design (Front, Back, Spine)
                        </li>
                        <li>
                           Publication On Cross Platform
                        </li>
                        <li>
                           Publishing In 3 Different Formats For
                           Your Ease (EBook, Paperback, Hardcover)
                        </li>
                        <li>
                           Author Bio And Book Description On
                           All Publishing Platforms
                        </li>
                        <li>
                           Integration Of Keywords, BISAC Codes
                           Etc.
                        </li>
                        <li>
                           Author Website Development (2-4
                           Pages)
                        </li>
                        <li>
                           Domain Registration And Hosting (1
                           Year)
                        </li>
                     </ul>
                     <a href="javascript:void(0);" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" class="btn">Sign up
                     today </a>
                     <a href="<?php echo $no1 ?>‬" class="btn chat calle">Get a Quote Now </a>
                     <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle" id="calles">Lets Chat</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="pkBox">
                     <h3>Executive </h3>
                     <!--<span class="price">$3,999 <sup>$7999 </sup></span>-->
                     <ul>
                        <h4>	FEATURES</h4>
                        <li>Editing</li>
                        <li>Content Editing</li>
                        <li>Copy Editing</li>
                        <li>Line Editing</li>
                        <li>Developmental Editing</li>
                        <li>Proofreading</li>
                        <li>Consistency Check</li>
                        <li>Final Quality Assurance</li>
                        <li>Typesetting</li>
                        <li>Formatting</li>
                        <li>Citation And Reference Styling</li>
                        <li>Table Of Contents</li>
                        <li>Full Ownership Rights</li>
                        <li>3D Cover Design (Front, Back, Spine)
                        </li>
                        <li>Publication On Cross Platform
                        </li>
                        <li>Publishing In 3 Different Formats For
                           Your Ease (EBook, Paperback, Hardcover)
                        </li>
                        <li>Author Bio And Book Description On All
                           Publishing Platforms
                        </li>
                        <li>Integration Of Keywords, BISAC Codes
                           Etc.
                        </li>
                        <h6><b>Additional Services Includes
                           </b>
                        </h6>
                        <li>Author Website Development (2-4 Pages)
                        </li>
                        <li>Domain Registration And Hosting (1
                           Year)
                        </li>
                        <li>30-60 Seconds Book Video Trailer
                        </li>
                        <h6><b>Advertising Services Includes
                           </b>
                        </h6>
                        <li>1 Year Social Media Brand Advertising
                           Strategy Platforms
                        </li>
                        <li>Follower Growth
                        </li>
                        <li>Audience Engagement
                        </li>
                        <li>1-Year SEO (Search Engine
                           Optimization)
                        </li>
                        <li>Keyword Research
                        </li>
                        <li>On-Page SEO
                        </li>
                        <li>Off-Page SEO
                        </li>
                        <li>Content Optimization
                        </li>
                     </ul>
                     <a href="javascript:void(0);" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" class="btn">Sign up
                     today </a>
                     <a href="<?php echo $no1 ?>‬" class="btn chat calle">Get a Quote Now </a>
                     <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle" id="calles">Lets Chat</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="pkBox">
                     <h3>Platinum </h3>
                     <!--<span class="price">$7,999 <sup>$15,999 </sup></span>-->
                     <ul>
                        <h4>	FEATURES</h4>
                        <li>Editing</li>
                        <li>Content Editing</li>
                        <li>Copy Editing</li>
                        <li>Line Editing</li>
                        <li>Developmental Editing</li>
                        <li>Proofreading</li>
                        <li>Consistency Check</li>
                        <li>Final Quality Assurance</li>
                        <li>Typesetting</li>
                        <li>Font Selection</li>
                        <li>Page Design</li>
                        <li>Formatting</li>
                        <li>Citation and Reference Styling</li>
                        <li>Table of Contents</li>
                        <li>Full Ownership Rights</li>
                        <li>3D Cover Design (Front, Back, Spine)</li>
                        <li>Publication On Cross Platform</li>
                        <li>Publishing in 3 different formats for your ease (eBook, Paperback, Hardcover) </li>
                        <li>Author bio and book description on all publishing platforms</li>
                        <li>Integration of keywords, BISAC Codes etc.</li>
                        <h6><b>Additional Services Includes
                           </b>
                        </h6>
                        <li>Author Website Development (2-4 Pages)</li>
                        <li>Domain Registration and Hosting (1 Year)</li>
                        <li>30-60 Seconds Book Video Trailer</li>
                        <li>Press Releases</li>
                        <li>Author Central's Page</li>
                        <h6><b>Advertising Services Includes
                           </b>
                        </h6>
                        <li>2 Year Social Media Brand Advertising Strategy Platforms</li>
                        <li>Follower Growth</li>
                        <li>Audience Engagement</li>
                        <li>2-Year SEO (Search Engine Optimization)</li>
                        <li>Keyword Research</li>
                        <li>On-Page SEO</li>
                        <li>Off-Page SEO</li>
                        <li>Content Optimization</li>
                        <li>Book Boosting Advertising Strategy</li>
                        <li>Pre-Launch Hype</li>
                        <li>Blogs &amp; Articles </li>
                        <li>Author Branding</li>
                     </ul>
                     <a href="javascript:void(0);" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" class="btn">Sign up
                     today </a>
                     <a href="<?php echo $no1 ?>‬" class="btn chat calle">Get a Quote Now </a>
                     <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle" id="calles">Lets Chat</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="testimonial-sec">
         <div class="container">
            <div class="tmls-title">
               <h2>Client Testimonials</h2>
               <p>Crafting Literary Legacies<br> Hampton Publishers Illuminating Authors' Paths for Years
               </p>
            </div>
            <div class="review-img">
               <img src="images/review-img.png" alt>
            </div>
            <div class="tmls-slider">
               <div class="tmls-slide">
                  <div class="tmls-blk">
                     <ul>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                     </ul>
                     <p>Collaborating with Hampton Publishers completely transformed my experience. Thanks to their skill and dedication, my draft transformed into a refined work of art. Their assistance led to my book receiving excellent reviews and being featured on bestseller lists. I strongly urge any aspiring author to consider Hampton Publishers</p>
                     <h5>Felixx Johnson</h5>
                  </div>
               </div>
               <div class="tmls-slide">
                  <div class="tmls-blk">
                     <ul>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                     </ul>
                     <p>Having my work published by Hampton Publishers has surpassed my expectations. Their team provided expert support throughout every project phase, from coming up with ideas to the final publishing stage. Hampton Publishers is responsible for my book's global reach, and I am grateful for their support.</p>
                     <h5>Rachael Murray</h5>
                  </div>
               </div>
               <div class="tmls-slide">
                  <div class="tmls-blk">
                     <ul>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                        <li><i class="fa fa-star"
                           aria-hidden="true"></i></li>
                     </ul>
                     <p>Hampton Publishers surpassed all of my expectations. Due to its meticulous attention to detail and commitment to perfection, I was confident in the superior quality of my book. From the start to the finish, they were effective, friendly, and enjoyable to work with. I will forever appreciate their help in achieving my publishing dreams. </p>
                     <h5>Ruben BN</h5>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <section class="menu-script-sec">
         <div class="bubble-shape1">
            <img src="images/bubble-shape01.png" alt>
         </div>
         <div class="bubble-shape2">
            <img src="images/bubble-shape02.png" alt>
         </div>
         <div class="container">
            <div class="row row-flx">
               <div class="col-md-6">
                  <div class="mnuscpt-blk">
                     <h2>Unlock Your Writing Abilities with Hampton Publishers: Your Premier Book Publishing Partner
                        </span>
                     </h2>
                     <p>Begin an adventure to turn your literary dreams into reality with Hampton Publishers by your side. Being the top book publishing company in your community, we are immensely proud to assist writers in sharing their stories globally. Each story should be allowed to be shared, and our team of experienced and creative writers is committed to ensuring it occurs.
                        <br>
                        Hampton Publishers has a successful track record in creating and managing publications with high-quality content, design, and distribution. They offer a team of writers to collaborate with on any type of manuscript, ensuring your book is brought to life and establishes your presence in the literary world.
                     </p>
                     <div class="theme-btn">
                        <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle" id="calles">Let's Chat</a>
                        <a class="thmn-btn1 grey-btn calle"
                           href="<?php echo $no1 ?>‬">Get a Quote Now<i
                           class="fa fa-angle-right"
                           aria-hidden="true"></i></a>
                        <button type="button"
                           class="hvr-grow tc-image-effect-shine"
                           data-bs-toggle="modal"
                           data-bs-target="#exampleModal">Get Started<i
                           class="fa fa-angle-right"
                           aria-hidden="true"></i></button>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mnuscpt-img">
                     <img src="images/menuscript-img.png" alt>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="journy-sec">
         <div class="looking-img">
            <img src="images/looking-1.png" alt>
         </div>
         <div class="container">
            <div class="journy-blk">
               <h2>From Dream to Reality Publish Your Book with Hampton Publishers
               </h2>
               <p>Manuscript waiting? Hampton Publishers turn aspiring authors into published powerhouses. Partner in captivating storytelling.
               </p>
               <ul>
                  <li><span>Book Publication</span></li>
                  <li><span>Book Covers & Formatting</span></li>
                  <li><span>Audiobooks</span></li>
                  <li><span>Website and SEO writing</span></li>
                  <li><span>Blog Writing</span></li>
                  <li><span>Article Writing</span></li>
               </ul>
               <div class="theme-btn">
                  <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle" id="calles">Let's Chat</a>
                  <a class="thmn-btn1 grey-btn calle"
                     href="<?php echo $no1 ?>‬">Get a Quote Now<i
                     class="fa fa-angle-right" aria-hidden="true"></i></a>
                  <button type="button" class="hvr-grow tc-image-effect-shine"
                     data-bs-toggle="modal" data-bs-target="#exampleModal">Get
                  Started<i class="fa fa-angle-right"
                     aria-hidden="true"></i></button>
               </div>
            </div>
         </div>
         <div class="looking-img-right">
            <img src="images/looking-2.png" alt>
         </div>
      </section>
      <section class="book-public">
         <div class="container">
            <div class="row row-flx">
               <div class="col-md-6">
                  <div class="book-public-blk">
                     <h2>Are you prepared to tell your story to the world? 
                        <span> Get your work out there by releasing it through Hampton Publishers.</span>
                     </h2>
                     <p>Have you ever imagined the feeling of having your published book in your hands, but are stressed about the publishing procedure? At Hampton Publishers, we transform aspiring writers such as yourself into successful published authors. We are not just a company that publishes books; we are here to help you turn your story into an engaging read that can be shared with the world.
                     </p>
                     <ul>
                        <li><span>Increasing your outreach.                        </span></li>
                        <li><span>Increasing visibility                        </span></li>
                        <li><span>Exercising more authority during the publishing process                        </span></li>
                        <li><span>Getting increased royalties                        </span></li>
                        <li><span>Furthermore, our experienced book publishing services offer the opportunity to buy ISBNs. Get in touch with us now to discover how our skills can improve your experience in self-publishing.                        </span></li>
                     </ul>
                     <div class="theme-btn">
                        <a href="javascript:void(0)" onclick="openChat()" class="btn chat calle" id="calles">Let's Chat</a>
                        <a class="thmn-btn1  calle"
                           href="<?php echo $no1 ?>‬">Get a Quote Now<i
                           class="fa fa-angle-right"
                           aria-hidden="true"></i></a>
                        <button type="button"
                           class="hvr-grow tc-image-effect-shine"
                           data-bs-toggle="modal"
                           data-bs-target="#exampleModal">Get Started<i
                           class="fa fa-angle-right"
                           aria-hidden="true"></i></button>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="book-pub-img">
                     <img src="images/book-public-img.png" alt>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="step-sec">
         <div class="container">
            <div class="step-title">
               <h2>From Aspiring Author to Published Success: Your 4-Step Journey with Hampton Publishers
               </h2>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="step-blk">
                     <span><img src="images/step-icon01.png" alt></span>
                     <h5>Connect with Us</h5>
                     <p>Let's chat! In a free consultation, we'll discuss your publishing goals and learn more about your book. We'll answer your questions and show you how Hampton Publishers can be your partner in success.</p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="step-blk">
                     <span><img src="images/step-icon02.png" alt></span>
                     <h5>Send in your Written Work</h5>
                     <p>Ready to share your masterpiece? Simply upload your completed manuscript. Our team of experienced editors will provide detailed feedback, helping you refine your work and polish it into a professional read.</p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="step-blk">
                     <span><img src="images/step-icon03.png" alt></span>
                     <h5>Give life to your book</h5>
                     <p>Publishing your book shouldn't be stressful. We offer expert guidance throughout the process, from formatting and design to navigating Amz publishing (KDP) and self-publishing options.</p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="step-blk">
                     <span><img src="images/step-icon04.png" alt></span>
                     <h5>Share your story; be heard</h5>
                     <p>Get your book into readers' hands! We handle printing, distribution, and even offer audiobook publishing assistance. Additionally, we can help you with marketing strategies to connect with your target audience and share your voice with the world.                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="seller-book">
         <div class="looking-img">
            <img src="images/slr-book-img1.png" alt>
         </div>
         <div class="container">
            <div class="slr-book-title">
               <h2>Your Premier Book Publishing Partner</h2>
               <p>Get a Quote Now: <?php echo $no ?>‬ or start a conversation for further
                  details of our services.
               </p>
            </div>
            <form action="<?php echo $current_url ?>" method="post" id="package_form">
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
                  <div class="col-md-7 center">
                     <div class="row">
                        <div class="col-md-4"><input name="name" placeholder="Enter your name" type="text" required 
                           value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
                           <?php echo !empty($error['name']) ? $error['name']:'';?>
                        </div>
                        <div class="col-md-4"><input name="email" placeholder="Enter your email" type="text" required 
                           value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
                           <?php echo !empty($error['email']) ? $error['email']:'';?>
                        </div>
                        <div class="col-md-4"><input 
                           class="form-control phno" name="phone" placeholder="Enter your phone number" type="tel"
                           value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
                           <?php echo !empty($error['phone']) ? $error['phone']:'';?>
                        </div>
                        <div class="col-md-12"><textarea name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                           <?php echo !empty($error['message']) ? $error['message']:'';?>
                        </div>
                        <div class="col-md-12">
                           <div class="trms-blk">
                              <div class="theme-btn">
                                 <a href="javascript:void(0)" onclick="openChat()" class="thmn-btn1 calle" id="calles">Lets Chat</a>
                                 <!--<a class="thmn-btn1 calle"-->
                                 <!--id="calles" href="javascript:$zopim.livechat.window.show()"-->
                                 <!--   onclick="setButtonURL()">Let's Chat<i-->
                                 <!--      class="fa fa-angle-right"-->
                                 <!--      aria-hidden="true"></i></a>-->
                                 <a class="thmn-btn1  calle"
                                    href="<?php echo $no1 ?>‬">Get a Quote Now<i
                                    class="fa fa-angle-right"
                                    aria-hidden="true"></i></a>
                                 <button id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit" class="thmn-btn2"
                                    >Submit<i class="fa fa-angle-right"
                                    aria-hidden="true"></i></button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="book-icon">
            <img src="images/slr-book-img2.png" alt>
         </div>
      </section>
      <footer>
         <div class="container">
            <div class="ftr-logo">
               <a href="<?php echo $current_url ?>"><img src="images/amazing-logo.png" alt></a>
               <p>We are excited to assist writers and editors in telling their stories to a worldwide audience. With a proven track record of accomplishment and happy clients all over the world, we're dedicated to making sure the publication process runs smoothly for you. Together, let's make sure your publication journey is a success!
               </p>
               <div class="soc-ftr">
                  <ul>
                     <li><a href="https://twitter.com/Hamptonpublish"
                        target="_blank"><i class="fa fa-twitter"
                        aria-hidden="true"></i></a></li>
                     <!-- <li><a target="_blank"
                        href="https://www.pinterest.com/amazingpublishers/"><i
                           class="fa fa-pinterest"
                           aria-hidden="true"></i></a></li> -->
                     <li><a target="_blank"
                        href="https://www.facebook.com/HamptonPublishers"><i
                        class="fa fa-facebook"
                        aria-hidden="true"></i></a></li>
                     <li><a target="_blank"
                        href="https://www.instagram.com/hamptonpublisherss/"><i
                        class="fa fa-instagram"
                        aria-hidden="true"></i></a></li>
                  </ul>
               </div>
               <p>
                  All Rights Reserved <script>document.write(new Date().getFullYear())</script> - Hampton Publishers <br> Poweredby <a href="https://inktechgroup.com/" target="Blank">Inktech Group</a>
               </p>
               <div class="privacy-page-link">
                  <ul>
                     <li><a href="https://hamptonpublishers.com/privacy" target="blank">Privacy & Policy</a>|</li>
                     <li><a href="https://hamptonpublishers.com/terms" target="blank">Terms & Conditions</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <div class="copyright">
         <div class="container">
            <div class="copyrit-blk">
               <p><?php echo $add ?></p>
               <img src="images/visa.png" alt>
            </div>
         </div>
      </div>
      <div class="modal fade cr-popup indep" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h3>Get 50% Off On All Services</h3>
                  <!--<h6>"Embrace the writer within you."</h6>-->
                  <h6>Write, design, publish — Hampton takes care of it all.</h6>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
               </div>
               <div class="modal-body">
                  <form  class="CrudForm cmxform" id="signup-form"    
                   action="<?php echo $current_url ?>" method="post">
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
                     <div class="row mb-6">
                        <div class="col">
                           <div class="input-div">
                              <i class="fa fa-user"></i>
                              <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                                 value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
                              <?php echo !empty($error['name']) ? $error['name']:'';?>
                           </div>
                        </div>
                        <div class="col">
                           <div class="input-div">
                              <i class="fa fa-envelope"></i>
                              <input class="form-control" name="email" placeholder="Enter your email" type="text" required 
                                 value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
                              <?php echo !empty($error['email']) ? $error['email']:'';?>
                           </div>
                        </div>
                     </div>
                     <div class="input-div">
                        <i class="fa fa-phone"></i>
                        <input  class="form-control phno" name="phone" placeholder="Enter your phone number" type="tel"
                           value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
                        <?php echo !empty($error['phone']) ? $error['phone']:'';?>
                     </div>
                     <div class="input-div">
                        <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                        <?php echo !empty($error['message']) ? $error['message']:'';?>
                        <span><i class="fa fa-comments" aria-hidden="true"></i>
                        </span>
                     </div>
                     <button  class="btn hvr-grow tc-image-effect-shine" id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      </div>
      <script
         src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="js/jquery-3.6.0.min.js"></script>
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         ></script>
      <script src="js/popper.min.js"></script>
      <script src="js/slick.min.js"></script>
      <script src="js/fontawesome.js"></script>
      <script
         src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $(document).ready(function() {
              $("#exampleModal").modal('show');
          });
         
         //   $(window).load(function(){
         //   setTimeout(function(){
         //       $('#exampleModal').modal('show');
         //   }, 2000);
         // $(document).ready(function() {
         //   $("#exampleModal").modal("show");
         // });
         // window.onload = function() {
         //   setTimeout(function() {
         //     // code to show the popup
         //     document.getElementById("exampleModal").style.display = "block";
         //   }, 2000); // 2000ms = 2 seconds
         // };
      </script>
      <?php
         require '../inc/chat.php';
         ?>