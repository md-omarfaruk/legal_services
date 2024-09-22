<?php

// Theme setup
function legal_services_setup_theme()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('gallery', 'video'));
    // Register primary menu
    function register_legal_services_menus()
    {
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu', 'legal_services'),
                'header-fixed-menu' => __('Header Fixed Menu', 'legal_services'),
                'footer-important-links' => __('Footer Important Links', 'legal_services')
            )
        );
    };
    add_action('init', 'register_legal_services_menus');
}
add_action('after_setup_theme', 'legal_services_setup_theme');

// Enqueue theme styles and scripts
require_once(get_theme_file_path('/inc/enqueue-style-n-scripts.php'));

// --------------------------------Theme-Customize-Objects-Manager--------------------------------
// ---------------------------------Theme-Top-Header-Customization--------------------------------
require_once(get_theme_file_path('/inc/header-customize.php'));

// ---------------------------Theme-Social-Media-Customization----------------------------
require_once(get_theme_file_path('/inc/social-media.php'));

// ---------------------------------Theme-Footer-Customization--------------------------------
require_once(get_theme_file_path('/inc/footer-customize/footer-customize-panel.php'));

// ----------------------------------Home-Page-Customize--------------------------------
require_once(get_theme_file_path('/inc/home-page-customize/home-page-customize-panel.php'));

// ----------------------------------About-Us-Page-Customize--------------------------------
require_once(get_theme_file_path('/inc/about-us-page-customize/about-us-page-customize-panel.php'));

// -------------------About-Us-Page-Services-Area-Customize----------
require_once(get_theme_file_path('/inc/about-us-page-customize/about-us-page-services-area-customize/about-us-page-services-area-customize-panel.php'));

// -------------------Contact-Page-Customize----------
require_once(get_theme_file_path('/inc/contact-page-customize/contact-page-customize-panel.php'));

// -------------------Gallery-Page-Customize----------
require_once(get_theme_file_path('/inc/gallery-page-customize.php'));

// -------------------Video-Gallery-Page-Customize----------
require_once(get_theme_file_path('/inc/video-gallery-page-customize.php'));