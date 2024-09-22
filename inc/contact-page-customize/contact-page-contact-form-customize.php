<?php
$wp_customize->add_section('contact_page_form_customize', array(
    'title' => __('Contact Page Form Customize', 'legal_services'),
    'panel' => 'contact_page_customize',
    'priority' =>30,
));
// -----------------Contact-Page-Form-Column-Title--------------------------------

//Setting
$wp_customize->add_setting('contact_page_form_column_title',  array(
    'type' => 'theme_mod',
    'default' => 'Request A Free Consultation',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_form_column_title',
        array(
            'label' => __('Contact Page Form Column Title', 'legal_services'),
            'type' => 'text',
            'section' => 'contact_page_form_customize',
            'settings' => 'contact_page_form_column_title',
        )
    )
);
// -----------------Contact-Page-Form-Column-Consultation-Number--------------------------------

//Setting
$wp_customize->add_setting('contact_page_form_column_cosultation_number',  array(
    'type' => 'theme_mod',
    'default' => '+8801868787748',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_form_column_cosultation_number',
        array(
            'label' => __('Contact Page Form Column Free Consultation Number', 'legal_services'),
            'type' => 'tel',
            'section' => 'contact_page_form_customize',
            'settings' => 'contact_page_form_column_cosultation_number',
        )
    )
);
// -----------------Contact-Page-Form-Column-Consultation-Alternative-Way--------------------------------

//Setting
$wp_customize->add_setting('contact_page_form_column_cosultation_alternative_way',  array(
    'type' => 'theme_mod',
    'default' => 'Complete the Contact Form for Your Free Case Assessment.',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_form_column_cosultation_alternative_way',
        array(
            'label' => __('Contact Page Form Column Free Consultation Alternative Way', 'legal_services'),
            'type' => 'textarea',
            'section' => 'contact_page_form_customize',
            'settings' => 'contact_page_form_column_cosultation_alternative_way',
        )
    )
);
// -----------------Contact-Page-Form-Embed-link--------------------------------

//Setting
$wp_customize->add_setting('contact_page_form_embed_link',  array(
    'type' => 'theme_mod',
    'default' => 'https://docs.google.com/forms/d/e/1FAIpQLSeHFJVybAYkVE0DsjDenL8O1-5NNV0HGmbX2S7sAQAJn740XQ/viewform?embedded=true',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_form_embed_link',
        array(
            'label' => __('Contact Page Form Embed Link', 'legal_services'),
            'type' => 'url',
            'section' => 'contact_page_form_customize',
            'settings' => 'contact_page_form_embed_link',
        )
    )
);

?>