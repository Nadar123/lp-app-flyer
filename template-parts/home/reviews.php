<?php 
$become_fivers_funded_link = get_field('become_fivers_funded_link');
$company_icon_rpt         = get_field('company_icon_rpt');

?>
<section class="reviews-wrapper">
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
    <div class="button-wrapper">
        <a class="btn btn-warning" href="<?php echo $become_fivers_funded_link;?>">
            <?php echo __('Become a 5%ers funded trader now', '') ?>
        </a>
    </div>

    <div class="icons-wrapper">
        <?php if($company_icon_rpt) : ?>
            <?php foreach( $company_icon_rpt as $key => $item) : 
                $image = $item['image'];
            ?>
            <div class="icons-wrapper__inner">
                <img src="<?php echo $image['url'] ?>" alt="">
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</section>