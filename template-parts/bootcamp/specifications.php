<?php 
$bootcamp_plan_specifications_background   = get_field('bootcamp_plan_specifications_background');
$bootcamp_plan_specifications_title        = get_field('bootcamp_plan_specifications_title');
$bootcamp_plan_specifications_rpt          = get_field('bootcamp_plan_specifications_rpt');
?>

<section class="specifications-wrapper" style="background-image:url(<?php echo $bootcamp_plan_specifications_background['url']?>)">
    <div class="specifications-wrapper__inner">
        <div class="title-wrapper">
        <h3><?php echo $bootcamp_plan_specifications_title; ?></h3>
        </div>

        <ul id="bootcamp-list" class="specifications-wrapper__list">
        <?php if( $bootcamp_plan_specifications_rpt ) : ?>
        
            <?php foreach( $bootcamp_plan_specifications_rpt as $key => $item ) : 
                $text = $item['text'];
            ?>

            <li class="item">
                <span class="icon"> &#10003; </span>
                <?php echo $text; ?>
            </li>

            <?php endforeach; endif; ?>
        </ul>
    </div>
</section>