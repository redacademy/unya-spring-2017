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
				<h1>Native Youth Centre</h1>
				<p class="hidden-mobile">An innovative regional hub for Indigenous youth empowerment.</p>
			</header>

			<div class="sidebar-start donation-banner donation-button">
				<p><?php echo esc_html( CFS()->get( 'banner_text' ) ); ?></p>
				<h2><a href="<?php echo esc_url( CFS()->get( 'banner_button_link' ) ); ?>"><?php echo esc_html( CFS()->get( 'banner_button' ) ); ?></a></h2>
			</div>
			
			<section class="container">
			<div class="accordion" id="accordion">
				<h2 class="accordion-label" id="need">The Need</h2>
				<section class="need">
					<header class="section-heading hidden-mobile">
						<h2>The Need</h2>
					</header>
					<div class="content-wrapper">
						<p><?php echo wpautop( CFS()->get( 'the_need' )); ?></p>
						<!-- <div class="nyc-line"></div> -->
					</div>
				</section>
				<h2 class="accordion-label" id="vision">Vision</h2>
				<section class="vision">
					<div class="vision nyc-banner">
						<header class="section-heading">
							<h2 class="content-wrapper desktop-only">Vision</h2>
						</header>
						<div class="content-wrapper">
							<p><?php echo wpautop( CFS()->get( 'vision' )); ?></p>
						</div>
					</div>
				</section>
				<h2 class="accordion-label" id="realizing">Realizing Our Vision</h2>
				<section class="realizing">
					<header class="section-heading">
						<h2 class="content-wrapper desktop-only">Realizing Our Vision</h2>
					</header>
					<div class="content-wrapper">
						<p><?php echo wpautop( CFS()->get( 'realizing' )); ?></p>
					</div>
				</section>
				<h2 class="accordion-label" id="ways-to-help">Ways to Help</h2>
				<section class="ways-to-help">
					<div class="ways-to-help-inner">
						<div class="section-heading">
							<h2>Ways to Help</h2>
						</div>
						<div class="content-wrapper">
							<ul>
								<li>
									<h4><i class="fa fa-angle-right" aria-hidden="true"></i><span class="nyc-help-text">Donate to the Native Youth Centre Today</span></h4>
									<p><span class="nyc-help-spacing">&nbsp;</span><span class="nyc-help-text"><?php echo wp_kses( CFS()->get( 'donate_funds' ), array('br') ); ?></span></p>
									<div class="help-boxes">
										<div class="help-points">
											<p><span class="help-bold">Making a donation</span> - large or small - is the best way to support the creation of the Native Youth Centre.</p>
										</div>
										<div class="donation-button">
											<h2><a href="<?php echo esc_url( CFS()->get( 'banner_button_link' ) ); ?>">Donate</a></h2>
										</div>
										<div class="help-points">
											<p><span class="help-bold">Cheques or money orders can be sent to:</span><span class="line-break">Urban Native Youth Association<span class="line-break">1618 E Hastings St,<span class="line-break">Vancouver, BC V5L 1S6</p>
										</div>
									</div>
								</li>
								<li>
									<h4><i class="fa fa-angle-right" aria-hidden="true"></i><span class="nyc-help-text">Major Gifts &amp; In-Kind Donations</span></h4>
									<p><span class="nyc-help-spacing">&nbsp;</span><span class="nyc-help-text"><?php echo wp_kses( CFS()->get( 'gifts_donations' ), array('br') ); ?></span></p>
									<div class="help-box">
										<div class="help-points">
											<p><span class="help-bold">We'd love to hear from you!</span><span class="line-break"><?php echo wp_kses( CFS()->get( 'nyc_contact' ), array('br') ); ?></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</div>
				<?php get_template_part( 'template-parts/prefooter', 'nycdonate' ); ?>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>