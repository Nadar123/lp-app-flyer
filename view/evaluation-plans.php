<?php
$evaluation_about_program_title = get_field('evaluation_about_program_title');
$evaluation_about_program_rpt   = get_field('evaluation_about_program_rpt');


 /* Template Name: Evaluation Plans Template */
 get_header();


 ?>
<div id="evaluation-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

    <?php get_template_part('template-parts/evaluation-plans/top-section');?>

    <?php get_template_part('template-parts/globals/table-section');?>

    <div class="about-program-wrapper">
        <div class="about-program-wrapper__inner">
            <h3 class="title"><?php echo $evaluation_about_program_title; ?></h3>
            
            <div class="list-section-wrapper">
            <?php if( $evaluation_about_program_rpt ) : ?>
    
                <?php foreach($evaluation_about_program_rpt as $key => $item) :
                    $title = $item['title'];
                    $text  = $item['text'];
                ?>
                    <div class="list-section-wrapper__inner">
                        <h3 class="title"> <?php echo $title; ?></h3>
                        <p class="text"><?php echo $text; ?></p>
                    </div>
                
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();