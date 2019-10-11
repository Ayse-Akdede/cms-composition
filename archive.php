<?php get_header(); ?>

 	<h1>Architecte d'intérieur en action</h1>
	
	<?php 
		$query = new WP_Query(array('post_type' => 'news',));
			
		if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	
		<article class="post">
		
		
	<?php	while ( have_rows('flexible_content') ) : the_row();

if( get_row_layout() == 'titre' ):
  ?>

	<a href="<?php the_permalink(); ?>" class="post__link">
		<h2><?php the_sub_field('titre_bloc');?></h2>
	</a>

  <?php

elseif( get_row_layout() == 'content_image'):    
  ?>
<img src="<?php echo get_sub_field('img_bloc')['url']?>" alt="" width="20%">
<?php
endif;

endwhile;

		?>
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
            </p>	
			  
		</article>

	<?php endwhile; endif; ?>
<?php get_footer(); ?>