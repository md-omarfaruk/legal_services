<?php
// ---------------------Appoint-Page-Basic-Details-Section-Customize------------------------
$wp_customize->add_section('appointment_page_basic_details_section', array(
    'title' => __('Appointment Page Basic Details Section', 'legal_services'),
    'panel' => 'appointment_page_customize', 
    'priority' => 20,
));

// -----------------Section-Basic-Details-Title--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_basic_details_title',  array(
    'type' => 'theme_mod',
    'default' => 'Basic Details',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_basic_details_title',
        array(
            'label' => __('Appointment Page Basic Details Title', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_basic_details_title',
        )
    )
);
// -----------------Section-Pick-a-Date-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_pick_a_date_text',  array(
    'type' => 'theme_mod',
    'default' => 'Pick a Date:',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_pick_a_date_text',
        array(
            'label' => __('Appointment Page Pick a Date Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_pick_a_date_text',
        )
    )
);
// -----------------Input-Your-Full-Name-Label-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_your_full_name_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Your Full Name',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_your_full_name_label_text',
        array(
            'label' => __('Appointment Page Basic Details Input Your Full Name Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_your_full_name_label_text',
        )
    )
);
// -----------------Input-Home-Phone-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_home_phone_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Home Phone',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_home_phone_label_text',
        array(
            'label' => __('Appointment Page Basic Details Input Home Phone Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_home_phone_label_text',
        )
    )
);
// -----------------Input-Email-Address-Label-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_email_address_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Email Address',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_email_address_label_text',
        array(
            'label' => __('Appointment Page Basic Details Input Email Address Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_email_address_label_text',
        )
    )
);
// -----------------Input-Enter-Your-Details-Here-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_your_details_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Enter Your Details Here',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_your_details_label_text',
        array(
            'label' => __('Appointment Page Basic Detials Input Enter Your Details Here Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_your_details_label_text',
        )
    )
);
// -----------------Input-Enter-Your-Details-Here-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_your_details_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Enter Your Details Here',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_your_details_label_text',
        array(
            'label' => __('Appointment Page Basic Detials Input Enter Your Details Here Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_your_details_label_text',
        )
    )
);

// -----------------Input-Enter-Your-Details-Here-Label-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_your_details_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Enter Your Details Here',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_your_details_label_text',
        array(
            'label' => __('Appointment Page Basic Detials Input Enter Your Details Here Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_your_details_label_text',
        )
    )
);

// -----------------Input-Address-Label-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_address_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Address',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_address_label_text',
        array(
            'label' => __('Appointment Page Basic Detials Input Address Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_address_label_text',
        )
    )
);

// -----------------Input-Cell-Number-Label-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_cell_number_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Cell Number',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_cell_number_label_text',
        array(
            'label' => __('Appointment Page Basic Detials Input Enter Your Details Here Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_cell_number_label_text',
        )
    )
);

// ----------------Check-Input-Consultation-fee-Paid-Label-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_consultaion_fee_paid_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Consultation fee Paid',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_consultaion_fee_paid_label_text',
        array(
            'label' => __('Appointment Page Basic Detials Check Input Consultation fee Paid Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_consultaion_fee_paid_label_text',
        )
    )
);
// -----------------Input-Enter-Referred-Person-Name-Label-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_referred_person_name_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Enter Referred Person Name',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_referred_person_name_label_text',
        array(
            'label' => __('Appointment Page Basic Detials Input Enter Referred Person Name Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_referred_person_name_label_text',
        )
    )
);
// -----------------Input-Enter-Referred-Person-Number-Label-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_referred_person_number_label_text',  array(
    'type' => 'theme_mod',
    'default' => 'Enter Referred Number',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_referred_person_number_label_text',
        array(
            'label' => __('Appointment Page Basic Detials Input Enter Referred Person Number Label Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_basic_details_section',
            'settings' => 'appointment_page_referred_person_number_label_text',
        )
    )
);

?>