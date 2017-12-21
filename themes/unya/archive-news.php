<?php
/**
 * The template for displaying archive pages.
 * @package UNYA_Theme
 */

get_header();  ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main news-main" role="main">
      <div class="news-header news-title header-wrapper sidebar-start">
		  	<h1>News</h1>
			</div>
			<div class="desktop-news-header-wrapper">
				<h2 class="hidden-mobile news-extra-header">Latest News</h2>
      </div>	
			<div class="top-news-carousel-wrapper">
			  <?php
          $args = array(
			  		'post_type'=> 'news',
						'posts_per_page'=> 3,
			  	);
			  	$top_query = new WP_Query($args);
			  ?>
				<?php if( $top_query->have_posts() ): while ( $top_query->have_posts() ) : $top_query->the_post(); ?>
				<div class="top-news-carousel-item">
 				  <div class="top-news-item-image">
  					<img class="news-carousel-image" src="<?php echo CFS()->get( 'article_photo' ); ?>">
					</div>
					<div class="top-news-item-footer">
						<h3 class="news-headline"><a href="<?php echo CFS()->get( 'article_url' ); ?>"><?php the_title();?></a></h3>					
						<a class="news-link" href="<?php echo CFS()->get( 'article_url' ); ?>">Read More
						  <i class="fa fa-arrow-right" aria-hidden="true"></i>
					  </a>
					</div>	
				</div>	
				<?php endwhile; ?>
				<?php endif; ?>

        </div><!-- top-news-carousel-wrapper -->
				<div class="accordion news-accordion" id="accordion">
			  <h2 class="accordion-label" id="vision">Other News</h2>
			  <div class="article-main-wrapper">
			  <?php /* Start the Loop */ ?>
		      <ul class="news-articles">
					  <div class="categories-header">
              <h3>Other News</h3>
						</div>
						<?php
              $newArgs = array(
								'post_type'      => 'news',
								'posts_per_page' => 9999,
								'offset'         => '3',
							);
							$news_query = new WP_Query($newArgs);
						?>
			      <?php if ( $news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
			  	    <?php get_template_part( 'template-parts/content-news' );?>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<div class="categories-desktop">
						<div class="categories-header">
              <h3>Categories</h3>
						</div>
					  <?php 
              $args=array(
                'taxonomy' => 'news_category'
              );
              $taxonomies=get_terms($args); 
              if  ($taxonomies) {
                foreach ($taxonomies as $taxonomy ) {
                  echo '<div class="news-tax-term-box"><p>' . $taxonomy->name . '</p></div>';
                }
              }  
            ?>
					</div>	
				</div>
				
				<h2 class="accordion-label" id="vision">Categories</h2>
				<div>
				  <div class="categories-wrapper">
				    <?php 
              if  ($taxonomies) {
                foreach ($taxonomies as $taxonomy ) {
                  echo '<div class="news-tax-term-box"><p>' . $taxonomy->name . '</p></div>';
                }
              }  
            ?>
			    </div>
			  </div>
			</div><!-- accordion -->
			
			<section class="pre-footer-program media-pre-footer-container">
			  <h4 class="prefooter-heading">Media Inquiries</h4>
			  <p class="pre-footer-body"> News of upcoming press conferences or other timely events of interest to the media will be posted here.
			  	   If you are interested in featuring UNYA in the news, please contact us at:</p>
			  <div class="contact-wrapper">
			  	<p><span class="fa fa-map-marker" aria-hidden="true"></span>Urban Native Youth</p>
			  	<p class="city">Association</p>
			  	<p class="city">1630 Hastings Street East</p>
			  </div>
			  <div class="contact-wrapper">
			  	<p><span class="fa fa-phone" aria-hidden="true"></span>891-924-6416</p>
			  	<p><span class="fa fa-envelope-o" aria-hidden="true"></span>unya@unya.bc.ca</p>
			  </div>
			</section>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
