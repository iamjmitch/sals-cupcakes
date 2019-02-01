<?php



get_header ('sitewide');?>



<?php while(have_posts()) {

	the_post(); ?>




<div id="shop-container">

	<div id="sidebar-container">
	<?php get_sidebar(); ?>
	</div>
<div class="container">


	<?php the_post_thumbnail( 'blog_feature' );?>







<h1><a href="<?php get_permalink($post->$id );?>"> <?php the_title(); ?></a></h1>

<p><?php the_content(); ?> </p>




</div>
</div>





<?php }	get_footer();

		?>

