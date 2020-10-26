<?php

/**
 * Bootstrap
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <dandan9509@gmail.com>
 **/

function themeslug_enqueue_5f482825_0bfe_4f87_9ce7_aaee698a1698()
{
  // Bootstrap
  wp_enqueue_style('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), null, false);
  wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), null, false);
  wp_enqueue_script('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'themeslug_enqueue_5f482825_0bfe_4f87_9ce7_aaee698a1698');
