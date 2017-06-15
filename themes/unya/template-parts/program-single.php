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
		<p><?php echo wpautop( esc_html( CFS()->get( 'program_details' ) ) ); ?></p>
		<a href="<?php echo esc_html( CFS()->get( 'program_brochure' ) ); ?>"><i class="fa fa-file-o" aria-hidden="true"></i> <?php the_title(); ?> Program Brochure</a>
		<h3>Program Activities</h3>
		<ul>
		<?php	
			$activities = CFS()->get( 'program_activities' );
			foreach ( $activities as $activity ) : ?>
			<li><?php echo $activity['program_activity']; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php $images = CFS()->get( 'program_image_slider' ); ?>
			<?php 
				$i = 0;
				foreach ( $images as $image ) : 
					if ($i == 3) break;
			?>
					<div><img src="<?php echo $image['image']; ?>"></div>
					<?php $i++;
				endforeach; ?>
		<h3>How To Get Involved</h3>
		<p><?php echo wpautop( esc_html( CFS()->get( 'get_involved' ) ) ); ?></p>
		<ul class="image-slider">
			<?php foreach ( $images as $image ) : ?>
				<li><img src="<?php echo $image['image']; ?>"></li>
			<?php endforeach; ?>
		</ul><!--image slider-->
}
	</div><!-- .entry-content -->

</article><!-- #post-## -->
