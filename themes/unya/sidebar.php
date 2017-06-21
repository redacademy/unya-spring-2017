<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package UNYA_Theme
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
// }
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php
		$nav_menu_items = wp_get_nav_menu_items( 'Primary Menu' );
		
		echo '<pre>';
		print_r($nav_menu_items);
		echo '</pre>';

		wp_nav_menu( array( 'theme_location' => 'sidebar', 'menu_class'=>'sidebar-menu-container', 'menu_id'=>'sidebar-menu', 'walker'=>new Selective_Walker() ) );
	// $parent_id = get_the_ID();
	// $nav_menu_items = 

	// get_nav_menu_item_children( $parent_id, $nav_menu_items, $depth = true )
	?>
</div><!-- #secondary -->
