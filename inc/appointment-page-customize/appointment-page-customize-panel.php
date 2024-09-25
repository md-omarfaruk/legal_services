<?php
function legal_services_appointment_page_customize($wp_customize)
{
    $wp_customize->add_panel('appointment_page_customize', array(
        'title' => __('Appointment Page Customize', 'legal_services'),
        'description' => __('This panel is created for appointment page customize', 'legal_services'),
        'priority' => 90,
    ));
    require_once(get_theme_file_path( '/inc/appointment-page-customize/appointment-page-hero-section-customize.php' ));
    require_once(get_theme_file_path( '/inc/appointment-page-customize/appointment-page-service-section.php' ));


}
add_action('customize_register', 'legal_services_appointment_page_customize');

