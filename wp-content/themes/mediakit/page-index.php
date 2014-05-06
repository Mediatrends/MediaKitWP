<?php
/*
 Template Name: Page Index
*/
?>

<?php get_header(); ?>

	<?php 
	// the query
	$the_query = new WP_Query('category_name=style,gaming,art,fashion,music,sneakers,entertainment,sport'); ?>

	<?php if ( $the_query->have_posts() ) : ?>

	  <!-- pagination here -->

	  <!-- the loop -->
	  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	    <h2><?php the_title(); ?></h2>

	  <?php endwhile; ?>
	  <!-- end of the loop -->

	  <!-- pagination here -->

	  <?php wp_reset_postdata(); ?>

	<?php else:  ?>
	  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	
	<div class="bg_cat bg_lifestyle"></div>

<?php get_footer(); ?>