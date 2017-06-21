<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package UNYA_Theme
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }

function get_nav_menu_item_children( $parent_id, $nav_menu_items, $depth = true ) {
    $nav_menu_item_list = array();
    
    foreach ( (array) $nav_menu_items as $nav_menu_item ) {
        if ( $nav_menu_item->menu_item_parent == $parent_id ) {
            $nav_menu_item_list[] = $nav_menu_item;
            if ( $depth ) {
                if ( $children = get_nav_menu_item_children( $nav_menu_item->ID, $nav_menu_items ) )
                $nav_menu_item_list = array_merge( $nav_menu_item_list, $children );
            }
        }
    }
    return $nav_menu_item_list;
}

?>

<div id="secondary" class="widget-area" role="complementary">
	<?php
		echo '<pre>';
		print_r($nav_menu_item_list);
		echo '</pre>';
	?>
</div><!-- #secondary -->
