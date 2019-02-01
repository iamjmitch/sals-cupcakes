<?php



get_header( 'home' );?>

<div id="carouselExampleIndicators" class="my-cara carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/wp-content/themes/sal/Images/slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/wp-content/themes/sal/Images/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/wp-content/themes/sal/Images/slide3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/wp-content/themes/sal/Images/slide4.jpg" alt="Third slide">
    </div>
  </div>
  
  
</div>
<div class="hp-container">

<div class="divider">
	<img src="/wp-content/themes/sal/Images/sc.png">
<h2> Featured Cupcakes</h2>

</div>







<div id="featured-posts" class="product-slider">

		<?php
$args = array(
	'posts_per_page' => -1,
	'post_type'      => 'product',
	'post_status'    => 'publish',
	'tax_query'      => array(
		array(
			'taxonomy' => 'product_visibility',
			'field'    => 'name',
			'terms'    => 'featured',
			'operator' => 'IN',
			),
		)  
);
$featured_product = new WP_Query( $args );
if ( $featured_product->have_posts() ) : 
while ( $featured_product->have_posts() ) : $featured_product->the_post();
$post_thumbnail_id     = get_post_thumbnail_id();
$product_thumbnail     = wp_get_attachment_image_src($post_thumbnail_id, $size = 'cupcake_thumb');
$product_thumbnail_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
$price = get_post_meta( get_the_ID(), '_regular_price', true);


?>

	<div class="slider">
		<div class="slider-container">
		    <a href="<?php the_permalink();?>">
			   <img class="slider-image" src="<?php echo $product_thumbnail[0];?>" alt="<?php echo $product_thumbnail_alt;?>">
			        <div class="slider-text">
                    	<h3 class="slider-title"><?php the_title();?></h3></a>
                   
                     	<?php echo the_excerpt();?>
                     </div>
                 
                   	<div class="slider-price-container">
     					 <div class="slider-price">
   								 <p>$<?php echo $price; ?>.00</p>
						</div>
					<a  href="<?php the_permalink();?>"><button class="button product_type_variable">View Product</button></a>
   					 </div>
 					
		 
		</div> 
		</div>
	
	
	<?php 
endwhile; 
endif; 
		
 wp_reset_query();
 ?>          
<!-- Featured products loop -->  
</div>
</div>




<div class="raised">
	<div class="hp-container">
		<img class="banner" src="/wp-content/themes/sal/Images/banner.jpg">
		<img class="left" src="/wp-content/themes/sal/Images/delivery.jpg">
		<img class="left" src="/wp-content/themes/sal/Images/baked.jpg">
		<img class="right" src="/wp-content/themes/sal/Images/sat.jpg">


</div>
</div>
<div class="hp-container">

<div class="divider">
	<img src="/wp-content/themes/sal/Images/sc.png">
<h2> Bakers Choice</h2>

</div>







<div id="bakerchoice-posts" class="bakers-slider">

		<?php
$args = array(
	'posts_per_page' => -1,
	'post_type'      => 'product',
	'post_status'    => 'publish',
	'tax_query'      => array(
		array(
			'taxonomy' => 'product_tag',
			
			'terms'    => 'bakerchoice',
			
			),
		)  
);
$featured_product = new WP_Query( $args );
if ( $featured_product->have_posts() ) : 
while ( $featured_product->have_posts() ) : $featured_product->the_post();
$post_thumbnail_id     = get_post_thumbnail_id();
$product_thumbnail     = wp_get_attachment_image_src($post_thumbnail_id, $size = 'cupcake_thumb');
$product_thumbnail_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
$price = get_post_meta( get_the_ID(), '_regular_price', true);
?>

	<div class="slider">
		<div class="slider-container">
		    <a href="<?php the_permalink();?>">
			   <img class="slider-image" src="<?php echo $product_thumbnail[0];?>" alt="<?php echo $product_thumbnail_alt;?>">
			        <div class="slider-text">
                    	<h3 class="slider-title"><?php the_title();?></h3></a>
                   
                     	<?php echo the_excerpt();?>
                     </div>
                 
                   	<div class="slider-price-container">
     					 <div class="slider-price">
   								 <p>$<?php echo $price; ?>.00</p>
						</div>
					<a  href="<?php the_permalink();?>"><button class="button product_type_variable">View Product</button></a>
   					 </div>
 					
		 
		</div> 
		</div>
	
	
	<?php 
endwhile; 
endif; 
		
 wp_reset_query();
 ?>          
<!-- Featured products loop -->  
</div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.product-slider').slick({
      arrows: false,
      dots: true,
      autoplay:true,
      slidesToShow: 4,
       mobileFirst:true,
      responsive: [
      {
      breakpoint: 1100,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 930,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 300,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
      });
				
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.bakers-slider').slick({
      arrows: false,
      dots: true,
      autoplay:true,
      slidesToShow: 4,
       mobileFirst:true,
      responsive: [
      {
      breakpoint: 1100,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 300,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
      });
				
  </script>

  
<?php get_footer();?>




