<?php
get_header();

$args['paged'] = $paged;
$post_type_query  = array(
    'post_type'     => 'advanced forex',
    'post_per_page' => 2,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'paged'          => get_query_var( 'paged' ),

);
$the_query = new WP_Query( $post_type_query );

?>



<?php get_footer();
