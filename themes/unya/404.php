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
					<h1 class="page-title"><?php echo esc_html( 'Oops! This Page is Broken' ); ?></h1>
					<p><?php echo esc_html( '...because we\'re rockin\' it at the dojo' ); ?></p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Let's Get You Back To Safety</a>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
