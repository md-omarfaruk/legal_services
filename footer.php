<!-- ---------------------Footer-Section-Start--------------------------- -->
<footer class="">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 roboto-regular px-5">
                <a class="navbar-brand" href="index.html"><img src="<?php echo  get_theme_mod('footer_logo'); ?>" width="160"
                        alt="Legal Services"></a>
                <p class="footer-desc mt-4 mb-0 lh-lg"><?php echo get_theme_mod('footer_description'); ?></p>
                <p><a href="<?php echo get_theme_mod('read_more'); ?>" class="text-danger">Read More</a></p>
                <div class="footer-social-links d-flex">
                    <a href="<?php echo get_theme_mod('facebook'); ?>" class="pe-3"><i class="bi bi-facebook"></i></a>
                    <a href="<?php echo get_theme_mod('twitter'); ?>" class="pe-3"><i class="bi bi-twitter"></i></a>
                    <a href="<?php echo get_theme_mod('youtube'); ?>" class="pe-3"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 footer-contact roboto-regular align-items-center px-5">
                <h5 class="text-white m-0">CONTACT</h5>
                <div class="contact-details mt-4">
                    <div class="d-flex text-white mb-3">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        <p class="mb-0 mt-1"><?php echo get_theme_mod('footer_location'); ?></p>
                    </div>
                    <div class="d-flex text-white mb-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <p class="mb-0 mt-1"><?php echo get_theme_mod('footer_mobile_number'); ?></p>
                    </div>
                    <div class="d-flex text-white mb-3">
                        <i class="bi bi-envelope-fill me-2"></i>
                        <p class="mb-0 mt-1"><?php echo get_theme_mod('footer_mail_address'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 footer-important-links roboto-regular align-items-center px-5">
                <h5 class="text-white mb-3"><?php echo get_theme_mod(''); ?>Important Links</h5>
                <?php
                if (has_nav_menu('footer-important-links')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer-important-links',
                        'menu_id'      => '',
                        'menu_class'   => 'nav-item mb-2',
                        'link_before' => '<i class="bi bi-box-arrow-up-right mt-0 me-2"></i>',
                    ));
                };
                ?>
            </div>
        </div>
    </div>
    <div class="copyright-text roboto-bold p-4 text-center">
        <p class="m-0 "><?php echo get_theme_mod('footer_copyright_text'); ?></p>
    </div>
</footer>
<a href="#" type="button"
    class="position-fixed rounded-pill border-0 btn whats-app-btn py-2 px-4 text-white roboto-black"><i
        class="bi bi-whatsapp me-2 pe-1"></i>Chat</a>
<a href="#" type="button" class="position-fixed home-btn border-0 btn text-white roboto-black"><i
        class="bi bi-arrow-up-short rounded-circle"></i></a>
<!-- ---------------------Footer-Section-End--------------------------- -->
<?php wp_footer(); ?>
</body>

</html>