<footer>
   <div class="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-4 cols-m-4 col-lg-4 col-12">
               <div class="footer-logo">
                  <img src="https://hamptonpublishers.com/images/footer-logo.png" class="img-fluid" alt="<?php echo $bname ?>">
                  <!-- <h3>Logo</h3> -->
                  <p>With 10+ years of hard work and sweat, we stand proudly in the book market knowing that we have no competitors in terms of providing quality and timely delivery both at the same time. Our clients recognize our work in just one glance. Partner with <?php echo $bname ?> and make your book dreams a reality.</p>
                  <ul>
                     <li> <a href="https://www.facebook.com/hamptonpublishers.official" target="blank"><i class="fa fa-facebook"></i></a> </li>
                     <li> <a href="https://www.instagram.com/hamptonpublishers_official" target="blank"><i class="fa fa-instagram"></i></a> </li>
                     <li> <a href="https://www.linkedin.com/company/hampton-publishers1" target="blank"><i class="fa fa-linkedin"></i></a> </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 cols-m-3 col-lg-3 col-12 offset-lg-1">
               <div class="footer-services">
                  <h3>SERVICES</h3>
                  <ul>
                     <li> <a href="https://hamptonpublishers.com/non-fiction-writing">Non Fiction Writing</a> </li>
                     <li> <a href="https://hamptonpublishers.com/song-writing">Song Writing</a> </li>
                     <li> <a href="https://hamptonpublishers.com/rhymes-writing">Poems Writing</a> </li>
                     <li> <a href="https://hamptonpublishers.com/e-book-writing">E-book Writing</a> </li>
                     <li> <a href="https://hamptonpublishers.com/memoir-writing">Memoir Writing</a> </li>
                     <li> <a href="https://hamptonpublishers.com/book-cover-design">Book Cover Design</a> </li>
                     <li> <a href="https://hamptonpublishers.com/author-website-deisgn">Author website Design</a> </li>
                     <li> <a href="https://hamptonpublishers.com/children-book-printing">Children's Book Priniting</a> </li>
                     <li> <a href="<?php echo $base_url ?>blogs">Blog</a> </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-4 cols-m-4 col-lg-4 col-12">
               <div class="footer-payment">
                  <h3>PAYMENT METHODS:</h3>
                  <img src="https://hamptonpublishers.com/images/payment-method.webp" class="img-fluid"
                     alt="<?php echo $bname ?>">
                  <div class="address-bar">
                     <div class="address-icon"> <i class="fa fa-map-marker"></i> </div>
                     <div class="address-text"> <a href="#!"><?php echo $add ?>
                        </a>
                     </div>
                  </div>
                  <div class="address-bar">
                     <div class="address-icon"> <i class="fa fa-map-marker"></i> </div>
                     <div class="address-text"> <a href="#!"><?php echo $add1 ?>
                        </a>
                     </div>
                  </div>

                  <div class="address-bar">
                     <div class="address-icon"> <i class="fa fa-phone"></i> </div>
                     <div class="address-text">
                        <a href="<?php echo $no1 ?>"><?php echo $no ?>
                        </a>
                     </div>
                  </div>
                  <div class="address-bar">
                     <div class="address-icon"> <i class="fa fa-envelope"></i> </div>
                     <div class="address-text"> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="footer-copyright">
               <h3>All Rights Reserved <script>
                     document.write(new Date().getFullYear())
                  </script> - All Rights Reserved <br> Poweredby <a href="https://inktechgroup.com/" target="Blank">Inktech Group</a></h3>
            </div>
            <div class="footer-terms">
               <ul>
                  <li><a href="https://hamptonpublishers.com/privacy">Privacy Policy</a></li>
                  <li><a href="https://hamptonpublishers.com/terms">Terms & Condition</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- floatbutton Start -->
