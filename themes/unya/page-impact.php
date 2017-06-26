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

		<header class="header-wrapper impact-title sidebar-start">
			<h1>Impact</h1>
		</header>

		<?php /* Start the Loop */ ?>
	  <section class="success-stories" id="success-stories">
	  	<div class="content-wrapper">
				<h2>Success Stories</h2>
				<p>Learn more about the talented youth at UNYA, and the successes we celebrate.</p>
		 	 	<?php foreach ( $success_story as $post ) : setup_postdata( $post ); ?>
			<section class="single-story">  
				<a href="<?php the_permalink() ?>"><img class="success-image" src="<?php echo CFS()->get( 'photo' ); ?>" cover></a>			
				<div class="success-content">
				  <h3 class="hidden-mobile">Youth Feature - <?php the_title(); ?></h3>
					<p class="hidden-mobile"><?php echo wp_kses(CFS()->get( 'first_half_of_story' ),array('br') ); ?></p>
					<a class="hidden-mobile" href="<?php the_permalink() ?>"><p class="hidden-mobile">Read more about <?php the_title(); ?></p></a>
	      </div>
			</section>
		  <?php endforeach; wp_reset_postdata(); ?> 
    </div>
  </section>
	
		<section class="statistics content-wrapper" id="statistics">
			<h2 class="impact-head">Impacts</h2>
			<img class="infographic" src="<?php echo esc_url( CFS()->get( 'infographic_2' ) ); ?>">
			<img class="infographic hidden-mobile" src="<?php echo esc_url( CFS()->get( 'infographic_1' ) ); ?>">
			<!-- Insert image here -->
		</section>
  
		<section class="testimonials" id="testimonials">
				<h2 class="content-wrapper">Testimonials</h2>
				<p class="content-wrapper">What do youth say about us?</p>
			  
			    <div class="impact-polygon">
				    <p class="content-wrapper"><?php echo wp_kses(CFS()->get( 'testimonial_1' ),array('br')); ?></p>
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
