<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
 $args= array(
     'post_type'=> 'news',
     'posts_per_page'=> 6
 );

 $news = get_posts($args);
 $trimmed_excerpt = wp_trim_words( custom_field_excerpt('article_text'), 20 );
?>
			<li class="news-single">
        <div class="news-title-block">	
				  <img class="news-image" src="<?php the_post_thumbnail('large'); ?>">					 
        </div>
        <div class="news-details">
			  	<h3 class="news-headline">
						<?php $internal = CFS()->get( 'internal_news_post' );
						?>
						<?php if ($internal) : ?>
						<a href="<?php the_permalink(); ?>">
						<?php else : ?>
						<a href="<?php echo CFS()->get( 'article_url' ); ?>">
            <?php endif; ?>
						<?php the_title();?>
						</a>
					</h3>						
			 		<div class="hidden-mobile"><?php echo $trimmed_excerpt; ?></div>
			  	<div class="news-url">
					<?php $internal = CFS()->get( 'internal_news_post' );
						  ?>
						  <?php if ($internal) : ?>
						<a class="news-link" href="<?php the_permalink(); ?>">
						<?php else : ?>
						<a class="news-link" href="<?php echo CFS()->get( 'article_url' ); ?>">
            <?php endif; ?>
						Read More
						  <i class="fa fa-arrow-right" aria-hidden="true"></i>
					  </a>
					  </a>
          </div>
        </div>
			</li>