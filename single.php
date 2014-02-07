<?php get_header(); ?>

<div class="units-row">

	<section id="main-content" role="main" class="unit-60">

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
					<?php get_post_format(); ?>
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span class="author"><?php _e( 'Published by', 'weavr' ); ?> <?php the_author_posts_link(); ?></span>
					<span class="comments"><?php comments_popup_link( __( 'Leave a comment', 'weavr' ), __( '1 Comment', 'weavr' ), __( '% Comments', 'weavr' )); ?></span>	
					<span class="post-tags"><?php the_tags( __( 'Tags: ', 'weavr' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></span>
					<span class="post-categories"><?php _e( 'Categorised in: ', 'weavr' ); the_category(', '); // Separated by commas ?></span>
				</aside>
								
				<?php the_content(); ?>
				
				<?php comments_template( '', true ); ?>
				
			</article>

			<div class="inner-pagination">					
				<?php wp_link_pages(array( 'before' => '<ul class="page-numbers">', 'after' => '</ul>', 'link_before' => '<span>', 'link_after' => '</span>', 'next_or_number' => 'next_and_number', 'separator' => '', 'nextpagelink' => __( 'Next &raquo;', 'weavr' ), 'previouspagelink' => __( '&laquo; Previous', 'weavr' ), 'pagelink' => '%')); ?>
			</div>
		
		<?php endwhile; else: ?>
		
			<article>
				<h2 class="post-title"><?php _e( 'Sorry, nothing found.', 'weavr' ); ?></h2>
			</article>			
		
		<?php endif; ?>
	
	</section>

	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>