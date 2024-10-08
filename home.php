<?php get_header()?>

    <!-- ---------------------Home-page-Banner-Section-Start--------------------------- -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex ps-4">
                    <div class="text-center">
                        <div class="text-center text-white roboto-black hero-text fadeInUp">
                            <h1 class="mb-5"><?php echo get_theme_mod('banner_title', 'Adv Bashir Ahammed'); ?></h1>
                            <h3 class="m-0"><?php echo get_theme_mod('banner_smaller_first_title', 'COMPREHENSIVE');?></h3>
                            <h3 class="m-0"><?php echo get_theme_mod('banner_smaller_second_title', 'LEGAL SERVICES');?></h3>
                        </div>
                        <div class="text-center text-white roboto-black responsive-hero-text fadeInUp">
                            <h3 class="m-0"><?php echo get_theme_mod('banner_smaller_first_title', 'COMPREHENSIVE');?></h3>
                            <h3 class="m-0"><?php echo get_theme_mod('banner_smaller_second_title', 'LEGAL SERVICES');?></h3>
                            <h1 class="mb-5"><?php echo get_theme_mod('banner_title', 'Adv Bashir Ahammed'); ?></h1>
                        </div>
                        <div
                            class="services d-flex justify-content-center mt-3 mb-5 text-white roboto-black fadeInUp">
                            <div class="d-flex py-2">
                                <i class="bi bi-star-fill"></i>
                                <p class="mx-2 my-0"><?php echo get_theme_mod('banner_first_service_title', 'IMMIGRATION');?></p>
                            </div>
                            <div class="d-flex py-2">
                                <i class="bi bi-star-fill"></i>
                                <p class="mx-2 my-0"><?php echo get_theme_mod('banner_second_service_title', 'MEDICAL MALPRACTICE');?></p>
                            </div>
                            <div class="d-flex py-2">
                                <i class="bi bi-star-fill"></i>
                                <p class="mx-2 my-0"><?php echo get_theme_mod('banner_third_service_title', 'ACCIDENT CASES');?></p>
                            </div>
                        </div>
                        <button type="button"
                            class=" border-0 btn hero-btn py-3 px-4 text-white roboto-black fadeInUp" href="<?php echo get_theme_mod('banner_btn_link', get_option("siteurl"));?>"></button>
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
                    <img src="<?php echo get_theme_mod('home_page_main_content_img', get_template_directory_uri() . '/assets/img/client-img.jpg');?>" height="100%" class="img-fluid" alt="Adv Bashir Ahammed">
                </div>
                <div class="col-lg-8 roboto-bold about-myself">
                    <p class="about-decs"><?php echo get_theme_mod('home_page_main_content_first_paragraph_text', 'Adv Bashir Ahammed, probably the first Bangladeshi-American attorney to be admitted to practice before the United States Supreme Court, the United States Court of International Trade and the Michigan Supreme Court. December 19, 2010 the City of New York honored Adv Bashir Ahammed with a proclamation as a renowned United States Supreme Court Attorney. Adv Bashir Ahammed earned his Master of Laws degree with distinction from Touro Law School in 2002, New York.
In 2005, Adv Bashir Ahammed was admitted to the State Bar of Michigan and started his law practice in Wayne County, Michigan. During the beginning of his practice, he served as a court-appointed criminal defense attorney where he had an opportunity to represent many different clients, including Iraq War veterans in criminal defense cases.
Adv Bashir Ahammed is experienced in handling accident cases where he has recovered millions of dollars for his accident victim clients. He also successfully represents clients in immigration matters.
Adv Bashir Ahammed is a proud member of the American Bar Association, American Immigration Lawyers Association, Michigan State Bar, and New York State Bar Association (out of state).
Adv Bashir Ahammed is a registered Democrat and is very active in the political process, including local, state, and federal elections. He is the managing attorney for the Adv Bashir Ahammed Law Firm, P.C. in Michigan.');?>
                    </p>
                    <div class="about-contact d-flex align-items-center my-3">
                        <hr>
                        <h6 class="mx-2 my-0 roboto-bold"><?php echo get_theme_mod('home_page_main_content_contact_title', 'CONTACT');?></h6>
                        <hr>
                    </div>
                    <div class="about-contact-number d-flex justify-content-center">
                        <div class="toll-free-number mx-2">
                            <h6 class="roboto-regular">TOLL FREE : <strong><?php echo get_theme_mod('home_page_main_content_toll_free_number', '+8801868787748');?></strong></h6>
                        </div>
                        <div class="toll-free-number mx-2">
                            <h6 class="roboto-regular">DIRECT : <strong><?php echo get_theme_mod('home_page_main_content_direct_number', '+8801868787748');?></strong></h6>
                        </div>
                    </div>
                    <p class="about-decs"><?php echo get_theme_mod('home_page_main_content_second_paragraph_text', 'Adv Bashir Ahammed is admitted in the United States Supreme Bar and Michigan State Supreme Court only. In New York State Adv Bashir Ahammed’s law practice is limited to Immigration cases only. In New York and in other states, cases are handled by experienced attorneys who licensed by the relevant States.
N.B. prior results do not guarantee the future outcome of any cases.');?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------Main-Section-End--------------------------- -->
<?php get_footer()?>
    