<?php 
$team_members_title        = get_field('team_members_title');
$team_members_rpt          = get_field('team_members_rpt');
?>


<section class="team-members-wrapper">
    
    <div class="team-members-wrapper__inner">
      <h3 class="title"> <?php echo $team_members_title?></h3>

      <div class="team-members-wrapper__list">
        <?php if($team_members_rpt) :?>
          <?php foreach($team_members_rpt as $key => $item ) : 
            $image       = $item['image'];
            $name        = $item['name'];
            $position    = $item['position'];
            $description = $item['description'];

          ?>

          <div class="item" data-aos="fade-up">
            <div class="member-img-wrapper">
              <img src="<?php echo $image['url']?>" alt="">
            </div>
            <h3 class="name"><?php echo $name ?></h3>
            <h5 class="position"><?php echo $position;?></h5>
            <p class="description"><?php echo $description;?></p>
          </div>

          <?php endforeach; ?>

        <?php endif; ?>
      </div>
    </div>

</section>