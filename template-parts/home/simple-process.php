<?php
$simple_process_title        = get_field('simple_process_title');
$simple_process_img_text_rpt = get_field('simple_process_img_text_rpt');

?>

<section class="simple-process-wrapper">
    <h3 class="main-title"><?php echo $simple_process_title;?></h3>

    <div class="simple-process-wrapper__content">
        <?php if($simple_process_img_text_rpt) :?>
            <?php foreach($simple_process_img_text_rpt as $key => $item) :
            $img  = $item['img'];
            $text  = $item['text'];
            ?>
                <div class="inner inner<?php echo $key; ?>">
                    <img src="<?php echo $img['url'];?>" alt="">
                    <h3 class="title"><?php echo $text; ?></h3>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>