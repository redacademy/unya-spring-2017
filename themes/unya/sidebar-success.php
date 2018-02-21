<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package UNYA_Theme
 */

?>

<div id="secondary" class="widget-area hidden-mobile sidebar-nav-menu" role="complementary">
	<div class="menu-primary-menu-container">
	<?php

	$query = new WP_Query(array(
    'post_type' => 'success_story',
    'post_status' => 'publish'
	));

		echo '<ul class="sidebar-menu-container">';
		echo '<li class="menu-item-archive menu-title-archive"><a href="impact"><p>Success Stories</p></a></li>';

		while ( $query->have_posts() ) {
			$query->the_post();

			echo '<li class="menu-item-archive archive-items">';
			echo '<a href="' . get_the_permalink() . '"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><p>' . get_the_title() . '\'s story</p></a>';
			echo	'</li>';
		}
		wp_reset_query();
		echo '<li class="menu-item-archive"><a href="' . get_site_url() . '/impact/#statistics">Statistics</a></li>';
		echo '<li class="menu-item-archive"><a href="' . get_site_url() . '/impact/#testimonials">Testimonials</a></li>';
		echo '<li class="menu-item-archive"><a href="' . get_site_url() . '/impact/">Back to Impact</a></li>';
		echo '</ul>';
	?>
	</div>
</div><!-- #secondary -->
