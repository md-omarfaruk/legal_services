<?php
$wp_customize->add_section('about_us_page_second_service_customize', array(
    'title' => __('About Us Page Second Service Customize', 'legal_services'),
    'panel' => 'about_us_page_services_area_customize',
    'priority' => 20,
));

// -----------------About-Us-Page-Second-Service-Image--------------------------------
//Setting
$wp_customize->add_setting('about_us_page_second_service_img',  array(
    'type' => 'theme_mod',
     'default'   => get_template_directory_uri() . '/assets/img/medical-malpractice.png',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'about_us_page_second_service_img',
        array(
            'label' => __('About Us Page Second Service Image', 'legal_services'),
            'section' => 'about_us_page_second_service_customize',
            'settings' => 'about_us_page_second_service_img',
        )
    )
);
// -----------------About-Us-Page-Second-Service-Title--------------------------------

//Setting
$wp_customize->add_setting('about_us_page_second_service_title',  array(
    'type' => 'theme_mod',
    'default' => 'Medical Malpractice',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_second_service_title',
        array(
            'label' => __('About Us Page Second Service Title', 'legal_services'),
            'type' => 'text',
            'section' => 'about_us_page_second_service_customize',
            'settings' => 'about_us_page_second_service_title',
        )
    )
);

// -----------------About-Us-Page-Second-Service-description--------------------------------
//Setting
$wp_customize->add_setting('about_us_page_second_service_description',  array(
    'type' => 'theme_mod',
    'default' => 'Legal and Consultancy Service Bangladesh offers a range of legal and tax-related services for individuals and businesses in Bangladesh, particularly in the area of VAT and tax law.',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_second_service_description',
        array(
            'label' => __('About Us Page Second Service Description', 'legal_services'),
            'type' => 'textarea',
            'section' => 'about_us_page_second_service_customize',
            'settings' => 'about_us_page_second_service_description',
        )
    )
);