<?php
$wp_customize->add_section('our_team_page_main_contents', array(
    'title' => __('Our Team Page Main Contents Section', 'legal_services'),
    'panel' => 'our_team_page_customize',
    'priority' =>30,
));

// -----------------Our-Team-Page-Main-Content-Top-Description--------------------------------
//Setting
$wp_customize->add_setting('our_team_page_main_content_top_description',  array(
    'type' => 'theme_mod',
    'default' => 'Welcome to advbashirahammed.com, your premier destination for legal and consultancy services in Bangladesh. With our team of experienced lawyers and consultants, we offer comprehensive solutions to legal challenges across almost all sectors and industries. Our team has a deep understanding of the legal landscape in Bangladesh, and we have successfully represented clients in a wide range of legal matters, from intellectual property disputes to corporate law and beyond. With Lacsb.com, you can trust that you are receiving the highest quality legal services available in Bangladesh.',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'our_team_page_main_content_top_description',
        array(
            'label' => __('Our Team Page Main Contents Top Description', 'legal_services'),
            'type' => 'textarea',
            'section' => 'our_team_page_main_contents',
            'settings' => 'our_team_page_main_content_top_description',
        )
    )
);

// -----------------Our-Team-Page-Main-Content-Top-Heading--------------------------------
//Setting
$wp_customize->add_setting('our_team_page_main_content_top_heading',  array(
    'type' => 'theme_mod',
    'default' => 'Meet our team of legal experts',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'our_team_page_main_content_top_heading',
        array(
            'label' => __('Our Team Page Main Contents Top Heading', 'legal_services'),
            'type' => 'text',
            'section' => 'our_team_page_main_contents',
            'settings' => 'our_team_page_main_content_top_heading',
        )
    )
);

// -----------------Our-Team-Page-Various-Team-Headings--------------------------------
//Setting
$wp_customize->add_setting('our_team_page_executive_team_heading',  array(
    'type' => 'theme_mod',
    'default' => 'Our Executive Team',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'our_team_page_executive_team_heading',
        array(
            'label' => __('Our Team Page Executive Team Heading', 'legal_services'),
            'type' => 'text',
            'section' => 'our_team_page_main_contents',
            'settings' => 'our_team_page_executive_team_heading',
        )
    )
);

//Setting
$wp_customize->add_setting('our_team_page_advocacy_team_heading',  array(
    'type' => 'theme_mod',
    'default' => 'Our Advocacy Team',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'our_team_page_advocacy_team_heading',
        array(
            'label' => __('Our Team Page Advocacy Team Heading', 'legal_services'),
            'type' => 'text',
            'section' => 'our_team_page_main_contents',
            'settings' => 'our_team_page_advocacy_team_heading',
        )
    )
);

//Setting
$wp_customize->add_setting('our_team_page_administration_team_heading',  array(
    'type' => 'theme_mod',
    'default' => 'Our Administration Team',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'our_team_page_administration_team_heading',
        array(
            'label' => __('Our Team Page Administration Team Heading', 'legal_services'),
            'type' => 'text',
            'section' => 'our_team_page_main_contents',
            'settings' => 'our_team_page_administration_team_heading',
        )
    )
);

?>