<?php
/**
 * Template part for displaying single programs.
 *
 * @package UNYA_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<h2 class="program-title">', '</h2>' ); ?>

	<div class="program-content">
		<p><?php echo esc_html( CFS()->get( 'program_details' ) ); ?></p>
		<p><?php echo esc_html( CFS()->get( 'program_brochure' ) ); ?></p>
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->
