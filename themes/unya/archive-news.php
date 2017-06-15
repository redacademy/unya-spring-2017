<?php
/**
 * The template for displaying the news archive.
 *
 * @package UNYA_Theme
 */

$args= array(
     'post_type'=> 'news',
     'posts_per_page'=> 8
 );

 $news = get_posts($args);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <header class="page-header">
			</header><!-- .page-header -->

		<?php /* Start the Loop */ ?>
			<section class="news" id="news">
		 		<div class=“content-wrapper”>
		 			<ul class="news-articles">
					 	<?php foreach ( $news as $post ) : setup_postdata( $post ); ?>
						 	<li class="news-single">
								<h3><?php the_title();?>
								</h3>
								<img class="news-image" src="<?php echo CFS()->get( 'article_photo' ); ?>">			
								<p><?php echo CFS()->get( 'article_text' ); ?></p>				
								<p><?php echo CFS()->get( 'article_date' ); ?></p>		
								<p><?php echo CFS()->get( 'article_url' ); ?></p>						
		  				</li>
						<?php endforeach; wp_reset_postdata(); ?> 
					</ul>
			  </div>
      </section>
 
      <section class="media-inquiries" id="media-queries">
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>