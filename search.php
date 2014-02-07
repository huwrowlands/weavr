<?php get_header(); ?>

<div class="units-row">

	<section id="main-content" role="main" class="unit-60">

		<h1><?php echo sprintf( __( '%s Search Results for ', 'weavr' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>

	
	</section>

	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>