<?php

add_action('wp_enqueue_scripts', 'flatui_js');
add_action('wp_enqueue_scripts', 'flatui_css');

function flatui_css() {
	wp_register_style('flatui-bootstrap.css', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css');
	wp_register_style('flatui-bootstrap-responsive.css', "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css");
	wp_register_style('flatui-main.css', get_stylesheet_directory_uri() . '/css/main.css');
	wp_register_style('flatui-blog.css', get_stylesheet_directory_uri() . '/css/blog.css');
	wp_enqueue_style('flatui-bootstrap.css'); 
	wp_enqueue_style('flatui-bootstrap-responsive.css'); 
	wp_enqueue_style('flatui-main.css'); 
	wp_enqueue_style('flatui-blog.css'); 
}

function flatui_js() {
	wp_enqueue_script('modernizr.js', get_stylesheet_directory_uri() . "/js/vendor/modernizr-2.6.2.min.js", array(), '1.0');
	wp_enqueue_script('main.js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
	wp_enqueue_script('plugins.js', get_stylesheet_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true);
	wp_enqueue_script('customize-twitter-1.1.min.js', get_stylesheet_directory_uri() . '/js/vendor/customize-twitter-1.1.min.js', array(), '1.0', true);
}

