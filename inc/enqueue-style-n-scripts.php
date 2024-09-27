<?php
function legal_services_enqueue_styles()
{

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('google-roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    wp_enqueue_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');

    // ---------------------About-Us-Page-----------------------
    if(is_page_template( 'about-us.php' )){
        wp_enqueue_style('legal_services-contact-page-style',  get_template_directory_uri() . '/assets/css/about-us.css', array(), filemtime(get_template_directory() . '/assets/css/about-us.css'), 'all');
    }
    // ---------------------Our-Team-Page-----------------------
    if(is_page_template( 'archive-our-team.php') && is_page_template( 'archive-our-team.php' )){
        wp_enqueue_style('legal_services-our-team-page-style',  get_template_directory_uri() . '/assets/css/our-team.css', array(), filemtime(get_template_directory() . '/assets/css/our-team.css'), 'all');
    }
    // ---------------------Gallery-Page-----------------------
    if(is_page_template( 'gallery.php' )){
        wp_enqueue_style('legal_services-gallery-page-style',  get_template_directory_uri() . '/assets/css/gallery.css', array(), filemtime(get_template_directory() . '/assets/css/gallery.css'), 'all');
    }
    // ---------------------Video-Gallery-Page-----------------------
    if(is_page_template( 'video-gallery.php' )){
        wp_enqueue_style('legal_services-video-gallery-page-style',  get_template_directory_uri() . '/assets/css/video-gallery.css', array(), filemtime(get_template_directory() . '/assets/css/video-gallery.css'), 'all');
    }
    // ---------------------Appointment-Page-----------------------
    if(is_page_template( 'appointment.php' )){
        wp_enqueue_style('legal_services-appointment-page-style',  get_template_directory_uri() . '/assets/css/appointment.css', array(), filemtime(get_template_directory() . '/assets/css/appointment.css'), 'all');
    }
    // ---------------------Contact-Page-----------------------
    if(is_page_template( 'contact.php' )){
        wp_enqueue_style('legal_services-contact-page-style',  get_template_directory_uri() . '/assets/css/contact.css', array(), filemtime(get_template_directory() . '/assets/css/contact.css'), 'all');
    }
    // ---------------------Thanks-Page-----------------------
    if(is_page_template( 'thanks.php' )){
        wp_enqueue_style('legal_services-thanks-page-style',  get_template_directory_uri() . '/assets/css/thanks.css', array(), filemtime(get_template_directory() . '/assets/css/thanks.css'), 'all');
    }
    wp_enqueue_style('legal_services-main-style',  get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'), 'all');

    // -----------------------style-enqueue------------------------------
    wp_enqueue_style('legal_services-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'legal_services_enqueue_styles');

// -----------------------javaScripts-enqueue------------------------------

function legal_services_enqueue_scripts()
{
    wp_enqueue_script('legal_services_bootstrapJsScript', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', null, null, true);
    
    // ---------------------Gallery-Page-----------------------
    if(is_page_template( 'gallery.php' )){
    wp_enqueue_script('legal_services_jQueryJsScript', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true);
    }
    if(is_page_template( 'appointment.php' )){
        wp_enqueue_script('legal_services_appointmentPageJsScript', get_template_directory_uri() . '/assets/js/appointment.js', null, null, true);
        wp_enqueue_script('legal_services_appointmentPageCalendarJsScript', 'https://cdn.jsdelivr.net/npm/flatpickr', null, null, true);
        }
    wp_enqueue_script('legal_services_mainJsScript', get_template_directory_uri() . '/assets/js/main.js', null, null, true);
}
add_action('wp_enqueue_scripts', 'legal_services_enqueue_scripts');
