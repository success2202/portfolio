<section id="contact" class="contact-section section-m" style="margin: 5px!important">
    <div class="section-wrapper">
        <div class="container">
            <div class="lets-talk d-none d-xl-flex">
                <h2>Let's Talk</h2>
                <div class="mx-auto">
                    <img src="images/footer/arrow.png" alt="arrow">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <form id="contact-form" action="https://creativemela.com/themeforest_html/tawam/tawam_html/send_email.php" method="POST" class="wow fadeInLeft"
                        data-wow-delay=".3s">
                        <div class="user-details row">
                            <div class="input-box col-md-6">
                                <label class="details" for="first-name">First Name</label>
                                <input type="text" id="first-name" class="text" name="first_name" placeholder=""
                                    autocomplete="off" required>
                            </div>
                            <div class="input-box col-md-6">
                                <label class="details" for="last-name">Last Name</label>
                                <input type="text" id="last-name" class="text" name="last_name" placeholder=""
                                    autocomplete="off" required>
                            </div>
                            <div class="input-box col-md-6">
                                <label class="details" for="mail">Email</label>
                                <input type="email" id="mail" class="text" name="email" placeholder=""
                                    autocomplete="off" required>
                            </div>
                            <div class="input-box col-md-6">
                                <label class="details" for="phone">Phone Number</label>
                                <input type="tel" id="phone" class="text" name="phone" placeholder=""
                                    autocomplete="off" required>
                            </div>
                        </div>
                        <div class="subject-details">
                            <p>Select Subject?</p>
                            <div class="category">
                                <label class="checkbox" for="figma">
                                    <input type="checkbox" id="figma" name="subjects[]" value="figma">
                                    <span class="checkbox-mark"></span>
                                    <span class="checkbox-text">Web Development</span>
                                </label>
                                <label class="checkbox" for="web">
                                    <input type="checkbox" id="web" name="subjects[]" value="web design">
                                    <span class="checkbox-mark"></span>
                                    <span class="checkbox-text">Software Development</span>
                                </label>
                                <label class="checkbox" for="branding">
                                    <input type="checkbox" id="branding" name="subjects[]" value="branding">
                                    <span class="checkbox-mark"></span>
                                    <span class="checkbox-text">Installation and Troubleshooting</span>
                                </label>
                                
                            </div>
                        </div>
                        <div class="user-message">
                            <label class="details" for="message">Message</label>
                            <textarea id="message" name="message" cols="1" rows="1"
                                placeholder="Write your message..." autocomplete="off" required></textarea>
                        </div>
                        <button type="submit" class="btn  btn-primary"><i class="bi bi-arrow-up-right"></i>
                            Let's
                            Talk</button>
                    </form>
                    <p id="form-message"></p>
                </div>
                <div class="col-lg-5 col-xl-4 ms-auto mt-5 mt-lg-0">
                    <div class="contact-meta-wrapper wow fadeInRight" data-wow-delay=".4s">
                        <div class="contact-meta-inner">
                            <h6>Contact Us</h6>
                            <div class="location-widget">
                                <div class="meta-icon">
                                    <img src="images/contact/location.svg" alt="location">
                                </div>
                                <div>
                                
                                    <p>12, Raseem Adabayo Str. Odo-isuti Road, </p>
                                    <p>Igando, Lagos. Nigeria.</p>
                                </div>
                            </div>
                            <div class="contact-widget">
                                <div class="meta-icon">
                                    <img src="images/contact/phone.svg" alt="phone">
                                </div>
                                <div>
                                    <span>Contact</span>
                                    <p>Phone: +2348039366207</p>
                                    <p>Mail: michaelozoudeh@gmail.com</p>
                                </div>
                            </div>
                            <div>
                                <ul class="gap-2">
                                    <li>
                                        <a href="http://www.facebook.com/" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/_kachi7" target="_blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="https://www.youtube.com/" target="_blank">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START: FOOTER SECTION -->
        <div class="copy-right-wrapper container text-center">
            <span class="copy-right">
                &copy; 2024
                <a href="" target="_blank">Mikky.</a>
                All rights reserved.
            </span>
        </div>
        <!-- END: FOOTER SECTION -->
    </div>
</section>