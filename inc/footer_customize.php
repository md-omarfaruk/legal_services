<?php
function legal_services_footer_Customization($wp_customize)
{
    $wp_customize->add_panel('footer', array(
        'title' => __('Footer', 'legal_services'),
        'description' => __('Footer Customization', 'mytheme'),
        'priority' => 50,
    ));

    // Footer First Column
    $wp_customize->add_section('footer_first_column', array(
        'title' => __('Footer First Column', 'legal_services'),
        'panel' => 'footer',
        'priority' => 10,
    ));

    // -----------------Footer-First-Column-Logo--------------------------------
    //Setting
    $wp_customize->add_setting('footer_logo',  array(
        'type' => 'theme_mod',
        'default' => '/assets/img/responsive-logo.png',
    ));

    //Control
    //Footer-Logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_logo',
            array(
                'label' => __('Footer Logo', 'legal_services'),
                'section' => 'footer_first_column',
                'settings' => 'footer_logo',
            )
        )
    );
    // -----------------Footer-First-Column-Description--------------------------------
    //Setting
    $wp_customize->add_setting('footer_description',  array(
        'type' => 'theme_mod',
        'default' => 'Adv Bashir Ahammed, probably the first Bangladeshi-American attorney to be admitted to practice before the United States Supreme Court, the United States Court of International Trade and the Michigan Supreme Court.',

    ));
    //Control
    //Top-Opening-Hours
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'footer_description',
            array(
                'label' => __('Footer Description', 'legal_services'),
                'type' => 'text',
                'section' => 'footer_first_column',
                'settings' => 'footer_description',
            )
        )
    );
    // -----------------Footer-First-Column-Read-More-Button-Link--------------------------------

    $wp_customize->add_setting('read_more', array('default' => ''));

    //Controls
    //Facebook
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'read_more',
            array(
                'label' => __('Read More', 'legal_services'),
                'section' => 'footer_first_column',
                'settings' => 'read_more'
            )
        )
    );

    // -----------------Footer-Second-Column-Contact-Details--------------------------------
    // Footer Second Contact Column
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
        'default' => '+880-1868787748',
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
}
add_action('customize_register', 'legal_services_footer_Customization');

?>