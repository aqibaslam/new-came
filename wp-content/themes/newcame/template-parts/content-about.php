<!-- feature-grid -->
<div class="feature-grid">
  <div class="container">
    <?php
    $services_title = get_field("services_title");
    if ($services_title){
      ?>
      <div class="services-heading">
        <h3><?php echo $services_title; ?></h3>
        <div class="agileits-line"> </div>
      </div>
      <?php
    }
    ?>
    <div class="agileits-feature-grids">
      <?php
      if (have_rows("add_services")){
        while (have_rows("add_services")){
          the_row("add_services");
          $service_image = get_sub_field("service_image");
          $service_title = get_sub_field("service_title");
          $service_description = get_sub_field("service_description");
          ?>
          <div class="col-sm-4 agileinfo-feature-grid">
            <div class="agileinfo-feature-info">
              <img src="<?php echo $service_image; ?>" alt="" />
              <h5><?php echo $service_title; ?></h5>
              <?php echo $service_description; ?>
            </div>
          </div>
          <?php
        }
      }
      ?>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- feature-grid -->
<!---728x90--->
<!-- team -->
<div class="team">
  <div class="container">
    <?php
    $team_title = get_field("team_title");
    if ($team_title) {
      ?>
      <div class="services-heading">
        <h3><?php echo $team_title; ?></h3>
        <div class="agileits-line"></div>
      </div>
      <?php
    }
    ?>
    <div class="team-row">
      <?php
      if (have_rows("add_team_members")){
        while (have_rows("add_team_members")){
          the_row("add_team_members");
          $team_member_image = get_sub_field("team_member_image");
          $team_member_name = get_sub_field("team_member_name");
          $about_team_member = get_sub_field("about_team_member");
          $team_member_facebook_url = get_sub_field("team_member_facebook_url");
          $team_member_twitter_url = get_sub_field("team_member_twitter_url");
          $team_member_instagram_url = get_sub_field("team_member_instagram_url");
          ?>
          <div class="col-md-3 team-grids">
            <div class="team-img">
              <img class="img-responsive" src="<?php echo $team_member_image; ?>" alt="">
              <div class="captn">
                <div class="captn-top">
                  <h4><?php echo $team_member_name; ?></h4>
                  <?php echo $about_team_member; ?>
                </div>
                <div class="wthree-social-grids">
                  <ul>
                    <li><a href="<?php echo $team_member_facebook_url; ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $team_member_twitter_url; ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $team_member_instagram_url; ?>"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
      }
      ?>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //team -->
<!-- //about -->