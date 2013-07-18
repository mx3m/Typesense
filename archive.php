<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="pagetitle"><?php _e('Archive for the','typesense'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','typesense'); ?></h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2 class="pagetitle"><?php _e('Posts Tagged','typesense'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="pagetitle"><?php _e('Archive for','typesense'); ?> <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="pagetitle"><?php _e('Archive for','typesense'); ?> <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle"><?php _e('Archive for','typesense'); ?> <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle"><?php _e('Author Archive','typesense'); ?></h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle"><?php _e('Blog Archives','typesense'); ?></h2>
			
			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?>>
				
						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
						<h3 class="time-author"><time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time><?php _e(' in','typesense'); ?> <?php the_category(', ') ?></h3>
						<div class="entry">
							<?php the_excerpt(); ?>
						</div>

				</article>

			<?php endwhile; ?>

			<?php post_navigation(); ?>
			
	<?php else : ?>

		<h2><?php _e('Nothing Found','typesense'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>
