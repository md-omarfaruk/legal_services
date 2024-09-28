<?php
$wp_customize->add_section('about_us_page_first_service_customize', array(
    'title' => __('About Us Page First Service Customize', 'legal_services'),
    'panel' => 'about_us_page_services_area_customize',
    'priority' => 10,
));

// -----------------About-Us-Page-First-Service-Image--------------------------------
//Setting
$wp_customize->add_setting('about_us_page_first_service_img',  array(
    'type' => 'theme_mod',
    'default'   => get_template_directory_uri() . '/assets/img/accident.png', // Path to your default image
    'sanitize_callback' => 'esc_url_raw', // Sanitization
));

//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'about_us_page_first_service_img',
        array(
            'label' => __('About Us Page First Service Image', 'legal_services'),
            'section' => 'about_us_page_first_service_customize',
            'settings' => 'about_us_page_first_service_img',
        )
    )
);
// -----------------About-Us-Page-First-Service-Title--------------------------------

//Setting
$wp_customize->add_setting('about_us_page_first_service_title',  array(
    'type' => 'theme_mod',
    'default' => 'Accident Cases',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_first_service_title',
        array(
            'label' => __('About Us Page First Service Title', 'legal_services'),
            'type' => 'text',
            'section' => 'about_us_page_first_service_customize',
            'settings' => 'about_us_page_first_service_title',
        )
    )
);

// -----------------About-Us-Page-First-Service-description--------------------------------
//Setting
$wp_customize->add_setting('about_us_page_first_service_description',  array(
    'type' => 'theme_mod',
    'default' => 'Legal and Consultancy Service Bangladesh is well-equipped to provide top-notch corporate and commercial legal services to businesses and individuals.',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_first_service_description',
        array(
            'label' => __('About Us Page First Service Description', 'legal_services'),
            'type' => 'textarea',
            'section' => 'about_us_page_first_service_customize',
            'settings' => 'about_us_page_first_service_description',
        )
    )
);