<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom Taxonomy
function unya_register_program_type_taxonomy() {

	$labels = array(
		'name'                       => 'Program Types',
		'singular_name'              => 'Program Type',
		'menu_name'                  => 'Program Type',
		'all_items'                  => 'All Program Types',
		'parent_item'                => 'Parent Program Type',
		'parent_item_colon'          => 'Parent Program Type:',
		'new_item_name'              => 'New Program Type',
		'add_new_item'               => 'Add New Program Type',
		'edit_item'                  => 'Edit Program Type',
		'update_item'                => 'Update Program Type',
		'view_item'                  => 'View Program Type',
		'separate_items_with_commas' => 'Separate Program Types with commas',
		'add_or_remove_items'        => 'Add or remove Program Types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Program Types',
		'search_items'               => 'Search Program Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Program Types',
		'items_list'                 => 'Program Types list',
		'items_list_navigation'      => 'Program Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'program-type', array( 'program' ), $args );

}
add_action( 'init', 'unya_register_program_type_taxonomy', 0 );


// Register Custom Taxonomy
function unya_opportunities_type_taxonomy() {

	$labels = array(
		'name'                       => 'Opportunity Types',
		'singular_name'              => 'Opportunity Type',
		'menu_name'                  => 'Opportunity Type',
		'all_items'                  => 'All Opportunity Types',
		'parent_item'                => 'Parent Opportunity Type',
		'parent_item_colon'          => 'Parent Opportunity Type:',
		'new_item_name'              => 'New Opportunity_Type Name',
		'add_new_item'               => 'Add New Opportunity Type',
		'edit_item'                  => 'Edit Opportunity Type',
		'update_item'                => 'Update Opportunity Type',
		'view_item'                  => 'View Opportunity Type',
		'separate_items_with_commas' => 'Separate Opportunity Types with commas',
		'add_or_remove_items'        => 'Add or remove Opportunity Type',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Opportunity Types',
		'search_items'               => 'Search Opportunity Types',
		'not_found'                  => 'Opportunity Types Not Found',
		'no_terms'                   => 'No Opportunity Types',
		'items_list'                 => 'Opportunity Types list',
		'items_list_navigation'      => 'Opportunity Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'opportunity_type', array( 'opportunities' ), $args );

}
add_action( 'init', 'unya_opportunities_type_taxonomy', 0 );
