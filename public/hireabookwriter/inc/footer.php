<footer>
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-6 m-auto">
                <div class="row mb-4">
                    <div class="col-md-4 m-auto">
                        <img class="lazy" src="assets/images/footer-logo.webp" alt="<?php echo $bname ?> Logo">
                    </div>
                    <div class="col-md-8 m-auto">
                        <p>Welcome to <?php echo $bname ?>. Books that sound like you and feel like you, ghostwritten with heart and published with precision.</p>
                    </div>
                </div>
                <hr>
                <div class="row mb-2 stx footer-links">
                    <div class="col-sm-4 col-md-4 footer-col">
                        <div class="footer-col-div">
                            <h3>We Offer</h3>
                            <ul>
                                <li class="first">
                                    <a href="<?php echo $url ?>ghostwriting-services">GhostWriting</a>
                                </li>
                                <li>
                                    <a href="<?php echo $url ?>fiction-writing-servces">Fiction Writing</a>
                                </li>
                                <!--<li>-->
                                <!--  <a href="book-editing-services">Book Editing</a>-->
                                <!--</li>-->
                                <li>
                                    <a href="<?php echo $url ?>book-publication-company">Book Publishing</a>
                                </li>
                                <li>
                                    <a href="<?php echo $url ?>author-website-design">Author Website Design</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 footer-col">
                        <div class="footer-col-div">
                            <h3>Main Links</h3>
                            <ul>
                                <li class="first">
                                    <a href="<?php echo $url ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo $url ?>about-us">About Us</a>
                                </li>
                                <!-- <li>-->
                                <!--  <a href="blogs">Blogs</a>-->
                                <!--</li>-->
                                <li>
                                    <a href="<?php echo $url ?>blogs">Blog</a>
                                </li>
                                <li class="last">
                                    <a href="<?php echo $url ?>contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Social Links</h3>
                        <ul>

                            <!--<li class="first">-->
                            <!--  <a href="https://www.linkedin.com/Hire-a-book-writer/Hire-a-book-writer/" target="_blank">LinkedIn</a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--  <a href="https://twitter.com" target="_blank">Twitter</a>-->
                            <!--</li>-->
                            <li>
                                <a href="https://www.facebook.com/hireabookwriter/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="Visit <?php echo $bname ?> on Facebook">
                                    Facebook
                                </a>
                            </li>

                            <li class="last">
                                <a href="https://www.instagram.com/hireabookwriter/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="Visit <?php echo $bname ?> on Instagram">
                                    Instagram
                                </a>
                            </li>
                            <!-- <li>-->
                            <!--  <a href="https://www.pinterest.com/" target="blank">Pinterest</a>-->
                            <!--</li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 border-col">
                <div class="form-container footer-form">
                    <h3>Fill Out The Form and Discuss Your Project With Us! </h3>
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
                            <div class="col-md-6 ">
                                <input class="form-control" name="name" placeholder="Enter your name" type="text" required
                                    value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
                                <?php echo !empty($error['name']) ? $error['name'] : ''; ?>
                            </div>
                            <div class="col-md-6 ">
                                <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>">
                                <?php echo !empty($error['email']) ? $error['email'] : ''; ?>
                            </div>
                            <div class="col-lg-12">
                                <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                                    value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
                                <?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-floating">
                                    <select class="form-select" name="ser" required="" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected="" hidden="">Select Service</option>
                                        <option value="Ghostwriting">Ghostwriting</option>
                                        <option value="Story-Writing">Story Writing</option>
                                        <option value="Song-Writing">Song Writing</option>
                                        <option value="MemoirWriting">Memoir Writing</option>
                                        <option value="Non-Fiction-Writing">Non-Fiction Writing</option>
                                        <option value="Rhymes-Writing">Rhymes Writing</option>
                                        <option value="Comic-Book-writing">Comic Book writing</option>
                                        <option value="Biography-Writing">Biography Writing</option>
                                        <option value="Autobiography">Autobiography</option>
                                        <option value="SEO-Content-Writing">SEO Content Writing</option>
                                        <option value="Military-Fiction-writing">Military Fiction writing</option>
                                        <option value="Script-Writing">Script Writing</option>
                                        <option value="Narrative-Writing">Narrative Writing</option>
                                        <option value="Novel-Writing">Novel Writing</option>
                                        <option value="Wiki-Writing">Wiki Writing</option>
                                        <option value="Speech-Writing">Speech Writing</option>
                                        <option value="Movie-Writing">Movie Writing</option>
                                        <option value="Screen-Writing">Screen Writing</option>
                                        <option value="fiction-writing">Fiction writing</option>
                                        <option value="Action-Adventure">Action Adventure</option>
                                        <option value="Fantasy-writing">Fantasy writing</option>
                                        <option value="Sci-Fi-writing">Sci-Fi writing</option>
                                        <option value="Horror-Writing">Horror Writing</option>
                                        <option value="Books-Editing">Books Editing</option>
                                        <option value="Book-Formatting">Book Formatting</option>
                                        <option value="Children's-Book-Editors">Children's Book Editors</option>
                                        <option value="Book-Proofreading">Book Proofreading</option>
                                        <option value="Book-Cover">Book Cover</option>
                                        <option value="Book-Audio">Book Audio</option>
                                        <option value="Book-Trailer">Book Trailer</option>
                                        <option value="Author-Website-Design">Author Website Design</option>
                                        <option value="Children's Book">Children's Book</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" name="quotebudget" aria-label="Floating label select example">
                                        <option selected="" hidden="">Select Budget</option>
                                        <option value="$999-$2000">$999-$2000</option>
                                        <option value="$2000-$3000">$2000-$3000</option>
                                        <option value="$3000-$4000">$3000-$4000</option>
                                        <option value="$4000-$5000">$4000-$5000</option>
                                        <option value="$4000-$5000">$5000-$10000</option>
                                        <option value="$4000-$5000">Other</option>
                                    </select>
                                    <!--<label for="floatingSelect" style="color: #000;">Select Budget</label>-->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="submit" id="" cite="Submit" data-hover="Submit" type="submit" name="cta2" value="submit">Submit <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </button>
                                <!--<a href="javascript:;" class='submit'>Submit<i class="fa-solid fa-arrow-right"></i></a>-->
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-7 m-auto">
                        <ul class="contact-details">
                            <li class="first">
                                <a href="https://www.google.com/maps/place/Hire+A+Book+Writer/@28.541134,-81.3771357,621m/data=!3m2!1e3!4b1!4m6!3m5!1s0x88e77b006b4c814f:0x2e6ee427c9b910c7!8m2!3d28.541134!4d-81.3771357!16s%2Fg%2F11z3z54zh0 " class="hide-link" Target="Blank">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <strong>Mailing Address:</strong> <?php echo $add ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 m-auto">
                        <ul class="contact-details">
                            <li class="first">
                                <a href="<?php echo $no1 ?>">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo $no ?> </a>
                            </li>
                            <!--<li class="last">-->
                            <!--  <a href="tel:+7867723512">-->
                            <!--    <i class="fa fa-phone-square" aria-hidden="true"></i> + 786 772 3512</a>-->
                            <!--</li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 float-right">
                <ul class="contact-details pri">
                    <li class="first">
                        <p>
                            <a href="terms">Terms &amp; Conditions</a> &nbsp; | &nbsp; <a href="privacy">Privacy Policy</a>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-center footer-bottom-text">
                <p>
                    © 2026 <?php echo $bname ?>. All Rights Reserved
                </p>
            </div>
            <div class="col-md-6 text-center footer-bottom-text">
                <a href="#"> <img src="assets/images/pay.webp" alt="<?php echo $bname ?> pay"></a>
            </div>

        </div>
    </div>
