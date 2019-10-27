<?php 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

  // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);

//Add css to project

add_action('wp_enqueue_scripts','Load_Template_Style');
function Load_Template_Style(){
  wp_enqueue_style( 'test', get_template_directory_uri() . '/assets/css/accueil.css', array(), '', 'all');
}
