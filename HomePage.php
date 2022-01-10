<?php

  /* Template Name: Homepage Template */

  get_header();
?>
<i class="far fa-user"></i>

<!-- Solid -->
<i class="fas fa-user"></i>

<!-- Brand -->
<i class="fab fa-dev"></i>

<i class="fab fa-500px"></i>

  <div class="homepage-wrapper wrapper">
    <h1><?php the_title(); ;?></h1>

      <div class="posts">
      <?php 
        $homeposts = new WP_Query(array(
          'post_per_page' => 3,
          'post_type' =>'post'

        ));
        while($homeposts->have_posts()): $homeposts->the_post() 
        ?>
        <div class="wrapper-post">
          <h2><?php the_title(); ?></h2>
            <div class="img">
              <?php the_post_thumbnail(); ?>
            </div>
          <p><?php the_content() ?></p>
        </div>

      <?php endwhile; ?>
    </div>
    

<?php get_footer(); 