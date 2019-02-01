

<?php
/*
 * Template Name: artisthouse
 */?>

 <?php

get_header ();?>

<?php while(have_posts()) {
	the_post(); ?>


	<div class="iframe">
    <iframe frameborder="0" height="100%" scrolling="yes" src="http://theartisthouse.jamesmitchellportfolio.com" width="100%"></iframe>
</div>






</div>

<?php }
	get_footer();
		?>

