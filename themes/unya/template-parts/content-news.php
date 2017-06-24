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
        <div class="news-title-block">
          <p class="hidden-mobile"><?php echo CFS()->get( 'article_date' ); ?></p>
					<img class="news-image" src="<?php echo CFS()->get( 'article_photo' ); ?>">
			    <h3 class="news-headline"><a href="<?php echo CFS()->get( 'article_url' ); ?>">
					  <?php the_title();?></a></h3>
        </div>
        <div class="news-details">								
			 		<div class="hidden-mobile"><?php echo custom_field_excerpt(); ?></div>
          <p class="hidden-mobile"><?php echo CFS()->get( 'article_text' ); ?></p>							
			  	<span class="news-url hidden-mobile"><a href="<?php echo CFS()->get( 'article_url' ); ?>">Read More</a></span>
				</news-details>
			</li>
  </article><!-- #post-## -->
