<?php

get_header ();?>

<?php while(have_posts()) {
	the_post(); ?>


<div id="page-container">
<?php the_post_thumbnail( 'blog' );?>


<h1><a href="<?php get_permalink($post->$id );?>"> <?php the_title(); ?></a><h1>
<p> <?php the_content(); ?> </p>


</div>


<?php }
	get_footer();
		?>
