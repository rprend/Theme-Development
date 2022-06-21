<?php

// Setup

// Includes

if ( ! function_exists( 'udemy_styles' ) ) :

function udemy_styles() {
  $uri              = get_theme_file_uri();

  wp_register_style( 'udemy_tufte_css', $uri . '/assets/tufte.css', []);
  wp_enqueue_style( 'udemy_tufte_css' );
}

endif;


// Hooks
add_action( 'wp_enqueue_scripts', 'udemy_styles' );

// Shortcuts
