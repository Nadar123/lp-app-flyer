<?php

$home_background_hero    = get_field('home_background_hero');
$home_main_section_title = get_field('home_main_section_title');
$home_main_section_rpt   = get_field('home_main_section_rpt');
  /* Template Name: Homepage Template */
  get_header();
?>
  <div id="home-page" class="page-wrapper">
    <div class="page-wrapper__home" style="background-image:url(<?php echo $home_background_hero['url']?>)">
      <?php get_template_part('template-parts/home/hero-section'); ?>
    </div>

    <main class="page-wrapper__main">
      <div class="page-wrapper__main__content">
          <h3 class="title"><?php echo $home_main_section_title; ?></h3>
        <div class="founding_cards">
          <?php if($home_main_section_rpt) : ?>
            <?php foreach($home_main_section_rpt as $key=> $item) :
            $image        = $item['image'];
            $title        = $item['title'];
            $text         = $item['text'];
            $cost_text    = $item['cost_text'];
            $price        = $item['price'];
            $link         = $item['link']; 
            ?>

            <div class="founding_cards__wrapper" style="background-image:url(<?php echo $image['url']?>)">
              <h4 class="title"><?php echo $title; ?></h4>
              <p class="text"><?php echo $text; ?> </p>
              <p>
                <span class="cost"><?php echo $cost_text; ?></span>
                <span class="price"><?php echo $price; ?></span>
              </p>

              <a class="btn btn-warning" href="<?php echo $link; ?>">learn more</a>

            </div>


            <?php endforeach; ?>
          <?php endif; ?>
        </div>

      </div>
    </main>
    
  </div>


<?php get_footer(); 