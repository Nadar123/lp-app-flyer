<?php 
$evaluation_about_program_title = get_field('evaluation_about_program_title');
$evaluation_about_program_rpt   = get_field('evaluation_about_program_rpt');
?>

<section class="about-program-wrapper">
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
    </section>