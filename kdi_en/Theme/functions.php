<?php
//  * @package WordPress
//  * @subpackage KDI Theme
//  * @since KDI Theme 1.0

//  Author URI: http://peterosea.com/

function themeslug_enqueue()
{
  wp_enqueue_style('en', get_stylesheet_directory_uri() . '/en.css');
}
add_action('wp_enqueue_scripts', 'themeslug_enqueue');

foreach (glob(get_stylesheet_directory() . "/functions/*.php") as $filename) {
  $test = str_replace(get_stylesheet_directory() . '/functions/', '', $filename);
  if (preg_match_all('/^((?!template).)*\.php/', $test)) {
    include $filename;
  }
}
