<?php
$footer_soical_icons_rpt      = get_field('footer_soical_icons_rpt', 'option');
$footer_payment_icons_rpt     = get_field('footer_payment_icons_rpt', 'option');   
$footer_copyrightrs_and_text  = get_field('footer_copyrightrs_and_text', 'option');   

?>
      
      <footer class="footer-wrapper">
        <div class="footer-wrapper__inner" >
              <?php footer_menu(); ?>

              <div class="widget-wrapper">
      
                  <div class="soical-icons-wrapper">
                      
                      <?php if($footer_soical_icons_rpt) : ?>
                          <?php foreach($footer_soical_icons_rpt as $key => $item): 
                              $icon = $item['icon'];
                              $url  = $item['url'];
                          ?>
                              <div class="soical-icons-wrapper__content">
                                  <a href="<?php echo $url?>">
                                      <?php echo $icon; ?>
                                  </a>
                              </div>
                          <?php endforeach; ?>
                      <?php endif?>
      
                  </div>
      
                  <div
                      class="trustpilot-widget" 
                      data-locale="en-US" 
                      data-template-id="5613c9cde69ddc09340c6beb" 
                      data-businessunit-id="5db057bfeb288e000150a196" 
                      data-style-height="100%" 
                      data-style-width="100%" 
                      data-theme="dark" 
                      data-font-family="Open Sans" 
                      style="position: relative;">
                          <iframe 
                          title="Customer reviews powered by Trustpilot" 
                          loading="auto" 
                          src="https://widget.trustpilot.com/trustboxes/5613c9cde69ddc09340c6beb/index.html?templateId=5613c9cde69ddc09340c6beb&amp;businessunitId=5db057bfeb288e000150a196#locale=en-US&amp;styleHeight=100%25&amp;styleWidth=100%25&amp;theme=dark&amp;fontFamily=Open%20Sans" 
                          style="position: relative; height: 98px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                          <iframe 
                              title="Customer reviews powered by Trustpilot" 
                              loading="auto" 
                              src="https://widget.trustpilot.com/trustboxes/5613c9cde69ddc09340c6beb/popup.html?templateId=5613c9cde69ddc09340c6beb&amp;businessunitId=5db057bfeb288e000150a196#locale=en-US&amp;styleHeight=100%25&amp;styleWidth=100%25&amp;theme=dark&amp;fontFamily=Open%20Sans" 
                              style="position: absolute; z-index: 10; top: 100%; width: 100%; border-style: none; display: none; overflow: hidden;">
                          </iframe>    
                  </div>
      
                  <div class="payment-icons-wrapper">
                      <div class="inner">
                          
                          <?php if($footer_payment_icons_rpt) : ?>
                              <?php foreach($footer_payment_icons_rpt as $key => $item): 
                                  $icon = $item['icon'];
                              ?>
                                  <div class="payment-icons-wrapper__content">
                                     <img src="<?php echo $icon['url']; ?>" alt="">
                                  </div>
                              <?php endforeach; ?>
                          <?php endif?>
    
                      </div>
      
                  </div>
              
              </div>
    
        </div>
        
        <div class="fivers-footer-info">
            <?php echo $footer_copyrightrs_and_text; ?>
        </div>

      </footer>
   

      <?php wp_footer(); ?>
    </body>
</html>