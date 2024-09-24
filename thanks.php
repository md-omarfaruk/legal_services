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
            <?php echo get_theme_mod('thanks_page_hero_title'); ?>
            </h1>
        </div>
        <div class="appointment-container bg-white roboto-medium">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-9 p-5 border rounded-3 shadow ">
                     <!-- -----------------------------Booked-Start----------------------- -->
                      <div class="booked text-center">
                        <i class="bi bi-patch-check-fill"></i>
                        <h5 class="text-secondary">Booking ID: #31</h5>
                        <h6>Your Appointment Booked successfully!</h6>
                        <p class="text-secondary">We have sent your booking information to your email address.</p>
                        <div class="row mt-5">
                            <div class="col border-end">
                                <p class="text-secondary">Service:</p>
                                <h6>Appointment with Our Attorney
                                </h6>
                            </div>
                            <div class="col border-end">
                                <p class="text-secondary">Date & Time:</p>
                                <h6>16/09/2024 2:05 pm</h6>
                            </div>
                            <div class="col">
                                <p class="text-secondary">Customer Name:</p>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-secondary">Add to Calendar</h6>
                            <div class="row mt-3">                                       
                                <div class="col">
                                    <a class="d-flex align-items-center border px-3 py-1 rounded-2" href="#"><img src="assets/img/google-logo-6278331_1280.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                                    <p class="mb-0 ms-3 text-secondary">Google Calendar</p>
                                </a>
                                </div>
                                <div class="col">
                                    <a class="d-flex align-items-center border px-3 py-1 rounded-2" href="#"><img src="assets/img/yahoo-2815963_1280.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                                    <p class="mb-0 ms-3 text-secondary">Yahoo Calendar</p>
                                </a>
                                </div>
                                <div class="col">
                                    <a class="d-flex align-items-center border px-3 py-1 rounded-2" href="#"><img src="assets/img/microsoft-6536268_640.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                                    <p class="mb-0 ms-3 text-secondary">Outlook Calendar</p>
                                </a>
                                </div>
                                <div class="col">
                                    <a class="d-flex align-items-center border px-3 py-1 rounded-2" href="#"><img src="assets/img/19944341.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                                    <p class="mb-0 ms-3 text-secondary">iCal Calendar</p>
                                </a>
                                </div>
                            </div>
                        </div>
                      </div>
                     <!-- -----------------------------Booked-End----------------------- -->

                </div>
            </div>
        </div>
        </div>
                     <!-- -----------------------------Main-Contents-End----------------------- -->

</div>
<?php get_footer() ?>