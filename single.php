<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<h3 class="time-author"><time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time><?php _e(' in','typesense'); ?> <?php the_category(', ') ?>
				<!-- , by <?php the_author() ?> --> </h3>
				<!-- uncomment, if you want to display the author's name -->

			<div class="entry-content">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>

			</div>
			
		</article>

		<!-- add < ? php comments_template(); ? >, minus the spaces, if you want to activate comments -->

	<?php endwhile; endif; ?>

<?php get_footer(); ?>