<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'bootstrap-styles', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), $the_theme->get( 'Version' ) );    
    wp_enqueue_style( 'font-awesome-styles', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array(), $the_theme->get( 'Version' ) );    
    wp_enqueue_style( 'animate-styles', get_stylesheet_directory_uri() . '/css/animate.min.css', array(), $the_theme->get( 'Version' ) );    
    wp_enqueue_style( 'owl-caruosel-styles', get_stylesheet_directory_uri() . '/css/owl.carousel.css', array(), $the_theme->get( 'Version' ) );    
    wp_enqueue_style( 'owl.transitions-styles', get_stylesheet_directory_uri() . '/css/owl.transitions.css', array(), $the_theme->get( 'Version' ) );    
    wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/css/main.css', array(), $the_theme->get( 'Version' ) );  
    wp_enqueue_style( 'styles-css', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );


    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap-scripts', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), false);
    wp_enqueue_script( 'scrolling-nav-scripts', get_stylesheet_directory_uri() . '/js/scrolling-nav.js', array(), false);
    wp_enqueue_script( 'popper-scripts', get_stylesheet_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'google-scripts', 'http://maps.google.com/maps/api/js?sensor=true', array(), false);
    wp_enqueue_script( 'owl-carousel-scripts', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array(), false);
    wp_enqueue_script( 'mousescroll-scripts', get_stylesheet_directory_uri() . '/js/mousescroll.js', array(), false);
    wp_enqueue_script( 'smoothscroll-scripts', get_stylesheet_directory_uri() . '/js/smoothscroll.js', array(), false);
    wp_enqueue_script( 'prettyPhoto-scripts', get_stylesheet_directory_uri() . '/js/jquery.prettyPhoto.js', array(), false);
    wp_enqueue_script( 'isotope-scripts', get_stylesheet_directory_uri() . '/js/jquery.isotope.min.js', array(), false);
    wp_enqueue_script( 'inview-scripts', get_stylesheet_directory_uri() . '/js/jquery.inview.min.js', array(), false);
    wp_enqueue_script( 'wow-scripts', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), false);    
    wp_enqueue_script( 'main-scripts', get_stylesheet_directory_uri() . '/js/main.js', array(), false);    
	
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
