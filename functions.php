<?php

// Theme setup
function legal_services_setup_theme()
{
    // add_theme_support('admin-bar');
    // add_theme_support('editor-styles');
    // add_theme_support('align-wide');
    // Add support for title tag
    add_theme_support('title-tag');

    add_theme_support('custom-background');
    // add_theme_support('custom-header');
    // add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery'));
    // Register primary menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'legal_services'),
    ));
}
add_action('after_setup_theme', 'legal_services_setup_theme');

// Enqueue theme styles and scripts
function legal_services_enqueue_styles()
{

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('google-roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    wp_enqueue_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
    wp_enqueue_style('legal_services-main-style',  get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'), 'all');
    wp_enqueue_style('legal_services-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/assets/css/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'legal_services_enqueue_styles');

function legal_services_enqueue_scripts()
{
    wp_enqueue_script('legal_services_bootstrapJsScript', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', null, null, true);
    wp_enqueue_script('legal_services_mainJsScript', get_template_directory_uri() . '/assets/js/main.js', null, null, true);
}
add_action('wp_enqueue_scripts', 'legal_services_enqueue_scripts');

// --------------------------------Theme-Customize-Objects-Manager--------------------------------
function legal_services_top_header($wp_customize)
{
    // -----------------Top-Logo--------------------------------
    //Setting
    $wp_customize->add_setting('top_header_logo',  array(
        'type' => 'theme_mod',
        'default' => '/assets/img/moin-choudhury-logo.webp',
      ) );
    
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
    // -----------------Top-Opening-Hours--------------------------------

    //Setting
    $wp_customize->add_setting( 'opening_hours',  array(
        'type' => 'theme_mod',
        'default' => '09:00 - 06:00',

      ) );
    //Control
        //Top-Opening-Hours
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'opening_hours',
                array(
                    'label' => __( 'Opening Hours', 'legal_services' ),
                    'type' => 'text',
                    'section' => 'top_header',
                    'settings' => 'opening_hours',
                )
            )
        );
 
        // -----------------Top-Opening-Days--------------------------------

    //Setting
    $wp_customize->add_setting( 'opening_days',  array(
        'type' => 'theme_mod',
        'default' => 'Mon. - Fri.',
      ) );
    //Control
        //Top-Opening-Days
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'opening_days',
                array(
                    'label' => __( 'Opening Days', 'legal_services' ),
                    'type' => 'text',
                    'section' => 'top_header',
                    'settings' => 'opening_days',
                )
            )
        );
                // -----------------Mobile-Number--------------------------------

    //Setting
    $wp_customize->add_setting( 'mobile_number',  array(
        'type' => 'theme_mod',
        'default' => '+8801868787748',
      ) );
    //Control
        //Mobile Number
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'mobile_number',
                array(
                    'label' => __( 'Mobile Number', 'legal_services' ),
                    'type' => 'text',
                    'section' => 'top_header',
                    'settings' => 'mobile_number',
                )
            )
        );
                        // -----------------Direct-Mobile-Number--------------------------------

    //Setting
    $wp_customize->add_setting( 'direct_mobile_number',  array(
        'type' => 'theme_mod',
        'default' => '+8801868787748',
      ) );
    //Control
        //Direct Mobile Number
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'direct_mobile_number',
                array(
                    'label' => __( 'Direct Mobile Number', 'legal_services' ),
                    'type' => 'text',
                    'section' => 'top_header',
                    'settings' => 'direct_mobile_number',
                )
            )
        );



    //Section
    $wp_customize->add_section(
        'top_header',
        array(
            'title' => __('Top Header', 'legal_services'),
            'priority' => 30,
            'description' => __('Add your top header content.', 'legal_services')
        )
    );
}
add_action('customize_register', 'legal_services_top_header');

// ----------------------------Social-Medial-----------------------------
function social_media( $wp_customize ){
    //Settings
    $wp_customize->add_setting( 'facebook', array( 'default' => 'https://www.facebook.com/advbashir.ahammed' ) );
    $wp_customize->add_setting( 'twitter', array( 'default' => '' ) );
    $wp_customize->add_setting( 'youtube', array( 'default' => '' ) );

    //Controls
        //Facebook
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'facebook',
                array(
                    'label' => __( 'Facebook', 'legal_services' ),
                    'section' => 'social-media',
                    'settings' => 'facebook'
                )
            )
        );
    //Twitter
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'twitter',
            array(
                'label' => __( 'Twitter', 'legal_services' ),
                'section' => 'social-media',
                'settings' => 'twitter'
            )
        )
    );
    //Youtube
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'youtube',
            array(
                'label' => __( 'YouTube', 'legal_services' ),
                'section' => 'social-media',
                'settings' => 'youtube'
            )
        )
    );
    
        //Sections
        $wp_customize->add_section(
            'social-media',
            array(
                'title' => __( 'Social Media', 'legal_services' ),
                'priority' => 30,
                'description' => __( 'Enter the URL to your accounts for each social media for the icon to appear in the header.', 'legal_services' )
            )
        );
}
add_action('customize_register', 'social_media');

