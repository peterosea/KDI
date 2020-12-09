<?php
//  * @package WordPress
//  * @subpackage KDI Theme
//  * @since KDI Theme 1.0

//  Author URI: http://peterosea.com/

foreach (glob(get_stylesheet_directory() . "/functions/*.php") as $filename) {
  $test = str_replace(get_stylesheet_directory() . '/functions/', '', $filename);
  if (preg_match_all('/^((?!template).)*\.php/', $test)) {
    include $filename;
  }
}
