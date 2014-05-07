<?php get_header(); ?>

	<div id="content" class="container_cat">

		<div class="tit_cat">
			
			<?php if (is_category()) { ?>
				<h2 class="archive-title h2">
					<span><!--?php _e( 'Posts Categorized:', 'bonestheme' ); ?--></span> <?php single_cat_title(); ?>
				</h2>

			<?php } elseif (is_tag()) { ?>
				<h2 class="archive-title h2">
					<span><!--?php _e( 'Posts Tagged:', 'bonestheme' ); ?--></span> <?php single_tag_title(); ?>
				</h2>

			<?php } elseif (is_author()) {
				global $post;
				$author_id = $post->post_author;
			?>
				<h2 class="archive-title h2">

					<span><!--?php _e( 'Posts By:', 'bonestheme' ); ?--></span> <?php the_author_meta('display_name', $author_id); ?>

				</h2>
			<?php } elseif (is_day()) { ?>
				<h2 class="archive-title h2">
					<span><!--?php _e( 'Daily Archives:', 'bonestheme' ); ?--></span> <?php the_time('l, F j, Y'); ?>
				</h2>

			<?php } elseif (is_month()) { ?>
					<h2 class="archive-title h2">
						<span><!--?php _e( 'Monthly Archives:', 'bonestheme' ); ?--></span> <?php the_time('F Y'); ?>
					</h2>

			<?php } elseif (is_year()) { ?>
					<h2 class="archive-title h2">
						<span><!--?php _e( 'Yearly Archives:', 'bonestheme' ); ?--></span> <?php the_time('Y'); ?>
					</h2>
			<?php } ?>

		</div>
		
		<div class="cont_sites">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
								<?php the_excerpt(); ?>

								<div class="icon_link">
									
									<img src="<?php echo get_template_directory_uri(); ?>/img/link_kit.gif" alt="">

								</div>
							</div>
						</div>
					</a>
				<!--header class="article-header">

					<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<p class="byline vcard"><?php
						printf(__( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(__( 'F jS, Y', 'bonestheme' )), get_author_posts_url( get_the_author_meta( 'ID' ) ), get_the_category_list(', '));
					?></p>

				</header>

				<section class="entry-content cf">

					<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

					<?php the_excerpt(); ?>

				</section-->

			</article>

			<?php endwhile; ?>

		</div>
		<?php bones_page_navi(); ?>

		<?php else : ?>

				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

		<?php endif; ?>

	</div>
	<div class="bg_cat"></div>

<?php get_footer(); ?>
