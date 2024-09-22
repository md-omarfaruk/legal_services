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
                        <?php echo get_theme_mod('contact_page_map_iframe_code'); ?>
                    </div>
                </div>
            </div>
            <div class="contact-details py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 px-4">
                            <h2 class="contact-title roboto-bold my-3">CONTACT US NOW</h2>
                            <img src="assets/img/client-img-1.jpg" class="contact-page-client-img border-0"
                                alt="Adv Bashir Ahammed">
                            <h1 class="name dynalight-regular">Adv Bashir Ahammed</h1>
                            <address class="roboto-regular">
                                <strong>Address 1:</strong>
                                <br>
                                BANGLADESH
                                <br>
                                Brahmanbaria, Chittagong
                            </address>
                            <address class="roboto-regular">
                                <strong>Address 2:</strong>
                                <br>
                                BANGLADESH
                                <br>
                                Brahmanbaria, Chittagong
                            </address>
                            <h2 class="name dynalight-regular">Protecting Rights</h2>
                            <p><strong>Web: </strong>www.google.com</p>
                            <div class="direct-contact">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/headphone.png" class="header-icon-img" alt="">
                                    <h4 class="contact-number roboto-regular">+880-1868787748</h4>
                                </div>
                                <p class="roboto-regular">Direct : +880-1868787748</p>
                            </div>
                            <p><strong>Email: </strong>demo@gmail.com</p>
                            <div class="opening-hours">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/clock.png" class="header-icon-img" alt="">
                                    <h4 class="hours roboto-regular">09:00 - 06:00</h4>
                                </div>
                                <p class="roboto-regular">Our Opening Hours Mon. - Fri.</p>
                            </div>

                        </div>
                        <div class="col-lg-6 google-form px-4 pt-3 mb-5">
                            <h2 class="contact-title roboto-bold">Request A Free Consultation</h2>
                            <p class="text-secondary">Call: 1-917-282-9256  or Complete the  Contact Form for Your Free Case Assessment.</p>
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeHFJVybAYkVE0DsjDenL8O1-5NNV0HGmbX2S7sAQAJn740XQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------Main-Contents-End------------------------ -->
<?php get_footer() ?>