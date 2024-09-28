<?php
$wp_customize->add_section('footer_first_column', array(
    'title' => __('Footer First Column', 'legal_services'),
    'panel' => 'footer',
    'priority' => 10,
));

// -----------------Footer-First-Column-Logo--------------------------------
//Setting
$wp_customize->add_setting('footer_logo',  array(
    'type' => 'theme_mod',
     'default'   => get_template_directory_uri() . '/assets/img/responsive-logo.png',
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
            'type' => 'textarea',
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

?>