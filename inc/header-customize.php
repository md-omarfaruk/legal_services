<?php
function legal_services_top_header($wp_customize)
{
        //Section
        $wp_customize->add_section(
            'top_header',
            array(
                'title' => __('Top Header', 'legal_services'),
                'priority' => 20,
                'description' => __('Add your top header content.', 'legal_services')
            )
        );
    // -----------------Top-Logo--------------------------------
    //Setting
    $wp_customize->add_setting('top_header_logo',  array(
        'type' => 'theme_mod',
         'default'   => get_template_directory_uri() . '/assets/img/moin-choudhury-logo.webp',
    ));

    //Control
    //Top-Logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'top_header_logo',
            array(
                'label' => __('Top Header Logo', 'legal_services'),
                'section' => 'top_header',
                'settings' => 'top_header_logo',
            )
        )
    );
    // -----------------Header-Fixed-Menu-Logo--------------------------------
    //Setting
    $wp_customize->add_setting('header_fixed_menu_logo',  array(
        'type' => 'theme_mod',
         'default'   => get_template_directory_uri() . '/assets/img/fixed-nav-logo.png',
    ));

    //Control
    //Top-Logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'header_fixed_menu_logo',
            array(
                'label' => __('Header Fixed Menu Logo', 'legal_services'),
                'section' => 'top_header',
                'settings' => 'header_fixed_menu_logo',
            )
        )
    );
    // -----------------Top-Opening-Hours--------------------------------

    //Setting
    $wp_customize->add_setting('opening_hours',  array(
        'type' => 'theme_mod',
        'default' => '09:00 - 06:00',

    ));
    //Control
    //Top-Opening-Hours
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'opening_hours',
            array(
                'label' => __('Opening Hours', 'legal_services'),
                'type' => 'text',
                'section' => 'top_header',
                'settings' => 'opening_hours',
            )
        )
    );

    // -----------------Top-Opening-Days--------------------------------

    //Setting
    $wp_customize->add_setting('opening_days',  array(
        'type' => 'theme_mod',
        'default' => 'Mon. - Fri.',
    ));
    //Control
    //Top-Opening-Days
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'opening_days',
            array(
                'label' => __('Opening Days', 'legal_services'),
                'type' => 'text',
                'section' => 'top_header',
                'settings' => 'opening_days',
            )
        )
    );
    // -----------------Mobile-Number--------------------------------

    //Setting
    $wp_customize->add_setting('mobile_number',  array(
        'type' => 'theme_mod',
        'default' => '+8801868787748',
    ));
    //Control
    //Mobile Number
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mobile_number',
            array(
                'label' => __('Mobile Number', 'legal_services'),
                'type' => 'text',
                'section' => 'top_header',
                'settings' => 'mobile_number',
            )
        )
    );
    // -----------------Direct-Mobile-Number--------------------------------

    //Setting
    $wp_customize->add_setting('direct_mobile_number',  array(
        'type' => 'theme_mod',
        'default' => '+8801868787748',
    ));
    //Control
    //Direct Mobile Number
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'direct_mobile_number',
            array(
                'label' => __('Direct Mobile Number', 'legal_services'),
                'type' => 'text',
                'section' => 'top_header',
                'settings' => 'direct_mobile_number',
            )
        )
    );

}
add_action('customize_register', 'legal_services_top_header');
?>