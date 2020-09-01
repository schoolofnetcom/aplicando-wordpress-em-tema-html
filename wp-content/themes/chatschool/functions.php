<?php

  define('SONDIR', get_template_directory_uri());

  show_admin_bar(false);

  // wp_enqueue_style('style', get_stylesheet_uri());
  // wp_enqueue_style('sonchat-style', SONDIR . '/css/theme.min.css');

  // wp_enqueue_script( 'sonchat-script', sprintf("%s/js/theme.min.js", SONDIR), $deps = [], '', false);

  function son_load_files_prod() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('sonchat-style', SONDIR . '/css/theme.min.css');
  
    // wp_enqueue_script( 'sonchat-script', sprintf("%s/js/theme.min.js", SONDIR), $deps = [], '', false);
  }

  add_action('wp_enqueue_scripts', 'son_load_files_prod');