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

      <!-- TrustBox widget - Grid -->
<!-- <div 
class="trustpilot-widget" 
data-locale="en-US"
data-template-id="539adbd6dec7e10e686debee" data-businessunit-id="5db057bfeb288e000150a196" data-style-height="500px" data-style-width="100%" data-theme="light" data-tags="showcase" data-stars="3,4,5">
  <a href="https://www.trustpilot.com/review/the5ers.com" target="_blank" rel="noopener">Trustpilot</a>
</div> -->
<!-- End TrustBox widget -->

      <div class="lol"></div>
    </main>
    
  </div>

  <!-- <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> -->
<?php get_footer(); 