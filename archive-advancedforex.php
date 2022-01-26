<?php
// Silence is golden.

get_header();
?>

<div id="archive-advanced-forex" class="archive-wrapper">
  <?php get_template_part('/banner/banner') ?>

    <div class="main-wrapper archive-advanced-forex">
    <h3 class="archive-title"><?php the_archive_title(); ?></h3>
        <?php while(have_posts()) : the_post(); ?>
        
            <div class="content-blog">
            
                <h2 class="content-blog__title"> 
                <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>
                <div style="padding: 1rem 0" class="small-box">
                    <p> 
                        <span class="date"><?php the_time('n.j.y'); ?></span> |
                        <span class="time"><?php the_time('g.i.a'); ?></span> |
                        <span class="category"><?php echo get_the_category_list(', '); ?></span> 
                    </p>
                </div>
                <div class="tags">
                    <?php $tags = get_tags(); ?>
                    <i class="fas fa-tag"></i>
                    <?php foreach ( $tags as $tag ) : ?>
                        <a class="tage-link" href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag">
                            <?php echo $tag->name; ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <p> 
                    <a href="<?php the_permalink(); ?>">
                        <?php the_excerpt(); ?>
                    </a>
                </p>
            </div>
        
        <?php endwhile; ?>

        <div class="the5ers-sidebar-wrapper">
            <?php get_sidebar(); ?>
        </div>

        <div class="pag-link" style="padding: 1rem 0"> 
            <?php echo paginate_links(); ?>
        </div>
        
    </div>
</div>


<?php get_footer();