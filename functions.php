<?php

function wp_theme() {

  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'wp_theme');


// Navigation Menus
register_nav_menus(array(
    'footer' => __( 'Footer Menu' ),

));
