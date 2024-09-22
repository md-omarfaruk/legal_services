<?php

/**
 * Template Name: Gallery Page
 */
get_header()
?>
        <!-- ---------------------------Main-Contents-Start------------------------ -->

        <div class="gallery-title">
            <h1 class="text-center roboto-black">
                <?php echo get_theme_mod('gallery_page_hero_title');?>
            </h1>
        </div>
                <!-- -----------------------Gallery-lightbox-Start------------------- -->
        <div class="gallery-container">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/client-img.jpg"
                                data-imgsrc="assets/img/client-img.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/1.jpg"
                                data-imgsrc="assets/img/1.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/2.jpg"
                                data-imgsrc="assets/img/2.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/3.jpg"
                                data-imgsrc="assets/img/3.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/4.jpg"
                                data-imgsrc="assets/img/4.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/5.jpg"
                                data-imgsrc="assets/img/5.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/6.jpg"
                                data-imgsrc="assets/img/6.jpg" alt="Photo Gallery">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/7.jpg"
                                data-imgsrc="assets/img/7.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/8.jpg"
                                data-imgsrc="assets/img/8.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/9.jpg"
                                data-imgsrc="assets/img/9.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/10.jpg"
                                data-imgsrc="assets/img/10.jpg" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="assets/img/11.jpg"
                                data-imgsrc="assets/img/11.jpg" alt="Photo Gallery">
                        </div>
                    </div>                
                </div>                
                <section class="lightbox-container">

                    <span class="lightbox-btn left" id="left">
                        <i class="bi bi-arrow-left"></i>
                    </span>
                    <span class="lightbox-btn right" id="right">
                        <i class="bi bi-arrow-right"></i>
                    </span>
                    <span class="close" id="close">
                    x
                    </span>
                    <div class="lightbox-image-wrapper">
                        <img alt="lightboximage" class="lightbox-image">
                   </div>
                </section>
            </div>
        </div>
                <!-- -----------------------Gallery-lightbox-End------------------- -->
        <!-- ---------------------------Main-Contents-End------------------------ -->
<?php get_footer() ?>