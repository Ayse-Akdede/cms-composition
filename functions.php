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
    if ( is_page_template('templates/archi.php') ) {
        wp_enqueue_style( 'archistyle', get_template_directory_uri() . '/assets/css/archistyle.css', array(), '', 'all');
        wp_enqueue_script('script-archi', get_template_directory_uri().'/templates/partsarchi/js/archiscript.js',array('jquery'),'',true);
    } 
}