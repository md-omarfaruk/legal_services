<?php
    //Section
    $wp_customize->add_section('video_gallery_page_videos_gallery_customize', array(
        'title' => __('Video Gallery Page Videos Gallery Customize', 'legal_services'),
        'panel' => 'video_gallery_page_customize',
        'priority' => 20,
    ));
// -----------------Video-Gallery-Page-Videos--------------------------------
//Setting
$wp_customize->add_setting('video_gallery_page_gallery_videoOne',  array(
    'type' => 'theme_mod',
    'default' => 'https://www.youtube.com/embed/hbLASgme01c?si=fUQOaaUhUddlj-yi',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'video_gallery_page_gallery_videoOne',
        array(
            'label' => __('Video Gallery Page Gallery Video One', 'legal_services'),
            'type' => 'url',
            'section' => 'video_gallery_page_videos_gallery_customize',
            'settings' => 'video_gallery_page_gallery_videoOne',
        )
    )
);
//Setting
$wp_customize->add_setting('video_gallery_page_gallery_videoTwo',  array(
    'type' => 'theme_mod',
    'default' => 'https://www.youtube.com/embed/hbLASgme01c?si=fUQOaaUhUddlj-yi',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'video_gallery_page_gallery_videoTwo',
        array(
            'label' => __('Video Gallery Page Gallery Video Two', 'legal_services'),
            'type' => 'url',
            'section' => 'video_gallery_page_videos_gallery_customize',
            'settings' => 'video_gallery_page_gallery_videoTwo',
        )
    )
);
//Setting
$wp_customize->add_setting('video_gallery_page_gallery_videoThree',  array(
    'type' => 'theme_mod',
    'default' => 'https://www.youtube.com/embed/hbLASgme01c?si=fUQOaaUhUddlj-yi',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'video_gallery_page_gallery_videoThree',
        array(
            'label' => __('Video Gallery Page Gallery Video Three', 'legal_services'),
            'type' => 'url',
            'section' => 'video_gallery_page_videos_gallery_customize',
            'settings' => 'video_gallery_page_gallery_videoThree',
        )
    )
);
//Setting
$wp_customize->add_setting('video_gallery_page_gallery_videoFour',  array(
    'type' => 'theme_mod',
    'default' => 'https://www.youtube.com/embed/hbLASgme01c?si=fUQOaaUhUddlj-yi',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'video_gallery_page_gallery_videoFour',
        array(
            'label' => __('Video Gallery Page Gallery Video Four', 'legal_services'),
            'type' => 'url',
            'section' => 'video_gallery_page_videos_gallery_customize',
            'settings' => 'video_gallery_page_gallery_videoFour',
        )
    )
);
//Setting
$wp_customize->add_setting('video_gallery_page_gallery_videoFive',  array(
    'type' => 'theme_mod',
    'default' => 'https://www.youtube.com/embed/hbLASgme01c?si=fUQOaaUhUddlj-yi',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'video_gallery_page_gallery_videoFive',
        array(
            'label' => __('Video Gallery Page Gallery Video Five', 'legal_services'),
            'type' => 'url',
            'section' => 'video_gallery_page_videos_gallery_customize',
            'settings' => 'video_gallery_page_gallery_videoFive',
        )
    )
);
//Setting
$wp_customize->add_setting('video_gallery_page_gallery_videoSix',  array(
    'type' => 'theme_mod',
    'default' => 'https://www.youtube.com/embed/hbLASgme01c?si=fUQOaaUhUddlj-yi',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'video_gallery_page_gallery_videoSix',
        array(
            'label' => __('Video Gallery Page Gallery Video Six', 'legal_services'),
            'type' => 'url',
            'section' => 'video_gallery_page_videos_gallery_customize',
            'settings' => 'video_gallery_page_gallery_videoSix',
        )
    )
);
//Setting
$wp_customize->add_setting('video_gallery_page_gallery_videoSeven',  array(
    'type' => 'theme_mod',
    'default' => 'https://www.youtube.com/embed/hbLASgme01c?si=fUQOaaUhUddlj-yi',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'video_gallery_page_gallery_videoSeven',
        array(
            'label' => __('Video Gallery Page Gallery Video Seven', 'legal_services'),
            'type' => 'url',
            'section' => 'video_gallery_page_videos_gallery_customize',
            'settings' => 'video_gallery_page_gallery_videoSeven',
        )
    )
);
//Setting
$wp_customize->add_setting('video_gallery_page_gallery_videoEight',  array(
    'type' => 'theme_mod',
    'default' => 'https://www.youtube.com/embed/hbLASgme01c?si=fUQOaaUhUddlj-yi',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'video_gallery_page_gallery_videoEight',
        array(
            'label' => __('Video Gallery Page Gallery Video Eight', 'legal_services'),
            'type' => 'url',
            'section' => 'video_gallery_page_videos_gallery_customize',
            'settings' => 'video_gallery_page_gallery_videoEight',
        )
    )
);