<section>
   <div class="floatbutton">
      <div class="btns_wrap">
         <a href="javascript:void(toggleChat())" class="chat_wrap" title="Live Chat" target="_self">
            <span class="icoo"><i class="fa fa-comment"></i></span>
            <span>Chat With Us</span>
         </a>
         <a href="<?php echo $no1 ?>" class="call_wrap">
            <span class="icoo"><i class="fa fa-phone"></i></span>
            <span><?php echo $no ?> </span>
         </a>
      </div>
      <div class="clickbutton">
         <div class="crossplus"> LET'S GET STARTED</div>
      </div>
      <div class="banner-form">
         <h3 class="px-3 py-2">Sign Up Now &amp; <br><strong>& GET 60% OFF</strong></h3>
         <div class="banform">
            <div class="container">
               <div class="row">
                  <div class="ban-form">
                     <form action="<?php echo $current_url ?>" method="post" class="addsender">
                        <input type="hidden" name="domain" value="<?php echo $domainname ?>">
                        <input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {
                                                                  echo $ip;
                                                               } else {
                                                                  echo "Unable to get location information.";
                                                               } ?>">
                        <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {
                                                                     echo $ipData['city'];
                                                                  } else {
                                                                     echo "Unable to get location information.";
                                                                  } ?>">
                        <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {
                                                                     echo $ipData['region'];
                                                                  } else {
                                                                     echo "Unable to get location information.";
                                                                  } ?>">
                        <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {
                                                                        echo $ipData['country'];
                                                                     } else {
                                                                        echo "Unable to get location information.";
                                                                     } ?>">
                        <input type="hidden" name="url" value='<?php echo $current_url; ?>'>
                        <input type="hidden" name="domain" value="<?php echo $domainname ?>">
                        <input type="hidden" name="subject" value="Popup Form (<?php echo $url ?>)">
                        <input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
                        <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
                        <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">
                        <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
                        <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
                        <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">




                        <div class="row">
                           <div class="col-lg-12">
                              <div class="fldset">
                                 <input name="name" placeholder="Enter your name" type="text" required
                                    value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
                                 <?php echo !empty($error['name']) ? $error['name'] : ''; ?>

                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="fldset">
                                 <input type="email" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>">
                                 <?php echo !empty($error['email']) ? $error['email'] : ''; ?>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="fldset">
                                 <input type="phone" name="phone" placeholder="Enter your phone number" type="tel"
                                    value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
                                 <?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>

                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="fldset">
                                 <textarea name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?></textarea>
                                 <?php echo !empty($error['message']) ? $error['message'] : ''; ?>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="fldset">
                                 <input class="addsenderbtn" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">
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
<!-- floatbutton End -->


<!--<div class="custom-modal">-->
<!--    <div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"-->
<!--        aria-labelledby="staticBackdropLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-dialog-centered  modal--->
<!--		xl">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-body text-center">-->
<!--                    <div class="custom-modal-inner">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-8 margin-center">-->
<!--                                <div class="popop-new-text">-->
<!--                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>-->
<!--                                    <img src="images/logo2.png" class="img-fluid" alt="<?php echo $bname ?>">-->
<!--                                    <h5 class="py-3">Sign Up Now to Get 60% Off<span>!</span> </h5>-->
<!--                                    <form action="sending" method="POST">-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-md-6 col-sm-6 col-lg-6 col-12">-->
<!--                                                <div class="from-filde-pop">-->
<!--                                                    <input type="text" placeholder="Name" name="cn" required>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-6 col-sm-6 col-lg-6 col-12">-->
<!--                                                <input type="email" placeholder="Email Address" name="em" required>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-12 col-sm-12 col-lg-12 col-12">-->
<!--                                                <input type="phone" placeholder="Phone" required phone="pn" minlength="9"-->
<!--                                                    maxlength="11">-->
<!--                                            </div>-->
<!--                                            <div class="col-md-12 col-sm-12 col-lg-12 col-12">-->
<!--                                                <textarea placeholder="Your Message" name="msg" required></textarea>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-12 col-sm-12 col-lg-12 col-12">-->
<!--                                                <button type="submit">submit </button>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



