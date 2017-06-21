<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package UNYA_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function unya_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'unya_body_classes' );

// Change program slug to 'programs'
function change_programs_archive_slug ( $args, $post_type ) {
    if ( 'program' === $post_type ) {
        $args['rewrite']['slug'] = 'programs';
    }
    return $args;
}
add_filter( 'register_post_type_args', 'change_programs_archive_slug', 10, 2 );

// Change the title of the Programs archive and News archive page
add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_post_type_archive('program') ) {
    	$title = 'Programs for Youth';
	} elseif (  is_post_type_archive('news') ) {
        $title = 'UNYA in the News';
    }
		return $title;
});

// CFS for Hero Banners //

function hero_banners() {
    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/build/css/style.min.css'
    );
        $first = CFS()->get( 'first_banner_pic' );
		$second = CFS()->get( 'second_banner_pic' );
	    $third = CFS()->get( 'third_banner_pic' ); 
		$impactpolygon = CFS()->get( 'impact_angled_banner' );
		$rectangle = CFS()->get( 'rectangular_banner' );
        $aboutpolygon = CFS()->get( 'about_angled_banner' );
		$aboutrectangle = CFS()->get( 'about_rectangle_banner' );
        $getinvolvedpolygon = CFS()->get( 'get_involved_angled_banner' );
        $nativeyouthcenterbanner = CFS()->get( 'nyc_rectangle_banner' );
        $abouttitle = CFS()->get( 'title_banner_about' );
        $impacttitle = CFS()->get( 'title_banner_impact' );
        $nyctitle = CFS()->get( 'title_banner_nyc' );
        $getinvolvedtitle = CFS()->get( 'title_banner_get_involved' );
        $programtitle = CFS()->get( 'title_banner_programs' );
        $newstitle = CFS()->get( 'title_banner_news' );
        
        $custom_css = "
                			
.about{
	background-image: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url('$first');
}
.nyc{	
	background-image: linear-gradient(to bottom,rgba(209,52,52,0.7) 0%, rgba(209,52,52,0.7) 100%),
    url('$second');
}
.programs{
	background-image:  linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
    url('$third');
}
.impact-polygon{ 
    background-image: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url('$impactpolygon');
}
.rectangle-container{
    background-image: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url('$rectangle');
}
.nyc-banner{ 
    background-image: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url('$nativeyouthcenterbanner');
}
.mission{
    background-image: linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
    url('$aboutrectangle');
}
.donation-registration{
    background-image: linear-gradient(to bottom,rgba(209,52,52,0.7) 0%, rgba(209,52,52,0.7) 100%),
    url('$getinvolvedpolygon');
}
.about-title{
    background-image:  linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
    url('$abouttitle');
}  
.impact-title{
    background-image:  linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
    url('$impacttitle');
}   
.nyc-title{
    background-image:  linear-gradient(to bottom,rgba(209,52,52,0.7) 0%, rgba(209,52,52,0.7) 100%),
    url('$nyctitle');
} 
.get-involved-title{
    background-image:  linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
    url('$getinvolvedtitle');
}
.programs-title{
    background-image:  linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
    url('$programtitle');
}  
 .news-title{
    background-image:  linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
    url('$newstitle');
}";

    wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'hero_banners' );

// create list of sub-menu items
/* Returns all child nav_menu_items under a specific parent
*
* @param int the parent nav_menu_item ID
* @param array nav_menu_items
* @param bool gives all children or direct children only
* @return array returns filtered array of nav_menu_items
*/

// function get_nav_menu_item_children( $parent_id, $nav_menu_items, $depth = true ) {
//     $nav_menu_item_list = array();

//     foreach ( (array) $nav_menu_items as $nav_menu_item ) {
//         if ( $nav_menu_item->menu_item_parent == $parent_id ) {
//             $nav_menu_item_list[] = $nav_menu_item;
//             if ( $depth ) {
//                 if ( $children = get_nav_menu_item_children( $nav_menu_item->ID, $nav_menu_items ) )
//                 $nav_menu_item_list = array_merge( $nav_menu_item_list, $children );
//             }
//         }
//     }
//     return $nav_menu_item_list;
// }

// add_filter('wp_nav_menu_objects', 'filter_nav_menu_list', 10, 2);

// function filter_nav_menu_list($sorted_menu_objects, $args) {
//     $parent_id = get_the_ID();

//     if ( $args->menu_id == 'primary-menu' ) {
//         return $sorted_menu_objects;
//     }

//     foreach ( $sorted_menu_objects as $menu_object ) {
//         if ( $menu_object->object_id === $parent_id ) {
//             $menu_parent_ID = $menu_object->ID;
//             echo $menu_object;
//         }
//     }

// }

class Selective_Walker extends Walker_Nav_Menu
{

    function walk( $elements, $max_depth) {

        $args = array_slice(func_get_args(), 2);
        $output = '';

        if ($max_depth < -1) //invalid parameter
            return $output;

        if (empty($elements)) //nothing to walk
            return $output;

        $id_field = $this->db_fields['id'];
        $parent_field = $this->db_fields['parent'];

        // flat display
        if ( -1 == $max_depth ) {
            $empty_array = array();
            foreach ( $elements as $e )
                $this->display_element( $e, $empty_array, 1, 0, $args, $output );
            return $output;
        }

        /*
         * need to display in hierarchical order
         * separate elements into two buckets: top level and children elements
         * children_elements is two dimensional array, eg.
         * children_elements[10][] contains all sub-elements whose parent is 10.
         */
        $top_level_elements = array();
        $children_elements  = array();
        foreach ( $elements as $e) {
            if ( 0 == $e->$parent_field )
                $top_level_elements[] = $e;
            else
                $children_elements[ $e->$parent_field ][] = $e;
        }

        /*
         * when none of the elements is top level
         * assume the first one must be root of the sub elements
         */
        if ( empty($top_level_elements) ) {

            $first = array_slice( $elements, 0, 1 );
            $root = $first[0];

            $top_level_elements = array();
            $children_elements  = array();
            foreach ( $elements as $e) {
                if ( $root->$parent_field == $e->$parent_field )
                    $top_level_elements[] = $e;
                else
                    $children_elements[ $e->$parent_field ][] = $e;
            }
        }

        $current_element_markers = array( 'current-menu-item', 'current-menu-parent', 'current-menu-ancestor' );

        foreach ( $top_level_elements as $e ) {

            // descend only on current tree
            $descend_test = array_intersect( $current_element_markers, $e->classes );
            if ( empty( $descend_test ) )  unset ( $children_elements );

            $this->display_element( $e, $children_elements, $max_depth, 0, $args, $output );
        }

        /*
         * if we are displaying all levels, and remaining children_elements is not empty,
         * then we got orphans, which should be displayed regardless
         */
        if ( ( $max_depth == 0 ) && count( $children_elements ) > 0 ) {
            $empty_array = array();
            foreach ( $children_elements as $orphans )
                foreach( $orphans as $op )
                    $this->display_element( $op, $empty_array, 1, 0, $args, $output );
         }

         return $output;
    }

}
