<?php

/**
 * Home page functions
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <dandan9509@gmail.com>
 **/

function font_8fd30c6f_6025_4027_9a2f_dff96a4d0826()
{
  wp_enqueue_style('fonts google: fira code', '/wp-content/themes/base/assets/fonts/Fira_Sans/css2.css');
}
add_action('wp_enqueue_scripts', 'font_8fd30c6f_6025_4027_9a2f_dff96a4d0826');

function footer_8fd30c6f_6025_4027_9a2f_dff96a4d0826()
{
  include get_stylesheet_directory() . '/template-parts/footer.php';
}
add_action('wp_footer', 'footer_8fd30c6f_6025_4027_9a2f_dff96a4d0826');
