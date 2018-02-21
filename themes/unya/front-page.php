<?php
/**
 * The template for displaying all pages.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <h1 class="hidden-mobile hidden-desktop">UNYA</h1>

   <section class="about">
     <div class="content-wrapper ">
       <h2 id="front-page-slider-header">UNYA: Where Youth lead</h2>
       <p>The talented youth at Urban Native Youth Association are making an impact in our community. Learn about their successes.</p>
       <a class="homepage-links" href="about"><h3>Get Inspired<span class="fa fa-angle-right" aria-hidden="true"></span></h3></a>
  	 </div>
   </section>
    <section class="nyc">
      <div class="content-wrapper">
        <h2>Join us in making history</h2>
        <p>The Native Youth Centre will be an innovative new hub for Indigenous youth 
        empowerment. Learn more about our plans for the Native Youth Centre, and how you can contribute.</p>
        <a class="homepage-links" href="native-youth-center"><h3>Discover our vision<span class="fa fa-angle-right" aria-hidden="true"></span></h3></a>
      </div>
    </section>
    <section class="programs">
      <div class="content-wrapper">
        <h2>Programs at UNYA</h2>
        <p>What’s your thing? At UNYA, there’s something for everyone. Connect with us
        to learn more about the programs that UNYA offers.</p>
        <a  class="homepage-links" href="<?php echo get_post_type_archive_link( 'program' ) ?>"><h3>Explore our programs<span class="fa fa-angle-right" aria-hidden="true"></span></h3></a>
      </div>
    </section>
    <section class="donation-call">
      <div class="content-wrapper">
				<h3 class="capitalize hidden-mobile">Make a difference for indigenous youth in BC</h3>
        <a target="_blank" href="https://www.canadahelps.org/en/dn/33910">
					<h3 class="capitalize donate-button">Donate today</h3>
				</a>
      </div>
    </section>
    <section class="instagram-images">
      <div class="content-wrapper">
        <h2 class="instagram-heading"><span class="capitalize">Get social with UNYA</span></h2>
        <div class="mobile-only"><?php echo do_shortcode("[instagram-feed num=6 cols=2]"); ?></div>
        <div class="tablet-only"><?php echo do_shortcode("[instagram-feed num=9 cols=3]"); ?></div>
        <div class="desktop-only"><?php echo do_shortcode("[instagram-feed num=12 cols=4]"); ?></div>
        <!--<?php get_post(); ?>-->
      </div>
    </section>
<?php get_footer(); ?>