<?php
$wp_customize->add_section('contact_page_map_customize', array(
    'title' => __('Contact Page Map Customize', 'legal_services'),
    'panel' => 'contact_page_customize',
    'priority' => 10,
));

// -----------------Contact-Page-Map-Embed-Link--------------------------------
//Setting
$wp_customize->add_setting('contact_page_map_embed_link',  array(
    'type' => 'theme_mod',
    'default' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29216.826994947343!2d90.4462336!3d23.7436928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1725948651376!5m2!1sen!2sbd',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_map_embed_link',
        array(
            'label' => __('Contact Page Map Embed Link', 'legal_services'),
            'type' => 'url',
            'section' => 'contact_page_map_customize',
            'settings' => 'contact_page_map_embed_link',
        )
    )
);
