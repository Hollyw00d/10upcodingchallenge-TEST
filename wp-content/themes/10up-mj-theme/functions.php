<?php
// Add Custom Menu
add_theme_support( 'menus' );

//Add post thumbnails to theme
add_theme_support( 'post-thumbnails' );

// Limit works in the except to 30
function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Add JS, including jQuery
function local_js() {
  wp_enqueue_script( 'local_js', get_template_directory_uri() . '/js/local.min.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'local_js' );