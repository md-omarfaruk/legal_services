<?php
$wp_customize->add_section('footer_copyright_section', array(
    'title' => __('Footer Copyright Section', 'legal_services'),
    'panel' => 'footer',
    'priority' => 30,
));
// -----------------Footer-Copyright-Text--------------------------------
//Setting
$wp_customize->add_setting('footer_copyright_text',  array(
    'type' => 'theme_mod',
    'default' => 'Copyright 2024 Adv Bashir Ahammed law. Design & Developed by webnewsdesign.com',

));
//Control
//Top-Opening-Hours
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_copyright_text',
        array(
            'label' => __('Footer Copyright Text', 'legal_services'),
            'type' => 'text',
            'section' => 'footer_copyright_section',
            'settings' => 'footer_copyright_text',
        )
    )
);