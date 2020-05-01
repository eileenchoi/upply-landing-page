<?php

get_header();
?>

<main id="primary" class="site-main">
    <div class="hero-wrapper">
        <div class="content hero-container">
            <div class="text">
                <h1><?php the_field('heading'); ?></h1>
                <p><?php the_field('content'); ?></p>
            </div>
            <div class="contact">
                <?php the_field('shortcode'); ?>
            </div>
            <p class="disclaimer">**By submitting your name and email address, you are granting us permission to contact you by email.</p>
            <div class="icons">
                <img src="<?php the_field('icons') ?>" alt="">
            </div>
        </div>
        <div class="content image-container">
            <img class="iso" src="<?php the_field('image'); ?>" alt="">
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
