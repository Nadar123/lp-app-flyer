<?php 
$global_choose_founding_title    = get_field('global_choose_founding_title','option');
$global_choose_founding_btns_rpt = get_field('global_choose_founding_btns_rpt', 'option');
$global_choose_founding_table    = get_field('global_choose_founding_table', 'option');

?>
<section class="choose_founding_wrapper">
    <h3 class="title"><?php echo $global_choose_founding_title;?></h3>

    <div class="tabs">
        <ul class="tabs-nav">
            <?php if($global_choose_founding_btns_rpt) : ?> 
                
                <?php foreach($global_choose_founding_btns_rpt as $key => $item) :
                    $text_btn   = $item['text_btn'];   
                ?>
                    <li><a class="tab-link" href="#tab-<?php echo $key;?>"><?php echo $text_btn; ?></a></li>
        
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>

        <div class="tabs-stage">

            <?php if($global_choose_founding_table) : ?>
                <?php foreach($global_choose_founding_table as $key => $item) :
                    $content = $item['content'];                      
                ?>

                    <div id="tab-<?php echo $key; ?>">
                        <?php echo $content;?>
                    </div>
            <?php endforeach; endif; ?>
            
        </div>
    </div>
</section>