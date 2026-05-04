<section class="sec13 contactFormBottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 contactFormContentLeft">
                <div class="contactContentLeft">
                    <div class="abtLeft-light">
                        <h4>
                            Step Into Greatness

                        </h4>
                        <p>The Book You Imagine Is Closer Than You Think - Let our team guide you, schedule your
                            consultation now. </p>
                    </div>
                </div>
                <div class="ctaWrap">
                    <div class="aboutCta">
                        <a href="<?php echo $no1 ?>" class="ctaLinePhone">
                            <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                </path>
                            </svg>
                            <span class="smallTitleLine">We will be happy to assist you</span>
                            <?php echo $no ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 contactFormRight">
                <div class="contactFormFields">
                    <form action="sending.php" method="POST">
                        <div class="formFields">
                            <input type="text" placeholder="Name (required)" name="cn" required="">
                        </div>
                        <div class="formFields">
                            <input type="text" placeholder="Email (required)" name="em" required="">
                        </div>
                        <div class="formFields">
                            <input type="text" placeholder="Phone (required)" name="pn" onkeypress="{handleKeyPress}"
                                onchange="{handleChange}" required="">
                        </div>

                        <div class="formFields">
                            <select class="form-select" name="ser" required="" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected="" hidden="">Select Service</option>
                                <option value="Ghostwriting">Ghostwriting</option>
                                <option value="Book-Publishing">Book Publishing</option>
                                <option value="Line-Editing">Line Editing</option>
                                <option value="Developmental-Editing">Developmental Editing</option>
                                <option value="Global-Publishing">Global Publishing</option>
                                <option value="Book-Marketing">Book Marketing</option>
                                <option value="Author-Website">Author Website</option>
                                <option value="Video-Trailer">Video Trailer </option>
                                <option value="Audio-Book">Audio Book</option>
                                <option value="Children's-Book">Children's Book</option>
                                <option value="Book-Formatting">Book Formatting</option>
                                <option value="Book-Cover-Design">Book Cover Design</option>
                                <option value="Illustrations">Illustrations</option>
                            </select>
                        </div>
                        <div class="formFields">
                            <textarea placeholder="Message" name="msg"></textarea>
                        </div>
                        <div class="form-check-box">
                            <input type="checkbox" id="privacy" name="privacy" value="Bike">
                            <label for="privacy"> By checking this box, you agree to receive text messages from (The
                                Global Publishers) related to (conversational purposes) at the phone number provided
                                above. You may reply STOP to opt-out at any time. Reply HELP for assistance. Messages
                                and data rates may apply. Message frequency will vary.
                            </label><br>
                        </div>

                        <div class="formFields FieldButton">
                            <button type="submit" class="btnPrimary"><span>Submit <svg
                                        class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="arrow-right" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                        </path>
                                    </svg></span></button>
                        </div>


                        <p class="form-bline" style="color:#000;">Learn More On Our <a
                                href="privacy-policy.php">Privacy Policy</a> Page And <a
                                href="terms-condition.php"> Terms and Conditions</a></p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                <div class="footerLeft">
                    <span class="footerTitle">When Words Escape You, We Catch Them All</span>
                    <ul class="footerContactDetails">
                        <li><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></li>
                        <li><a href="<?php echo $no1 ?>"><?php echo $no ?></a></li>
                        <li><a href="<?php echo $no3 ?>"><?php echo $no2 ?></a></li>
                    </ul>
                    <ul class="socialFooter">
                        <li>
                            <a href="https://www.facebook.com/theglobalpublishers1/" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               aria-label="Visit our Facebook page">
                                <span>Facebook</span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="https://www.instagram.com/theglobalpublishers/" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               aria-label="Visit our Instagram profile">
                                <span>Instagram</span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="https://www.pinterest.com/theglobalpublishers9/" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               aria-label="Visit our Pinterest profile">
                                <span>Pinterest</span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="https://www.linkedin.com/company/the-global-publishers" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               aria-label="Visit our LinkedIn page">
                                <span>LinkedIn</span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="https://x.com/GlobalPubz" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               aria-label="Visit our Twitter (X) profile">
                                <span>Twitter</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                <div class="footerRightTop">
                    <div class="footerRightWrap">
                        <ul class="FooterMenu padingRight">
                            <li><a href="author-website-design.php">Author Website Design</a>
                            </li>
                            <li><a href="ebook-writing.php">E-Book Writers</a></li>
                            <li><a href="business-book-writing.php">Business Book</a></li>
                            <li><a href="audiobook-narrators.php">Audiobook</a></li>
                        </ul>
                    </div>
                    <div class="footerRightWrap">
                        <span class="FooterMenuTitle"><a
                                href="ghostwriting-services.php">Ghostwriting</a></span>
                        <ul class="FooterMenu lightMenu">
                            <li><a href="fiction-writing.php">Fiction</a></li>
                            <li><a href="non-fiction-writing.php">Non-Fiction</a></li>
                            <li><a href="biography-writing.php">Biography Writing</a></li>
                            <li><a href="memoir-writing.php">Memoir Writing</a></li>
                        </ul>
                    </div>
                    <div class="footerRightWrap">
                        <span class="FooterMenuTitle"><a href="book-editing-services.php">Book
                                Editing</a></span>
                        <ul class="FooterMenu lightMenu">
                            <li><a href="book-formatting-services.php">Formatting</a></li>
                        </ul>
                        <ul class="FooterMenu lightMenu">
                            <li><a href="book-publishing.php">Book Publishing</a></li>
                            <li><a href="book-marketing.php">Book Marketing</a></li>
                             <li><a href="stories.php">Case Studies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="copyRighgtBottom">
                    <ul>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="terms-condition.php">Terms &amp; Conditions</a></li>
                    </ul>
                    <div class="copyRightContent">
                        <p>
                            <svg class="svg-inline--fa fa-location-pin" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-pin" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-location-pin"></i> Font Awesome fontawesome.com -->
                            <?php echo $add?>
                        </p>
                    </div>

                    <!--<div class="copyRightContent">-->
                    <!--    <p>-->
                    <!--        <svg class="svg-inline--fa fa-location-pin" aria-hidden="true" focusable="false"-->
                    <!--            data-prefix="fas" data-icon="location-pin" role="img" xmlns="http://www.w3.org/2000/svg"-->
                    <!--            viewBox="0 0 384 512" data-fa-i2svg="">-->
                    <!--            <path fill="currentColor"-->
                    <!--                d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z">-->
                    <!--            </path>-->
                    <!--        </svg><!-- <i class="fa-solid fa-location-pin"></i> Font Awesome fontawesome.com -->
                            <!-- Head office: 10754 129TH ST S RICHMOND HL, NY 11419 -->
                    <!--    </p>-->
                    <!--</div>-->

                </div>
            </div>
        </div>
        <div class="row border-top">
            <div class="col-12">
                <div class="copyRightContent-bottom">
                    <p>© 2026 Global Book Publishers All rights reserved.</p>
                </div>
            </div>


        </div>
    </div>
