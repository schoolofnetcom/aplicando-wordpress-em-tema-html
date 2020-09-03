<?php

  define('SONDIR', get_template_directory_uri());
  define('SONINC', get_template_directory() . '/inc');

  show_admin_bar(false);

  // wp_enqueue_style('style', get_stylesheet_uri());
  // wp_enqueue_style('sonchat-style', SONDIR . '/css/theme.min.css');

  // wp_enqueue_script( 'sonchat-script', sprintf("%s/js/theme.min.js", SONDIR), $deps = [], '', false);

  function son_load_files_prod() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('sonchat-style', SONDIR . '/css/theme.min.css');
  
    // wp_enqueue_script( 'sonchat-script', sprintf("%s/js/theme.min.js", SONDIR), $deps = [], '', false);
    wp_enqueue_script( 'sonchat-script-font', 'https://kit.fontawesome.com/f6df2dadcb.js', $deps = [], '', false);
  }

  add_action('wp_enqueue_scripts', 'son_load_files_prod');

  include_once(SONINC . '/functions.php');


  if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus( [
      'main' => 'Principal',
      'footer' => 'Rodapé',
    ]);
  }

  add_theme_support('post-thumbnails');
  