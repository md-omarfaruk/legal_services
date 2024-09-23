<?php
function legal_services_our_team_page_customize($wp_customize)
{
    $wp_customize->add_panel('our_team_page_customize', array(
        'title' => __('Our Team Page Customize', 'legal_services'),
        'description' => __('This panel is created for our team page Customize', 'legal_services'),
        'priority' => 60,
    ));
    require_once(get_theme_file_path( '/inc/our-team-customize/our-team-page-hero-section-customize.php' ));
    require_once(get_theme_file_path( '/inc/our-team-customize/our-team-page-main-content-customize.php' ));

}
add_action('customize_register', 'legal_services_our_team_page_customize');

