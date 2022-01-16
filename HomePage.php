<?php

$home_background_hero    = get_field('home_background_hero');

  /* Template Name: Homepage Template */
  get_header();
?>
  <div id="home-page" class="page-wrapper">
    <div class="page-wrapper__home" style="background-image:url(<?php echo $home_background_hero['url']?>)">
      <?php get_template_part('template-parts/home/hero-section'); ?>
    </div>

    <main class="page-wrapper__main">
      
      <?php get_template_part('template-parts/home/funding-journey'); ?>

      <?// php get_template_part('template-parts/home/choose-founding'); ?>

      <?php get_template_part('template-parts/home/bootcamp-challenge-modal'); ?>

      <?php get_template_part('template-parts/home/simple-process'); ?>

      <?php get_template_part('template-parts/home/getting-funded'); ?>
      
      <?php get_template_part('template-parts/home/trading-experience'); ?>

      <?php get_template_part('template-parts/home/reviews'); ?>

      <?php get_template_part('template-parts/home/contact-us'); ?>


    </main>
    
  </div>

<?php get_footer(); 