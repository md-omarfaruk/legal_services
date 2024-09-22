<?php
$wp_customize->add_section('contact_page_map_customize', array(
    'title' => __('Contact Page Map Customize', 'legal_services'),
    'panel' => 'contact_page_customize',
    'priority' => 10,
));
// -----------------Banner-Title--------------------------------

//Setting
$wp_customize->add_setting('contact_page_map_iframe_code',  array(
    'type' => 'theme_mod',
    'default' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.068721123342!2d90.44182167526603!3d23.744928688986512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b81bdfd779fd%3A0x722a9328b322bced!2sNandipara%20Bridge%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1726981861177!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_page_map_iframe_code',
        array(
            'label' => __('Contact Page Map Iframe Code', 'legal_services'),
            'type' => 'textarea',
            'section' => 'contact_page_map_customize',
            'settings' => 'contact_page_map_iframe_code',
        )
    )
);

?>