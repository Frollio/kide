<?php

if ( ! function_exists( 'kide_setup' ) ) :

  function kide_setup() {
    add_theme_support( 'wp-block-styles' );
    add_editor_style( 'style.css' );
  }

endif;

add_action( 'after_setup_theme', 'kide_setup' );

if ( ! function_exists( 'kide_styles' ) ) :

  function kide_styles() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . 
      '/assets/css/normalize.css', false, '8.0.1', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  }
endif;

add_action( 'wp_enqueue_scripts', 'kide_styles' );