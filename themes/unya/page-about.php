<?php
/**
 * The template for displaying the about page.
 *
 * @package RED_Starter_Theme
 */
 $args= array(
     'post_type'=> 'leaders',
     'posts_per_page'=> 8
 );

 $leaders = get_posts($args);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="header-wrapper">
			<h1>About UNYA</h1>
		</div>
		<section class="vision" id="vision">
			<div class="content-wrapper">
				</h2>Vision</h2>
				<p><?php echo CFS()->get( 'vision' ); ?></p>
			</div>
		</section>
		<section class="mission" id="mission">
			<div class="content-wrapper">
				<h2>Mission</h2>
				<p><?php echo CFS()->get( 'mission' ); ?></p>
			</div>
		</section>
		<section class="brief-history" id="brief-history">
			<div class="content-wrapper">
				<h2>Brief History</h2>
				<p><?php echo CFS()->get( 'brief_history' ); ?></p>
			</div>
		</section>
		<section class="leadership" id="leadership">
			<div class="content-wrapper">
				<h2>Leadership</h2>
				<h4>The UNYA Board exmplifies the leadership of our youth.</h4>
				<ul>
					<?php foreach ( $leaders as $post ) : setup_postdata( $post ); ?>
						<li class="leader">
							<div class="image-wrapper">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail('large'); ?>
								<?php endif; ?>
							</div>
							<div class="text-wrapper">
								<p><?php echo CFS()->get( 'name' ); ?></p>
								<p><?php echo CFS()->get( 'title' ); ?></p>
								<p><?php echo CFS()->get( 'bio' ); ?></p>
							</div>
						</li>
					<?php endforeach; wp_reset_postdata(); ?> 
				
				</ul>
				
			</div>
		</section>
		<section class="reports" id="reports">
			<div class="content-wrapper">
				<h2>Reports</h2>
				<?php $reports = CFS()->get( 'reports' ); ?>
				<ul>
					<?php foreach ( $reports as $report ): ?>
						<li class="report-item">
							<div class="image-wrapper"></div>
							<div class="text-wrapper">
								<p><?php echo $report['report_title']; ?></p>
								<p><?php echo $report['report_description']; ?></p>
								<p><?php echo $report['report_file']; ?></p>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		<div class="pre-footer">
			<p class="pre-footer-text">Like what you see?</p>
			<p class="pre-footer-text">Support us to help us grow.</p>
			<button class="donate">Donate Today</button>
		</div>






		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>