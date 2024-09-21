<?php
$wp_customize->add_section('about_us_page_services_section_title_customize', array(
    'title' => __('About Us Page Service Section Title Customize', 'legal_services'),
    'panel' => 'about_us_page_services_area_customize',
    'priority' => 10,
));

// -----------------About-Us-Page-Services-Section-Title---------------------------------
//Setting
$wp_customize->add_setting('about_us_page_services_section_title',  array(
    'type' => 'theme_mod',
    'default' => 'Our legal service areas',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_services_section_title',
        array(
            'label' => __('About Us Page Services Section Title', 'legal_services'),
            'type' => 'text',
            'section' => 'about_us_page_services_section_title_customize',
            'settings' => 'about_us_page_services_section_title',
        )
    )
);