<?php
$wp_customize->add_section('appointment_page_hero_section', array(
    'title' => __('Appointment Page Hero Section', 'legal_services'),
    'panel' => 'appointment_page_customize', 
    'priority' => 10,
));
// -----------------Banner-Title--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_hero_title',  array(
    'type' => 'theme_mod',
    'default' => 'Book an Appointment',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_hero_title',
        array(
            'label' => __('Appointment Page Hero Title', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_hero_section',
            'settings' => 'appointment_page_hero_title',
        )
    )
);
?>