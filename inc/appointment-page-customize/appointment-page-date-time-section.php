<?php
// ---------------------Appoint-Page-Date-Time-Section-Customize------------------------
$wp_customize->add_section('appointment_page_date_time_section', array(
    'title' => __('Appointment Page Date Time Section', 'legal_services'),
    'panel' => 'appointment_page_customize', 
    'priority' => 20,
));
// -----------------Date-Time-Required-Note--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_date_time_required_note',  array(
    'type' => 'theme_mod',
    'default' => 'Please select a time slot to proceed with the booking.',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_date_time_required_note',
        array(
            'label' => __('Appointment Page Date Time Section Required Note', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_date_time_required_note',
        )
    )
);
// -----------------Section-Date-Time-Title--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_date_time_title',  array(
    'type' => 'theme_mod',
    'default' => 'Date & Time',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_date_time_title',
        array(
            'label' => __('Appointment Page Service Section Date Time Title', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_date_time_title',
        )
    )
);
// -----------------Section-select-date-time-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_select_date_time_text',  array(
    'type' => 'theme_mod',
    'default' => 'Select Your Date:',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_select_date_time_text',
        array(
            'label' => __('Appointment Page Service Section Date Time Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_select_date_time_text',
        )
    )
);
// -----------------Section-Time-Slot-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_time_slot_text',  array(
    'type' => 'theme_mod',
    'default' => 'Time Slot',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_time_slot_text',
        array(
            'label' => __('Appointment Page Service Time Slot Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_time_slot_text',
        )
    )
);
// -----------------Section-Morning-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_date_time_morning_text',  array(
    'type' => 'theme_mod',
    'default' => 'Morning',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_date_time_morning_text',
        array(
            'label' => __('Appointment Page Date Time Morning Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_date_time_morning_text',
        )
    )
);
// -----------------Section-Afternoon-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_date_time_afternoon_text',  array(
    'type' => 'theme_mod',
    'default' => 'Afternoon',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_date_time_afternoon_text',
        array(
            'label' => __('Appointment Page Date Time Afternoon Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_date_time_afternoon_text',
        )
    )
);
// -----------------Section-Evening-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_date_time_evening_text',  array(
    'type' => 'theme_mod',
    'default' => 'Evening',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_date_time_evening_text',
        array(
            'label' => __('Appointment Page Date Time Evening Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_date_time_evening_text',
        )
    )
);
 // ---------------------End-Appoint-Page-Date-Time-Section-Customize------------------------
?>