<?php 
$the5ers_banner    = get_field('the5ers_banner');
$text_under_title  = get_field('text_under_title');
?>

<div class="page-wrapper__banner" style="background-image:url(<?php echo $the5ers_banner['url']?>)">

  <div class="page-wrapper__banner__content">
  
    <?php if(is_page()): ?>
      <h1 class="title page-title single-title"> <?php the_title();?> </h1>

      <?php elseif( is_single() || is_category() || is_archive() ) : ?>
          <h1 class="title archive-title"> Forex Blog - <?php the_archive_title(); ?></h1>
    <?php endif;?>
    <p class="option-text-under-title"><?php echo $text_under_title; ?></p>
  </div>

</div>