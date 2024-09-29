<?php

/**
 * Template Name: Appointment Page
 */
get_header()
?>
<!-- ---------------------------Main-Contents-Start------------------------ -->

<div class="appointment-title">
    <h1 class="text-center roboto-black">
        <?php echo get_theme_mod('appointment_page_hero_title', 'Book an Appointment'); ?>
    </h1>
</div>
<div class="appointment-container bg-white roboto-medium">
    <div class="container py-5">
        <div class="row justify-content-between">
            <div class="col-lg-2 appointment-details py-3 px-4 mx-3 my-5 border rounded-3 shadow">
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
                    <h6 class="my-3" id="serviceRequiredNote"><?php echo get_theme_mod('appointment_page_service_required_note', 'Please select any service to book an appointment'); ?></h6>
                    <h4><?php echo get_theme_mod('appointment_page_service_select_category_title', 'Select Category'); ?></h4>
                    <a class="icon-link all-icon py-2 px-3 border rounded-2" href="#">
                        <?php echo get_theme_mod('appointment_page_service_all_text', 'All'); ?>
                        <i class="bi bi-check-circle-fill ms-2"></i>
                    </a>
                    <h5 class="my-3"><?php echo get_theme_mod('appointment_page_select_service_text', 'Select Service'); ?></h5>
                    <div class="d-flex p-3 service-details rounded-3 position-relative"
                        id="selectService">
                        <div>
                            <img src="<?php echo get_theme_mod('appointment_page_service_attorney_img',  get_template_directory_uri() . '/assets/img/client-img-1.jpg'); ?>" class="appointment-page-client-img border-0"
                                alt="Adv Bashir Ahammed">
                        </div>
                        <div class="ms-3">
                            <h5 id="appointWith"><?php echo get_theme_mod('appointment_page_attorney_text', 'Appointment with Our Attorney'); ?></h5>
                            <h6><?php echo get_theme_mod('appointment_page_pay_before_text'); ?></h6>
                            <p class="note"><?php echo get_theme_mod('appointment_page_service_section_note_text', 'Note: Please note that if anyone wishes to cancel a scheduled
                                        appointment after
                                        it is paid and confirmed, Appointment Fee (Non Refundable )'); ?></p>
                            <div class="d-flex">
                                <p class="duration me-3"><?php echo get_theme_mod('appointment_page_service_section_duration_text', 'Duration'); ?>: <strong><?php echo get_theme_mod('appointment_page_service_section_duration_time_text', '30m'); ?></strong></p>
                                <p class="price" id="price"><?php echo get_theme_mod('appointment_page_service_section_price_text', 'Price'); ?>: <strong class="amount py-1 px-3 rounded-3"><?php echo get_theme_mod('appointment_page_service_section_price_amount_text', '100$'); ?></strong>
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
                    <h6 class="my-3" id="dateTimeRequiredNote"><?php echo get_theme_mod('appointment_page_date_time_required_note', 'Please select a time slot to proceed with the booking.'); ?></h6>
                    <h4><?php echo get_theme_mod('appointment_page_date_time_title', 'Date & Time'); ?></h4>
                    <div class="row mt-3">
                        <div class="col-12 calendar-body text-center">
                            <label for="select-date"><?php echo get_theme_mod('appointment_page_select_date_time_text', 'Select Your Date:'); ?></label>
                            <input type="date" id="select-date" name="select-date">
                        </div>
                        <div class="col-12 p-3 time-slot">
                            <h5 class="mb-4"><?php echo get_theme_mod('appointment_page_time_slot_text', 'Time Slot'); ?></h5>
                            <h6 class="slot-period"><?php echo get_theme_mod('appointment_page_date_time_morning_text', 'Morning'); ?></h6>
                            <div class="times row mb-4 justify-content-between">
                                <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                    <h5><?php echo get_theme_mod('appointment_page_morning_slot_time_one_text', '10:35 am - 11:05 am'); ?></h5>
                                    <h6><?php echo get_theme_mod('appointment_page_morning_available_slots_for_one_text', '1 Slots left'); ?></h6>
                                </div>
                                <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                    <h5><?php echo get_theme_mod('appointment_page_morning_slot_time_two_text', '11:35 am - 12:05pm'); ?></h5>
                                    <h6><?php echo get_theme_mod('appointment_page_morning_available_slots_for_two_text', '1 Slots left'); ?></h6>
                                </div>
                            </div>
                            <h6 class="slot-period"><?php echo get_theme_mod('appointment_page_date_time_afternoon_text', 'Afternoon'); ?></h6>
                            <div class="times row mb-4 justify-content-between">
                                <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                    <h5><?php echo get_theme_mod('appointment_page_afternoon_slot_time_one_text', '12:05 pm - 12:35 pm');?></h5>
                                    <h6><?php echo get_theme_mod('appointment_page_afternoon_available_slots_for_one_text', '1 Slots left');?></h6>
                                </div>
                                <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                    <h5><?php echo get_theme_mod('appointment_page_afternoon_slot_time_two_text', '12:35 pm - 01:05 pm');?></h5>
                                    <h6><?php echo get_theme_mod('appointment_page_afternoon_available_slots_for_two_text', '1 Slots left');?></h6>
                                </div>
                                <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                    <h5><?php echo get_theme_mod('appointment_page_afternoon_slot_time_three_text', '01:05 pm - 01:35 pm');?></h5>
                                    <h6><?php echo get_theme_mod('appointment_page_afternoon_available_slots_for_three_text', '1 Slots left');?></h6>
                                </div>
                                <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                    <h5><?php echo get_theme_mod('appointment_page_afternoon_slot_time_four_text', '01:35 pm - 02:05 pm');?></h5>
                                    <h6><?php echo get_theme_mod('appointment_page_afternoon_available_slots_for_four_text', '1 Slots left');?></h6>
                                </div>
                                <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                    <h5><?php echo get_theme_mod('appointment_page_afternoon_slot_time_five_text', '02:05 pm - 02:35 pm');?></h5>
                                    <h6><?php echo get_theme_mod('appointment_page_afternoon_available_slots_for_five_text', '1 Slots left');?></h6>
                                </div>
                                <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                    <h5><?php echo get_theme_mod('appointment_page_afternoon_slot_time_six_text', '02:35 pm - 03:05 pm');?></h5>
                                    <h6><?php get_theme_mod('appointment_page_afternoon_available_slots_for_six_text', '1 Slots left');?></h6>
                                </div>
                            </div>
                            <h6 class="slot-period"><?php echo get_theme_mod('appointment_page_date_time_evening_text'); ?></h6>
                            <div class="times row mb-4 justify-content-between">>
                                <div class="col-5 mb-2 py-2 px-3 rounded-2 slot">
                                    <h5><?php echo get_theme_mod('appointment_page_evening_slot_time_one_text', '03:05 pm - 03:35 pm');?></h5>
                                    <h6><?php echo get_theme_mod('appointment_page_evening_available_slots_for_six_text', '1 Slots left');?></h6>
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
                <!-- -------------------------------Basic-Details-Start------------------------------- -->
                <form method="POST" action="">

                    <div class="basic-details" id="basicDetails">
                        <div class="row">
                            <div class="col">
                                <h4><?php echo get_theme_mod('appointment_page_basic_details_title', 'Basic Details'); ?></h4>
                            </div>
                            <div class="col text-lg-end">
                                <label for="select-date"><?php echo get_theme_mod('appointment_page_pick_a_date_text', 'Pick a Date:'); ?></label>
                                <input type="date" id="select-date" name="select-date">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="name" class="form-label"><?php echo get_theme_mod('appointment_page_your_full_name_label_text', 'Your Full Name'); ?></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Your Full Name">
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="col">
                                        <label for="phone"><?php echo get_theme_mod('appointment_page_home_phone_label_text', 'Home Phone'); ?></label>
                                        <input type="tel" id="phone" name="phone" class="form-control"
                                            placeholder="+8801868787748" aria-label="Phone">
                                    </div>
                                    <div class="col">
                                        <label for="email"><?php echo get_theme_mod('appointment_page_email_address_label_text', 'Email Address'); ?></label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Enter Your Email Address" aria-label="Email Address">
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="textarea"><?php echo get_theme_mod('appointment_page_your_details_label_text', 'Enter Your Details Here'); ?>:</label>
                                    <textarea id="textarea" name="textarea" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label"><?php echo get_theme_mod('appointment_page_address_label_text', 'Address'); ?></label>
                                    <input type="text" class="form-control" id="adress" name="address"
                                        placeholder="Enter Your Address">
                                </div>
                                <div class="mb-3">
                                    <label for="tel" class="form-label"><?php echo get_theme_mod('appointment_page_cell_number_label_text', 'Cell Number'); ?><sup class="text-danger fs-6">*</sup></label>
                                    <input type="tel" class="form-control" id="tel" name="tel"
                                        placeholder="Enter Your Cell Number" required>
                                    <p id="required"><small class="text-danger"><?php echo get_theme_mod('appointment_page_cell_number_required_note_text', 'This field can not be blank'); ?></small></p>
                                </div>
                                <h6 class="ms-32"><?php echo get_theme_mod('appointment_page_consultaion_fee_paid_label_text', 'Consultation fee Paid'); ?></h6>
                                <div class="d-flex">
                                    <div class="form-check ms-2">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio"
                                            value="Yes">Yes
                                        <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check ms-2">
                                        <input type="radio" class="form-check-input" id="radio2" name="optradio"
                                            value="No">No
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="personName"></label>
                                        <textarea class="form-control" rows="5" id="personName"
                                            name="personName"><?php echo get_theme_mod('appointment_page_referred_person_name_label_text', 'Enter Referred Person Name'); ?></textarea>
                                    </div>
                                    <div class="col">
                                        <label for="referredTel" class="form-label"></label>
                                        <input type="tel" name="referredTel" class="form-control" id="referredTel"
                                            placeholder="<?php echo get_theme_mod('appointment_page_referred_person_name_label_text', 'Enter Referred Number'); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row rounded-2 bg-body-secondary mt-5 p-4">
                            <div class="col go-back">
                                <a class="icon-link p-2 text-black" id="basicDetailsGoBackBtn" href="#">
                                    <i class="bi bi-arrow-left"></i>
                                    <strong class="date-time text-secondary">Go Back</strong>
                                </a>
                            </div>
                            <div class="col next-btn text-md-end">
                                <a type="submit" class="btn icon-link p-2 text-white rounded-3" id="basicDetailsNextBtn" href="#">
                                    Next: <strong class="date-time">Summary</strong>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                <!-- -------------------------------Basic-Details-End------------------------------- -->
                <!-- -------------------------------Summary-Part-Start------------------------------- -->
                <div class="summary" id="summary">
                    <svg width="137" height="99" viewBox="0 0 137 99" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="bpa-head__vector mx-auto d-block">
                        <path
                            d="M15.8625 62.0651H97.6116C98.7623 62.0661 99.8656 62.5237 100.679 63.3374C101.493 64.1511 101.951 65.2543 101.952 66.4051V79.6535C101.951 80.8042 101.493 81.9075 100.679 82.7212C99.8656 83.5349 98.7623 83.9924 97.6116 83.9935H15.8625C14.7117 83.9924 13.6085 83.5349 12.7948 82.7212C11.9811 81.9075 11.5235 80.8042 11.5225 79.6535V66.4051C11.5235 65.2543 11.9811 64.1511 12.7948 63.3374C13.6085 62.5237 14.7117 62.0661 15.8625 62.0651Z"
                            fill="#E9EDF5"></path>
                        <path
                            d="M15.7854 30.7217H97.5345C98.6852 30.7227 99.7885 31.1803 100.602 31.994C101.416 32.8077 101.873 33.911 101.875 35.0617V48.3101C101.873 49.4608 101.416 50.5641 100.602 51.3778C99.7885 52.1915 98.6852 52.6491 97.5345 52.6501H15.7854C14.6346 52.6491 13.5313 52.1915 12.7177 51.3778C11.904 50.5641 11.4464 49.4608 11.4454 48.3101V35.0617C11.4464 33.911 11.904 32.8077 12.7177 31.994C13.5313 31.1803 14.6346 30.7227 15.7854 30.7217ZM11.9022 48.3101C11.9037 49.3395 12.3133 50.3264 13.0412 51.0543C13.7691 51.7822 14.7559 52.1918 15.7854 52.1933H97.5345C98.5639 52.1918 99.5508 51.7822 100.279 51.0543C101.007 50.3264 101.416 49.3395 101.418 48.3101V35.0617C101.416 34.0322 101.007 33.0454 100.279 32.3175C99.5508 31.5896 98.5639 31.18 97.5345 31.1785H15.7854C14.7559 31.18 13.7691 31.5896 13.0412 32.3175C12.3133 33.0454 11.9037 34.0322 11.9022 35.0617V48.3101Z"
                            fill="#535D71"></path>
                        <path
                            d="M26.9395 47.8533H66.2023C66.687 47.8533 67.1517 47.6608 67.4944 47.3181C67.8371 46.9754 68.0297 46.5106 68.0297 46.026C68.0297 45.5413 67.8371 45.0765 67.4944 44.7338C67.1517 44.3911 66.687 44.1986 66.2023 44.1986H26.9395C26.4548 44.1986 25.99 44.3911 25.6473 44.7338C25.3046 45.0765 25.1121 45.5413 25.1121 46.026C25.1121 46.5106 25.3046 46.9754 25.6473 47.3181C25.99 47.6608 26.4548 47.8533 26.9395 47.8533Z"
                            fill="#E9EDF5"></path>
                        <path
                            d="M53.2079 40.0871H66.2023C66.687 40.0871 67.1517 39.8946 67.4944 39.5519C67.8371 39.2092 68.0297 38.7444 68.0297 38.2597C68.0297 37.7751 67.8371 37.3103 67.4944 36.9676C67.1517 36.6249 66.687 36.4324 66.2023 36.4324H53.2079C52.7232 36.4324 52.2584 36.6249 51.9157 36.9676C51.573 37.3103 51.3805 37.7751 51.3805 38.2597C51.3805 38.7444 51.573 39.2092 51.9157 39.5519C52.2584 39.8946 52.7232 40.0871 53.2079 40.0871Z"
                            fill="#E9EDF5"></path>
                        <path
                            d="M80.8983 49.24C82.3923 49.24 83.8527 48.797 85.095 47.9669C86.3372 47.1369 87.3054 45.9572 87.8771 44.5769C88.4489 43.1966 88.5985 41.6778 88.307 40.2125C88.0155 38.7472 87.2961 37.4012 86.2397 36.3448C85.1833 35.2884 83.8373 34.5689 82.372 34.2775C80.9067 33.986 79.3879 34.1356 78.0076 34.7073C76.6274 35.2791 75.4476 36.2472 74.6176 37.4895C73.7876 38.7317 73.3445 40.1921 73.3445 41.6861C73.3468 43.6888 74.1434 45.6088 75.5595 47.025C76.9756 48.4411 78.8956 49.2377 80.8983 49.24Z"
                            class="bpa-head__vector-item"></path>
                        <path
                            d="M79.7164 44.3433C79.529 44.3436 79.3466 44.283 79.1966 44.1705L79.1874 44.1636L77.2295 42.6659C77.1386 42.5964 77.0623 42.5098 77.005 42.4108C76.9476 42.3118 76.9103 42.2025 76.8953 42.0892C76.8802 41.9758 76.8877 41.8606 76.9172 41.7501C76.9467 41.6396 76.9977 41.536 77.0673 41.4452C77.1369 41.3544 77.2237 41.2783 77.3227 41.2211C77.4218 41.1639 77.5311 41.1268 77.6445 41.1119C77.7579 41.097 77.8731 41.1046 77.9836 41.1343C78.094 41.164 78.1976 41.2152 78.2882 41.2849L79.5564 42.2574L82.553 38.3479C82.6225 38.2572 82.7092 38.1812 82.8081 38.124C82.9069 38.0669 83.0161 38.0298 83.1293 38.0148C83.2426 37.9999 83.3576 38.0073 83.468 38.0369C83.5783 38.0664 83.6817 38.1173 83.7724 38.1868L83.7726 38.187L83.754 38.2128L83.7731 38.187C83.956 38.3276 84.0756 38.5349 84.1058 38.7635C84.1359 38.9922 84.0742 39.2234 83.934 39.4066L80.4092 44.003C80.3277 44.1089 80.2229 44.1946 80.1028 44.2534C79.9828 44.3122 79.8509 44.3427 79.7172 44.3423L79.7164 44.3433Z"
                            fill="white"></path>
                        <path
                            d="M50.9109 66.3674H132.66C133.811 66.3685 134.914 66.8261 135.728 67.6397C136.541 68.4534 136.999 69.5567 137 70.7074V83.9558C136.999 85.1066 136.541 86.2099 135.728 87.0235C134.914 87.8372 133.811 88.2948 132.66 88.2958H50.9109C49.7601 88.2948 48.6568 87.8372 47.8432 87.0235C47.0295 86.2099 46.5719 85.1066 46.5709 83.9558V70.7074C46.5719 69.5567 47.0295 68.4534 47.8432 67.6397C48.6568 66.8261 49.7601 66.3685 50.9109 66.3674Z"
                            fill="white"></path>
                        <path
                            d="M50.9109 66.3674H132.66C133.811 66.3685 134.914 66.8261 135.728 67.6397C136.541 68.4534 136.999 69.5567 137 70.7074V83.9558C136.999 85.1066 136.541 86.2099 135.728 87.0235C134.914 87.8372 133.811 88.2948 132.66 88.2958H50.9109C49.7601 88.2948 48.6568 87.8372 47.8432 87.0235C47.0295 86.2099 46.5719 85.1066 46.5709 83.9558V70.7074C46.5719 69.5567 47.0295 68.4534 47.8432 67.6397C48.6568 66.8261 49.7601 66.3685 50.9109 66.3674ZM47.0277 83.9558C47.0292 84.9853 47.4388 85.9721 48.1667 86.7001C48.8946 87.428 49.8814 87.8375 50.9109 87.839H132.66C133.689 87.8375 134.676 87.428 135.404 86.7001C136.132 85.9721 136.542 84.9853 136.543 83.9558V70.7074C136.542 69.678 136.132 68.6911 135.404 67.9632C134.676 67.2353 133.689 66.8257 132.66 66.8243H50.9109C49.8814 66.8257 48.8946 67.2353 48.1667 67.9632C47.4388 68.6911 47.0292 69.678 47.0277 70.7074V83.9558Z"
                            fill="#535D71"></path>
                        <path
                            d="M62.0646 83.4989H101.327C101.812 83.4989 102.277 83.3063 102.62 82.9636C102.962 82.6209 103.155 82.1561 103.155 81.6715C103.155 81.1868 102.962 80.722 102.62 80.3793C102.277 80.0366 101.812 79.8441 101.327 79.8441H62.0646C61.58 79.8441 61.1152 80.0366 60.7725 80.3793C60.4298 80.722 60.2373 81.1868 60.2373 81.6715C60.2373 82.1561 60.4298 82.6209 60.7725 82.9636C61.1152 83.3063 61.58 83.4989 62.0646 83.4989Z"
                            fill="#E9EDF5"></path>
                        <path
                            d="M88.3324 75.7326H101.327C101.567 75.7326 101.804 75.6854 102.026 75.5935C102.248 75.5017 102.449 75.3671 102.619 75.1974C102.789 75.0277 102.923 74.8263 103.015 74.6046C103.107 74.3829 103.154 74.1452 103.154 73.9052C103.154 73.6653 103.107 73.4277 103.015 73.2059C102.923 72.9842 102.789 72.7828 102.619 72.6131C102.449 72.4434 102.248 72.3088 102.026 72.217C101.804 72.1252 101.567 72.0779 101.327 72.0779H88.3324C87.8478 72.0779 87.383 72.2704 87.0403 72.6131C86.6976 72.9558 86.5051 73.4206 86.5051 73.9052C86.5051 74.3899 86.6976 74.8547 87.0403 75.1974C87.383 75.5401 87.8478 75.7326 88.3324 75.7326Z"
                            fill="#E9EDF5"></path>
                        <path
                            d="M116.024 84.8853C117.518 84.8854 118.978 84.4423 120.22 83.6123C121.463 82.7823 122.431 81.6026 123.002 80.2223C123.574 78.842 123.724 77.3232 123.432 75.8579C123.141 74.3926 122.421 73.0466 121.365 71.9902C120.309 70.9338 118.963 70.2143 117.497 69.9229C116.032 69.6314 114.513 69.781 113.133 70.3527C111.753 70.9244 110.573 71.8926 109.743 73.1348C108.913 74.3771 108.47 75.8375 108.47 77.3315C108.472 79.3342 109.269 81.2542 110.685 82.6704C112.101 84.0865 114.021 84.8831 116.024 84.8853Z"
                            class="bpa-head__vector-item"></path>
                        <path
                            d="M114.842 79.9884C114.654 79.9887 114.472 79.9281 114.322 79.8157L114.313 79.8087L112.355 78.311C112.264 78.2416 112.188 78.1549 112.13 78.0559C112.073 77.957 112.036 77.8477 112.021 77.7343C112.006 77.6209 112.013 77.5057 112.043 77.3952C112.072 77.2847 112.123 77.1811 112.193 77.0903C112.262 76.9996 112.349 76.9234 112.448 76.8662C112.547 76.809 112.656 76.7719 112.77 76.757C112.883 76.7421 112.998 76.7498 113.109 76.7795C113.219 76.8091 113.323 76.8603 113.414 76.93L114.682 77.9025L117.678 73.993C117.748 73.9024 117.835 73.8263 117.933 73.7692C118.032 73.712 118.141 73.6749 118.255 73.66C118.368 73.645 118.483 73.6525 118.593 73.682C118.704 73.7115 118.807 73.7625 118.898 73.832L118.879 73.858L118.898 73.8322C119.081 73.9727 119.201 74.18 119.231 74.4087C119.261 74.6373 119.2 74.8686 119.059 75.0517L115.535 79.6481C115.453 79.754 115.348 79.8397 115.228 79.8985C115.108 79.9574 114.976 79.9878 114.843 79.9874L114.842 79.9884Z"
                            fill="white"></path>
                        <path
                            d="M32.7836 98.9999H0.260187C0.191181 98.9999 0.124997 98.9725 0.0762029 98.9237C0.0274083 98.8749 0 98.8087 0 98.7397C0 98.6707 0.0274083 98.6045 0.0762029 98.5557C0.124997 98.5069 0.191181 98.4795 0.260187 98.4795H32.7836C32.8526 98.4795 32.9188 98.5069 32.9676 98.5557C33.0164 98.6045 33.0438 98.6707 33.0438 98.7397C33.0438 98.8087 33.0164 98.8749 32.9676 98.9237C32.9188 98.9725 32.8526 98.9999 32.7836 98.9999Z"
                            fill="#202C45"></path>
                        <path
                            d="M28.0083 17.5336C27.7067 17.724 27.4505 17.9782 27.2577 18.2783C27.065 18.5784 26.9404 18.9171 26.8927 19.2706C26.845 19.624 26.8754 19.9837 26.9818 20.3241C27.0881 20.6646 27.2678 20.9776 27.5082 21.2411L25.1438 26.2902L27.8616 28.4754L31.1005 21.2982C31.5164 20.865 31.759 20.2943 31.7822 19.6943C31.8054 19.0942 31.6077 18.5064 31.2266 18.0424C30.8454 17.5784 30.3073 17.2702 29.7141 17.1765C29.121 17.0827 28.514 17.2097 28.0083 17.5336V17.5336Z"
                            fill="#FFB8B8"></path>
                        <path
                            d="M14.4212 19.5826C15.1694 19.1331 16.062 18.9889 16.9138 19.1798C17.7656 19.3708 18.5112 19.8822 18.996 20.6081L23.8341 27.8524L25.5138 24.1495C25.6186 23.9183 25.8044 23.7334 26.0361 23.6296C26.2679 23.5258 26.5295 23.5103 26.7719 23.586L29.307 24.3779C29.4394 24.4193 29.5622 24.4867 29.6682 24.5763C29.7742 24.6658 29.8613 24.7756 29.9242 24.8993C29.9871 25.023 30.0247 25.158 30.0347 25.2964C30.0447 25.4348 30.0269 25.5737 29.9824 25.7052L28.2471 30.8294C28.0275 31.4776 27.6608 32.0661 27.1755 32.5487C26.6903 33.0313 26.0998 33.3948 25.4505 33.6108C24.8011 33.8268 24.1105 33.8894 23.4329 33.7935C22.7552 33.6977 22.1091 33.4461 21.545 33.0586C21.2815 32.8774 21.0383 32.6683 20.8198 32.4348L13.69 24.8167C13.3438 24.4468 13.0847 24.0041 12.9317 23.521C12.7787 23.038 12.7356 22.5269 12.8057 22.0251C12.8758 21.5233 13.0573 21.0435 13.3368 20.6209C13.6163 20.1982 13.9868 19.8435 14.4212 19.5826Z"
                            fill="#CFD6E6"></path>
                        <path
                            d="M30.0722 12.0974C30.202 12.1007 30.3253 12.1553 30.4148 12.2495C30.5044 12.3436 30.5529 12.4694 30.5496 12.5992L30.5079 14.2807L30.5922 14.2884L30.5619 15.4305L30.4796 15.4202L30.3299 21.4442C30.3248 21.6503 30.2449 21.8476 30.105 21.9992C29.9651 22.1507 29.7749 22.2462 29.5697 22.2678L25.7393 22.6711C25.6461 22.6809 25.5518 22.6702 25.4631 22.6397C25.3744 22.6092 25.2935 22.5597 25.2259 22.4947C25.1584 22.4296 25.1059 22.3506 25.0721 22.2631C25.0384 22.1756 25.0242 22.0818 25.0305 21.9882L25.6115 13.4105C25.6237 13.2303 25.6968 13.0597 25.8189 12.9266C25.9409 12.7935 26.1046 12.7059 26.283 12.6782L29.9808 12.1037C30.011 12.0988 30.0416 12.0967 30.0722 12.0974Z"
                            fill="#202C45"></path>
                        <path
                            d="M27.1076 12.9902L29.0515 12.6882C29.0865 12.6827 29.1187 12.6659 29.1432 12.6403C29.1677 12.6147 29.183 12.5818 29.1869 12.5466C29.1912 12.5067 29.2086 12.4694 29.2363 12.4404C29.264 12.4114 29.3005 12.3923 29.3401 12.3862L29.7496 12.3226C29.8055 12.3139 29.8626 12.3176 29.9169 12.3334C29.9712 12.3492 30.0214 12.3767 30.0638 12.414C30.1063 12.4513 30.1401 12.4975 30.1628 12.5493C30.1856 12.601 30.1966 12.6572 30.1953 12.7137L29.9848 21.4474C29.9822 21.5558 29.9397 21.6594 29.8656 21.7385C29.7915 21.8176 29.6908 21.8667 29.5828 21.8762L25.7552 22.2166C25.7064 22.2209 25.6572 22.2146 25.611 22.1982C25.5648 22.1818 25.5227 22.1556 25.4875 22.1215C25.4524 22.0873 25.425 22.0459 25.4073 22.0002C25.3896 21.9545 25.382 21.9055 25.385 21.8566L25.9014 13.3581C25.9091 13.2329 25.9593 13.1141 26.0437 13.0213C26.1282 12.9286 26.2418 12.8675 26.3658 12.8483L26.7975 12.7812C26.8133 12.8487 26.8541 12.9077 26.9116 12.9464C26.9691 12.9852 27.0391 13.0008 27.1076 12.9902Z"
                            fill="white"></path>
                        <path
                            d="M18.0885 95.8415L21.063 95.8413L22.4776 84.368L18.0875 84.3686L18.0885 95.8415Z"
                            fill="#FFB8B8"></path>
                        <path
                            d="M26.8003 98.603L17.4519 98.6039L17.4515 94.992L23.1881 94.9914C23.6624 94.9914 24.1321 95.0848 24.5703 95.2663C25.0086 95.4477 25.4068 95.7137 25.7422 96.0491C26.0776 96.3845 26.3437 96.7826 26.5253 97.2208C26.7068 97.659 26.8003 98.1287 26.8003 98.603L26.8003 98.603Z"
                            fill="#202C45"></path>
                        <path
                            d="M8.94684 95.8415L11.9213 95.8413L13.3359 84.368L8.9458 84.3686L8.94684 95.8415Z"
                            fill="#FFB8B8"></path>
                        <path
                            d="M17.6581 98.603L8.30959 98.6039L8.30927 94.992L14.0458 94.9914C15.0038 94.9914 15.9225 95.3718 16.5999 96.0491C17.2773 96.7264 17.658 97.6451 17.6581 98.603L17.6581 98.603Z"
                            fill="#202C45"></path>
                        <path
                            d="M17.6582 15.6833C21.1875 15.6833 24.0486 12.8222 24.0486 9.29281C24.0486 5.76345 21.1875 2.90234 17.6582 2.90234C14.1288 2.90234 11.2677 5.76345 11.2677 9.29281C11.2677 12.8222 14.1288 15.6833 17.6582 15.6833Z"
                            fill="#FFB8B8"></path>
                        <path
                            d="M20.9469 26.3904C20.8947 24.7474 20.4322 23.1436 19.6014 21.7251C18.7707 20.3067 17.5982 19.1187 16.1908 18.2694C14.5398 17.2965 12.7327 16.9171 11.295 18.3548C10.4317 19.2397 9.74034 20.2774 9.25615 21.4149C7.92622 24.5147 7.83921 28.0072 9.01314 31.1694L12.435 40.623L20.3549 41.481C20.5036 41.4971 20.6541 41.481 20.7961 41.4337C20.938 41.3863 21.0681 41.309 21.1775 41.2068C21.2868 41.1047 21.3728 40.9802 21.4297 40.8417C21.4865 40.7033 21.5129 40.5543 21.5069 40.4048L20.9469 26.3904Z"
                            fill="#535D71"></path>
                        <path
                            d="M12.9372 39.4589C12.9372 39.4589 7.02024 41.6678 8.56723 51.0212C9.95541 59.4144 8.85224 87.273 8.61112 92.9044C8.59964 93.1728 8.6925 93.4352 8.87023 93.6367C9.04796 93.8382 9.29678 93.963 9.56452 93.9851L13.0185 94.2729C13.289 94.2955 13.5577 94.2114 13.7671 94.0387C13.9765 93.866 14.1102 93.6183 14.1396 93.3484L15.9234 76.9635C15.9304 76.8992 15.9611 76.8398 16.0095 76.7969C16.0579 76.754 16.1206 76.7307 16.1852 76.7314C16.2499 76.7322 16.312 76.7571 16.3593 76.8011C16.4067 76.8452 16.4359 76.9053 16.4413 76.9698L17.7706 92.7359C17.7929 93.0015 17.9164 93.2484 18.1155 93.4257C18.3146 93.603 18.5741 93.6971 18.8405 93.6887L21.7417 93.5969C21.8784 93.5926 22.0129 93.5613 22.1375 93.505C22.2622 93.4486 22.3745 93.3683 22.468 93.2685C22.5616 93.1687 22.6345 93.0514 22.6827 92.9234C22.7309 92.7954 22.7534 92.6592 22.7489 92.5225L21.04 40.5514L12.9372 39.4589Z"
                            fill="#535D71"></path>
                        <path
                            d="M18.9407 8.8717C21.0779 9.74826 23.8073 8.72431 24.8406 6.65829C25.874 4.59227 25.0562 1.79419 23.0729 0.609824C21.0896 -0.574543 18.2383 0.0325306 16.9095 1.9221C15.8286 -0.0252986 12.9969 -0.521775 11.0526 0.564842C9.10839 1.65146 8.04938 3.92749 7.92378 6.15122C7.79818 8.37495 8.47424 10.5656 9.29896 12.6346C10.633 15.9813 14.9276 17.7833 18.2502 16.3905C16.7291 14.125 17.0294 10.8096 18.9407 8.8717Z"
                            fill="#202C45"></path>
                        <path
                            d="M27.5531 18.3085C27.4963 18.3086 27.4409 18.2902 27.3954 18.256L27.3926 18.2539L26.7984 17.7994C26.7709 17.7783 26.7478 17.752 26.7304 17.722C26.7131 17.6919 26.7018 17.6588 26.6973 17.6244C26.6927 17.5901 26.695 17.5551 26.704 17.5216C26.7129 17.4881 26.7284 17.4567 26.7495 17.4292C26.7706 17.4017 26.7969 17.3786 26.8269 17.3612C26.857 17.3439 26.8901 17.3326 26.9245 17.3281C26.9589 17.3235 26.9938 17.3258 27.0273 17.3348C27.0608 17.3437 27.0922 17.3592 27.1197 17.3803L27.5045 17.6754L28.414 16.489C28.4351 16.4615 28.4614 16.4384 28.4914 16.421C28.5214 16.4037 28.5545 16.3924 28.5889 16.3879C28.6232 16.3834 28.6582 16.3856 28.6916 16.3946C28.7251 16.4035 28.7565 16.419 28.784 16.4401L28.7841 16.4402L28.7784 16.448L28.7842 16.4402C28.8397 16.4828 28.876 16.5457 28.8852 16.6151C28.8943 16.6845 28.8756 16.7547 28.8331 16.8103L27.7634 18.2052C27.7386 18.2373 27.7068 18.2633 27.6704 18.2812C27.634 18.299 27.5939 18.3082 27.5534 18.3081L27.5531 18.3085Z"
                            class="bpa-head__vector-item"></path>
                        <path
                            d="M25.5268 30.6751C25.1983 30.5362 24.8433 30.471 24.4869 30.4841C24.1305 30.4972 23.7812 30.5882 23.4638 30.7509C23.1464 30.9136 22.8685 31.1438 22.6497 31.4255C22.4309 31.7072 22.2765 32.0334 22.1974 32.3812L16.7021 33.3226L16.4597 36.8016L24.2014 35.3632C24.7945 35.4573 25.4015 35.3306 25.9074 35.0071C26.4133 34.6836 26.783 34.1857 26.9464 33.6079C27.1098 33.03 27.0555 32.4123 26.7938 31.8718C26.5322 31.3312 26.0814 30.9055 25.5268 30.6751L25.5268 30.6751Z"
                            fill="#FFB8B8"></path>
                        <path
                            d="M16.0873 20.6895C16.8836 21.0473 17.5116 21.6978 17.8411 22.5061C18.1706 23.3144 18.1764 24.2186 17.8572 25.031L14.6718 33.139L18.6708 32.404C18.9205 32.3581 19.1784 32.4051 19.3959 32.5361C19.6134 32.667 19.7755 32.873 19.8517 33.1152L20.6489 35.6486C20.6905 35.781 20.7053 35.9203 20.6923 36.0585C20.6793 36.1966 20.6388 36.3308 20.5732 36.453C20.5076 36.5753 20.4182 36.6832 20.3103 36.7705C20.2024 36.8577 20.0781 36.9224 19.9448 36.9609L14.7471 38.4617C14.0896 38.6515 13.397 38.6864 12.7238 38.5635C12.0505 38.4407 11.4149 38.1635 10.8668 37.7536C10.3188 37.3438 9.87314 36.8125 9.56495 36.2015C9.25676 35.5905 9.09439 34.9163 9.09058 34.232C9.0888 33.9122 9.12167 33.5931 9.18861 33.2804L11.3726 23.0775C11.4787 22.582 11.6942 22.1166 12.0034 21.7152C12.3127 21.3138 12.7077 20.9867 13.1597 20.7577C13.6118 20.5288 14.1093 20.4038 14.6158 20.392C15.1224 20.3802 15.6251 20.4819 16.0873 20.6895Z"
                            fill="#CFD6E6"></path>
                    </svg>
                    <h4 class="text-center mt-4"><?php echo get_theme_mod('appointment_page_summary_title', 'Summary'); ?></h4>
                    <p class="text-center text-secondary"><?php echo get_theme_mod('appointment_page_booking_summary_text', 'Your appointment booking summary'); ?></p>
                    <p class="text-center text-secondary">Customer</p>
                    <div class="row">
                        <div class="col border-end">
                            <p class="text-secondary">Service</p>
                            <input type="hidden" id="summaryAppointWithInput" name="summaryAppointWithInput" value="">
                            <h6 id="summaryAppointWith"></h6>
                        </div>
                        <div class="col">
                            <p class="text-secondary">Date & Time</p>
                            <input type="hidden" id="summaryAppointDateInput" name="summaryAppointDateInput" value="">
                            <input type="hidden" id="summaryAppointTimeInput" name="summaryAppointTimeInput" value="">
                            <h6><span id="summaryDate"></span>, <span id="summaryTime"></span></h6>
                        </div>
                    </div>

                    <div class="mt-5 d-flex justify-content-between border-bottom">
                        <p class="m-0 text-secondary">Subtotal</p>
                        <input type="hidden" id="subTotalInput" name="subTotalInput" value="">
                        <h6 id="subTotal"></h6>
                    </div>
                    <div class="mt-3 d-flex justify-content-between border-bottom">
                        <h5 class="">Total Amount Payable</h5>
                        <input type="hidden" id="totalInput" name="totalInput" value="">
                        <h6 class="total text-bold" id="total"></h6>
                    </div>

                    <div class="row rounded-2 bg-body-secondary mt-5 p-4">
                        <div class="col go-back">
                            <a class="icon-link p-2 text-black" id="summaryGoBackBtn" href="#">
                                <i class="bi bi-arrow-left"></i>
                                <strong class="date-time text-secondary">Go Back</strong>
                            </a>
                        </div>
                        <div class="col next-btn text-md-end">
                        <button type="submit" name="submit_form"><a class="icon-link p-2 text-white rounded-3" id="bookAppointment" href="<?php echo get_option('siteurl') . '/' . 'thank-you/'; ?>"><strong class="date-time">Book Appointment</strong>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                            </button>
                        </div>
                        </form>

                    </div>
                </div>
                <!-- -------------------------------Summary-Part-End------------------------------- -->

            </div>
        </div>
    </div>
</div>
<!-- ---------------------------Main-Contents-End------------------------ -->
<?php get_footer() ?>