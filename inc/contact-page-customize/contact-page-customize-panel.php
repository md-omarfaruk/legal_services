<?php
function legal_services_contact_page_customize($wp_customize)
{
    $wp_customize->add_panel('contact_page_customize', array(
        'title' => __('Contact Page Customize', 'legal_services'),
        'description' => __('This panel is created for contact page customize', 'legal_services'),
        'priority' => 70,
    ));
    require_once(get_theme_file_path( '/inc/contact-page-customize/contact-page-map-customize.php' ));
    require_once(get_theme_file_path( '/inc/contact-page-customize/contact-page-main-content-contact-info-customize.php' ));
    require_once(get_theme_file_path( '/inc/contact-page-customize/contact-page-main-content-contact-form-customize.php' ));

}
add_action('customize_register', 'legal_services_contact_page_customize');

