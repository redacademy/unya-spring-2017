<?php
/**
 * The template for displaying all single volunteers.
 *
 * @package UNYA_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="header-wrapper impact-title sidebar-start single-success-banner" style="background-image: linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%)";>
			<h1>Volunteers</h1>
		</header>
    <a class="back-link hidden-desktop" href='impact'><p> Back to Impact</p> </a>
		<?php while ( have_posts() ) : the_post(); ?>
		  <div class="content-wrapper">
        <h2 class="single-success-title">Featured Volunteer - <?php the_title(); ?></h3>
			 	<p class="first-half"><?php echo CFS()->get( 'first_half_volunteer_story' ); ?></p>
				<span class="success-image-exerpt">
				  <img class="single-success-image desktop-only" src="<?php echo CFS()->get( 'photo' ); ?>">
				  <h3 class="success-exerpt hidden-mobile"><?php echo CFS()->get( 'exerpt' ); ?></h5>
			  </span>
			</div>
				<div class="success-image-mobile hidden-desktop" style="background-image:  linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
          url(<?php echo CFS()->get( 'photo' ); ?>)";>
				<h3 class="success-exerpt"><?php echo CFS()->get( 'exerpt' ); ?></h5>
				</div>
			  <div class="content-wrapper">
          <p class="second-half"><?php echo CFS()->get( 'second_half_volunteer_story' ); ?></p>
        </div>
		  <?php endwhile; // End of the loop. ?>
			<?php get_template_part( 'template-parts/prefooter', 'fit' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('volunteer'); ?>
<?php get_footer(); ?>