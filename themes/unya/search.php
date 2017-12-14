<?php
/**
 * The template for displaying search results pages.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main search-main" role="main">

		<?php if ( have_posts() ) : ?>
			<div class="search-header">
        <h3>Results</h3>
			</div>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
