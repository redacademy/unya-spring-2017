<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package UNYA_Theme
 */

?>

<div id="secondary" class="widget-area desktop-only sidebar-nav-menu" role="complementary">
	<?php
		wp_nav_menu( array( 
			'theme_location' => 'primary',
			'sub_menu' => true, 
			'menu_class'=>'sidebar-menu-container', 
			'menu_id'=>'sidebar-menu' ) 
		);
	?>
</div><!-- #secondary -->
