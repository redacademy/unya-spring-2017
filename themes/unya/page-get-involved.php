<?php
/**
 * The template for displaying all pages.
 *
 * @package UNYA_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main opportunity-content" role="main">

		<header class="header-wrapper get-involved-title sidebar-start">
			<h1>Get Involved</h1>
		</header>

		<section class="donation">
			<header class="section-heading">
			  <span class="anchor" id="donate"></span>
				<h2 class="donate-header">Donate</h2>
			</header>
			<div class="content-wrapper">
				<p><?php echo wp_kses(CFS()->get( 'donation_intro_paragraph' ),array('br') ); ?></p>
			</div>
     	<div class="content-wrapper donation-section-wrapper">
				<section class="donation-button">
					<h2><a target="_blank" href="https://www.canadahelps.org/en/charities/urban-native-youth-association/">Donate <span class="hidden-mobile">Today</span></a></h2>
				</section>
				<div class="content-wrapper donate-footer-sub-wrapper">
					<p class="donate-footer-sub">UNYA is a not-for-profit society registered with the Province of BC
						and a charitable organization 129836292 RRO001 registered with the 
						Government of Canada
					</p>
				</div>
			</div>
		</section>

		<div class="accordion" id="accordion">
			<h2 class="accordion-label"><span class="anchor" id="employment"></span>Employment</h2>
			<section class="opportunities">
				<div class="content-wrapper">
					<h2 class="desktop-only">Employment Opportunities</h2>
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
				<div class="important-note-container  content-wrapper">
					<div class="important-note-paragraph">
						<span id="important-note-icon" class="fa fa-info fa-3x" aria-hidden="true"></span>
						<p><span class="bold-subheading">Important Note:</span> UNYA accepts complete applications for advertised positions only. You must state clearly on your cover letter which position you are applying for. All applications must be sent in electronic form, to the email address specified on the posting. Hard copies and unsolicited applications/resumes will not be reviewed, but immediately destroyed.</p>
					</div>
				</div>

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
						<p class="hidden-mobile"><?php echo CFS()->get( 'description' ); ?></p>
						<a class="get-involved-link" href="<?php echo CFS()->get( 'link' ); ?>" target="_blank">
							(.pdf)
						</a>
					</li>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul>
			</section>

			<h2 class="accordion-label" id="volunteer">Volunteer</h2>
			<section class="opportunities">
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
						<p class="hidden-mobile"><?php echo CFS()->get( 'description' ); ?></p>
						<a class="get-involved-link" href="<?php echo CFS()->get( 'link' ); ?>" target="_blank">(.pdf)</a>
				</li>
				<?php endforeach; wp_reset_postdata(); ?>
			</section>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<section id="get-involved-footer-section" class="pre-footer fit-button opportunities-pre-footer sidebar-stop">
		<p>Interested in partnering with one of our programs? Get in touch with our program staff to talk about how you can be involved.</p>
		<a class="get-involved-footer-button" href="programs"><p class="involved-button-text">Explore Programs</p></a>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>