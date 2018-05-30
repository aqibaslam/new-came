<?php
/**
 * Template Name: About-us template
 */

get_header(); ?>

<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>About Us</h2>
			<div class="agileits-line"> </div>
		</div>
	</div>
	<!-- //banner -->
	<!---728x90--->
	<!-- about -->
	<!-- about-top -->
	
	<!-- //about-top -->
	<!---728x90--->
	<!-- feature-grid -->
	<div class="feature-grid">
		<div class="container">
			<div class="services-heading">

				<h3><?php echo get_field('services_title'); ?></h3>
				<div class="agileits-line"> </div>
			</div>
			<div class="agileits-feature-grids">
				<?php
	                if( have_rows('servies_list') ):
	                    while ( have_rows('servies_list') ) : the_row();
                ?>
				<div class="col-sm-4 agileinfo-feature-grid">
					<div class="agileinfo-feature-info">
						<img src="<?php the_sub_field('service_image'); ?>" alt="" />
						<h5><?php the_sub_field('sevice_title'); ?></h5>
						<p><?php the_sub_field('service_description'); ?></p>
					</div>
				</div>
				<?php  
                   endwhile;
                   else :
                    // no rows found
                   endif;
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
			<div class="services-heading">
				<h3><?php echo get_field('team_title'); ?></h3>
				<div class="agileits-line"> </div>
			</div>
			<div class="team-row">
				<?php
	                if( have_rows('team_member_details') ):
	                    while ( have_rows('team_member_details') ) : the_row();
                ?>
					<div class="col-md-3 team-grids">
						<div class="team-img" >
							<img class="img-responsive" src="<?php the_sub_field('team_member_image'); ?>" alt="" style="height: 300px; width: 255px">
							<div class="captn">
								<div class="captn-top">
									<h4><?php the_sub_field('team_member_name'); ?></h4>
									<p><?php the_sub_field('team_member_description'); ?></p>
								</div>
								<div class="wthree-social-grids">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				<?php  
                   endwhile;
                   else :
                    // no rows found
                   endif;
                ?>				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- //about -->
	


<?php
get_footer();