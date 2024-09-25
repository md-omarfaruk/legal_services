<?php
get_header();
?>
<!-- ---------------------------Main-Contents-Start------------------------ -->

<div class="bg-white text-center my-5">
    <?php get_search_form() ?>
    <br>
        <h2 class="text-danger-emphasis roboto-black mb-5"> You are searching for:<?php the_search_query() ?></h2>

     <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="container">
 <div class="col-lg-4 text-center">
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
                        </div>
<?php endwhile; else : ?>

<h2><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></h2>


<!-- REALLY stop The Loop. -->
<?php endif; ?>
</div>
<!-- -----------------------------Main-Contents-End----------------------- -->

<?php get_footer() ?>