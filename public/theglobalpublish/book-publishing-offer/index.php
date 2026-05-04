<?php
require '../inc/global.php';
require '../inc/form.php';

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="robots" content="noindex, nofollow">
      <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
      <link rel="icon" type="image/png" href="assets/images/global-favicon-96x96.webp" sizes="96x96" />
      <title>Self-Publishing & Book Marketing Services for Authors | <?php echo $bname ?></title>
      <meta name="description" content="<?php echo $bname ?> provides self-publishing and book marketing services for independent authors. From manuscript preparation to online distribution and promotion, we support authors throughout the publishing process while allowing them to keep their royalties.">
      <link rel="preconnect" href="https://cdn.jsdelivr.net"> 
		<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
		<link rel="stylesheet" rel="preload" as="style" type="text/css"  href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css"  />
      <link rel="stylesheet" rel="preload" as="style" type="text/css" href="assets/css/aos.css" crossorigin="anonymous" media="all"> 
      <link rel="stylesheet" rel="preload" as="style" type="text/css" href="assets/css/bootstrap.min.css" crossorigin="anonymous" media="all">
      
      <link rel="stylesheet" rel="preload" as="style" type="text/css" href="assets/css/owl.carousel.min.css" crossorigin="anonymous" media="all">
      <link rel="stylesheet" rel="preload" as="style" type="text/css" href="assets/css/owl.theme.default.css" crossorigin="anonymous" media="all">
      <link rel="stylesheet" rel="preload" as="style" type="text/css" href="assets/css/style.css" crossorigin="anonymous" media="all">
      <link rel="stylesheet" rel="preload" as="style" type="text/css" href="assets/css/responsive.css" crossorigin="anonymous" media="all">

      <link rel="preload" fetchpriority="high" as="image" href="assets/images/logo.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="assets/images/header-banner.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="assets/images/header-banner-img.webp" type="image/webp">
        <!--<link rel="preload" fetchpriority="high" as="image" href="assets/images/header-banner-icons.webp" type="image/webp">-->
        <!-- Google tag (gtag.js) ppc-->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17303111894"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'AW-17303111894');
</script>
<!-- Google tag (gtag.js) ppc-->

