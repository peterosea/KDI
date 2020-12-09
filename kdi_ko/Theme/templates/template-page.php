<?php

/**
 * Template Name: Page
 * Template Post Type: post, page
 */

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header');
?>
<main class="templatePage">
  <div class="container">
    <?php the_content(); ?>
  </div>
</main>
<?php
get_footer();
