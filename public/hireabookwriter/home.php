

<section class="banner-wrap all-section">
  <img src="assets/images/banner-2.webp" alt="<?php echo $bname ?> Banner image" fetchpriority="high"  loading="eager">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="banner-text">
          <div class="banner-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>Top Rated Book Writing Services</span>
          </div>
          <h1><span><?php echo $bname ?> to Turn Your Ideas into a Captivating Book – A Revolutionary Approach for Visionary Thinkers Who Struggle with Writing!</h1></span>
          <p><?php echo $bname ?> captures your voice like no one else. Whether it’s a memoir, self-help book, science fiction, or autobiography, <?php echo $bname ?>’s expert team transforms your ideas into compelling narratives. Let’s connect and explore how we can help your stories resonate with readers worldwide.</p>
          <div class="form_Wrpr banner-form">
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
              <div class="grp">
                 <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
              </div>
              <div class="grp">
                <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
              </div>
              <div class="grp">
                 <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
              </div>
              <div class="grp">
                <button type="submit" id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">Submit</button>
              </div>
            </form>
          </div>
          <div class="banner-img">
            <img src="assets/images/banner-img-book.webp" alt="<?php echo $bname ?> Banner image" fetchpriority="high">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="forge-wrap all-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="forge-text">
          <h2><strong>You Have The Best Idea; We Have The Right Words - You Got The Point?
          </strong></h2>
          <p >Your search for writers who can capture your voice ends here. You need a writer for science fiction? Let our book writers grab their pen. Looking forward to writing a self-help book, memoir, or autobiography? Done. We are ready to give our voice to your great ideas to make them greater. What is the outcome? You get heard, listened to, and read worldwide. Have a little chat with our team to dig deep.
          </p>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta">
  <div class="row">
    <div class="col-lg-2 cta-img-col">
    <img src="assets/images/cta-2.webp" alt="<?php echo $bname ?> Banner cta" class="cta-img-1 lazy">
    </div>
    <div class="col-lg-8">
        <div class="container-xl">
          <div class="cta-hdg">
            <h2 data-aos="flip-up">Want to <?php echo $bname ?>? You’ve Got One</h2>
            <p  data-aos="fade-up">With so many options, it is normal to feel confused. Wait a second. We believe your case is different. You have already reached expert book writers. Not only this, you now have access to world-famous book-writing services. How to start? GET STARTED button is waiting for you; hit and have a chat right away.</p>
            <div class="cta-btns">
                <span>
                    <a href="javascript:void(0)" data-fancybox="" src="#popupform" class="btn-1 open-popup showPopup" data-aos="zoom-in">Get Started</a>                    
                </span>
              <a href="<?php echo $no1 ?>" class="btn-1" data-aos="zoom-in">
                <i>
                  <i class="fas fa-phone-alt"></i>
                </i><?php echo $no ?></a>
                <span>
                    <a href="javascript:" onclick="toggleChat();"  class="btn-1">Live Chat</a>                    
                </span>

            </div>
          </div>
        </div>
    </div>
    <div class="col-lg-2 cta-img-col">  <img   src="assets/images/cta1-1.webp" alt="<?php echo $bname ?> Banner cta" class="cta-img-2 lazy"></div>
  </div>



