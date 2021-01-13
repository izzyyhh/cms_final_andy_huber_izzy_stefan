<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// enqueue scripts and styles
function enqueue_scripts_and_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri().'/main.19a1f85881e0d3ad8fb7.css?ed184d036626d0654439', array(), null, false);
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/main.js?ed184d036626d0654439', array(), null, false );
}

// enable dynamic title tags
function add_title_tag() {
    add_theme_support( 'title-tag' );
}

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
add_action( 'after_setup_theme', 'add_title_tag');
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );
add_theme_support( 'post-thumbnails' );

//for timber
$timber = new \Timber\Timber();