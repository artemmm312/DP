<?php

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'style.min', get_template_directory_uri() . '/app/css/style.min.css');

  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.js', 'v3.6.0', true);
  
	wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'main.min', get_template_directory_uri() . '/app/js/main.min.js', array('jquery'), 'null ', true );
  wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/app/js/slick.min.js', array('jquery'), 'null ', true );
});

/* add_action( 'wp_enqueue_scripts', function () {
  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/node_modules/jquery/dist/jquery.js');
  
	wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'main.min', get_template_directory_uri() . '/assets/app/js/main.min.js', array('jquery'), 'null ', true );
}); */

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>