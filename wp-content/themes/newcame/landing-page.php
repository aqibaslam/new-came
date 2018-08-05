<?php
/*
 * Template Name: Home Page
 */
get_header();

$background_image = get_field("background_image");
if ($background_image){
	?>
	<!-- banner -->
	<div class="banner" style="background: url(<?php echo $background_image; ?>) no-repeat 0px 0px; background-size: cover">
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<?php
						if (have_rows("slides")){
							while (have_rows("slides")){
								the_row("slides");
								$title = get_sub_field("title");
								$body = get_sub_field("body");
								$button_text = get_sub_field("button_text");
								$button_url = get_sub_field("button_url");
								?>
								<li>
									<div class="banner_text">
										<h3><?php echo $title; ?></h3>
										<div class="w3ls-line"> </div>
										<p><?php echo $body; ?></p>
										<?php
										if ($button_text && $button_url){
										?>
										<div class="w3-button">
											<a href="<?php echo $button_url; ?>" class="btn btn-1 btn-1b"><?php echo $button_text; ?></a>
										</div>
									</div>
									<?php } ?>
								</li>
								<?php
							}
						}
						?>
					</ul>
				</div>
			</section>
		</div>
	</div>
<?php } ?>
	<!-- //banner -->
	<!---728x90--->
	<!-- services -->
<?php
$services_title = get_field("services_title");
if (have_rows("add_services") && $services_title){
	?>
	<div class="services">
		<div class="container">
			<div class="services-main">
				<div class="services-heading">
					<h2><?php echo $services_title; ?></h2>
					<div class="agileits-line"> </div>
				</div>
				<div class="services-bottom">
					<?php
					$i = 2;
					while(have_rows("add_services")){
						the_row("add_services");
						$icon_name = get_sub_field("icon_name");
						$service_title = get_sub_field("service_title");
						$service_body = get_sub_field("service_body");
						$service_image = get_sub_field("service_image");
						if ($i % 2 == 0){
							?>
							<div class="services-grid">
								<div class="col-md-6 services-grid-left">
									<div class="services-icon"><i class="<?php echo $icon_name; ?>" aria-hidden="true"></i></div>
									<div class="services-text">
										<h4><?php echo $service_title; ?></h4>
										<p><?php echo $service_body; ?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-6 services-grid-right">
									<img src="<?php echo $service_image; ?>" alt="" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<?php
						}else{
							?>
							<div class="services-grid">
								<div class="col-md-6 services-grid-right ulta-grid">
									<img src="<?php echo $service_image; ?>" alt="" />
								</div>
								<div class="col-md-6 services-grid-left ulta-grid">
									<div class="services-icon"><i class="<?php echo $icon_name; ?>" aria-hidden="true"></i></div>
									<div class="services-text">
										<h4><?php echo $service_title; ?></h4>
										<p><?php echo $service_body; ?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<?php
						}
						$i++;
					}
					?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<?php } ?>
	<!--services -->
	<!---728x90--->
	<!-- services-bottom -->
<?php
$background_image = get_field("background_image");
$message_title = get_field("message_title");
$message_body = get_field("message_body");
if ($background_image && $message_title && $message_body){
	?>
	<div class="text-grid" style="background:url(<?php echo $background_image; ?>) no-repeat 0px 0px;">
		<div class="container">
			<h4><?php echo $message_title; ?></h4>
			<p><?php echo $message_body; ?></p>
		</div>
	</div>
<?php } ?>
	<!-- //services-bottom -->
	<!---728x90--->
	<!-- blog -->
	<div class="blog">
		<div class="container">
		<?php
		$blog_title = get_field("blog_title");
		if($blog_title){
		?>
				<div class="services-heading">
						<h3>Our Blog</h3>
						<div class="agileits-line"> </div>
				</div>
				<?php
				}
				?>
				<div class="agileinfo-blog-grids">
				<?php
				$args = array(
					'numberposts' => 3,
					'post' => 'post',
					'status' => 'publish',
				);
				$query = new WP_Query($args);
				if($query->have_posts()){
					while($query->have_posts()){
						$query->the_post();
				?>
						<div class="col-md-4 wthree-blog">
								<div class="w3-agileits-blog">
										<div class="w3-agileits-blog-img">
											<a href="<?php echo the_permalink(); ?>">
												<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" />
											</a>
										</div>
										<div class="w3-agileits-blog-text">
												<a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
												<?php echo the_excerpt(); ?>
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
	<!-- //blog -->
<?php
get_footer();
