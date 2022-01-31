<?php
    get_header();
?>
<div id="advanced-forex-post single" class="post-wrapper">
  <?php get_template_part('/banner/banner') ?>
    

  
  <div  class="post-type-main-wrapper">

      <?php get_post_types_names(); ?>

        <div class="row">
            <div class="col-8">
                <?php while(have_posts()) : the_post(); ?>
            
                    <div class="content-blog">
                    
                        <h2 class="content-blog__title"> 
                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
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

                <div class="comments-wrapper-single">
                    <!--
                    <?//php if(comments_open() || get_comments_number()) : ?>
                        <?//php comments_template(); ?>
                    <?//php endif; ?>
                    -->

                </div>

                <div class="the5ers_related_posts">
                    <?php the5ers_related_posts(); ?>
                </div>     
            </div>


            <div class="col-4">
                <div class="the5ers-sidebar-wrapper">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>

    </div>
</div>



<?php get_footer();

