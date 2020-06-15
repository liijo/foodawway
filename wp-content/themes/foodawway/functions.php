<?php
add_action( 'wp_enqueue_scripts', 'porto_child_css', 1001 );

// Load CSS
function porto_child_css() {

	wp_enqueue_script( 'onsenui', get_stylesheet_directory_uri() . '/lib/onsen/js/onsenui.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/lib/jquery-v3.4.1.js', array(), '1.0.0', true );
	wp_enqueue_script( 'cordova', get_stylesheet_directory_uri() . '/cordova.js', array(), '1.0.0', true );
	wp_enqueue_script( 'push', get_stylesheet_directory_uri() . '/push.js', array(), '1.0.0', true );
	wp_enqueue_script( 'validate', get_stylesheet_directory_uri() . '/lib/jquery.validate.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'gmap', 'http://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAmUchhLZDLDqdF9mg9JDodD_FFQVw96JY', array(), '1.0.0', true );
	wp_enqueue_script( 'gmaps', get_stylesheet_directory_uri() . '/lib/gmaps.js?version=1.0.0', array(), '1.0.0', true );
	wp_enqueue_script( 'translate', get_stylesheet_directory_uri() . '/lib/jquery.translate.js?version=1.0.0', array(), '1.0.0', true );
	wp_enqueue_script( 'geocomplete', get_stylesheet_directory_uri() . '/lib/jquery.geocomplete.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'imagesloaded-pkg', get_stylesheet_directory_uri() . '/lib/imagesloaded.pkgd.min.js?version=1.0.0', array(), '1.0.0', true );
	wp_enqueue_script( 'raty', get_stylesheet_directory_uri() . '/lib/raty/jquery.raty.js', array(), '1.0.0', true );
	wp_enqueue_script( 'snazzy', get_stylesheet_directory_uri() . '/lib/snazzy-info-window/snazzy-info-window.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'config', get_stylesheet_directory_uri() . '/js/config.js?version=1.0.0', array(), '1.0.0', true );
	wp_enqueue_script( 'template', get_stylesheet_directory_uri() . '/js/template.js?version=1.0.0', array(), '1.0.0', true );
	wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/js/app.js?version=1.0.0', array(), '1.0.0', true );
	wp_enqueue_script( 'map-wrapper', get_stylesheet_directory_uri() . '/js/map-wrapper.js?version=1.0.0', array(), '1.0.0', true );

	// porto child theme styles
	wp_enqueue_style( 'onsenui', esc_url( get_stylesheet_directory_uri() ) . '/lib/onsen/css/onsenui.min.css' );
	wp_enqueue_style( 'onsen-components', esc_url( get_stylesheet_directory_uri() ) . '/lib/onsen/css/onsen-css-components.min.css' );
	wp_enqueue_style( 'theme', esc_url( get_stylesheet_directory_uri() ) . '/css/theme.css?ver=1.0' );
	wp_enqueue_style( 'desktop', esc_url( get_stylesheet_directory_uri() ) . '/css/desktop.css?ver=1.0' );
	wp_enqueue_style( 'app', esc_url( get_stylesheet_directory_uri() ) . '/css/app.css?ver=1.0' );
	wp_enqueue_style( 'raty', esc_url( get_stylesheet_directory_uri() ) . '/lib/raty/jquery.raty.css' );
	wp_enqueue_style( 'snazzy', esc_url( get_stylesheet_directory_uri() ) . '/lib/snazzy-info-window/snazzy-info-window.min.css' );


}
?>