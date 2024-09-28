<?php
$wp_customize->add_section('about_us_page_third_service_customize', array(
    'title' => __('About Us Page Third Service Customize', 'legal_services'),
    'panel' => 'about_us_page_services_area_customize',
    'priority' => 30,
));

// -----------------About-Us-Page-Third-Service-Image--------------------------------
//Setting
$wp_customize->add_setting('about_us_page_third_service_img',  array(
    'type' => 'theme_mod',
     'default'   => get_template_directory_uri() . '/assets/img/immigration.png',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'about_us_page_third_service_img',
        array(
            'label' => __('About Us Page Third Service Image', 'legal_services'),
            'section' => 'about_us_page_third_service_customize',
            'settings' => 'about_us_page_third_service_img',
        )
    )
);
// -----------------About-Us-Page-Third-Service-Title--------------------------------

//Setting
$wp_customize->add_setting('about_us_page_third_service_title',  array(
    'type' => 'theme_mod',
    'default' => 'Immigration',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_third_service_title',
        array(
            'label' => __('About Us Page Third Service Title', 'legal_services'),
            'type' => 'text',
            'section' => 'about_us_page_third_service_customize',
            'settings' => 'about_us_page_third_service_title',
        )
    )
);

// -----------------About-Us-Page-Third-Service-description--------------------------------
//Setting
$wp_customize->add_setting('about_us_page_third_service_description',  array(
    'type' => 'theme_mod',
    'default' => 'Immigration Law in Bangladesh Legal and Consultancy Service Bangladesh has a solid national dedicated team of experienced attorneys, lawyers, and legal consultants to address our clients import and export-related business legal obligations according to their activity and industry.',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_third_service_description',
        array(
            'label' => __('About Us Page Third Service Description', 'legal_services'),
            'type' => 'textarea',
            'section' => 'about_us_page_third_service_customize',
            'settings' => 'about_us_page_third_service_description',
        )
    )
);
