<?php
/**
 * The template for displaying all single program posts.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="header-wrapper sidebar-start">
			<?php
				$terms = wp_get_post_terms( $post->ID, 'program-type');
				$term = $terms[0];
			?>
			<h1><?php print_r($term->name); ?></h1>
		</header>
<a class="back-link" href='programs'><p> Back to Programs</p> </a>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/program', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>


		<section class="pre-footer-program sidebar-stop">
			<div class="pre-footer-program-container" id="pre-footer-prog-wrapper">
  			<h2 class="prefooter-subheading"> Contact <?php echo CFS()->get( 'program_name' ); ?> at:</h2>
			  <span class="contact-sub-wrapper">
				  <div class="contact-wrapper">
				    <?php 
				  		$address = CFS()->get('program_address');
				  		$cityPostal = CFS()->get('program_address2');
				  		$tel = CFS()->get('program_phone_number');
				  		$fax = CFS()->get( 'program_fax_number' );
				  		$email = CFS()->get( 'program_email' );
				  		$urlTel = str_replace(' ', '-', $tel);
				  		$urlAddress = str_replace(' ', '+', $address);
				  		$urlCityPostal = str_replace(' ', '+', $cityPostal);
				  		$mapUrl = "http://maps.google.com/maps?q=" . $urlAddress . '+' . $urlCityPostal;
				  	?>
				  	<a class="program-footer-url" target="_blank" href="<?php echo $mapUrl; ?>"><p><span class="fa fa-map-marker" aria-hidden="true"></span><?php echo $address; ?></p>
				  	<p class="city"><?php echo $cityPostal ?></p></a>
				  </div>
				  <div class="contact-wrapper" id="contact-bottom">
				  	<a class="program-footer-url" href="tel:+<?php echo $urlTel; ?>"><p><span class="fa fa-phone" aria-hidden="true"></span><?php echo $tel; ?></p></a>
				  	<p><span class="fa fa-fax" aria-hidden="true"></span><?php echo $fax; ?></p>
				  	<a class="program-footer-url" href="mailto:<?php echo $email ?>"><p><span class="fa fa-envelope-o" aria-hidden="true"></span><?php echo $email; ?></p></a>
				  </div>
				</span>	
			</div>


		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('programs'); ?>
<?php get_footer(); ?>