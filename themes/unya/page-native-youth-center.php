<?php
/**
 * The template for displaying the native youth center page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="header-wrapper">
				<h1>Native Youth Centre | Capital Campaign</h1>
				<p class="header-subtext">Building a hub for confidence, leadership and reconciliation.</p>
			</div>
			<div>
				<p class="header-subtext">We have a goal of $10 Million. Help us get a little closer today.</p>
			</div>
			<div class="image-slider">
			
			</div>
			<section class="vision" id="vision">
				<div class="content-wrapper">
					</h2>Vision</h2>
					<p><?php echo CFS()->get( 'vision' ); ?></p>
				</div>
			</section>
			<section class="planning" id="planning">
				<div class="content-wrapper">
					<h2>Planning and Development</h2>
					<h4>Timeline of the development of the Native Youth Center.</h4>
					<ul>
						<?php $timeline = CFS()->get( 'timeline' ); ?>
						<?php foreach ( $timeline as $timeline_item ) : ?>
							<li class="timeline-item">
								<div class="year-wrapper">
									<p class="timeline-year"><?php echo $timeline_item['year']; ?></p>
								</div>
								<div class="description-wrapper">
									<p><?php echo $timeline_item['description']; ?></p>
								</div>
							</li>
						<?php endforeach; ?> 	
					</ul>	
				</div>
			</section>
			<section class="featured-video" id="featured-video">

			</section>
			<section class="partners" id="partners">
				<div class="content-wrapper">
					<ul>
						<?php $partners = CFS()->get( 'partners' ); ?>
						<?php foreach ( $partners as $partner ) : ?>
							<li class="partner">
								<?php echo $partner['partner_logo']; ?>
							</li>
						<?php endforeach; ?> 	
					</ul>	
				</div>
			</section>
			<section class="ways-to-help" id="ways-to-help">
				<div class="heading">
					<h2>Ways to Help</h2>
				</div>
				<div class="content">
					<h4>The Need</h4>
					<p><?php echo CFS()->get( 'the_need' ); ?></p>
					<h4>We Need Your Help</h4>
					<p><?php echo CFS()->get( 'we_need_your_help' ); ?></p>
					<h5>Donate Funds</h5>
					<p><?php echo CFS()->get( 'donate_funds' ); ?></p>
					<?php echo CFS()->get( 'ways_to_help_image' ); ?>
					<h5>Donate Materials and Supplies</h5>
					<p><?php echo CFS()->get( 'donate_materials_and_supplies' ); ?></p>
					<h5>Other Ways to Help</h5>
					<p><?php echo CFS()->get( 'other_ways_to_help' ); ?></p>
					<h5>How Will Your Donations be Recognized?</h5>
					<p><?php echo CFS()->get( 'how_will_your_donations_be_recognized' ); ?></p>
				</div>
			</section>
			<div class="pre-footer">
				<p class="pre-footer-text">Like what you see? Make your donation online today</p>
				<button class="donate">Donate Today</button>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>