</footer>
<div class="StickyCta scrolled">
    <div class="StickeyCtaInner">
        <ul>
            <li>
                <span>
                <a href="javascript:;" class="openPopup"><img
                        src="assets/images/ctaFormfixed.webp" alt="Sticky Cta"></a>                    
                </span>
            </li>
            <li><a href="<?php echo $no1 ?>"><img src="assets/images/ctaCallfixed.webp"
                        alt="Sticky Cta"></a></li>
            <!--<li><a href="javascript:;"><img src="assets/images/ctaChatfixed.webp" alt="Sticky Cta"/></a>-->
            <!--</li>-->
        </ul>
    </div>
</div>
<div class="popupMain">
    <div class="popuInner">
        <div class="pop-div">
            <div class="popup-img-col">
                <img src="assets/images/global-popup-img.webp" alt="global popup image">
            </div>
            <div class="popupBox">
                <div class="popupClose">
                    <img src="assets/images/popupClose.svg" alt="Popup Close">
                </div>
                <div class="popuptitle">
                    <span class="popTitMain">50% Discount!</span>
                    <span class="popTitMainup">Your Bestselling book is just a click away</span>
                    <p>Schedule a call and talk to our book writing experts</p>
                </div>

                <div class="popupForm BannerFields">
                    <form action="sending.php" method="POST">
                        <div class="formFields">
                            <img src="assets/images/nameicon.svg" alt="Icon">
                            <input type="text" placeholder="Enter Your Name" name="cn" required="">
                        </div>
                        <div class="formFields">
                            <img src="assets/images/emailicon.svg" alt="Icon">
                            <input type="email" placeholder="Enter Your Email" name="em" required="">
                        </div>
                        <div class="formFields">
                            <img src="assets/images/phoneicon.svg" alt="Icon">
                            <input type="text" placeholder="Your Phone Number" name="pn" required="">
                        </div>
                        <div class="formFields">

                            <select class="form-select" name="ser" required="" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected="" hidden="">Select Service</option>
                                <option value="Ghostwriting">Ghostwriting</option>
                                <option value="Book-Publishing">Book Publishing</option>
                                <option value="Line-Editing">Line Editing</option>
                                <option value="Developmental-Editing">Developmental Editing</option>
                                <option value="Global-Publishing">Global Publishing</option>
                                <option value="Book-Marketing">Book Marketing</option>
                                <option value="Author-Website">Author Website</option>
                                <option value="Video-Trailer">Video Trailer </option>
                                <option value="Audio-Book">Audio Book</option>
                                <option value="Children's-Book">Children's Book</option>
                                <option value="Book-Formatting">Book Formatting</option>
                                <option value="Book-Cover-Design">Book Cover Design</option>
                                <option value="Illustrations">Illustrations</option>
                            </select>

                        </div>
                        <div class="formFields form-mgs">
                            <textarea placeholder="Message" name="msg"></textarea>
                        </div>
                        <div class="form-check-box popup-add-new">
                            <input type="checkbox" id="privacy" name="privacy" value="Bike">
                            <label for="privacy"> By checking this box, you agree to receive text messages from (The
                                Global Publishers) related to (conversational purposes) at the phone number provided
                                above. You may reply STOP to opt-out at any time. Reply HELP for assistance. Messages
                                and data rates may apply. Message frequency will vary.
                            </label><br>
                        </div>
                        <div class="formFields FieldButton">
                            <button type="submit" class="btnPrimary"><span>Submit <svg
                                        class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="arrow-right" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/js/plugin.js"></script>
