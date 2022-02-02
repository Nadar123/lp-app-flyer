<?php
$product_post_list_rpt = get_field('product_post_list_rpt');
$product_post_price    = get_field('product_post_price');
$product_post_url      = get_field('product_post_url');


    get_header();
?>
<div id="single" class="post-wrapper">
  <?php get_template_part('/banner/banner') ?>
    

  
  <div  class="post-type-main-wrapper">


    <div class="row">
        <div class=".col-xxl-12 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <?php while(have_posts()) : the_post(); ?>
                <div class="content-blog">
                    <h2 class="content-blog__title"> 
                        <?php the_title(); ?>
                    </h2>
                    <div class="small-box">
                        <?php get_template_part('template-parts/single/dates') ?>
    
                        <?php get_template_part('template-parts/single/tags') ?>
                    </div>
    
                    <section class="post-content">
    
                        <div class="post-content__img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                            <div class="content-post-wrapper">
                                <?php the_content(); ?></p> 
                            </div> 
                        
                    </section>
                </div>
            <?php endwhile; ?> 

            <div class="product-post-list">
                <?php if( $product_post_list_rpt ) : ?>
                    <?php foreach($product_post_list_rpt as $key => $item) :
                        $text = $item['text'];
                    ?>
                    <div class="inner-post-list">
                        <p class="text"> <span class="icon"> &#10003; </span> <?php echo $text; ?></p>
                    </div>
              
                    <?php endforeach;?>
                <?php endif; ?>
            </div>  
            
            <div class="price-wrapper">
                <h2 class="price"> <span class="currency">&#8364</span> <?php echo $product_post_price; ?></h2>
            </div>
         </div>

         <div class="button-wrapper">
             <a 
                class="btn btn-warning"
                href="<?php echo $product_post_url; ?>"> <?php echo __('sign up', 'the5ers');?></a>
         </div>
    </div>
</div>


<?php get_footer();