<script>(function(w, d, t, u, o) {w[u] = w[u] || [], o.ts = (new Date).getTime();var n = d.createElement(t);n.src = "https://bat.bing.net/bat.js?ti=" + o.ti + ("uetq" != u ? "&q=" + u : ""),n.async = 1, n.onload = n.onreadystatechange = function() {var s = this.readyState;s && "loaded" !== s && "complete" !== s ||(o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad"),n.onload = n.onreadystatechange = null)};var i = d.getElementsByTagName(t)[0];i.parentNode.insertBefore(n, i);})(window, document, "script", "uetq", {ti: "187245593",enableAutoSpaTracking: true});</script>
 
        </head>
   <body>
       
      <header>
         <div class="desktop-header">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-lg-6 col-8">
                     <div class="header-logo">
                        <a href="">
                        <img src="assets/images/logo.webp" class="img-fluid ">
                        </a>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-4">
                     <div class="header-btns">
                        <a href="<?php echo $no3 ?>">
                        <i class="fa-solid fa-phone"></i> <?php echo $no2 ?>
                        </a>
                        <button class="showPopup">Get Started <i class="fas fa-angle-double-right"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <section>
         <div class="header-banner">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-12 col-sm-12 col-lg-6 col-12 banner-text-col align-self-start"  >
                     <div class="header-banner-text">
                        <div class="" >
                           <h3>Ready to Publish Your Book?</h3>
                           <h1>Launch Your Book With <span>Confidence</span> - Start Today</h1>
                        </div>
                        <p>Backed by publishing experts with a proven track record of successful book launches.</p>
                        <ul>
                           <li> <i class="fas fa-star"></i> Trusted by authors worldwide</li>
                           <li> <i class="fas fa-star"></i> Helping authors publish successfully</li>
                           <li> <i class="fas fa-star"></i> Professional publishing experts</li>
                           <li> <i class="fas fa-star"></i> A proven publishing process with real author results</li>
                        </ul>
                        <button class="showPopup">Get Started <i class="fas fa-angle-double-right"></i></button>
                        <!--<div>-->
                        <!--   <img data-src="assets/images/header-banner-icons.webp" class="img-fluid lozad">-->
                        <!--</div>-->
                     </div>
                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-lg-1 col-12">
                     <div class="header-dirl-img">
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-lg-5 col-12" >
                     <div class="header-form" >
                        <h2>Turn Your Words Into A Published Book <br><span>Avail 50% Discount</span></h2>
                        <div class="header-f">
                             <form action="<?php echo $current_url ?>" method="post">
                                         <input type="hidden" name="domain" value="<?php echo $domainname?>">
                     <input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo "Unable to get location information.";}?>">
                     <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo "Unable to get location information.";}?>">
                     <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo "Unable to get location information.";}?>">
                     <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo "Unable to get location information.";}?>">
                     <input type="hidden" name="url" value='<?php echo $current_url;?>'>
                     <input type="hidden" name="domain" value="<?php echo $domainname?>">
                     <input type="hidden" name="subject" value="Banner Form (<?php echo $current_url?>)">
                     <input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
                     <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
                     <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">
                     <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
                     <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
                     <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">



                              <div class="row">
                                 <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                    <h3>Select</h3>
                                    <!-- <input type="text" placeholder="Do you have a manuscript ready?" required > -->
                                    <select name="manuscript_ready" class="" id="">
                                       <option selected="" disabled=""value="Do you have a manuscript ready?">Do you have a manuscript ready?</option>
                                       <option value="Yes, I'm ready to publish today">Yes, I'm ready to publish today</option>
                                       <option value="Yes, I'll be ready to publish in 1 to 3 months">Yes, I'll be ready to publish in 1 to 3 months</option>
                                       <option value="Yes, I'll be ready to publish in 3 to 6 months">Yes, I'll be ready to publish in 3 to 6 months</option>
                                        <option value="Yes, I’ll be ready to publish in 6 to 12 months">Yes, I’ll be ready to publish in 6 to 12 months</option>
                                       <option value="No, I do not have a book or manuscript ready">No, I do not have a book or manuscript ready</option>
                                    </select>
                                 </div>
                                 <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                    <h3>Select</h3>
                                    <!-- <input type="text" placeholder="What type of book do you plan on publishing?" required > -->
                                    <select name="plan_on_publishing" class="" id="">
                                       <option selected="" disabled=""value="What type of book do you plan on publishing?">What type of book do you plan on publishing?</option>
                                       <option value="Business">Business</option>
                                       <option value="Biography">Biography</option>
                                       <option value="Inspirational">Inspirational</option>
                                       <option value="Non-Fiction">Non-Fiction</option>
                                       <option value="How-To">How-To</option>
                                       <option value="Autobiography/Memoir">Autobiography/Memoir
                                       </option>
                                       <option value="Self-Help">Self-Help</option>
                                       <option value="Children">Children</option>
                                       <option value="Spiritual/Religious">Spiritual/Religious</option>
                                       <option value="Fiction">Fiction</option>
                                       <option value="Art/Photography">Art/Photography</option>
                                       <option value="Cookbook">Cookbook</option>
                                       <option value="Other">Other</option>
                                    </select>
                                 </div>
                                 <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                    <h4>What services are you looking for?</h4>
                                    <div class="services-options">
                                       <div class="service-item">
                                          <input type="checkbox" id="global-self-publishing" name="services[]" value="Self Publishing">
                                          <label for="global-self-publishing">Global Self-publishing</label>
                                       </div>
                                       <div class="service-item">
                                          <input type="checkbox" id="formatting-and-cover-design" name="services[]" value="Marketing">
                                          <label for="formatting-and-cover-design">Formatting & Cover Design</label>
                                       </div>
                                       <div class="service-item">
                                          <input type="checkbox" id="editing" name="services[]" value="Editing">
                                          <label for="editing">Book Editing</label>
                                       </div>
                                       <div class="service-item">
                                          <input type="checkbox" id="writing" name="services[]" value="Cover Design">
                                          <label for="writing">Ghostwriting</label>
                                       </div>
                                       <div class="service-item">
                                          <input type="checkbox" id="global-marketing" name="services[]" value="Marketing">
                                          <label for="global-marketing">Global Marketing</label>
                                       </div>
                                       <div class="service-item">
                                          <input type="checkbox" id="audiobook" name="services[]" value="Marketing">
                                          <label for="audiobook">Audiobook</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 sol-sm-6 col-lg-6 col-12 pt-3">
                                    <!--<h3>Name</h3>-->
                                    <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
                                 </div>
                                 <div class="col-md-6 sol-sm-6 col-lg-6 col-12 pt-3">
                                    <!--<h3>Phone</h3>-->
                                    <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
                                 </div>
                                 <div class="col-md-12 sol-sm-12 col-lg-12 col-12 pt-2">
                                    <!--<h3>Email</h3>-->
                                     <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
                                 </div>
                                 <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                    <h3>Message</h3>
                                         <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>
                                 </div>
                                 <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                    <button class="" cite="Submit" data-hover="Submit" type="submit" name="cta3" value="submit">Get Started <i class="fas fa-angle-double-right"></i></button>
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
      <section data-aos="zoom-in">
         <div class="logo-slider">
            <div class="container">
               <div class="logo-slider-inner">
                  <div class="row">
                     <div class="col-md-12 col-ms-12  col-lg-12 col-12">
                        <div class="logo-slider owl-carousel">
                           <div class="item">
                              <img class="owl-lazy" data-src="assets/images/logo-1.webp" class="img-fluid"> 
                           </div>
                           <div class="item">
                              <img class="owl-lazy" data-src="assets/images/logo-2.webp" class="img-fluid"> 
                           </div>
                           <div class="item">
                              <img class="owl-lazy" data-src="assets/images/logo-3.webp" class="img-fluid"> 
                           </div>
                           <div class="item">
                              <img class="owl-lazy" data-src="assets/images/logo-4.webp" class="img-fluid"> 
                           </div>
                           <div class="item">
                              <img class="owl-lazy" data-src="assets/images/logo-6.webp" class="img-fluid"> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section data-aos="fade-up">
         <div class="What-We">
            <div class="container">
               <div class="what-we-header">
                  <h2>What We Serve You</h2>
                  <h3>You are one click away from getting
                     our <span>quality services</span>
                  </h3>
               </div>
               <div class="what-we-boxes">
                  <div class="row">
                     <div class="col-md-6 col-sm-6 col-lg-3 col-12">
                        <div class="what-we-inner-box">
                           <ul>
                              <li><img data-src="assets/images/what-we-1.webp" class="img-fluid lozad"></li>
                              <li>
                                 <h4>01</h4>
                              </li>
                           </ul>
                           <h3>Book Writing</h3>
                           <p>With a keen choice of words and
                              vocabulary, our professional and
                              experienced writers compose your
                              book as per your decided manuscript.
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-lg-3 col-12">
                        <div class="what-we-inner-box">
                           <ul>
                              <li><img data-src="assets/images/book-editing.webp" class="img-fluid lozad"></li>
                              <li>
                                 <h4>02</h4>
                              </li>
                           </ul>
                           <h3>Book Editing</h3>
                           <p>
                              Irrespective of your book’s genre, we
                              edit and refine your book to make it
                              your reader’s next favorite book on their
                              bookshelf.
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-lg-3 col-12">
                        <div class="what-we-inner-box">
                           <ul>
                              <li><img data-src="assets/images/Cover-Designing.webp" class="img-fluid lozad"></li>
                              <li>
                                 <h4>03</h4>
                              </li>
                           </ul>
                           <h3>Cover Designing</h3>
                           <p>
                              Making your book look attractive yet
                              triggering the curiosity to explore inside.
                              Our designers transform your book from
                              bland to vibrant.
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-lg-3 col-12">
                        <div class="what-we-inner-box">
                           <ul>
                              <li><img data-src="assets/images/Publishing.webp" class="img-fluid lozad"></li>
                              <li>
                                 <h4>04</h4>
                              </li>
                           </ul>
                           <h3>Publishing</h3>
                           <p>
                              Taking your book to the public. We
                              publish on certified and trustable
                              platforms like amz, kindle, google
                              books, iBooks, nook, etc.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-sm-6 col-lg-3 col-12">
                        <div class="what-we-inner-box">
                           <ul>
                              <li><img data-src="assets/images/website.webp" class="img-fluid lozad"></li>
                              <li>
                                 <h4>05</h4>
                              </li>
                           </ul>
                           <h3>Website</h3>
                           <p>
                              Designing your author’s website creates
                              an influence and functions to build your
                              credibility and recognition as a writer in
                              your industry.
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-lg-3 col-12">
                        <div class="what-we-inner-box">
                           <ul>
                              <li><img data-src="assets/images/Book-Marketing.webp" class="img-fluid lozad"></li>
                              <li>
                                 <h4>06</h4>
                              </li>
                           </ul>
                           <h3>Book Marketing</h3>
                           <p>
                              Strategic and well-planned book
                              marketing services to make your
                              business reach its audience and adds
                              up to your reputation in the E-market.
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-lg-3 col-12">
                        <div class="what-we-inner-box">
                           <ul>
                              <li><img data-src="assets/images/audio-book-g.webp" class="img-fluid lozad"></li>
                              <li>
                                 <h4>07</h4>
                              </li>
                           </ul>
                           <h3>Audio Book</h3>
                           <p>
                              Deliver your story through perfect-fit
                              voices. Professional voice artists cater
                              to the accents, pitches, and clarity of
                              your audiobook.
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-lg-3 col-12">
                        <div class="what-we-inner-box">
                           <ul>
                              <li><img data-src="assets/images/video-book.webp" class="img-fluid lozad"></li>
                              <li>
                                 <h4>08</h4>
                              </li>
                           </ul>
                           <h3>Video Book Trailer</h3>
                           <p>
                              Build curiosity and boost your pre-
                              launch marketing plans through an on-
                              stereotypical video book trailer.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                        <div class="what-we-buttons">
                           <button class="desktop-view chatBtn desktop-view"> <i class="far fa-comment-alt"></i> Live Chat</button>
                           <a class="mobile-view" href="<?php echo $no3 ?>">     <i class="fa-solid fa-phone"></i> <?php echo $no2 ?> </a>
                           <button class="showPopup">Get Started <i class="fas fa-angle-double-right"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="cta">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                     <div class="cta-text"  data-aos="flip-up">
                        <h4>Amz Store Contains Over 32.8 Million Published Titles</h4>
                        <h3>Connect with Millions & Boost Your <span>Sales Today!</span></h3>
                        <p><?php echo $bname ?> will Help You Stand Out Among Them</p>
                        <div class="what-we-buttons cta-btns">
                           <!--<button id="chatBtn" class="desktop-view  chatBtn desktop-view"> <i class="far fa-comment-alt"></i> Live Chat</button>-->
                           <a class="" href="<?php echo $no3 ?>">     <i class="fa-solid fa-phone"></i> <?php echo $no2 ?> </a>
                           <button class="showPopup">Get Started <i class="fas fa-angle-double-right"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                     <div class="cta-girl-img" data-aos="flip-left">
                        <img data-src="assets/images/cta-girl.webp" class="img-fluid lozad">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section data-aos="zoom-in-up">
         <div class="our-seamless">
            <div class="container">
               <div class="our-seamless-head">
                  <div class="our-seamless-head-text">
                     <h4>Our Seamless</h4>
                     <h3>Manuscript To Published Book Process</h3>
                  </div>
                  <div class="what-we-buttons our-seamless-head-btn">
                     <!--<button>Talk With Us <i class="fas fa-angle-double-right"></i></button>-->
                     <button onclick="window.location.href='tel:'+16562221815"> <i class="fa-solid fa-phone"></i> Talk With Us </button>
                  </div>
               </div>
               <div class="our-seamless-box">
                  <div class="row">
                     <div class="col-md-6 col-sm-12 col-lg-3 col-12">
                        <div class="our-seamless-box-inner">
                           <img data-src="assets/images/seamless-1.webp" class="img-fluid lozad">
                           <h3>Sign Up for Our Services</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-3 col-12">
                        <div class="our-seamless-box-inner">
                           <img data-src="assets/images/answer-a-few-questions.webp" class="img-fluid lozad">
                           <h3>Answer a Few Questions</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-3 col-12">
                        <div class="our-seamless-box-inner">
                           <img data-src="assets/images/talk-to-our-writing-team.webp" class="img-fluid lozad">
                           <h3>Talk To Our Writing Team</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-3 col-12">
                        <div class="our-seamless-box-inner">
                           <img data-src="assets/images/receive-your.webp" class="img-fluid lozad">
                           <h3>Receive Your Book Cover</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-3 col-12">
                        <div class="our-seamless-box-inner">
                           <img data-src="assets/images/chapter.webp" class="img-fluid lozad">
                           <h3>Review Your Book (Chapter by Chapter)</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-3 col-12">
                        <div class="our-seamless-box-inner">
                           <img data-src="assets/images/porfread.webp" class="img-fluid lozad">
                           <h3>Edit And <br>Proofread</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-3 col-12">
                        <div class="our-seamless-box-inner">
                           <img data-src="assets/images/get-published.webp" class="img-fluid lozad">
                           <h3>Get <br> Published</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-3 col-12">
                        <div class="our-seamless-box-inner">
                           <img data-src="assets/images/become.webp" class="img-fluid lozad">
                           <h3>Become a Successful Author</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                     <div class="what-we-buttons">
                        <button class="desktop-view chatBtn desktop-view"> <i class="far fa-comment-alt"></i> Live Chat</button>
                        <a class="mobile-view" href="<?php echo $no3 ?>">     <i class="fa-solid fa-phone"></i> <?php echo $no2 ?> </a>
                        <button class="showPopup">Get Started <i class="fas fa-angle-double-right" aria-hidden="true"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="top-rated">
         <div class="background-overlay"></div>
         <div class="container">
            <div class="top-rated-head" data-aos="fade-up">
               <h2>Years of Producing Several book store</h2>
               <p>As a expert book publishing agency, we provide tailored solutions to meet your needs and enhance your author's journey experience.</p>
            </div>
            <div class="top-rated-boxes">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-lg-4">
                     <div class="top-rated-inner top-liner">
                        <img data-src="assets/images/top-rated-1.webp" class="img-fluid lozad">
                        <h3>Concept-to-Manuscript Service</h3>
                        <p>Our professional writers will publish your
                           book based on your ideas and vision,
                           ensuring a polished manuscript without
                           the hassle of writing it yourself.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-4">
                     <div class="top-rated-inner">
                        <img data-src="assets/images/top-rated-2.webp" class="img-fluid lozad">
                        <h3>Manuscript Refinement Service</h3>
                        <p>
                           Our skilled editors will refine your
                           manuscript by enhancing clarity,
                           coherence, and consistency, making it
                           ready for readers.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-4">
                     <div class="top-rated-inner  top-liner">
                        <img data-src="assets/images/top-rated-3.webp" class="img-fluid lozad">
                        <h3>Comprehensive Publishing Service</h3>
                        <p>
                           Streamline the publishing process with our
                           comprehensive assistance in formatting,
                           printing, and distribution, helping you
                           reach a wider audience. Strategic Book
                           Promotion Service
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-4">
                     <div class="top-rated-inner">
                        <img data-src="assets/images/top-rated-4.webp" class="img-fluid lozad">
                        <h3>Strategic Book Promotion Service</h3>
                        <p>
                           We will strategically promote your book
                           through targeted campaigns, increasing
                           its visibility, engagement, and sales in a
                           competitive market.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-4">
                     <div class="top-rated-inner top-liner">
                        <img data-src="assets/images/top-rated-5.webp" class="img-fluid lozad">
                        <h3>E-Book Conversion <br> Service</h3>
                        <p>
                           Convert your manuscript into digital
                           formats, allowing for wider distribution
                           across various e-book platforms to
                           increase accessibility and reach.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-4">
                     <div class="top-rated-inner">
                        <img data-src="assets/images/top-rated-1.webp" class="img-fluid lozad">
                        <h3>Custom Book Cover Design Service</h3>
                        <p>
                           Our professional designers will create eye-
                           catching covers that capture attention,
                           convey the essence of your book, and
                           entice readers to explore further.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                     <div class="what-we-buttons top-rated-btn">
                        <button class="desktop-view  chatBtn desktop-view"> <i class="far fa-comment-alt"></i> Live Chat</button>
                        <a class="mobile-view" href="<?php echo $no3 ?>">     <i class="fa-solid fa-phone"></i> <?php echo $no2 ?> </a>
                        <button class="showPopup">Get Started <i class="fas fa-angle-double-right" aria-hidden="true"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="ready-to-pub">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-lg-6 col-12" data-aos="fade-right">
                     <div class="ready-to-pub-text">
                        <h4>Ready to Publish Your Book?</h4>
                        <h3>Turning Your Publishing Goals into  <span>Reality</span></h3>
                        <p>We are a dedicated team of book publishing experts passionate about turning your goals into reality. Our experts go the extra mile to bring your book to life while preserving your creative essence. With us, your vision stays at the heart of everything we do. Rather than changing your ideas, we refine and align them with proven publishing strategies. Our goal is to elevate your manuscript and give it the platform it deserves. With our support, your story doesn’t just get published, it gets noticed, appreciated, and remembered.</p>
                        <div class="what-we-buttons">
                           <button class="desktop-view chatBtn desktop-view"> <i class="far fa-comment-alt"></i> Live Chat</button>
                           <a class="mobile-view" href="<?php echo $no3 ?>">     <i class="fa-solid fa-phone"></i> <?php echo $no2 ?> </a>
                           <button class="showPopup">Get Started <i class="fas fa-angle-double-right"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-12" data-aos="fade-left">
                     <div class="resdy-to-pub-img">
                        <img data-src="assets/images/resdy-to-pub-img.webp" class="img-fluid lozad">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="portfolio">
         <div class="container" data-aos="fade-up">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="main-heading-portfolio">
                     <h2>
                        A glimpse into our <span>Published </span>books
                     </h2>
                  </div>
               </div>
            </div>
            <div class="owl-carousel book-slider owl-theme">
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/The-Count-of-Monte-Cristo.webp" class="img-fluid owl-lazy" alt="The-Count-of-Monte-Cristo By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/The-Story-of-My-Life.webp" class="img-fluid owl-lazy" alt="The-Story-of-My-Life By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/The-Adventures-of-Tom-Sawyer.webp" class="img-fluid owl-lazy" alt="The-Adventures-of-Tom-Sawyer By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/Notes-from-the-Underground.webp" class="img-fluid owl-lazy" alt="Notes-from-the-Underground By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Anna-Karenina.webp" class="img-fluid owl-lazy" alt="Anna-Karenina By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/In-My-Fathers-House.webp" class="img-fluid owl-lazy" alt="In-My-Fathers-House By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Think-and-Grow-Rich.webp" class="img-fluid owl-lazy" alt="Think-and-Grow-Rich By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Winnie-the-Pooh.webp" class="img-fluid owl-lazy" alt="Winnie-the-Pooh By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/The-Great-Gatsby.webp" class="img-fluid owl-lazy" alt="The Great Gatsby By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/The-Doors-of-Perception.webp" class="img-fluid owl-lazy" alt="The-Doors-of-Perception By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/The-Stranger.webp" class="img-fluid owl-lazy" alt="The-Stranger By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/As-I-Lay-Dying.webp" class="img-fluid owl-lazy" alt="As-I-Lay-Dying By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/THE-END-IS-IN-THE-BEGINNING-AS-PROPHESIED.webp" class="img-fluid owl-lazy" alt="THE-END-IS-IN-THE-BEGINNING-AS-PROPHESIED As-I-Lay-Dying By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/Uncle-Tom's-Cabin.webp" class="img-fluid owl-lazy" alt="Uncle-Tom's-Cabin By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/Modern-Man-in-Search-of-a-Soul.webp" class="img-fluid owl-lazy" alt="Modern-Man-in-Search-of-a-Soul By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Treasure-Island.webp" class="img-fluid owl-lazy" alt="Treasure-Island By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/Hope.webp" class="img-fluid owl-lazy" alt="Hope By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Don-Quixote.webp" class="img-fluid owl-lazy" alt="Don-Quixote By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/The-Pursuit-of-God.webp" class="img-fluid owl-lazy" alt="The-Pursuit-of-God By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/The-Haunting-of-Hill-House.webp" class="img-fluid owl-lazy" alt="The-Haunting-of-Hill-House By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/The-Rogues-Confession.webp" class="img-fluid owl-lazy" alt="The Rogues Confession By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/Moby-Dick.webp" class="img-fluid owl-lazy" alt="Moby-Dick By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Alice-in-Wonderland.webp" class="img-fluid owl-lazy" alt="Alice-in-Wonderland By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/We-Have-Always-Lived-in-the-Castle.webp" class="img-fluid owl-lazy" alt="We-Have-Always-Lived-in-the-Castle By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Robinson-Crusoe.webp" class="img-fluid owl-lazy" alt="Robinson-Crusoe By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/Death-Comes-for-the-Archbishop.webp" class="img-fluid owl-lazy" alt="Death-Comes-for-the-Archbishop By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/The-Jungle-Book.webp" class="img-fluid owl-lazy" alt="The-Jungle-Book By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/The-Emerald-Tablets-of-Thoth-the-Atlantean.webp"  class="img-fluid owl-lazy" alt="The-Emerald-Tablets-of-Thoth-the-Atlantean By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/The-Three-Musketeers.webp" class="img-fluid owl-lazy" alt="The Three Musketeers By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/Hedgehogs-Don't-Have-Feathers.webp" class="img-fluid owl-lazy" alt="Hedgehogs-Don't-Have-Feathers By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/The-Memory-Keeper’s-Mother.webp" class="img-fluid owl-lazy" alt="The-Memory-Keeper’s-Mother By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Pay-Attention-to-Your-Dreams.webp" class="img-fluid owl-lazy" alt="Pay-Attention-to-Your-Dreams By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/The-adventures-of-the-magical-suitcase.webp" class="img-fluid owl-lazy" alt="The-adventures-of-the-magical-suitcase By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/To-Help-or-Hang.webp" class="img-fluid owl-lazy" alt="To-Help-or-Hang By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Une-nouvelle-perspective.webp" class="img-fluid owl-lazy" alt="Une-nouvelle-perspective By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/Leisenring.webp" class="img-fluid owl-lazy" alt="Leisenring By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/stories/Cheerleaders-Coaches-Comrades-Champions.webp"  class="img-fluid owl-lazy" alt="Chewing-Slowly By <?php echo $bname ?>">
                  </div>
               </div>
               <div class="item">
                  <div class="inner-portfolio">
                     <img data-src="https://theglobalpublishers.com/assets/images/book-slide/The-City.webp" class="img-fluid owl-lazy" alt="The-City By <?php echo $bname ?>">
                  </div>
               </div>
            </div>
            <!-- <div class="owl-carousel book-slider owl-theme">
               <div class="item">
                   <div class="inner-portfolio">
                       <img src="assets/images/book-slider-img-1.webp" class="img-fluid lozad">
                   </div>
               </div>
               <div class="item">
                   <div class="inner-portfolio">
                       <img src="assets/images/book-slider-img-2.webp" class="img-fluid lozad">
                   </div>
               </div>
               <div class="item">
                   <div class="inner-portfolio">
                       <img src="assets/images/book-slider-img-3.webp" class="img-fluid lozad">
                   </div>
               </div>
               <div class="item">
                   <div class="inner-portfolio">
                       <img src="assets/images/book-slider-img-4.webp" class="img-fluid lozad">
                   </div>
               </div>
               <div class="item">
                   <div class="inner-portfolio">
                       <img src="assets/images/book-slider-img-5.webp" class="img-fluid lozad">
                   </div>
               </div>
               </div> -->
            <div class="what-we-buttons cta-btns">
               <a href="<?php echo $no3 ?>">
               <i class="fa-solid fa-phone"></i> <?php echo $no2 ?>
               </a>                <button id="chatBtn" class="desktop-view chatBtn desktop-view"> <i class="far fa-comment-alt"></i> Live Chat</button>
               <!-- <button> <a href="<?php echo $no3 ?>"><i class="far fa-comment-alt"></i> <?php echo $no2 ?> </a> </button> -->
               <button class="showPopup">Get Started <i class="fas fa-angle-double-right"></i></button>
            </div>
         </div>
      </section>
      <section class="launch-sec" >
         <div class="container">
            <div class="row launch-row">
               <div class="col-md-6 launch-img-col" data-aos="fade-right">
                  <img data-src="assets/images/launch-img.webp" class="img-fluid lozad" alt="">
               </div>
               <div class="col-md-6 launch-text-col" data-aos="fade-left">
                  <h3 class="sub-title">
                     Launch Your Legacy: Establish Yourself As a Recognized Author
                  </h3>
                  <p class="mb-2"  >
                     Ready to see your book in the hands of readers around the world? We make it happen. Our
                     publishing professionals handle every detail with expert precision, from formatting your
                     manuscript for any screen or print size to making it compatible across top platforms like amz,
                     Apple Books, and more.
                  </p>
                  <p>
                     While we take care of the technicalities you can work on your manuscripts Behind every
                     successful book is a focused team, and ours brings editors, designers, and publishing strategists
                     together to shape your manuscript into a market-ready product. You write, we handle the rest,
                     including the nuts and bolts of self-publishing. Our experienced team knows how to find your
                     niche, connect with your audience, and get your book noticed.
                  </p>
                  <div class="arrow-list">
                     <ul class="arrow-ul" >
                        <li> <i class="fa-solid fa-arrow-right"></i> Seamless Self-Publishing</li>
                        <li> <i class="fa-solid fa-arrow-right"></i> Professional Paperback Printing</li>
                        <li> <i class="fa-solid fa-arrow-right"></i> Custom, Genre-Focused Covers</li>
                     </ul>
                     <ul class="arrow-ul" >
                        <li> <i class="fa-solid fa-arrow-right"></i> Insightful Editorial Review</li>
                        <li> <i class="fa-solid fa-arrow-right"></i> Platform-Ready Book Formatting</li>
                        <li> <i class="fa-solid fa-arrow-right"></i> Personalized Assistance</li>
                     </ul>
                  </div>
                  <div class="what-we-buttons cta-btns">
                     <button id="chatBtn" class="desktop-view chatBtn desktop-view"> <i class="far fa-comment-alt"></i> Live Chat</button>
                     <a class="mobile-view" href="<?php echo $no3 ?>">     <i class="fa-solid fa-phone"></i> <?php echo $no2 ?> </a>
                     <button class="showPopup">Get Started <i class="fas fa-angle-double-right"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="testi-sec">
         <div class="container">
            <div class="row testi-row">
               <div class="col-md-6  testi-text-col" data-aos="fade-up">
                  <p class="testi-sun-h"> <span>Our Testimonials</span> </p>
                  <h3 class="sub-title">
                     What our Happy Client Say.
                  </h3>
                  <p>
                     We build results-oriented brand strategies and continually refine your campaigns for the greatest outcome
                  </p>
               </div>
               <div class="col-md-6 testi-slide-col">
                  <img data-src="assets/images/client-girl.webp" class="img-fluid testi-girl lozad" alt="client girl" data-aos="flip-left">
                  <!-- <div class="testi-slide-div">
                     <div class="testi-slide owl-carousel owl-theme">
                         <div class="item">
                             <div class="row client-row">
                                 <div class="col-md-6 client-img">
                                     <img src="assets/images/client-img-1.webp" class="img-fluid lozad" alt="client img">
                                     <h6>Annie Gardner</h6>
                                 </div>
                                 <div class="col-md-6 ">
                                     <div class="icon-div">
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                     </div>
                                 </div>
                             </div>
                             <p>
                                 “I am glad that I trusted <?php echo $bname ?> for their ghostwriting services! The team that I worked with managed to maintain a high level of professionalism throughout the timeline of the project I was looking for. Good job guys!”
                             </p>
                         </div>
                         <div class="item">
                             <div class="row client-row">
                                 <div class="col-md-6 client-img">
                                     <img src="assets/images/client-img-1.webp" class="img-fluid lozad" alt="client img">
                                     <h6>Annie Gardner</h6>
                                 </div>
                                 <div class="col-md-6 ">
                                     <div class="icon-div">
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                     </div>
                                 </div>
                             </div>
                             <p>
                                 “I am glad that I trusted <?php echo $bname ?> for their ghostwriting services! The team that I worked with managed to maintain a high level of professionalism throughout the timeline of the project I was looking for. Good job guys!”
                             </p>
                         </div>
                     </div>
                     </div> -->
               </div>
               <div class="testi-slide-div">
                  <div class="testi-slide owl-carousel owl-theme">
                     <div class="item">
                        <div class="row client-row">
                           <div class="col-md-6 client-img">
                              <img data-src="assets/images/client-img-1.webp" class="img-fluid owl-lazy" alt="client img">
                              <h6>Annie Gardner</h6>
                           </div>
                           <div class="col-md-6 ">
                              <div class="icon-div">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                        </div>
                        <p>
                           “I am glad that I trusted <?php echo $bname ?> for their ghostwriting services! The team that I worked with managed to maintain a high level of professionalism throughout the timeline of the project I was looking for. Good job guys!”
                        </p>
                     </div>
                     <div class="item">
                        <div class="row client-row">
                           <div class="col-md-6 client-img">
                              <img data-src="assets/images/client-img-2.webp" class="img-fluid owl-lazy" alt="client img">
                              <h6>Bruce Owens</h6>
                           </div>
                           <div class="col-md-6 ">
                              <div class="icon-div">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                        </div>
                        <p>
                           “Working with <?php echo $bname ?> was a pleasure and I can’t imagine
                           receiving better content from any other agency. They managed to deliver
                           exactly what we discussed in the initial brief and kept me in the loop
                           throughout the timeline of the project.                                     
                        </p>
                     </div>
                     <div class="item">
                        <div class="row client-row">
                           <div class="col-md-6 client-img">
                              <img data-src="assets/images/client-img-3.webp" class="img-fluid owl-lazy" alt="client img">
                              <h6>Roberta G. Ly</h6>
                           </div>
                           <div class="col-md-6 ">
                              <div class="icon-div">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                        </div>
                        <p>
                           Website is great, service was quick and easy. Customer support is
                           fantastic
                           and I received response with 5-10 minutes. I will be using this site
                           from
                           now on for all my Logo needs. Thanks.
                        </p>
                     </div>
                     <div class="item">
                        <div class="row client-row">
                           <div class="col-md-6 client-img">
                              <img data-src="assets/images/client-img-4.webp" class="img-fluid owl-lazy" alt="client img">
                              <h6>Andrew S. Beal</h6>
                           </div>
                           <div class="col-md-6 ">
                              <div class="icon-div">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                        </div>
                        <p>
                           You guys are awesome, thank you so much for your patience I bought some
                           items and runes but some issues at the beginning but I got a lot of help
                           from you with no pressure! Awesome!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="form-sec">
         <div class="container">
            <div class="form-title" data-aos="zoom-in">
               <h2 class="sub-title" >Start Your <span>Publishing Journey</span> </h2>
               <p>We’d love to hear what you are looking for in your book and show you a few relevant samples. Get on a call with us to take it forward.</p>
            </div>
            <div class="row form-row">
               <div class="col-md-6 form-col-img">
                  <div class="form-man" data-aos="fade-down">
                     <img data-src="assets/images/form-img.webp" class="img-fluid lozad" alt="form image">
                  </div>
                  <h2 class="sub-title-m">Let's Talk</h2>
                  <div class="what-we-buttons">
                     <button id="chatBtn" class="desktop-view  chatBtn desktop-view"> <i class="far fa-comment-alt"></i> Live Chat</button>
                     <a class="mobile-view" href="<?php echo $no3 ?>">     <i class="fa-solid fa-phone"></i> <?php echo $no2 ?> </a>
                     <button class="showPopup">Get Started <i class="fas fa-angle-double-right"></i></button>
                  </div>
                  <p>
                     The Global Publishers is proud to be an expert in the publishing industry.
                  </p>
                  <img data-src="assets/images/form-logo-img.webp" class="img-fluid lozad form-logo-img" alt="logo image">
               </div>
               <div class="col-md-6 form-col-form" data-aos="fade-left">
                  <div class="header-form">
                     <h2>Get A Quote <br><span>Avail 50% Discount</span></h2>
                     <div class="header-f">
                        <form action="<?php echo $current_url ?>" method="post">
                           <div class="row">
                              <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                 <h3>Select</h3>
                                 <!-- <input type="text" placeholder="Do you have a manuscript ready?" required > -->
                                 <select name="manuscript_ready" class="" id="">
                                    <option selected="" disabled="">Do you have a manuscript ready?</option>
                                    <option value="Yes, I'm ready to publish today">Yes, I'm ready to publish today</option>
                                    <option value="Yes, I'll be ready to publish in 1 to 3 months">Yes, I'll be ready to publish in 1 to 3 months</option>
                                    <option value="Yes, I'll be ready to publish in 3 to 6 months">Yes, I'll be ready to publish in 3 to 6 months</option>
                                    <option value="Yes, I’ll be ready to publish in 6 to 12 months">Yes, I’ll be ready to publish in 6 to 12 months</option>
                                    <option value="No, I do not have a book or manuscript ready">No, I do not have a book or manuscript ready</option>
                                 </select>
                              </div>
                              <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                 <h3>Select</h3>
                                 <!-- <input type="text" placeholder="What type of book do you plan on publishing?" required > -->
                                 <select name="plan_on_publishing" class="" id="">
                                    <option selected="" disabled="">What type of book do you plan on publishing?</option>
                                    <option value="Business">Business</option>
                                    <option value="Biography">Biography</option>
                                    <option value="Inspirational">Inspirational</option>
                                    <option value="Non-Fiction">Non-Fiction</option>
                                    <option value="How-To">How-To</option>
                                    <option value="Autobiography/Memoir">Autobiography/Memoir
                                    </option>
                                    <option value="Self-Help">Self-Help</option>
                                    <option value="Children">Children</option>
                                    <option value="Spiritual/Religious">Spiritual/Religious</option>
                                    <option value="Fiction">Fiction</option>
                                    <option value="Art/Photography">Art/Photography</option>
                                    <option value="Cookbook">Cookbook</option>
                                    <option value="Other">Other</option>
                                 </select>
                              </div>
                              <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                 <h4>What services are you looking for?</h4>
                                 <div class="services-options">
                                    <div class="service-item">
                                       <input type="checkbox" id="global-self-publishing2" name="services[]" value="Self Publishing">
                                       <label for="global-self-publishing2">Global Self-publishing</label>
                                    </div>
                                    <div class="service-item">
                                       <input type="checkbox" id="formatting-and-cover-design2" name="services[]" value="Marketing">
                                       <label for="formatting-and-cover-design2">Formatting & Cover Design</label>
                                    </div>
                                    <div class="service-item">
                                       <input type="checkbox" id="editing2" name="services[]" value="Editing">
                                       <label for="editing2">Book Editing</label>
                                    </div>
                                    <div class="service-item">
                                       <input type="checkbox" id="writing2" name="services[]" value="Cover Design">
                                       <label for="writing2">Ghostwriting</label>
                                    </div>
                                    <div class="service-item">
                                       <input type="checkbox" id="global-marketing2" name="services[]" value="Marketing">
                                       <label for="global-marketing2">Global Marketing</label>
                                    </div>
                                    <div class="service-item">
                                       <input type="checkbox" id="audiobook2" name="services[]" value="Marketing">
                                       <label for="audiobook2">Audiobook</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 sol-sm-6 col-lg-6 col-12">
                                 <h3>Name</h3>
                                  <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
                              </div>
                              <div class="col-md-6 sol-sm-6 col-lg-6 col-12">
                                 <h3>Phone</h3>
                                 <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
                              </div>
                              <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                 <h3>Email</h3>
                                  <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
                              </div>
                              <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                 <h3>Message</h3>
                                 <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>
                              </div>
                              <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                                 <button class="" cite="Submit" data-hover="Submit" type="submit" name="cta3" value="submit">Get Started <i class="fas fa-angle-double-right" aria-hidden="true"></i></button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="footer-main">
         <div class="footer-bottom" >
            <div class="container" >
               <div class="row" >
                  <div class="col-lg-12" >
                     <div class="get-in-touch" >
                        <p>
                           Get in Touch With us
                           <a href="<?php echo $no3 ?>">
                              <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                              </svg>
                              <!-- <i class="fa fa-phone" aria-hidden="true"></i> Font Awesome fontawesome.com --> <?php echo $no2 ?>
                           </a>
                           <a href="mailto:<?php echo $email ?>">
                              <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                              </svg>
                              <!-- <i class="fa fa-envelope" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                              <?php echo $email ?>
                           </a>
                           <a href="">
                              <svg class="svg-inline--fa fa-location-pin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-pin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z"></path>
                              </svg>
                              <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                              400 N Ashley Dr, Suite 1900, Tampa, FL 33602
                           </a>
                        </p>
                        
                        <span class="footer_img_div">
                        <a  ><img data-src="assets/images/reviews.webp" class="img-fluid lozad footer_images" alt="img"></a>
                        <a  ><img data-src="assets/images/trust.webp" class="img-fluid lozad footer_images" alt="img"></a>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-last" >
            <div class="container" >
               <div class="row justify-content-center" >
                  <div class="col-lg-10" >
                     <div class="copyright" >
                         <p class="mb-3">
                            <a href="<?php echo $url?>privacy-policy" target="_blank" style="color:#fff">Privacy Policy</a> | <a href="<?php echo $url?>terms-condition" target="_blank" style="color:#fff">Terms & Conditions</a>
                        </p>
                        <p>Copyright © <?php echo $bname ?> 2026. All rights reserved | Powered By The
                           Global Publishers LLC
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="disclaimer-area" >
            <div class="container" >
               <div class="row" >
                  <div class="col" >
                     <p class="disclaimer">
                        <strong>Disclaimer:</strong><br>
                        The services provided by <?php echo $bname ?> become clients' property once delivered. <?php echo $bname ?> will not hold any ownership rights once your work is successfully accepted by a publishing
                        house.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <footer>
         <section class="footer-sec">
            <div class="container">
            </div>
         </section>
      </footer>
      <div class="popup-overlay" id="popupOverlay">
         <div class="popup">
            <button class="close-btn" id="closeBtn">&times;</button>
            <div class="header-form">
               <h2>Turn Your Words Into A Published Book  <br><span>Avail 50% Discount</span></h2>
               <div class="header-f">
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
                        <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                           <h3>Name</h3>
                           <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
                        </div>
                        <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                           <h3>Phone</h3>
                             <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
                        </div>
                        <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                           <h3>Email</h3>
                                     <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
                        </div>
                        <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                           <h3>Message</h3>
                              <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>
                        </div>
                        <div class="col-md-12 sol-sm-12 col-lg-12 col-12">
                           <button class="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">Get Started <i class="fas fa-angle-double-right" aria-hidden="true"></i></button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="StickyCta scrolled" >
         <div class="StickeyCtaInner" >
            <ul>
               <li><a  class="showPopup"><img data-src="assets/images/ctaFormfixed.webp" class="lozad" alt="Sticky Cta"></a></li>
               <!-- <li><a href="<?php echo $no3 ?>"><img src="https://theglobalpublishers.com/assets/images/ctaCallfixed.webp" alt="Sticky Cta"></a></li> -->
            </ul>
         </div>
      </div>
      <script src="assets/js/jquery-3.3.1.min.js" ></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/aos.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/font.js"></script>
      <script type="text/javascript" src="assets/js/lozad.min.js"></script>
      <script src="assets/js/custom.js" > </script>
      <script>
				document.addEventListener("DOMContentLoaded", function(){
   const observer = lozad('.lozad', {
      rootMargin: '10px 0px',
      threshold: 0.1
   });
   observer.observe();
});
			</script>
      <script>
         AOS.init();
      </script>

      
  <?php require '../inc/chat.php'; ?>