/*
template name: wedding
*/

<?php

get_header ();?>

<?php while(have_posts()) {
	the_post(); ?>


<div id="page-container">
	

<h1><?php the_title(); ?></h1>
 <?php if ( function_exists( 'rl_gallery' ) ) { rl_gallery( '375' ); }?>




</div>
<?php }
	get_footer();
		?>








