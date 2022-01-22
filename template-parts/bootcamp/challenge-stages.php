<?php 
$bootcamp_plan_challenge_stages_rpt = get_field('bootcamp_plan_challenge_stages_rpt');
$bootcamp_plan_challenge_stages_btn = get_field('bootcamp_plan_challenge_stages_btn');
?>

<section class="challenge-stages-wrapper">
        
    <div class="accordion-container">
        
        <?php if( $bootcamp_plan_challenge_stages_rpt ) : ?>

            <?php foreach( $bootcamp_plan_challenge_stages_rpt as $key => $item ) : 
                $title   = $item['title'];
                $text    = $item['text'];
            ?>

            <div class="set">
            <a href="#">
                <?php echo $title; ?>
                <i class="fas fa-plus"></i>
                <i class="fas fa-minus"></i>
            </a>
            <div class="content">
                <p class="text"><?php echo $text; ?></p>
            </div>
            </div>

        <?php endforeach; endif; ?>
        
    </div>

    <div class="bootcamp-button-wrapper">
        <a href="<?php echo $bootcamp_plan_challenge_stages_btn;?>"> 
        <?php echo __('Sign Up', 'fivers')?>
        </a>
    </div>

    </section>