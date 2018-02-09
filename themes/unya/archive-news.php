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
				<h2 class="hidden-mobile news-extra-header"><span class="anchor" id="news"></span>Latest News</h2>
      </div>	
			<div class="top-news-carousel-wrapper">
			  <?php
          $args = array(
			  		'post_type'      => 'news',
						'posts_per_page' => 3,
			  	);
			  	$top_query = new WP_Query($args);
			  ?>
				<?php if( $top_query->have_posts() ): while ( $top_query->have_posts() ) : $top_query->the_post(); ?>
				<div class="top-news-carousel-item">
 				  <div class="top-news-item-image">
  					<?php the_post_thumbnail('large'); ?>
					</div>
					<div class="top-news-item-footer">
						<h3 class="news-headline">
						  <?php $internal = CFS()->get( 'internal_news_post' );
						  ?>
						  <?php if ($internal) : ?>
						  <a href="<?php the_permalink(); ?>">
						  <?php else : ?>
						  <a target="_blank" href="<?php echo CFS()->get( 'article_url' ); ?>">
              <?php endif; ?>
							<?php the_title(); ?>
							</a>
						</h3>					
						  <?php $internal = CFS()->get( 'internal_news_post' );
						  ?>
						  <?php if ($internal) : ?>
						<a class="news-link" href="<?php the_permalink(); ?>">
						<?php else : ?>
						<a target="_blank" class="news-link" href="<?php echo CFS()->get( 'article_url' ); ?>">
            <?php endif; ?>
						Read More
						  <i class="fa fa-arrow-right" aria-hidden="true"></i>
					  </a>
					</div>	
				</div>	
				<?php endwhile; ?>
				<?php endif; ?>

        </div><!-- top-news-carousel-wrapper -->
				<div class="accordion news-accordion" id="accordion">
			    <h2 class="accordion-label" id="vision">More News</h2>
			    <div class="article-main-wrapper">
			    <?php /* Start the Loop */ ?>
		        <ul class="news-articles">
					    <div class="categories-header">
              <h3>More News</h3>
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
                $tags = get_tags();
                if  ($tags) : foreach ($tags as $tag) :
									$new_str = str_replace(' ', '+', $tag->name);
									$root = get_site_url(); ?>
                  <a href="<?php echo $root . '/?s=' . $new_str ?>"><div class="news-tax-term-box"><p><?php echo $tag->name ?></p></div></a>
							<?php endforeach; ?>
							<?php endif; ?>
						</div>
				  </div><!--article-main-wrapper-->
				
				<h2 class="accordion-label" id="vision">Categories</h2>
				<div>
				  <div class="categories-wrapper">
				    <?php 
              if ($tags) : foreach ($tags as $tag ) : ?>
            <a href="<?php echo $root . '/?s=' . $new_str ?>"><div class="news-tax-term-box"><p><?php echo $tag->name ?></p></div></a>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
			  </div>
			</div><!-- accordion -->
			
			<section class="pre-footer-program media-pre-footer-container news-pre-wrapper">
			  <span class="anchor" id="media-inquiries"></span>
			  <h4 class="prefooter-heading news-prefooter-heading">Media Inquiries</h4>
				<span class="contact-wrapper-desktop">		 
			    <div class="contact-wrapper news-contact">
			    	<p><span class="fa fa-map-marker" aria-hidden="true"></span>Urban Native Youth</p>
			    	<p class="city" id="prefooter-association">Association</p>
			    	<p class="city">1618 East Hastings Street</p>
			    </div>
			    <div class="contact-wrapper news-contact" id="tester">
			    		<p><span class="fa fa-phone" aria-hidden="true"></span><a href="tel:+16043795068">604-379-5068</a></p>
			    	<p><span class="fa fa-envelope-o" aria-hidden="true"></span>communications@unya.bc.ca</p>
				  </div>
				</span>
			</section>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
