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
      <?php get_template_part('template-parts/home/choose-founding'); ?>
      <?php get_template_part('template-parts/home/bootcamp-challenge-modal'); ?>
      <div class="lol"></div>
    </main>
    
  </div>


<?php get_footer(); 