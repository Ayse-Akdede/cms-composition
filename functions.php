<?php 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );
                           
// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_action('wp_enqueue_scripts','Load_Template_Scripts');
function Load_Template_Scripts(){
    if ( is_page_template('templates/archi.php')) {
        wp_enqueue_style( 'archistyle', get_template_directory_uri() . '/assets/css/archistyle.css', array(), '', 'all');
        wp_enqueue_script('script-opaslider', get_template_directory_uri().'/templates/partsarchi/js/opaslider.js',array(),'',true);
        wp_enqueue_script('script-archi', get_template_directory_uri().'/templates/partsarchi/js/archiscript.js',array(),'',true);
    }
    if ( is_page_template('templates/apropos.php')) {
        wp_enqueue_style( 'archistyle', get_template_directory_uri() . '/assets/css/archistyle.css', array(), '', 'all');
        wp_enqueue_script('script-opaslider', get_template_directory_uri().'/templates/partsarchi/js/opaslider.js',array(),'',true);       
        wp_enqueue_script('script-propos', get_template_directory_uri().'/templates/partsarchi/js/apropos.js',array(),'',true);
    }
     
}
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}