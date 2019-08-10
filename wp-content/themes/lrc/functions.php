<?php

//CUSTOM EXCERPT MESSAGE
function new_excerpt_more($more) {
	return '...
	
	<p class="more"><a href="'.get_permalink($post->ID).'">Read Full Article</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//ENABLE MENU SUPPORT
add_theme_support('menus');

//ENABLE POST THUMBNAILS
add_theme_support( 'post-thumbnails' );

//DISABLE ADMIN BAR
add_filter('show_admin_bar', '__return_false');

function html5blank_styles()
	{
	wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
	wp_enqueue_style('html5blank'); // Enqueue it!
	}
	
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
?>