</section>
<section class="Professional-wrap all-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 Professional-wrap-col">
        <div class="Professional-ser-text">
          <h2 data-aos="fade-right" data-aos-easing="ease-in-sine">Who We Are, Have Been, <span> and Will Be?</span> </h2>
          <p data-aos="fade-right"   data-aos-easing="ease-in-sine">At <?php echo $bname ?>, we are more than just a book editing and writing agency; we are storytellers, collaborators, and champions of your voice. Our passionate team of more than 100 skilled professionals brings decades of collective experience to every project.
          </p>
          <p data-aos="fade-right"   data-aos-easing="ease-in-sine">Over the years, we’ve guided 1000+ authors to seamless publication on all major platforms, everything from ghostwriting, editing, cover design, audiobook production, and marketing. Our hybrid services cover the full publishing journey: manuscript review, professional formatting, eye-catching covers, and audiobook creation, ensuring your work reaches its full potential.
          </p>
          <p data-aos="fade-right"   data-aos-easing="ease-in-sine">Whether you’re launching a memoir, novel, self-help book, or creative project (fiction, sci‑fi, horror, rhyme, song lyrics), we tailor our approach to fit your vision. With a proven track record, we’ve elevated 100+ titles to published works, built custom author sites, and supported international translations. Our mission? To make your story shine, authentically, professionally, and confidently.
          </p>
        </div>
      </div>
      <div class="col-lg-6 Professional-wrap-col">
        <div class="Professional-ser-text">
          <img class="lazy"   src="assets/images/hire-a-ghost-writers-img.webp" alt="hire a ghost writers" data-aos="flip-right">
          <div class="two_btns">
              <span>
                  <a href="javascript:;" data-fancybox="" src="#popupform" class="showPopup view-pricing-txt various ani-btn" data-aos="zoom-in">Get a quote <i class="fa fa-arrow-right"></i>
                    </a>                  
              </span>
              <span>
                    <a href="javascript:;" onclick="toggleChat()" class="view-pricing-txt various ani-btn" data-aos="zoom-in">Let's Chat <i class="fa fa-arrow-right"></i>
                    </a>                  
              </span>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="other-service">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="other-ser-text text-center">
          <h2 data-aos="zoom-out">Book Writing Services Going Beyond Ordinary</h2>
          <div class="brand-serv-links">
            <a href="book-cover" data-aos="zoom-in">Book Cover Design</a>
            <a href="author-website-design" data-aos="zoom-in">Author Website Design</a>
            <a href="audiobook-narrators" data-aos="zoom-in">Book Audio</a>
            <a href="book-editing-services" data-aos="zoom-in">Books Editing</a>
            <a href="book-trailer" data-aos="zoom-in">Book Trailer</a>
            <a href="fiction-writing-servces" data-aos="zoom-in">Fiction Writing </a>
            <a href="book-marketing-company" data-aos="zoom-in">Marketing Promotions</a>
            <a href="translation" data-aos="zoom-in">Translation</a>            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <section class="hire-ghost all-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="hire-ghost-text">
            <h2 data-aos="flip-up">Turn Your <span>Ideas</span> Into a <span>Top-Of-The-Shelf</span> Book With No Burden
            </h2>
            <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">Got a wonderful story or a brilliant idea but
              struggling to get it on paper? You don’t have to do it alone. At <?php echo $bname ?>, we have seasoned book
              writers who help you not only write but also offer full support to publish, promote, and sell.
            </p>
            <div class="row">
              <div class="col-6 col-xs-6 col-sm-6">
                <ul>
                  <li class="first" data-aos="fade-right">Expert Book Writers</li>
                  <li data-aos="fade-right">Creative Wordsmiths</li>
                  <li data-aos="fade-right">Flawless Execution</li>
                  <li data-aos="fade-right">Targeted Content</li>
                  <li class="last" data-aos="fade-right">Idea Expansion</li>
                </ul>
              </div>
              <div class="col-6 col-xs-6 col-sm-6 m-auto">
                <ul>
                  <li class="first" data-aos="fade-right">Minimal Revisions Needed</li>
                  <li data-aos="fade-right">Fast Turnaround</li>
                  <li data-aos="fade-right">Author Branding</li>
                  <li data-aos="fade-right">End-to-End Publishing</li>
                  <li class="last" data-aos="fade-right">Built-in Marketing Support</li>
                </ul>
              </div>
            </div>
            <div class="btn-row">
              <div class="two_btns">
                <span>
                  <a href="javascript:;" data-fancybox="" src="#popupform"
                    class="showPopup view-pricing-txt various ani-btn" data-aos="zoom-in">Get Started <i
                      class="fa fa-arrow-right"></i>
                  </a>
                </span>
                <span>
                  <a href="javascript:;" onclick="toggleChat()" class="view-pricing-txt various ani-btn"
                    data-aos="zoom-in">Let's Chat <i class="fa fa-arrow-right"></i>
                  </a>
                </span>

              </div>

              <div data-aos="flip-right">
                <a href="<?php echo $no1 ?>" class="call-now-btn">
                  <img src="https://hireabookwriter.com/assets/images/icon-call-default.webp" alt="call image">(656)
                  222-1812</a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6 slice-img-col">
          <div class="hire-img" data-aos="flip-right">
            <img class="lazy" src="https://hireabookwriter.com/assets/images/are-you-looking-img.webp"
              alt="<?php echo $bname ?> Shelf Book Burden">
          </div>
        </div>
      </div>
    </div>
  </section>
  
