<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Loans
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="theme-light">
    <head>
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png">
		
		<?php wp_head(); ?>
    </head>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'loa' ); ?></a>
        <!-- Start Navbar Area -->
        <div class="navbar-area currency-transfer-provider-navbar">
            <div class="luvion-responsive-nav">
                <div class="container">
                    <div class="luvion-responsive-menu">
                        <div class="logo">
                            <a href="/">
								<?php the_custom_logo(); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="luvion-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
							<?php the_custom_logo(); ?>
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav">%3$s</ul>',
									)
								);
							?>
                            <div class="others-options d-flex align-items-center">
                                <div class="options-item">
                                    <a href="#" class="login-btn">RUS</a>
                                    <a href="#" class="login-btn">ENG</a>
                                    <a href="#" class="login-btn">LAT</a>
                                </div>
                                <div class="options-item">
                                    <a href="#" class="btn btn-primary">Оставить заявку</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="options-item">
                                    <div class="dropdown language-option">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="globe-icon">
                                                <i class="fa-solid fa-globe"></i>
                                            </div>

                                            <span class="lang-name"></span>

                                            <div class="chevron-down-icon">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </button>
                                        <div class="dropdown-menu language-dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/currency-transfer-provider/uk.png" alt="flag">
                                                EN
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/currency-transfer-provider/china.png" alt="flag">
                                                简体中文
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/currency-transfer-provider/uae.png" alt="flag">
                                                العربيّة
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="options-item">
                                    <a href="login.html" class="login-btn">Log in</a>
                                </div>
                                <div class="options-item">
                                    <a href="sign-up.html" class="btn btn-primary">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->