<?php
/**
 * The template for displaying all pages.
 *
 * @package UNYA_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="header-wrapper get-involved-title sidebar-start">
			<h1>Get Involved</h1>
		</header>
		<div class="accordion" id="accordion">
			<h2 class="accordion-label" id="donate">Donate</h2>
			<section class="donation">
				<header class="section-heading">
					<h2 class="hidden-mobile">Donate</h2>
				</header>
				<div class="content-wrapper">
					<p><?php echo wp_kses(CFS()->get( 'donation_intro_paragraph' ),array('br') ); ?></p>
				</div>
				<div class="donation-registration">
					<p class="content-wrapper"><?php echo wp_kses(CFS()->get( 'donation_registration' ),array('br') ); ?></p>
				</div>
				<div class="donation-call">
					<div class="content-wrapper">
						<h3 class="capitalize hidden-mobile">Make your donation online today</h3>
						<h3 class="hidden-desktop">Inspired by what you see? Support us to help us grow.</h3>
						<a href="https://www.canadahelps.org/en/charities/urban-native-youth-association/">
						<h3 class="capitalize donate-button">Donate today</h3>
						</a>
					</div>
				</div>
			</section>

			<h2 class="accordion-label" id="employment">Employment</h2>
			<section class="opportunities">
				<div class="content-wrapper">
					<h2 class="hidden-mobile">Employment Opportunities</h2>
					<p><?php echo wp_kses(CFS()->get( 'employment_intro_paragraph' ),array('br') ); ?></p>
				</div>
				<div class="hidden-mobile content-wrapper">
					<p class="bold-subheading">Why work for UNYA?</p>
					<ul class="employment-list-container">
						<?php $employment_list = CFS()->get('why_work_for_unya'); ?>
						<?php foreach ( $employment_list as $why_work_for_unya ) : ?>
						<li class="employment-list">
							<?php echo wp_kses( $why_work_for_unya['why_work_for_unya_item'],array('br')  ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
				</div><!--End Why work for UNYA section -->
				<div class="important-note-container hidden-mobile content-wrapper">
					<div class="important-note-paragraph">
						<span class="fa fa-info fa-3x" aria-hidden="true"></span>
						<p><span class="bold-subheading">Important Note:</span> UNYA accepts complete applications for advertised positions only. You must state clearly on your cover letter which position you are applying for. All applications must be sent in electronic form, to the email address specified on the posting. Hard copies and unsolicited applications/resumes will not be reviewed, but immediately destroyed.</p>
					</div>
				</div><!-- Section hidden in mobile -->

				<?php $args = array(
									'post_per_page' => 10,
									'post_type'=> 'opportunities',
									'opportunity_type' => 'employment'
							);
							$employment_opportunities = get_posts( $args ); ?>

				<ul class="opportunity-list content-wrapper">
					<?php foreach ( $employment_opportunities as $post ) : setup_postdata( $post ); ?>
					<li class="single-opportunity">
						<h3><?php the_title(); ?></h3>
						<a href="<?php echo CFS()->get( 'link' ); ?>" target="_blank">
							<span class="hidden-mobile">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><span class="hidden-desktop"><i class="fa fa-angle-right"></i></span>
						</a>
						<p class="hidden-mobile"><?php echo CFS()->get( 'description' ); ?></p>
					</li>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul>
			</section>

			<h2 class="accordion-label" id="volunteer">Volunteer</h2>
			<section class="opportunities">
				<header class="section-heading">
					<h2 class="hidden-desktop">Volunteer</h2>
				</header>
				<?php $args = array(
									'post_per_page' => 10,
									'post_type'=> 'opportunities',
									'order'    => 'ASC',
									'opportunity_type' => 'volunteer'
							);
							$volunteer_opportunities = get_posts( $args ); ?>

				<h2 class="hidden-mobile content-wrapper">Volunteer Oppportunities</h2>
				<ul class="opportunity-list content-wrapper">
				<?php foreach ( $volunteer_opportunities as $post ) : setup_postdata( $post ); ?>
					<li class="single-opportunity">
						<h3><?php the_title(); ?></h3>
						<a href="<?php echo CFS()->get( 'link' ); ?>" target="_blank"><span class="hidden-mobile">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><span class="hidden-desktop"><i class="fa fa-angle-right"></i></span></a>
						<p class="hidden-mobile"><?php echo CFS()->get( 'description' ); ?></p>
				</li>
				<?php endforeach; wp_reset_postdata(); ?>

			</section>
		</div>
		<section class="opportunity-cta">
			<h5>Please email <span="capitalize">info@unya.bc.ca</span> for additional job opportunities, or to be added to our email list.</h5>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>