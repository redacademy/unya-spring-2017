<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package UNYA_Theme
 */

?>

<div id="secondary" class="widget-area hidden-mobile sidebar-nav-menu" role="complementary">
	<div class="menu-primary-menu-container">
		<ul class="sidebar-menu-container">
		<?php
			$terms = wp_get_post_terms( $post->ID, 'program-type');
			$term = $terms[0]->name;
			$termID = $terms[0]->term_taxonomy_id;
			
			$program_posts = get_posts(array(
    		'post_type' => 'program',
				'posts_per_page' => 10,
    		'tax_query' => array(
        	array(
					'taxonomy' => 'program-type',
					'field' => 'term_id',
					'terms' => $termID)
    		))
			);
		?>
			<li class="menu-item-archive menu-title-archive"><p><?php echo $term ?></p></li>
			<?php foreach ($program_posts as $program_post):?>
				<li class="menu-item-archive archive-items">
					<a href="<?php echo get_permalink($program_post->ID); ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><?php echo $program_post->post_title; ?></p>
					</a>
				</li>
			<?php endforeach;

		echo '<li class="menu-item-archive"><a href="' . get_site_url() . '/programs"><p>Back to Programs</p></a></li>';
		?>
		</ul>
	</div>
</div><!-- #secondary -->
