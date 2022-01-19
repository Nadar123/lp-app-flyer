<?php 
$timeline_subtitle    = get_field('timeline_subtitle');
$timeline_rpt         = get_field('timeline_rpt');


 /* Template Name: Timeline Template */
 get_header();
 ?>

<div id="timeline-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>
    <h3 class="sub"><?php echo $timeline_subtitle?></h3>

    <div class="timeline-wrapper">
        <?php if($timeline_rpt) : ?>
            <?php foreach( $timeline_rpt as $key => $item): 
                $message_box = $item['message_box'];
                $icon        = $item['icon'];
                $date        = $item['date'];
            ?>

                <div class="timeline-wrapper__inner">
                    <div class="message-box">
                        <?php echo $message_box?>
                    </div>

                    <div class="icon-wrapper">
                        <div class="img-g">
                            <img src="<?php echo $icon['url'] ?>" alt="">

                        </div>
                    </div>

                    <div class="date-wrapper">
                        <p class="date"> <?php echo $date;?> </p>
                    </div>

                </div>

            <?php endforeach; endif?>
    </div>
</div>





<?php get_footer(); 
