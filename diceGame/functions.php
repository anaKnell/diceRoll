<?php
//charge jquery et réinitialise une meilleure version
function dice_register_asset(){
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false,'3.3.1', true);
}
//charge CSS bootstrap
wp_register_style('diceGame', get_template_directory_uri() . '/style.css');
wp_enqueue_style('diceGame');
wp_enqueue_style("bs_css","https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");

//Création menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action('wp_enqueue_scripts','dice_register_asset');
add_action( 'init', 'register_my_menu' );

//


//background 
add_theme_support( 'custom-background' );

//widget
add_theme_support('widget');
function header_widgets_init() {
 
 register_sidebar( array(

 'name' => 'zone de widget',
 'id' => 'new-widget-area',
 'before_widget' => '<div class="nwa-widget">',
 'after_widget' => '</div>',
 'before_title' => '<h2 class="nwa-title">',
 'after_title' => '</h2>',
 ) );
}

add_action( 'widgets_init', 'header_widgets_init' );



/*//Custom Logo

 add_theme_support( 'custom-logo', array(
 'height'      => 150,
 'width'       => 150,
 'flex-width'  => false,
 'header-text' => array( 'dice', 'diceGame' ),
 ));
*/

//Custom header Img

/*add_theme_support( 'custom-header', array(
	'default-image'          => '',
	'width'                  => 150,
	'height'                 => 150,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => false,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
));*/	