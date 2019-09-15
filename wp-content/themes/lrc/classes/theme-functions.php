<?php 
class Theme_Functions {
  public static function init() {
    self::actions();
    self::imageSizes();
    self::themeSupport();
    self::acfOptions();
  }

  public static function actions() {
    add_action('wp_enqueue_scripts', array(get_called_class(), 'loadAssets'));
    add_action('after_setup_theme', array(get_called_class(), 'registerMenus'));
  }

  public static function loadAssets() {
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/dist/style.css', '', '1.0', 'all');
	  wp_enqueue_script('general', get_stylesheet_directory_uri().'/dist/index.js', '', '', true);
  }

  public static function registerMenus() {
    register_nav_menu('main', 'Main Menu');
  }

  public static function imageSizes() {
    add_image_size('icon-sm', 64, 64, false);
  }

  public static function themeSupport() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
  }

  public static function acfOptions() {
    if(function_exists('acf_add_options_page')) {
      acf_add_options_page();
    }
  }
}
?>