<?php
/**
 * The template for displaying the programs archive.
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section>
				<h2>Calendar</h2>
			</section>

			<section class="programs">
				<header>
					<h2>Check out our programming</h2>
					<p>Click on any program to learn more</p>
				</header>
				<h3>Education and Training</h3>
				<ul>
				<?php
					$args = array(
						'post_type' => 'program',
						'program-type' => 'education',
						'order' => 'DESC'
					);
					$programs = get_posts( $args );
					foreach ( $programs as $post ) : setup_postdata( $post );
				?>
					<li>
						<?php if ( has_post_thumbnail() ) : ?>
          		<?php the_post_thumbnail( 'medium' ); ?>
        		<?php endif; ?>
						<a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
					</li>
					<?php endforeach; ?>
				</ul>

				<h3>Personal Support</h3>
				<ul>
				<?php
					$args = array(
						'post_type' => 'program',
						'program-type' => 'personal-support',
						'order' => 'DESC'
					);
					$programs = get_posts( $args );
					foreach ( $programs as $post ) : setup_postdata( $post );
				?>
					<li>
						<?php if ( has_post_thumbnail() ) : ?>
          		<?php the_post_thumbnail( 'medium' ); ?>
        		<?php endif; ?>
						<a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
					</li>
					<?php endforeach; ?>
				</ul>

				<h3>Live-In Program</h3>
				<ul>
				<?php
					$args = array(
						'post_type' => 'program',
						'program-type' => 'live-in',
						'order' => 'DESC'
					);
					$programs = get_posts( $args );
					foreach ( $programs as $post ) : setup_postdata( $post );
				?>
					<li>
						<?php if ( has_post_thumbnail() ) : ?>
          		<?php the_post_thumbnail( 'medium' ); ?>
        		<?php endif; ?>
						<a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
					</li>
					<?php endforeach; ?>
				</ul>

				<h3>Sports and Recreation</h3>
				<ul>
				<?php
					$args = array(
						'post_type' => 'program',
						'program-type' => 'sports',
						'order' => 'DESC'
					);
					$programs = get_posts( $args );
					foreach ( $programs as $post ) : setup_postdata( $post );
				?>
					<li>
						<?php if ( has_post_thumbnail() ) : ?>
          		<?php the_post_thumbnail( 'medium' ); ?>
        		<?php endif; ?>
						<a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
					</li>
					<?php endforeach; ?>
				</ul>
				
			</section>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>