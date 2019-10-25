<?php
/*
  Template Name: Contact
*/
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

    <div class="content">
		<div class="contact">
		<h1><?php the_title(); ?></h1>
			<div class="infos"> 	
				<p> <?php the_field( 'adresse' ); ?> </p>
				<p> <?php the_field( 'email' ); ?> </p>
				<p> <?php the_field( 'telephone' ); ?> </p>
			</div>

			<div class="horaires">
				<?php $horaires = get_field( 'horaires' ); ?> 
				<?php echo $horaires[ 'daystart' ]; ?>
				<?php echo $horaires[ 'dayend' ]; ?> 
				<?php echo $horaires[ 'hourstart' ]; ?>
				<?php echo $horaires[ 'hourend' ]; ?> 
				<?php echo $horaires[ 'dayoff' ]; ?>
			</div>
			<div class="itineraire">
				<?php $geo = get_field( 'geo' ); ?> 
				<?php echo $geo[ 'itineraire' ]; ?> 			
			</div>
			<div class = "map"> 
				<?php echo $geo[ 'map' ]; ?>

			</div>
		</div>

		<div class="form"> <?php echo do_shortcode('[contact-form-7 id="54" title="Contact"]'); ?> </div>




    	<?php the_content(); ?>
    </div>
<?php
	endwhile; endif;
	get_footer();
?>

