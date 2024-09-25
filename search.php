<?php
get_header();
?>
<!-- ---------------------------Main-Contents-Start------------------------ -->

<div class="bg-white roboto-black text-center my-5">
    <?php get_search_form() ?>
    <br>
    <?php
    if (is_search()) {
    ?>
        <h2><?php the_search_query() ?></h2>
    <?php
    }
    ?>
</div>
<!-- -----------------------------Main-Contents-End----------------------- -->

<?php get_footer() ?>