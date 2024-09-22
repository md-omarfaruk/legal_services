<?php
    //Section
    $wp_customize->add_section('gallery_page_hero_title_customize', array(
        'title' => __('Gallery Page Hero Title Customize', 'legal_services'),
        'panel' => 'gallery_page_customize',
        'priority' => 10,
    ));
    // -----------------Hero-Title--------------------------------

    //Setting
    $wp_customize->add_setting('gallery_page_hero_title',  array(
        'type' => 'theme_mod',
        'default' => 'GALLERY',

    ));
    //Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gallery_page_hero_title',
            array(
                'label' => __('Gallery Page Hero Title', 'legal_services'),
                'type' => 'text',
                'section' => 'gallery_page_hero_title_customize',
                'settings' => 'gallery_page_hero_title',
            )
        )
    );
?>
