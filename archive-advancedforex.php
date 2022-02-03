<?php
get_header();

$args['paged'] = $paged;
$post_type_query  = array(
    'post_type'     => 'advanced forex',
    'post_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'paged'          => get_query_var( 'paged' ),

);
$the_query = new WP_Query( $post_type_query );

?>

<div id="archive-advanced-forex" class="archive-wrapper">
  <?php get_template_part('/banner/banner') ?>

    <div class="main-wrapper archive-advanced-forex">

        <?php post_type_menu() ;?>

        <div class="row">

            <div class="col-xl-8 col-md-12 col-12">
                <div class="archive-advanced-forex__inner">

                    <?php if ( $the_query->have_posts() ) : ?>
            
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="archive-content">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="img-wrapper">
                                        <?php the_post_thumbnail('archive_posts'); ?>
                                    </div>
                                </a> 

                                    <div class="text-wrappper">
                                        <a class="title-link" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                        <?php the_excerpt(); ?>
                                        <a class="post-link" href="<?php the_permalink(); ?>"> 
                                            <?php echo __('read more', 'the5ers');  ?> 
                                            <sapn class="arrow">&#8658; </sapn>
                                        </a> 
                                    </div>
                            </div>
                        <?php endwhile; ?>
                            
                            
                    <?php endif;?>

                </div>
                <div class="events-pagination">
                    <?php echo paginate_links(); ?>
                </div>
                <?php wp_reset_postdata();?>
        
            </div>
        
            <div class="col-12 col-xl-4 col-md-12">
                <div class="the5ers-sidebar-wrapper">
                    <?php get_sidebar(); ?>
                </div>
          </div>

        </div>
    </div>
</div>

<?php get_footer();
