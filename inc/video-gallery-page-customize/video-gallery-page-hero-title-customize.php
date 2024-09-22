<?php
    //Section
    $wp_customize->add_section('video_gallery_page_hero_title_customize', array(
        'title' => __('Video Gallery Page Hero Title Customize', 'legal_services'),
        'panel' => 'video_gallery_page_customize',
        'priority' => 10,
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
                'section' => 'video_gallery_page_hero_title_customize',
                'settings' => 'video_gallery_page_hero_title',
            )
        )
    );
?>
