<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'majestic' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=majesticcomments'); // Custom callback in functions.php ?>
	</ul>
	<div class="navigation">
		<?php paginate_comments_links(); ?>
	</div>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'majestic' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
