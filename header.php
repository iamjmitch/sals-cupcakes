<!Doctype html>
<html <?php language_attributes();?>>
	<head>
	<title><?php wp_title(); ?> - <?php bloginfo(title); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width" >
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/sal/style.css">
	<?php wp_head() ?>
	</head>

	
	<body <?php body_class(); ?>>


		
	<div id="header-container">
	<div id="header">
		<div id="logo">
	<a href="/"><img src="/wp-content/themes/sal/Images/logo.png"></a>
	</div>





<nav class="navbar navbar-expand-md navbar-light bg-light" style="padding-top:5px;padding-bottom:5px; @media only screen and (max-width: 767px) {min-height:70px;}">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="@media only screen and (max-width: 767px) {min-height:50px;}">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       	 <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
     
    </div>
 
</nav>


	
	</div>
</div>

	
	
	
