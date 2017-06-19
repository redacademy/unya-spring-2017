<?php
/**
 * The template for displaying the impact page.
 * 
 * @package UNYA_Theme
 */
 $args= array(
     'post_type'=> 'success_story',
     'posts_per_page'=> 8
 );

 $success_story = get_posts($args);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="header-wrapper">
			<h1 class="impact-title">Impact</h1>
		</header>

		<?php /* Start the Loop */ ?>
	  <section class="success-stories" id="success-stories">
	  	<div class="content-wrapper">
				<h2>Success Stories</h2>
				<p>Learn more about the talented youth at UNYA, and the successes we celebrate.</p>
		 	 	<?php foreach ( $success_story as $post ) : setup_postdata( $post ); ?>
				  <h3 class="hidden-mobile">Youth Feature - <?php the_title(); ?></h3>
				  <a href="<?php the_permalink() ?>"><img class="success-image" src="<?php echo CFS()->get( 'photo' ); ?>" cover></a>			
				 	<p class="hidden-mobile"><?php echo CFS()->get( 'first_half_of_story' ); ?></p>
					<a class="hidden-mobile" href="<?php the_permalink() ?>"><p class="hidden-mobile">Read more about <?php the_title(); ?></p></a>
		    <?php endforeach; wp_reset_postdata(); ?> 
      </div>
    </section>
	
		<section class="statistics" id="statistics">
			<h2 class="content-wrapper">Impacts</h2>
			<!-- Insert image here -->
		</section>
  
		<section class="testimonials" id="testimonials">
				<h2 class="content-wrapper">Testimonials</h2>
				<p class="content-wrapper">What do youth say about us?</p>
			  
			    <div class="impact-polygon">
				    <p class="content-wrapper"><?php echo CFS()->get( 'testimonial_1' ); ?></p>
				  </div>
       

			<div class="rectangle-container">	<p class="content-wrapper"><?php echo CFS()->get( 'testimonial_2' ); ?></p></div>	
			
		</section>

		<section class="pre-footer">
			<p>Inspired by what you see? Find your fit at UNYA.</p>
			<button class="fit-button">Find Your Fit</button>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
