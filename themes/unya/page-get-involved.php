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
		<h1>Donate</h1>
		<div class="donation-registration">
			<p>UNYA is a not-for-profit society registered with the Province and a
			charitable organization 129836292 RR0001 registered with the Government of Canada.</p>
		</div>
		<div class="donate-button">
			<h1> MAKE YOUR DONATION ONLINE TODAY </h1>
			<a href="https://www.canadahelps.org/en/charities/urban-native-youth-association/">
			<h1> DONATE TODAY </h1>
			</a>
		</div>
	</section>
		<section class="employment opportunities">
		<h1>Employment Opportunities</h1>
		<p><span class="important-note">Important Note:</span> UNYA accepts complete applications for advertised positions only.
		You must state clearly on your cover letter which position you are applying for. All applications must be sent in electronic
		form, to the email address specified on the posting. Hard copies and unsolicited applications/resumes will not be reviewed,
		but immediately destroyed.</p>

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
	<section class="volunteer opportunities">
		<h1> Volunteer Opportunities</h1>

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
