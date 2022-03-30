<?php 
$lp_features_title  = get_field('lp_features_title');
$lp_features_rpt    = get_field('lp_features_rpt');
?>

<section class="key-features">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <h3 class="text-center title"><?php echo $lp_features_title; ?></h3>
                <?php if($lp_features_rpt): ?>
                    <div class="key-features__wrapper">
                        <?php foreach($lp_features_rpt as $key => $item) : 
                            $icon  = $item['icon'];
                            $title = $item['title'];
                            $text  = $item['text'];                                
                        ?>
                            <div class="key-features__wrapper--box">
                                <img src="<?php echo $icon['url']?>" alt="">
                                <h4 class=""><?php echo $title; ?></h4>
                                <p><?php echo $text ?></p>
                            </div>

                        <?php endforeach?>
                    
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</section>