<section class="section5-home">
  <div class="container">
    <div class="row">
      <div class="col-md-5 m-auto">
        <div class="cta-img">
          <img class="lazy"   src="assets/images/cta-book-2.webp" alt="cta image" data-aos="flip-left">
        </div>
      </div>
      <div class="col-md-7 m-auto">
        <div class="book_written">
            <h2 data-aos="flip-up">From “Wish I Could Write” to “I Have Launched My Book” </h2>
            <p>Wait no more. Seek our book writing services and make your dream a reality. We are only a click away!
            </p>
            <div class="cta-btn">
                <span>
                      <a href="javascript:;" data-fancybox="" src="#popupform" class="showPopup view-pricing-txt various ani-btn">Let's Start <i class="fa fa-arrow-right"></i>
                      </a>                    
                </span>

              <span>
                  <a href="javascript:void" onclick="toggleChat()" class="view-pricing-txt various ani-btn">Let's Chat <i class="fa fa-arrow-right"></i>
                  </a>                  
              </span>
              <a href="<?php echo $no1 ?>" class="call-now-btn">
                <img class="lazy"   src="assets/images/icon-call-default.webp" alt="img"><?php echo $no ?></a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <section class="Why-Choose all-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-lg-6">
          <div class="why-choose-box">
            <ul>
              <li style="
							border-right: 1px solid #f15f2d;
    						border-bottom: 1px solid #f15f2d; margin-right: -4px;" class="wow fadeInDown   animated"
                data-wow-duration="1.3s">
                <div class="first" data-aos="fade-down-right">
                  <img class="lazy" src="https://hireabookwriter.com/assets/images/extensive-research-icon.webp"
                    alt=" research icon">
                  <h3>We Capture Your Voice</h3>
                </div>
                <div class="content">
                  <img class="lazy" src="https://hireabookwriter.com/assets/images/quote-icon-left.webp" class="quote"
                    alt="quote icon">
                  <p>We understand that you are concerned about preserving your unique voice. Don’t worry; we protect
                    your voice and vision.</p>
                </div>
              </li>
              <li style="
							border-left: 1px solid #f15f2d;
    						border-bottom: 1px solid #f15f2d;" class="wow fadeInRight  animated" data-wow-duration="1.3s">
                <div class="first" data-aos="fade-down-left">
                  <img class="lazy" src="https://hireabookwriter.com/assets/images/authentic-ontent.webp"
                    alt="authentic icon">
                  <h3>You Own The Process </h3>
                </div>
                <div class="content">
                  <img class="lazy" src="https://hireabookwriter.com/assets/images/quote-icon-left.webp" class="quote"
                    alt=" quote icon">
                  <p>Everything we do is under your observation. The process is solely in your private capacity. </p>
                </div>
              </li>
              <li style="
							border-right: 1px solid #f15f2d;
    						border-top: 1px solid #f15f2d; margin-right: -4px;" class="wow fadeInLeft   animated"
                data-wow-duration="1.3s">
                <div class="first" data-aos="fade-up-right">
                  <img class="lazy" src="https://hireabookwriter.com/assets/images/proofreading-and-editing-icon.webp"
                    alt="editing icon">
                  <h3>Structure-To-Story Method</h3>
                </div>
                <div class="content">
                  <img class="lazy" src="https://hireabookwriter.com/assets/images/quote-icon-left.webp" class="quote"
                    alt=" quote icon">
                  <p>We turn your ideas into exciting stories with our easy step-by-step plan.</p>
                </div>
              </li>
              <li style="
							border-left: 1px solid #f15f2d;
    						border-top: 1px solid #f15f2d;" class="wow fadeInUp   animated" data-wow-duration="1.3s">
                <div class="first" data-aos="fade-up-left">
                  <img class="lazy" src="https://hireabookwriter.com/assets/images/formatting-designing-icon.webp"
                    alt="designing icon">
                  <h3>One-On-One Sessions</h3>
                </div>
                <div class="content">
                  <img class="lazy" src="https://hireabookwriter.com/assets/images/quote-icon-left.webp" class="quote"
                    alt=" quote icon">
                  <p>We offer personal help from start to finish to improve your writing and share your unique story.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="why-choose-text">
            <h2 data-aos="flip-up">
              <span>Trusted by 8 Out of 10 First-Time </span>Authors - Here Is Why
            </h2>
            <p data-aos="fade-up">As a first-time author, it is not easy to put your heart in someone’s hand. You put
              your story in our hands to bring it to life. It seems difficult. But we make it easy through real
              conversations, deep listening, and a process designed to reflect you. From capturing your voice to
              crafting your message with clarity and emotion, we don’t just write books to shape your legacy. We are
              proud to say that more than 95.55% of people trust us to write their stories.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="polaroid module potfolio-wrap all-section">
    <div class="side-before-1">
        <!--<img class="side-post" src="assets/images/side2.png" alt="">-->
    </div>
    <div class="container">
      <div class="grid-construct polaroid__box">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="potfolio-main-text text-center aos-init aos-animate" data-aos="flip-up">
              <h2>Your Stress Is Now A Past Story - Now Success Attends All Your Ways</h2>
              <p>Our professional book writers take pride in turning your ideas into a remarkable, unparalleled, and
                one-of-a-kind book.
              </p>
            </div>
          </div>
        </div>
        <div class="tabs_home_portfolio">
          <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="pills-fiction-tab" data-toggle="pill" href="#pills-fiction" role="tab"
                aria-controls="pills-fiction" aria-selected="true">Fiction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-growth-tab" data-toggle="pill" href="#pills-growth" role="tab"
                aria-controls="pills-growth" aria-selected="false">Personal Growth</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-non-fiction-tab" data-toggle="pill" href="#pills-non-fiction" role="tab"
                aria-controls="pills-non-fiction" aria-selected="false">Non Fiction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-politics-tab" data-toggle="pill" href="#pills-politics" role="tab"
                aria-controls="pills-politics" aria-selected="false">Politics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-leadership-tab" data-toggle="pill" href="#pills-leadership" role="tab"
                aria-controls="pills-leadership" aria-selected="false">Leadership </a>
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
              <a class="nav-link" id="pills-sports-tab" data-toggle="pill" href="#pills-sports" role="tab"
                aria-controls="pills-sports" aria-selected="false">Sports Recreation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-romantic-tab" data-toggle="pill" href="#pills-romantic" role="tab"
                aria-controls="pills-romantic" aria-selected="false">Romantic Suspense</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade " id="pills-fiction" role="tabpanel" aria-labelledby="pills-fiction-tab">
              <div class="portfolio_wrapper_bwl">
                <div class="row">
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Hidden-Prince-Tessa-Afshar/dp/1496458222/ref=sr_1_1?dib=eyJ2IjoiMSJ9.72sQYUH-4X4NNk2anoex4Q.Uk4GVr_YchGl0WahRnrmzMhgBiy0PSYZLrWqdOO89cI&amp;dib_tag=se&amp;keywords=9781496458216&amp;qid=1721678624&amp;sr=8-1"
                        class="fancybox" rel="ligthbox" target="_blank" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/fiction/01.webp">
                      </a>

                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/fiction/001.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/fiction/001.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Lineage-Grace-Stories-Unlikely-Eternity/dp/0842356320/ref=sr_1_1?dib=eyJ2IjoiMSJ9.CWbAlNUHrGpJYHlXGPV910vM-sTvFjmscZuzqzXO1P0.XO9rVp3SFPY-08dl9oApiWm_pbEo06v64nc8wbKi63Q&amp;dib_tag=se&amp;keywords=9780842356329&amp;qid=1721678592&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/fiction/02.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/fiction/02.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/fiction/02.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Land-Silence-Tessa-Afshar/dp/149640646X/ref=sr_1_1?dib=eyJ2IjoiMSJ9.qlQfNCPRIyN9XZEQrZ2Prg.d0mOHa5J8-S1fvEp8rZAhOyiYWqMbZ8OPV0WRp6HceU&amp;dib_tag=se&amp;keywords=9781496406460&amp;qid=1721678563&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/fiction/03.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/fiction/03.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/fiction/03.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Daughter-Rome-Tessa-Afshar/dp/1496428714/ref=sr_1_1?dib=eyJ2IjoiMSJ9.UEmOoI56-zhvg6n-jqIX5Q.wNdKwRANp2Huv1lO4RqVQ54v05mFLcb2lXRXXfOs4kE&amp;dib_tag=se&amp;keywords=9781496428714&amp;qid=1721678474&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/fiction/04.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/fiction/004.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/fiction/004.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Jewel-Nile-Tessa-Afshar/dp/1496428765/ref=sr_1_1?dib=eyJ2IjoiMSJ9.Gh5QHWjPtuFNe5IW7aNpQg.y5AWdjkJr9X6YiH6t7KnvxLt2m6H4qyncOoLNCSJpDk&amp;dib_tag=se&amp;keywords=9781496428752&amp;qid=1721678537&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/fiction/05.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/fiction/005.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/fiction/005.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Sons-Encouragement-Francine-Rivers/dp/1414348169/ref=sr_1_1?dib=eyJ2IjoiMSJ9.hsShVNN5N_ku1KaQzB_Nww.qIzz-Mg-WZ1vMvMb1dM6jjtMLsMpV_marfvOSCZnLFU&amp;dib_tag=se&amp;keywords=9781414348162&amp;qid=1721678648&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/fiction/06.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/fiction/06.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/fiction/06.webp">
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
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/non-fiction/01.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/001.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/001.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/God-Churchill-Leaders-Destiny-Troubled/dp/1496419839?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/non-fiction/02.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/02.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/02.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Implosion-America-Economic-Spiritual-Challenges-ebook/dp/B007V69E9Y?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/non-fiction/03.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/03.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/03.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Breaking-Cover-Secret-Taught-Fighting/dp/149641960X?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/non-fiction/04.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/004.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/004.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/They-Say-Are-Infidels-Persecuted/dp/149641148X?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/non-fiction/05.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/005.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/005.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Mind-Terror-Explores-Motivates-Extremist/dp/1496411870?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/non-fiction/06.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/06.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/non-fiction/06.webp">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-leadership" role="tabpanel" aria-labelledby="pills-leadership-tab">
              <div class="portfolio_wrapper_bwl">
                <div class="row">
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Mentor-Leader-Secrets-Building-Consistently/dp/1414338066?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/biography/01.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/biography/01.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/biography/01.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/God-Churchill-Leaders-Destiny-Troubled/dp/1496419839?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/biography/02.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/biography/02.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/biography/02.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Unleashing-Power-Rubber-Bands-Non-Linear-ebook/dp/B001DUGOBU?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/biography/03.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/biography/03.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/biography/03.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/High-Performance-Ethics-Principles-Next-Generation-Leadership-ebook/dp/B000WT51G2?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/biography/04.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/biography/04.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/biography/04.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Sticking-Points-Generations-Working-Together/dp/1496447840?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/biography/05.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/biography/05.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/biography/05.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Soul-Team-Modern-Day-Winning-Teamwork/dp/1496413768?ref_=ast_sto_dp"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/biography/06.webp">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/biography/06.webp">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/biography/06.webp">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show active" id="pills-non-fiction" role="tabpanel"
              aria-labelledby="pills-non-fiction-tab">
              <div class="portfolio_wrapper_bwl">
                <div class="row">
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Holiness-God-R-C-Sproul/dp/0842339655/ref=pd_bxgy_thbs_d_sccl_1/141-2669864-2957514?pd_rd_w=nmpBI&amp;content-id=amzn1.sym.c51e3ad7-b551-4b1a-b43c-3cf69addb649&amp;pf_rd_p=c51e3ad7-b551-4b1a-b43c-3cf69addb649&amp;pf_rd_r=E7R4T9PZMZ0TH1EHTYF2&amp;pd_rd_wg=aPkkP&amp;pd_rd_r=ce73afae-7481-412f-9f31-d96d2596c06d&amp;pd_rd_i=0842339655&amp;psc=1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/auto-biography/06.webp"
                          alt="<?php echo $bname ?> Fiction">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/006.webp"
                        alt="<?php echo $bname ?> Fiction">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/006.webp"
                        alt="<?php echo $bname ?> Fiction">
                    </div>
                  </div>

                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Essential-Truths-Christian-Faith-Sproul/dp/0842320016/ref=sr_1_1?dib=eyJ2IjoiMSJ9.66lJgXkjNtmvwsjaPdGfCw.qLo50nrhmIUOWZY81Cq7RY3Xfys17nDuwMY7kbyyH6g&amp;dib_tag=se&amp;keywords=9780842320016&amp;qid=1721680247&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/auto-biography/02.webp"
                          alt="<?php echo $bname ?> Fiction">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/02.webp"
                        alt="<?php echo $bname ?> Fiction">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/02.webp"
                        alt="<?php echo $bname ?> Fiction">
                    </div>
                  </div>

                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Kingdom-Focus-Rethinking-Today-Eternity/dp/1589979524/ref=sr_1_1?dib=eyJ2IjoiMSJ9.QL7aYNQKFESb7vMeXLnIZA.d_1FfxBtgiBweDe-Jw6r94fItl8sVhzWF1ygF2aKyTY&amp;dib_tag=se&amp;keywords=9781589979529&amp;qid=1721680056&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/auto-biography/03.webp"
                          alt="<?php echo $bname ?> Fiction">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/003.webp"
                        alt="<?php echo $bname ?> Fiction">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/003.webp"
                        alt="<?php echo $bname ?> Fiction">
                    </div>
                  </div>

                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Starved-Spiritual-Anxious-Overwhelmed-Fulfilled/dp/1496460294/ref=sr_1_1?dib=eyJ2IjoiMSJ9.SVX3w1BU93MJeQF1X7FJaA.ulQrnqLZt4TnsKFROv-sPZXylTmCVrx8FaAiNBtWTOw&amp;dib_tag=se&amp;keywords=9781496460295&amp;qid=1721680134&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/auto-biography/04.webp"
                          alt="<?php echo $bname ?> Fiction">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/004.webp"
                        alt="<?php echo $bname ?> Fiction">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/004.webp"
                        alt="<?php echo $bname ?> Fiction">
                    </div>
                  </div>

                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Heaven-Randy-Alcorn/dp/0842379428/ref=sr_1_1?dib=eyJ2IjoiMSJ9.dXcEiWFPgdAWqv4S4a29-RhTxoEuAdJ0NPXimtJXsMA.29g4QMgpn5EfTLN5S5-H5YYMLOJ46MhNQAzTnJZf1Yw&amp;dib_tag=se&amp;keywords=9780842379427&amp;qid=1721680199&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/auto-biography/05.webp"
                          alt="<?php echo $bname ?> Fiction">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/005.webp"
                        alt="<?php echo $bname ?> Fiction">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/005.webp"
                        alt="<?php echo $bname ?> Fiction">
                    </div>
                  </div>

                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Believing-Seeing-Physicist-Shattered-Necessity/dp/1496455584/ref=sr_1_1?dib=eyJ2IjoiMSJ9.0Etr-Afr6s1YB92U84RFaQ.mIJIwnNfyDBn93GGPPFDORyCNEHHyb-wPSTkZVfipFo&amp;dib_tag=se&amp;keywords=9781496455581&amp;qid=1721679576&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="https://hireabookwriter.com/assets/images/books/auto-biography/01.webp"
                          alt="<?php echo $bname ?> Fiction">
                      </a>
                      <img class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/001.webp"
                        alt="<?php echo $bname ?> Fiction">
                      <img class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/auto-biography/001.webp"
                        alt="<?php echo $bname ?> Fiction">
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
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/children/01.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/children/01.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/children/01.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Bible-Stories-about-Jesus-Elementary/dp/1628629746/ref=sr_1_1?dib=eyJ2IjoiMSJ9.ayRyPXgqgbCam1wn6jiCWQ.pdx_cXO3roNZ3LdRK54KrS4ftTNqPlekHUT1eJ3BDpw&amp;dib_tag=se&amp;keywords=9781628629743&amp;qid=1721680604&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/children/02.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/children/02.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/children/02.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Year-Devotions-Preschoolers-Little-Blessings/dp/0842389407/ref=sr_1_1?dib=eyJ2IjoiMSJ9.ICoVl1WooCkL90wxcGxH8w.IUN3Ez6ef96MhFSYPeLa0WsqMtcDNLOytYD7h9PKuKs&amp;dib_tag=se&amp;keywords=9780842389402&amp;qid=1721680745&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/children/03.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/children/03.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/children/03.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Hands-Bible-365-Devotions-Kids/dp/149641053X/ref=sr_1_1?dib=eyJ2IjoiMSJ9.Kna74XeaMWRZegNG-yCPmA.I6-mwW2FTdeTsamceC_fPdEul_gY2R58J72ofDJh8L8&amp;dib_tag=se&amp;keywords=9781496410535&amp;qid=1721680783&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/children/04.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/children/04.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/children/04.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Faith-Science-Dr-Fizzlebop-Fizztastically/dp/1496458168/ref=sr_1_1?dib=eyJ2IjoiMSJ9.9R6xu7yPGbr83Jzkz_cN_Q.3jr-Von6_FifwgSbkqoaZiVYIFTPi-HlESbJndyvWOs&amp;dib_tag=se&amp;keywords=9781496458162&amp;qid=1721680809&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/children/05.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/children/05.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/children/05.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Quirky-Critter-Devotions-Wild-Wonders/dp/1496477006/ref=sr_1_1?dib=eyJ2IjoiMSJ9.4U9hIhro2Fi-PFZGfRT2RA.-kom7W6jUiM1dc84XaGODMBnIAnv2GHzDz5RliVCTmM&amp;dib_tag=se&amp;keywords=9781496477002&amp;qid=1721681340&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/children/06.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/children/06.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/children/06.webp">
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
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/personal/01.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/personal/01.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/personal/01.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Well-Watered-Woman-Rooted-Growing-Flourishing/dp/1496445457/ref=sr_1_1?dib=eyJ2IjoiMSJ9.0EKKVjXGFYbE99oCLEPD0ePK7qnH-QZcTSlQXAWOvuI.RGvpAlyynK-qsnWAFXBnJClNHLfli9unae-VHG7Wtpc&amp;dib_tag=se&amp;keywords=9781496445452&amp;qid=1721763895&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/personal/02.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/personal/02.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/personal/02.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Conquer-Your-Negative-Thoughts-Emotional/dp/1496457641/ref=sr_1_1?dib=eyJ2IjoiMSJ9.QjjF6ww1Y9DNxo1B8wLoVQ.AflZRRQyNc-HwjNgGaPEzyhzLvrMWKxqbYPtk9ihC2c&amp;dib_tag=se&amp;keywords=9781496457646&amp;qid=1721763942&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/personal/03.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/personal/03.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/personal/03.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Pawverbs-Dog-Lovers-Heart-Faithfulness/dp/1496447271/ref=sr_1_1?dib=eyJ2IjoiMSJ9.nPdld6G1vOnVY_TyKEZSFg3398ajZRLQbHc0Z-"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/personal/04.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/personal/04.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/personal/04.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Establishing-Home-Creating-Beautiful-Friends/dp/1496460413/ref=sr_1_1?dib=eyJ2IjoiMSJ9.7JHMjrqP7KV5ZEIbK2JOLw.Ugarkr2MiuWM_NALadB_J1NXJEj3aA11XSGHANorP_4&amp;dib_tag=se&amp;keywords=9781496460417&amp;qid=1721763993&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/personal/05.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/personal/05.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/personal/05.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Strong-like-Water-Things-Flourishing/dp/1496454715/ref=sr_1_1?dib=eyJ2IjoiMSJ9._eFyyyINBB5ZJysk7lC2Vw.7VSVCXI8Ej2cj1M5EQhNIWM8xN2iJVz9IxCxL8jb-3I&amp;dib_tag=se&amp;keywords=9781496454713&amp;qid=1721764021&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/personal/06.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/personal/06.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/personal/06.webp">
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
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/health/01.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/health/01.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/health/01.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Body-Revelation-Spiritual-Practices-Metabolize/dp/1496462602/ref=sr_1_1?dib=eyJ2IjoiMSJ9.EYaZ-LCYUbKNA33tnIV6HA.x6fedYVKDsaOY8V20KFG2t3l79vtkpxmTpanfwRrruE&amp;dib_tag=se&amp;keywords=9781496462602&amp;qid=1721764159&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/health/02.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/health/02.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/health/02.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Your-Brain-Always-Listening-Happiness/dp/1496438205/ref=sr_1_1?dib=eyJ2IjoiMSJ9.kJJ9Y2XGulH0vA3SBSfqIw.v2-PB3HAWRJeHl7l8VliNeD3WDmSccIQ9jB52X7m8vE&amp;dib_tag=se&amp;keywords=9781496438201&amp;qid=1721764187&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/health/03.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/health/03.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/health/03.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Feel-Better-Fast-Make-Last/dp/1496425669/ref=sr_1_1?dib=eyJ2IjoiMSJ9.15ze3_Vsype8uk9GwYtAnw.S2NJXeWn9lQUXYvJYgbUxcNekV1KKTuOC7OYtDYSnTk&amp;dib_tag=se&amp;keywords=9781496425669&amp;qid=1721764254&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/health/04.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/health/04.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/health/04.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Well-Core-Realistic-Guilt-Free-Approach/dp/1496472624/ref=sr_1_1?dib=eyJ2IjoiMSJ9.aogGhhbj8kWY111qvNlK0A.RfNUSJKqyx9Jzp1tq4AxUfIIq4GIks8OxDwCIuPal3M&amp;dib_tag=se&amp;keywords=9781496472625&amp;qid=1721764324&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/health/05.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/health/05.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/health/05.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Canary-Coal-Mine-Forgotten-Community/dp/1496446488/ref=sr_1_1?dib=eyJ2IjoiMSJ9.3AjZaqVdMJBtvsW46_JMCw.45wyu906juqNhLcTy9DwH7r1c-AfHex0ZJpwlfY--Vw&amp;dib_tag=se&amp;keywords=9781496446497&amp;qid=1721764355&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/health/06.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/health/06.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/health/06.webp">
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
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/sports/01.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/sports/01.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/sports/01.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Quiet-Strength-Principles-Practices-Priorities/dp/1414318022/ref=sr_1_1?dib=eyJ2IjoiMSJ9.sM6oi9WzaFcQfd6SppewlA.VJF_S7qEkP89We5QChUMKXRotVz7I7nNiiV5Pb10yU0&amp;dib_tag=se&amp;keywords=9781414318028&amp;qid=1721764535&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/sports/02.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/sports/02.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/sports/02.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Coming-Back-Stronger-Unleashing-Adversity/dp/1414339445/ref=sr_1_1?dib=eyJ2IjoiMSJ9.DUiyzXOPfJuQFrHeaGP_xg.QXH0w2vxjJPuJGHBLhH2dvn9jF9rM--ouV09FuLbEHg&amp;dib_tag=se&amp;keywords=9781414339443&amp;qid=1721764565&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/sports/03.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/sports/03.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/sports/03.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Impact-Player-Leaving-Lasting-Legacy/dp/1414372736/ref=sr_1_1?dib=eyJ2IjoiMSJ9.niwGzaF0aXvwuYNAoSIhLw.5OJBA-S4hB23BKjK37RqXskc4UMCRcNb42RvKwAIuIA&amp;dib_tag=se&amp;keywords=9781414372730&amp;qid=1721764588&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/sports/04.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/sports/04.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/sports/04.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Unthinkable-audiobook/dp/B002V0FGY2/ref=sr_1_1?dib=eyJ2IjoiMSJ9.obbOKqI3WmrTb4PWBKhDSw.UPTwPfhzhhd7J1RUWb9akhXRFFoiuq_WVN0SS1ymz9A&amp;dib_tag=se&amp;keywords=9781414333144&amp;qid=1721764617&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/sports/05.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/sports/05.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/sports/05.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Wrestling-Devil-Lex-Luger/dp/149647869X/ref=sr_1_1?dib=eyJ2IjoiMSJ9.mB7SI7SWBD8LeBENcfPidg.Tbyov44BhTbKh6x14uW4fu_jF6D7IfotjduCECXzxMc&amp;dib_tag=se&amp;keywords=9781414383798&amp;qid=1721764656&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/sports/06.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/sports/06.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/sports/06.webp">
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
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/romantic/01.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/romantic/01.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/romantic/01.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Audible-Code-of-Courage/dp/B0B4YFDL2N/ref=sr_1_1?dib=eyJ2IjoiMSJ9.Yt3HwWO2J4sgJ6GxlwMC7g.Vc1CmPmT_lJrwJwoXKpZFIKiu7koK7hLJ-ePS1Tm3pU&amp;dib_tag=se&amp;keywords=9781496457561&amp;qid=1721764979&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/romantic/02.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/romantic/02.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/romantic/02.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Audible-Facing-the-Enemy/dp/B0C9SCGPMX/ref=sr_1_1?dib=eyJ2IjoiMSJ9.9vxpglrUy2ulROT9ZJAQSg.FDteDC4Xb-SVXFwjhqREK2ZJXwIPOt6NPbAWBC3OkYw&amp;dib_tag=se&amp;keywords=9781496451941&amp;qid=1721764999&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/romantic/03.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/romantic/03.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/romantic/03.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Airborne/dp/B08HNKL94T/ref=sr_1_1?dib=eyJ2IjoiMSJ9.pIZKFHqXyJOEVTfyTPs7CQ.aLEP7f_zpb6tYpyh219iOlCAIbF5XICRwKZR2nUgig4&amp;dib_tag=se&amp;keywords=9781496427175&amp;qid=1721765020&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/romantic/04.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/romantic/04.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/romantic/04.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Trace-Doubt-DiAnn-Mills/dp/1496451856/ref=sr_1_1?dib=eyJ2IjoiMSJ9.NOpWiV4tXqJI3K1Vqf1svA.TLi4JvJ_kd5k32cZZsITpiu3aU5XMwXmJ7cQgHt6368&amp;dib_tag=se&amp;keywords=9781496451859&amp;qid=1721765043&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/romantic/05.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/romantic/05.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/romantic/05.webp">
                    </div>
                  </div>
                  <div class="col-md-4 port-web-col-4">
                    <div class="port-img port-web-img-st">
                      <a href="https://www.amazon.com/Audible-Breach-of-Honor/dp/B0973JYPD9/ref=sr_1_1?dib=eyJ2IjoiMSJ9.6HUKdSrPPT4Qy8jaziNVXg.Xu7td_H0tTOgkoeUZYIvjc3E5nct3Eo7vf802_pd3h8&amp;dib_tag=se&amp;keywords=9781496443090&amp;qid=1721765091&amp;sr=8-1"
                        target="_blank" class="fancybox" rel="ligthbox" tabindex="0">
                        <img alt="<?php echo $bname ?>" loading="lazy"
                          src="https://hireabookwriter.com/assets/images/books/romantic/06.webp">
                      </a>
                      <img alt="<?php echo $bname ?>" alt="<?php echo $bname ?>" class="port-web-st port-web-th-img1"
                        src="https://hireabookwriter.com/assets/images/books/romantic/06.webp">
                      <img alt="<?php echo $bname ?>" class="port-web-st port-web-th-img2"
                        src="https://hireabookwriter.com/assets/images/books/romantic/06.webp">
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
        <!--<img class="side-post" src="assets/images/side3.png" alt="">-->
    </div>
