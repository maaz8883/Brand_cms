

<section class="sec1 innerBanner contactUsBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bannertextLeft">
                <div class="bannerTextInner">
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="sec13 contactFormBottom">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6 contactFormContentLeft">-->
<!--                <div class="contactContentLeft">-->
<!--                    <div class="abtLeft-light">-->
<!--                        <h4>-->
<!--                            Let’s Talk About Your Book-->
<!--                        </h4>-->
<!--                        <p>-->
<!--                            Tell us what you’ve written, we’ll show you where it can go. Connect with <?php echo $bname ?> and request your free consultation today.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="conRightDetails">-->
<!--                    <span class="contitle"><svg class="svg-inline--fa fa-location-pin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-pin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">-->
<!--                            <path fill="currentColor" d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z">-->
<!--                            </path>-->
<!--                        </svg>-->
<!--                        Location</span>-->
<!--                    <ul>-->
<!--                        <li><?php echo $add?>-->
<!--                        </li>-->
                   
<!--                    </ul>-->
<!--                </div>-->


<!--                <div class="conRightDetails">-->
<!--                    <span class="contitle"><svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">-->
<!--                            <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">-->
<!--                            </path>-->
<!--                        </svg> Contact-->
<!--                        info</span>-->
<!--                    <ul>-->
<!--                        <li>Phone: <?php echo $no ?></li>-->
<!--                        <li>Phone: <?php echo $no2 ?></li>-->
<!--                        <li><a href="mailto:<?php echo $email ?>">Email : <?php echo $email ?></a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->

<!--                <div class="conRightDetails">-->
<!--                    <span class="contitle"><svg class="svg-inline--fa fa-clock" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">-->
<!--                            <path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256s-114.6 256-256 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z">-->
<!--                            </path>-->
<!--                        </svg> Working-->
<!--                        Hours</span>-->
<!--                    <ul>-->
<!--                        <li>Monday - Friday: 9:00 AM. to 6:00 PM. (EST Time)</li>-->
<!--                        <li>Sunday: Closed</li>-->
<!--                    </ul>-->
<!--                </div>-->

<!--            </div>-->
<!--            <div class="col-md-6 contactFormRight">-->
<!--                <div class="contactFormFields">-->
<!--                       <form action="<?php echo $current_url ?>" method="post">-->
<!--                        <input type="hidden" name="domain" value="<?php echo $domainname?>">-->
<!--               <input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo "Unable to get location information.";}?>">-->
<!--               <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo "Unable to get location information.";}?>">-->
<!--               <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo "Unable to get location information.";}?>">-->
<!--               <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo "Unable to get location information.";}?>">-->
<!--               <input type="hidden" name="url" value='<?php echo $current_url;?>'>-->
<!--               <input type="hidden" name="domain" value="<?php echo $domainname?>">-->
<!--               <input type="hidden" name="subject" value="Popup Form (<?php echo $url?>)">-->
<!--               <input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">-->
<!--               <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">-->
<!--               <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">-->
<!--               <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">-->
<!--               <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">-->
<!--               <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">-->


<!--                        <div class="formFields">-->
<!--                        <input class="form-control" name="name" placeholder="Enter your name" type="text" required -->
<!--                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">-->
<!--               <?php echo !empty($error['name']) ? $error['name']:'';?>                        -->
<!--            </div>-->
<!--                        <div class="formFields">-->
<!--                            <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">-->
<!--               <?php echo !empty($error['email']) ? $error['email']:'';?>-->
<!--                        </div>-->
<!--                        <div class="formFields">-->
<!--                            <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"-->
<!--                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >-->
<!--				<?php echo !empty($error['phone']) ? $error['phone']:'';?>-->
<!--                        </div>-->

<!--                        <div class="formFields">-->
<!--                            <select class="form-select" name="ser" required="" id="floatingSelect" aria-label="Floating label select example">-->
<!--                                <option selected="" hidden="">Select Service</option>-->
<!--                                <option value="Ghostwriting">Ghostwriting</option>-->
<!--                                <option value="Ebook-Writing">Ebook Writing</option>-->
<!--                                <option value="Memoir-Writing">Memoir Writing</option>-->
<!--                                <option value="Biography-Writing">Biography Writing</option>-->
<!--                                <option value="Business-Book-Writing">Business Book Writing</option>-->
<!--                                <option value="Non-Fiction-Writing">Non Fiction Writing</option>-->
<!--                                <option value="Fiction-Writing">Fiction Writing</option>-->
<!--                                <option value="Action-Writing">Action Writing</option>-->
<!--                                <option value="Fantasy-Writing">Fantasy-Writing</option>-->
<!--                                <option value="Science-Fiction-Writing">Science Fiction Writing</option>-->
<!--                                <option value="Horror-Bbook-Writing">Horror Bbook Writing</option>-->
<!--                                <option value="Drama-Writing">Drama Writing</option>-->
<!--                                <option value="Suspense-Thriller-Writing">Suspense-Thriller-Writing</option>-->
<!--                                <option value="Romance-Writing">Romance Writing</option>-->
<!--                                <option value="Mystery-Writing">Mystery Writing</option>-->
<!--                                <option value="Book-Editing-Services">Book-Editing-Services</option>-->
<!--                                <option value="Book-Formatting-Services">Book-Formatting-Services</option>-->
<!--                                <option value="Audiobook-Narrators">Audiobook Narrators</option>-->
<!--                                <option value="Author-Website-Design">Author Website Design</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class="formFields">-->
<!--                            <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>-->
<!--                <?php echo !empty($error['message']) ? $error['message']:'';?>-->
<!--                        </div>-->
<!--                        <div class="form-check-box">-->
<!--                            <input type="checkbox" id="privacy" name="privacy" value="Bike">-->
<!--                            <label for="privacy"> By checking this box, you agree to receive text messages from (<?php echo $bname ?>) related to (conversational purposes) at the phone number provided above. You may reply STOP to opt-out at any time. Reply HELP for assistance. Messages and data rates may apply. Message frequency will vary.-->
<!--                            </label><br>-->
<!--                        </div>-->
<!--                        <div class="formFields FieldButton">-->
<!--                            <button type="submit" class="btnPrimary" id="" cite="Submit" data-hover="Submit" type="submit" name="cta2" value="submit"><span>Submit <svg-->
<!--                                        class="svg-inline--fa fa-arrow-right" aria-hidden="true"-->
<!--                                        focusable="false" data-prefix="fas" data-icon="arrow-right" role="img"-->
<!--                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"-->
<!--                                        data-fa-i2svg="">-->
<!--                                        <path fill="currentColor"-->
<!--                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">-->
<!--                                        </path>-->
<!--                                    </svg></span></button>-->
<!--                        </div>-->

<!--                        <p class="form-bline" style="color:#000;">Learn More On Our <a href="privacy-policy.php">Privacy Policy</a> Page And <a href="terms-condition.php"> Terms and Conditions</a></p>-->

<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
