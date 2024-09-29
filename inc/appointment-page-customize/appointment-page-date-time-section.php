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
// ------------------Morning-Slot-Time-One-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_morning_slot_time_one_text',  array(
    'type' => 'theme_mod',
    'default' => '10:35 am - 11:05 am',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_morning_slot_time_one_text',
        array(
            'label' => __('Appointment Page Morning Slot Time One Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_morning_slot_time_one_text',
        )
    )
);
// ------------------Morning-Available_slots_for_Slot-Time-One-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_morning_available_slots_for_one_text',  array(
    'type' => 'theme_mod',
    'default' => '1 Slots left',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_morning_available_slots_for_one_text',
        array(
            'label' => __('Appointment Page Morning Available Slots for Slot Time One Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_morning_available_slots_for_one_text',
        )
    )
);
// ------------------Morning-Slot-Time-Two-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_morning_slot_time_two_text',  array(
    'type' => 'theme_mod',
    'default' => '11:05 am - 12:05 pm',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_morning_slot_time_two_text',
        array(
            'label' => __('Appointment Page Morning Slot Time Two Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_morning_slot_time_two_text',
        )
    )
);
// ------------------Morning-Available_slots_for_Slot-Time-Two-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_morning_available_slots_for_two_text',  array(
    'type' => 'theme_mod',
    'default' => '1 Slots left',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_morning_available_slots_for_two_text',
        array(
            'label' => __('Appointment Page Morning Available Slots for Slot Time Two Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_morning_available_slots_for_two_text',
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




// ------------------Afternoon-Slot-Time-One-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_slot_time_one_text',  array(
    'type' => 'theme_mod',
    'default' => '12:05 pm - 12:35 pm',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_slot_time_one_text',
        array(
            'label' => __('Appointment Page Afternoon Slot Time One Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_slot_time_one_text',
        )
    )
);
// ------------------Afternoon-Available_slots_for_Slot-Time-One-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_available_slots_for_one_text',  array(
    'type' => 'theme_mod',
    'default' => '1 Slots left',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_available_slots_for_one_text',
        array(
            'label' => __('Appointment Page Afternoon Available Slots for Slot Time One Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_available_slots_for_one_text',
        )
    )
);
// ------------------Afternoon-Slot-Time-Two-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_slot_time_two_text',  array(
    'type' => 'theme_mod',
    'default' => '12:35 pm - 01:05 pm',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_slot_time_two_text',
        array(
            'label' => __('Appointment Page Afternoon Slot Time Two Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_slot_time_two_text',
        )
    )
);
// ------------------Afternoon-Available_slots_for_Slot-Time-Two-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_available_slots_for_two_text',  array(
    'type' => 'theme_mod',
    'default' => '1 Slots left',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_available_slots_for_two_text',
        array(
            'label' => __('Appointment Page Afternoon Available Slots for Slot Time Two Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_available_slots_for_two_text',
        )
    )
);
// ------------------Afternoon-Slot-Time-Three-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_slot_time_three_text',  array(
    'type' => 'theme_mod',
    'default' => '01:05 pm - 01:35 pm',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_slot_time_three_text',
        array(
            'label' => __('Appointment Page Afternoon Slot Time Three Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_slot_time_three_text',
        )
    )
);
// ------------------Afternoon-Available_slots_for_Slot-Time-Three-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_available_slots_for_three_text',  array(
    'type' => 'theme_mod',
    'default' => '1 Slots left',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_available_slots_for_three_text',
        array(
            'label' => __('Appointment Page Afternoon Available Slots for Slot Time Three Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_available_slots_for_three_text',
        )
    )
);
// ------------------Afternoon-Slot-Time-Four-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_slot_time_four_text',  array(
    'type' => 'theme_mod',
    'default' => '01:35 pm - 02:05 pm',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_slot_time_four_text',
        array(
            'label' => __('Appointment Page Afternoon Slot Time Four Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_slot_time_four_text',
        )
    )
);
// ------------------Afternoon-Available_slots_for_Slot-Time-Four-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_available_slots_for_four_text',  array(
    'type' => 'theme_mod',
    'default' => '1 Slots left',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_available_slots_for_four_text',
        array(
            'label' => __('Appointment Page Afternoon Available Slots for Slot Time Four Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_available_slots_for_four_text',
        )
    )
);
// ------------------Afternoon-Slot-Time-Five-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_slot_time_five_text',  array(
    'type' => 'theme_mod',
    'default' => '02:05 pm - 02:35 pm',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_slot_time_five_text',
        array(
            'label' => __('Appointment Page Afternoon Slot Time Five Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_slot_time_five_text',
        )
    )
);
// ------------------Afternoon-Available_slots_for_Slot-Time-Five-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_available_slots_for_five_text',  array(
    'type' => 'theme_mod',
    'default' => '1 Slots left',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_available_slots_for_five_text',
        array(
            'label' => __('Appointment Page Afternoon Available Slots for Slot Time Five Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_available_slots_for_five_text',
        )
    )
);
// ------------------Afternoon-Slot-Time-six-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_slot_time_six_text',  array(
    'type' => 'theme_mod',
    'default' => '02:35 pm - 03:05 pm',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_slot_time_six_text',
        array(
            'label' => __('Appointment Page Afternoon Slot Time six Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_slot_time_six_text',
        )
    )
);
// ------------------Afternoon-Available_slots_for_Slot-Time-six-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_afternoon_available_slots_for_six_text',  array(
    'type' => 'theme_mod',
    'default' => '1 Slots left',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_afternoon_available_slots_for_six_text',
        array(
            'label' => __('Appointment Page Afternoon Available Slots for Slot Time six Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_afternoon_available_slots_for_six_text',
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
// ------------------Evening-Slot-Time-One-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_evening_slot_time_one_text',  array(
    'type' => 'theme_mod',
    'default' => '03:05 pm - 03:35 pm',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_evening_slot_time_one_text',
        array(
            'label' => __('Appointment Page Evening Slot Time One Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_evening_slot_time_one_text',
        )
    )
);
// ------------------Evening-Available_slots_for_Slot-Time-One-Text--------------------------------

//Setting
$wp_customize->add_setting('appointment_page_evening_available_slots_for_one_text',  array(
    'type' => 'theme_mod',
    'default' => '1 Slots left',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'appointment_page_evening_available_slots_for_one_text',
        array(
            'label' => __('Appointment Page Evening Available Slots for Slot Time One Text', 'legal_services'),
            'type' => 'text',
            'section' => 'appointment_page_date_time_section',
            'settings' => 'appointment_page_evening_available_slots_for_one_text',
        )
    )
);
 // ---------------------End-Appoint-Page-Date-Time-Section-Customize------------------------
?>