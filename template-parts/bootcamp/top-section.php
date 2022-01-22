<?php 
$bootcamp_plan_text_right = get_field('bootcamp_plan_text_right');
$bootcamp_plan_btn_url    = get_field('bootcamp_plan_btn_url');

$bootcamp_plan_warning_title        = get_field('bootcamp_plan_warning_title');
$bootcamp_plan_warning_sub_title    = get_field('bootcamp_plan_warning_sub_title');
?>

<section class="bootcamp-wrapper__content">
    <div class="inner-content">
    <?php echo $bootcamp_plan_text_right; ?>

    <div class="bootcamp-button-wrapper">
        <a href="<?php echo $bootcamp_plan_btn_url;?>" ><?php echo __('Enroll To The Bootcamp', 'fivers')?></a>
    </div>
    </div>
</section>

<div class="bootcamp-wrapper__warning">
    <h2 class="title"><?php echo $bootcamp_plan_warning_title;?></h2>
    <h3 class="sub-title"><?php echo $bootcamp_plan_warning_sub_title; ?></php></h3>
</div>