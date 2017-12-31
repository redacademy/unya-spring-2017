<?php
/**
 * Template Name: resource-archive
 * The template for displaying resources archive.
 * @package UNYA_Theme
 */
get_header();  ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <header class="header-wrapper impact-title sidebar-start">
			  <h1>resources</h1>
		  </header>
      <div class="resource-archive-main">
       
        <div class="resource-archive-section">
          <h3 class="resource-archive-section-header-mobile">Arts & Culture</h3>
          <div class="resource-archive-section-header hidden-mobile ">
            <div class="gradient-wrapper"></div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/cedarwalk-banner.png' ?>" />
            <h3>Arts & Culture</h3>
          </div>  
          <?php
            $args= array(
              'post_type'=> 'news',
              'tag'      => 'arts-&-culture'
            );
            $resources = new WP_Query($args);
          ?>
          <?php if ( $resources->have_posts() ) : while ( $resources->have_posts() ) : $resources->the_post(); ?>
            <div class="resource-archive-item">
              <div class="resource-archive-item-image">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="resource-archive-item-info">
                <h3 class="resource-archive-item-info-title"><?php the_title(); ?></h3>
                <?php 
                $article = CFS()->get('article_text');
                $excerpt = wp_trim_words( custom_field_excerpt('article_text'), 10 );
                if ($article) : ?>
                  <p class="desktop-only"><?php echo $excerpt; ?></p>
                <?php endif; ?>
                <a class="resource-link" href="<?php the_permalink(); ?>">
                  Read More
						      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>  
              </div>
            </div>  
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>

        <div class="resource-archive-section">
          <h3 class="resource-archive-section-header-mobile">Health & Wellness</h3>
          <div class="resource-archive-section-header hidden-mobile ">
            <div class="gradient-wrapper"></div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/cedarwalk-banner.png' ?>" />
            <h3>Health & Wellness</h3>
          </div>            
          <?php
            $args= array(
              'post_type'=> 'news',
              'tag'      => 'health-&-wellness'
            );
            $resources = new WP_Query($args);
          ?>
          <?php if ( $resources->have_posts() ) : while ( $resources->have_posts() ) : $resources->the_post(); ?>
            <div class="resource-archive-item">
              <div class="resource-archive-item-image">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="resource-archive-item-info">
                <h3 class="resource-archive-item-info-title"><?php the_title(); ?></h3>
                <?php 
                $article = CFS()->get('article_text');
                $excerpt = wp_trim_words( custom_field_excerpt('article_text'), 10 );
                if ($article) : ?>
                  <p class="desktop-only"><?php echo $excerpt; ?></p>
                <?php endif; ?>
                <a class="resource-link" href="<?php the_permalink(); ?>">
                  Read More
						      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>  
              </div>
            </div>  
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>               
        </div>

        <div class="resource-archive-section">
          <h3 class="resource-archive-section-header-mobile">Housing & Transition</h3>
          <div class="resource-archive-section-header hidden-mobile ">
            <div class="gradient-wrapper"></div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/cedarwalk-banner.png' ?>" />
            <h3>Housing & Transition</h3>
          </div>            
          <?php
            $args= array(
              'post_type'=> 'news',
              'tag'      => 'housing-&-transition'
            );
            $resources = new WP_Query($args);
          ?>
          <?php if ( $resources->have_posts() ) : while ( $resources->have_posts() ) : $resources->the_post(); ?>
            <div class="resource-archive-item">
              <div class="resource-archive-item-image">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="resource-archive-item-info">
                <h3 class="resource-archive-item-info-title"><?php the_title(); ?></h3>
                <?php 
                $article = CFS()->get('article_text');
                $excerpt = wp_trim_words( custom_field_excerpt('article_text'), 10 );
                if ($article) : ?>
                  <p class="desktop-only"><?php echo $excerpt; ?></p>
                <?php endif; ?>
                <a class="resource-link" href="<?php the_permalink(); ?>">
                  Read More
						      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>  
              </div>
            </div>  
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>    
        </div>  

        <div class="resource-archive-section">
          <h3 class="resource-archive-section-header-mobile">Personal Support</h3>
          <div class="resource-archive-section-header hidden-mobile ">
            <div class="gradient-wrapper"></div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/cedarwalk-banner.png' ?>" />
            <h3>Personal Support</h3>
          </div>            
          <?php
            $args= array(
              'post_type'=> 'news',
              'tag'      => 'personal-support'
            );
            $resources = new WP_Query($args);
          ?>
          <?php if ( $resources->have_posts() ) : while ( $resources->have_posts() ) : $resources->the_post(); ?>
            <div class="resource-archive-item">
              <div class="resource-archive-item-image">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="resource-archive-item-info">
                <h3 class="resource-archive-item-info-title"><?php the_title(); ?></h3>
                <?php 
                $article = CFS()->get('article_text');
                $excerpt = wp_trim_words( custom_field_excerpt('article_text'), 10 );
                if ($article) : ?>
                  <p class="desktop-only"><?php echo $excerpt; ?></p>
                <?php endif; ?>
                <a class="resource-link" href="<?php the_permalink(); ?>">
                  Read More
						      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>  
              </div>
            </div>  
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>            
        </div>  

        <div class="resource-archive-section">
          <h3 class="resource-archive-section-header-mobile">Employment & Education</h3>
          <div class="resource-archive-section-header hidden-mobile ">
            <div class="gradient-wrapper"></div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/cedarwalk-banner.png' ?>" />
            <h3>Employment & Education</h3>
          </div>  
          <?php
            $args= array(
              'post_type'=> 'news',
              'tag'      => 'employment-&-education'
            );
            $resources = new WP_Query($args);
          ?>
          <?php if ( $resources->have_posts() ) : while ( $resources->have_posts() ) : $resources->the_post(); ?>
            <div class="resource-archive-item">
              <div class="resource-archive-item-image">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="resource-archive-item-info">
                <h3 class="resource-archive-item-info-title"><?php the_title(); ?></h3>
                <?php 
                $article = CFS()->get('article_text');
                $excerpt = wp_trim_words( custom_field_excerpt('article_text'), 10 );
                if ($article) : ?>
                  <p class="desktop-only"><?php echo $excerpt; ?></p>
                <?php endif; ?>
                <a class="resource-link" href="<?php the_permalink(); ?>">
                  Read More
						      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>  
              </div>
            </div>  
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>             
        </div>  

        <div class="resource-archive-section">
          <h3 class="resource-archive-section-header-mobile">Culture & Connection</h3>
          <div class="resource-archive-section-header hidden-mobile ">
            <div class="gradient-wrapper"></div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/cedarwalk-banner.png' ?>" />
            <h3>Culture & Connection</h3>
          </div>
          <?php
            $args= array(
              'post_type'=> 'news',
              'tag'      => 'culture-&-connection'
            );
            $resources = new WP_Query($args);
          ?>
          <?php if ( $resources->have_posts() ) : while ( $resources->have_posts() ) : $resources->the_post(); ?>
            <div class="resource-archive-item">
              <div class="resource-archive-item-image">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="resource-archive-item-info">
                <h3 class="resource-archive-item-info-title"><?php the_title(); ?></h3>
                <?php 
                $article = CFS()->get('article_text');
                $excerpt = wp_trim_words( custom_field_excerpt('article_text'), 10 );
                if ($article) : ?>
                  <p class="desktop-only"><?php echo $excerpt; ?></p>
                <?php endif; ?>
                <a class="resource-link" href="<?php the_permalink(); ?>">
                  Read More
						      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>  
              </div>
            </div>  
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>  
        </div>  

        <div class="resource-archive-section">
          <h3 class="resource-archive-section-header-mobile">Sports & Rec</h3>
          <div class="resource-archive-section-header hidden-mobile ">
            <div class="gradient-wrapper"></div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/cedarwalk-banner.png' ?>" />
            <h3>Sports & Rec</h3>
          </div>            
          <?php
            $args= array(
              'post_type'=> 'news',
              'tag'      => 'sports-&-rec'
            );
            $resources = new WP_Query($args);
          ?>
          <?php if ( $resources->have_posts() ) : while ( $resources->have_posts() ) : $resources->the_post(); ?>
            <div class="resource-archive-item">
              <div class="resource-archive-item-image">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="resource-archive-item-info">
                <h3 class="resource-archive-item-info-title"><?php the_title(); ?></h3>
                <?php 
                $article = CFS()->get('article_text');
                $excerpt = wp_trim_words( custom_field_excerpt('article_text'), 10 );
                if ($article) : ?>
                  <p class="desktop-only"><?php echo $excerpt; ?></p>
                <?php endif; ?>
                <a class="resource-link" href="<?php the_permalink(); ?>">
                  Read More
						      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>  
              </div>
            </div>  
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>  
        </div>  

      </div><!-- resource-archive-main --> 
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar('programs'); ?>
<?php get_footer(); ?>
