<?php
$getting_funded_image           = get_field('getting_funded_image');
$getting_funded_title           = get_field('getting_funded_title');
$getting_funded_subtitle        = get_field('getting_funded_subtitle');
$getting_funded_accordion_rpt   = get_field('getting_funded_accordion_rpt');

?>

<section class="getting-funded-wrapper">
    <div class="getting-funded-wrapper__content">
        <div class="img-wrapper">
            <img src="<?php echo $getting_funded_image['url'] ?>" alt="">
        </div>
        <h3 class="title"><?php echo $getting_funded_title;?></h3>
        <h4 class="text"><?php echo $getting_funded_subtitle ?></h4>
    </div>

    <div class="tap-loop-section">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <?php if($getting_funded_accordion_rpt) : ?>
                    <?php 
                    $var = 0;
                    foreach($getting_funded_accordion_rpt as $key => $item) : 
                        $title  = $item['title'];
                        $text   = $item['text'];    
                    ?>

                        <h2 class="" id="<?php echo('heading-'.$var)?>">
                            <button 
                            class="accordion-button" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="<?php echo('#collapse-'.$var)?>" 
                            aria-expanded="<?php if($var==0):echo ('true'); else: echo ('false'); endif;?>" aria-controls="<?php echo('collapse-'.$var)?>">
                                <span class="icon"> &#10003; </span>
                                <h3><?php echo $title ?></h3>

                            </button>
                        </h2>
                        <div 
                            id="<?php echo('collapse-'. $var)?>" 
                            class="accordion-collapse collapse"
                            aria-labelledby="<?php echo('heading-'.$var)?>"
                            data-bs-parent="#accordionExample-b">

                            <p class="text">
                                <?php echo $text; ?>
                            </p>

                        </div>
                        

                    <?php $var++; endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>