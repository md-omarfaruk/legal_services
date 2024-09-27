<?php

/**
 * Template Name: Appointment Page
 */
get_header()
?>
        <!-- ---------------------------Main-Contents-Start------------------------ -->

        <div class="appointment-title">
            <h1 class="text-center roboto-black">
                <?php echo get_theme_mod('appointment_page_hero_title'); ?>
            </h1>
        </div>
        <div class="appointment-container bg-white roboto-medium">
            <div class="container py-5">
                <div class="row justify-content-between">
                    <div class="col-lg-2 appointment-details py-3 px-4 mx-3 border rounded-3 shadow">
                        <ul class="nav flex-column mt-4">
                        <li class="mb-3">
                            <a class="text-secondary" id="serviceItem" href="#service">
                                <i class="bi bi-view-stacked appointment-icon"></i>
                                Service
                            </a>
                        </li>
                        <li class="mb-3">
                            <a class="text-secondary" id="dateItem" href="#dateTime">
                                <i class="bi bi-calendar-week appointment-icon"></i>
                                Date & Time
                            </a>
                        </li>
                        <li class="mb-3">
                            <a class="text-secondary" id="basicItem" href="#basicDetails">
                                <i class="bi bi-journal-text appointment-icon"></i>
                                Basic Details
                            </a>
                        </li>
                        <li class="mb-3">
                            <a class="text-secondary" id="summaryItem" href="#summary">
                                <i class="bi bi-clipboard-check appointment-icon"></i>
                                Summary
                            </a>
                        </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 p-4 border rounded-3 shadow">
                        <!-- -----------------------------Service-part-Start---------------------------- -->
                        <div class="service" id="service">
                        <h6 class="my-3" id="serviceRequiredNote"><?php echo get_theme_mod('appointment_page_service_required_note'); ?></h6>
                            <h4><?php echo get_theme_mod('appointment_page_service_select_category_title'); ?></h4>
                            <a class="icon-link all-icon py-2 px-3 border rounded-2" href="#">
                                <?php echo get_theme_mod('appointment_page_service_all_text'); ?>
                                <i class="bi bi-check-circle-fill ms-2"></i>
                            </a>
                            <h5 class="my-3"><?php echo get_theme_mod('appointment_page_select_service_text'); ?></h5>
                            <div class="d-flex p-3 service-details rounded-3 position-relative"
                                id="selectService">
                                <div>
                                    <img src="<?php echo get_theme_file_uri('assets/img/client-img-1.jpg'); ?>" class="appointment-page-client-img border-0"
                                        alt="Adv Bashir Ahammed">
                                </div>
                                <div class="ms-3">
                                    <h5 id="appointWith"><?php echo get_theme_mod('appointment_page_attorney_text'); ?></h5>
                                    <h6><?php echo get_theme_mod('appointment_page_pay_before_text'); ?></h6>
                                    <p class="note"><?php echo get_theme_mod('appointment_page_service_section_note_text'); ?></p>
                                    <div class="d-flex">
                                        <p class="duration me-3"><?php echo get_theme_mod('appointment_page_service_section_duration_text'); ?>: <strong><?php echo get_theme_mod('appointment_page_service_section_duration_time_text'); ?></strong></p>
                                        <p class="price" id="price"><?php echo get_theme_mod('appointment_page_service_section_price_text'); ?>: <strong class="amount py-1 px-3 rounded-3"><?php echo get_theme_mod('appointment_page_service_section_price_amount_text'); ?></strong>
                                        </p>
                                    </div>
                                    <i class="bi bi-check-circle-fill service-details-icon position-absolulte"></i>
                                </div>
                            </div>
                            <div class="next-btn d-flex rounded-2 justify-content-end p-4 bg-body-secondary mt-5">
                                <a class="icon-link p-2 text-white rounded-3" id="serviceNextBtn">
                                    Next: <strong class="date-time">Date & Time</strong>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ---------------------------Service-Part-End------------------------ -->
                        <!-- -------------------------------Date-&-Time-Part-Start------------------------------ -->
                        <div class="date-time" id="dateTime">
                            <h6 class="my-3" id="dateTimeRequiredNote"><?php echo get_theme_mod('appointment_page_date_time_required_note'); ?></h6>
                            <h4><?php echo get_theme_mod('appointment_page_date_time_title'); ?></h4>
                            <div class="row mt-3">
                                <div class="col-12 calendar-body text-center">
                                        <label for="select-date"><?php echo get_theme_mod('appointment_page_select_date_time_text'); ?></label>
                                        <input type="date" id="select-date" name="select-date">
                                </div>
                                <div class="col-12 p-3 time-slot">
                                    <h5 class="mb-4"><?php echo get_theme_mod('appointment_page_time_slot_text'); ?></h5>
                                    <h6 class="slot-period"><?php echo get_theme_mod('appointment_page_date_time_morning_text'); ?></h6>
                                    <div class="times row mb-4 justify-content-between">
                                        <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                            <h5>10:35 am - 11:05 am</h5>
                                            <h6>0 Slots left</h6>
                                        </div>
                                        <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                            <h5>11:35 am - 12:05 am</h5>
                                            <h6>0 Slots left</h6>
                                        </div>
                                    </div>
                                    <h6 class="slot-period"><?php echo get_theme_mod('appointment_page_date_time_afternoon_text'); ?></h6>
                                    <div class="times row mb-4 justify-content-between">
                                        <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                            <h5>12:05 am - 12:35 am</h5>
                                            <h6>0 Slots left</h6>
                                        </div>
                                        <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                            <h5>12:35 am - 01:05 am</h5>
                                            <h6>0 Slots left</h6>
                                        </div>
                                        <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                            <h5>01:05 am - 01:35 am</h5>
                                            <h6>0 Slots left</h6>
                                        </div>
                                        <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                            <h5>01:35 am - 02:05 am</h5>
                                            <h6>0 Slots left</h6>
                                        </div>
                                        <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                            <h5>02:05 am - 02:35 am</h5>
                                            <h6>0 Slots left</h6>
                                        </div>
                                        <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                            <h5>02:35 am - 03:05 am</h5>
                                            <h6>0 Slots left</h6>
                                        </div>
                                    </div>
                                    <h6 class="slot-period"><?php echo get_theme_mod('appointment_page_date_time_evening_text'); ?></h6>
                                    <div class="times row mb-4 justify-content-between">
                                        <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                            <h5>03:05 am - 03:35 am</h5>
                                            <h6>0 Slots left</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row rounded-2 bg-body-secondary mt-5 p-4">
                                <div class="col go-back">
                                    <a class="icon-link p-2 text-black" id="dateTimeGoBackBtn" href="#">
                                        <i class="bi bi-arrow-left"></i>
                                        <strong class="date-time text-secondary">Go Back</strong>
                                    </a>
                                </div>
                                <div class="col next-btn text-md-end">
                                    <a class="icon-link p-2 text-white rounded-3" id="dateTimeNextBtn" href="#">
                                        Next: <strong class="date-time">Basic Details</strong>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- -------------------------------Date-&-Time-End------------------------------- -->
                        <form method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
    <div class="basic-details" id="basicDetails">
        <div class="row">
            <div class="col">
                <h4><?php echo get_theme_mod('appointment_page_basic_details_title'); ?></h4>
            </div>
            <div class="col text-lg-end">
                <label for="select-date"><?php echo get_theme_mod('appointment_page_pick_a_date_text'); ?></label>
                <input type="date" id="select-date" name="select_date">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="name" class="form-label"><?php echo get_theme_mod('appointment_page_your_full_name_label_text'); ?></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name">
            </div>
            <div class="row">
                <div class="col">
                    <label for="phone"><?php echo get_theme_mod('appointment_page_home_phone_label_text'); ?></label>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="+8801868787748">
                </div>
                <div class="col">
                    <label for="email"><?php echo get_theme_mod('appointment_page_email_address_label_text'); ?></label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                </div>
            </div>
            <div class="mb-3">
                <label for="adress" class="form-label"><?php echo get_theme_mod('appointment_page_address_label_text'); ?></label>
                <input type="text" class="form-control" id="adress" name="address" placeholder="Enter Your Address">
            </div>
            <!-- Add other form fields similarly -->
        </div>
    </div>
    <!-- Summary Section -->
    <div class="summary" id="summary">
        <h4 class="text-center mt-4"><?php echo get_theme_mod('appointment_page_summary_title'); ?></h4>
        <div class="row">
            <div class="col">
                <h6 id="summaryAppointWith" name="summaryAppointWith"></h6>
            </div>
            <div class="col">
                <h6><span id="summaryDate"></span>, <span id="summaryTime"></span></h6>
            </div>
        </div>
    </div>
    <!-- Submit Button -->
    <div class="row">
        <div class="col next-btn text-md-end">
            <button type="submit" class="btn btn-primary" name="action" value="submit_appointment">Book Appointment</button>
        </div>
    </div>
</form>


                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------Main-Contents-End------------------------ -->
<?php get_footer() ?>