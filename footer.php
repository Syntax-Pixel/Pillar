<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pillar-theme
 */

	$socials = get_field( 'social_media' , 'option' );
	$links   = get_field( 'link_menu_footer' , 'option' );

?>
	</div>
	<footer class="bg--dark footer-4">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<img alt="logo" class="logo" src="<?php echo get_field( 'logo_footer' , 'option' ); ?>" />
					<p>
						<em><?php echo get_field( 'slogan' , 'option' ); ?></em>
					</p>
					<ul class="footer__navigation">
					<?php foreach( $links as $link ) : ?>
						<li>
							<a href="<?php echo $link['url']; ?>">
								<span><?php echo $link['text']; ?></span>
							</a>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>
				<div class="col-md-4 col-sm-8">
					<?php if( is_active_sidebar( 'pillar-custom-widget-1' ) ){
						dynamic_sidebar( 'pillar-custom-widget-1' );
					}?>				
				</div>
				<div class="col-md-4 col-md-offset-1 col-sm-12">					
					<?php if( is_active_sidebar( 'pillar-custom-widget-2' ) ){
						dynamic_sidebar( 'pillar-custom-widget-2' );
					}?>
									
				<h6>Connect with Us</h6>
					<ul class="social-list">
					<?php foreach ( $socials as $social ) : ?>
						<li>
							<a href="<?php echo $social['url']; ?>">
								<i class="<?php echo $social['icon']; ?>"></i>
							</a>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<!--end of row-->
		</div>
		<!--end of container-->
		<div class="footer__lower">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-center-xs">
						<span class="type--fine-print">&copy; Copyright
							<span class="update-year">2016</span> Medium Rare - All Rights Reserved</span>
					</div>
					<div class="col-sm-6 text-right text-center-xs">
						<a href="#top" class="inner-link top-link">
							<i class="interface-up-open-big"></i>
						</a>
					</div>
				</div>
				<!--end of row-->
			</div>
			<!--end of container-->
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
