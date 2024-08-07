
<?php

/**
 * Global styles
 */

if ( ! function_exists( 'kide_styles' ) ) :
  function kide_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'kide', get_template_directory_uri() . 
      '/assets/css/kide.css', false, '0.3.0', 'all' );
  }
endif;
add_action( 'wp_enqueue_scripts', 'kide_styles' );


/**
 * Global scripts
 */

if ( ! function_exists( 'kide_scripts' ) ) :
  function kide_scripts() {
    wp_enqueue_script( 'kide-script', get_template_directory_uri() . '/assets/js/kide.js', array(), 0.1, true );
  }
endif;
add_action( 'wp_enqueue_scripts', "kide_scripts" );


/**
 * Block styles
 */

if ( ! function_exists( 'kide_block_styles' ) ) :
  function kide_block_styles() {
    add_theme_support( 'wp-block-styles' );
    $styled_blocks = [
      'button',
      'calendar',
      'columns',
      'group',
      'latest-posts',
      'media-text',
      'navigation',
      'query',
      'search',
      'site-logo',
      'table'];
    foreach ( $styled_blocks as $block_name ) {
      $args = array(
        'handle' => "kide-$block_name",
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
add_action( 'after_setup_theme', 'kide_block_styles' );


/**
 * Editor styles
 */

 if (! function_exists( 'kide_editor_styles' ) ) :
  function kide_editor_styles() {
    add_theme_support('editor-styles');
    add_editor_style( 'assets/css/editor.css' );
  }
endif;
add_action( 'after_setup_theme', 'kide_editor_styles' );