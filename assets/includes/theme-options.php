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
		'custom_footer_text',
		array(
			'title' => 'Custom Footer Text',
			'description' => 'Enter your custom footer text',
			'priority' => '35'
		)
	);
	
	$wp_customize->add_section(
		'favicon',
		array(
			'title' => 'Favicon',
			'desctiption' => 'Upload your Favicon',
			'priority' => '35'
		)
	);
		
	//Add Setting/s
	$wp_customize->add_setting('custom_logo_upload');
	$wp_customize->add_setting(
		'custom_footer_text',
		array(
			'default' => 'Enter your custom footer text',
			'sanitize_callback' => 'footer_sanitize_text'
		)
	);
	$wp_customize->add_setting('favicon');
	
	//Add Control/s
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'custom_logo',
			array(
				'label'=> 'Custom Logo',
				'section'=>'custom_logo_upload',
				'settings'=>'custom_logo_upload'
			)
		)
	);
	
	$wp_customize->add_control(
		'custom_footer_text',
		array(
			'label' => 'Custom Footer Text',
			'section' => 'custom_footer_text',
			'settings' => 'custom_footer_text'
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Upload_Control(
			$wp_customize,
			'favicon',
			array(
				'label' => 'Favicon',
				'section' => 'favicon',
				'settings' => 'favicon'
			)
		)
	);
	
	//Sanitize Callback/s
	function footer_sanitize_text($input) {
		return wp_kses_post(force_balance_tags($input)); /*Allows certain HTML Tags*/
	}
		
}
add_action('customize_register', 'weavr_customizer');

?>