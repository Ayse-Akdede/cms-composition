<section class="tissus">

    <div class="tissus-left">
		<?php if( get_field('tissus_image_tissus') ): ?>
			<img src="<?php the_field('tissus_image_tissus'); ?>" />
		<?php endif; ?>
	</div>

    <div class="tissus-right">
        <h2><?php  the_field('tissus_titre_tissus');?></h2>

        <p><?php the_field('tissus_wysiwyg_tissus'); ?></p>

        <a class="link-tissus" href="<?php the_field('tissus_llien_tissus')  ?>">
                <p>Tissus et habillage maison &#8594;</p>
        </a>
    </div>
</section>