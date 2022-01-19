<?php 
$the5ers_banner    = get_field('the5ers_banner');
$text_under_title  = get_field('text_under_title');
?>

<div class="page-wrapper__banner" style="background-image:url(<?php echo $the5ers_banner['url']?>)">

  <div class="page-wrapper__banner__content">
    <h1 class="title"><?php the_title();?></h1>
    <p class="option-text-under-title"><?php echo $text_under_title; ?></p>
  </div>

</div>