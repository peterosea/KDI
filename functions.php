<?php
//  * @package WordPress
//  * @subpackage KDI Theme
//  * @since KDI Theme 1.0

//  Author URI: http://peterosea.com/

foreach (glob(get_stylesheet_directory() . "/functions/*.php") as $filename) {
  include $filename;
}

function themeslug_enqueue()
{
  // Bootstrap
  wp_enqueue_style('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), null, false);
  wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), null, false);
  wp_enqueue_script('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'themeslug_enqueue');
