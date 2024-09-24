<?php
function legal_services_thanks_page_customize($wp_customize)
{$wp_customize->add_section('thanks_page_hero_section', array(
    'title' => __('Thanks Page Hero Section', 'legal_services'),
    'priority' => 90,
));
// -----------------Banner-Title--------------------------------

//Setting
$wp_customize->add_setting('thanks_page_hero_title',  array(
    'type' => 'theme_mod',
    'default' => 'Thank You',
));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'thanks_page_hero_title',
        array(
            'label' => __('Thanks Page Hero Title', 'legal_services'),
            'type' => 'text',
            'section' => 'thanks_page_hero_section',
            'settings' => 'thanks_page_hero_title',
        )
    )
);

}
add_action('customize_register', 'legal_services_thanks_page_customize');
?>