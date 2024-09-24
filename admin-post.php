<?php

/**
 * Template Name: form
 */
get_header();
?>
<div class="my-5">
<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <input type="hidden" name="action" value="submit_form_data">
    <input type="submit" value="Submit">
</form>
</div>
<?php get_footer() ?>