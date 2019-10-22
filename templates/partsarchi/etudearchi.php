    
    <div class="gauche">
    <h1><?php  the_field('etudearchi_titre_e');?></h1>
    <h3><?php  the_field('etudearchi_Sous-Titre_e');?></h3>
    <?php if( have_rows('etudearchi_reptext') ):
        while ( have_rows('etudearchi_reptext') ) : the_row();?>
        <p><?php the_sub_field('text');?></p>
    <?php endwhile;endif;?>
    </div>
    <div class="droite"><?php  the_field('etudearchi_Wysiwyg_e');?></div>
  




