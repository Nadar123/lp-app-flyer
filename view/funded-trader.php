<?php 
$funded_trader_title            = get_field('funded_trader_title');
$funded_trader_rpt              = get_field('funded_trader_rpt');
$funded_trader_url              = get_field('funded_trader_url');
$funded_trader_succee_content   = get_field('funded_trader_succee_content');
$funded_trader_succee_url       = get_field('funded_trader_succee_url');


$funded_trader_accelerate_title       = get_field('funded_trader_accelerate_title');
$funded_trader_accelerate_content     = get_field('funded_trader_accelerate_content');
$funded_trader_accelerate_url         = get_field('funded_trader_accelerate_url');


 /* Template Name: Funded Trader Template */
 get_header();
?>
<div id="funded-trade-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

  <div class="funded-trade-wrapper">

        <div class="funded-trade-wrapper__inner">
            <section class="trading-capital-wrapper">
                <h3 class="title"><?php echo $funded_trader_title; ?></h3>

                <div class="funded-trade-list">
                    <?php if($funded_trader_rpt) : 
                        
                        ?>
                        <?php foreach( $funded_trader_rpt as $key => $item):
                            $image = $item['image']; 
                            $title = $item['title'];
                            $text  = $item ['text'];
                        ?>
    
                        <div class="funded-trade-content">
                            <div class="image-wrapper">
                                <img src="<?php echo $image['url'] ?>" alt="">
                            </div>
                               
                            <h3 class="title" > <?php echo $title?> </h3>
            
                            <p class="text"><?php echo $text;?></p> 
                         
                        </div>
    
                    <?php endforeach; endif?>
                    
                </div>
                <div class="button-wrapper">
                    <a class="btn btn-warning" href="<?php echo $funded_trader_url; ?>">
                    <?php echo __('read more on instant funding', 'the5ers') ?>
                    </a>
                </div>
            </section>
        </div>

        
        <section class="tips_for_succeeding">
            <div class="tips_for_succeeding__inner">
                <?php echo $funded_trader_succee_content;  ?>
            </div>
            <div class="button-wrapper">
                <a class="btn btn-warning" href="<?php echo $funded_trader_succee_url;?>"> 
                    <?php echo __('click here for more tips', 'the5ers')?>
                </a>
            </div>
        </section> 

        <section class="accelerate-trade">
            <div class="accelerate-trade__inner">
                <h3 class="title"><?php echo $funded_trader_accelerate_title; ?></h3>
                <p class="text"><?php echo $funded_trader_accelerate_content ;?></p>
                <div class="button-wrapper">
                    <a class="btn btn-warning" href="<?php echo $funded_trader_succee_url;?>"> 
                        <?php echo __('Choose Your Instant Funding Program Now', 'the5ers')?>
                    </a>
                </div>
            </div>

        </section>

        <?php get_template_part('template-parts/globals/table-section');?>


</div>

<?php get_footer();