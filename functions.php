<?php 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

  // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);

 

  function Load_Template_Scripts(){if ( is_page_template('page-contact.php')) {
    wp_enqueue_style( 'contactstyle', get_template_directory_uri() . '/page-contact.css', array(), '', 'all');
    wp_enqueue_script('script-contact', get_template_directory_uri().'/page-contact.js',array(),'',true);
    }}

    add_action('wp_enqueue_scripts','Load_Template_Scripts');
  
  function your_prefix_render_hfe_header() {
	
    if ( function_exists( 'hfe_render_header' ) ) {
      hfe_render_header();
    }
  
  }
  
  add_action( 'astra_header', 'your_prefix_render_hfe_header' );

  function your_prefix_render_hfe_footer() {
	
    if ( function_exists( 'hfe_render_footer' ) ) {
      hfe_render_footer();
    }
  
  }
  
  add_action( 'astra_footer', 'your_prefix_render_hfe_footer' );


  function your_prefix_header_footer_elementor_support() {
    add_theme_support( 'header-footer-elementor' );
  }
  
  add_action( 'after_setup_theme', 'your_prefix_header_footer_elementor_support' );


  add_theme_support( 'menus' );
