<?php get_header();?>
<section id="single-blog-page">
  <?php   if( have_posts() ) : while( have_posts() ) : the_post();?>
    <div class="top-container">
      <div class="top-top">
        <div class="top-top-top">
          <a href="javascript: history.back()"><i class="fa fa-long-arrow-left"></i></i>Retour</a>
          <p class="post__meta date">
              <?php the_time( get_option( 'date_format' ) ); ?> 
           </p>
        </div>
      </div>
      <div class="title">
        <h1><?php the_title(); ?></h1>
      </div>


      <div class="post__content">
        <?php the_content(); ?>
    </article>
    <?php var_dump(the_field('maps')); ?>
  <?php endwhile; endif; ?>
    </div>
    <div class="content">
      <article class="post">
        
        <?php

          // check if the flexible content field has rows of data
        if( have_rows('flexible_content') ):

              // loop through the rows of data
        while ( have_rows('flexible_content') ) : the_row();

        if( get_row_layout() == 'titre' ):?>
          <h2><?php the_sub_field('titre_bloc');?></h2>

          <?php

        elseif( get_row_layout() == 'content_intro' ): 

          the_sub_field('content_intro');
                    

        elseif( get_row_layout() == 'content_image'):?>
          <img src="<?php echo get_sub_field('img_bloc')['url']?>" alt="" >
        <?php endif; endwhile; else : endif;?>

      </article>
      <a href="javascript: history.back()"><i class="fa fa-long-arrow-left"></i></i>Voir les autres artciles</a>
    </div>

</section>
<?php get_footer(); ?>