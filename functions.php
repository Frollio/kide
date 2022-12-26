<?php

/**
 * Supports
 */

if ( ! function_exists( 'kide_setup' ) ) :
  function kide_setup() {
    add_theme_support( 'wp-block-styles' );
  }
endif;
add_action( 'after_setup_theme', 'kide_setup' );

/**
 * Editor styles
 */

if (! function_exists( 'kide_editor_styles' ) ) :
  function kide_editor_styles() {
    add_editor_style(
      array(
        'assets/css/blocks/column.css',
        '.assets/css/blocks/group.css',
        '.assets/css/blocks/navigation.css',
        '.assets/css/blocks/search.css'
      )
    );
  }
endif;
add_action( 'after_setup_theme', 'kide_editor_styles' );

/**
 * Global styles and scripts
 */

if ( ! function_exists( 'kide_styles' ) ) :
  function kide_styles() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . 
      '/assets/css/normalize.css', false, '8.0.1', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  }
endif;
add_action( 'wp_enqueue_scripts', 'kide_styles' );

/**
 * Block styles
 */

if ( ! function_exists( 'block_styles' ) ) :
  function block_styles() {
    $styled_blocks = ['column','group','navigation','search'];
    foreach ( $styled_blocks as $block_name ) {
      $args = array(
        'handle' => "block-styles-$block_name",
        'src' => get_theme_file_uri(
          "assets/css/blocks/$block_name.css"
        ),
        $args['path'] = get_theme_file_path(
          "assets/css/blocks/$block_name.css"
        ),
      );
      wp_enqueue_block_style( "core/$block_name", $args );
    }
  }
endif;
add_action( 'after_setup_theme', 'block_styles' );