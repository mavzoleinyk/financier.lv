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
                                <span>Ищите нас в соцсетях</span>
								<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="ctp-footer-widget">
                            <h3>Компания</h3>

                            <ul class="links">
                                <li>
                                    <a href="/about/">О нас</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="ctp-footer-widget">
                            <h3>Поддержка</h3>

                            <ul class="links">
                                <li>
                                    <a href="#">Правила и положения</a>
                                </li>
                                <li>
                                    <a href="#">Политика конфиденциальности</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="ctp-footer-widget">
                            <h3>Контакты</h3>
                            
                            <ul class="info">
                                <li>
                                    <span>Адрес: </span>
                                    ООО FINANCIER
                                </li>
                                <li>
                                    <span>Email: </span>
                                    <a href="mailto:info@financier.lv">info@financier.lv</a>
                                </li>
                                <li>
                                    <span>Телефон: </span>
                                    <a href="tel:37129939969">+(371) 299 399 69</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <p style="font-size: 12px;color: #555">© Developed by <a style="font-size: 12px;color: #555" href="https://agencjamarketingowa.com/" target="_blank" rel="noopener">iPapus agency</a></p>
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
        <?php wp_footer();?>
    </body>
</html>
