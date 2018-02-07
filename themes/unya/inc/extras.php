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

// Order admin menu
function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
     
    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php?post_type=page', // Pages
        'edit.php?post_type=leaders', // Leaders
        'edit.php?post_type=program', // Program Archive
        'edit.php?post_type=success_story', // Impact page stories
        'edit.php?post_type=volunteer', // Impact page volunteers
        'edit.php?post_type=news', // News stories
        'edit.php?post_type=opportunities', // Get involved page opportunities
        'separator2', // Second separator
        'upload.php', // Media
        'plugins.php', // Plugins
        'edit.php?post_type=calendar', // Event calendar plugin
        'edit.php?post_type=ctct_forms', // Constant Contact plugin
        'edit.php?post_type=instagram-feed.php', // Constant Contact plugin
        'edit.php?post_type=cfs', // Constant Contact plugin
        'admin.php?page=sb-instagram-feed', // Instagram plugin
        'separator3', // Second separator
        'users.php', // Users
        'themes.php', // Appearance
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator
    );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');

// Edit Admin menu
function edit_admin_menus() {
    global $menu;

    remove_menu_page('edit-comments.php');
    remove_menu_page('edit.php');

}
add_action( 'admin_menu', 'edit_admin_menus' );

function unya_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'unya_body_classes' );

// Change program slug to 'programs'
function unya_change_programs_archive_slug ( $args, $post_type ) {
    if ( 'program' === $post_type ) {
        $args['rewrite']['slug'] = 'programs';
    }
    return $args;
}
add_filter( 'register_post_type_args', 'unya_change_programs_archive_slug', 10, 2 );

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
function unya_hero_banners() {
   
    $first = CFS()->get( 'first_banner_pic' );
    $second = CFS()->get( 'second_banner_pic' );
    $third = CFS()->get( 'third_banner_pic' ); 
    $impactpolygon = CFS()->get( 'impact_angled_banner' );
    $rectangle = CFS()->get( 'rectangular_banner' );
    $singlestorypic = CFS()->get( 'photo' );
    $aboutpolygon = CFS()->get( 'about_angled_banner' );
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
            background-image: linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
            url('$impactpolygon');
        }
        .rectangle-container{
            background-image: linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
            url('$rectangle');
        }
        .nyc-banner{ 
            background-image: linear-gradient(to bottom,rgba(209,52,52,0.7) 0%, rgba(209,52,52,0.7) 100%),
            url('$nativeyouthcenterbanner');
        }
        .philosophy{
            background-image: linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
            url('$aboutpolygon');
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
            background-image: linear-gradient(to bottom,rgba(209,52,52,0.7) 0%, rgba(209,52,52,0.7) 100%),
            url('$nyctitle');
        } 
        .get-involved-title{
            background-image:  linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
            url('$getinvolvedtitle');
        }";

    wp_add_inline_style( 'unya-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'unya_hero_banners' );

//Custom Login Logo//
function unya_login() {
     echo '<style type="text/css">                                                                   
        #login h1 a { background:url('.get_stylesheet_directory_uri().'/assets/images/RED_UNYA_UI_LogoDesign_Assets_V1-1.png) no-repeat;
				background-size:100% auto; height:90px; width:320px;                          
     </style>';
}
add_action('login_head', 'unya_login');
function unya_login_logo_url( $url ){
	return home_url();
}
add_filter('login_headerurl', 'unya_login_logo_url');
function unya_login_title(){
	return 'UNYA';
}
add_filter('login_headertitle', 'unya_login_title');

// filter menu items for sidebar
function unya_filter_nav_menu_list($sorted_menu_objects, $args) {

    if ( $args->menu_id == 'primary-menu' ) {
        return $sorted_menu_objects;
    } // return if primary menu

    $parent_id = get_the_ID(); // get page ID
    $children_menu_list = array(); // empty array for new menu objects
    $menu_parent_ID = 0;
    $archive_name = get_post_type( get_the_ID() );

    foreach ( $sorted_menu_objects as $menu_object ) {
        if ( !is_archive() && $menu_object->object_id == $parent_id ) {
            $menu_parent_ID = $menu_object->ID;
            break;
        } elseif ( $archive_name == 'program' && $menu_object->post_name == 'programs' ) {
            $menu_parent_ID = $menu_object->ID;
            break;
        } elseif ( $archive_name == 'news' &&  $menu_object->post_name == 'news') {
            $menu_parent_ID = $menu_object->ID;
            break;
        }
    }

    foreach ( $sorted_menu_objects as $menu_object ) {
        if ( $menu_object->menu_item_parent == $menu_parent_ID ) {
            array_push( $children_menu_list, $menu_object );
        }
    }
    return $children_menu_list;
}

add_filter('wp_nav_menu_objects', 'unya_filter_nav_menu_list', 10, 2);


// filter exerpt length for news archive

function custom_field_excerpt($field) {
	global $post;
	$text = CFS()->get($field); 
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = 50;
		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}
