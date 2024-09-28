<?php
function legal_services_gallery_page_customize($wp_customize)
{
    $wp_customize->add_panel('gallery_page_customize', array(
        'title' => __('Gallery Page Customize', 'legal_services'),
        'description' => __('This panel is created for gallery page customize', 'legal_services'),
        'priority' => 80,
    ));
    require_once(get_theme_file_path( '/inc/gallery-page-customize/gallery-page-hero-title-customize.php' ));
    require_once(get_theme_file_path( '/inc/gallery-page-customize/gallery-page-img-gallery-customize.php' ));

}
add_action('customize_register', 'legal_services_gallery_page_customize');

