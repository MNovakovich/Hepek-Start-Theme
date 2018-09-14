<?php 


function theme_register_scripts() {

    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style('hepek-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/vendor/css/bootstrap.min.css');

    wp_enqueue_script('vue-js', get_template_directory_uri() . '/vendor/js/vue.js', array(), '', false);
    wp_enqueue_script('hepek-js', get_template_directory_uri() . '/js/main.js', array(), '', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendor/js/bootsrap.min.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );