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
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

		<?php /* Start the Loop */ ?>
			<section class="news" id="news">
				<h2 class="news-title">News</h2>
				<ul class="news-articles">
					<?php foreach ( $news as $post ) : setup_postdata( $post ); ?>
						<li class="news-single">
							<img class="news-image" src="<?php echo CFS()->get( 'article_photo' ); ?>">
							<div class="news-details">
								<h3><?php the_title();?></h3>
								<p><?php echo CFS()->get( 'article_text' ); ?></p>
								<p class="hidden-mobile"><?php echo CFS()->get( 'article_date' ); ?></p>
								<p><?php echo CFS()->get( 'article_url' ); ?></p>
							</div>
						</li>
					<?php endforeach; wp_reset_postdata(); ?> 
				</ul>
			</section>
 
			<section class="media-inquiries" id="media-queries">
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>