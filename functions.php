<?php
  // Add Theme Styles
  function add_theme_styles(){
    wp_enqueue_style('main-style',get_template_directory_uri().'/css/main.css');
    wp_enqueue_style( 'font-style', get_template_directory_uri(). '/css/all.min.css' );  
  }
  add_action('wp_enqueue_scripts','add_theme_styles');

// Add Theme Scripts
function add_theme_scripts(){
  wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js',array(),false,true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

  // Add Custom Menu
  function register_custom_menu(){
    register_nav_menus(array(
      'header-menu' => 'Header Menu',
      'footer-menu' => 'Footer Menu',
    ));
  }

  add_action('init','register_custom_menu');

  // Add Featured Image Support
  add_theme_support( 'post-thumbnails' );