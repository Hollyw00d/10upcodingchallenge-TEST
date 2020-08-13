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