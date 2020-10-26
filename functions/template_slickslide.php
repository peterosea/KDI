<?php

/**
 * Bootstrap
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <dandan9509@gmail.com>
 **/

function themeslug_enqueue_95d7e4dc_3f72_40b6_ac87_b13f8bc8d2f1()
{
  wp_enqueue_style('slick1', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null, false);
  wp_enqueue_style('slick2', '///cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), null, false);
}
add_action('wp_enqueue_scripts', 'themeslug_enqueue_95d7e4dc_3f72_40b6_ac87_b13f8bc8d2f1');

function themeslug_enqueue_95d7e4dc_3f72_40b6_ac87_b13f8bc8d2f12()
{
  echo '<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>';
}
add_action('wp_footer', 'themeslug_enqueue_95d7e4dc_3f72_40b6_ac87_b13f8bc8d2f12');
