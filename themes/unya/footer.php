<?php
/**
 * The template for displaying the footer.
 *
 * @package UNYA_Theme
 */

?>

		</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="newsletter-sign-up">
						<h4 class="hidden-mobile">Sign up for our updates!</h4>
						<button class="hidden-desktop sign-up-btn"><h4>Sign up for our updates!</h4></button>
						<div class="subscription-form hidden-mobile">
							<?php echo do_shortcode( '[contact-form-7 id="240" title="Email Subscription"]' ); ?>
						</div>
					</div>
					<div class="social-links">
						<h4 class="hidden-mobile">Get Social </h4>
						<a class="social-media-links facebook" href="https://www.facebook.com/urbannativeyouthassociation/"><span class="fa fa-facebook-square fa-3x" aria-hidden="true"></span></a>
						<a class="social-media-links twitter" href="https://twitter.com/unyanews?lang=en"><span class="fa fa-twitter-square fa-3x" aria-hidden="true"></span></a>
						<a class="social-media-links instagram" href="https://www.instagram.com/explore/locations/296509320/"><span class="fa fa-instagram fa-3x" aria-hidden="true"></span></a>
					</div>
					<div class="contact-us">
						<h4 class="hidden-mobile">Contact Us</h4>
						<p class="hidden-mobile">Urban Native Youth Association</p>
						<p>1630 Hastings Street East</p>
						<p>604-254-7732</p>
						<a href="mailto:info@unya.bc.ca"><p>info@unya.bc.ca</p></a>
					</div>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php wp_footer(); ?>

	</body>
</html>
