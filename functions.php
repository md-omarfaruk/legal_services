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
    // -------------------Our-Team-Custom-Post-Type----------
require_once(get_theme_file_path('/inc/custom-post-types/our-team-custom-post-type.php'));
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
require_once(get_theme_file_path('/inc/gallery-page-customize/gallery-page-customize-panel.php'));

// -------------------Video-Gallery-Page-Customize----------
require_once(get_theme_file_path('/inc/video-gallery-page-customize/video-gallery-page-customize-panel.php'));

// -------------------Our-Team-Page-Customize----------
require_once(get_theme_file_path('/inc/our-team-customize/our-team-page-customize-panel.php'));

// -------------------Appointment-Page-Customize----------
require_once(get_theme_file_path('/inc/appointment-page-customize/appointment-page-customize-panel.php'));

// -------------------Thanks-Page-Customize----------
require_once(get_theme_file_path('/inc/thanks-page-customize/thanks-page-hero-section-customize.php'));

// -------------------404-Page-Customize--------------------
require_once(get_theme_file_path('/inc/404-page-customize.php'));

// --------------------------gettingFrontendFormData---------------------------------

function create_form_submission_cpt() {
    $labels = array(
        'name'                  => _x('Form Submissions', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Form Submission', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Form Submissions', 'textdomain'),
        'all_items'             => __('All Submissions', 'textdomain'),
        'add_new_item'          => __('Add New Submission', 'textdomain'),
    );
    
    $args = array(
        'label'                 => __('Form Submission', 'textdomain'),
        'labels'                => $labels,
        'public'                => false,  // We don't want this post type to be publicly accessible
        'show_ui'               => true,   // Show it in the admin dashboard
        'show_in_menu'          => true,   // Show in admin menu
        'menu_icon'             => 'dashicons-feedback',  // Choose a relevant icon
        'supports'              => array('title', 'editor', 'custom-fields'),
        'capability_type'       => 'post',
        'has_archive'           => false,
        'rewrite'               => false,
        'query_var'             => true,
    );
    
    register_post_type('form_submission', $args);
}
add_action('init', 'create_form_submission_cpt');

// Hook for logged-in users
add_action('admin_post_submit_form_data', 'handle_form_submission');
// Hook for non-logged-in users
add_action('admin_post_nopriv_submit_form_data', 'handle_form_submission');

function handle_form_submission() {
    // Check if the form data is set
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        // Sanitize form input
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        // Create a new post in the 'form_submission' custom post type
        $post_id = wp_insert_post(array(
            'post_title'   => $name,        // Name as post title
            'post_content' => $message,     // Message as post content
            'post_type'    => 'form_submission',
            'post_status'  => 'publish',    // You can set it to 'draft' if you want to review
        ));

        // Add custom field for email
        if ($post_id) {
            add_post_meta($post_id, 'email', $email);
        }

        // Redirect after successful submission
        wp_redirect(home_url('/thank-you/'));  // Replace with your thank you page
        exit;
    } else {
        // If form data is missing, redirect to an error page or display an error
        wp_redirect(home_url('/error/'));
        exit;
    }
}



