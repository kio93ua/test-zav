<?php
function podlacross_setup() {
    load_theme_textdomain( 'pod-lacross', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'custom-logo' );

    
}
add_action( 'after_setup_theme', 'podlacross_setup' );

add_action( 'wp_head', function() {
	echo '<link rel="preconnect" href="https://fonts.gstatic.com">';
}, 5 );

function register_theme_custom_fields() {
  register_post_meta(
    'page',
    'copyright',
    array(
      'show_in_rest' => true,
      'single' => true,
      'type' => 'string',
    )
  );
}

add_action('init', 'register_theme_custom_fields');

function register_custom_post_type() {
    register_post_type('custom_post', array(
        'labels' => array(
            'name' => 'Custom Posts',
            'singular_name' => 'Custom Post',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'register_custom_post_type');

// Регистрация кастомной таксономии
function register_custom_taxonomy() {
    register_taxonomy('custom_category', 'custom_post', array(
        'labels' => array(
            'name' => 'Custom Categories',
            'singular_name' => 'Custom Category',
        ),
        'hierarchical' => true,
        'public' => true,
    ));
}
add_action('init', 'register_custom_taxonomy');

function lacross_scripts() {
 
	wp_enqueue_style( 'lacross-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', array(), null );
	wp_enqueue_style( 'lacross-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' );
	
  wp_enqueue_style( 'lacross-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );

	wp_enqueue_style( 'lacross-custom', get_template_directory_uri() . '/assets/css/custom.css' );
  
	wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js' );
  wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js' );
  
	wp_enqueue_script( 'lacross-main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'lacross_scripts' );

require_once get_template_directory() . '/inc/class-lacross-menu-categories.php';
require_once get_template_directory() . '/inc/class-lacross-menu-navbar.php';
require_once get_template_directory() . '/inc/cpt.php';

function lacross_debug( $data ) {
	echo '<pre>' . print_r( $data, 1 ) . '</pre>';
}

