<?php 
$why_us_title        = get_field('why_us_title');
$why_us_sub_title    = get_field('why_us_sub_title');


$funded_image = get_field('funded_image', 'option');
$funded_title = get_field('funded_title', 'option');
$funded_subtitle = get_field('funded_subtitle',  'option');
$funded_accordion_rpt = get_field('funded_accordion_rpt', 'option');


$ready_to_trade_title = get_field('ready_to_trade_title');
$ready_to_trade_link = get_field('ready_to_trade_link');


  /* Template Name: Why-Us Template */
  get_header();
?>


<div id="why-us-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

  <section class="page-wrapper__content">
      <h3 class="title" data-aos="flip-down"><?php echo $why_us_title;?></h3>
      <h4 class="sub" data-aos="flip-up"><?php echo $why_us_sub_title;?></h4>
  </section>

  <section class="global-accordion">
    <div class="funded-wrapper__content">
        <div class="img-wrapper" data-aos="zoom-in">
            <img src="<?php echo $funded_image['url'] ?>" alt="">
        </div>
        <h3 class="title"><?php echo $funded_title;?></h3>
        <h4 class="text"><?php echo $funded_subtitle ?></h4>
    </div>
    <div class="accordion-container">
            <?php if( $funded_accordion_rpt ) : ?>
                <?php foreach( $funded_accordion_rpt as $key => $item ) : 
                    $title   = $item['title'];
                    $text    = $item['text'];
                ?>

                    <div class="set">
                        <a href="#">
                        &#10003
                        <?php echo $title; ?>
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-minus"></i>
                        </a>
                        <div class="content">
                        <p class="text"><?php echo $text; ?></p>
                        </div>
                    </div>

                <?php endforeach;?>
            <?php endif; ?>
        </div>
  </section>

  <section class="ready-to-trade">
      <div class="ready-to-trade__inner">
          <h3 class="title"> <?php echo $ready_to_trade_title; ?></h3>

          <div class="url-btn-wrapper">
                <a class="btn btn-warning" href="<?php echo $ready_to_trade_link;?>">
                <?php echo __('ENHANCE YOUR TRADING CAREER NOW!', 'fivers')?>
                </a>
          </div>

      </div>
  </section>
</div> 



<?php get_footer(); 