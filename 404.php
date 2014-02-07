<?php get_header(); ?>

<div class="units-row">

	<section id="main-content" role="main" class="unit-60">
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<h1><?php _e( 'Sorry, the page you were looking for cannot be found.', 'weaver' ); ?></h1>
			<p>Perhaps the URL has changed or has been incorrectly entered. How about a search:</p>
			
			<?php get_template_part('searchform'); ?>
		
		</article>
			
	</section>
	
	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>