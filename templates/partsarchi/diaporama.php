<h1>Architecte d'intérieur </h1>

<?php 
    $query = new WP_Query(array('post_type' => 'project',));

    if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 
    ?>
    <article class="post">
    <?php while ( have_rows('flexible_content') ) : the_row();?>

    <h2> <?php the_sub_field('titre_bloc');?></h2>
    
    <?php endwhile;?>
    <a href="<?php the_permalink(); ?>">lien</a>
      <p class="post__meta">Publié le <?php the_time(get_option( 'date_format'));?> </p></article>
    
    <?php endwhile;endif; ?>
<?php wp_reset_postdata();?>