<?php
function legal_services_about_us_page_customize($wp_customize)
{
    $wp_customize->add_panel('about_us_page_customize', array(
        'title' => __('About Us Page Customize', 'legal_services'),
        'description' => __('This panel is created for about us page Customize', 'legal_services'),
        'priority' => 80,
    ));
    require_once(get_theme_file_path( '/inc/about-us-page-customize/about-us-page-hero-section-customize.php' ));
    require_once(get_theme_file_path( '/inc/about-us-page-customize/about-us-page-main-content-customize.php' ));

}
add_action('customize_register', 'legal_services_about_us_page_customize');

