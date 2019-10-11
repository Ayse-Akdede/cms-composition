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