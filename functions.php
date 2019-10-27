<?php 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );
<<<<<<< HEAD
                           
// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_action('wp_enqueue_scripts','Load_Template_Scripts');
function Load_Template_Scripts(){
	wp_enqueue_style( 'headerstyle', get_template_directory_uri() . '/assets/css/header.css', array(), '', 'all');
    if ( is_page_template('templates/archi.php')) {
        wp_enqueue_style( 'archistyle', get_template_directory_uri() . '/assets/css/archistyle.css', array(), '', 'all');
        wp_enqueue_script('script-opaslider', get_template_directory_uri().'/assets/js/opaslider.js',array(),'',true);
        wp_enqueue_script('script-archi', get_template_directory_uri().'/assets/archiscript.js',array(),'',true);
    }
    if ( is_page_template('templates/apropos.php')) {
        wp_enqueue_style( 'archistyle', get_template_directory_uri() . '/assets/css/archistyle.css', array(), '', 'all');
        wp_enqueue_script('script-opaslider', get_template_directory_uri().'/assets/js/opaslider.js',array(),'',true);       
        wp_enqueue_script('script-propos', get_template_directory_uri().'/assets/js/apropos.js',array(),'',true);
    }
}
add_theme_support( 'menus' );
=======

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
>>>>>>> contact
