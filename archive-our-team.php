<?php

/**
 * Template Name: Our Team Page
 */
get_header()
?>
<div class="our-team-title">
    <h1 class="text-center roboto-black">
        <?php echo get_theme_mod('our_team_page_hero_title'); ?>
    </h1>
</div>
<div class="bg-white">
    <div class="container py-5">
        <p class="text-success text-center roboto-regular pb-5"><?php echo get_theme_mod('our_team_page_main_content_top_description'); ?></p>
        <h1 class="text-center text-dark roboto-black mt-5"><?php echo get_theme_mod('our_team_page_main_content_top_heading'); ?></h1>
        <div class="executive-team">
            <h3 class="text-lg-start text-sm-center team-name roboto-mediumaaa"><?php echo get_theme_mod('our_team_page_executive_team_heading'); ?></h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                // Custom Query to Fetch Team Members
                $team_members = new WP_Query(array(
                    'post_type'      => 'team-member',  // Custom Post Type Slug
                    'posts_per_page' => -1,             // Retrieve all posts
                    'orderby'        => 'date',         // Order by date
                    'order'          => 'DESC',         // Display latest first
                    'category_name'  => 'executive-team',
                ));

                // Check if there are any posts in the query
                if ($team_members->have_posts()) : ?>


                    <?php while ($team_members->have_posts()) : $team_members->the_post(); ?>
                        <div class="col text-center">
                            <div class="card h-100 border-0">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top mx-auto d-block" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                    <h5 class="text-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_team_member_designation', true)); ?></h5>
                                    <p class="card-text mt-4"><?php the_excerpt(); // Use excerpt for short description 
                                                                ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
            

        <?php else : ?>
            <p>No team members found.</p>
        <?php endif; ?>
        <?php
        // Reset Post Data after WP_Query
        wp_reset_postdata();
        ?>
        </div>
    </div>


            <div class="executive-team">
            <h3 class="text-lg-start text-sm-center team-name roboto-mediumaaa"><?php echo get_theme_mod('our_team_page_advocacy_team_heading'); ?></h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                // Custom Query to Fetch Team Members
                $team_members = new WP_Query(array(
                    'post_type'      => 'team-member',  // Custom Post Type Slug
                    'posts_per_page' => -1,             // Retrieve all posts
                    'orderby'        => 'date',         // Order by date
                    'order'          => 'DESC',         // Display latest first
                    'category_name'  => 'advocacy-team',
                ));

                // Check if there are any posts in the query
                if ($team_members->have_posts()) : ?>


                    <?php while ($team_members->have_posts()) : $team_members->the_post(); ?>
                        <div class="col text-center">
                            <div class="card h-100 border-0">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top mx-auto d-block" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                    <h5 class="text-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_team_member_designation', true)); ?></h5>
                                    <p class="card-text mt-4"><?php the_excerpt(); // Use excerpt for short description 
                                                                ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
            

        <?php else : ?>
            <p>No team members found.</p>
        <?php endif; ?>
        <?php
        // Reset Post Data after WP_Query
        wp_reset_postdata();
        ?>
        </div>
    </div>


            <div class="executive-team">
            <h3 class="text-lg-start text-sm-center team-name roboto-mediumaaa"><?php echo get_theme_mod('our_team_page_administration_team_heading'); ?></h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                // Custom Query to Fetch Team Members
                $team_members = new WP_Query(array(
                    'post_type'      => 'team-member',  // Custom Post Type Slug
                    'posts_per_page' => -1,             // Retrieve all posts
                    'orderby'        => 'date',         // Order by date
                    'order'          => 'DESC',         // Display latest first
                    'category_name'  => 'administration-team',
                ));

                // Check if there are any posts in the query
                if ($team_members->have_posts()) : ?>


                    <?php while ($team_members->have_posts()) : $team_members->the_post(); ?>
                        <div class="col text-center">
                            <div class="card h-100 border-0">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top mx-auto d-block" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                    <h5 class="text-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_team_member_designation', true)); ?></h5>
                                    <p class="card-text mt-4"><?php the_excerpt(); // Use excerpt for short description 
                                                                ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
            

        <?php else : ?>
            <p>No team members found.</p>
        <?php endif; ?>
        <?php
        // Reset Post Data after WP_Query
        wp_reset_postdata();
        ?>
        </div>
    </div>
    
    </div>
</div>


<?php get_footer() ?>