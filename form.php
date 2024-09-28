<?php

/**
 * Template Name: Thank You page
 */
get_header();
?>
 <form method="POST" action="">
    <!-- Name Field -->
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    
    <!-- Date Field -->
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" class="form-control" required>
    </div>
    
    <!-- Phone Number Field -->
    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" class="form-control" required>
    </div>
    
    <!-- Telephone Number Field -->
    <div class="form-group">
        <label for="telephone">Telephone Number:</label>
        <input type="tel" id="telephone" name="telephone" class="form-control">
    </div>
    
    <!-- Email Field -->
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <!-- Textarea Field -->
    <div class="form-group">
        <label for="textarea">Your Message:</label>
        <textarea id="textarea" name="textarea" rows="5" class="form-control"></textarea>
    </div>
    
    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary" name="submit_form">Submit</button>
</form>


<?php get_footer() ?>
