<?php
$wp_customize->add_section('about_us_page_hero_section', array(
    'title' => __('About Us Page Hero Section', 'legal_services'),
    'panel' => 'about_us_page_customize',
    'priority' => 10,
));
// -----------------Banner-Title--------------------------------

//Setting
$wp_customize->add_setting('about_us_page_hero_title',  array(
    'type' => 'theme_mod',
    'default' => 'Adv Bashir Ahammed',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_hero_title',
        array(
            'label' => __('About Us Page Hero Title', 'legal_services'),
            'type' => 'text',
            'section' => 'about_us_page_hero_section',
            'settings' => 'about_us_page_hero_title',
        )
    )
);

?>