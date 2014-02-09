<div id="comments">

	<?php if (post_password_required()) : ?>
	
		<p><?php _e( 'This Post is password protected. Enter the password to view any comments.', 'weavr' ); ?></p>

	<?php return; endif; ?>

	<?php if (have_comments()) : ?>
	
		<ul class="commentlist">
			<?php wp_list_comments( array( 'callback'  =>  'weavr_comments_callback') ); ?>
		</ul>
		
	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Sorry, Comments are closed here.', 'weavr' ); ?></p>
	
<?php endif; ?>

	<div class="pagination">
		<?php paginate_comments_links( array('type' => 'list') ); ?>
	</div>

<?php comment_form(); ?>

</div>