</section>

<!-- section#9 start -->
  <section class="section9-home">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <h2 data-aos="zoom-in-down">See What Our Previous Clients <span>Say About Us</span>
          </h2>
          <img src="https://hireabookwriter.com/assets/images/testimonial-1.webp" class="client-small client-1 "
            alt="client-img1" data-aos="zoom-in">
          <img src="https://hireabookwriter.com/assets/images/testimonial-2.webp" class="client-small client-2"
            alt="client-img1" data-aos="zoom-in">
          <img src="https://hireabookwriter.com/assets/images/testimonial-3.webp" class="client-small client-3"
            alt="client-img1" data-aos="zoom-in">
          <img src="https://hireabookwriter.com/assets/images/testimonial-4.webp" class="client-small client-4"
            alt="client-img1" data-aos="zoom-in">
          <ul class="clients-slider">
            <li>
              <img src="https://hireabookwriter.com/assets/images/testimonial-1.webp" class="client-big"
                alt="client-img1" data-aos="zoom-in">
              <i class="fas fa-quote-left quote"></i>
              <div class="content">
                <p>My heart, but I have no idea how to shape it. <?php echo $bname ?> walked me through every step, from
                  brainstorming sessions to polished drafts, and truly helped me find my voice on the page. My memoir
                  now connects with readers deeply.</p>
                <span>
                  <a href="javascript:;">Emily Anders</a>
                </span>

              </div>
            </li>
            <li>
              <img src="https://hireabookwriter.com/assets/images/testimonial-2.webp" class="client-big"
                alt="client-img1" data-aos="zoom-in">
              <i class="fas fa-quote-left quote"></i>
              <div class="content">
                <p>As a first-time author, I felt overwhelmed. But they made the process smooth and transparent. Their
                  Structure-to-Story Method refined my ideas into a compelling narrative, and the finished manuscript
                  exceeded my expectations. Professional, timely, and brilliant!</p>
                <span>
                  <a href="javascript:;">Pollak Jones </a>
                </span>
              </div>
            </li>
            <li>
              <img src="https://hireabookwriter.com/assets/images/testimonial-3.webp" class="client-big"
                alt="client-img1" data-aos="zoom-in">
              <i class="fas fa-quote-left quote"></i>
              <div class="content">
                <p>Their Voice-Matching Guarantee is real magic. They captured the humor, tone, and rhythm of my writing
                  so well even my agents said, ‘This sounds exactly like you!’ The result? A novel I’m proud to call
                  mine. Exceptional service and genuine collaboration</p>
                <span>
                  <a href="javascript:;">Mary Ann </a>
                </span>
              </div>
            </li>
          </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
  </section>
