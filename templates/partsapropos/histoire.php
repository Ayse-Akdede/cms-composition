<div class="gauche">
    <h1><?php  the_field('histoire_titre');?></h1>
    <h3><?php  the_field('histoire_sous-titre');?></h3>
    <?php  the_field('histoire_wysiwyg');?>
</div>
<div class="droite">
    <?php if( have_rows('histoire_liste_annee') ):
        while ( have_rows('histoire_liste_annee') ) : the_row();?>
        <p><?php the_sub_field('annee');?></p>
        <p><?php the_sub_field('description');?></p>
    <?php endwhile;endif;?>
</div>