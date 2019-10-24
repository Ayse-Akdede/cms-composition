
<?php if(get_field("diaporama") ):?>
<div id="slider-imgs">
     <?php  while ( have_rows('diaporama_images') ) : the_row();?> 
         <img src="<?php echo get_sub_field('img')['url']?>">
     <?php endwhile;?>
     </div>
        <div>
          <button class="btn-carou" id="next">-&gt;</button>
          <button class="btn-carou" id="previous">&lt;-</button>
        </div>
<?php endif;?>
