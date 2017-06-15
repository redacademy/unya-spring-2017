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

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
		 <div class=“content-wrapper”>
			<?php foreach ( $news as $post ) : setup_postdata( $post ); ?>
				<h3><?php the_title(); ?></h3>
				<img class="news-image" src="<?php echo CFS()->get( 'article_photo' ); ?>">			
				<p><?php echo CFS()->get( 'article_text' ); ?></p>				
				<p><?php echo CFS()->get( 'article_date' ); ?></p>		
				<p><?php echo CFS()->get( 'article_url' ); ?></p>						
		  	<?php endforeach; wp_reset_postdata(); ?> 
      </div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>