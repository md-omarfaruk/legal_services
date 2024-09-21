<?php
$wp_customize->add_section('about_us_page_main_content_section', array(
    'title' => __('About Us Page Main Content Section', 'legal_services'),
    'panel' => 'about_us_page_customize',
    'priority' =>30,
));

// -----------------Home-Page-Main-Content-Image--------------------------------
//Setting
// $wp_customize->add_setting('home_page_main_content_img',  array(
//     'type' => 'theme_mod',
//     'default' => '/assets/img/client-img.jpg',
// ));

//Control
//Footer-Logo
// $wp_customize->add_control(
//     new WP_Customize_Image_Control(
//         $wp_customize,
//         'home_page_main_content_img',
//         array(
//             'label' => __('Home Page Main Contect Image', 'legal_services'),
//             'section' => 'home_page_main_content_section',
//             'settings' => 'home_page_main_content_img',
//         )
//     )
// );
// -----------------Home-Page-Main-Content-First-Paragraph-Text--------------------------------

//Setting
// $wp_customize->add_setting('home_page_main_content_first_paragraph_text',  array(
//     'type' => 'theme_mod',
//     'default' => 'Adv Bashir Ahammed, probably the first Bangladeshi-American attorney to be admitted to practice before the United States Supreme Court, the United States Court of International Trade and the Michigan Supreme Court. December 19, 2010 the City of New York honored Adv Bashir Ahammed with a proclamation as a renowned United States Supreme Court Attorney. Adv Bashir Ahammed earned his Master of Laws degree with distinction from Touro Law School in 2002, New York.
// In 2005, Adv Bashir Ahammed was admitted to the State Bar of Michigan and started his law practice in Wayne County, Michigan. During the beginning of his practice, he served as a court-appointed criminal defense attorney where he had an opportunity to represent many different clients, including Iraq War veterans in criminal defense cases.
// Adv Bashir Ahammed is experienced in handling accident cases where he has recovered millions of dollars for his accident victim clients. He also successfully represents clients in immigration matters.
// Adv Bashir Ahammed is a proud member of the American Bar Association, American Immigration Lawyers Association, Michigan State Bar, and New York State Bar Association (out of state).
// Adv Bashir Ahammed is a registered Democrat and is very active in the political process, including local, state, and federal elections. He is the managing attorney for the Adv Bashir Ahammed Law Firm, P.C. in Michigan.',

// ));
//Control
// $wp_customize->add_control(
//     new WP_Customize_Control(
//         $wp_customize,
//         'home_page_main_content_first_paragraph_text',
//         array(
//             'label' => __('Home Page Main Content First Paragraph Text', 'legal_services'),
//             'type' => 'text',
//             'section' => 'home_page_main_content_section',
//             'settings' => 'home_page_main_content_first_paragraph_text',
//         )
//     )
// );

?>