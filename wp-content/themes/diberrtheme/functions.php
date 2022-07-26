<?php
	// Add theme support for logo, title tag and thumbnails
	function diberr_theme_support(){
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme', 'diberr_theme_support');

	// Register Styles
	function diberr_register_styles(){
		// Get Theme Version
		$version = wp_get_theme()->get('Version');

		wp_enqueue_style('diberr', get_template_directory_uri(). '/style.css', array('diberr-bootstrap'), $version, 'all');
		wp_enqueue_style('diberr-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css', array(), $version, 'all');
		wp_enqueue_style('diberr-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), $version, 'all');
	}

	// Add Styles registration to wordpress hook
	add_action('wp_enqueue_scripts', 'diberr_register_styles');

	// Register Scripts
	function diberr_register_scripts(){
		// Get Theme Version
		$version = wp_get_theme()->get('Version');

		wp_enqueue_script('diberr-js-popper', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', array(), $version, true);
	}

	// Add scripts registeration function to wordpress hook
	add_action('wp_enqueue_scripts', 'diberr_register_scripts');

	// Register Widgets
	// function blogtheme_widget_areas(){
	// 	register_sidebar(
	// 		array(
	// 			'before_title' => '',
	// 			'after_title' => '',
	// 			'before_widget' => '',
	// 			'after_widget' => '',
	// 			'name' => 'Footer Area About Us Snippet',
	// 			'id' => 'footer-about',
	// 			'description' => 'Footer Area About Us Snippet',
	// 		),
	// 	);
	// }

	// add_action('widgets_init', 'blogtheme_widget_areas');
?>