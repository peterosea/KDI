<?php

/**
 * Template Name: Home
 * Template Post Type: post, page
 */

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
// funtions
include($functions_url . '/template_bootstrap.php');
include($functions_url . '/template_slickslide.php');
get_header();

// main
include($theme_url . '/template-parts/header/default.php');
?>

<?php
get_footer();
