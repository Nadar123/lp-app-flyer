<?php 
$forex_traders_vision_rpt  = get_field('forex_traders_vision_rpt');
?>

<section class="forex-trader-section">
    <div class="forex-trader-wrapper">

        <?php if($forex_traders_vision_rpt) :?>

          <?php foreach($forex_traders_vision_rpt as $key => $item ) : 
            $image    = $item['image'];
            $title    = $item['title'];
            $text     = $item['text'];
          ?>

          <div class="item">
            <div class="forex-img-wrapper">
              <img src="<?php echo $image['url']?>" alt="">
            </div>
            <h3 class="title"><?php echo $title ?></h3>
            <p class="text"><?php echo $text;?></p>
          </div>

        <?php endforeach; ?>

      <?php endif; ?>

    </div>
</section>