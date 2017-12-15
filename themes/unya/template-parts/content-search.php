<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="news-single search-single">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	  <div class="search-result-image-wrapper">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/cedarwalk-min.png' ?>" />
    </div>
  	<div class="search-result-header-wrapper">
			<?php the_title( sprintf( '<h3 class="entry-title"><a class="search-result-url" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			
    </div>
  	<div class="entry-summary">
  		<?php custom_field_excerpt('article_text'); ?>
  	</div><!-- .entry-summary -->
  </article><!-- #post-## -->
</div>