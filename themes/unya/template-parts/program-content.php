<!-- Insert into Program Archive -->
<section class="program-section" >
	<header class="program-checkout">
		<h2>Check out our programming</h2>
		<p class="desktop-only">Click on any program to learn more</p>
	</header>
	<div class="accordion" id="accordion">
		<h2 class="accordion-label"><span class="anchor" id="education"></span>Education &amp; Training</h2>
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
					<div class="program-archive-item">
					  <a href="<?php the_permalink() ?>">
					    <div class="gradient"></div>
					    <?php if ( has_post_thumbnail() ) : ?>
					    	<?php the_post_thumbnail( 'medium', array('class' => 'program-thumb')); ?>
					  	<?php endif; ?>
					  	<div class="program-item-footer-wrapper education-title">
							  <img class="hidden-mobile program-logo" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/education-program.svg">
					      <h4 class="program-name"><?php the_title(); ?></h4>
			        </div>	
						</a>
			   </div>	
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<h2 class="accordion-label"><span class="anchor" id="personal"></span>Health & Wellness</h2>
		<div>
			<div class="section-heading personal-heading">
				<h3 class="content-wrapper">Health & Wellness</h3>
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
				  <div class="program-archive-item">
					  <a href="<?php the_permalink() ?>">
					  <div class="gradient"></div>
					  <?php if ( has_post_thumbnail() ) : ?>
					  	<?php the_post_thumbnail( 'medium', array('class' => 'program-thumb') ); ?>
						<?php endif; ?>
						  <div class="program-item-footer-wrapper personal-support-title">
					      <h4 class="program-name"><?php the_title(); ?></h4>
					      <img class="hidden-mobile program-logo" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/support-program.svg">
			        </div>
						</a>
			    </div>	
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<h2 class="accordion-label"><span class="anchor" id="live-in"></span>Housing & Transition</h2>
		<div>
			<div class="section-heading live-in-heading">
				<h3 class="content-wrapper">Housing & Transition</h3>
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
				  <div class="program-archive-item">
					  <a href="<?php the_permalink() ?>">
					  <div class="gradient"></div>
					  <?php if ( has_post_thumbnail() ) : ?>
					  	<?php the_post_thumbnail( 'medium', array('class' => 'program-thumb') ); ?>
						<?php endif; ?>
						  <div class="program-item-footer-wrapper housing-title">
								<img class="hidden-mobile program-logo" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/live-in-program.svg">
								<h4 class="program-name"><?php the_title(); ?></h4>
			        </div>
						</a>
			    </div>	
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<h2 class="accordion-label"><span class="anchor" id="sports"></span>Community & Connection</h2>
		<div>
			<div class="section-heading sports-heading">
				<h3 class="content-wrapper">Community & Connection</h3>
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
				  <div class="program-archive-item">
					  <a href="<?php the_permalink() ?>">
					  <div class="gradient"></div>
					  <?php if ( has_post_thumbnail() ) : ?>
					  	<?php the_post_thumbnail( 'medium', array('class' => 'program-thumb') ); ?>
						<?php endif; ?>
						  <div class="program-item-footer-wrapper community-title">						
								<h4 class="program-name"><?php the_title(); ?></h4>
								<img class="hidden-mobile program-logo" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/sports-program.svg">
							</div>
						</a>
			    </div>	
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
