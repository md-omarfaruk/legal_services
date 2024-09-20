<?php
function legal_services_footer_Customization($wp_customize)
{
    $wp_customize->add_panel('footer', array(
        'title' => __('Footer', 'legal_services'),
        'description' => __('Footer Customization', 'mytheme'),
        'priority' => 50,
    ));
    // Footer First Column
    require_once(get_theme_file_path('/inc/footer-customize/footer-customize-first-column.php'));

    // Footer Second Contact Column
    require_once(get_theme_file_path('/inc/footer-customize/footer-customize-second-column.php'));
}
add_action('customize_register', 'legal_services_footer_Customization');

