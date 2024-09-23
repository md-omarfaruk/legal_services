<?php

/**
 * Template Name: Archive Our Team Page
 */
get_header()
?>
<div class="our-team-title">
    <h1 class="text-center roboto-black">
        Our Team
    </h1>
</div>
<div class="bg-white">
    <div class="container py-5">
        <p class="text-success text-center roboto-regular pb-5">Welcome to advbashirahammed.com, your premier destination for legal and consultancy services in Bangladesh. With our team of experienced lawyers and consultants, we offer comprehensive solutions to legal challenges across almost all sectors and industries. Our team has a deep understanding of the legal landscape in Bangladesh, and we have successfully represented clients in a wide range of legal matters, from intellectual property disputes to corporate law and beyond. With Lacsb.com, you can trust that you are receiving the highest quality legal services available in Bangladesh. </p>
        <h1 class="text-center text-dark roboto-black mt-5">Meet our team of legal experts</h1>
        <div class="executive-team">
            <h3 class="text-lg-start text-sm-center team-name roboto-mediumaaa">Our Executive Team</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                // Custom Query to Fetch Team Members
                $team_members = new WP_Query(array(
                    'post_type'      => 'team-member',  // Custom Post Type Slug
                    'posts_per_page' => -1,             // Retrieve all posts
                    'orderby'        => 'date',         // Order by date
                    'order'          => 'DESC',         // Display latest first
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
            </div>

        <?php else : ?>
            <p>No team members found.</p>
        <?php endif; ?>

        <?php
        // Reset Post Data after WP_Query
        wp_reset_postdata();
        ?>

        <!-- <div class="col text-center">
                          <div class="card h-100 border-0">
                            <img src="assets/img/client-img-1.jpg" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                              <h4 class="card-title">Bashir Ahammed</h4>
                              <h5 class="text-secondary">Managing Director</h5>
                              <p class="card-text mt-4">Bashir Ahammedbrings his extensive leadership experience. With a visionary mindset and strong business acumen, he effectively manages the organization, driving growth and ensuring operational excellence.</p>
                            </div>
                            <div class="card-footer">
                              <small class="btn text-white">Read More</small>
                            </div>
                          </div>
                        </div> -->
        </div>
        <div class="advocacy-team">
            <h3 class="text-lg-start text-sm-center team-name roboto-medium">Our Advocacy Team</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col text-center">
                    <div class="card h-100 border-0">
                        <img src="assets/img/team-member.jpg" class="card-img-top mx-auto d-block" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Nasir Ahammed</h4>
                            <h5 class="text-secondary">Director of Strategic Partnerships and Advocacy</h5>
                            <p class="card-text mt-4">Have a question or legal issue? Raina Noor is an expert advocate with years of proven experience and success in and out of the courtroom. Contact us today.</p>
                        </div>
                        <div class="card-footer">
                            <small class="btn text-white">Read More</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="administration-team">
                <h3 class="text-lg-start text-sm-center team-name roboto-medium">Administration</h3>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col text-center">
                        <div class="card h-100 border-0">
                            <img src="assets/img/team-member-4.jpg" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Md. Hossain</h4>
                                <h5 class="text-secondary">Director of Communications</h5>
                                <p class="card-text mt-4">Have a question or legal issue? Raina Noor is an expert advocate with years of proven experience and success in and out of the courtroom. Contact us today.</p>
                            </div>
                            <div class="card-footer">
                                <small class="btn text-white">Read More</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php get_footer() ?>