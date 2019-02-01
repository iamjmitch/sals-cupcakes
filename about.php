

<?php
/*
 * Template Name: about
 */?>

 <?php

get_header ();?>

<?php while(have_posts()) {
	the_post(); ?>


<div id="page-container">
	

<h1><?php the_title(); ?></h1>
<div id="avatar">
<img src="/wp-content/themes/James/Images/avatar.png">
</div>
 <?php the_content(); ?> 
 



</div>

<?php }
	get_footer();
		?>

