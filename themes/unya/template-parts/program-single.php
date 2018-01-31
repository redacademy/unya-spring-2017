<?php
/**
 * Template part for displaying single programs.
 *
 * @package UNYA_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="program-content content-wrapper">
		<?php the_title( '<h2 class="program-title">', '</h2>' ); ?>		
		<p><?php echo wpautop( esc_html( CFS()->get( 'program_details' ) ) ); ?></p>
		<a href="<?php echo esc_html( CFS()->get( 'program_brochure' ) ); ?>"><i class="fa fa-file-o" aria-hidden="true"></i> <?php the_title(); ?> Program Brochure (PDF)</a>
	</div>

	<div class="program-body">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="program-image"><?php the_post_thumbnail( 'large' ); ?></div>
		<?php endif; ?>
		<div class="program-activities content-wrapper">
			<h3>Program Activities</h3>
			<ul>
			<?php	
				$activities = CFS()->get( 'program_activities' );
				foreach ( $activities as $activity ) : ?>
				<li><?php echo wp_kses($activity['program_activity'],array('br') ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="program-involvement content-wrapper">
			<h3>How To Get Involved</h3>
			<p class="content-wrapper"><?php echo wpautop( esc_html( CFS()->get( 'get_involved' ) ) ); ?></p>
		</div>
	
		<?php
			$prog_str = trim(wp_title('', false));
		  $args = array(
				'post_type'      => 'news',
				'posts_per_page' => 3,
				'tag_slug__in'            => $prog_str,
			);
			$prog_resources = new WP_Query($args);
		?>
    <?php if( $prog_resources->have_posts() ) : ?>
    <div class="program-resource-wrapper content-wrapper">
			<h2 class="program-resources-box-header">Resources</h2>

			<?php	
				if( $prog_resources->have_posts() ) : while( $prog_resources->have_posts() ) : $prog_resources->the_post();
					$trimmed_excerpt = wp_trim_words( custom_field_excerpt('article_text'), 8 );
			?>
			  <div class="prog-resource-item">
          <div class="prog-resource-image hidden-mobile">
          	<?php echo (the_post_thumbnail('large')); ?>
          </div>
					<div class="prog-resource-info">
						<h3 class="prog-headline">
							<a href="<?php 
							  $internal = CFS()->get('internal_news_post');
								if ($internal) :
									echo the_permalink();
								else :
									echo CFS()->get( 'article_url' ); 								
								endif;	
							?>"><?php the_title();?></a></h3>			
						<p><?php echo $trimmed_excerpt; ?></p>
						<div class="news-url" id="prog-url">
							<a class="news-link" href="<?php 
								if ($internal) :
									echo the_permalink();
								else :
									echo CFS()->get( 'article_url' ); 								
								endif;	
							?>">Read More
					  	  <i class="fa fa-arrow-right" aria-hidden="true"></i>
					    </a>
            </div>		
				  </div>		
				</div>	
		  <?php endwhile; ?>
			<?php endif; ?>	
		</div>
		<?php endif; ?>

	</div>

</article><!-- #post-## -->
