<?php
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;


        ?>

        <?php
        function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

?>

<?php // Register custom navigation walker
    require_once('class-wp-bootstrap-navwalker.php');
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'cupcake_thumb', 258, 303, true );
    add_image_size( 'cupcake_thumb_grid', 286, 337, true );
    add_image_size( 'cupcake_product_page', 300, 500, true );


add_action ( "woocommerce_before_shop_loop_item", "after_li_started", 9 );

function after_li_started () {
    echo '<div class="product-wrapper">';
}


add_action ( "woocommerce_after_shop_loop_item", "before_li_started", 15 );

function before_li_started () {
    echo "</div>";
}

add_action ( "woocommerce_before_shop_loop_item_title", "before_text_wrapper_grid", 11 );

function before_text_wrapper_grid () {
    echo '<div class="text-wrapper-grid">';
}

add_action ( "woocommerce_before_shop_loop_item_price", "after_text_wrapper_grid", 10 );

function after_text_wrapper_grid () {
    echo '</div>';
}


add_filter( 'single_product_archive_thumbnail_size', function( $size ) {
return 'cupcake_thumb_grid';
} );

add_filter( 'woocommerce_gallery_image_size', function( $size ) {
return 'cupcake_product_page';
} );

function add_excerpt_in_product_grid() {
     
    the_excerpt();
     
}

add_action( 'woocommerce_after_shop_loop_item_title', 'add_excerpt_in_product_grid', 2 );



// Register Sidebars
function sidebar_widgets() {

    $args = array(
        'id'            => 'sidebar',
        'name'          => __( 'Sidebar', 'text_domain' ),
        'description'   => __( 'Right Sidebar', 'text_domain' ),
        'before_title'  => '<h3 class="widget-h3">',
        'after_title'   => '</h3>',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'sidebar_widgets' );

function woo_related_products_limit() {
  global $product;
    
    $args['posts_per_page'] = 6;
    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 3; // 4 related products
    $args['columns'] = 3; // arranged in 2 columns
    return $args;
}
?>