<!-- Insert into Program Archive -->
<section class="program-section" >
	<header class="program-checkout">
		<h2>Check out our programming</h2>
		<p class="hidden-mobile">Click on any program to learn more</p>
	</header>
	<div class="accordion" id="accordion">
		<h2 class="accordion-label" id="education">Education &amp; Training</h2>
		<div>
			<div class="section-heading education-heading">
				<h3 class="content-wrapper">Education &amp; Training</h3>
			</div>
			<ul class="programs-list education-list">
			<?php
				$args = array(
					'post_type' => 'program',
					'program-type' => 'education',
					'order' => 'DESC',
					'posts_per_page' => 10
				);
				$programs = get_posts( $args );
				foreach ( $programs as $post ) : setup_postdata( $post );
			?>
				<li>
					<a href="<?php the_permalink() ?>">
					  <div class="gradient"></div>
					  <?php if ( has_post_thumbnail() ) : ?>
					  	<?php the_post_thumbnail( 'medium' ); ?>
					  <?php endif; ?>
					  <h4 class="program-name"><?php the_title(); ?></h4>
					  <img class="display-all-but-mobile program-logo" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/education-program.svg">
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<h2 class="accordion-label" id="personal">Personal Support</h2>
		<div>
			<div class="section-heading personal-heading">
				<h3 class="content-wrapper">Personal Support</h3>
			</div>
			<ul class="programs-list personal-list">
			<?php
				$args = array(
					'post_type' => 'program',
					'program-type' => 'personal-support',
					'order' => 'DESC',
					'posts_per_page' => 10
				);
				$programs = get_posts( $args );
				foreach ( $programs as $post ) : setup_postdata( $post );
			?>
				<li>
					<a href="<?php the_permalink() ?>">
					<div class="gradient"></div>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'medium' ); ?>
					<?php endif; ?>
					<h4 class="program-name"><?php the_title(); ?></h4>
					<img class="display-all-but-mobile program-logo" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/support-program.svg">
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<h2 class="accordion-label" id="live-in">Live-In Programs</h2>
		<div>
			<div class="section-heading live-in-heading">
				<h3 class="content-wrapper">Live-In Program</h3>
			</div>
			<ul class="programs-list live-in-list">
			<?php
				$args = array(
					'post_type' => 'program',
					'program-type' => 'live-in',
					'order' => 'DESC',
					'posts_per_page' => 10
				);
				$programs = get_posts( $args );
				foreach ( $programs as $post ) : setup_postdata( $post );
			?>
				<li>
					<a href="<?php the_permalink() ?>">
					<div class="gradient"></div>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'medium' ); ?>
					<?php endif; ?>
					<h4 class="program-name"><?php the_title(); ?></h4>
					<img class="display-all-but-mobile program-logo" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/live-in-program.svg">
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<h2 class="accordion-label" id="sports">Sports and Recreation</h2>
		<div>
			<div class="section-heading sports-heading">
				<h3 class="content-wrapper">Sports and Recreation</h3>
			</div>
			<ul class="programs-list sports-list">
			<?php
				$args = array(
					'post_type' => 'program',
					'program-type' => 'sports',
					'order' => 'DESC',
					'posts_per_page' => 10
				);
				$programs = get_posts( $args );
				foreach ( $programs as $post ) : setup_postdata( $post );
			?>
				<li>
					<a href="<?php the_permalink() ?>">
					<div class="gradient"></div>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'medium' ); ?>
					<?php endif; ?>
					<h4 class="program-name"><?php the_title(); ?></h4>
					<img class="display-all-but-mobile program-logo" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/sports-program.svg">
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
