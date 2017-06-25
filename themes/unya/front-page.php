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
      <div class="content-wrapper">
        <h2>UNYA: Where Youth lead </h2>
        <p>The talented youth at UNYA are making an impact in our community. Learn about their successes.</p>
        <a class="homepage-links" href="about"><h3>Learn more <span class="fa fa-angle-right" aria-hidden="true"></span></h3></a>
      </div>
    </section>
    <section class="nyc">
      <div class="content-wrapper">
        <h2>Join us in making history</h2>
        <p>The Native Youth Center capital campaign will help us build a new hub for
        Vancouver's indigenous youth. Learn how you can contribute.</p>
        <a class="homepage-links" href="native-youth-center"><h3>Learn More <span class="fa fa-angle-right" aria-hidden="true"></span></h3></a>
      </div>
    </section>
    <section class="programs">
      <div class="content-wrapper">
        <h2>Programs at UNYA</h2>
        <p>What's your thing? At UNYA, there's something for everyone. Connect with us to
        learn more about the programs that UNYA can offer to you.</p>
        <a  class="homepage-links" href="<?php echo get_post_type_archive_link( 'program' ) ?>"><h3>Learn More <span class="fa fa-angle-right" aria-hidden="true"></span></h3></a>
      </div>
    </section>
    <section class="donation-cta">
      <div class="content-wrapper">
        <h2>Make your donation online today</h2>
        <h3>Donate Today </h3>
      </div>
    </section>
    <section class="instagram-images">
      <div class="content-wrapper">

        <h2>Get social with #UNYAwhat</h2>
        <div class="hidden-desktop"><?php echo do_shortcode("[instagram-feed num=6 cols=2]"); ?></div>
        <div class="hidden-mobile"><?php echo do_shortcode("[instagram-feed num=12 cols=4]"); ?></div>
        <!--<?php get_post(); ?>-->

      </div>
    </section>
<?php get_footer(); ?>