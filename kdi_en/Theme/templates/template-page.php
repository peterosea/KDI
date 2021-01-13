<?php

/**
 * Template Name: 기본 페이지 템플릿
 * Template Post Type: page
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
    <?php
    if (!empty(get_field('image'))) { ?>
      <div style="text-align:center">
        <?php echo wp_get_attachment_image(get_field('image'), 'full', '', 'style=margin: 0 auto;'); ?>
      </div>
    <?php
    } else {
      the_content();
    }
    ?>
  </div>
</main>
<?php
get_footer();
