<div id="slider-img">
<?php if( have_rows('teta_ajouter_image') ):
        // loop through the rows of data
        while ( have_rows('teta_ajouter_image') ) : the_row();
        // did value
          ?> 
               <img src="<?php echo get_sub_field('img')['url']?>" alt="">
        
          <?php 
endwhile;endif;?>
  </div>
<h1><?php the_field('teta_titre_t')?></h1>
<h3><?php the_field('teta_sous-titre_t')?></h3>
<p><?php the_field('teta_wysiwyg_t')?></p>
