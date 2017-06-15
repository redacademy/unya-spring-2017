<?php
/**
 * Template part for displaying single programs.
 *
 * @package UNYA_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<h2 class="program-title">', '</h2>' ); ?>

	<div class="program-content content-wrapper">
		<p><?php echo esc_html( CFS()->get( 'program_details' ) ); ?></p>
		<a href="<?php echo esc_html( CFS()->get( 'program_brochure' ) ); ?>"><i class="fa fa-file-o" aria-hidden="true"></i> <?php the_title(); ?> Program Brochure</a>
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->
