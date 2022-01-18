<?php 
$funded_image = get_field('funded_image', 'option');
$funded_title = get_field('funded_title', 'option');
$funded_subtitle = get_field('funded_subtitle',  'option');
$funded_accordion_rpt = get_field('funded_accordion_rpt', 'option');
?>

<section class="global-accordion">
    <div class="funded-wrapper__content">
        <div class="img-wrapper" data-aos="zoom-in">
            <img src="<?php echo $funded_image['url'] ?>" alt="">
        </div>
        <h3 class="title"><?php echo $funded_title;?></h3>
        <h4 class="text"><?php echo $funded_subtitle ?></h4>
    </div>
    <div class="accordion-container">
        <?php if( $funded_accordion_rpt ) : ?>
            <?php foreach( $funded_accordion_rpt as $key => $item ) : 
                $title   = $item['title'];
                $text    = $item['text'];
            ?>

                <div class="set">
                    <a href="#">
                    &#10003
                    <?php echo $title; ?>
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                    </a>
                    <div class="content">
                    <p class="text"><?php echo $text; ?></p>
                    </div>
                </div>

            <?php endforeach;?>
        <?php endif; ?>
    </div>
</section>

