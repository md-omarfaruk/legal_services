<?php
function create_appointments_post_type() {
    register_post_type('Appointments', array(
        'labels' => array(
            'name' => __('Appointments'),
            'singular_name' => __('Appointment'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'show_in_menu' => true,
    ));
}
add_action('init', 'create_appointments_post_type');


function handle_appointments() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {

        // Sanitize and collect form data
        $name = sanitize_text_field($_POST['name']);
        $select_date = sanitize_text_field($_POST['select-date']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_email($_POST['email']);
        $textarea = sanitize_textarea_field($_POST['textarea']);
        $address = sanitize_text_field($_POST['address']);
        $tel = sanitize_text_field($_POST['tel']);
        $optradio = sanitize_text_field($_POST['optradio']);
        $person_name = sanitize_textarea_field($_POST['personName']);
        $referred_tel = sanitize_text_field($_POST['referredTel']);

        // Create post content from the form fields
        $post_content = "
            <strong>Date:</strong> $select_date<br>
            <strong>Phone:</strong> $phone<br>
            <strong>Email:</strong> $email<br>
            <strong>Message:</strong><br>$textarea<br>
            <strong>Address:</strong> $address<br>
            <strong>Cell Number:</strong> $tel<br>
            <strong>Consultation Fee Paid:</strong> $optradio<br>
            <strong>Referred Person Name:</strong> $person_name<br>
            <strong>Referred Person Tel:</strong> $referred_tel
        ";

        // Insert the form submission as a post in the custom post type
        $post_data = array(
            'post_title'   => $name, // Name will be the post title
            'post_content' => $post_content, // Other form data will be the post content
            'post_status'  => 'publish', // You can set this to 'draft' if you want to manually approve submissions
            'post_type'    => 'appointments',
        );

        // Insert the post and get the post ID
        $post_id = wp_insert_post($post_data);

        // Redirect to the thank-you page with the post ID in the URL
        wp_redirect(home_url('/thank-you'));
        exit;
    }
}
add_action('template_redirect', 'handle_appointments');
