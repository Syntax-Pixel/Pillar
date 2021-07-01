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

?>
	</div>
	<footer class="bg--dark footer-4">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<img alt="logo" class="logo" src="img/logo-light.png" />
					<p>
						<em>Digital Design Melbourne</em>
					</p>
					<ul class="footer__navigation">
						<li>
							<a href="#">
								<span>About Us</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Services</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Selected Work</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Get In Touch</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Careers</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-8">
					<h6>Recent News</h6>
					<div class="twitter-feed">
						<div class="tweets-feed" data-feed-name="mrareweb" data-amount="2"></div>
					</div>
				</div>
				<div class="col-md-4 col-md-offset-1 col-sm-12">
					<h6>Subscribe</h6>
					<p>
						Get monthly updates and free resources.
					</p>
					<form class="form--merge form--no-labels" action="http://mrareco.createsend.com/t/d/s/kieth/" method="post" id="subForm" data-error="Please fill all fields correctly." data-success="Thanks for signing up! Please check your inbox for confirmation email.">
						<p>
							<label for="fieldEmail">Email Address</label>
							<br />
							<input class="col-md-8 col-sm-6 validate-required validate-email" id="fieldEmail" name="cm-kieth-kieth" type="email" required />
						</p>
						<p>
							<button type="submit">Go</button>
						</p>
					</form>
					<h6>Connect with Us</h6>

					<?php

    if(is_active_sidebar('pillar-cusom-widget'))
    {
        dynamic_sidebar('pillar-cusom-widget');
    }
?>

					<ul class="social-list">
						<li>
							<a href="#">
								<i class="socicon-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="socicon-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="socicon-vimeo"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="socicon-instagram"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="socicon-spotify"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="socicon-behance"></i>
							</a>
						</li>
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
