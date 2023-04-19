<?php
/*
Template Name: Шаблон Контакты
*/
get_header();
?>
        <!-- Start Page Banner Area -->
        <div class="ctp-page-banner-area" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="ctp-page-banner-content">
                    <h3>Contact Us</h3>
                    <ul class="list">
                        <li>
                            <a href="index-7.html">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <div class="currency-transfer-provider-with-background-color">
            
            <!-- Start Contact Area -->
            <div class="ctp-contact-area ptb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="ctp-contact-form">
                                <h3>Get In Touch With Us</h3>

                                <form id="contactForm">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Sergio Laughlin">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Surname</label>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your surname" placeholder="George">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="luvion@gmail.com">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="+ (321) 984 754">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Write message here"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Send Us Your Enquiry</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="ctp-contact-information">
                                <div class="information-box">
                                    <h3>Our Contact Details</h3>

                                    <ul class="contact-info">
                                        <li class="address">
                                            <span class="sub">Address:</span>
                                            27 Division St, New York, NY 10002, USA
                                        </li>
                                        <li class="email">
                                            <span class="sub">Email:</span>
                                            <div class="info">
                                                <span>Personal</span>
                                                <a href="mailto:luvion@gmail.com">luvion@gmail.com</a>
                                            </div>
                                            <div class="info">
                                                <span>Business</span>
                                                <a href="mailto:hello@gmail.com">hello@gmail.com</a>
                                            </div>
                                        </li>
                                        <li class="phone">
                                            <span class="sub">Phone:</span>
                                            <div class="info">
                                                <span>Personal</span>
                                                <a href="tel:321984754">+ (321) 984 754</a>
                                            </div>
                                            <div class="info">
                                                <span>Business</span>
                                                <a href="tel:32154984">+ (321) 754 984</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="information-box">
                                    <h3>Office Opening Hours</h3>

                                    <ul class="time-info">
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span class="color">Monday - Thursday:</span>
                                            <span>8:00am - 8:00pm</span>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span class="color">Friday:</span>
                                            <span>10:00am - 6:00pm</span>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span class="color">Saturday:</span>
                                            <span>10:00am - 2:00pm</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="information-map">
                                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.183428676291!2d-73.9983046843594!3d40.71397834543098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a263f3910db%3A0xd6e6cdf32a6b11b1!2s27%20Division%20St%2C%20New%20York%2C%20NY%2010002%2C%20USA!5e0!3m2!1sen!2sbd!4v1659370483233!5m2!1sen!2sbd"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Area -->

        </div>
<?php get_footer(); ?>