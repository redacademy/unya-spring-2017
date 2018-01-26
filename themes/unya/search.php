<?php
/**
 * The template for displaying search results pages.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
	  <div class="search-title header-wrapper">
			<h1>Search</h1>
		</div>
		<main id="main" class="site-main search-main" role="main">


		<?php if ( have_posts() ) : ?>

			<div class="search-results-wrapper">
			  <div class="search-header">
          <h3>Results for: <?php echo get_search_query(); ?></h3>
			  </div>
		    	<?php /* Start the Loop */ ?>
		    	<?php while ( have_posts() ) : the_post(); ?>
		    		<?php get_template_part( 'template-parts/content', 'search' ); ?>
		    	<?php endwhile; ?>
		    	<?php red_starter_numbered_pagination(); ?>
		    <?php else : ?>
		    	<?php get_template_part( 'template-parts/content', 'none' ); ?>
		    <?php endif; ?>
			</div>
			<div class="search-result-categories-wrapper hidden-mobile">
			  <div class="search-header search-categories-header">
					<h3>Categories</h3>
					
				</div>
				<div class="search-tax-terms-wrapper">
			    <?php
            $tags = get_tags(); 
						if  ($tags) : foreach ($tags as $tag ) : 
							$new_str = str_replace(' ', '+', $tag->name);
							$root = get_site_url();
						?>
              <a href="<?php echo $root . '/?s=' . $new_str ?>"><div class="news-tax-term-box"><p><?php echo $tag->name ?></p></div></a>
						<?php endforeach; ?>
						<?php endif; ?>		
				</div>	
      </div>	
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
