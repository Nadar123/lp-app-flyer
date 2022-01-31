<?php 
$the5ers_banner    = get_field('the5ers_banner', 'option');
$text_under_title  = get_field('text_under_title', 'option');
?>

<div class="page-wrapper__banner" style="background-image:url(<?php echo $the5ers_banner['url']?>)">

  <div class="page-wrapper__banner__content">
  
    <?php if(is_page() || is_single()) : ?>
      <h1 class="title page-title single-title"> <?php the_title();?> </h1>
      <?php else : ?>
          <h1 class="title archive-title"><?php the_archive_title(); ?></h1>
    <?php endif;?>
    <p class="option-text-under-title"><?php echo $text_under_title; ?></p>
  </div>

</div>