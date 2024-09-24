<?php
get_header()
?>
<div class="our-team-title">
    <h1 class="text-center roboto-black">
        <?php echo get_theme_mod('our_team_page_hero_title'); ?>
    </h1>
</div>
<div class="bg-white">
    <div class="container py-5">
        <div class="row single-team-member justify-content-center my-5">
            <div class="col-lg-8">
                <div class="team-member-info">
                    <h2 class="roboto-black team-member-name my-3">
                        <?php echo get_the_title(); // Display post title?>
                    </h2>
                    <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="team-member-img rounded-3" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                    <h4 class="roboto-medium team-member-designation mt-3">
                    <?php echo esc_html(get_post_meta(get_the_ID(), '_team_member_designation', true)); ?>
                    </h4>
                    
                    <p class="roboto-regular team-member-description">
                        <?php echo get_the_content(); // Display post meta value?>
                    </p>
                </div>
            </div>
            </div>
        </div>
    
    </div>
</div>


<?php get_footer() ?>