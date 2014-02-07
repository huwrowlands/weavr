<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<title><?php wp_title(); ?></title>
		
		<link href="//www.google-analytics.com" rel="dns-prefetch">
			
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
				
					<h1 class="site-title">
							<a href="<?php echo home_url(); ?>">
								<?php bloginfo('name'); ?>
							</a>	
					</h1>
					
					<h2 class="tagline">
						<?php bloginfo('description'); ?>
					</h2>		
					
				</div>

			<?php if ( get_header_image() ) { ?>			
				<div class="custom-header">
					<img src="<?php header_image(); ?>" class="header-image" alt="<?php bloginfo('name'); ?>" />
				</div>			
			<?php } else { ?>
				<div class="custom-header">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" class="header-image" alt="<?php bloginfo('name'); ?>" />
				</div>			
			<?php } ?>	
						
		</header>
		
		<?php if ( has_nav_menu( 'secondary_menu' ) ) { ?>
			<div id="secondary-navigation" role="navigation">
				<div class="units-row clearfix">
					<?php weavr_secondary_nav(); ?>
				</div>
			</div>
		<?php } ?>