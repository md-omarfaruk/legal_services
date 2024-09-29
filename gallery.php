<?php

/**
 * Template Name: Gallery Page
 */
get_header()
?>
        <!-- ---------------------------Main-Contents-Start------------------------ -->

        <div class="gallery-title">
            <h1 class="text-center roboto-black">
                <?php echo get_theme_mod('gallery_page_hero_title', 'GALLERY');?>
            </h1>
        </div>
                <!-- -----------------------Gallery-lightbox-Start------------------- -->
        <div class="gallery-container">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgOne', get_template_directory_uri() . '/assets/img/client-img.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgOne', get_template_directory_uri() . '/assets/img/client-img.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgTwo', get_template_directory_uri() . '/assets/img/client-img-1.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgTwo', get_template_directory_uri() . '/assets/img/client-img-1.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgThree', get_template_directory_uri() . '/assets/img/5.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgThree', get_template_directory_uri() . '/assets/img/5.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgFour', get_template_directory_uri() . '/assets/img/6.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgFour', get_template_directory_uri() . '/assets/img/6.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgFive'get_template_directory_uri() . '/assets/img/7.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgFive'get_template_directory_uri() . '/assets/img/7.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgSix', get_template_directory_uri() . '/assets/img/8.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgSix', get_template_directory_uri() . '/assets/img/8.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div>           
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgSeven', get_template_directory_uri() . '/assets/img/9.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgSeven', get_template_directory_uri() . '/assets/img/9.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgEight', get_template_directory_uri() . '/assets/img/10.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgEight', get_template_directory_uri() . '/assets/img/10.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgNine', get_template_directory_uri() . '/assets/img/11.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgNine', get_template_directory_uri() . '/assets/img/11.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgTen', get_template_directory_uri() . '/assets/img/12.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgTen', get_template_directory_uri() . '/assets/img/12.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgElaven', get_template_directory_uri() . '/assets/img/1.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgElaven', get_template_directory_uri() . '/assets/img/1.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgTwelve', get_template_directory_uri() . '/assets/img/2.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgTwelve', get_template_directory_uri() . '/assets/img/2.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgThirteen', get_template_directory_uri() . '/assets/img/3.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgThirteen', get_template_directory_uri() . '/assets/img/3.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgFourteen', get_template_directory_uri() . '/assets/img/4.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgFourteen', get_template_directory_uri() . '/assets/img/4.jpg');?>" alt="Photo Gallery">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled img-fluid gallery-img"
                                src="<?php echo get_theme_mod('gallery_page_img_gallery_imgFifteen', get_template_directory_uri() . '/assets/img/client-img-1.jpg');?>"
                                data-imgsrc="<?php echo get_theme_mod('gallery_page_img_gallery_imgFifteen', get_template_directory_uri() . '/assets/img/client-img-1.jpg');?>" alt="Photo Gallery">
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