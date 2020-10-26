<?php

/**
 * Template Name: Home
 * Template Post Type: post, page
 */

get_header();

$theme_url = get_stylesheet_directory();
$img_url = get_home_url() . '/wp-content/uploads';

include($theme_url . '/template-parts/header/default.php');
?>



<?php
get_footer();
