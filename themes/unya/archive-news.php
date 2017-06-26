<?php
/**
 * The template for displaying archive pages.
 * @package UNYA_Theme
 */

get_header();  ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="news-header news-title header-wrapper sidebar-start">
			<h1>UNYA In The News</h1>
			<?php echo CFS()->get( 'title_banner_news' ); ?>
    </div>
			<div class="content-wrapper">
			<?php /* Start the Loop */ ?>
		    <ul class="news-articles">
			    <?php while ( have_posts() ) : the_post(); ?>
				    <?php get_template_part( 'template-parts/content-news' );?>
		      <?php endwhile; ?>
		    </ul>
			</div>
		<div class="prefooter">
			<div class="content-wrapper">
			  <h2 class="prefooter-heading">Media Inquiries</h2>
			  <p class="prefooter-body">News of upcoming press conferences or other timely events of interest to the media will be posted here.
				   If you are interested in featuring UNYA in the news, please contact us at:
        <div class="prefooter-contact-info">
		      <p class="prefooter-address">
				    <span class="prefooter-unya"><i class="fa fa-map-marker" aria-hidden="true"></i> Urban Native Youth Association</span>
				    <span class="prefooter-location">    1630 Hastings Street East</p></span>
			    <p class="prefooter-contact">
			      <span class="prefooter-phone"><i class="fa fa-phone" aria-hidden="true"></i>   891-924-6416</span>
            <span class="prefooter-email"><i class="fa fa-envelope-o" aria-hidden="true"></i>  unya@unya.bc.ca</span>
	        </div>
        </div>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
