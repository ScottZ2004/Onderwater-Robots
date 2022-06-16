<?php
function add_energy_scripts() {

    wp_enqueue_style('homestyle', get_template_directory_uri() . '/css/home.css', array(), time());
//    wp_enqueue_style('home', get_template_directory_uri() . '/css/home.css', array(), time());
//    wp_enqueue_style('about-us', get_template_directory_uri() . '/css/about-us.css', array(), time());
//    wp_enqueue_style('events', get_template_directory_uri() . '/css/events.css', array(), time());
//    wp_enqueue_style('movies', get_template_directory_uri() . '/css/movies.css', array(), time());
//    wp_enqueue_script('kunst-script', get_template_directory_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts','add_energy_scripts');


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
?>

