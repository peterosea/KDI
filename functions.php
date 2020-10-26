<?php
//  * @package WordPress
//  * @subpackage KDI Theme
//  * @since KDI Theme 1.0

//  Author URI: http://peterosea.com/

foreach (glob(get_stylesheet_directory() . "/functions/*.php") as $filename) {
  include $filename;
}
