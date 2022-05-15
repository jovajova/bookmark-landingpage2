<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<?php if ( has_custom_logo() && $show_title ) : ?>
	<div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>

<div class="site-branding content-area">
	<div class="blp-row">
		<div class="blp-col-5 blp-col-xs-6">
			<img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/logo-bookmark.svg" width="150px" height="auto">
		</div>
		<div class="blp-col-7 blp-col-xs-6">
			<div class="menu-desktop">
				<?php
				add_theme_support( 'menus' );
					wp_nav_menu(
					  array(
					    'menu' => 'main-menu',
					    'link_before' => '<span class="menu-list-item">',
					    'link_after' => '</span>',
					  )
					);
				?>
			</div>
			<div class="menu-mobile">
				<div id="mobile-container">
					<div class="blp-row">
						<div class="blip-col-6">
							<img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/logo-bookmark-white.svg" width="130px" height="auto">
						</div>
						<div class="blip-col-6">
							<a href="javascript:void(0);"  class="exit-menu" onclick="menuexit()"><img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/icon-close.svg" width="20px" height="auto"></a>
						</div>
					</div>
					
					
					<?php
						add_theme_support( 'menus' );
						wp_nav_menu(
						  array(
						    'menu' => 'main-menu',
						    'link_before' => '<span class="menu-list-item">',
						    'link_after' => '</span>',
						  )
						);
					?>
					
					<div class="social-icon blp-row">
						<div class="blp-col-6"><a href="#"><i class="fa-brands fa-facebook-square"></i></a></div>
						<div class="blp-col-6"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
					</div>

				</div>
				<a href="javascript:void(0);" class="icon" onclick="menuopen()">
				    <img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/icon-hamburger.svg" width="20px" height="auto">
			  	</a>
			</div>
		</div>
	</div>
</div><!-- .site-branding -->


<script>
function menuopen() {
  var x = document.getElementById("mobile-container");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}


function menuexit(){
var exit = document.getElementById("mobile-container");
  if (exit.style.display === "block") {
    exit.style.display = "none";
  } else {
    exit.style.display = "block";
  }
}
</script>