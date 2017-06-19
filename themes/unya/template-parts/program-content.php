<!-- Insert into Program Archive -->
      <section class="program-section" >
				<header class="programs hidden-mobile">
					<h2>Check out our programming</h2>
					<p>Click on any program to learn more</p>
				</header>
				<div class="accordion" id="accordion">
					<h2 class="accordion-label">Education &amp; Training</h2>
					<div>
						<div class="section-heading">
							<h3 class="content-wrapper" id="education">Education &amp; Training</h3>
						</div>
						<ul class="programs-list education-list">
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
					</div>
					<h2 class="accordion-label">Personal Support</h2>
					<div>
						<div class="section-heading">
							<h3 class="content-wrapper" id="personal">Personal Support</h3>
						</div>
						<ul class="programs-list personal-list">
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
					</div>
					<h2 class="accordion-label">Live-In Programs</h2>
					<div>
						<div class="section-heading">
							<h3 class="content-wrapper" id="live-in">Live-In Program</h3>
						</div>
						<ul class="programs-list live-in-list">
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
					</div>
					<h2 class="accordion-label">Sports and Recreation</h2>
					<div>
						<div class="section-heading">
							<h3 class="content-wrapper" id="sports">Sports and Recreation</h3>
						</div>
						<ul class="programs-list sports-list">
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
					</div>
				</div>
			</section>