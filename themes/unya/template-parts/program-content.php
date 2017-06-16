<!-- Insert into Program Archive -->
      <section>
				<header class="programs">
					<h2>Check out our programming</h2>
					<p>Click on any program to learn more</p>
				</header>
				<h3 id="education">Education and Training</h3>
				<ul class="content-wrapper">
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

				<h3 id="personal">Personal Support</h3>
				<ul class="content-wrapper">
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

				<h3 id="live-in">Live-In Program</h3>
				<ul class="content-wrapper">
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

				<h3 id="sports">Sports and Recreation</h3>
				<ul class="content-wrapper">
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
