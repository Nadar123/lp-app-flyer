<?php
$lp_main_title            = get_field('lp_main_title');
$lp_main_text             = get_field('lp_main_text');
$lp_top_book_text_btn     = get_field('lp_top_book_text_btn');
$lp_top_book_url          = get_field('lp_top_book_url');
$lp_top_freesign_text_btn = get_field('lp_top_freesign_text_btn');
$lp_top_freesign_url      = get_field('lp_top_freesign_url');
$lp_top_freesign_icon     = get_field('lp_top_freesign_icon');
$dashboard_appflyer_image = get_field('dashboard_appflyer_image');
$lp_button_background     = get_field('lp_button_background');
$lp_button_background_mb  = get_field('lp_button_background_mb');
?>

<div class="main-lp-page">
    <section class="top-hero">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="inner-content">
                        <h1 class="title"><?php echo $lp_main_title; ?></h1>
                        <p class="text"><?php echo  $lp_main_text; ?></p>

                        <div class="buttons-wrapper">

                            <a class="demo link-url" href="<?php echo $lp_top_book_url; ?>">
                                <?php echo $lp_top_book_text_btn;?>
                            </a>
                            <a class="sign-free link-url" href="<?php echo $lp_top_freesign_url?>"> 
                                <?php echo $lp_top_freesign_text_btn?>
                                <img class="arrow-icon icon"src="<?php echo $lp_top_freesign_icon['url']; ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12 right-col">
                    <div class="dashboard-wrapper">
                        <img src="<?php echo $dashboard_appflyer_image['url']?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="button-background" style="background-image: url(<?php echo $lp_button_background['url']; ?>)"></div>
    <div class="mb-button-background" style="background-image: url(<?php echo $lp_button_background_mb['url']; ?>)"></div>

 </div>