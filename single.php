<?php
    get_header();
    get_template_part('inc/header/banner');
?>

    <?php while( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php get_footer(); ?>