<?php 
/**
*vrroom.nl functions and definitions
*
*@package vrroom.nl 
*@since vrroom.nl
*/

/* add styles*/
function add_theme_styles () {
	wp_enqueue_style ( 'main', get_template_directory_uri () . '/css/main.css') ;
	wp_enqueue_style ( 'apps', get_template_directory_uri () . '/css/apps.css') ;
	wp_enqueue_style ( 'Lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700') ;
	wp_enqueue_style ( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300') ;
}
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );

/* add js*/
function add_theme_scripts () {
	/* laad in de header voor SVG*/
	wp_enqueue_script ( 'header-js', get_template_directory_uri() . '/js/header.js', array ('jquery'), false, false ) ;
	
	/* laad in de footer*/
	wp_enqueue_script ( 'body-js', get_template_directory_uri() . '/js/body.js', array ('jquery'), false, true ) ;

	wp_enqueue_script ( 'functionCallApps-js', get_template_directory_uri() . '/js/functionCallApps.js', array ('jquery'), false, true ) ;
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/* add bootstrap navwalker*/
// Register Custom Navigation Walker

// require_once('wp_bootstrap_navwalker.php');
// 	register_nav_menus( array(
//     	'primary' => __( 'Primary Menu', 'THEMENAME' ),
// 	) );

function register_menu() {
  register_nav_menu('primary-menu', __('vrroom'));
}
add_action('init', 'register_menu');

/* add customPostype*/
// Register customPostype
function create_post_type() {
	$labels = array(
    'name'               => _x( 'Experiences' ),
    'singular_name'      => _x( 'Experiences' ),
    'menu_name'          => 'Experiences'
  );

	$args = array(
	'labels'        => $labels,
    'public'        => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,	
  	);


	register_post_type( 'experiences', $args );


}

add_action( 'init', 'create_post_type' );

/* add customPostypeCategorie*/
// Register customPostypeCategorie
function my_taxonomies_product() {
  $labels = array(
    'name'              => _x( 'Categories' ),
    'singular_name'     => _x( 'Category' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'experience_category', 'experiences', $args );
}

add_action( 'init', 'my_taxonomies_product', 0 );

add_theme_support( 'post-thumbnails' );

/* add customPostype*/
// Register customPostype
function create_post_type2() {
	$labels = array(
    'name'               => _x( 'Evenementen' ),
    'singular_name'      => _x( 'Evenementen' ),
    'menu_name'          => 'Evenementen'
  );

	$args = array(
	'labels'        => $labels,
    'public'        => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,	
  	);


	register_post_type( 'evenementen', $args );


}

add_action( 'init', 'create_post_type2' ); 


?>