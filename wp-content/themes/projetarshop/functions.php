<?php 

 function projetarshop_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.4.1', true ); //dependencia jquery importante //poper ?
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.4.1', 'all' );
 	// Theme's main stylesheet
 	wp_enqueue_style( 'projetarshop-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script');
 }
 add_action( 'wp_enqueue_scripts', 'projetarshop_scripts' );


 function projetarshop_config(){

	// Bootstrap Menu
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

	//Para registrar o seu menu
	register_nav_menus(
		array(
			'projetarshop_main_menu'	=> 'Projetarshop Main Menu',
			'projetarshop_footer_main_menu'	=> 'Projetarshop Footer Menu',
		)
	);
	//adicionando suporte ao woocommerce
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width'		=> 255,
		'single_image_width'		=> 255,
		'product_grid'				=> array(
	            'default_rows'    => 10,
	            'min_rows'        => 5,
	            'max_rows'        => 10,
	            'default_columns' => 1,
	            'min_columns'     => 1,
	            'max_columns'     => 1,			
		)
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}
}
add_action( 'after_setup_theme', 'projetarshop_config', 0 );


add_action( 'after_setup_theme', 'projetarshop_config', 0 );
if( class_exists( 'WooCommerce' )){
	require get_template_directory() . '/inc/wc-modifications.php';
}




