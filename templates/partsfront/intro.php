<br>

<section class="intro">
		<div class="intro-left">
			<div class="block-top">
				<p>
					<?php 
						$text = get_field('intro_texte_intro', false, false);
						echo $text;
					?>
				</p>
			</div>

			<div class="block-bottom">
				<h2>
					<?php 
						$title = get_field('intro_titre_intro', false, false);
						echo $title;
					?>
				</h2>

				<p><?php the_field('intro_wysiwyg_intro'); ?></p>

				<a class="link-intro" href="<?php the_field('intro_lien_intro')  ?>">
					<p>Le magasin</p>
					<p>&#8594;</p>
				</a>
			</div>
		</div>
		<div class="intro-right">
			<div class="photo">
				<?php if( get_field('intro_image_intro') ): ?>
					<img src="<?php the_field('intro_image_intro'); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</section>