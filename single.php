<?php
/**
 * @package WordPress
 * @subpackage keepsimple
 */

get_header();
?>

	<div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;', 'kubrick') . '</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<small>BY <?php echo the_author_meta( 'nickname' ); ?> IN <?php the_date() ?> <?php the_time() ?></small>
			</div>
		</div>
	<?php comments_template(); ?>
	
	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
