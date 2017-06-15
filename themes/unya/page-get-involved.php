<?php
/**
 * The template for displaying all pages.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<section class="donation">
		<h2>Donate</h2>
		<div class=“content-wrapper”>
			<p><?php echo CFS()->get( 'donation_intro_paragraph' ); ?></p>
		</div>
		<div class="donation-registration">
			<p>UNYA is a not-for-profit society registered with the Province and a
			charitable organization 129836292 RR0001 registered with the Government of Canada.</p>
		</div>
		<div class="donate-button">
			<h2> MAKE YOUR DONATION ONLINE TODAY </h2>
			<a href="https://www.canadahelps.org/en/charities/urban-native-youth-association/">
			<h3> DONATE TODAY </h3>
			</a>
		</div>
	</section>
		<section class="opportunities">
		<h2>Employment Opportunities</h2>
		<div class=“content-wrapper”>
        <p><?php echo CFS()->get( 'employment_intro_paragraph' ); ?></p>
		</div>
		<p> Why work for UNYA? </p>
				<ul class="employment-list-container">
				<?php $employment_list = CFS()->get('why_work_for_unya'); ?>
				<?php foreach ( $employment_list as $why_work_for_unya ) : ?>
					<li class="employment-list">
						<?php echo esc_html( $why_work_for_unya['why_work_for_unya_item'] ); ?>
					</li>
				<?php endforeach; ?></ul>
		<div class="important-note-container">
			<p class="important-note-paragraph">
			<span class="fa fa-info fa-3x" aria-hidden="true"></span>
			<span class="important-note">Important Note:</span> UNYA accepts complete applications for advertised positions only.
			You must state clearly on your cover letter which position you are applying for. All applications must be sent in electronic
			form, to the email address specified on the posting. Hard copies and unsolicited applications/resumes will not be reviewed,
			but immediately destroyed.
			</p>
		</div>

			<?php $args = array(
								'post_per_page' => 10,
								'post_type'=> 'opportunities',
								'order'    => 'ASC',
								'opportunity_type' => 'employment'
						);
						$employment_opportunities = get_posts( $args ); ?>

		<div class=“content-wrapper”>
			  <?php foreach ( $employment_opportunities as $post ) : setup_postdata( $post ); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php echo CFS()->get( 'description' ); ?></p>
                <p><?php echo CFS()->get( 'link' ); ?></p>
             <?php endforeach; wp_reset_postdata(); ?>
			</div>
	</section>
	<section class="opportunities">
		<h2> Volunteer Opportunities</h2>
			<?php $args = array(
								'post_per_page' => 10,
								'post_type'=> 'opportunities',
								'order'    => 'ASC',
								'opportunity_type' => 'volunteer'
						);
						$volunteer_opportunities = get_posts( $args ); ?>

		<div class=“content-wrapper”>
			  <?php foreach ( $volunteer_opportunities as $post ) : setup_postdata( $post ); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php echo CFS()->get( 'description' ); ?></p>
                <p><?php echo CFS()->get( 'link' ); ?></p>
             <?php endforeach; wp_reset_postdata(); ?>
			</div>

					</section>
					<section class="opportunity-cta">
						<p>please email INFO@UNYA.BC.CA for additional job opportunities, or to be added to our email list.</p>
					</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
