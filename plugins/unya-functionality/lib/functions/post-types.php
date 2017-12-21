<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function unya_register_program_post_type() {

	$labels = array(
		'name'                  => 'Programs',
		'singular_name'         => 'Program',
		'menu_name'             => 'Programs',
		'name_admin_bar'        => 'Program Type',
		'archives'              => 'Program Archives',
		'attributes'            => 'Program Attributes',
		'parent_item_colon'     => 'Program Parent Item:',
		'all_items'             => 'All Programs',
		'add_new_item'          => 'Add New Program',
		'add_new'               => 'Add Program',
		'new_item'              => 'New Program',
		'edit_item'             => 'Edit Program',
		'update_item'           => 'Update Program',
		'view_item'             => 'View Program',
		'view_items'            => 'View Programs',
		'search_items'          => 'Search Program',
		'not_found'             => 'Program Not found',
		'not_found_in_trash'    => 'Program Not found in Trash',
		'featured_image'        => 'Featured Program Image',
		'set_featured_image'    => 'Set featured program image',
		'remove_featured_image' => 'Remove featured program image',
		'use_featured_image'    => 'Use as featured program image',
		'insert_into_item'      => 'Insert into Program',
		'uploaded_to_this_item' => 'Uploaded to this Program',
		'items_list'            => 'Programs list',
		'items_list_navigation' => 'Programs list navigation',
		'filter_items_list'     => 'Filter Programs list',
	);
	$args = array(
		'label'                 => 'Programs',
		'description'           => 'Post type for programs available through UNYA',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'program', $args );

}
add_action( 'init', 'unya_register_program_post_type', 0 );

// ------- News Custom Post Type ---------//

