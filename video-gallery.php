<?php

/**
 * Template Name: Video Gallery Page
 */
get_header()
?>
        <!-- ---------------------------Main-Contents-Start------------------------ -->

        <div class="video-gallery-title">
            <h1 class="text-center roboto-black">
            <?php echo get_theme_mod('video_gallery_page_hero_title');?>
            </h1>
        </div>
        <div class="video-gallery-container">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6">
                        <iframe class="gallery-video" width="100%" height="360"
                            src="<?php echo get_theme_mod('video_gallery_page_gallery_videoOne');?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <iframe width="100%" height="360"
                            src="<?php echo get_theme_mod('video_gallery_page_gallery_videoTwo');?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <iframe width="100%" height="360"
                            src="<?php echo get_theme_mod('video_gallery_page_gallery_videoThree');?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <iframe width="100%" height="360"
                            src="<?php echo get_theme_mod('video_gallery_page_gallery_videoFour');?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <iframe class="gallery-video" width="100%" height="360"
                            src="<?php echo get_theme_mod('video_gallery_page_gallery_videoFive');?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <iframe width="100%" height="360"
                            src="<?php echo get_theme_mod('video_gallery_page_gallery_videoSix');?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>


                </div>
            </div>
        </div>
        <!-- ---------------------------Main-Contents-End------------------------ -->
<?php get_footer() ?>