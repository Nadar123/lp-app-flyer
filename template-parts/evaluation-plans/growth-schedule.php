<?php
$growth_schedule_title    = get_field('growth_schedule_title');
$growth_schedule_btn_rpt  = get_field('growth_schedule_btn_rpt');
$growth_schedule_rpt      = get_field('growth_schedule_rpt');

?>
<section class="growths-schedule">
    <div class="growths-schedule__inner">
        <h3 class="title"><?php echo $growth_schedule_title; ?></h3>
    </div>
    <div class="growths-schedule-tabs-wrapper wrapper">
        <div class="tabs">
            <?php if($growth_schedule_btn_rpt) :  ?> 
                <?php foreach($growth_schedule_btn_rpt as $key => $item) :
                    $growth_schedule_text_btn   = $item['growth_schedule_text_btn'];   
                ?>
                
                    <p class="tab">  <?php echo $growth_schedule_text_btn;?></p>
        
                <?php endforeach; ?>

            <?php endif; ?>
        </div>
       
        <div class="tab_content">
        <div class="tab_item">Содержимое 1</div>
        <div class="tab_item">Содержимое 2</div>
        <div class="tab_item">Содержимое 3</div>
    </div>
    </div>

</section>

<div class="wrapper">
    <div class="tabs">
        <span class="tab">Вкладка 1</span>
        <span class="tab">Вкладка 2</span>
        <span class="tab">Вкладка 3</span>        
    </div>
  
</div>


