<?php get_header(); var_dump(get_fields()); ?>

	<?php 
	/* var_dump(get_fields()); */ 

	?>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>


		<?php 
    		get_template_part( 'templates/partsfront/bandeau' ); 
    		get_template_part( 'templates/partsfront/intro' ); 
			get_template_part( 'templates/partsfront/milieu' ); 
			get_template_part( 'templates/partsfront/tissus' ); 
    	?>


    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>