<?php
function social_media($wp_customize)
{
    //Settings
    $wp_customize->add_setting('facebook', array('default' => 'https://www.facebook.com/advbashir.ahammed'));
    $wp_customize->add_setting('twitter', array('default' => ''));
    $wp_customize->add_setting('youtube', array('default' => ''));

    //Controls
    //Facebook
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'facebook',
            array(
                'label' => __('Facebook', 'legal_services'),
                'section' => 'social-media',
                'settings' => 'facebook'
            )
        )
    );
    //Twitter
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'twitter',
            array(
                'label' => __('Twitter', 'legal_services'),
                'section' => 'social-media',
                'settings' => 'twitter'
            )
        )
    );
    //Youtube
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'youtube',
            array(
                'label' => __('YouTube', 'legal_services'),
                'section' => 'social-media',
                'settings' => 'youtube'
            )
        )
    );

    //Sections
    $wp_customize->add_section(
        'social-media',
        array(
            'title' => __('Social Media', 'legal_services'),
            'priority' => 40,
            'description' => __('Enter the URL to your accounts for each social media for the icon to appear in the header.', 'legal_services')
        )
    );
}
add_action('customize_register', 'social_media');

?>