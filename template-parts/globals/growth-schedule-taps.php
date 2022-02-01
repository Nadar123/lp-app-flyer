<?php

$global_tabs_title            = get_field('global_tabs_title', 'option');
$global_tabs_button_rpt       = get_field('global_tabs_button_rpt', 'option');
$global_inner_tabs_rpt        = get_field('global_inner_tabs_rpt', 'option');
?>

<section class="growth-schedule-wrapper">
            <h3 class="title"><?php echo $global_tabs_title;?></h3>

    <div class="tabs">
        <ul class="tabs-nav">
            <?php if($global_tabs_button_rpt) : ?> 
                
                <?php foreach($global_tabs_button_rpt as $key => $item) :
                    $text_btn   = $item['text_btn'];   
                ?>
                    <li><a class="tab-link" href="#tab-<?php echo $key;?>"><?php echo $text_btn; ?></a></li>
        
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>

        <div class="tabs-stage">

            <?php if($global_inner_tabs_rpt) : ?>
                <?php foreach($global_inner_tabs_rpt as $key => $item) : ?>
                    
                    <div id="tab-<?php echo $key; ?>">
                        <section class="container">
                        
                        
                            <?php foreach($item['inner'] as $key => $item ) :
                                $content      = $item['content']; 
                                $link         = $item['link'];  
                                ?>
                                <section class="wrapper panel active-<?php echo $key; ?>">
                                    
                                    <h3 class="inner-tab-wrapper"><?php echo $link; ?></h3> 
                                    <h4 class="wpp">
                                        <?php echo $content;?>
                                    </h4>
                                </section>

                                <?php endforeach; ?>
                        </section>
                    </div>
            <?php endforeach; endif; ?>
        </div>
    </div>  
</section>