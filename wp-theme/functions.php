<?php

function wp_theme() {

  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'wp_theme');

// theme setup
// Navigation Menus
register_nav_menus(array(
    'footer' => __( 'Footer Menu' ),
));

// Add theme image support
add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 180, 120, true);



function wp_post_setup() {

// Add post format support

add_theme_support('post-formats', array('aside', 'gallery','link'));

}

add_action('set_up_theme', 'wp_post_setup');
