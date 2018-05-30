<?php
/**
 * Template Name: Full Width Template
 */

get_header(); ?>

	<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>Contact Us</h2>
			<div class="agileits-line"> </div>
		</div>
	</div>
	<!-- //banner -->
	<!---728x90--->
	<!-- contact -->
	<div class="contact-top">
		<div class="container">
			<div class="contact-grids">
				<?php echo do_shortcode('[contact-form-7 id="51" title="New-CAME-Contact Form"]'); ?>
				<div class="col-md-4 contact-right">
					<div class="contact-text">
						<h4>Working Hours :</h4>
						<p> Monday – Saturday 5:00 a.m – 9:00 p.m </p>
						<p>	Sunday 10 a.m – 4 p.m </p>
						<p><span class="glyphicon glyphicon-earphone"></span> +11 999 8888 7777 </p> 
					</div> 
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>

	<div class="map">  
		<iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d27601.580209872278!2d71.47265193529128!3d30.145766175918016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m1!2sNew+Chaudhary+Agri+Cultural+Mech+Workshop%2C+Bahawal+Pur+by+pass%2C+Chowk%2C+Basti+Dera+Muhammadi%2C+Multan%2C+Punjab%2C+Pakistan!4m5!1s0x393b3725edb92f55%3A0x94367dcd7c00130!2sNew+Chaudhary+Agri+Cultural+Mech+Workshop%2C+Bahawal+Pur+by+pass%2C+Chowk%2C+Multan%2C+Pakistan!3m2!1d30.145696599999997!2d71.49016209999999!5e0!3m2!1sen!2s!4v1526384600952" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		 
	</div>

<?php
get_footer();