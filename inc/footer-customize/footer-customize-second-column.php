<?php
$wp_customize->add_section('footer_second_contact_column', array(
    'title' => __('Footer Second Contact Column', 'legal_services'),
    'panel' => 'footer',
    'priority' => 20,
));
//Setting
$wp_customize->add_setting('footer_location',  array(
    'type' => 'theme_mod',
    'default' => 'Brahmanbaria, Chittagong, Bangladesh',
));

//Control
//Footer-Logo
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_location',
        array(
            'label' => __('Footer Location', 'legal_services'),
            'section' => 'footer_second_contact_column',
            'settings' => 'footer_location',
        )
    )
);
$wp_customize->add_setting('footer_mobile_number',  array(
    'type' => 'theme_mod',
    'default' => '+8801868787748',
));

//Control
//Footer-Logo
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_mobile_number',
        array(
            'label' => __('Footer Mobile Number', 'legal_services'),
            'section' => 'footer_second_contact_column',
            'settings' => 'footer_mobile_number',
        )
    )
);
$wp_customize->add_setting('footer_mail_address',  array(
    'type' => 'theme_mod',
    'default' => 'demo@gmail.com',
));

//Control
//Footer-Logo
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_mail_address',
        array(
            'label' => __('Footer Mail Address', 'legal_services'),
            'section' => 'footer_second_contact_column',
            'settings' => 'footer_mail_address',
        )
    )
);
?>