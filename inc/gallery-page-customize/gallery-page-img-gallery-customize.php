<?php
    //Section
    $wp_customize->add_section('gallery_page_images_gallery_customize', array(
        'title' => __('Gallery Page Images Gallery Customize', 'legal_services'),
        'panel' => 'gallery_page_customize',
        'priority' => 20,
    ));
// -----------------Gallery-Page-Images--------------------------------
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgOne',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgOne',
        array(
            'label' => __('Gallery Page Image Gallery Image One', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgOne',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgTwo',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgTwo',
        array(
            'label' => __('Gallery Page Image Gallery Image Two', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgTwo',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgThree',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgThree',
        array(
            'label' => __('Gallery Page Image Gallery Image Three', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgThree',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgFour',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgFour',
        array(
            'label' => __('Gallery Page Image Gallery Image Four', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgFour',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgFive',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgFive',
        array(
            'label' => __('Gallery Page Image Gallery Image Five', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgFive',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgSix',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgSix',
        array(
            'label' => __('Gallery Page Image Gallery Image Six', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgSix',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgSeven',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgSeven',
        array(
            'label' => __('Gallery Page Image Gallery Image Seven', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgSeven',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgEight',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgEight',
        array(
            'label' => __('Gallery Page Image Gallery Image Eight', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgEight',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgNine',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgNine',
        array(
            'label' => __('Gallery Page Image Gallery Image Nine', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgNine',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgTen',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgTen',
        array(
            'label' => __('Gallery Page Image Gallery Image Ten', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgTen',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgElaven',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgElaven',
        array(
            'label' => __('Gallery Page Image Gallery Image Elaven', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgElaven',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgTwelve',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgTwelve',
        array(
            'label' => __('Gallery Page Image Gallery Image Twelve', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgTwelve',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgThirteen',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgThirteen',
        array(
            'label' => __('Gallery Page Image Gallery Image Thirteen', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgThirteen',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgFourteen',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgFourteen',
        array(
            'label' => __('Gallery Page Image Gallery Image Fourteen', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgFourteen',
        )
    )
);
//Setting
$wp_customize->add_setting('gallery_page_img_gallery_imgFifteen',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/client-img-1.jpg',
));
//Setting
//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'gallery_page_img_gallery_imgFifteen',
        array(
            'label' => __('Gallery Page Image Gallery Image Fifteen', 'legal_services'),
            'section' => 'gallery_page_images_gallery_customize',
            'settings' => 'gallery_page_img_gallery_imgFifteen',
        )
    )
);
