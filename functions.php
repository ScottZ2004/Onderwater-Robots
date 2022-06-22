<?php
function aruna_scripts()
{

  wp_enqueue_style('homestyle', get_template_directory_uri() . '/css/home.css', array(), time());
  wp_enqueue_style('productstyle', get_template_directory_uri() . '/css/product.css', array(), time());
  //    wp_enqueue_style('home', get_template_directory_uri() . '/css/home.css', array(), time());
  //    wp_enqueue_style('about-us', get_template_directory_uri() . '/css/about-us.css', array(), time());
  //    wp_enqueue_style('events', get_template_directory_uri() . '/css/events.css', array(), time());
  //    wp_enqueue_style('movies', get_template_directory_uri() . '/css/movies.css', array(), time());
  //    wp_enqueue_script('kunst-script', get_template_directory_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts', 'aruna_scripts');


function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer menu'),
      'extra-menu' => __('Extra Menu')
    )
  );
}
add_action('init', 'register_my_menus');

function register_widget_areas()
{

  register_sidebar(array(
    'name'          => 'Titel footer',
    'id'            => 'footer_area_one',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="footer-text-one">',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => 'Navbar footer',
    'id'            => 'footer_area_two',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => 'Social links',
    'id'            => 'footer_area_three',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-three">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => 'Lange streep',
    'id'            => 'footer_area_four',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-four">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => 'Made by ""',
    'id'            => 'footer_area_five',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-five">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
}

add_action('widgets_init', 'register_widget_areas');