<!-- section#9 end -->
  <section class="section5-home Journey-cta">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto section5-home-Journey-cta-col">
          <div class="cta-img">
            <img class="lazy" src="https://hireabookwriter.com/assets/images/CTA-bottom-book.webp"
              alt="banner-book-shelf" data-aos="flip-left">
          </div>
        </div>
        <div class="col-md-6 m-auto section5-home-Journey-cta-col" data-aos="flip-up">
          <h2>Your Book Is In Your Hand!<span> Let Your Story Be Etched In Future Minds</span>
          </h2>
          <p>Now is the right time to get your story written. We are waiting for your message. Wait no more!
          </p>
          <div class="Journey-cta-cta-btn">
            <span>
              <a href="javascript:;" data-fancybox="" src="#popupform"
                class="showPopup view-pricing-txt various ani-btn">Let's Start <i class="fa fa-arrow-right"></i>
              </a>
            </span>

            <span>
              <a href="javascript:void" class="view-pricing-txt various ani-btn">Let's Chat <i
                  class="fa fa-arrow-right"></i>
              </a>
            </span>
            <br>
            <a href="<?php echo $no1 ?>" class="call-now-btn">
              <img class="lazy" src="https://hireabookwriter.com/assets/images/icon-call-default.webp" alt="img">(656)
              222-1812</a>
          </div>

        </div>
      </div>
    </div>
  </section>
