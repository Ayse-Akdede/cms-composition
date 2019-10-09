	<?php
	$fields = get_fields();

if( $fields ): ?>
	<h1><?php the_title(); ?></h1>
    <ul>
        <?php foreach( $fields as $name => $value ): ?>
            <li><b><?php echo $name; ?></b> <?php print_r($value); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>


<?php
	endwhile; endif;?>