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
			'title' => _('Custom Logo', 'weavr'),
			'description' => _('Upload your custom logo', 'weavr'),
			'priority' => '35',
		)
	);
	
	$wp_customize->add_section(
		'custom_footer_text',
		array(
			'title' => _('Custom Footer Text', 'weavr'),
			'description' => _('Enter your custom footer text', 'weavr'),
			'priority' => '35'
		)
	);
	
	$wp_customize->add_section(
		'favicon',
		array(
			'title' => _('Favicon', 'weavr'),
			'desctiption' => _('Upload your Favicon', 'weavr'),
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
				'label'=>_('Custom Logo', 'weavr'),
				'section'=>'custom_logo_upload',
				'settings'=>'custom_logo_upload'
			)
		)
	);
	
	$wp_customize->add_control(
		'custom_footer_text',
		array(
			'label' => _('Custom Footer Text', 'weavr'),
			'section' => 'custom_footer_text',
			'settings' => 'custom_footer_text'
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Upload_Control(
			$wp_customize,
			'favicon',
			array(
				'label' => _('Favicon', 'weavr'),
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