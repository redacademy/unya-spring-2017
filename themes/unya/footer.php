<?php
/**
 * The template for displaying the footer.
 *
 * @package UNYA_Theme
 */

?>
		</div><!-- #content -->
			<footer id="colophon" class="site-footer desktop-only sidebar-stop" role="contentinfo">
				<div class="newsletter-sign-up footer-flex hidden-tablet">
					<h4 class="desktop-only">Sign up for our updates!</h4>
					<button class="hidden-desktop sign-up-btn"><h4>Sign up for updates</h4></button>
					<div class="subscription-form desktop-only">
						<?php echo do_shortcode( '	[ctct form="273"]' ); ?>
						<div class="close-form"><i class="fa fa-times" aria-hidden="true"></i></div>
					</div>
				</div><!-- newsletter -->
				<div class="social-links footer-flex">
					<h4 class="desktop-only">Get Social </h4>
					<div class="social-media-links-wrapper">
						<a class="social-media-links facebook" href="https://www.facebook.com/urbannativeyouthassociation/" target="_blank"><span class="fa fa-facebook-square" aria-hidden="true"></span></a>
						<a class="social-media-links twitter" href="https://twitter.com/unyanews?lang=en" target="_blank"><span class="fa fa-twitter-square" aria-hidden="true"></span></a>
						<a class="social-media-links instagram" href="https://www.instagram.com/unyayouth/" target="_blank"><span class="fa fa-instagram" aria-hidden="true"></span></a>
					</div>
				</div><!-- End social links -->
				<div class="contact-us footer-flex">
					<h4 class="hidden-mobile">Contact Us</h4>
					<div class="contact-details">
						<p class="hidden-mobile">Urban Native Youth Association</p>
						<a target="_blank" href="http://maps.google.com/maps?q=1618+East+Hastings+Street+East,+Vancouver,+BC"><p>1618 East Hastings Street East</p></a>
					</div>
					<div class="contact-details">
						<a href="tel:+16042547732"><p>604-254-7732</p></a>
						<a href="mailto:info@unya.bc.ca"><p>info@unya.bc.ca</p></a>
						<a href="privacy-policy"><p>Our Privacy Policy</p></a>
					</div>
				</div><!-- End contact us -->

			</div><!-- .site-info -->
		</footer><!-- #colophon --> 
	</div><!-- #page -->
	<?php wp_footer(); ?>

	</body>
</html>
