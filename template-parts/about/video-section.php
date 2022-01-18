<?php 
$about_main_subtitle = get_field('about_main_subtitle');
$about_main_text     = get_field('about_main_text');
$about_main_video   = get_field('about_subtitle_video');
?>

<section class="video-section inner">
    <div class="content">
    <h3 class="title"><?php echo $about_main_subtitle;?></h3>
    <p class="text"><?php echo $about_main_text; ?></p>
    </div>

    <div class="embed-container">
    <?php the_field('about_main_video'); ?>
    </div>

</section>