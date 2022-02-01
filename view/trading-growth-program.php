<?php
$earned_profit_trading_content = get_field('earned_profit_trading_content');
$earned_profit_trading_rpt     = get_field('earned_profit_trading_rpt');
$earned_profit_trading_text    = get_field('earned_profit_trading_text');
$earned_profit_trading_link    = get_field('earned_profit_trading_link');
 /* Template Name: Trading Growth Program Template */
 get_header();
?>


<div id="trading-growth-" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

    <div class="trading-growth-program-wrapper">

        <?php get_template_part('template-parts/trading-growth-program/video-section');?>

        <?php get_template_part('template-parts/globals/growth-schedule-taps');?>

        <?php get_template_part('template-parts/trading-growth-program/double-trading-balance');?>



        <section class="earned-profit-trading">
            <div class="earned-profit-trading__inner">
                <div class="content"> <?php echo $earned_profit_trading_content;?></div>
        
                <ul class="earned-profit-list">
                    <?php if($earned_profit_trading_rpt) : ?> 
                
                        <?php foreach($earned_profit_trading_rpt as $key => $item) :
                            $image  = $item['image'];
                            $text   = $item['text'];  
                        ?>
                            <li class="cards-item">
                                <div class="img-wrapper">
                                    <img src="<?php echo $image['url']?>" alt="">
                                </div>
                                <p class="text"><?php echo $text?></p>
                            </li>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <div class="inner-wrapper">

                    <h4 class="title"><?php echo $earned_profit_trading_text; ?></h4>
                    <div class="button-wrapper">
                        <a class="btn btn-warning" href="<?php echo $earned_profit_trading_link; ?>">
                        <?php echo __('Discover your Benefits here', 'the5ers');?>
                        </a>
                    </div>

                </div>
            </div>
        </section>

    </div>


<?php get_footer();
?>



