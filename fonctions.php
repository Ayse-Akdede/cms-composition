<?php 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

  // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post');

function capitaine_register_post_types() {
	
  // CPT Portfolio
  $labels = array(
      'name' => 'Portfolio',
      'all_items' => 'Tous les projets',  // affiché dans le sous menu
      'singular_name' => 'Projet',
      'add_new_item' => 'Ajouter un projet',
      'edit_item' => 'Modifier le projet',
      'menu_name' => 'Portfolio'
  );

$args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor','thumbnail' ),
      'menu_position' => 5, 
      'menu_icon' => 'dashicons-admin-customizer',
);

register_post_type( 'porfolio', $args );
}
add_action( 'init', 'capitaine_register_post_types' ); 
  
  