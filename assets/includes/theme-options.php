<?php
/**
	THEME OPTIONS FOR THE THEME CUSTOMIZER
**/

/*************************
	CUSTOM LOGO
	CUSTOM FAVICON
	CUSTOM FOOTER TEXT
	CUSTOM CSS (TODO)
	CUSTOM COLORS (TODO)
	HOMEPAGE SLIDER (TODO)
*************************/

function weavr_customizer( $wp_customize) {

	/**
	 * Add textarea support to the theme customizer
	 */
	class Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';
	 
	    public function render_content() {
	        ?>
	            <label>
	                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	            </label>
	        <?php
	    }
	}

/*************************	
* ADD SECTIONS
*************************/

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
			'description' => 'Upload your Favicon',
			'priority' => '35'
		)
	);

	$wp_customize->add_section(
		'custom-css',
		array(
			'title' => 'Custom CSS',
			'description' => 'Add your own CSS',
			'priority' => '35'
		)
	);		
		
/*************************	
* ADD SETTINGS
*************************/

	$wp_customize->add_setting('custom_logo_upload');
	$wp_customize->add_setting(
		'custom_footer_text',
		array(
			'default' => 'Enter your custom footer text',
			'sanitize_callback' => 'footer_sanitize_text'
		)
	);
	$wp_customize->add_setting('favicon');
	$wp_customize->add_setting('custom-css');
	
	
/*************************	
* ADD CONTROLS
*************************/

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
	
	$wp_customize->add_control(
		new Customize_Textarea_Control(
			$wp_customize,
			'custom-css',
			array(
				'label' => 'Custom CSS',
				'section' => 'custom-css',
				'settings' => 'custom-css'
			)
		)
	);
		
/*************************	
* SANATIZE CALLBACKS
*************************/

	function footer_sanitize_text($input) {
		return wp_kses_post(force_balance_tags($input)); /*Allows certain HTML Tags*/
	}
		
}

add_action('customize_register', 'weavr_customizer');

?>