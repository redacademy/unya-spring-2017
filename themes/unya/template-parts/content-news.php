<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
 $args= array(
     'post_type'=> 'news',
     'posts_per_page'=> 8
 );

 $news = get_posts($args);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->
  	
						<li class="news-single">
							<img class="news-image" src="<?php echo CFS()->get( 'article_photo' ); ?>">
							<div class="news-details">
								<h3 class="hidden-mobile"><?php the_title();?></h3>
								<p class="hidden-desktop"><?php echo custom_field_excerpt(); ?></p>
                <p class="hidden-mobile"><?php echo CFS()->get( 'article_text' ); ?></p>
								<p class="hidden-mobile"><?php echo CFS()->get( 'article_date' ); ?></p>
								<p><?php echo CFS()->get( 'article_url' ); ?></p>
							</div>
						</li>
				
</article><!-- #post-## -->
