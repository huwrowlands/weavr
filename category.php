<?php get_header(); ?>

<div class="units-row">

	<section id="main-content" role="main" class="unit-60">
	
		<h1><?php _e( 'Category Archive for:', 'weavr' ); ?> <?php single_cat_title( $prefix = '', $display = true );?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	
	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>