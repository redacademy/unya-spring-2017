<?php
/**
 * The template for displaying all single posts.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php while ( have_posts() ) : the_post(); ?>
		  <div class="content-wrapper">
        <h3>Youth Feature - <?php the_title(); ?></h3>
			 	<p><?php echo CFS()->get( 'first_half_of_story' ); ?></p>
				<img class="single-success-image" src="<?php echo CFS()->get( 'photo' ); ?>">			
				<h5 class="exerpt"><?php echo CFS()->get( 'exerpt' ); ?></h5>
        <p><?php echo CFS()->get( 'second_half_of_story' ); ?></p>
      </div>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
