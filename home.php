<?php get_header()?>

    <!-- ---------------------Home-page-Banner-Section-Start--------------------------- -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex ps-4">
                    <div class="text-center">
                        <div class="text-center text-white roboto-black hero-text fadeInUp">
                            <h1 class="mb-5"><?php echo get_theme_mod('banner_title'); ?></h1>
                            <h3 class="m-0"><?php echo get_theme_mod('banner_smaller_first_title');?></h3>
                            <h3 class="m-0"><?php echo get_theme_mod('banner_smaller_second_title');?></h3>
                        </div>
                        <div class="text-center text-white roboto-black responsive-hero-text fadeInUp">
                            <h3 class="m-0"><?php echo get_theme_mod('banner_smaller_first_title');?></h3>
                            <h3 class="m-0"><?php echo get_theme_mod('banner_smaller_second_title');?></h3>
                            <h1 class="mb-5"><?php echo get_theme_mod('banner_title'); ?></h1>
                        </div>
                        <div
                            class="services d-flex justify-content-center mt-3 mb-5 text-white roboto-black fadeInUp">
                            <div class="d-flex py-2">
                                <i class="bi bi-star-fill"></i>
                                <p class="mx-2 my-0"><?php echo get_theme_mod('banner_first_service_title');?></p>
                            </div>
                            <div class="d-flex py-2">
                                <i class="bi bi-star-fill"></i>
                                <p class="mx-2 my-0"><?php echo get_theme_mod('banner_second_service_title');?></p>
                            </div>
                            <div class="d-flex py-2">
                                <i class="bi bi-star-fill"></i>
                                <p class="mx-2 my-0"><?php echo get_theme_mod('banner_third_service_title');?></p>
                            </div>
                        </div>
                        <button type="button"
                            class=" border-0 btn hero-btn py-3 px-4 text-white roboto-black fadeInUp" href="<?php echo get_theme_mod('banner_btn_link');?>"><?php echo get_theme_mod('banner_btn_text');?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------Home-page-Banner-Section-End--------------------------- -->
    <!-- ---------------------Main-Section-Start--------------------------- -->
    <div class="about-section bg-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo get_theme_mod('home_page_main_content_img');?>" height="100%" class="img-fluid" alt="Adv Bashir Ahammed">
                </div>
                <div class="col-lg-8 roboto-bold about-myself">
                    <p class="about-decs"><?php echo get_theme_mod('home_page_main_content_first_paragraph_text');?>
                    </p>
                    <div class="about-contact d-flex align-items-center my-3">
                        <hr>
                        <h6 class="mx-2 my-0 roboto-bold"><?php echo get_theme_mod('home_page_main_content_contact_title');?></h6>
                        <hr>
                    </div>
                    <div class="about-contact-number d-flex justify-content-center">
                        <div class="toll-free-number mx-2">
                            <h6 class="roboto-regular">TOLL FREE : <strong><?php echo get_theme_mod('home_page_main_content_toll_free_number');?></strong></h6>
                        </div>
                        <div class="toll-free-number mx-2">
                            <h6 class="roboto-regular">DIRECT : <strong><?php echo get_theme_mod('home_page_main_content_direct_number');?></strong></h6>
                        </div>
                    </div>
                    <p class="about-decs"><?php echo get_theme_mod('home_page_main_content_second_paragraph_text');?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------Main-Section-End--------------------------- -->
<?php get_footer()?>
    