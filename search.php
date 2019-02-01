<?php

get_header ();?>
<div id="page-container">
	<div style="width:100%;">
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div id="search-bar">
        <input type="text" value="" name="s" id="searchbar" placeholder="Search Blog"/>
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
</div>
<?php while(have_posts()) {
	the_post(); ?>


<div id="post-container">

	<div id="post-thumb">
<a href="<?php echo get_permalink($post->$id );?>"><?php the_post_thumbnail( 'blog' );?></a>
</div>

<div id="post-content">
<h1><a class="post-title" href="<?php echo get_permalink($post->$id );?>"> <?php the_title(); ?></a></h1>
<p> <?php echo get_the_excerpt(); ?>
<a class="read-more" href="<?php echo get_permalink($post->$id);?>">Read More</a> </p>
</div>
</div>





<?php }
	get_footer();
		?>
