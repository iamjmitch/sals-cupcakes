<?php


/*
 * Template Name: services
 */

get_header ();?>

<?php while(have_posts()) {
	the_post(); ?>


<div id="page-container">
	<div id=page-feature>
<img src="<?php echo the_post_thumbnail_url( 'full' );?>">
</div>

<h1><?php the_title(); ?></h1>

<div id="content">
<p> <?php the_content(); ?> </p>
</div>



</div>
<?php }
	get_footer();
		?>
