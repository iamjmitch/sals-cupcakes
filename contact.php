

<?php
/*
 * Template Name: contact
 */?>

 <?php

get_header ();?>

<?php while(have_posts()) {
	the_post(); ?>


<div id="page-container">
	

<h1><?php the_title(); ?></h1>

 <?php the_content(); ?> 
 



</div>

<?php }
	get_footer();
		?>