</footer>

<!--float form start-->
<div class="floatbutton">
    <div class="btns_wrap">
        <span>
            <a href="javascript:;" onclick="toggleChat();" class="chat_wrap">
        </span>

        <span class="icoo"><i class="fa fa-comment"></i></span>
        <span>Chat With Us</span>
        </a>
        <a href="<?php echo $no1 ?>" class="call_wrap">
            <span class="icoo"><i class="fa fa-phone"></i></span>
            <span> <?php echo $no ?></span>
        </a>
    </div>
    <div class="clickbutton showPopup">
        <div class="crossplus" src="#popupform"> LET'S GET STARTED</div>
    </div>
    <div class="banner-form">
        <h3>Sign Up Now & <br><strong>Let’s Get Started</strong></h3>
        <div class="banform">
            <div class="container">
                <div class="row">
                    <div class="ban-form">
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
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input class="form-control" name="name" placeholder="Enter your name" type="text" required
                                            value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
                                        <?php echo !empty($error['name']) ? $error['name'] : ''; ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>">
                                        <?php echo !empty($error['email']) ? $error['email'] : ''; ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                                            value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
                                        <?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?></textarea>
                                        <?php echo !empty($error['message']) ? $error['message'] : ''; ?>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input placeholder="Connect With Us" id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">

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
<!--float form end-->


<!-- popup start -->

<div class="popup-overlay" id="popupOverlay">
    <div class="popup">
        <button class="close-btn" id="closeBtn">&times;</button>
        <div class="popupform" id="popupform">
            <h2>Activate Coupon Now</h2>
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
                <ul>
                    <li class="first">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input class="form-control" name="name" placeholder="Enter your name" type="text" required
                            value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
                        <?php echo !empty($error['name']) ? $error['name'] : ''; ?>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>">
                        <?php echo !empty($error['email']) ? $error['email'] : ''; ?>
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                            value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
                        <?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane" aria-hidden="true"></i>
                        <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?></textarea>
                        <?php echo !empty($error['message']) ? $error['message'] : ''; ?>
                    </li>
                    <li>
                        <input id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<!-- opup Script -->
<script id="popup-opt">
    document.addEventListener("DOMContentLoaded", function() {

        const popupOverlay = document.getElementById('popupOverlay');
        const closeBtn = document.getElementById('closeBtn');
        const showPopupBtns = document.querySelectorAll('.showPopup');
        const popupBox = document.querySelector('.popup');

        // Delay popup (non-blocking)
        setTimeout(() => {
            if (popupOverlay) popupOverlay.classList.add('active');
        }, 4000);

        // Open popup
        showPopupBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                popupOverlay.classList.add('active');
            });
        });

        // Close button
        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                popupOverlay.classList.remove('active');
            });
        }

        // Outside click close
        if (popupOverlay && popupBox) {
            popupOverlay.addEventListener('click', (e) => {
                if (!popupBox.contains(e.target)) {
                    popupOverlay.classList.remove('active');
                }
            });
        }

    });
</script>

<script src="assets/js/plugin.js" defer></script>
<script src="assets/js/custom.js" defer></script>

<script>
    setTimeout(() => {
        let aosScript = document.createElement("script");
        aosScript.src = "https://unpkg.com/aos@2.3.1/dist/aos.js";
        aosScript.onload = () => {
            AOS.init();
        };
        document.body.appendChild(aosScript);
    }, 2000);
</script>
