<?php
/*
  Template Name: Archi
*/
  get_header();
  ?>
  <h1><?php the_title(); ?></h1>
  <?php 
    get_template_part( 'templates/partsarchi/etudearchi' ); 
    get_template_part( 'templates/partsarchi/nghisteph' ); 
    get_template_part( 'templates/partsarchi/tissusetarti' ); 
    ?>
	<?php get_footer();
?>