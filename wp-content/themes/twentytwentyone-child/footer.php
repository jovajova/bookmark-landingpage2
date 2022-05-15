<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer">		
		<div class="blp-top-footer">
			<div class="content-area">
				<p class="text-count">35,000+ Already Joined</p>
				<h2 class="footer-cta-title">Stay up-to-date with what we're doing</h2>
				<div class="footer-cta-form">
					<?php echo do_shortcode('[formidable id=2 title=true description=true]'); ?>
				</div>
			</div>
		</div>
		<div class="blp-bottom-footer">	
			<div class="content-area blp-row">
				<div class="blp-col-3 blp-col-xs-12">
					<img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/logo-bookmark-footer.svg" width="200px" height="auto">
				</div>
				<div class="blp-col-6 blp-col-xs-12">
					<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
						<ul class="footer-navigation-wrapper">
							<?php
							wp_nav_menu(
							  array(
							    'menu' => 'main-menu',
							    'link_before' => '<span class="menu-list-item">',
							    'link_after' => '</span>',
							  )
							);
							?>
						</ul><!-- .footer-navigation-wrapper -->
					</nav><!-- .footer-navigation -->
				</div>
				<div class="blp-col-3 blp-col-xs-12">
					<div class="social-icon blp-row">
						<div class="blp-col-6"><a href="#"><i class="fa-brands fa-facebook-square"></i></a></div>
						<div class="blp-col-6"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
					</div>
				</div>
			</div>
		</div>	
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
