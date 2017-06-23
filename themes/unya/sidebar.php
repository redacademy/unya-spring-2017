<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package UNYA_Theme
 */

?>

<div id="secondary" class="widget-area hidden-mobile sidebar-nav-menu" role="complementary">
	<?php

	// $menu_object = wp_get_nav_menu_items( 'Primary Menu' );
  // echo '<pre>';
	// print_r($menu_object);
	// echo '</pre>';

		wp_nav_menu( array( 
			'theme_location' => 'primary', 
			'sub_menu' => true, 
			'menu_class'=>'sidebar-menu-container', 
			'menu_id'=>'sidebar-menu' ) 
		);

	?>
</div><!-- #secondary -->
