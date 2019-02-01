<?php

get_header ('sitewide');

?>

<?php while(have_posts()) {
	the_post(); ?>

<div id="page-image">
		<img src="<?php echo the_post_thumbnail_url( 'full' );?>">
	</div>


<div id="shop-container">
		<div class="container">
		
	



 <?php the_content(); ?> 




</div>
	<div id="sidebar-container">
	<?php get_sidebar(); ?>
	</div>


</div>
<?php }
	get_footer();
		?>
