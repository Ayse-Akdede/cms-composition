<?php
/*
  Template Name: apropos
*/
  get_header();
  wp_nav_menu('Header');
  ?>
  <div class="top-bg">
  <h1><?php the_title(); ?></h1>
  </div>

  <div>
   <?php get_template_part( 'templates/partsapropos/diapo' ); ?>
</div>
<div id="etudarchi">
   <?php get_template_part( 'templates/partsapropos/histoire' ); ?>
</div>
<div id="ngh">
    <?php get_template_part( 'templates/partsapropos/caractere' ); ?>
</div>

<div id="bnr">
<?php get_template_part( 'templates/partsapropos/blockbanner' ); ?>
</div>
<?php get_footer();?>