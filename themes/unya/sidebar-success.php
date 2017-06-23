<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package UNYA_Theme
 */

?>

<div id="secondary" class="widget-area hidden-mobile sidebar-nav-menu" role="complementary">
	<?php

	$query = new WP_Query(array(
    'post_type' => 'success_story',
    'post_status' => 'publish'
	));

	echo '<ul class="sidebar-menu-container">';

	while ( $query->have_posts() ) {
    $query->the_post();

		echo '<li class="menu-item">';
		echo '<a href="' . the_permalink() . '"><p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>' . get_the_title() . '\'s story</p></a>';
		echo	'</li>';

	}

	echo '</ul>';
	wp_reset_query();

		// wp_nav_menu( array( 
		// 	'theme_location' => 'primary', 
		// 	'sub_menu' => true, 
		// 	'menu_class'=>'sidebar-menu-container', 
		// 	'menu_id'=>'sidebar-menu' ) 
		// );

	?>
</div><!-- #secondary -->
