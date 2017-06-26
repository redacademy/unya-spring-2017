<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404">
				<div class="error-message-wrap">
					<h2 class="page-title"><?php echo esc_html('Oops! This page is broken' ); ?></h2>
					<p><?php echo esc_html( '...because we\'re rockin\' it at the dojo' ); ?></p>
				</div>
				<div class="button-container">
					<a class="link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Let's Get You Back To Safety</a></div>
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
