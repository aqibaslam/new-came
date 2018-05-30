<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New-CAME
 */
global $redux_demo;
?>


<div class="footer">
		<div class="container">
			<div class="agileinfo_footer_grids">
				<div class="col-md-4 agileinfo_footer_grid">
					<div class="logo">
						<?php 
						$footer_logo_opt = $redux_demo['footer_logo_opt']['url'];
						if ($footer_logo_opt) {
						?>
							<img src="<?php echo $redux_demo['footer_logo_opt']['url']; ?>">
						<?php
						}
						?>
					</div>
					<p><?php echo $redux_demo['footer_text_opt']; ?></p>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>

				<?php dynamic_sidebar('footer'); ?>

				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Navigation</h3>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu',   'menu_class' => 'agileinfo_footer_grid_nav', 'before' => '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>' ) ); ?>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile_footer_copy">
				<p><?php echo $redux_demo['footer_copyright_text_opt']; ?> <a href="http://w3layouts.com/"><?php echo $redux_demo['developed_by']; ?></a></p>
			</div>
		</div>
	</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>

</body>
</html>