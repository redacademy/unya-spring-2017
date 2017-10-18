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
			<h4 class="prefooter-heading">Get involved with <?php echo CFS()->get( 'program_name' ); ?></h4>
			<div class="pre-footer-program-container">
				<h5 class="prefooter-subheading"> Contact <?php echo CFS()->get( 'program_name' ); ?> at:</h5>
				<div class="contact-wrapper">
					<p><span class="fa fa-map-marker" aria-hidden="true"></span><?php echo CFS()->get( 'program_address' ); ?></p>
					<p class="city"><?php echo CFS()->get( 'program_address2' ); ?></p>
				</div>
				<div class="contact-wrapper">
					<p><span class="fa fa-phone" aria-hidden="true"></span><?php echo CFS()->get( 'program_phone_number' ); ?></p>
					<p><span class="fa fa-fax" aria-hidden="true"></span><?php echo CFS()->get( 'program_fax_number' ); ?></p>
					<p><span class="fa fa-envelope-o" aria-hidden="true"></span><?php echo CFS()->get( 'program_email' ); ?></p>
				</div>
			</div>

			<div class="pre-footer-program-logo-container">
				<p class="pre-footer-logo-header">Program kindly funded by:</p>
				<div class="logo-wrapper">
					<img src="<?php echo CFS()->get( 'funder_logo' ); ?>">
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('programs'); ?>
<?php get_footer(); ?>