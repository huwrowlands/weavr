<?php get_header(); ?>

<div class="units-row">

	<section id="main-content" role="main" class="unit-60">
	
		<h1><?php _e( 'Archives', 'weavr' ); ?></h1>
		
			<h2>Search Archives:</h2>
			<?php get_template_part('searchform'); ?>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	
	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>