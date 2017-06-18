<?php
/**
 * Template part for displaying single programs.
 *
 * @package UNYA_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="program-content content-wrapper">
		<?php the_title( '<h2 class="program-title">', '</h2>' ); ?>		
		<p><?php echo wpautop( esc_html( CFS()->get( 'program_details' ) ) ); ?></p>
		<a href="<?php echo esc_html( CFS()->get( 'program_brochure' ) ); ?>"><i class="fa fa-file-o" aria-hidden="true"></i> <?php the_title(); ?> Program Brochure (PDF)</a>
	</div>

	<!-- content to be reordered in desktop -->
	<div class="program-body">
		<div class="program-activities content-wrapper">
			<h3>Program Activities</h3>
			<ul>
			<?php	
				$activities = CFS()->get( 'program_activities' );
				foreach ( $activities as $activity ) : ?>
				<li><?php echo $activity['program_activity']; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<?php $images = CFS()->get( 'program_image_slider' ); ?>
		<?php // to only grab the first 2 images
			$i = 0;
			foreach ( $images as $image ) : 
				if ($i == 3) break;
		?>
		<div class="program-image"><img src="<?php echo $image['image']; ?>"></div>
		<?php $i++;
			endforeach; ?>

		<div class="program-involvement content-wrapper">
			<h3>How To Get Involved</h3>
			<p class="content-wrapper"><?php echo wpautop( esc_html( CFS()->get( 'get_involved' ) ) ); ?></p>
		</div>
	</div>

	<ul class="image-slider hidden-mobile">
		<?php foreach ( $images as $image ) : ?>
		<li><img src="<?php echo $image['image']; ?>"></li>
		<?php endforeach; ?>
	</ul><!--image slider-->

</article><!-- #post-## -->
