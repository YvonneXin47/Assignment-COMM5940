<?php

    add_theme_support( 'post-thumbnails' );


	//// Register Custom Navigation Walker
	require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

	//Theme Support
	function wpb_theme_setup(){
		//Nav Menus
		register_nav_menus(array(
		'primary' => __('Primary Menu','THEMENAME'),
		));
		}

	add_theme_support ('menus');
	add_action('after_setup_theme','wpb_theme_setup')


?>