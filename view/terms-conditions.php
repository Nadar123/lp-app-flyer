<?php
$terms_conditions_rpt = get_field('terms_conditions_rpt');
$terms_conditions_year = get_field('terms_conditions_year');


  /* Template Name: Terms Template */
 get_header();
?>

<div id="terms-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

    <div class="terms-wrapper">
        <?php if($terms_conditions_rpt) : ?>
            <?php foreach( $terms_conditions_rpt as $key => $item): 
               $title = $item['title'];
               $text  = $item ['text'];
            ?>

                <div class="terms-wrapper__inner">
                    <div class="terms-wrapper__inner__content">
                        <div class="title-wrapper">
                            <h3 class="title" > <?php echo $title?> </h3>
                        </div>

                        <div class="text-wrapper">
                            <div class="text-wrapper__inner" data-aos="slide-up"><?php echo $text;?></div> 
                        </div>
                    </div>  
                </div>

        <?php endforeach; endif?>

        <div class="terms-wrapper__inc">
                <p><?php echo $terms_conditions_year; ?></p>
        </div>

    </div>
</div>

<?php get_footer(); 
