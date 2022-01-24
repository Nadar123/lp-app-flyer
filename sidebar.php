
<!-- Sidebar -->
<div class="sidebar-wrapper">
    <div class="sidebar-widgets-wrapper">
        <?php if( is_active_sidebar( 'the5ers-sidebar' ) ){
                dynamic_sidebar( 'the5ers-sidebar' );
            }
        ?>
    </div>
</div> 

<?php 
$all_posts = array(
        'post_type' => 'any',
        'posts_per_page' => 5,
        'orderby'   => 'menu_order',
        'post_status' => 'publish',
        'orderby' => 'modified',
        'order' => 'DESC'
    );
$query = new WP_Query($all_posts);
while($query -> have_posts()) : $query -> the_post();
?>

<div class="post-type-the5ers">
    <a href="<?php the_permalink()?>">
        <h2><?php the_title(); ?> </h2>
        <div><?php the_post_thumbnail('recent_posts'); ?></div>
    </a>
</div>


<?php endwhile; wp_reset_postdata();?>


<!-- .sidebar end -->