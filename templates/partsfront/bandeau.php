<section class="bandeau">
			<div class="bandeau-left">
				<div class="photo">
					<?php if( get_field('bandeau_image_g') ): ?>
						<img src="<?php the_field('bandeau_image_g'); ?>" />
					<?php endif; ?>
				</div>

				<div class="left-link-block">
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
										<p class="link-bandeau"><?php echo $button['titre-bouton-g']; ?></p>
										<p>&#8594;</p>
									</a>
								</div>
							</div>
					<?php endif; ?>
				</div>
			</div>

			<!-- RIGHT SIDE -->
			<div class="bandeau-right">
				<div class="photo">
					<?php if( get_field('bandeau_image_g') ): ?>
						<img src="<?php the_field('bandeau_image_d'); ?>" />
					<?php endif; ?>
				</div>

				<div class="right-link-block">
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
										<p class="link-bandeau"><?php echo $button['titre-bouton-d']; ?> &#8594;</p>
									</a>
								</div>
							</div>
					<?php endif; ?>
				</div>
			</div>
		</section>