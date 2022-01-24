<?php
  get_template_part('/functions/enqueue');
  get_template_part('/functions/child-helper');
  get_template_part('/functions/types');
  get_template_part('/functions/widgets');



/**
 * Theme Support
 */
if( function_exists('add_theme_support') ) {
    // menu suppport 
    add_theme_support('menus');
    //Thumbnail theme support
    add_theme_support('post-thumbnails');
    add_image_size('large', 1000, '', true);
    add_image_size('medium', 450, 200, true);
    add_image_size('small', 250, '', true);
    add_image_size('recent_posts', 100, 44, true);


    //Theme Support for yoast
    add_theme_support('title-tag');
    //enable post and comment RSS feed links to head
    add_theme_support('automtic-feed-links');
    // enable support for wp galleries with figure tag
    add_theme_support('htnl5', array('gallery'));
}

  // Remove default galleries css style
  add_filter('use_default_gallery_style', '__return_false');

/**
 * get rid of the “Category:”, “Tag:”, “Author:”, “Archives:” and “Other taxonomy name:"
 * PARAMS: mines
*/
  function cc_mine_types($mines) {
    $mines['svg'] = 'images/svg+xml';
    return $mines;
  }
  add_filter('upload_mimes', 'cc_mine_types');

/**
 * option page ACF
 *
*/
  if(function_exists('acf_add_options_page')) {
    acf_add_options_page();
  }

/**
 * get rid of the “Category:”, “Tag:”, “Author:”, “Archives:” and “Other taxonomy name:"
 * PARAMS: title
 */
  function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

/**
 * deactivate new block editor
 */
function phi_theme_support() {
  remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'phi_theme_support' );



// ********* BEGIN HERE *********

function sv_related_posts($args = array()) {

  global $post;

  // default args
  $args = wp_parse_args($args, array(
      'post_id' => !empty($post) ? $post->ID : '',
      'taxonomy' => 'category',
      'limit' => 6,
      'post_type' => !empty($post) ? $post->post_type : 'post',
      'orderby' => 'rand'
  ));
// print_r($args);
// die();
  // check taxonomy
  if (!taxonomy_exists($args['taxonomy'])) {
      return;
  }

  // post taxonomies
  $taxonomies = wp_get_post_terms($args['post_id'], $args['taxonomy'], array('fields' => 'ids'));

  if (empty($taxonomies)) {
      return;
  }

    $post_types = get_post_types( array('public' => true, '_builtin' => false ), 'objects', 'and' );
    foreach( $post_types as $post_type_object ){
        echo '<h2>' . $post_type_object->label . '</h2>';
    }
    die();

  // query
  $related_posts = get_posts(array(
      'post__not_in' => (array)$args['post_id'],
      'post_type' => 'any',
      'tax_query' => array(
          array(
              'taxonomy' => $args['taxonomy'],
              'field' => 'term_id',
              'terms' => $taxonomies
          ),
      ),
      'posts_per_page' => $args['limit'],
      'orderby' => $args['orderby'],
      // 'order' => $args['order']
  ));

  if (!empty($related_posts)) { ?>
      <div class="related-posts">
          <h3 class="widget-title"><?php _e('Related articles', 'textdomain'); ?></h3>

          <ul class="related-posts-list">
              <?php
              foreach ($related_posts as $post) {
                  setup_postdata($post);
                  ?>
                  <li>
                      <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php if (has_post_thumbnail()) { ?>
                              <div class="thumb">
                                  <?php echo get_the_post_thumbnail(null, 'medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                              </div>
                          <?php } ?>
                          <h4><?php the_title(); ?></h4>
                      </a>
                  </li>
              <?php } ?>
          </ul>
          <div class="clearfix"></div>
      </div>
      <?php
  }

  wp_reset_postdata();
}
