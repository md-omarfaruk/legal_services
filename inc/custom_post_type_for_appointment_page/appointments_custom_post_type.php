<?php
// Register the 'appointment' custom post type
function register_appointment_post_type() {
    register_post_type('appointment', [
        'labels' => [
            'name' => __('Appointments'),
            'singular_name' => __('Appointment')
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor']
    ]);
}
add_action('init', 'register_appointment_post_type');

// Handle the form submission
function handle_appointment_form_submission() {
    if (isset($_POST['name'])) {
        // Sanitize and get the form data
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_email($_POST['email']);
        $address = sanitize_text_field($_POST['address']);
        $summaryAppointWith = sanitize_text_field($_POST['summaryAppointWith']);
        $summaryDate = sanitize_text_field($_POST['summaryDate']);
        $summaryTime = sanitize_text_field($_POST['summaryTime']);

        // Create the appointment post
        $post_data = [
            'post_title'   => $name,
            'post_content' => "Phone: $phone\nEmail: $email\nAddress: $address\nAppointment with: $summaryAppointWith\nDate: $summaryDate\nTime: $summaryTime",
            'post_status'  => 'publish',
            'post_type'    => 'appointment',
        ];
        wp_insert_post($post_data);

        // Redirect after submission
        wp_redirect(home_url());
        exit;
    }
}
add_action('admin_post_submit_appointment', 'handle_appointment_form_submission');
add_action('admin_post_nopriv_submit_appointment', 'handle_appointment_form_submission');


?>