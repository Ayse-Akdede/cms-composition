<h1>Architecte d'intérieur </h1>

<?php 
    $query = new WP_Query(array('post_type' => 'project',));

    if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 
    	echo '<article class="post">';
    while ( have_rows('flexible_content') ) : the_row();
	if( get_row_layout() == 'titre')
		echo 'test';



elseif( get_row_layout() == 'content_image')
echo '<img src="'.echo get_sub_field('img_bloc')['url'].'".alt="" width="20%">';

endif;endwhile;

       echo '<p class="post__meta">
            Publié le'.the_time(get_option( 'date_format'));
        .'</p></article>'

 endwhile; endif; ?>
