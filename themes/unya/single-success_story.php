<?php
/**
 * The template for displaying all single success stories.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="header-wrapper impact-title sidebar-start">
			<h1>Success Stories</h1>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>
		  <div class="content-wrapper">
        <h3 class="single-success-title">Youth Feature - <?php the_title(); ?></h3>
			 	<p class="first-half"><?php echo CFS()->get( 'first_half_of_story' ); ?></p>
				<img class="single-success-image hidden-mobile" src="<?php echo CFS()->get( 'photo' ); ?>">			
			</div>
				<div class="success-image-mobile hidden-desktop" style="background-image:  linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url(<?php echo CFS()->get( 'photo' ); ?>)";>
				<h5 class="success-exerpt"><?php echo CFS()->get( 'exerpt' ); ?></h5>
				</div>
			<div class="content-wrapper">
        <p class="second-half"><?php echo CFS()->get( 'second_half_of_story' ); ?></p>
      </div>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('success'); ?>
<?php get_footer(); ?>
