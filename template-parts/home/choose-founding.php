<?php

$choose_founding_title      = get_field('choose_founding_title');
$choose_founding_option_rpt = get_field('choose_founding_option_rpt');

?>


<section class="choose_founding_wrapper">
    <h3 class="title"><?php echo $choose_founding_title;?></h3>

    <div class="choose_founding_wrapper__content">
        <?php if($choose_founding_option_rpt) :?>
            <?php foreach( $choose_founding_option_rpt as $key => $item) :
                $title = $item['title'];
                $text  = $item['text'];
            ?>

            <div class="inner">
                <h4 class="title"><?php echo $title ?></h4>
                <p class="text"><?php echo $text?></p>
            </div>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>


</section>
