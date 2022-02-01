<?php 
$double_trading_balance_title    = get_field('double_trading_balance_title');
$double_trading_balance_rpt      = get_field('double_trading_balance_rpt');
$double_trading_rpt              = get_field('double_trading_rpt');
?>

<section class="double-trading-balance">
    <div class="double-trading-balance__inner">
        <h3 class="title"><?php echo  $double_trading_balance_title; ?></h3>

        <div class="double-trading-balance__list">
        <?php if($double_trading_balance_rpt) : ?> 
        
            <?php foreach($double_trading_balance_rpt as $key => $item) :
                $image  = $item['image'];
                $title  = $item['title'];
                $text   = $item['text'];  
            ?>
                <div class="content-item">
                    <div class="img-wrapper">
                        <img src="<?php echo $image['url']?>" alt="">
                    </div>
                    <h3 class="title"><?php echo $title?></h3>
                    <p class="text"><?php echo $text?></p>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>

    <div class="double-trading-card-wrapper">
        <?php if($double_trading_rpt) : ?> 
            
            <?php foreach($double_trading_rpt as $key => $item) :
                $image  = $item['image'];
                $title  = $item['title'];
                $text   = $item['text'];  
            ?>
                <div class="cards-item">
                    <div class="img-wrapper">
                        <img src="<?php echo $image['url']?>" alt="">
                    </div>
                    <h3 class="title"><?php echo $title?></h3>
                    <p class="text"><?php echo $text?></p>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</section> 

