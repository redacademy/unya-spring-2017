<?php
/**
 * The template for displaying all single program posts.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header>
			<?php 
				$terms = wp_get_post_terms( $post->ID, 'program-type');
				$term = $terms[0];
			?>
			<h1><?php print_r($term->name); ?></h1>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/program', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('programs'); ?>
<?php get_footer(); ?>