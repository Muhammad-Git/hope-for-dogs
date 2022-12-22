<?php
add_theme_support( 'post-thumbnails' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
  register_nav_menus( array(
    'header_menu' => 'Header Menu',
    'header_menu_reponsive' => 'Header Menu Reponsive',
    'footer_menu' => 'Footer Menu',
  )
);
}

require_once ( get_stylesheet_directory() . '/theme-option.php' );
function theme_scripts() {

  
   
    
    
/*wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css' );*/
   // wp_enqueue_style( 'theme-style', get_stylesheet_uri());   
    //wp_enqueue_script( 'jquery-3.1.0.min','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), false, true );
   /* wp_enqueue_script( 'main-lib', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );*/
    //wp_localize_script('custom', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));
  }
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


function widget_registration(){
    register_sidebar( array(
        'name' => 'Shop Widget',
        'id' => 'shop-page-widget',
        'description' => $description,
        'before_widget' => '<div class="sidepro">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'widget_registration');

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 260,
        //'subcategory_archive_thumbnail_size' => 2000,
        'single_image_width'    => 461,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 1,
            'max_rows'        => 12,
            'default_columns' => 4,
            'min_columns'     => 3,
            'max_columns'     => 8,
        ),
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    //add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
//REMOVE SHOP PAGE ADD TO CART BUTTON

	function remove_loop_button(){
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	}
	add_action('init','remove_loop_button');


//REMOVE SHOP PAGE IMAGE 
	
	function remove_woocommerce_images() {
		remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
	}
	
	add_action( 'after_setup_theme', 'remove_woocommerce_images' );
	
	
	
	//REMOVE SHOP PAGE PRICE 
	
	//add_filter( 'woocommerce_variable_sale_price_html', 'woocommerce_am_remove_prices', 10, 2 );
	//add_filter( 'woocommerce_variable_price_html', 'woocommerce_am_remove_prices', 10, 2 );
	//add_filter( 'woocommerce_get_price_html', 'woocommerce_am_remove_prices', 10, 2 );
	
	/* function woocommerce_am_remove_prices( $price, $product ) {
		$price = '';
		return $price;
		}
	*/	

	 remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );	
	
	// REMOVE SHOP PAGE TITLE
	remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);



remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

function woocommerce_am_shop_display() {

  global $product, $woocommerce;
	$link =   get_permalink($product->get_id());
	?>


      <div class="col-md-1">
            <div class="box">
              <div class="img-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
              </div>
              <div class="text">
                <p class="name"><?php echo the_title(); ?></p>
                
              </div>
            </div>
          </div>


<?php }

add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_am_shop_display', 11 );

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}

add_filter( 'get_post_metadata', 'add_dynamic_post_meta', 10, 4 );

/**
 * Add dynamically-generated "post meta" to `\WP_Post` objects
 *
 * This makes it possible to access dynamic data related to a post object by simply referencing `$post->foo`.
 * That keeps the calling code much cleaner than if it were to have to do something like
 * `$foo = some_custom_logic( get_post_meta( $post->ID, 'bar', true ) ); echo esc_html( $foo )`.
 *
 * @param mixed  $value
 * @param int    $post_id
 * @param string $meta_key
 * @param int    $single   @todo handle the case where this is false
 *
 * @return mixed
 *      `null` to instruct `get_metadata()` to pull the value from the database
 *      Any non-null value will be returned as if it were pulled from the database
 */
function add_dynamic_post_meta( $value, $post_id, $meta_key, $single ) {
	$post = get_post( $post_id );

	if ( 'page' != $post->post_type ) {
		return $value;
	}

	switch ( $meta_key ) {
		case 'verbose_page_template':
			$value = "The page template is " . ( $post->_wp_page_template ?: 'not assigned' );
			break;
	}

	return $value;
}



