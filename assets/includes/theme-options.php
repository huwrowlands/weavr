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
		
	//Add Setting/s
	$wp_customize->add_setting('custom_logo_upload');
	
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
		
}
add_action('customize_register', 'weavr_customizer');

?>