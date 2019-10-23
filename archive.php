<?php get_header(); ?>

 	<h1>Architecte d'intérieur en action</h1>
	 <div class="content">
		<?php 
			$query = new WP_Query(array('post_type' => 'news',));
				
			if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

		<article class="post">
		<a href="<?php the_permalink(); ?>" class="post__link">
			
			<?php	while ( have_rows('flexible_content') ) : the_row();
				if( get_row_layout() == 'titre' ):
			?>

			
			<h2 class="titre-article"><?php the_sub_field('titre_bloc');?></h2>
		

			<?php
				elseif( get_row_layout() == 'content_image'):    
			?>

			<div class="image-container">
				<img src="<?php echo get_sub_field('img_bloc')['url']; ?>" alt="<?php echo get_sub_field('img_bloc')['title']; ?>" />
			</div>

			<?php
				endif;

				endwhile;
			?>
			
			<p class="post__meta">
				— <?php the_time( get_option( 'date_format' ) ); ?> 
			</p>	
			</a>		
		</article>

		<?php endwhile; endif; ?>


	</div>

	<div class="nav-previous alignleft"><?php echo previous_posts_link( 'Older posts' ); ?></div>
		<div class="nav-next alignright"><?php echo next_posts_link( 'Newer posts' ); ?></div>
<?php get_footer(); ?>