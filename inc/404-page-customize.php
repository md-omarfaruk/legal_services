<?php
function legal_services_404_page_customize($wp_customize)
{
        //Section
        $wp_customize->add_section(
            '404_page_customize',
            array(
                'title' => __('404 Page Main Section', 'legal_services'),
                'priority' => 90,
                'description' => __('Add your 404 Page Main Section content.', 'legal_services')
            )
        );
// --------------------------Not-Found-Text------------------------
    //Setting
    $wp_customize->add_setting('not_found_text',  array(
        'type' => 'theme_mod',
        'default' => 'Sorry, What you are looking for was not found!',

    ));
    //Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'not_found_text',
            array(
                'label' => __('Not Found Text', 'legal_services'),
                'type' => 'text',
                'section' => '404_page_customize',
                'settings' => 'not_found_text',
            )
        )
    );

}
add_action('customize_register', 'legal_services_404_page_customize');
?>