<!--<div class="custom-modal">-->
<!--    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">-->
<!--		<div class="modal-dialog modal-dialog-centered  modal--->
<!--		xl">-->
<!--			<div class="modal-content">-->
<!--				<div class="modal-body text-center">-->
<!--					<div class="custom-modal-inner">-->
<!--						<div class="row">-->
<!--							<div class="col-md-8  margin-center">-->
<!--								<div class="popop-new-text new-add-image-modal"> -->
<!--                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>-->
<!--								                                    <img src="images/logo2.png" class="img-fluid" alt="<?php echo $bname ?>">-->
<!--									<h3>Halloween Day Special Offer<br><span>70% Off</span></h3>-->
<!--									   <form action="sending" method="POST">-->
<!--									<div class="row">-->
<!--										<div class="col-md-6 col-sm-6 col-lg-6 col-12">-->
<!--											<div class="from-filde-pop">-->
<!--												<input type="text" placeholder="Name" name="cn" required> </div>-->
<!--										</div>-->
<!--										<div class="col-md-6 col-sm-6 col-lg-6 col-12">-->
<!--											<input type="email" placeholder="Email Address" name="em" required> </div>-->
<!--										<div class="col-md-12 col-sm-12 col-lg-12 col-12">-->
<!--											<input type="text" placeholder="Phone" name="pn" required> </div>-->
<!--										<div class="col-md-12 col-sm-12 col-lg-12 col-12">-->
<!--											<textarea placeholder="Your Message" name="msg"></textarea>-->
<!--										</div>-->
<!--										<div class="col-md-12 col-sm-12 col-lg-12 col-12">-->
<!--											<button type="submit">submit </button>-->
<!--										</div>-->
<!--									</div>-->
<!--									</form>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->

<div class="custom-modal">
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered  modal-
		xl">
         <div class="modal-content">
            <div class="modal-body text-center">
               <div class="custom-modal-inner">
                  <div class="row">
                     <div class="col-md-8  margin-center">
                        <div class="popop-new-text new-add-image-modal">
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                           <!--<img src="images/logo2.png" class="img-fluid" alt="<?php echo $bname ?>">-->
                           <h3>Sign Up Now to Get <br><span>60% Off</span></h3>
                           <!--<p class="pop-sub-title" >Write, design, publish — Hampton takes care of it all.</p>-->
                           <p class="pop-sub-title">Thanks for choosing us, Your publishing journey starts now.</p>

                           <form action="<?php echo $current_url ?>" method="post">

                              <input type="hidden" name="domain" value="<?php echo $domainname ?>">
                              <input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {
                                                                        echo $ip;
                                                                     } else {
                                                                        echo "Unable to get location information.";
                                                                     } ?>">
                              <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {
                                                                           echo $ipData['city'];
                                                                        } else {
                                                                           echo "Unable to get location information.";
                                                                        } ?>">
                              <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {
                                                                           echo $ipData['region'];
                                                                        } else {
                                                                           echo "Unable to get location information.";
                                                                        } ?>">
                              <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {
                                                                              echo $ipData['country'];
                                                                           } else {
                                                                              echo "Unable to get location information.";
                                                                           } ?>">
                              <input type="hidden" name="url" value='<?php echo $current_url; ?>'>
                              <input type="hidden" name="domain" value="<?php echo $domainname ?>">
                              <input type="hidden" name="subject" value="Popup Form (<?php echo $url ?>)">
                              <input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
                              <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
                              <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">
                              <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
                              <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
                              <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">




                              <div class="row">
                                 <div class="col-md-6 col-sm-6 col-lg-6 col-12">
                                    <div class="from-filde-pop">
                                       <input name="name" placeholder="Enter your name" type="text" required
                                          value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
                                       <?php echo !empty($error['name']) ? $error['name'] : ''; ?>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-lg-6 col-12">
                                    <input name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>">
                                    <?php echo !empty($error['email']) ? $error['email'] : ''; ?>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                                    <input name="phone" placeholder="Enter your phone number" type="tel"
                                       value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
                                    <?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                                    <textarea name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?></textarea>
                                    <?php echo !empty($error['message']) ? $error['message'] : ''; ?>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                                    <button type="submit" cite="Submit" data-hover="Submit" name="cta1" value="submit">submit </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--<div class="custom-modal">-->
