<?php
/**
 * The template for displaying the impact page.
 *
 * @package UNYA_Theme
 */
 $args= array(
     'post_type'=> 'success_story',
     'posts_per_page'=> 6
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
				<span class="success-head"><h2>Success Stories</h2>
				<p>Learn more about the talented youth at UNYA, and the successes we celebrate.</p></span>
		 	 	<?php foreach ( $success_story as $post ) : setup_postdata( $post ); ?>
		  <section class="single-story hidden-mobile">
		    <a href="<?php the_permalink() ?>">
			    <div class="single-story-mobile hidden-desktop success-image" style="background-image: linear-gradient(180deg, rgba(87,87,87,0) 0%, rgba(67,67,67,0.4) 52.31%, rgba(44,44,44,0.7) 100%),
		        url(<?php echo CFS()->get( 'photo' ); ?>)";>
				    <h3><?php the_title() ?></h3>
	  	    </div>	
		    </a>			
				<a href="<?php the_permalink() ?>"><img class="success-image hidden-mobile" src="<?php echo CFS()->get( 'photo' ); ?>" cover></a>
				  <div class="success-content">
				    <h3 class="hidden-mobile">Youth Feature - <?php the_title(); ?></h3>
					  <p class="hidden-mobile"><?php echo wp_kses(CFS()->get( 'first_half_of_story' ),array('br') ); ?></p>
					  <div> 
							<p class="hidden-mobile">
						    <a class="hidden-mobile impact-read-more" href="<?php the_permalink() ?>">Read more about <?php the_title(); ?>
								  <i class="fa fa-arrow-right" aria-hidden="true">
					        </i>
								</a>
							</p>
					  </div>
	        </div>
		  	</section>
		  <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </section>

		<section class="statistics" id="statistics">
			<span class="content-wrapper">
			  <h2 class="impact-head content-wrapper">Impacts</h2>
		  <span class="infographics">
			  <img class="infographic-1" src="<?php echo esc_url( CFS()->get( 'infographic_2' ) ); ?>">
			  <img class="infographic-2 hidden-mobile" src="<?php echo esc_url( CFS()->get( 'infographic_1' ) ); ?>">
		  </span>
			</span>
		</section>

		<section class="testimonials" id="testimonials">
				<h2 class="content-wrapper">Testimonials</h2>
				<p class="content-wrapper testimonial-body">What do youth say about us?</p>

			    <div class="impact-polygon">
				    <p class="content-wrapper"><?php echo wp_kses(CFS()->get( 'testimonial_1' ),array('br')); ?></p>
				  </div>


			<div class="rectangle-container">	<p class="content-wrapper"><?php echo CFS()->get( 'testimonial_2' ); ?></p></div>

		</section>

		<?php get_template_part( 'template-parts/prefooter', 'fit' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>