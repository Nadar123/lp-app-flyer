<?php 
get_header();

?>
<div id="archive-advanced-forex" class="archive-wrapper">

    <?php get_template_part('/banner/banner') ?>

    <div class="main-wrapper archive-advanced-forex">

    <?php post_type_menu() ;?>

        <div class="row">
            <div class="col-8">
                <div class="archive-advanced-forex__inner">
                    <?php $categories = get_categories( array(
                        'orderby'   => 'name',
                        'order'     => 'ASC',
                        'include'   => '1'
                        
                    ) );
                    foreach($categories as $category) :
                        $args = array(
                            'post_type' => 'post',
                            'tax_query' => array(
                                array(

                                    'taxonomy' => 'category',
                                    'field'    => 'term_id',
                                'terms'    => $category->cat_ID,
                                    ),
                                ),
                            );
                        $query = new WP_Query($args); 
                    ?>

                        <?php if ( $query->have_posts() ): ?>
                        
                            <?php while($query->have_posts()): $query->the_post(); ?>
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
                            <?php endwhile ; ?>
                        <?php endif; ?>
    
    
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-md-12">
                <div class="the5ers-sidebar-wrapper">
                    <?php get_sidebar(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
</div>





<?php get_footer();
