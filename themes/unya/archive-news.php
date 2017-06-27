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
    </div>
			<div class="content-wrapper">
			<?php /* Start the Loop */ ?>
		    <ul class="news-articles">
			    <?php while ( have_posts() ) : the_post(); ?>
				    <?php get_template_part( 'template-parts/content-news' );?>
		      <?php endwhile; ?>
		    </ul>
			</div>
<section class="pre-footer-program">
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

        </div>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
