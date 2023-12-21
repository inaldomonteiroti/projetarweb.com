<?php 

 function projetarshop_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.4.1', true ); //dependencia jquery importante //poper ?
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.4.1', 'all' );
 	// Theme's main stylesheet
 	wp_enqueue_style( 'projetarshop-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
 }
 add_action( 'wp_enqueue_scripts', 'projetarshop_scripts' );


 function projetarshop_config(){
	//Para registrar o seu menu
	register_nav_menus(
		array(
			'projetarshop_main_menu'	=> 'Projetarshop Main Menu',
			'projetarshop_footer_main_menu'	=> 'Projetarshop Footer Menu',
		)
	);

	add_theme_support('woocommerce');
}
add_action( 'after_setup_theme', 'projetarshop_config', 0 );