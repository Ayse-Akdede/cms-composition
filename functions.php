

<?php 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
  // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);
  
  add_action('wp_enqueue_scripts','Load_Template_Scripts');

function Load_Template_Scripts(){
  wp_enqueue_style( 'test', get_template_directory_uri() . '/assets/css/blog-style.css', array(), '', 'all');

} 