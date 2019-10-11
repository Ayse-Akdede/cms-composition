<?php get_header();
 ?>
  <?php   if( have_posts() ) : while( have_posts() ) : the_post(); ?>
 
    <article class="post">
      

      <h1><?php the_title(); ?></h1>
      

<?php

// check if the flexible content field has rows of data
if( have_rows('flexible_content') ):

     // loop through the rows of data
    while ( have_rows('flexible_content') ) : the_row();

        if( get_row_layout() == 'titre' ):
          ?>
        	<h2><?php the_sub_field('titre_bloc');?></h2>

          <?php

        elseif( get_row_layout() == 'content_intro' ): 

          the_sub_field('content_intro');
          

        elseif( get_row_layout() == 'content_image'):    
          ?>
        <img src="<?php echo get_sub_field('img_bloc')['url']?>" alt="" width="50%">
<?php
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>