<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Loans
 */

?>
        <!-- Start Footer Area -->
        <div class="ctp-footer-area pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="ctp-footer-widget">
                            <div class="logo">
								<a href="/"><?php the_custom_logo(); ?></a>
							</div>
							<ul class="social-links">
                                <span>Find us on social media</span>
								<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="ctp-footer-widget">
                            <h3>Company</h3>

                            <ul class="links">
                                <li>
                                    <a href="about-two.html">About us</a>
                                </li>
                                <li>
                                    <a href="how-it-works.html">How it works</a>
                                </li>
                                <li>
                                    <a href="#">Mobile apps</a>
                                </li>
                                <li>
                                    <a href="#">Reviews</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="ctp-footer-widget">
                            <h3>Support</h3>

                            <ul class="links">
                                <li>
                                    <a href="#">Terms and conditions</a>
                                </li>
                                <li>
                                    <a href="#">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="contact-two.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="ctp-footer-widget">
                            <h3>Need help?</h3>
                            
                            <ul class="info">
                                <li>
                                    <span>Location: </span>
                                    27 Division St, New York, NY 10002, USA
                                </li>
                                <li>
                                    <span>Email: </span>
                                    <a href="mailto:luvion@gmail.com">luvion@gmail.com</a>
                                </li>
                                <li>
                                    <span>Email: </span>
                                    <a href="tel:321984754">+ (321) 984 754</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <p>© Luvion is proudly created by <a href="#" target="_blank"> EnvyTheme</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->

        <div class="go-top"><i class="fas fa-arrow-up"></i></div>

        <!-- Dark/Light Toggle -->
		<div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
    </body>
</html>
