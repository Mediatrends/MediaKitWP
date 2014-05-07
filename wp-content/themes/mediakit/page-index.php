<?php
/*
 Template Name: Page Index
*/
?>

<?php get_header(); ?>
	<div id="content" class="container_cat">
		<?php 
		
		// the query
		$the_query = new WP_Query('category_name=style,gaming,art,fashion,music,sneakers,entertainment,sport'); ?>
		
		<?php if ( $the_query->have_posts() ) : ?>

		  <!-- pagination here -->
		<div class="cont_sites">
		
		  <!-- the loop -->
		  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf sites' ); ?> role="article">
					
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<div class="site_info">
						
							<div class="cont_logo">
								
								<div class="cont-img">

									<img src="<?php the_field('logo_sitio'); ?>" alt="" />
						
								</div>

							</div>
							<div class="cont_des">
								
								<h3><?php the_title(); ?></h3>

								<?php global $more; $more = false; ?>
									<?php the_excerpt(); ?>
								<?php $more = true; ?>

								<div class="icon_link">
									
									<img src="<?php echo get_template_directory_uri(); ?>/img/link_kit.gif" alt="">

								</div>
							</div>
						</div>
					</a>

			</article>
			
		  <?php endwhile; ?>
		  <!-- end of the loop -->
		</div>
		  <!-- pagination here -->

		  <?php wp_reset_postdata(); ?>

		<?php else:  ?>
		  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>	
	<div class="bg_cat"></div>

<?php get_footer(); ?>