<!-- Modal -->
<!--<div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"-->
<!--   aria-labelledby="staticBackdropLabel" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered  modal--->
<!--      xl">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body text-center">-->
<!--            <div class="popup-custom">-->
<!--               <div class="row">-->
<!--                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>-->
<!--                  <div class="col-lg-6"></div>-->
<!--                  <div class="col-lg-6">-->
<!--                     <h2>Independence Day <br> <span style="color:white; background-color: #0e3193;padding: 0px 30px; border-radius: 13px; ">50% off on</span><br> Publishing Services!</h2>-->
<!--                     <form action="sending" method="POST">-->
<!--                        <div class="form">-->
<!--                           <input type="text" placeholder="Name" bame="cn">-->
<!--                           <br>-->
<!--                           <input type="email" placeholder="Email" name="em">-->
<!--                           <br>-->
<!--                           <input type="text" placeholder="Phone #" name="pn">-->
<!--                           <br>-->
<!--                           <div class="section-contact-main-part2-inner2-form-field-btn ">-->
<!--                              <button type="submit" class="popup-btn">Book Now</button>-->
<!--                           </div>-->
<!--                     </form>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->
<!--<div class="custom-modal">-->
<!-- Modal -->
<!--<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">-->
<!--   <div class="modal-dialog modal-dialog-centered  modal--->
<!--      xl">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-body text-center">-->
<!--            <div class="popup-custom">-->
<!--               <div class="row">-->
<!--                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>-->
<!--                  <div class="col-lg-6"></div>-->
<!--                  <div class="col-lg-6">-->
<!--                     <h2>Independence Day <br> <span style="color:white; background-color: #0e3193;padding: 0px 30px; border-radius: 13px; ">50% off on</span><br> Publishing Services!</h2>-->
<!--                     <form action="sending" method="POST">-->
<!--                        <div class="form">-->
<!--                           <input type="text" placeholder="Name" bame="cn">-->
<!--                           <br>-->
<!--                           <input type="email" placeholder="Email" name="em">-->
<!--                           <br>-->
<!--                           <input type="text" placeholder="Phone #" name="pn">-->
<!--                           <br>-->
<!--                           <div class="section-contact-main-part2-inner2-form-field-btn">-->
<!--                              <button type="submit" class="popup-btn">Book Now</button>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </form>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->
<!-- PRELOADER START -->
<!-- <div class="preloader"></div> -->
<!-- PRELOADER END -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
<script src="https://hamptonpublishers.com/js/jquery-3.3.1.min.js"></script>
<script src="https://hamptonpublishers.com/js/jquery.fancybox.min.js"></script>
<script src="https://hamptonpublishers.com/js/popper-min.js"></script>
<script src="https://hamptonpublishers.com/js/bootstrap.min.js"></script>
<script src="https://hamptonpublishers.com/js/owl.carousel.min.js"></script>
<script src="https://hamptonpublishers.com/js/custom.js"></script>
<script>
   // FLOATING FORM STARTS
   $(".clickbutton").click(function() {
      $('.floatbutton').toggleClass("active");
      //   $('.crossplus').toggleClass("rotate");
   });
   // FLOATING FORM ENDS
</script>

<script>
   $(window).ready(function() {
      setTimeout(function() {
         $('#staticBackdrop').modal("show")
      }, 5000)
   })
</script>
