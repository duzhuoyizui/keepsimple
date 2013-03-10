<?php
/**
 * @package WordPress
 * @subpackage keepsimple
 */

get_header(); ?>
	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content(('')); ?>
					<small><?php the_date() ?> <?php the_time() ?> | <?php edit_post_link(__('Edit', 'kubrick'), '', ' | '); ?><a href="<?php the_permalink() ?>">全文阅读</a> | <?php comments_popup_link('评论(0)', '评论(1)', '评论(%)',  '评论(已关闭)' ); ?></small>
				</div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php native_pagenavi() ?></div>
		</div>

	<?php else : ?>
		<h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
