<?php
// Load CSS and JS
add_action( 'wp_enqueue_scripts', 'foodawayLoadAssets', 1001 );

function foodawayLoadAssets() {

	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
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
	wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0.0', true );

	// theme styles
	wp_enqueue_style( 'onsenui', esc_url( get_stylesheet_directory_uri() ) . '/lib/onsen/css/onsenui.min.css' );
	wp_enqueue_style( 'onsen-components', esc_url( get_stylesheet_directory_uri() ) . '/lib/onsen/css/onsen-css-components.min.css' );
	wp_enqueue_style( 'theme', esc_url( get_stylesheet_directory_uri() ) . '/css/theme.css?ver=1.0' );
	wp_enqueue_style( 'desktop', esc_url( get_stylesheet_directory_uri() ) . '/css/desktop.css?ver=1.0' );
	wp_enqueue_style( 'app', esc_url( get_stylesheet_directory_uri() ) . '/css/app.css?ver=1.0' );
	wp_enqueue_style( 'raty', esc_url( get_stylesheet_directory_uri() ) . '/lib/raty/jquery.raty.css' );
	wp_enqueue_style( 'bootstrap', esc_url( get_stylesheet_directory_uri() ) . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main', esc_url( get_stylesheet_uri() ) );

}

// Regiser Menu
add_action( 'after_setup_theme', 'foodawayRegisterNavMenu', 0 );
function foodawayRegisterNavMenu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'foodaway' )
    ) );
}

// Add a sidebar.
add_action( 'widgets_init', 'foodawaySidebars' );
function foodawaySidebars() {
    register_sidebar( 
    	array(
	        'name'          => __( 'Footer Sidebar 1', 'foodaway' ),
	        'id'            => 'footer-1',
	        'description'   => __( 'Widgets in this area will be shown on footer.', 'foodaway' ),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h2 class="widgettitle">',
	        'after_title'   => '</h2>',
	    )
	);
    register_sidebar( 
	    array(
	        'name'          => __( 'Footer Sidebar 2', 'foodaway' ),
	        'id'            => 'footer-2',
	        'description'   => __( 'Widgets in this area will be shown on footer.', 'foodaway' ),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h2 class="widgettitle">',
	        'after_title'   => '</h2>',
	    )
	);
    register_sidebar( 
	    array(
	        'name'          => __( 'Footer Sidebar 3', 'foodaway' ),
	        'id'            => 'footer-3',
	        'description'   => __( 'Widgets in this area will be shown on footer.', 'foodaway' ),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h2 class="widgettitle">',
	        'after_title'   => '</h2>',
	    ) 
	);
}

function foodawayMenuClasses($classes, $item, $args) {
  if($args->theme_location == 'primary_menu') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'foodawayMenuClasses', 1, 3);

function foodawayAddMenuClass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link  " ', $ulclass);
}
add_filter('wp_nav_menu','foodawayAddMenuClass');
?>