<?php
// Check if the current page template is 'About Us', 'Our Team', or neither
if (is_page_template('about-us.php')) : ?>
    <div class="about-title">
        <h1 class="text-center roboto-black">
            <?php echo 'About Us'; ?>
        </h1>
    </div>
<?php elseif (is_page_template('our-team.php')) : ?>
    <div class="about-title">
        <h1 class="text-center roboto-black">
            <?php echo 'Team'; ?>
        </h1>
    </div>
<?php else : ?>
    <div class="about-title">
        <h1 class="text-center roboto-black">
            <?php echo 'Home'; ?>
        </h1>
    </div>
<?php endif; ?>
