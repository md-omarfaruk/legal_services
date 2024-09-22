<?php
function legal_services_gallery_page_customize($wp_customize)
{
    //Section
    $wp_customize->add_section('gallery_page_customize', array(
        'title' => __('Gallery Page Customize', 'legal_services'),
        'description' => __('Add Gallery Page Hero Title.', 'legal_services'),
        'priority' => 90,
    ));
    // -----------------Hero-Title--------------------------------

    //Setting
    $wp_customize->add_setting('gallery_page_hero_title',  array(
        'type' => 'theme_mod',
        'default' => 'GALLERY',

    ));
    //Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gallery_page_hero_title',
            array(
                'label' => __('Gallery Page Hero Title', 'legal_services'),
                'type' => 'text',
                'section' => 'gallery_page_customize',
                'settings' => 'gallery_page_hero_title',
            )
        )
    );
};
add_action('customize_register', 'legal_services_gallery_page_customize');
?>
