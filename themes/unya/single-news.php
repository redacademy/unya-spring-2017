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
			<a class="back-link" href='news'><p> Back to News</p> </a>
			<h2 id="single-news-title"><?php the_title(); ?></h2>
			<div class="single-news-main">
			  <div class="single-news-wrapper">
					<p><?php echo CFS()->get('article_text') ?></p>
					<div class="single-news-image-wrapper">
			    	<?php the_post_thumbnail('large'); ?>
          </div>
					<div class="single-news-cat-wrapper">
						<h2>Categories</h2>
						<div class="single-news-cat-sub-wrapper">
							<?php
							  global $post;
                $tags = wp_get_post_tags($post->ID);
                if  ($tags) : foreach ($tags as $tag) :
						  			$new_str = str_replace(' ', '+', $tag->name);
						  			$root = get_site_url(); ?>
                    <a href="<?php echo $root . '/?s=' . $new_str ?>"><div class="news-tax-term-box single-news-tax"><p><?php echo $tag->name ?></p></div></a>
						  <?php endforeach; ?>
							<?php endif; ?>
						</div>	
				  </div>
				</div>


		
      </div><!--single-news-main-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
