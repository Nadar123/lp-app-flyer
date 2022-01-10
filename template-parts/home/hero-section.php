<?php
$home_main_title      = get_field('home_main_title');
$home_main_subtitle   = get_field('home_main_subtitle');
$home_subtitle        = get_field('home_subtitle');
$home_image_under_title = get_field('home_image_under_title');

?>
    <div class="page-wrapper__content">
        <h1 class="title"><?php echo $home_main_title; ?></h1>
        <h2 class="subtitle"><?php echo $home_main_subtitle; ?></h2>
        <h3 class="small-title"><?php echo $home_subtitle; ?></h3>

        <div class="page-wrapper__content__img">
            <img src="<?php echo  $home_image_under_title['url']?>" alt="">
        </div>
    </div>