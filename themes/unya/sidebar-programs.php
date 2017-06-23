<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package UNYA_Theme
 */

?>

<div id="secondary" class="widget-area hidden-mobile sidebar-nav-menu" role="complementary">
	<div class="menu-primary-menu-container">
		<ul class="sidebar-menu-container">
		<?php

		$term = get_query_var( 'program-type' );
		echo $term;

			$program_types = get_terms(array (
				'taxonomy'  => 'program-type',
				'hide_empty'=> false
				));
				// $terms = wp_get_post_terms( $post->ID, 'program-type');
				// $term = $terms[0];
				// echo '<li class="menu-item-archive menu-success-title"><p>' . print_r($term->name) .'</p></li>';
			if ( !empty($program_types) && !is_wp_error($program_types) ):
		?>
		<?php foreach ($program_types as $program_type):?>
			<li class="menu-item-archive success-items">
				<a href="<?php echo get_term_link($program_types) ?>">
				<p><?php echo $program_types->name; ?></p>
				</a>
			</li>
		<?php endforeach; ?>
		<?php endif;

		// echo '<li class="menu-item-archive"><a href="' . get_site_url() . '/impact/#statistics">Statistics</a></li>';
		// echo '<li class="menu-item-archive"><a href="' . get_site_url() . '/impact/#testimonials">Testimonials</a></li>'; ?>
	
		</ul>
	</div>
</div><!-- #secondary -->
