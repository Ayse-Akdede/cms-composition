<?php
/*
  Template Name: Archi
*/

  get_header();
  ?>
<div id="bgblack"></div>
  <div id="slider-box">
  <?php get_template_part( 'templates/partsarchi/diaporama' ); ?>
  </div>
  <div id="etudarchi">
  <?php get_template_part( 'templates/partsarchi/etudearchi' ); ?>
    </div>
<div id="ngh">
   <?php get_template_part( 'templates/partsarchi/nghisteph' ); ?>
</div>

   <?php get_template_part( 'templates/partsarchi/tissusetarti' ); ?>

	<?php get_footer();?>