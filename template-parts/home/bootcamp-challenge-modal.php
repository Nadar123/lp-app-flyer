<?php
$ribbon_new                          = get_field('ribbon_new');
$challenge_modal_background          = get_field('challenge_modal_background');
$challenge_modal_title               = get_field('challenge_modal_title');
$challenge_modal_table_title         = get_field('challenge_modal_table_title');
$challenge_modal_table_inner_title   = get_field('challenge_modal_table_inner_title');
$challenge_modal_table_rpt           = get_field('challenge_modal_table_rpt');
$challenge_modal_table_body_rpt      = get_field('challenge_modal_table_body_rpt');

$funded_levels_table_title           = get_field('funded_levels_table_title');
$funded_levels_table_inner_tilte     = get_field('funded_levels_table_inner_tilte');
$funded_levels_table_rpt             = get_field('funded_levels_table_rpt');
$funded_levels_table_body_rpt        = get_field('funded_levels_table_body_rpt');

?>

<section class="challenge-modal-wrapper" style="background-imge: url(<?php echo $challenge_modal_background['url']?>);">
    <div class="challenge-modal-wrapper__content">
        <div class="ribbon_wrapper">
            <img class="ribbon" src="<?php echo $ribbon_new['url']; ?>" alt="">
        </div>
        <h3 class="title"><?php echo $challenge_modal_title; ?></h3>

        <div class="flex-table">
            <h3 class="title"><?php echo $challenge_modal_table_title; ?></h3>
            <div class="flex-table_view">
                <div class="inner-title">
                    <h4 class="subtitle"><?php echo $challenge_modal_table_inner_title;?></h4>
                </div>
                <div class="table-wrapper">
                    <table class="bootcamp">
                        <thead>
                            <tr class="challenge-modal-topic">
                            <?php if($challenge_modal_table_rpt) :?>
                            <?php foreach($challenge_modal_table_rpt as $key => $item ) :
                                $head_title = $item['head_title'];  
                            ?>
                                <th id="head<?php echo $key; ?>"> <?php echo $head_title;?></th>
                                
                                <?php endforeach;?>
                                <?php endif; ?>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if($challenge_modal_table_body_rpt) :?>
                            <?php foreach($challenge_modal_table_body_rpt as $key => $item) : 
                                $title = $item['title'];
                                $row_one = $item['row_one'];
                                $row_two = $item['row_two'];
                                $row_three = $item['row_three'];
                                $row_four = $item['row_four'];
                                $row_five = $item['row_five'];
                            ?>
                                <tr id="col-<?php echo $key?>">
                                    <td class="title-wrap dynamic-row-<?php echo $key;?>">
                                        <p class="title-wrapper"> <?php echo $title; ?></php></p>
                                    </td>
                                    
                                    <td class="row-<?php echo $key; ?>">
                                        <p id="row-one"><?php echo $row_one; ?> </p> 
                                    </td>

                                    <td class="row-<?php echo $key; ?>"> 
                                        <p id="row-two"><?php echo  $row_two;?></p>
                                    </td>

                                    <td class="row-<?php echo $key; ?>"> 
                                        <p> <?php echo $row_three; ?> </p>
                                    </td>
                                    <td class="row-<?php echo $key; ?>"> 
                                        <p> <?php echo $row_four; ?> </p>
                                    </td>
                                    <td class="row-<?php echo $key; ?>"> 
                                        <p> <?php echo $row_five; ?> </p>
                                    </td>
                                </tr>

                                <?php endforeach; ?>
                                <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <h3 class="title"><?php echo $funded_levels_table_title; ?></h3>

            <div class="inner-title">
                <h4 class="subtitle"><?php echo $funded_levels_table_inner_tilte;?></h4>
            </div>
            <div class="table-wrapper">
                <table class="founded-leves">
                    <thead>
                        <tr class="challenge-modal-topic">
                            <?php if($funded_levels_table_rpt) :?>
                                <?php foreach($funded_levels_table_rpt as $key => $item ) :
                                    $head_title = $item['head_title'];  
                                ?>
                                    <th id="head<?php echo $key; ?>"> <?php echo $head_title;?></th>
                                
                                <?php endforeach;?>
                            <?php endif; ?>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if($funded_levels_table_body_rpt) :?>
                            <?php foreach($funded_levels_table_body_rpt as $key => $item) : 
                                $title = $item['title'];
                                $row_one = $item['row_one'];
                                $row_two = $item['row_two'];
                                $row_three = $item['row_three'];
                                $row_four = $item['row_four'];
                                $row_five = $item['row_five'];
                            ?>
                                <tr id="col-<?php echo $key?>">
                                    <td class="title-wrap dynamic-row-<?php echo $key;?>">
                                        <p class="title-wrapper"> <?php echo $title; ?></php></p>
                                    </td>
                                    
                                    <td class="row-<?php echo $key; ?>">
                                        <p id="row-one"><?php echo $row_one; ?> </p> 
                                    </td>

                                    <td class="row-<?php echo $key; ?>"> 
                                        <p id="row-two"><?php echo  $row_two;?></p>
                                    </td>

                                    <td class="row-<?php echo $key; ?>"> 
                                        <p> <?php echo $row_three; ?> </p>
                                    </td>
                                    <td class="row-<?php echo $key; ?>"> 
                                        <p> <?php echo $row_four; ?> </p>
                                    </td>
                                    <td class="row-<?php echo $key; ?>"> 
                                        <p> <?php echo $row_five; ?> </p>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
        