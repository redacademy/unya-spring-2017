<?php
/**
 * The template for displaying the native youth center page.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="header-wrapper-nyc nyc-title">
				<h1>Native Youth Centre | Capital Campaign</h1>
				<p>Building a hub for confidence, leadership and reconciliation.</p>
			</header>
			<div>
				<p class="header-subtext">We have a goal of $10 Million. Help us get a little closer today.</p>
			</div>			

<div class="image-carousel">

    <?php $images = CFS()->get( 'nyc_image_slider' ); ?>
    <?php foreach ( $images as $image ) : ?>
	  <div><img src="<?php echo $image['image']; ?>"></div>
	  <?php endforeach; ?>

</div>						            

			<section class="container">
			<div class="accordion" id="accordion">
				<h2 class="accordion-label hidden-desktop">Vision</h2>
				<section class="vision" id="vision">
					<header class="section-heading">
						<h2>Vision</h2>
					</header>
					<div class="content-wrapper">
						<p><?php echo esc_html( CFS()->get( 'vision' ) ); ?></p>
					</div>
				</section>
				<h2 class="accordion-label hidden-desktop">Planning</h2>
				<section class="planning" id="planning">
					<header class="section-heading">
						<h2 class="content-wrapper">Planning and Development</h2>
						<h4 class="planning-timeline hidden-mobile">Timeline of the development of the Native Youth Center.</h4>					
					</header>
					<div class="content-wrapper">
						<ul>
							<?php $timeline = CFS()->get( 'timeline' ); ?>
							<?php foreach ( $timeline as $timeline_item ) : ?>
								<li class="timeline-item">
									<div class="year-wrapper">
										<p class="timeline-year"><?php echo esc_html( $timeline_item['year']); ?></p>
									</div>
									<div class="description-wrapper">
										<p><?php echo esc_html( $timeline_item['description'] ); ?></p>
									</div>
								</li>
							<?php endforeach; ?> 	
						</ul>	
					</div>
					<div><?php echo $GLOBALS['wp_embed']->autoembed(esc_html(CFS()->get('featured_video'))) ?></div>
				</section>
				<h2 class="accordion-label hidden-desktop">Partners</h2>
				<section class="partners" id="partners">
					<header class="section-heading">
						<h2 class="content-wrapper">Partners</h2>
					</header>
					</section>
						<ul class="logo-carousel">
							<?php $partners = CFS()->get( 'partners' ); ?>
							<?php foreach ( $partners as $partner ) : ?>
								<li class="partner">
								<img src="<?php echo ( $partner['partner_logo'] ); ?>">
								</li>
							<?php endforeach; ?> 	
						</ul>	
					
				
				<h2 class="accordion-label hidden-desktop">How to Help</h2>
				<section class="ways-to-help" id="ways-to-help">
					<div class="section-heading">
						<h2>Ways to Help</h2>
					</div>
					<div class="content-wrapper">
						<h4>The Need</h4>
						<p><?php echo esc_html( CFS()->get( 'the_need' ) ); ?></p>
					</div>
						<div class="nyc-banner">
				    </div>
					<div class="content-wrapper">
						<h4>We Need Your Help</h4>
						<p><?php echo esc_html( CFS()->get( 'we_need_your_help' ) ); ?></p>
						<h5>Donate Funds</h5>
						<p><?php echo esc_html( CFS()->get( 'donate_funds' ) ); ?></p>
						<img src="<?php echo esc_url( CFS()->get( 'ways_to_help_image' ) ); ?>" alt="image of ways to help">
						<h5>Donate Materials and Supplies</h5>
						<p><?php echo esc_html( CFS()->get( 'donate_materials_and_supplies' ) ); ?></p>
						<h5>Other Ways to Help</h5>
						<p><?php echo esc_html( CFS()->get( 'other_ways_to_help' ) ); ?></p>
						<h5>How Will Your Donations be Recognized?</h5>
						<p><?php echo esc_html( CFS()->get( 'how_will_your_donations_be_recognized' ) ); ?></p>
					</div>
				</section>
			</div>
			<div class="pre-footer">
				<p class="pre-footer-text">Like what you see? Make your donation online today</p>
				<button class="donate">Donate Today</button>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>