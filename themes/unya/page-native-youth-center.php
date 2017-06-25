<?php
/**
 * The template for displaying the native youth center page.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area nyc-content">
		<main id="main" class="site-main" role="main">
			<header class="header-wrapper header-wrapper-nyc nyc-title">
				<h1>Native Youth Centre <span class="hidden-mobile">| Capital Campaign</span></h1>
				<p class="hidden-mobile">Building a hub for confidence, leadership and reconciliation.</p>
			</header>
			<div>
				<p class="header-subtext">We have a goal of $10 Million. Help us get a little closer today.</p>
			</div>			

  <div class="image-carousel hidden-mobile">

    <?php $images = CFS()->get( 'nyc_image_slider' ); ?>
    <?php foreach ( $images as $image ) : ?>
	  <div class="nyc-slide sidebar-start" 
		  style='background-image: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%), 
		  url(<?php echo $image['image']; ?>)';>
		</div>
	  <?php endforeach; ?>
</div>

			<section class="container">
			<div class="accordion" id="accordion">
				<h2 class="accordion-label"  id="vision">Vision</h2>
				<section class="vision">
					<header class="section-heading">
						<h2>Vision</h2>
					</header>
					<div class="content-wrapper">
						<p><?php echo esc_html( CFS()->get( 'vision' ) ); ?></p>
						<a href= "<?php echo esc_url( CFS()->get( 'vision_file' ) ); ?>">Download Our Campaign Materials Here (PDF)</a>
					</div>
				</section>
				<h2 class="accordion-label" id="planning">Planning</h2>
				<section class="planning">
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
										<p><?php echo wp_kses( $timeline_item['description'],array('br') ); ?></p>
									</div>
								</li>
							<?php endforeach; ?> 	
						</ul>	
					</div>
					<div><?php echo $GLOBALS['wp_embed']->autoembed(esc_html(CFS()->get('featured_video'))) ?></div>
				</section>
				<h2 class="accordion-label" id="partners">Partners</h2>
				<section class="partners">
					<header class="section-heading">
						<h2 class="content-wrapper">Partners</h2>
					</header>
					<div class="content-wrapper">
						<ul class="content-wrapper logo-carousel">
							<?php $partners = CFS()->get( 'partners' ); ?>
							<?php foreach ( $partners as $partner ) : ?>
								<li class="partner">
									<img src="<?php echo ( $partner['partner_logo'] ); ?>">
								</li>
							<?php endforeach; ?> 	
						</ul>	
					</div>
				</section>
				<h2 class="accordion-label" id="ways-to-help">How to Help</h2>
				<section class="ways-to-help">
					<div class="section-heading">
						<h2>Ways to Help</h2>
					</div>
					<div class="content-wrapper">
						<h4>The Need</h4>
						<p><?php echo wp_kses( CFS()->get( 'the_need' ),array('br') ); ?></p>
					</div>
						<div class="nyc-banner">
				    </div>
					<div class="content-wrapper">
						<h4>We Need Your Help</h4>
						<p><?php echo wp_kses( CFS()->get( 'we_need_your_help' ),array('br') ); ?></p>
						<h5>Donate Funds</h5>
						<p><?php echo wp_kses( CFS()->get( 'donate_funds' ),array('br') ); ?></p>
							<img src="<?php echo esc_url( CFS()->get( 'ways_to_help_image' ) ); ?>" alt="image of ways to help">
						<h5>Donate Materials and Supplies</h5>
						<p><?php echo wp_kses( CFS()->get( 'donate_materials_and_supplies' ),array('br') ); ?></p>
						<h5>Other Ways to Help</h5>
						<p><?php echo wp_kses( CFS()->get( 'other_ways_to_help' ),array('br') ); ?></p>
						<h5>How Will Your Donations be Recognized?</h5>
						<p><?php echo wp_kses( CFS()->get( 'how_will_your_donations_be_recognized' ),array('br') ); ?></p>
					</div>
				</section>
			</div>
			<div class="pre-footer">
				<p class="pre-footer-text">Like what you see? Make your donation online today</p>
				<a href="https://www.canadahelps.org/en/charities/urban-native-youth-association/">
				  <button class="donate">Donate Today</button></a>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>