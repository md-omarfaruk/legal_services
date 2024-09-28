<?php
$wp_customize->add_section('home_page_banner_section', array(
    'title' => __('Home Page Banner Section', 'legal_services'),
    'panel' => 'home_page_customize',
    'priority' => 10,
));

// -----------------Banner-Background-Image--------------------------------
//Setting
$wp_customize->add_setting('banner_background',  array(
    'type' => 'theme_mod',
     'default'   => get_template_directory_uri() . '/assets/img/MOIN-LAW-SLIDER.webp',
));

//Control
//Footer-Logo
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'banner_background',
        array(
            'label' => __('Banner Background', 'legal_services'),
            'section' => 'home_page_banner_section',
            'settings' => 'banner_background',
        )
    )
);
// -----------------Banner-Title--------------------------------

//Setting
$wp_customize->add_setting('banner_title',  array(
    'type' => 'theme_mod',
    'default' => 'Adv Bashir Ahammed',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'banner_title',
        array(
            'label' => __('Banner Title', 'legal_services'),
            'type' => 'text',
            'section' => 'home_page_banner_section',
            'settings' => 'banner_title',
        )
    )
);
// -----------------Banner-Smaller-First-Title-------------------------------

//Setting
$wp_customize->add_setting('banner_smaller_first_title',  array(
    'type' => 'theme_mod',
    'default' => 'COMPREHENSIVE',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'banner_smaller_first_title',
        array(
            'label' => __('Banner Smaller First Title', 'legal_services'),
            'type' => 'text',
            'section' => 'home_page_banner_section',
            'settings' => 'banner_smaller_first_title',
        )
    )
);
// -----------------Banner-Smaller-Second-Title-------------------------------

//Setting
$wp_customize->add_setting('banner_smaller_second_title',  array(
    'type' => 'theme_mod',
    'default' => 'LEGAL SERVICES
',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'banner_smaller_second_title',
        array(
            'label' => __('Banner Smaller Second Title', 'legal_services'),
            'type' => 'text',
            'section' => 'home_page_banner_section',
            'settings' => 'banner_smaller_second_title',
        )
    )
);
// -----------------Banner-Services-------------------------------
// -----------------Banner-First-Services-------------------------------

//Setting
$wp_customize->add_setting('banner_first_service_title',  array(
    'type' => 'theme_mod',
    'default' => 'IMMIGRATION',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'banner_first_service_title',
        array(
            'label' => __('Banner First Service Title', 'legal_services'),
            'type' => 'text',
            'section' => 'home_page_banner_section',
            'settings' => 'banner_first_service_title',
        )
    )
);

// -----------------Banner-Second-Services-------------------------------

//Setting
$wp_customize->add_setting('banner_second_service_title',  array(
    'type' => 'theme_mod',
    'default' => 'MEDICAL MALPRACTICE',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'banner_second_service_title',
        array(
            'label' => __('Banner Second Service Title', 'legal_services'),
            'type' => 'text',
            'section' => 'home_page_banner_section',
            'settings' => 'banner_second_service_title',
        )
    )
);
// -----------------Banner-Third-Services-------------------------------

//Setting
$wp_customize->add_setting('banner_third_service_title',  array(
    'type' => 'theme_mod',
    'default' => 'ACCIDENT CASES',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'banner_third_service_title',
        array(
            'label' => __('Banner Third Service Title', 'legal_services'),
            'type' => 'text',
            'section' => 'home_page_banner_section',
            'settings' => 'banner_third_service_title',
        )
    )
);
// -----------------Banner-Button-------------------------------
// -----------------Banner-Button-Text------------------------------

//Setting
$wp_customize->add_setting('banner_btn_text',  array(
    'type' => 'theme_mod',
    'default' => 'REQUEST FREE CONSULT',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'banner_btn_text',
        array(
            'label' => __('Banner Third Service Title', 'legal_services'),
            'type' => 'text',
            'section' => 'home_page_banner_section',
            'settings' => 'banner_btn_text',
        )
    )
);
// -----------------Banner-Button-Link------------------------------

//Setting
$wp_customize->add_setting('banner_btn_link',  array(
    'type' => 'theme_mod',
    'default' => '/home',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'banner_btn_link',
        array(
            'label' => __('Banner Third Service Title', 'legal_services'),
            'type' => 'url',
            'section' => 'home_page_banner_section',
            'settings' => 'banner_btn_link',
        )
    )
);