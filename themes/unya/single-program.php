<?php
/**
 * The template for displaying all single program posts.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="header-wrapper sidebar-start">
			<?php
				$terms = wp_get_post_terms( $post->ID, 'program-type');
				$term = $terms[0];
			?>
			<h1><?php print_r($term->name); ?></h1>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/program', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>


		<section class="pre-footer-program">
			<h4 class="prefooter-heading">Get involved with Kinnections.</h4>
			<h5 class="prefooter-subheading"> Contact Kinnections at:</h5>

			<p><span class="fa fa-map-marker" aria-hidden="true"></span>1618 East Hastings Street,</p>
			<p>Vancouver, BC, V5L 1S6</p>

			<div class="prefooter-kinnections-contact">
				<p><span class="fa fa-phone" aria-hidden="true"></span>604-254-7732</p>
				<p><span class="fa fa-fax" aria-hidden="true"></span>604-254-7811</p>
				<p><span class="fa fa-envelope-o" aria-hidden="true"></span>Kinnections@unya.bc.ca</p>
			</div>
			<p>Program kindly funded by:</p>
			<img src="../..assets/images/britishcolumbia.logo.png" alt="british columbia logo">
		</section>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('programs'); ?>
<?php get_footer(); ?>