<!--<script d-src="assets/js/jquery.fancybox.min.js"></script>-->

<script d-src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
    src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script d-src="assets/js/custom.js" src="assets/js/custom.js"></script>
<script d-src="https://cdn.lordicon.com/lordicon.js" src="https://cdn.lordicon.com/lordicon.js"></script>



<script>
    // Wait until Zendesk widget loads
    function openZendeskWidget() {
        if (window.zE) {
            try {
                window.zE('webWidget', 'open');
            } catch (e) {
                console.log('Zendesk not ready');
            }
        } else {
            setTimeout(openZendeskWidget, 1000);
        }
    }

    // Auto open when page loads (only once per session)
    window.addEventListener('load', function() {
        if (!sessionStorage.getItem('zendeskOpened')) {
            setTimeout(() => {
                openZendeskWidget();
                sessionStorage.setItem('zendeskOpened', 'true');
            }, 2000); // delay 2 seconds after page load
        }
    });

    // OPTIONAL: Re-open if new message arrives (Zendesk supports "chat:unreadMessages" event)
    // This works only if chat session is active
    function attachZendeskEvents() {
        if (window.zE) {
            try {
                window.zE('webWidget:on', 'chat:unreadMessages', function(count) {
                    if (count > 0) {
                        window.zE('webWidget', 'open');
                    }
                });
            } catch (e) {}
        } else {
            setTimeout(attachZendeskEvents, 1000);
        }
    }
    attachZendeskEvents();
</script>

<script>
    $(".prevArrow").on("click", function() {
        $(".testLeftImage .swiper-button-prev").click();
    });
    $(".nextArrow").on("click", function() {
        $(".testLeftImage .swiper-button-next").click();
    });
</script>

<!-- aos animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- Footer -->



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectElements = document.querySelectorAll('select[name="ser"]');

        selectElements.forEach(function(element) {
            new Choices(element, {
                searchEnabled: false,
                itemSelectText: '',
                shouldSort: false,
                maxItemCount: 2
            });
        });
    });
</script>


</body>

</html>