



<div id="footer">
	<div class="footer-container">
				<div class="footer-info">
					<div class="col-social">
				<ul>
					<li><a href="#"><i class="fab fa-facebook"></i>&ensp;Facebook</a></li>
					<li><a href="#"><i class="fab fa-instagram"></i>&ensp;Instagram</a></li>
					<li><a href="#"><i class="fab fa-twitter-square"></i></i>&ensp;Twitter</a></li>
					<li><a href="#"><i class="fab fa-youtube"></i></i>&ensp;Youtube</a></li>
				</ul>
			</div>
			<div class="col-cat">
				<ul>
					<?php
					  $taxonomy     = 'product_cat';
					  $orderby      = 'name';  
					  $show_count   = 0;      // 1 for yes, 0 for no
					  $pad_counts   = 0;      // 1 for yes, 0 for no
					  $hierarchical = 1;      // 1 for yes, 0 for no  
					  $title        = '';  
					  $empty        = 0;

					  $args = array(
					         'taxonomy'     => $taxonomy,
					         'orderby'      => $orderby,
					         'show_count'   => $show_count,
					         'pad_counts'   => $pad_counts,
					         'hierarchical' => $hierarchical,
					         'title_li'     => $title,
					         'hide_empty'   => $empty
					  );
					 $all_categories = get_categories( $args );
					 foreach ($all_categories as $cat) {
					    if($cat->category_parent == 0) {
					        $category_id = $cat->term_id;       
					        echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';

					        $args2 = array(
					                'taxonomy'     => $taxonomy,
					                'child_of'     => 0,
					                'parent'       => $category_id,
					                'orderby'      => $orderby,
					                'show_count'   => $show_count,
					                'pad_counts'   => $pad_counts,
					                'hierarchical' => $hierarchical,
					                'title_li'     => $title,
					                'hide_empty'   => $empty
					        );
					        $sub_cats = get_categories( $args2 );
					        if($sub_cats) {
					            foreach($sub_cats as $sub_category) {
					                echo  $sub_category->name ;
					            }   
					        }
					    }       
					}
					?>
				</ul>
			</div>
			<div class="col-links">
				<ul>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">Cart</a></li>
					<li><a href="#">Account</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>

			<div class="col-sub">
				<p>Newsletter Subscribe</p>
				
					<input type="email" placeholder="Enter your email address" tabindex="1" class="newsletter-email" required><br>
					<input type="submit" value="Subscribe" tabindex="2" class="newsletter-submit">
				
			</div>
			<p id="copyright"> Sal's Cupcakes &copy; 2018</p>
		</div>
	
	</div>

</div>
<div id="dev">
<a href="http://iamjmitch.com"><img src="/wp-content/themes/sal/Images/jmlogo.png"></a>
</div>

<?php if ( is_home() ) {
    // This is the blog posts index

} else {
    wp_footer();
}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>