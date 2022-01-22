<?php 
$bootcamp_faq_bootcamp_rpt  = get_field('bootcamp_faq_bootcamp_rpt');
$bootcamp_faq_bootcamp_url  = get_field('bootcamp_plan_challenge_stages_btn');
  /* Template Name: bootcamp Template */
  get_header();
?>

<div id="bootcamp-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

  <div class="bootcamp-wrapper">
 
    <?php get_template_part('template-parts/bootcamp/top-section'); ?>

    <?php get_template_part('template-parts/bootcamp/challenge-stages'); ?>


  
    <section class="faq-bootcamp-wrapper">
      <div class="accordion-container">
          
          <?php if( $bootcamp_faq_bootcamp_rpt ) : ?>

              <?php foreach($bootcamp_faq_bootcamp_rpt as $key => $item) :
                  $main_title = $item['main_title'];
              ?>
                  <div class="toop-title">
                      <h3 class="title"><?php echo $main_title; ?></h3>
                  </div>

                  <?php foreach( $item['inner'] as $val => $item ) : 
                      $title   = $item['title'];
                      $text    = $item['text'];
                  ?>

                      <div class="set">
                          <a href="#">
                          <?php echo $title; ?>
                          <i class="fas fa-plus"></i>
                          <i class="fas fa-minus"></i>
                          </a>
                          <div class="content">
                          <p class="text"><?php echo $text; ?></p>
                          </div>
                      </div>

                  <?php endforeach;?>
              <?php endforeach;?>
          <?php endif; ?>
      </div>
      
      <div class="bootcamp-button-wrapper">
          <a href="<?php echo $bootcamp_faq_bootcamp_url;?>"> 
          <?php echo __('Sign Up', 'fivers')?>
          </a>
      </div>

       <!-- TrustBox widget - Grid -->
        <div 
            class="trustpilot-widget" 
            data-locale="en-US"
            data-template-id="539adbd6dec7e10e686debee" 
            data-businessunit-id="5db057bfeb288e000150a196" 
            data-style-height="500px" 
            data-style-width="100%" 
            data-theme="light" 
            data-tags="showcase"
            data-stars="3,4,5">
            <a 
                href="https://www.trustpilot.com/review/the5ers.com" 
                target="_blank" 
                rel="noopener">
                Trustpilot
            </a>
        </div>
        <!-- End TrustBox widget -->

    </section>

                <?php

                $contact_form_7_title     = get_field('contact_form_7_title');
                $contact_form_7_subtitle  = get_field('contact_form_7_subtitle');
                $contact_form_7_form     = get_field('contact_form_7_form');
                $contact_form_address    = get_field('contact_form_address');
            ?>


        <section class="contact-us-wrapper">

            <div class="contact-us-wrapper__content">
                <h3 class="titl3"><?php echo $contact_form_7_title; ?></h3>
                <h4 class="subtitle"><?php echo $contact_form_7_subtitle; ?></h4>

                <div class="contact-wrapper">
                <div class="form-wrapper" data-aos="zoom-in"
                >
                    <?php echo $contact_form_7_form;?>
                </div>
                <div class="addres-wrapper">
                    <div class="addres-wrapper__inner">
                    <?php echo $contact_form_address; ?>
                    </div>
                </div>
                </div>
            </div>

        </section>

  </div>
</div>



<?php get_footer();
