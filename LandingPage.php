<?php
/* Template Name: Landing Page */
get_header();
?>
    <div class="main-wrapper">

        <?php get_template_part('template-parts/landing-page/top-section') ;?>

        <?php get_template_part('template-parts/landing-page/key-features') ;?>

        <?php get_template_part('template-parts/landing-page/contact-form') ;?>
        
    </div>

<?php get_footer(); 