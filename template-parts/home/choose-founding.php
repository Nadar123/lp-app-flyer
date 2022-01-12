<?php

$choose_founding_title      = get_field('choose_founding_title');
$choose_founding_option_rpt = get_field('choose_founding_option_rpt');
$choose_founding_btns_rpt   = get_field('choose_founding_btns_rpt');
$choose_founding_table_rpt_first   = get_field('choose_founding_table_rpt_first');
$choose_founding_table_rpt_first_body   = get_field('choose_founding_table_rpt_first_body');

?>


<section class="choose_founding_wrapper">
    <h3 class="title"><?php echo $choose_founding_title;?></h3>

    <div class="choose_founding_wrapper__content">
        <?php if($choose_founding_option_rpt) :?>
            <?php foreach( $choose_founding_option_rpt as $key => $item) :
                $title = $item['title'];
                $text  = $item['text'];
            ?>

            <div class="inner">
                <h4 class="title"><?php echo $title ?></h4>
                <p class="text"><?php echo $text?></p>
            </div>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <div class="tabs">
      <ul class="tabs-nav">
        <?php if($choose_founding_btns_rpt) : ?> 
            <?php foreach($choose_founding_btns_rpt as $key => $item) :
                $text_btn   = $item['text_btn'];   
            ?>
                <li><a class="tab-link" href="#tab-<?php echo $key;?>"><?php echo $text_btn; ?></a></li>
       
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>

    
      <div class="tabs-stage">
        <div id="tab-0">
          <table class="founding-table-option">
            <thead>
              <tr class="price-table-head">
              <?php if($choose_founding_table_rpt_first) :?>
                <?php foreach($choose_founding_table_rpt_first as $key => $item ) :
                  $head_title = $item['head_title'];  
                ?>
                  <th id="head<?php echo $key; ?>"> <?php echo $head_title;?></th>
                  
                  <?php endforeach;?>
                  <?php endif; ?>
              </tr>
            </thead>
            
              <tbody>
     
              <?php if($choose_founding_table_rpt_first_body) :?>
                <?php foreach($choose_founding_table_rpt_first_body as $key => $item) : 
                  $title = $item['title'];
                  $information = $item['information'];
                  $row_one = $item['row_one'];
                  $row_two = $item['row_two'];
                  $row_three = $item['row_three'];
                  $duration = $item['duration'];
                  $test = $item['test'];
                ?>
                    <tr id="col-<?php echo $key?>">
                      <td class="title-wrap dynamic-row-<?php echo $key;?>">
                        <p class="icon-title-wrapper">
                          <i class="fa fa-angle-double-right"></i> 
                          <?php echo $title; ?></php> 
                          <br>
                        </p>
                       
                          <p class="hidden-text test">
                            <?php echo $information; ?>
                          </p>
                      </td>
                      
                      <td class="row-one"><span id="row-one"><?php echo $row_one; ?> </span> </td>
                      <td class="row-two"> <span id="row-two"><?php echo  $row_two;?></span> </td>
                      <td class="row-three"> 
                        <span id="row-three" class="value">  <?php echo $row_three; ?> </span>
                      </td>
                    </tr>
                    <tr><?php echo $test; ?></tr>

                   <?php endforeach; ?>
                   <?php endif; ?>
                  </tbody>
              </table>
        </div>


        <div id="tab-1">
          <p>Phasellus pharetra aliquet viverra. Donec scelerisque tincidunt diam, eu fringilla urna auctor at.</p>
        </div>
        <div id="tab-2">
          <p>Phasellus pxc haretra aliquet viverra. Donec scelerisque tincidunt diam, eu fringilla urna auctor at.</p>
        </div>
      </div>
</div>

</section>
