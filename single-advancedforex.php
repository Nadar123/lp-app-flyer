<?php
    get_header();
?>
<div id="advanced-forex-post" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

    <div  class="post-type-main-wrapper" style="width: 65%; margin: auto">
        <?php while(have_posts()) : the_post(); ?>
        
        <div style="padding: 8rem 0 2rem 0;" class="content-blog">
            <div style="padding: 1rem 0" class="small-box">
                <span> Post by 
                    <?php the_author_posts_link(); ?> on 
                    <?php the_time('n.j.y'); ?> in 
                    <?php echo get_the_category_list(', '); ?></span>
            </div>
            <h1 style="font-size: 45px;"> 
            <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
            
            <hr> <br>
            <h3>
                <a href="<?php echo site_url('/advanced-forex')?>"> Single Advanced Forex </a>
            </h3>
            
            <hr> <br>
                <div class="img-wrap">
                    <?php the_post_thumbnail(); ?>
                </div>
            <hr> <br>
            <p> 
                <a href="<?php the_permalink(); ?>">
                    <?php the_content(); ?>
                </a>
            </p>
        </div>
        
        <?php endwhile; ?>

        <div class="pag-link" style="padding: 1rem 0"> 
            <?php echo paginate_links(); ?>
        </div>
        
    </div>
</div>


<?php get_footer();

