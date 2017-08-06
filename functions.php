<?php

function grabjet_setup() {

	add_theme_support('soil-clean-up');
	add_theme_support('soil-disable-asset-versioning');
	add_theme_support('soil-disable-trackbacks');
	//add_theme_support('soil-jquery-cdn');
	add_theme_support('soil-js-to-footer');
	add_theme_support('soil-nav-walker');
	add_theme_support('soil-relative-urls');

	load_theme_textdomain( 'grabjet' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'topnav'    => __( 'Top Menu', 'grabjet' ),
		'footernav' => __( 'Footer Menu', 'grabjet' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

}
add_action( 'after_setup_theme', 'grabjet_setup' );


// Enqueue scripts and styles.
function grabjet_scripts() {
	
	wp_enqueue_style('google-Roboto-font', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700', array(), null );
	wp_enqueue_style('google-Material-font', '//fonts.googleapis.com/icon?family=Material+Icons', array(), null );
	
	
	wp_enqueue_style('font-awesome-min-css', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null );    
    wp_enqueue_style('bootstrap-multiselect-css', get_theme_file_uri( '/css/bootstrap-multiselect.css' ), array(), null );
    wp_enqueue_style('bootstrap-datetimepicker-min-css', get_theme_file_uri( '/css/bootstrap-datetimepicker.min.css' ), array(), null );  
    wp_enqueue_style('bootstrap-min-css', get_theme_file_uri( '/css/bootstrap.min.css' ), array(), null );
	
	wp_enqueue_style( 'html5shiv-min-js', '//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), '3.7.3' );
	wp_style_add_data( 'html5shiv-min-js', 'conditional', 'lt IE 9' );

	wp_enqueue_style( 'respond-min-js', '//oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.4.2' );
	wp_style_add_data( 'respond-min-js', 'conditional', 'lt IE 9' );	
    
	wp_enqueue_style( 'grabjet-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');
	
    wp_enqueue_script('jquery-min-js', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true );
	wp_enqueue_script('moment-with-locales-js', get_theme_file_uri( '/js/moment-with-locales.min.js' ), array(), '2.18.1', true );
	wp_enqueue_script('bootstrap-min-js', get_theme_file_uri( '/js/bootstrap.min.js' ), array(), '3.3.7', true );
	wp_enqueue_script('bootstrap-datetimepicker-min-js', get_theme_file_uri( '/js/bootstrap.datetimepicker.min.js' ), array(), '4.17.47', true );
	wp_enqueue_script('bootstrap-multiselect-js', get_theme_file_uri( '/js/bootstrap.multiselect.js' ), array(), '2.0', true );
	wp_enqueue_script('grab-main-js', get_theme_file_uri( '/js/main.js' ), array(), '1.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'grabjet_scripts' );
