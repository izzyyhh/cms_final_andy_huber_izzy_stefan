<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// enqueue scripts and styles
function enqueue_scripts_and_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri().'/main.fc78e386a1220692dc6f.css?be3354625c1f83251828', array(), null, false);
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/main.js?be3354625c1f83251828', array(), null, false );
}

//menus
function register_my_menus() {
    register_nav_menus(
      array(
        'main-navigation' => __( 'Header Menu' ),
        'footer-navigation' => __( 'Footer Menu' )
       )
     );
}

// enable dynamic title tags
function add_title_tag() {
    add_theme_support( 'title-tag' );
}

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

function add_to_twig($twig){
    $twig->addFunction(new Timber\Twig_Function('get_post_custom_values', 'get_post_custom_values'));
    
    return $twig;
}

add_filter('timber/twig', 'add_to_twig');
add_filter('upload_mimes', 'cc_mime_types');
add_action( 'after_setup_theme', 'add_title_tag');
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );
add_action('init', 'register_my_menus');
add_theme_support( 'post-thumbnails' );
add_filter( 'timber/context', 'add_to_context' );

//for timber
function add_to_context( $context ) {
    //making menu globallz available
    $context['menu'] = new \Timber\Menu( 'Header Menu' );
    $context['socials'] = new \Timber\Menu( 'Footer Socials' );
    $context['pages_footer'] = new \Timber\Menu( 'Footer Pages' );

    return $context;
}

$timber = new \Timber\Timber();
