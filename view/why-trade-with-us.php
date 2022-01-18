<?php 
$why_us_title        = get_field('why_us_title');
$why_us_sub_title    = get_field('why_us_sub_title');


;


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

  <?php get_template_part('template-parts/globals/funded-accordion') ;?>

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