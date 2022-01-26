<?php 
$contactPage_us_home_page_title     = get_field('contactPage_us_home_page_title');
$contactPage_us_home_page_subtitle  = get_field('contactPage_us_home_page_subtitle');
$contactPage_page_Form              = get_field('contactPage_page_Form');
$contactPage_us_home_address        = get_field('contactPage_us_home_address');

 /* Template Name: Contact Template */
 get_header();

?>
<div id="contact-page" class="page-wrapper">
  <?php get_template_part('/banner/banner') ?>

  <section class="contact-us-wrapper">
      <div class="contact-us-wrapper__content">
          <h3 class="titl3"><?php echo $contactPage_us_home_page_title; ?></h3>
          <h4 class="subtitle"><?php echo $contactPage_us_home_page_subtitle; ?></h4>
  
          <div class="contact-wrapper">
            <div class="form-wrapper" data-aos="zoom-in">
              <?php echo $contactPage_page_Form;?>

            </div>
            <div class="addres-wrapper">
              <div class="addres-wrapper__inner">
                <?php echo $contactPage_us_home_address; ?>
              </div>
            </div>
          </div>
      </div>
  
  
  </section>
</div>


<?php get_footer(); 

