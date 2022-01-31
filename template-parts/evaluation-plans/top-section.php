<?php 
$evaluation_section_title = get_field('evaluation_section_title');
$evaluation_section_rpt   = get_field('evaluation_section_rpt');
?>


<section class="evaluation-page-wrapper">
    <div class="evaluation-page-wrapper__content">
        <h2 class="title"><?php echo $evaluation_section_title;?></h2>

        <div class="loop-content">
            <?php if( $evaluation_section_rpt ) : ?>
    
                    <?php foreach($evaluation_section_rpt as $key => $item) :
                        $image = $item['image'];
                        $title = $item['title'];
                        $text  = $item['text'];
                    ?>

                        <div class="loop-content__inner">
                            <div class="image-wrapper">
                                <img src="<?php echo $image['url'];?>" alt="">
                            </div>
                            <h3 class="title"> <?php echo $title; ?></h3>
                            <p class="text"><?php echo $text; ?></p>
                        </div>
                    
            <?php endforeach; endif; ?>

        </div>
                
    </div>
 </section>