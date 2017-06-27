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

	<div id="primary" class="content-area about-content">
		<main id="main" class="site-main" role="main">
		<div class="header-wrapper about-title sidebar-start">
			<h1>About UNYA</h1>
		</div>
		<div class="accordion" id="accordion">
			<h2 class="accordion-label" id="vision">Vision &amp; Mission</h2>
			<div>			
				<section class="vision">
					<div class="content-wrapper">
						<h3>Vision</h3>
						<p><?php echo wp_kses( CFS()->get( 'vision' ),array('br') ); ?></p>
					</div>
				</section>
				<section class="mission" id="mission">
					<div class="content-wrapper">
						<h3>Mission</h3>
						<p><?php echo wp_kses( CFS()->get( 'mission' ),array('br') ); ?></p>
					</div>
				</section>
			</div>
			<h2 class="accordion-label" id="brief-history">History</h2>
			<section class="brief-history">
				<div class="content-wrapper">
					<h2 class="hidden-mobile">Brief History</h2>
					<p><?php echo wp_kses( CFS()->get( 'brief_history' ),array('br') ); ?></p>
				</div>
			</section>
			<h2 class="accordion-label" id="leadership">Leadership</h2>
			<section class="leadership">
				<header class="section-heading hidden-mobile">
					<h2 class="hidden-mobile">Leadership</h2>
					<h4 class="hidden-mobile">The UNYA Board exmplifies the leadership of our youth.</h4>
				</header>
				<div class="content-wrapper">
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
									<p class="hidden-mobile"><?php echo wp_kses( CFS()->get( 'bio' ),array('br') ); ?></p>
								</div>
							</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
					
				</div>
			</section>
			<h2 class="accordion-label" id="reports">Reports</h2>
			<section class="reports">
					<header class="section-heading hidden-mobile">
						<h2>Reports</h2>
					</header>
				<div class="content-wrapper">
					<?php $reports = CFS()->get( 'reports' ); ?>
					<ul>
						<?php foreach ( $reports as $report ): ?>
							<li class="report-item">
								<div class="image-wrapper"><i class="fa fa-file-o" aria-hidden="true"></i></div>
								<div class="text-wrapper">
									<p><?php echo esc_html( $report['report_title'] ); ?></p>
									<p><?php echo esc_html( $report['report_description'] ); ?></p>
									<a href="<?php echo esc_html( $report['report_file_link'] ); ?>">Download report [PDF] &rarr;</a>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
			<h2 class="accordion-label sidebar-stop" id="find-us">Find Us</h2>
			<section class="find-us">
					<header class="section-heading hidden-mobile">
						<h2>Find Us</h2>
					</header>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.750787591413!2d-123.07398588392066!3d49.28111927933116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867116afb8d639%3A0x7a96b21dcbe66682!2sUrban+Native+Youth+Association!5e0!3m2!1sen!2sca!4v1498158291523" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>
		</div>
		<div class="pre-footer">
			<p class="pre-footer-text">Like what you see?</p>
			<p class="pre-footer-text">Support us to help us grow.</p>
			<button class="donate">Donate Today</button>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>