function unya_register_news_post_type() {

	$labels = array(
		'name'                  => 'News',
		'singular_name'         => 'News',
		'menu_name'             => 'News',
		'name_admin_bar'        => 'News Type',
		'archives'              => 'News Archives',
		'attributes'            => 'News Attributes',
		'parent_item_colon'     => 'News Parent Item:',
		'all_items'             => 'All News',
		'add_new_item'          => 'Add New News',
		'add_new'               => 'Add News',
		'new_item'              => 'New News',
		'edit_item'             => 'Edit News',
		'update_item'           => 'Update News',
		'view_item'             => 'View News',
		'view_items'            => 'View News',
		'search_items'          => 'Search News',
		'not_found'             => 'News Not found',
		'not_found_in_trash'    => 'News Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into News',
		'uploaded_to_this_item' => 'Uploaded to this News',
		'items_list'            => 'News list',
		'items_list_navigation' => 'News list navigation',
		'filter_items_list'     => 'Filter News list',
	);
	$args = array(
		'label'                 => 'News',
		'description'           => 'Post type for news articles about UNYA',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-media-document',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'taxonomies'            => array('post_tag')
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'unya_register_news_post_type', 0 );



function unya_register_success_story_post_type() {

	$labels = array(
		'name'                  => 'Success Stories',
		'singular_name'         => 'Success Story',
		'menu_name'             => 'Success Stories',
		'name_admin_bar'        => 'Success Story Type',
		'archives'              => 'Success Story Archives',
		'attributes'            => 'Success Story Attributes',
		'parent_item_colon'     => 'Success Story Parent Item:',
		'all_items'             => 'All Success Stories',
		'add_new_item'          => 'Add New Success Story',
		'add_new'               => 'Add Success Story',
		'new_item'              => 'New Success Story',
		'edit_item'             => 'Edit Success Story',
		'update_item'           => 'Update Success Story',
		'view_item'             => 'View Success Story',
		'view_items'            => 'View Success Stories',
		'search_items'          => 'Search Success Story',
		'not_found'             => 'Success Story Not found',
		'not_found_in_trash'    => 'Success Story Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Success Story',
		'uploaded_to_this_item' => 'Uploaded to this Success Story',
		'items_list'            => 'Success Stories list',
		'items_list_navigation' => 'Success Stories list navigation',
		'filter_items_list'     => 'Filter Success Stories list',
	);
	$args = array(
		'label'                 => 'Success Story',
		'description'           => 'Post type for Success Stories of Unya',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-thumbs-up',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'success_story', $args );
}

add_action( 'init', 'unya_register_success_story_post_type', 0 );


function unya_register_volunteer_post_type() {

	$labels = array(
		'name'                  => 'Volunteers',
		'singular_name'         => 'Volunteer',
		'menu_name'             => 'Volunteers',
		'name_admin_bar'        => 'Volunteer Type',
		'archives'              => 'Volunteer Archives',
		'attributes'            => 'Volunteer Attributes',
		'parent_item_colon'     => 'Volunteer Parent Item:',
		'all_items'             => 'All Volunteers',
		'add_new_item'          => 'Add New Volunteer',
		'add_new'               => 'Add Volunteer',
		'new_item'              => 'New Volunteer',
		'edit_item'             => 'Edit Volunteer',
		'update_item'           => 'Update Volunteer',
		'view_item'             => 'View Volunteer',
		'view_items'            => 'View Volunteers',
		'search_items'          => 'Search Volunteer',
		'not_found'             => 'Volunteer Not found',
		'not_found_in_trash'    => 'Volunteer Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Volunteer',
		'uploaded_to_this_item' => 'Uploaded to this Volunteer',
		'items_list'            => 'Volunteer list',
		'items_list_navigation' => 'Volunteer list navigation',
		'filter_items_list'     => 'Filter Volunteer list',
	);
	$args = array(
		'label'                 => 'Volunteer',
		'description'           => 'Post type for Volunteers of Unya',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-thumbs-up',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'volunteer', $args );

}
add_action( 'init', 'unya_register_volunteer_post_type', 0 );


// Register Custom Post Type
function unya_register_leader_post_type() {

	$labels = array(
		'name'                  => 'Leaders',
		'singular_name'         => 'Leader',
		'menu_name'             => 'Leaders',
		'name_admin_bar'        => 'Leaders',
		'archives'              => 'Leaders Archive',
		'attributes'            => 'Leader Attributes',
		'parent_item_colon'     => 'Leader Item:',
		'all_items'             => 'All Leaders',
		'add_new_item'          => 'Add New Leader',
		'add_new'               => 'Add New Leader',
		'new_item'              => 'New Leader',
		'edit_item'             => 'Edit Leader',
		'update_item'           => 'Update Leader',
		'view_item'             => 'View Leader',
		'view_items'            => 'View Leaders',
		'search_items'          => 'Search Leader',
		'not_found'             => 'Leader Not found',
		'not_found_in_trash'    => 'Leader Not found in Trash',
		'featured_image'        => 'Profile image',
		'set_featured_image'    => 'Set profile image',
		'remove_featured_image' => 'Remove profile image',
		'use_featured_image'    => 'Use as profile image',
		'insert_into_item'      => 'Insert into Leader',
		'uploaded_to_this_item' => 'Uploaded to this Leader',
		'items_list'            => 'Leaders list',
		'items_list_navigation' => 'Leaders list navigation',
		'filter_items_list'     => 'Filter Leaders list',
	);
	$args = array(
		'label'                 => 'Leader',
		'description'           => 'Post Type for leadership',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-id-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'leaders', $args );

}
add_action( 'init', 'unya_register_leader_post_type', 0 );

// Register Custom Post Type
function unya_register_opportunities_post_type() {

	$labels = array(
		'name'                  => 'Opportunities',
		'singular_name'         => 'Opportunity',
		'menu_name'             => 'Opportunities',
		'name_admin_bar'        => 'Opportunities',
		'archives'              => 'Opportunity Archives',
		'attributes'            => 'Opportunity Attributes',
		'parent_item_colon'     => 'Opportunity Item:',
		'all_items'             => 'All Opportunities',
		'add_new_item'          => 'Add New Opportunity',
		'add_new'               => 'Add New Opportunity',
		'new_item'              => 'New Opportunity',
		'edit_item'             => 'Edit Opportunity',
		'update_item'           => 'Update Opportunity',
		'view_item'             => 'View Opportunity',
		'view_items'            => 'View Opportunities',
		'search_items'          => 'Search Opportunity',
		'not_found'             => 'Opportunity Not found',
		'not_found_in_trash'    => 'Opportunity Not found in Trash',
		'featured_image'        => 'Featured Image for Opportunity',
		'set_featured_image'    => 'Set featured image for Opportunity',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Opportunity',
		'uploaded_to_this_item' => 'Uploaded to this Opportunity',
		'items_list'            => 'Opportunities list',
		'items_list_navigation' => 'Opportunities list navigation',
		'filter_items_list'     => 'Filter Opportunities list',
	);
	$args = array(
		'label'                 => 'Opportunity',
		'description'           => 'Post type for volunteer and job opportunities',
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 30,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'opportunities', $args );

}
add_action( 'init', 'unya_register_opportunities_post_type', 0 );
