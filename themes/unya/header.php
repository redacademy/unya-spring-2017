<?php
/**
 * The header for our theme.
 *
 * @package UNYA_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<div class="logo"><a href=<?php echo esc_url( home_url()) ?> rel="home"></a></div>
				</div><!-- .site-branding -->
				<button id="main-nav-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<?php get_search_form(); ?>
				<a href="https://www.canadahelps.org/en/charities/urban-native-youth-association/" class="donate">Donate</a>
				<div class="menu-gradient"></div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
