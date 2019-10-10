<?php get_header(); ?>

	<?php 
	var_dump(get_fields());

	?>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>


		<section class="bandeau">
			<div class="bandeau-left">
				<?php if( get_field('bandeau_image_g') ): ?>
					<img src="<?php the_field('bandeau_image_g'); ?>" />
				<?php endif; ?>

				<h2>
					<?php 
						$titre = get_field('bandeau_titre_g', false, false);
						echo $titre;
					?>
				</h2>
		

				<?php	
					$hover = get_field('bandeau_survol_g');	
					
					if( $hover ): ?>
						<div id="hover">
							<div class="content-hover">
								<h3><?php echo $hover['titre-g']; ?></h3>
								<p><?php echo $hover['texte_g']; ?></p>
							</div>
						</div>
				<?php endif; ?>


				<?php
					$button = get_field('bandeau_bouton_g');	
					if( $button ): ?>
						<div id="button-left">
							<div class="content-button">
								<a class="button-left-content" href="<?php echo $button; ?>">
									<h3><?php echo $button['titre-bouton-g']; ?> &#8594;</h3>
								</a>
							</div>
						</div>
				<?php endif; ?>
			</div>

			<!-- RIGHT SIDE -->
			<div class="bandeau-right">
				<?php if( get_field('bandeau_image_g') ): ?>
					<img src="<?php the_field('bandeau_image_d'); ?>" />
				<?php endif; ?>

				<h2>
					<?php 
						$titre = get_field('bandeau_titre_d', false, false);
						echo $titre;
					?>
				</h2>

				<!-- right hover--> 

				<?php	
					$hover = get_field('bandeau_survol_d');	
					
					if( $hover ): ?>
						<div id="hover">
							<div class="content-hover">
								<h3><?php echo $hover['titre-d']; ?></h3>
								<p><?php echo $hover['texte_d']; ?></p>
							</div>
						</div>
				<?php endif; ?>

				<!-- right button -->

				<?php
					$button = get_field('bandeau_bouton_d');	
					if( $button ): ?>
						<div id="button-right">
							<div class="content-button">
								<a class="button-right-content" href="<?php echo $button; ?>">
									<h3><?php echo $button['titre-bouton-d']; ?> &#8594;</h3>
								</a>
							</div>
						</div>
				<?php endif; ?>
			</div>
		</section>

		<section class="intro">

			<p>
				<?php 
					$text = get_field('intro_texte_intro', false, false);
					echo $text;
				?>
			</p>

			<h2>
				<?php 
					$title = get_field('intro_titre_intro', false, false);
					echo $title;
				?>
			</h2>

			<p><?php the_field('intro_wysiwyg_intro'); ?></p>

			<a class="link_intro" href="<?php the_field('intro_lien_intro')  ?>">
				<p>Le magasin</p>
			</a>
		
		</section>

		<section class="milieu">
		
		</section>

		<section class="tissus">
		
		</section>

    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>