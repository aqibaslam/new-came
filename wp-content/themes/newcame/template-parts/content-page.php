<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newcame
 */

?>


<div id="post-<?php the_ID(); ?>" class="container">
	<div class="row">
		<?php the_breadcrumb(); ?>
		<hr>
		<?php dynamic_sidebar( 'sidebar-shop' ); ?>
		<div class="col-md-9">
			<?php newcame_post_thumbnail(); ?>

			<div class="entry-content shop-product">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'newcame' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'newcame' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</div>
	</div>
	
</div><!-- #post-<?php the_ID(); ?> -->
