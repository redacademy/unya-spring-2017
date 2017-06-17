<!-- Insert into Program Archive -->
      <section class="program-section">
				<header class="programs hidden-mobile">
					<h2>Check out our programming</h2>
					<p>Click on any program to learn more</p>
				</header>
				<div class="section-heading">
					<h3 class="content-wrapper" id="education">Education &amp; Training</h3>
				</div>
				<ul class="programs-list">
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
						<a href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() ) : ?>
          		<?php the_post_thumbnail( 'medium' ); ?>
        		<?php endif; ?>
						<h4 class="program-name"><?php the_title(); ?></h4>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>

				<div class="section-heading">
					<h3 class="content-wrapper" id="personal">Personal Support</h3>
				</div>
				<ul class="programs-list">
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
						<a href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() ) : ?>
          		<?php the_post_thumbnail( 'medium' ); ?>
        		<?php endif; ?>
						<h4 class="program-name"><?php the_title(); ?></h4>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>

				<div class="section-heading">
					<h3 class="content-wrapper" id="live-in">Live-In Program</h3>
				</div>
				<ul class="programs-list">
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
						<a href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() ) : ?>
          		<?php the_post_thumbnail( 'medium' ); ?>
        		<?php endif; ?>
						<h4 class="program-name"><?php the_title(); ?></h4>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>

				<div class="section-heading">
					<h3 id="sports">Sports and Recreation</h3>
				</div>
				<ul class="programs-list">
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
						<a href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() ) : ?>
          		<?php the_post_thumbnail( 'medium' ); ?>
        		<?php endif; ?>
						<h4 class="program-name"><?php the_title(); ?></h4>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</section>
