<?php
/**
	THEME OPTIONS FOR THE CUSTOMIZER
**/

/*****
	CUSTOM LOGO
	CUSTOM FAVICON
*****/

function weavr_customizer( $wp_customize) {

	//Add Section/s
	$wp_customize->add_section(
		'custom_logo_upload',
		array(
			'title' => 'Custom Logo',
			'description' => 'Upload your custom logo',
			'priority' => '35',
		)
	);

	$wp_customize->add_section(
		'favicon_upload',
		array(
			'title' => 'Favicon',
			'description' => 'Upload your favicon',
			'priority' => '35',
		)
	);
		
	//Add Setting/s
	$wp_customize->add_setting('custom_logo_upload');
	$wp_customize->add_setting('favicon_upload');
	
	//Add Control/s
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'custom_logo',
			array(
				'label'=>'Custom Logo',
				'section'=>'custom_logo_upload',
				'settings'=>'custom_logo_upload'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Upload_Control(
			$wp_customize,
			'favicon',
			array(
				'label'=>'Favicon',
				'section'=>'favicon_upload',
				'settings'=>'favicon_upload'
			)
		)
	);
		
}
add_action('customize_register', 'weavr_customizer');

?>