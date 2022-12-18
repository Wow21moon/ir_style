<?php

global $ir_assets;

function dw_style_frontend() {
	global $ir_assets;

	$ir_assets = get_stylesheet_directory_uri() . '/assets/';

    wp_enqueue_style('styles', $ir_assets . 'css/style.css');
	wp_enqueue_style('styles_swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
	wp_enqueue_style('styles_swiper_before_after_img_slider1', 'https://unpkg.com/beerslider/dist/BeerSlider.css');
}
 
add_action('wp_enqueue_scripts', 'dw_style_frontend');

function dw_include_myscript(){
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
	wp_enqueue_script('script_swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', '', '1.0', true);
	wp_enqueue_script('script_before_after_img_slider', 'https://unpkg.com/cocoen/dist/cocoen.js', '', '1.0', true);
	wp_enqueue_script('script_before_after_img_slider1', 'https://unpkg.com/beerslider/dist/BeerSlider.js', '', '1.0', true);
	wp_enqueue_script('script_before_after_img_slider1', 'https://unpkg.com/beerslider/dist/BeerSlider.js', '', '1.0', true);
}
 
add_action('wp_enqueue_scripts', 'dw_include_myscript');


//ВИДЖЕТЫ
if (function_exists('register_sidebar'))
register_sidebar(array(
    'before_widget' => '<div class="card my-4 widget">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h5 class="card-header">',
    'after_title'   => '</h5><div class="card-body">',
));
//Добавляем поддержку изображений в постах
add_theme_support('post-thumbnails');

//Для Google Fonts
function load_fonts() {            
	wp_register_style (
		'google',
		'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,600,300'
	);             
	
	wp_enqueue_style( 'google');        
	
}    

add_action('wp_print_styles', 'load_fonts');

//FontAwesome локальные 

function load_fontawesome() {
    wp_enqueue_style ( 
		'font-awesome', 
		get_stylesheet_directory_uri() . '/assets/css/fontawesome.min.css' 
	);
}

add_action( 'wp_enqueue_scripts', 'load_fontawesome' );