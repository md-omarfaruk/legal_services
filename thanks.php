<?php

/**
 * Template Name: Thank You page
 */
get_header();
?>
<div class="my-5">
    <!-- ---------------------------Main-Contents-Start------------------------ -->

    <div class="thanks-title">
        <h1 class="text-center roboto-black">
            <?php echo get_theme_mod('thanks_page_hero_title', 'Thank You'); ?>
        </h1>
    </div>
    <div class="appointment-container bg-white roboto-medium">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-9 p-5 border rounded-3 shadow ">
                    <!-- -----------------------------Booked-Start----------------------- -->
                    <div class="booked text-center">
                        <i class="bi bi-patch-check-fill"></i>
                        <h5 class="my-4">Thank you for your submission!</h5>
                        <h6 class="text-secondary">Your Appointment Booked successfully!</h6>
                    </div>
                    <!-- -----------------------------Booked-End----------------------- -->

                </div>
            </div>
        </div>
    </div>
    <!-- -----------------------------Main-Contents-End----------------------- -->

</div>
<?php get_footer() ?>