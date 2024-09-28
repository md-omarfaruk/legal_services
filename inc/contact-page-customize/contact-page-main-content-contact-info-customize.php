<?php
$wp_customize->add_section('contact_page_main_content_contact_info_customize', array(
    'title' => __('Contact Page Main Content Contact Info Customize', 'legal_services'),
    'panel' => 'contact_page_customize',
    'priority' =>20,
));

// -----------------Contact-Page-Main-Content-Contact-Info-Title--------------------------------
//Setting
$wp_customize->add_setting('contact_page_contact_info_title',  array(
    'type' => 'theme_mod',
    'default' => 'CONTACT US NOW',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_contact_info_title',
        array(
            'label' => __('Contact Page Contact Info Title', 'legal_services'),
            'type' => 'text',
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_contact_info_title',
        )
    )
);
// -----------------Contact-Page-Main-Content-Contact-Info-Image--------------------------------
//Setting
$wp_customize->add_setting('contact_page_contact_info_img',  array(
    'type' => 'theme_mod',
     'default'   => get_template_directory_uri() . '/assets/img/client-img-1.jpg',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'contact_page_contact_info_img',
        array(
            'label' => __('Contact Page Contact Info Image', 'legal_services'),
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_contact_info_img',
        )
    )
);

// -----------------Contact-Page-Main-Content-Contact-Info-Name--------------------------------
//Setting
$wp_customize->add_setting('contact_page_contact_info_name',  array(
    'type' => 'theme_mod',
    'default' => 'Adv Bashir Ahammed',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_contact_info_name',
        array(
            'label' => __('Contact Page Contact Info Name', 'legal_services'),
            'type' => 'text',
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_contact_info_name',
        )
    )
);
// -----------------Contact-Page-Main-Content-Contact-Info-Address-1-Country-Name-------------------------------
//Setting
$wp_customize->add_setting('contact_page_contact_info_address_one_country',  array(
    'type' => 'theme_mod',
    'default' => 'BANGLADESH',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_contact_info_address_one_country',
        array(
            'label' => __('Contact Page Contact Info Address 1 Country Name', 'legal_services'),
            'type' => 'text',
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_contact_info_address_one_country',
        )
    )
);
// -----------------Contact-Page-Main-Content-Contact-Info-Address-1-State-Name-------------------------------
//Setting
$wp_customize->add_setting('contact_page_contact_info_address_one_state',  array(
    'type' => 'theme_mod',
    'default' => 'Brahmanbaria, Chittagong',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_contact_info_address_one_state',
        array(
            'label' => __('Contact Page Contact Info Address 1 State Name', 'legal_services'),
            'type' => 'text',
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_contact_info_address_one_state',
        )
    )
);

// -----------------Contact-Page-Main-Content-Contact-Info-Address-2-Country-Name-------------------------------
//Setting
$wp_customize->add_setting('contact_page_contact_info_address_two_country',  array(
    'type' => 'theme_mod',
    'default' => 'BANGLADESH',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_contact_info_address_two_country',
        array(
            'label' => __('Contact Page Contact Info Address 2 Country Name', 'legal_services'),
            'type' => 'text',
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_contact_info_address_two_country',
        )
    )
);
// -----------------Contact-Page-Main-Content-Contact-Info-Address-2-State-Name-------------------------------
//Setting
$wp_customize->add_setting('contact_page_contact_info_address_two_state',  array(
    'type' => 'theme_mod',
    'default' => 'Brahmanbaria, Chittagong',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_contact_info_address_two_state',
        array(
            'label' => __('Contact Page Contact Info Address 2 State Name', 'legal_services'),
            'type' => 'text',
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_contact_info_address_two_state',
        )
    )
);
// -----------------Contact-Page-Main-Content-Contact-Info-Protecting-Rigts-Title--------------------------------
//Setting
$wp_customize->add_setting('contact_page_contact_info_protecting_rights_title',  array(
    'type' => 'theme_mod',
    'default' => 'Protecting Rights',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_contact_info_protecting_rights_title',
        array(
            'label' => __('Contact Page Contact Info Protecting Rights Title', 'legal_services'),
            'type' => 'text',
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_contact_info_protecting_rights_title',
        )
    )
);
// -----------------Contact-Page-Main-Content-Contact-Info-Web-Url--------------------------------
//Setting
$wp_customize->add_setting('contact_page_contact_info_web_url',  array(
    'type' => 'theme_mod',
    'default' => 'www.google.com',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_contact_info_web_url',
        array(
            'label' => __('Contact Page Contact Info Web Url', 'legal_services'),
            'type' => 'url',
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_contact_info_web_url',
        )
    )
);
// -----------------Contact-Page-Main-Content-Contact-Info-Mobile-N-Direct-Numbers-are-Controlling-From-Header-Customize-N-Email-is-Controlling-From-Footer-Customize--------------------------------
$wp_customize->add_setting('contact_page_others_info',  array(
    'type' => 'theme_mod',
    'default' => 'No Text',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_others_info',
        array(
            'label' => __('Mobile N Direct Numbers are Controlling From-Header Customize N Email is Controlling From Footer Customize So Do Not Type Any Text Here', 'legal_services'),
            'type' => '',
            'section' => 'contact_page_main_content_contact_info_customize',
            'settings' => 'contact_page_others_info',
        )
    )
);

?>