<!-- faq -->
  <section class="faq homefaq">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-last order-lg-first">
         
         <h2><span>FAQ’s – </span> Frequently Asked Questions </h2>
         
         <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h3 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       1. How do I get started with your book writing service?
      </button>
    </h3>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Simply contact us through our website. We'll schedule a consultation to understand your goals, genre, and vision for your book.
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       2. Will my book sound like me if I hire a ghostwriter?
      </button>
    </h3>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Yes! We use interviews and writing samples to match your tone, style, and voice as closely and authentically as possible.
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       3. Do I own all the rights to my book after it's written?
      </button>
    </h3>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Absolutely. Once completed, you retain 100% rights and ownership to your manuscript, title, and intellectual property.
        </p>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h3 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
        4. What genres do you specialize in?
      </button>
    </h3>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>We work across genres, including memoirs, fiction, self-help, business, and more, always tailored to your voice and audience.
        </p>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h3 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
        5. How long does the book writing process take?
      </button>
    </h3>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Timelines vary, but most projects take between 3 to 6 months depending on the book’s length, complexity, and your input.
        </p>
      </div>
    </div>
  </div>
</div>
         
        </div>
        <div class="col-lg-6 order-first order-lg-last text-center mb-4 mb-lg-0"> <img src="assets/images/faq-img.webp" alt="faq image" class="img-fluid"> </div>
      </div>
    </div>
  </section>

<!--Faq End-->

 