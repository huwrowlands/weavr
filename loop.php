<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php sprintf( __( 'Permanent Link to %s', 'weavr' ), the_title_attribute( 'echo=0' ) ); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>

		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php sprintf( __('Permanent Link to %s', 'weavr' ), the_title_attribute( 'echo=0' ) ); ?><?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		
		<aside class="post-meta">
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?> | </span>
			<span class="author"><?php _e( 'Published by', 'weavr' ); ?> <?php the_author_posts_link(); ?> | </span>
			<span class="comments"><?php comments_popup_link( __( 'Leave a comment', 'weavr' ), __( '1 Comment', 'weavr' ), __( '% Comments', 'weavr' )); ?></span>			
		</aside>
						
		<?php the_excerpt(); ?>
		
	</article>

<?php endwhile; else: ?>

	<article>
		<h2 class="post-title"><?php _e( 'Sorry, nothing found.', 'weavr' ); ?></h2>
	</article>

<?php endif; ?>