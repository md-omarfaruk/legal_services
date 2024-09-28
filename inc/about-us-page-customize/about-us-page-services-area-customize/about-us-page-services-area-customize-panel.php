<?php
function legal_services_about_us_page_services_area_customize($wp_customize)
{
    $wp_customize->add_panel('about_us_page_services_area_customize', array(
        'title' => __('About Us Page Services Area Customize', 'legal_services'),
        'description' => __('This panel is created for about us page services area Customize', 'legal_services'),
        'priority' => 60,
    ));
    require_once(get_theme_file_path( '/inc/about-us-page-customize/about-us-page-services-area-customize/about-us-page-services-section-title-customize.php' ));
    require_once(get_theme_file_path( '/inc/about-us-page-customize/about-us-page-services-area-customize/about-us-page-first-service-customize.php' ));
    require_once(get_theme_file_path( '/inc/about-us-page-customize/about-us-page-services-area-customize/about-us-page-second-service-customize.php' ));
    require_once(get_theme_file_path( '/inc/about-us-page-customize/about-us-page-services-area-customize/about-us-page-third-service-customize.php' ));
}
add_action('customize_register', 'legal_services_about_us_page_services_area_customize');

