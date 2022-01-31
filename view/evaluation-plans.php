<?php
 /* Template Name: Evaluation Plans Template */
 get_header();
 ?>
<div id="evaluation-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

    <?php get_template_part('template-parts/evaluation-plans/top-section');?>

    <?php get_template_part('template-parts/globals/table-section');?>

    <?php get_template_part('template-parts/evaluation-plans/about-programs');?>

    <?php get_template_part('template-parts/evaluation-plans/growth-schedule');?>

 
</div>

<?php get_footer();