<?php
/**
 * The template for displaying all single success stories.
 *
 * @package UNYA_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		  <div class="news-header news-title header-wrapper sidebar-start">
	    	<h1>unya news</h1>
			</div>
			<a class="back-link news-back" href='news'><i class="fa fa-arrow-left" aria-hidden="true"></i>Back to News</a>
			<h2 id="single-news-title"><?php the_title(); ?></h2>
			<p class="single-news-datestamp"><?php echo get_the_date(); ?></p>
			<div class="single-news-main">
			  <div class="single-news-wrapper">
					<p><?php echo CFS()->get('first_half_of_news_story') ?></p>
					<span class="single-news-desktop-controller">
					  <div class="single-news-image-wrapper">
					  	<div class="news-gradient hidden-desktop"></div>
					  	<?php 
					  		$quote = CFS()->get('news_story_quote');
					  		if($quote) :
					  	?>
					  		<h2 class="news-story-quote hidden-desktop"><?php echo $quote; ?></h2>
					  	<?php else : null ?>	
					  		<?php endif; ?>
			      	<?php the_post_thumbnail('large'); ?>
					  </div>
					  <div class="news-quote-desktop-wrapper">
					  	<h2><?php echo $quote; ?></h2>
					  </div>	
					</span>
					<p><?php echo CFS()->get('second_half_of_news_story') ?></p>				
				</div>
			</div><!--single-news-main-->
			<div class="single-news-tag-wrapper">
				<?php
				  $id = get_the_ID();
          $tags = wp_get_post_tags($id);
          if($tags) : foreach ($tags as $tag) :
						$new_str = str_replace(' ', '+', $tag->name);
						$root = get_site_url(); ?>
            <a href="<?php echo $root . '/?s=' . $new_str ?>"><div class="news-tax-term-box single-news-tax"><p class="single-news-tag-title"><?php echo $tag->name ?></p></div></a>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
