<?php

/**
 * Template Name: About Us Page
 */
get_header();
?>
<!-- ---------------------Main-Section-Start--------------------------- -->
<div class="about-title">
    <h1 class="text-center roboto-black">
        <?php echo get_theme_mod('about_us_page_hero_title', 'About Us'); ?>
    </h1>
</div>
<div class="bg-white">
    <div class="container py-5 roboto-regular">
        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo get_theme_mod('about_us_page_main_content_first_row_img', get_template_directory_uri() . '/assets/img/supreme-court-building.jpg');?>" height="100%" class="img-fluid" alt="Adv Bashir Ahammed">
            </div>
            <div class="col-lg-8 roboto-bold about-myself">
                <p class="about-page-decs"><?php echo get_theme_mod('about_us_page_main_content_first_row_content', 'The idea for a national organisation of lawyers providing free advice and legal representation to people unable to access justice due to poverty or disadvantage was first raised at a national conference of lawyers held by the Bangladesh Bar Council in 1992. The Bangladesh Legal Aid and Services Trust (BLAST) was then established in 1993 dedicated to providing free legal services for the poor, with a Board of Trustees including eminent jurists, lawyers, professionals, and former judges of the Bangladesh Supreme Court. From the outset, BLAST was designed to ensure local involvement and decentralised leadership, with elected leaders of each district Bar Association heading district Management Committees, and civil society members in its Advisory Committees. The founding member strove to institutionalise, through BLAST, the tradition of legal aid. Over time, BLAST moved from its initial focus on legal representation in the courts, to providing alternative dispute resolution. It also began to address systemic barriers to accessing justice, by undertaking research and advocacy to press for legal, policy and institutional reforms, and undertaking public interest litigation. It undertakes legal awareness programmes for diverse groups, on rights, remedies, and available services, relating to family, criminal, land and labour laws, as well as fundamental rights. It is involved in coordination with the local administration, in particular with justice system actors and civil society organisations.');?>
                </p>
            </div>
        </div>
        <div class="row py-5 mt-4">
            <div class="col-lg-8 roboto-bold about-myself">
                <p class="about-page-decs"><?php echo get_theme_mod('about_us_page_main_content_second_row_content', get_template_directory_uri() . '/assets/img/shongshad.jpg');?>
                </p>
            </div>
            <div class="col-lg-4">
                <img src="<?php echo get_theme_mod('about_us_page_main_content_second_row_img', 'In the bustling business landscape of Bangladesh, legal matters can be a complex and challenging terrain to navigate. Whether you are an individual or a business, legal services are a necessity to ensure that your rights are protected and that you are operating within the bounds of the law. That is where our law firm Lacsb comes in. We specialise in providing expert legal services to businesses and individuals in Bangladesh. Our team of experienced lawyers, attorneys, and legal consultants is well-versed in a wide range of legal areas, including business law, corporate law, tax law, and more. We understand the process of the legal system and are equipped to handle any legal issue that comes your way.');?>" height="100%" class="img-fluid" alt="Adv Bashir Ahammed">
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <h3 class="text-center text-secondary py-5 mb-4 roboto-bold"><?php echo get_theme_mod('about_us_page_services_section_title', 'Our legal service areas'); ?></h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo get_theme_mod('about_us_page_first_service_img', get_template_directory_uri() . '/assets/img/accident.png');?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_theme_mod('about_us_page_first_service_title', 'Accident Cases');?></h5>
                        <p class="card-text"><?php echo get_theme_mod('about_us_page_first_service_description', 'Legal and Consultancy Service Bangladesh is well-equipped to provide top-notch corporate and commercial legal services to businesses and individuals.');?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo get_theme_mod('about_us_page_second_service_img', get_template_directory_uri() . '/assets/img/medical-malpractice.png');?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_theme_mod('about_us_page_second_service_title', 'Medical Malpractice');?></h5>
                        <p class="card-text"><?php echo get_theme_mod('about_us_page_second_service_description', 'Legal and Consultancy Service Bangladesh offers a range of legal and tax-related services for individuals and businesses in Bangladesh, particularly in the area of VAT and tax law.');?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo get_theme_mod('about_us_page_third_service_img', get_template_directory_uri() . '/assets/img/immigration.png');?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_theme_mod('about_us_page_third_service_title', 'Immigration');?></h5>
                        <p class="card-text"><?php echo get_theme_mod('about_us_page_third_service_description', 'Immigration Law in Bangladesh Legal and Consultancy Service Bangladesh has a solid national dedicated team of experienced attorneys, lawyers, and legal consultants to address our clients import and export-related business legal obligations according to their activity and industry.');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---------------------Main-Section-End--------------------------- -->
<?php get_footer() ?>