<?php
/*
  Template Name: apropos
*/
  get_header();
  ?>
  <div class="top-bg">
  <h1><?php the_title(); ?></h1>
  </div>

  <div>
   <?php get_template_part( 'templates/partsapropos/diapo' ); ?>
</div>
<div id="ngh">
   <?php get_template_part( 'templates/partsapropos/histoire' ); ?>
</div>
<div>
    <?php get_template_part( 'templates/partsapropos/caractere' ); ?>
</div>

<?php get_footer();?>