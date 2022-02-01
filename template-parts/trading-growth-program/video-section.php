<?php
 $trading_growth_program_title      = get_field('trading_growth_program_title');
 $trading_growth_program_subtitle   = get_field('trading_growth_program_subtitle');
 $trading_growth_program_text       = get_field('trading_growth_program_text');
 $trading_growth_program_video      = get_field('trading_growth_program_video');
?>

<section class="video-section">
    <div class="content">
        <h3 class="sub"><?php echo $trading_growth_program_subtitle; ?></h3>
        <p class="text"><?php echo $trading_growth_program_text; ?></p>
    </div>

    <div class="embed-container">
        <?php the_field('trading_growth_program_video'); ?>
    </div>

</section>