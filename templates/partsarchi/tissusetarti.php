<div id="slider-img">
<?php if( have_rows('teta_ajouter_image') ):
        while ( have_rows('teta_ajouter_image') ) : the_row();?> 
         <img src="<?php echo get_sub_field('img')['url']?>" alt="<?php the_sub_field('titre_t')?>">
         
         <?php endwhile;?>
        <div id="btn-slide-img">
          <button class="btn-carou" id="next-img">-&gt;</button>
          <button class="btn-carou" id="previous-img">&lt;-</button>
        </div>
<?php endif;?>
   
</div>

<div id="flex-wis">
  <h2><?php the_field('teta_titre_t')?></h2>
  <h4><?php the_field('teta_sous-titre_t')?></h4>
  <div id="wis-col"><?php the_field('teta_wysiwyg_t')?></div>
</div>

<div id="block-banner" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/Blog-2.jpg);">
  <div id="content">
    <a href="<?php echo site_url() ?>/index.php/contact">
      <h2>Je souhaite connaître les conditions</h2>
      <p>Contact</p>
    </a>
    
  </div>
</div>