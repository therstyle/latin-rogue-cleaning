<?php
//ENABLE MENU SUPPORT
add_theme_support('menus');

//ENABLE POST THUMBNAILS
add_theme_support( 'post-thumbnails' );

//DISABLE ADMIN BAR
add_filter('show_admin_bar', '__return_false');

function loadAssets() {
	wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css', '', '1.0', 'all');
	wp_enqueue_script('general', get_stylesheet_directory_uri().'/js/general.js', '', '', true);
}

add_action('wp_enqueue_scripts', 'loadAssets');
?>
