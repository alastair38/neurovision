<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

	// Removes WP version of jQuery
	wp_deregister_script('jquery');

	// Load jQuery files in header - load in header to avoid issues with plugins
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/dist/jquery.min.js', array(), '', false );

    // Load What-Input files in footer
    //wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );

    // Adding Materialize scripts file in the footer
  wp_enqueue_script( 'materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js', array( 'jquery' ), '', true );

    wp_enqueue_script( 'slick-js', 'http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js', array('jquery'), '', true );

    wp_enqueue_script( 'cookie-js', 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js', array(), '', true );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

    // Register main stylesheet

    // Register material icons stylesheet
    wp_enqueue_style( 'material-icons', 'http://fonts.googleapis.com/icon?family=Material+Icons', array(), '', 'all' );

    // Register main stylesheet
    wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css', array(), '', 'all' );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/materialize.css', array(), '', 'all' );

    // Deregister admin stylesheet so that it doesn't load on the front-end form

    wp_deregister_style( 'wp-admin' );


    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
