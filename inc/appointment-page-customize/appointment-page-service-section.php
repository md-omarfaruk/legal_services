<?php
// ---------------------Appoint-Page-Service-Section-Customize------------------------
$wp_customize->add_section('appointment_page_service_section', array(
    'title' => __('Appointment Page Service Section', 'legal_services'),
    'panel' => 'appointment_page_customize', 
    'priority' => 20,
));
// -----------------service-Required-Note--------------------------------
//Setting
$wp_customize->add_setting('appointment_page_service_required_note',  array(
    'type' => 'theme_mod',
    'default' => 'Please select any service to book an appointment',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_service_required_note',
        array(
            'label' => __('Appointment Page Service Section Service Required Note', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_service_required_note',
        )
    )
);
// -----------------------Appoint-Page-Service-Section-Attorney-Image------------------------
//Setting
$wp_customize->add_setting('appointment_page_service_attorney_img',  array(
    'type' => 'theme_mod',
     'default'   => get_template_directory_uri() . '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'appointment_page_service_attorney_img',
        array(
            'label' => __('Appoint Page Service Section Attorney Image', 'legal_services'),
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_service_attorney_img',
        )
    )
);
// -----------------Section-Select-Category-Title--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_service_select_category_title',  array(
    'type' => 'theme_mod',
    'default' => 'Select Category',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_service_select_category_title',
        array(
            'label' => __('Appointment Page Service Section Select Category Title', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_service_select_category_title',
        )
    )
);
// -----------------Section-All-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_service_all_text',  array(
    'type' => 'theme_mod',
    'default' => 'All',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_service_all_text',
        array(
            'label' => __('Appointment Page Service Section All Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_service_all_text',
        )
    )
);
// -----------------Section-Select-Service-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_select_service_text',  array(
    'type' => 'theme_mod',
    'default' => 'Select Service',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_select_service_text',
        array(
            'label' => __('Appointment Page Service Select Service Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_select_service_text',
        )
    )
);
// -----------------Section-Appointment-with Our-Attorney-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_attorney_text',  array(
    'type' => 'theme_mod',
    'default' => 'Appointment with Our Attorney',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_attorney_text',
        array(
            'label' => __('Appointment Page Appointment with Our Attorney Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_attorney_text',
        )
    )
);
// -----------------Section-pay-before-the-meeting-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_pay_before_text',  array(
    'type' => 'theme_mod',
    'default' => 'You have to pay before the meeting.',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_pay_before_text',
        array(
            'label' => __('Appointment Page service section You have to pay before the meeting Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_pay_before_text',
        )
    )
);
// -----------------Section-note-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_service_section_note_text',  array(
    'type' => 'theme_mod',
    'default' => 'Note: Please note that if anyone wishes to cancel a scheduled
                                        appointment after
                                        it is paid and confirmed, Appointment Fee (Non Refundable )',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_service_section_note_text',
        array(
            'label' => __('Appointment Page service section note Text', 'legal_services'),
            'type' => 'textarea',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_service_section_note_text',
        )
    )
);
// -----------------Section-Duration-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_service_section_duration_text',  array(
    'type' => 'theme_mod',
    'default' => 'Duration',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_service_section_duration_text',
        array(
            'label' => __('Appointment Page service section Duration Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_service_section_duration_text',
        )
    )
);
// -----------------Section-Duration-Time-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_service_section_duration_time_text',  array(
    'type' => 'theme_mod',
    'default' => '30m',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_service_section_duration_time_text',
        array(
            'label' => __('Appointment Page service section Duration Time Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_service_section_duration_time_text',
        )
    )
);
// -----------------Section-Price-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_service_section_price_text',  array(
    'type' => 'theme_mod',
    'default' => 'Price',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_service_section_price_text',
        array(
            'label' => __('Appointment Page service section Price Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_service_section_price_text',
        )
    )
);
// -----------------Section-Price-Amount-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_service_section_price_amount_text',  array(
    'type' => 'theme_mod',
    'default' => '100$',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_service_section_price_amount_text',
        array(
            'label' => __('Appointment Page service section Price Amount Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_service_section',
            'settings' => 'appointment_page_service_section_price_amount_text',
        )
    )
);













?>