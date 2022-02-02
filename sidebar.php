
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
        'post_type' => 'post',
        'posts_per_page' => 5,
        'orderby'   => 'menu_order',
        'post_status' => 'publish',
        'orderby' => 'modified',
        'order' => 'DESC'
    );
$query = new WP_Query($all_posts);
while($query -> have_posts()) : $query -> the_post();
?>

<div class="sidebar-post-type-the5ers">
    <a class="post-link" href="<?php the_permalink()?>">
        <div><?php the_post_thumbnail('recent_posts'); ?></div>
        <p class="post-text"><?php the_title(); ?> </p>
    </a>
</div>


<?php endwhile; wp_reset_postdata();?>


<!-- .sidebar end -->