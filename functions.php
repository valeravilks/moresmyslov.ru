<?php

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	//wp_enqueue_style( 'style-materialize', // get_template_directory_uri().'/css/materialize.min.css');
    wp_enqueue_style( 'style-materialize', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style( 'style-name', get_stylesheet_uri());
	wp_enqueue_script('jquery1', get_template_directory_uri().'/js/jquery-3.0.0.min.js');	
	//wp_enqueue_script('materialize',/ get_template_directory_uri().'/js/materialize.min.js');	
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js');	


}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

function deregister_cf7_styles() {
if ( !is_page(array(29)) ) {
wp_deregister_style('contact-form-7');
}
}
add_action('wp_print_styles', 'deregister_cf7_styles', 100);

function the_breadcrumb() {
    if (!is_front_page()) {
        echo '<a href="';
        echo get_option('home');
        echo '">Главная';
        echo "</a> / ";
        if (is_category() || is_single()) {
            the_category(' ');
            if (is_single()) {
                echo " / ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
    else {
        echo 'Home';
    }
}

add_theme_support( 'post-thumbnails' );
add_action('get_header', 'my_filter_head'); 
function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');  
} 
?>