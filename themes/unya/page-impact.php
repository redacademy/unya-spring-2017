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
     
	 <?php /* Start the Loop */ ?>
		 <div class=“content-wrapper”>
		 	 <?php foreach ( $success_story as $post ) : setup_postdata( $post ); ?>
				 <h3><?php the_title(); ?></h3>
				 <img class="success-image" src="<?php echo CFS()->get( 'photo' ); ?>">			
				 <p><?php echo CFS()->get( 'first_half_of_story' ); ?></p>				
		   <?php endforeach; wp_reset_postdata(); ?> 
     </div>

    <h2>Testimonials</h2>
		<p>What do youth say about us?</p>
				<p><?php echo CFS()->get( 'testimonial_1' ); ?></p>				
        <p><?php echo CFS()->get( 'testimonial_2' ); ?></p>	


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
