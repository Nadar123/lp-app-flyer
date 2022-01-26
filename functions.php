<?php
  get_template_part('/functions/enqueue');
  get_template_part('/functions/child-helper');
  get_template_part('/functions/types');
  get_template_part('/functions/widgets');
  get_template_part('/functions/related-post-articles');
  get_template_part('/functions/theme-support');
  get_template_part('/functions/post-type-names');

  function html5_search_form( $form ) { 
    $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
   <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
    <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search..." />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('', 'domain') .'" />
    <i class="fas fa-search"></i></form></section>';
    return $form;
}

add_filter( 'get_search_form', 'html5_search_form' );