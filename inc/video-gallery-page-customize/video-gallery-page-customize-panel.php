<?php
function legal_services_video_gallery_page_customize($wp_customize)
{
    $wp_customize->add_panel('video_gallery_page_customize', array(
        'title' => __('Video Gallery Page Customize', 'legal_services'),
        'description' => __('This panel is created for video gallery page customize', 'legal_services'),
        'priority' => 90,
    ));
    require_once(get_theme_file_path( '/inc/video-gallery-page-customize/video-gallery-page-hero-title-customize.php' ));
    require_once(get_theme_file_path( '/inc/video-gallery-page-customize/video-gallery-page-video-gallery-customize.php' ));

}
add_action('customize_register', 'legal_services_video_gallery_page_customize');

