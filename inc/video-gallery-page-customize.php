<?php
function legal_services_video_gallery_page_customize($wp_customize)
{
    //Section
    $wp_customize->add_section('video_gallery_page_customize', array(
        'title' => __('Video Gallery Page Customize', 'legal_services'),
        'description' => __('Add Video Gallery Page Hero Title.', 'legal_services'),
        'priority' => 90,
    ));
    // -----------------Hero-Title--------------------------------

    //Setting
    $wp_customize->add_setting('video_gallery_page_hero_title',  array(
        'type' => 'theme_mod',
        'default' => 'VIDEO GALLERY',

    ));
    //Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'video_gallery_page_hero_title',
            array(
                'label' => __('Video Gallery Page Hero Title', 'legal_services'),
                'type' => 'text',
                'section' => 'video_gallery_page_customize',
                'settings' => 'video_gallery_page_hero_title',
            )
        )
    );
};
add_action('customize_register', 'legal_services_video_gallery_page_customize');
?>
