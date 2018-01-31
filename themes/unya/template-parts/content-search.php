<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */
$internal = CFS()->get('internal_news_post');
$classes = get_post_class();
$id = get_the_ID();
if (!in_array('type-page', $classes) && !in_array('type-calendar', $classes) && !in_array('status-trash', $classes) ):
?>
<div class="news-single search-single">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	  <div class="news-title-block">
	    <?php the_post_thumbnail('large'); ?>
    </div>
  	<div class="news-details search-details">

			<?php if (in_array('type-news', $classes) && !$internal) : 
					the_title( sprintf( '<h3 class="news-headline"><a class="search-result-url" href="%s" rel="bookmark">', esc_url( CFS()->get('article_url') ) ), '</a></h3>' );									
				else :
					the_title( sprintf( '<h3 class="news-headline"><a class="search-result-url" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); 						
				endif;
			?>
			<p class="search-result-text hidden-mobile">
				<?php
					if (in_array('type-news', $classes)) :
						echo wp_trim_words( custom_field_excerpt('article_text'), 20 );
					elseif (in_array('type-volunteer', $classes)) :
						echo wp_trim_words( custom_field_excerpt('first_half_volunteer_story'), 20 );
					elseif (in_array('type-program', $classes)) :
						echo wp_trim_words( custom_field_excerpt('program_details'), 20 );
					elseif (in_array('type-success_story', $classes)) :
						echo wp_trim_words( custom_field_excerpt('first_half_of_story'), 20 );	
					endif;
				?>
			</p>
			<div class="news-url">
			<?php if (in_array('type-news', $classes) && !$internal) : ?>
				<a target="_blank" class="news-link" href="<?php echo CFS()->get('article_url') ?>">
			<?php else : ?>
				<a class="news-link" href="<?php the_permalink(); ?>">
			<?php endif; ?>
				  Read More
				  <i class="fa fa-arrow-right" aria-hidden="true"></i>
			  </a>
			  </a>
		  </div>

    </div>
  </article><!-- #post-## -->
</div>
<?php endif; ?>