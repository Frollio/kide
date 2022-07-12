<?php

if ( ! function_exists( 'kide_setup' ) ) :
  function kide_setup() {
    add_theme_support( 'wp-block-styles' );
    add_editor_style( 'editor-style.css' );
  }
endif;
add_action( 'after_setup_theme', 'kide_setup' );