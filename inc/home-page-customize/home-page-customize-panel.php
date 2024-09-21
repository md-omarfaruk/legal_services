<?php
function legal_services_home_page_customize($wp_customize)
{
    $wp_customize->add_panel('home_page_customize', array(
        'title' => __('Home Page Customize', 'legal_services'),
        'description' => __('This panel is created for home page Customize', 'legal_services'),
        'priority' => 80,
    ));
    require_once(get_theme_file_path( '/inc/home-page-customize/home-page-banner-customize.php' ));
    require_once(get_theme_file_path( '/inc/home-page-customize/home-page-main-content-customize.php' ));

}
add_action('customize_register', 'legal_services_home_page_customize');

