<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <!-- ---------------------Header-Section-Start--------------------------- -->
    <header>
        <div class="header-logo-area py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php echo  get_theme_mod('top_header_logo', get_template_directory_uri() . '/assets/img/moin-choudhury-logo.png'); ?>" class="header-logo"
                                width="224" alt="Legal Services"></a>
                    </div>
                    <div class="col-lg-9 d-flex justify-content-end">
                        <div class="opening-hours me-5">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo get_theme_file_uri('assets/img/icons/clock.png'); ?>" class="header-icon-img" alt="">
                                <h4 class="hours roboto-regular"><?php echo get_theme_mod('opening_hours', '09:00 - 06:00'); ?></h4>
                            </div>
                            <p class="day roboto-regular">Our Opening Days <?php echo get_theme_mod('opening_days', 'Mon. - Fri.'); ?></p>
                        </div>

                        <div class="direct-contact me-5">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo get_theme_file_uri('assets/img/icons/headphone.png'); ?>" class="header-icon-img" alt="">
                                <h4 class="contact-number roboto-regular"><?php echo get_theme_mod('mobile_number', '+8801868787748'); ?></h4>
                            </div>
                            <p class="direct-contact-text roboto-regular">Direct : <?php echo get_theme_mod('direct_mobile_number', '+8801868787748'); ?></p>
                        </div>
                        <div class="header-social-icons">
                            <a href="<?php echo get_theme_mod('facebook', 'https://www.facebook.com/advbashir.ahammed'); ?>"><i class="bi bi-facebook me-3"></i></a>
                            <a href="<?php echo get_theme_mod('twitter', 'https://x.com/?lang=en'); ?>"><i class="bi bi-twitter me-3"></i></a>
                            <a href="<?php echo get_theme_mod('youtube', 'https://www.youtube.com/'); ?>"><i class="bi bi-youtube me-3"></i></a>
                        </div>
                        <div class="header-search-icon ms-4" id="searchBar">
                            <i class="bi bi-search"></i>
                            <h6 class="search roboto-regular mt-2">Search</h6>
                        </div>
                    </div>
                    <div class="text-end my-3" id="searchForm">
                    <?php get_search_form() ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- -----------------Navbar-Start------------------------- -->
        <div class="header-nav" id="header-navbar-one">
            <nav class="navbar navbar-expand-lg py-0 roboto-regular">
                <div class="container-lg">
                    <a class="navbar-brand responsive-logo" href="<?php echo get_option("siteurl"); ?>"><img src="<?php echo get_theme_mod('header_menu_logo_responsive_devices', get_template_directory_uri() . '/assets/img/responsive-logo.png'); ?>"
                            width="110" alt="Legal Services"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="27" fill="white"
                            class="bi bi-list-columns-reverse" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M0 .5A.5.5 0 0 1 .5 0h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 0 .5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10A.5.5 0 0 1 4 .5m-4 2A.5.5 0 0 1 .5 2h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 4h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 6h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 8h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav" id="headerMenu">
                            <?php
                            if (has_nav_menu('header-menu')) {
                                wp_nav_menu(array(
                                    'theme_location'  => 'header-menu', // Register this location in functions.php
                                    'container'       => false,         // No wrapping div container
                                    'items_wrap'      => '%3$s',        // Removes the <ul> since you already have it
                                    'menu_class'      => '',            // No additional classes for <ul>
                                    'add_li_class'    => 'nav-item d-flex', // Adds custom class to <li>
                                    'link_class'      => 'nav-link',       // Adds custom class to <a>
                                    'link_after'      => '<i class="bi bi-star-fill mx-3"></i>', // Add icon after each link
                                ));
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- -----------------Fixed-Navbar-Start------------------------- -->
        <div class="header-fixed-nav" id="header-navbar-two">
            <nav class="navbar navbar-expand-lg p-0 roboto-regular">
                <div class="container">
                    <a class="navbar-brand" id="fixed-nav-logo" href="<?php echo get_option("siteurl"); ?>"><img
                            src="<?php echo get_theme_mod('header_fixed_menu_logo', get_template_directory_uri() . '/assets/img/fixed-nav-logo.png'); ?>" width="54" alt="Legal Services"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php                       
                            if (has_nav_menu('header-fixed-menu')) {
                                wp_nav_menu(array(
                                    'theme_location'  => 'header-fixed-menu', // Register this location in functions.php
                                    'container'       => false,         // No wrapping div container
                                    'items_wrap'      => '%3$s',        // Removes the <ul> since you already have it
                                    'menu_class'      => '',            // No additional classes for <ul>
                                    'add_li_class'    => 'nav-item d-flex', // Adds custom class to <li>
                                    'link_class'      => 'nav-link',       // Adds custom class to <a>
                                    'link_after'      => '<i class="bi bi-star-fill mx-3"></i>', // Add icon after each link
                                ));
                            }
                            ?>
                            </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- -----------------Fixed-Navbar-End------------------------- -->
        <!-- -----------------Navbar-End------------------------- -->
    </header>
    <!-- ---------------------Header-Section-End--------------------------- -->