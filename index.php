<?php get_header(); ?>

<div class="units-row">

	<section id="main-content" role="main" class="unit-60">

		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>

	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>