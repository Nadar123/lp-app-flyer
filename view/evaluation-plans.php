<?php
 /* Template Name: Evaluation Plans Template */
 get_header();
 ?>
<div id="evaluation-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

    <?php get_template_part('template-parts/evaluation-plans/top-section');?>

    <?php get_template_part('template-parts/globals/table-section');?>

    <?php get_template_part('template-parts/evaluation-plans/about-programs');?>

    <?php get_template_part('template-parts/globals/growth-schedule-taps');?>

    <section class="reviews-wrapper">
    <!-- TrustBox widget - Grid -->
    <div 
        class="trustpilot-widget" 
        data-locale="en-US"
        data-template-id="539adbd6dec7e10e686debee" 
        data-businessunit-id="5db057bfeb288e000150a196" 
        data-style-height="500px" 
        data-style-width="100%" 
        data-theme="light" 
        data-tags="showcase"
        data-stars="3,4,5">
        <a 
            href="https://www.trustpilot.com/review/the5ers.com" 
            target="_blank" 
            rel="noopener">
            Trustpilot
        </a>
    </div>
    <!-- End TrustBox widget -->
</section>

 
</div>

<?php get_footer();