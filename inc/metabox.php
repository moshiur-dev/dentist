<?php
function dentist_metabox_init(){
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5ff986708bccb',
			'title' => 'dentist',
			'fields' => array(
				array(
					'key' => 'field_5ff986ba46c04',
					'label' => 'City',
					'name' => 'city',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ff98a4ec4f21',
					'label' => 'Zip Code',
					'name' => 'zip_code',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
				array(
					'key' => 'field_5ff98a6ac4f22',
					'label' => 'Company Name',
					'name' => 'company_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ff98a8ac4f23',
					'label' => 'Visit Website',
					'name' => 'visit_website',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ff98a95c4f24',
					'label' => 'Phone Number',
					'name' => 'phone_number',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ff98aa5c4f25',
					'label' => 'Location',
					'name' => 'location',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ff99289c2958',
					'label' => 'profile image',
					'name' => 'profile_image',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ff993b9845cd',
					'label' => 'Send Massage Link',
					'name' => 'send_massage_link',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ff993d0dfc93',
					'label' => 'Write Review Link',
					'name' => 'write_review_link',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'dentist',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		));
		
		endif;
}
add_action('init','dentist_metabox_init');

function cptui_register_my_cpts_dentist() {

	/**
	 * Post Type: dentistss.
	 */

	$labels = [
		"name" => __( "dentistss", "dentist-custom" ),
		"singular_name" => __( "dentist", "dentist-custom" ),
	];

	$args = [
		"label" => __( "dentistss", "dentist-custom" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "dentist", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "dentist", $args );
}

add_action( 'init', 'cptui_register_my_cpts_dentist' );




add_filter('single_template', 'abcd_dentist');
function abcd_dentist($file){
	global $post;
	if("dentist" == $post->post_type){
		$file_path = plugin_dir_path (__FILE__). "single-dentist.php";
		$file = $file_path;
	}


	return $file;
}

function enqueue_dentist_styles() {

	

    wp_register_style( 'bootstrap-css', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', false, 1.0, 'all' );
    wp_register_style( 'font-css', plugin_dir_url( __FILE__ ) . 'css/fontawesome-all.min.css', false, 1.0, 'all' );
     wp_register_style( 'style_css_2',plugin_dir_url( __FILE__ ) . 'css/style.css', false, 1.0, 'all' );
	 wp_register_style( 'responsive_css_1', plugin_dir_url( __FILE__ ) . 'css/responsive.css', false, 1.0, 'all' );
	 

	 wp_enqueue_script( 'bootstrap-js', plugin_dir_url( __FILE__ ) . "js/bootstrap.min.js", array( 'jquery' ), 2.0, true );

    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'style_css_2' );
    wp_enqueue_style( 'bootstrap-css');
    wp_enqueue_style( 'font-css');
    wp_enqueue_style( 'responsive_css_1');
}
add_action( 'wp_enqueue_scripts', 'enqueue_dentist_styles', PHP_INT_MAX);