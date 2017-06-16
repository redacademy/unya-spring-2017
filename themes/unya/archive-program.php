<?php
/**
 * The template for displaying the programs archive.
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="program-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div><!-- .page-header -->

			<section id="calendar">
				<h2>Calendar</h2>
			</section>

			<?php get_template_part( 'template-parts/program', 'content' ); ?>

			<section>
				<h2>Upcoming Events &amp; Activities</h2>
			</section>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>