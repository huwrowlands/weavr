<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<title><?php wp_title(); ?></title>
		
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<?php if (get_theme_mod('favicon')) { ?>
			<link href="<?php echo get_theme_mod( 'favicon' ); ?>" rel="shortcut icon">
		<?php } ?>
			
   <?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
	
		<header id="masthead" role="banner">
			
				<nav id="main-navigation" role="navigation">
					<?php if ( has_nav_menu( 'primary_menu' ) ) { ?>
						<div class="nav">
							<?php weavr_nav(); ?>
						</div>
					<?php } else { ?>
						<div class="nav">
							<ul class="nav-list">
								<?php wp_list_pages('title_li='); ?>
							</ul>
						</div>
					<?php } ?>
				</nav>
						
				<div class="units-row">
					
					<?php if (get_theme_mod('custom_logo_upload')) { ?>
					
						<a href="<?php echo home_url(); ?>">
							<img alt="<?php bloginfo('name'); ?>" class="site-logo" src="<?php echo get_theme_mod( 'custom_logo_upload' ); ?>" />
						</a>
						
					<?php } else { ?>
					
					<h1 class="site-title">
							<a href="<?php echo home_url(); ?>">
								<?php bloginfo('name'); ?>
							</a>	
					</h1>			
								
					<?php } ?>
					
					<h2 class="tagline">
						<?php bloginfo('description'); ?>
					</h2>		
					
				</div>
	
					<?php if ( get_header_image() ) { ?>			
						<style>#masthead {background-image: url("<?php echo get_theme_mod( 'header_image' ); ?>");}</style>			
					<?php } else { ?>
						<style>#masthead {background-image: url("<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg");}</style>		
					<?php } ?>			
						
		</header>

		
		<?php if ( has_nav_menu( 'secondary_menu' ) ) { ?>
			<div id="secondary-navigation" role="navigation" class="units-row units-split">
				<div class="nav clearfix">
					<?php weavr_secondary_nav(); ?>
				</div>
			</div>
		<?php } ?>