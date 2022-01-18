<?php 
$intro_faq_title           = get_field('intro_faq_title');
$intro_faq_text            = get_field('intro_faq_text');
$faq_accordion_rpt         = get_field('faq_accordion_rpt');


 /* Template Name: FAQ Template */
 get_header();

?>
<div id="faq-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

    <div class="faq-wrapper">
        <div class="faq-wrapper__inner">
            <h3 class="title"><?php echo $intro_faq_title; ?></h3>
            <p class="text"><?php echo $intro_faq_text; ?></p>

            
            <div class="accordion-container">
        
                <?php if( $faq_accordion_rpt ) : ?>

                    <?php foreach($faq_accordion_rpt as $key => $item) :
                        $main_title = $item['main_title'];
                    ?>
                        <div class="toop-title">
                            <h3 class="title"><?php echo $main_title; ?></h3>
                        </div>

                        <?php foreach( $item['inner'] as $test => $item ) : 
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

                        <?php endforeach;?>
                    <?php endforeach;?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer();