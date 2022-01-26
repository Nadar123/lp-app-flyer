<?php

/**
 * get post types name for posts single pages
 */
function get_post_types_names() {
    global $post;

    $the5ers_post_types = get_post_types( array('public' => true, '_builtin' => false, 'query_var' => true), 'objects', 'and' );

    echo '<ul class="post-type-list-names">';
    
        foreach( $the5ers_post_types as $post_type_object ){
            if( $post->post_type == $post_type_object->name ) {
              echo '<li class="item selected"><a class="link" href=" ' .
               get_post_type_archive_link($post_type_object) . ' ">' . $post_type_object->label . '</a> </li>';
                
                
            } else {
                echo '<li class="item"><a class="link" href="">'. $post_type_object->label . '</a></li>';
            }
        }

    echo '</ul>';

    wp_reset_postdata();
}