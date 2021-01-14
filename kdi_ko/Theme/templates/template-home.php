<?php

/**
 * Template Name: 홈 페이지 템플릿
 * Template Post Type: page
 */

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
// funtions
include($functions_url . '/template_slickslide.php');
get_header();
?>
<main class="homePage">
  <?php include('template-home/section1.php') ?>
  <?php include('template-home/section2.php') ?>
</main>
<?php
get_footer();
