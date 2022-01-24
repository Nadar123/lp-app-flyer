<?php
// Silence is golden.

get_header();
?>
<div id="archive-main" class="archive-wrapper">
    <?php get_template_part('/banner/banner') ?>

    <div class="main-wrapper" style="width: 65%; margin: auto">
        <!--OPTION TWO -->
        <h1 style="padding: 8rem 0 0 0;" ><?php the_archive_title(); ?></h1>
        <h3><?php the_archive_description(); ?></h3> archive


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
            <p> 
                <a href="<?php the_permalink(); ?>">
                    <?php the_excerpt(); ?>
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