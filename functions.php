<?php

function lifeofmonty_files() {
    // load as many css and javascript files

  wp_enqueue_style('Luckiest Guy-font', '//fonts.googleapis.com/css?family=Luckiest+Guy&display=swap');
  wp_enqueue_style('Roboto-font', '//fonts.googleapis.com/css?family=Roboto:400&display=swap');
  wp_enqueue_style('lifeofmonty_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'lifeofmonty_files');

function lifeofmonty_features() {
  //header
  add_theme_support('title-tag');
  add_theme_support( 'custom-logo');

  //nav menu
  function register_my_menus() {
    //registers the menus
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

  //homepage
    $args = array(
      'flex-width'    => true,
      'width'         => 980,
      'flex-height'   => true,
      'height'        => 567,
      'default-image' => get_template_directory_uri() . './resources/images/banner-1.png',
    );
  add_theme_support( 'custom-header', $args );

  //page
  add_theme_support( 'post-thumbnails' );  
}

 add_action('after_setup_theme', 'lifeofmonty_features');
?>

