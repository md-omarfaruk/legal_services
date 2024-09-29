<?php

/**
 * Template Name: Contact Page
 */
get_header()
?>
<!-- ---------------------------Main-Contents-Start------------------------ -->
<div class="contact-page-main-section my-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 contact-page-map">
                    <iframe src="<?php echo get_theme_mod('contact_page_map_embed_link', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29216.826994947343!2d90.4462336!3d23.7436928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1725948651376!5m2!1sen!2sbd'); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact-details py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 px-4">
                            <h2 class="contact-title roboto-bold my-3"><?php echo get_theme_mod('contact_page_contact_info_title', 'CONTACT US NOW'); ?></h2>
                            <img src="<?php echo get_theme_mod('contact_page_contact_info_img', get_template_directory_uri() . '/assets/img/client-img-1.jpg'); ?>" class="contact-page-client-img border-0"
                                alt="Adv Bashir Ahammed">
                            <h1 class="name dynalight-regular"><?php echo get_theme_mod('contact_page_contact_info_name', 'Adv Bashir Ahammed'); ?></h1>
                            <address class="roboto-regular">
                                <strong>Address 1:</strong>
                                <br>
                                <?php echo get_theme_mod('contact_page_contact_info_address_one_country', 'BANGLADESH'); ?>
                                <br>
                                <?php echo get_theme_mod('contact_page_contact_info_address_one_state', 'Brahmanbaria, Chittagong'); ?>
                            </address>
                            <address class="roboto-regular">
                                <strong>Address 2:</strong>
                                <br>
                                <?php echo get_theme_mod('contact_page_contact_info_address_two_country', 'BANGLADESH'); ?>
                                <br>
                                <?php echo get_theme_mod('contact_page_contact_info_address_two_state', 'Brahmanbaria, Chittagong'); ?>
                            </address>
                            <h2 class="name dynalight-regular"><?php echo get_theme_mod('contact_page_contact_info_protecting_rights_title', 'Protecting Rights'); ?></h2>
                            <p><strong>Web: </strong><?php echo get_theme_mod('contact_page_contact_info_web_url', 'www.google.com'); ?></p>
                            <div class="direct-contact">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="<?php echo get_theme_file_uri('assets/img/icons/headphone.png', ); ?>" class="header-icon-img" alt="">
                                    <h4 class="contact-number roboto-regular"><?php echo get_theme_mod('mobile_number', '+8801868787748'); ?></h4>
                                </div>
                                <p class="roboto-regular">Direct : <?php echo get_theme_mod('direct_mobile_number', '+8801868787748'); ?></p>
                            </div>
                            <p><strong>Email: </strong><?php echo get_theme_mod('footer_mail_address'); ?></p>
                            <div class="opening-hours">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="<?php echo get_theme_file_uri('assets/img/icons/clock.png'); ?>" class="header-icon-img" alt="">
                                    <h4 class="hours roboto-regular"><?php echo get_theme_mod('opening_hours', '09:00 - 06:00'); ?></h4>
                                </div>
                                <p class="roboto-regular">Our Opening Days <?php echo get_theme_mod('opening_days', 'Mon. - Fri.'); ?></p>
                            </div>

                        </div>
                        <div class="col-lg-6 google-form px-4 pt-3 mb-5">
                            <h2 class="contact-title roboto-bold"><?php echo get_theme_mod('contact_page_form_column_title','Request A Free Consultation'); ?></h2>
                            <p class="text-secondary">Call: <?php echo get_theme_mod('contact_page_form_column_cosultation_number', '+8801868787748'); ?> or <?php echo get_theme_mod('contact_page_form_column_cosultation_alternative_way', 'Complete the Contact Form for Your Free Case Assessment.'); ?></p>
                            <iframe src="<?php echo get_theme_mod('contact_page_form_embed_link', 'https://docs.google.com/forms/d/e/1FAIpQLSeHFJVybAYkVE0DsjDenL8O1-5NNV0HGmbX2S7sAQAJn740XQ/viewform?embedded=true'); ?>" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------Main-Contents-End------------------------ -->
<?php get_footer() ?>