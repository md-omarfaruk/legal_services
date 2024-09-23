<?php
$wp_customize->add_section('our_team_page_hero_section', array(
    'title' => __('Our Team Page Hero Section', 'legal_services'),
    'panel' => 'our_team_page_customize',
    'priority' => 10,
));
// -----------------Banner-Title--------------------------------

//Setting
$wp_customize->add_setting('our_team_page_hero_title',  array(
    'type' => 'theme_mod',
    'default' => 'Adv Bashir Ahammed',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'our_team_page_hero_title',
        array(
            'label' => __('Our Team Page Hero Title', 'legal_services'),
            'type' => 'text',
            'section' => 'our_team_page_hero_section',
            'settings' => 'our_team_page_hero_title',
        )
    )
);

?>