
<?php 
    $query = new WP_Query(array('post_type' => 'project',));

    if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 
    ?>

    <article class="proj">
    <?php  while ( have_rows('flexible_content') ) : the_row();?>

<?php    if( get_row_layout() == 'content_image' ):?>
<img class="image" src="<?php the_sub_field('img_bloc'); ?>">

<?php    elseif( get_row_layout() == 'titre' ):?>
<a class="link-a" href=" <?php the_permalink(); ?>">
    <p class="titre-left"> <?php the_sub_field('titre_bloc') ?> </p>
    <p>voir projet -&gt;</p>
</a>

<?php endif; endwhile;?>
</article>
    <?php endwhile;endif; ?>
        <button id="next">-&gt;</button>
        <button id="previous">&lt;-</button>
   
<?php wp_reset_postdata();?>