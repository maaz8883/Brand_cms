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



                                        <div class="formFields">
                                            <img src="assets/images/nameicon.svg" alt="Icon">
                                            <input class="form-control" name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
                                        </div>
                                        <div class="formFields">
                                            <img src="assets/images/emailicon.svg" alt="Icon">
                                            <input class="form-control" name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
                                        </div>
                                        <div class="formFields">
                                            <img src="assets/images/phoneicon.svg" alt="Icon">
                                           <input class="form-control" name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
                                        </div>
                                        <div class="formFields">

                                            <select class="form-select" name="ser" required="" id="floatingSelect" aria-label="Floating label select example">
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
                                            <textarea class="form-control" name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>
                                        </div>
                                          <div class="form-check-box popup-add-new">
                                            <input type="checkbox" id="privacy" name="privacy" value="Bike">
                                            <label for="privacy"> By checking this box, you agree to receive text messages from (<?php echo $bname ?>) related to (conversational purposes) at the phone number provided above. You may reply STOP to opt-out at any time. Reply HELP for assistance. Messages and data rates may apply. Message frequency will vary.
                                            </label><br>
                                        </div>
                                        <div class="formFields FieldButton">
                                            <button type="submit" class="btnPrimary" id="" cite="Submit" data-hover="Submit" type="submit" name="cta2" value="submit"><span>Submit <svg
                                                        class="svg-inline--fa fa-arrow-right" aria-hidden="true"
                                                        focusable="false" data-prefix="fas"
                                                        data-icon="arrow-right" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                            </button>
                                        </div>

                                    </form>