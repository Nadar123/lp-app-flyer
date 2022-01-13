<?php
$trading_experience_background    = get_field('trading_experience_background');
$trading_experience_cup_img       = get_field('trading_experience_cup_img');
$trading_experience_title         = get_field('trading_experience_title');
$trading_experience_rpt           = get_field('trading_experience_rpt');

?>

<section class="trading-wrapper" style="background-image:url(<?php echo $trading_experience_background['url']?>)">
  <div class="trading-wrapper__content">
    <div class="trading-wrapper__content__inner">
      <h3 class="title"><?php echo $trading_experience_title ?></h3>
  
      <div class="image-wrapper">
        <img src="<?php echo $trading_experience_cup_img['url']?>" alt="">
      </div>
    </div>
    <div class="accordion-wrapper">

      <div class="accordion-container">
        <?php if( $trading_experience_rpt ) : ?>
          <?php foreach( $trading_experience_rpt as $key => $item ) : 
            $title   = $item['title'];
            $text    = $item['text'];
          ?>

            <div class="set">
              <a href="#">
                <?php echo $title; ?>
                <i class="fas fa-plus"></i>
                <i class="fas fa-minus"></i>
              </a>
              <div class="content">
                <p class="text"><?php echo $text; ?></p>
              </div>
            </div>

          <?php endforeach;?>
        <?php  endif; ?>

      </div> 
  
      </div>
    </div>
  </section>


      <!-- <div class="set">
        <a href="#">
          Vestibulum 
          <i class="fas fa-plus"></i>
          <i class="fas fa-minus"></i>
        </a>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        </div>
      </div>
      <div class="set">
        <a href="#">
          Phasellus 
          <i class="fas fa-plus"></i>
        </a>
        <div class="content">
          <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus. Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
        </div>
      </div>
      <div class="set">
        <a href="#">
          Praesent 
          <i class="fas fa-plus"></i>
        </a>
        <div class="content">
          <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        </div>
      </div>
      <div class="set">
        <a href="#">
          Curabitur 
          <i class="fas fa-plus"></i> 
        </a>
        <div class="content">
          <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
        </div>
      </div> -->
