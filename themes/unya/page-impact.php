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
 
 $args= array(
     'post_type'=> 'volunteer',
     'posts_per_page'=> 6
 );
 $volunteer = get_posts($args);
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="header-wrapper impact-title sidebar-start">
			<h1>Impact</h1>
		</header>

		<section class="how-we-work">
			<div class="content-wrapper">
				<h2>How We Work</h2>
				<p><?php echo wp_kses( CFS()->get( 'how_we_work' ),array('br') ); ?></p>
			</div>
		</section>

		<div class="accordion" id="accordion">
		<?php /* Start the Loop */ ?>
		<h2 class="accordion-label" id="success-stories">Success Stories</h2>
	  <section class="success-stories">
			<header class="section-heading hidden-mobile">
				<h2 class="hidden-mobile">Success Stories</h2>
				<h4 class="hidden-mobile">Learn more about the talented youth at UNYA, and the successes we celebrate.</h4>
			</header>
			
			<div class="content-wrapper">
				<h4 class="hidden-desktop">Learn more about the talented youth at UNYA, and the successes we celebrate.</h4>
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
						<p class="hidden-mobile"><?php echo CFS()->get( 'first_half_of_story' ); ?></p>
						<div>
							<p class="hidden-mobile">
								<a class="hidden-mobile impact-read-more" href="<?php the_permalink() ?>">Read more about <?php the_title(); ?>
									<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</a>
							</p>
						</div>
					</div>
				</section>
		  <?php endforeach; wp_reset_postdata(); ?>
    </div>
	</section>


		<?php /* Start the Loop */ ?>
		<h2 class="accordion-label" id="success-stories">Volunteers</h2>
	  <section class="success-stories">
			<header class="section-heading hidden-mobile">
				<h2 class="hidden-mobile">Volunteers</h2>
				<h4 class="hidden-mobile">Learn more about some of our hardworking volunteers.</h4>
			</header>
			
			<div class="content-wrapper">
				<h4 class="hidden-desktop">Learn more about some of our hardworking volunteers.</h4>
				<?php foreach ( $volunteer as $post ) : setup_postdata( $post );?>
				<section class="single-story hidden-mobile">
					<a href="<?php the_permalink() ?>">
						<div class="single-story-mobile hidden-desktop success-image" style="background-image: linear-gradient(180deg, rgba(87,87,87,0) 0%, rgba(67,67,67,0.4) 52.31%, rgba(44,44,44,0.7) 100%),
							url(<?php echo CFS()->get( 'photo' ); ?>)";>
							<h3><?php the_title() ?></h3>
						</div>
					</a>
					<a href="<?php the_permalink() ?>"><img class="success-image hidden-mobile" src="<?php echo CFS()->get( 'photo' ); ?>" cover></a>
					<div class="success-content content-wrapper">
						<h3 class="hidden-mobile">Volunteer Feature - <?php the_title(); ?></h3>
						<p class="hidden-mobile"><?php echo CFS()->get( 'first_half_volunteer_story' ); ?></p>
						<div>
							<p class="hidden-mobile">
								<a class="hidden-mobile impact-read-more" href="<?php the_permalink() ?>">Read more about <?php the_title(); ?>
									<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</a>
							</p>
						</div>
					</div>
				</section>
		  <?php endforeach; wp_reset_postdata(); ?>
    </div>
	</section>
</div>


		<section class="statistics" id="statistics">
			
			  <h2 class="impact-head content-wrapper">Impacts</h2>
		    
          <div class="image-carousel content-wrapper">
            <?php $stats_slider = CFS()->get( 'statistics_slider' ); ?>
              <?php foreach ( $stats_slider as $stats_slide ) : ?>
 	              <div class="stats-slide" style="background-image: url(<?php echo $stats_slide['stats_image']; ?>)";>
 		            </div>
 		          <?php endforeach; ?>
        	</div>	    
				  
			 
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