<?php
/**
 * Template Name: resource-archive
 * The template for displaying categories archive.
 * @package UNYA_Theme
 */
get_header();  ?>

	<div id="primary cat-primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <header class="header-wrapper impact-title sidebar-start">
			  <h1>categories</h1>
		  </header>
      <div class="categories-archive-main">
        <?php
          $tags = get_tags();
          if ($tags) : foreach ($tags as $tag) :
            $new_str = str_replace(' ', '+', $tag->name);
            $root = get_site_url();
        ?>
        <a class="mobile-only" href="<?php echo $root . '/?s=' . $new_str ?>"><div class="news-cat-box"><p><?php echo $tag->name ?></p></div></a>
        <a class="hidden-mobile" href="<?php echo $root . '/?s=' . $new_str ?>">
          <div class="resource-archive-section-header cat-archive-header hidden-mobile ">
            <div class="gradient-wrapper"></div>
            <img src="<?php echo the_post_thumbnail('large') ?>" />
            <h3><?php echo $tag->name; ?></h3>
          </div>
        </a>
        <?php endforeach; endif; ?>
      </div><!-- resource-archive-main -->
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar('categories'); ?>
<?php get_footer(); ?>
