<?php
// ---------------------Appoint-Page-Summary-Section-Customize------------------------
$wp_customize->add_section('appointment_page_summary_section', array(
    'title' => __('Appointment Page Summary Section', 'legal_services'),
    'panel' => 'appointment_page_customize', 
    'priority' => 20,
));

// -----------------Section-Summary-Title--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_summary_title',  array(
    'type' => 'theme_mod',
    'default' => 'Summary',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_summary_title',
        array(
            'label' => __('Appointment Page Summary Title', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_summary_section',
            'settings' => 'appointment_page_summary_title',
        )
    )
);
// -----------------Section-Booking-Summary-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_booking_summary_text',  array(
    'type' => 'theme_mod',
    'default' => 'Your appointment booking summary',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_booking_summary_text',
        array(
            'label' => __('Appointment Page Appointment Booking Summary Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_summary_section',
            'settings' => 'appointment_page_booking_summary_text',
        )
    )
);

?>