<?php
/**
 * Add a sidebar.
 */
function the5ers_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'the5ers Sidebar', 'the5ers' ),
        'id'            => 'the5ers-sidebar',
        'description'   => __( 'Widgets sidebar', 'the5ers' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'the5ers_widgets_init' );