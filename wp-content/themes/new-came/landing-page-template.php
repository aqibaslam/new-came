<?php
/**
 * Template Name: Landing Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


	<section id="hero-section" class="heero-section">
      <div class="slider">
      	<?php
	        if( have_rows('slider_images') ):
	            while ( have_rows('slider_images') ) : the_row();
	    ?>
        <div>
        	<img src="<?php the_sub_field('image'); ?>" style = "width: 100%; height: 400px;">
        </div>
        
        <?php  
	       endwhile;
	       else :
	        // no rows found
	       endif;
	    ?>
      </div>
    </section>
    <div class="banner">
		<div class="container">

			
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- //banner -->
	<!---728x90--->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="services-main">
				<div class="services-heading">
					<h2><?php echo get_field('services_title'); ?></h2>
					<div class="agileits-line"> </div>
				</div>

				<div class="services-bottom">
					
					<div class="services-grid">
                      <?php
                        if( have_rows('services_name') ):
                            while ( have_rows('services_name') ) : the_row();
                        ?>
						<div class="col-md-6 services-grid-left">
							<div class="services-icon"><i class="fa fa-envira" aria-hidden="true"></i></div> 
							
							<div class="services-text">
								<h4><?php the_sub_field('service_title'); ?></h4>
								<p><?php the_sub_field('service_description'); ?></p>
							</div>
							<
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-6 services-grid-right">
							<img src="<?php the_sub_field('service_image'); ?>" alt="" />
						</div>
						<div class="clearfix"> </div>
						<?php  
                           endwhile;
                           else :
                            // no rows found
                           endif;
                        ?>
					</div>
					<div class="services-grid">	
						<?php
	                        if( have_rows('services_name') ):
	                            while ( have_rows('services_name') ) : the_row();
                        ?>				
						<div class="col-md-6 services-grid-right ulta-grid">
							<img src="<?php the_sub_field('service_image_1'); ?>" alt="" />
						</div>
						<div class="col-md-6 services-grid-left ulta-grid">
							<div class="services-icon"><i class="fa fa-magnet" aria-hidden="true"></i></div> 
							<div class="services-text">
								<h4><?php the_sub_field('service_title_1'); ?></h4>
								<p><?php the_sub_field('service_description_1'); ?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
						<?php  
	                       endwhile;
	                       else :
	                        // no rows found
	                       endif;
	                    ?>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--services -->
	<!---728x90--->
	<!-- services-bottom -->
	<div class="text-grid">
		<div class="container">
			<h4><?php echo get_field('banner_title'); ?></h4>
			<p><?php echo get_field('banner_description'); ?></p>
		</div>
	</div>
	<!-- //services-bottom -->
	<!---728x90--->
	<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="services-heading">
				<h3><?php echo get_field('blog_name'); ?></h3>
				<div class="agileits-line"> </div>
			</div>
			<div class="agileinfo-blog-grids">
				<?php
	                if( have_rows('blog') ):
	                    while ( have_rows('blog') ) : the_row();
                ?>
				<div class="col-md-4 wthree-blog">
					<div class="w3-agileits-blog">
						<div class="w3-agileits-blog-img">
							<a href="single.html"><img src="<?php the_sub_field('blog_image'); ?>" alt="" /></a>
						</div>
						<div class="w3-agileits-blog-text">
							<a href="single.html"><?php the_sub_field('blog_title'); ?></a>
							<p><?php the_sub_field('blog_description'); ?></p>
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
      </main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

		
