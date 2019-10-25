<div class="gauche">
    <h1><?php  the_field('histoire_titre');?></h1>
    <h3><?php  the_field('histoire_sous-titre');?></h3>
    <?php  the_field('histoire_wysiwyg');?>
</div>
<div class="droite">
    <?php if( have_rows('histoire_liste_annee') ):?>
    <ul>
       <?php while ( have_rows('histoire_liste_annee') ) : the_row();?>
            <li>
               <span> <?php echo get_sub_field('annee');?></span> 
               <div class="trait">
                   
               </div>
               <p class="description"><?php echo get_sub_field('description');?></p>
            </li>
    <?php endwhile;?>
    </ul>
<?php endif;?>
</div>