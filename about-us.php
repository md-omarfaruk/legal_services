<?php

/**
 * Template Name: About Us Page
 */
get_header()
?>
<!-- ---------------------Main-Section-Start--------------------------- -->
<div class="about-title">
    <h1 class="text-center roboto-black">
        <?php echo get_theme_mod('about_us_page_hero_title'); ?>
    </h1>
</div>
<div class="bg-white">
    <div class="container py-5 roboto-regular">
        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo get_theme_mod('about_us_page_main_content_first_row_img');?>" height="100%" class="img-fluid" alt="Adv Bashir Ahammed">
            </div>
            <div class="col-lg-8 roboto-bold about-myself">
                <p class="about-page-decs"><?php echo get_theme_mod('about_us_page_main_content_first_row_content');?>
                </p>
            </div>
        </div>
        <div class="row py-5 mt-4">
            <div class="col-lg-8 roboto-bold about-myself">
                <p class="about-page-decs"><?php echo get_theme_mod('about_us_page_main_content_second_row_content');?>
                </p>
            </div>
            <div class="col-lg-4">
                <img src="<?php echo get_theme_mod('about_us_page_main_content_second_row_img');?>" height="100%" class="img-fluid" alt="Adv Bashir Ahammed">
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <h3 class="text-center text-secondary py-5 mb-4 roboto-bold">Our legal service areas</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/commercial-law.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            Corporate & Commercial Law</h5>
                        <p class="card-text">Legal and Consultancy Service Bangladesh is well-equipped to provide top-notch corporate and commercial legal services to businesses and individuals.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/vat-4184607_1280.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vat & Tax Law</h5>
                        <p class="card-text">Legal and Consultancy Service Bangladesh offers a range of legal and tax-related services for individuals and businesses in Bangladesh, particularly in the area of VAT and tax law.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/import-export.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Import & Export Law</h5>
                        <p class="card-text">
                            Import & Export Law in Bangladesh
                            Legal and Consultancy Service Bangladesh has a solid national dedicated team of experienced attorneys, lawyers, and legal consultants to address our clients import and export-related business legal obligations according to their activity and industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---------------------Main-Section-End--------------------------- -->
<?php get_footer() ?>