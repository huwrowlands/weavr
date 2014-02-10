<div class="units-row">
	<?php if (get_theme_mod('custom_footer_text')) { ?>
		<p><?php echo get_theme_mod( 'custom_footer_text' ); ?></p>
	<?php } else { ?>	
		<p>&copy; <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> | Theme by <a href="http://www.inspiredworx.com/">Inspired Worx</a> | Powered by <a href="http://wordpress.org/">WordPress</a></p>
	<?php } ?>
</div>

	<?php wp_footer(); ?>
	</body>
</html>