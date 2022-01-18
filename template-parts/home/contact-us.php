<?php

$contact_us_home_page_title     = get_field('contact_us_home_page_title');
$contact_us_home_page_subtitle  = get_field('contact_us_home_page_subtitle');
$testForm                       = get_field('testForm');
$contact_us_home_address        = get_field('contact_us_home_address');
?>


<section class="contact-us-wrapper">
    <div class="contact-us-wrapper__content">
        <h3 class="titl3"><?php echo $contact_us_home_page_title; ?></h3>
        <h4 class="subtitle"><?php echo $contact_us_home_page_subtitle; ?></h4>

        <div class="contact-wrapper">
          <div class="form-wrapper" data-aos="zoom-in"
          >
            <?php echo $testForm;?>
          </div>
          <div class="addres-wrapper">
            <div class="addres-wrapper__inner">
              <?php echo $contact_us_home_address; ?>
            </div>
          </div>
        </div>
    </div>


</section>




<div class="form-group">
  
</div>

  
  

