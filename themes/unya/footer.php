<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<div class="newsletter-sign-up">
					<h2> Sign up for our updates!</h2>
					<p> Yes, please add me to the mailing list.</p>
					<p> sign up</p>
				</div>

				<div class="social-links">
					<h2>Get Social </h2>
					<span class="fa fa-facebook-square fa-3x" aria-hidden="true"></span>
					<span class="fa fa-twitter-square fa-3x" aria-hidden="true"></span>
					<span class="fa fa-instagram fa-3x" aria-hidden="true"></span>
				</div>

				<div class="contact-us">
					<h2>Contact Us </h2>
					<p>Urban Native Youth Association</p>
					<p>1630 Hastings Street East </p>
					<p>604-254-7732</p>
					<p>info@unya.bc.ca</p>
				</div>

					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
