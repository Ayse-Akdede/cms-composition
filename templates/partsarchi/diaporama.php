
<?php 
    $query = new WP_Query(array('post_type' => 'project',));
?>
<div id="proj-container">
<?php 
    if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 
    ?>

    <article class="proj">
    <?php  while ( have_rows('flexible_content') ) : the_row();?>

<?php    if( get_row_layout() == 'content_image' ):?>

<img class="image" src="<?php echo get_sub_field('img_bloc')['url'];  ?>">

<?php    elseif( get_row_layout() == 'titre' ):?>
<a class="link-a" href=" <?php the_permalink(); ?>">
    <p class="titre-left"> <?php the_sub_field('titre_bloc') ?> </p>
    <p>voir projet -&gt;</p>
</a>

<?php endif; endwhile;?>
</article>
    <?php endwhile;endif; ?>
    </div>
    <div>
        <button class="btn-carou" id="next">-&gt;</button>
        <button class="btn-carou" id="previous">&lt;-</button>
    </div>
   
<?php wp_reset_postdata();?>