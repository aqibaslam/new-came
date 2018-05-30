<?php
/**
 * Template Name: Gallery Template
 */

get_header(); ?>

<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>Our Gallery</h2>
			<div class="agileits-line"> </div>
		</div>
	</div>
	<!-- //banner -->
	<!---728x90--->
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="gallery-grids">
				<?php
			        if( have_rows('gallery_field') ):
			            while ( have_rows('gallery_field') ) : the_row();
	            ?>
				<div class="col-md-4 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/g1.jpg" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
								<img src="<?php the_sub_field('galery_image'); ?>" alt="" />
								<figcaption>
									<h3><?php the_sub_field('gallary_title'); ?></h3>
									<p> <?php the_sub_field('gallery_description'); ?></p>
								</figcaption>	
							</a>
						</figure>
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
	<!-- //gallery -->
<?php
get_footer();