<?php
/**
 * The template for displaying the about page.
 *
 * @package UNYA_Theme
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
		<div class="accordion" id="accordion">
			<h2 class="accordion-label">Vision &amp; Mission</h2>
			<div>			
					<header class="section-heading">
						<h2>Vision &amp; Mission</h2>
					</header>
				<section class="vision" id="vision">
					<div class="content-wrapper">
						<h3>Vision</h3>
						<p><?php echo esc_html( CFS()->get( 'vision' ) ); ?></p>
					</div>
				</section>
				<section class="mission" id="mission">
					<div class="content-wrapper">
						<h3>Mission</h3>
						<p><?php echo esc_html( CFS()->get( 'mission' ) ); ?></p>
					</div>
				</section>
			</div>
			<h2 class="accordion-label">History</h2>
			<section class="brief-history" id="brief-history">
				<header class="section-heading">
					<h2>History</h2>
				</header>
				<div class="content-wrapper">
					<h2 class="hidden-mobile">Brief History</h2>
					<p><?php echo esc_html( CFS()->get( 'brief_history' ) ); ?></p>
				</div>
			</section>
			<h2 class="accordion-label">Leadership</h2>
			<section class="leadership" id="leadership">
				<header class="section-heading">
					<h2>Leadership</h2>
				</header>
				<div class="content-wrapper">
					<h4 class="hidden-mobile">The UNYA Board exmplifies the leadership of our youth.</h4>
					<ul>
						<?php foreach ( $leaders as $post ) : setup_postdata( $post ); ?>
							<li class="leader">
								<div class="image-wrapper">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail('large'); ?>
									<?php endif; ?>
								</div>
								<div class="text-wrapper">
									<p class="leader-name"><?php echo esc_html( CFS()->get( 'name' ) ); ?></p>
									<p><?php echo esc_html( CFS()->get( 'title' ) ); ?></p>
									<p class="hidden-mobile"><?php echo esc_html( CFS()->get( 'bio' ) ); ?></p>
								</div>
							</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
					
				</div>
			</section>
			<h2 class="accordion-label">Reports</h2>
			<section class="reports" id="reports">
					<header class="section-heading">
						<h2>Reports</h2>
					</header>
				<div class="content-wrapper">
					<?php $reports = CFS()->get( 'reports' ); ?>
					<ul>
						<?php foreach ( $reports as $report ): ?>
							<li class="report-item">
								<div class="image-wrapper"></div>
								<div class="text-wrapper">
									<p><?php echo esc_html( $report['report_title'] ); ?></p>
									<p><?php echo esc_html( $report['report_description'] ); ?></p>
									<p><?php echo esc_html( $report['report_file'] ); ?></p>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
			<h2 class="accordion-label">Find Us</h2>
			<section>
					<header class="section-heading">
						<h2>Find Us</h2>
					</header>
			</section>
		</div>
		<div class="pre-footer">
			<p class="pre-footer-text">Like what you see?</p>
			<p class="pre-footer-text">Support us to help us grow.</p>
			<button class="donate">Donate Today</button>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>