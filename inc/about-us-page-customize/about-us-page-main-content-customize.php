<?php
$wp_customize->add_section('about_us_page_main_content_section', array(
    'title' => __('About Us Page Main Content Section', 'legal_services'),
    'panel' => 'about_us_page_customize',
    'priority' =>30,
));

// -----------------About-Us-Page-Main-Content-First-Row-Image--------------------------------
//Setting
$wp_customize->add_setting('about_us_page_main_content_first_row_img',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/supreme-court-building.jpg',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'about_us_page_main_content_first_row_img',
        array(
            'label' => __('About Us Page Main Contect First Row Image', 'legal_services'),
            'section' => 'about_us_page_main_content_section',
            'settings' => 'about_us_page_main_content_first_row_img',
        )
    )
);
// -----------------About-Us-Page-Main-Content-First-Row-Content--------------------------------

//Setting
$wp_customize->add_setting('about_us_page_main_content_first_row_content',  array(
    'type' => 'theme_mod',
    'default' => 'The idea for a national organisation of lawyers providing free advice and legal representation to people unable to access justice due to poverty or disadvantage was first raised at a national conference of lawyers held by the Bangladesh Bar Council in 1992. The Bangladesh Legal Aid and Services Trust (BLAST) was then established in 1993 dedicated to providing free legal services for the poor, with a Board of Trustees including eminent jurists, lawyers, professionals, and former judges of the Bangladesh Supreme Court. From the outset, BLAST was designed to ensure local involvement and decentralised leadership, with elected leaders of each district Bar Association heading district Management Committees, and civil society members in its Advisory Committees. The founding member strove to institutionalise, through BLAST, the tradition of legal aid. Over time, BLAST moved from its initial focus on legal representation in the courts, to providing alternative dispute resolution. It also began to address systemic barriers to accessing justice, by undertaking research and advocacy to press for legal, policy and institutional reforms, and undertaking public interest litigation. It undertakes legal awareness programmes for diverse groups, on rights, remedies, and available services, relating to family, criminal, land and labour laws, as well as fundamental rights. It is involved in coordination with the local administration, in particular with justice system actors and civil society organisations.',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_main_content_first_row_content',
        array(
            'label' => __('About Us Page Main Contect First Row Content', 'legal_services'),
            'type' => 'text',
            'section' => 'about_us_page_main_content_section',
            'settings' => 'about_us_page_main_content_first_row_content',
        )
    )
);

// -----------------About-Us-Page-Main-Content-Second-Row-Image--------------------------------
//Setting
$wp_customize->add_setting('about_us_page_main_content_second_row_img',  array(
    'type' => 'theme_mod',
    'default' => '/assets/img/shongshad.jpg',
));

//Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'about_us_page_main_content_second_row_img',
        array(
            'label' => __('About Us Page Main Contect Second Row Image', 'legal_services'),
            'section' => 'about_us_page_main_content_section',
            'settings' => 'about_us_page_main_content_second_row_img',
        )
    )
);
// -----------------About-Us-Page-Main-Content-Second-Row-Content--------------------------------

//Setting
$wp_customize->add_setting('about_us_page_main_content_second_row_content',  array(
    'type' => 'theme_mod',
    'default' => 'In the bustling business landscape of Bangladesh, legal matters can be a complex and challenging terrain to navigate. Whether you are an individual or a business, legal services are a necessity to ensure that your rights are protected and that you are operating within the bounds of the law. That is where our law firm Lacsb comes in. We specialise in providing expert legal services to businesses and individuals in Bangladesh. Our team of experienced lawyers, attorneys, and legal consultants is well-versed in a wide range of legal areas, including business law, corporate law, tax law, and more. We understand the process of the legal system and are equipped to handle any legal issue that comes your way.',

));
//Control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_us_page_main_content_second_row_content',
        array(
            'label' => __('About Us Page Main Contect Second Row Content', 'legal_services'),
            'type' => 'text',
            'section' => 'about_us_page_main_content_section',
            'settings' => 'about_us_page_main_content_second_row_content',
        )
    )
);
?>