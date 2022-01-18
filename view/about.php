<?php 
$forex_traders_our_story_title  =  get_field('forex_traders_our_story_title');
$forex_traders_our_story        =  get_field('forex_traders_our_story');

  /* Template Name: About Template */
  get_header();
?>

<div id="about-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

  <main class="page-wrapper__main">

    <?php get_template_part('/template-parts/about/video-section') ?>

    <?php get_template_part('/template-parts/about/team-members') ?>

    <?php get_template_part('/template-parts/about/forex-trader') ?>

    <section class="company-story">
      <h3 class="title"><?php echo $forex_traders_our_story_title; ?></h3>
      <p class="text"><?php echo $forex_traders_our_story; ?></p>
    </section>
  
  </main>

</div>
   



<?php get_footer(); 