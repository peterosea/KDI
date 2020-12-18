<?php

/**
 * Bootstrap
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <dandan9509@gmail.com>
 **/



function themeslug_enqueue_95d7e4dc_3f72_40b6_ac87_b13f8bc8d2f1()
{
?>
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/base/assets/slick.css" />
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/base/assets/slick-theme.css" />
<?php
}
add_action('wp_head', 'themeslug_enqueue_95d7e4dc_3f72_40b6_ac87_b13f8bc8d2f1');

function themeslug_enqueue_95d7e4dc_3f72_40b6_ac87_b13f8bc8d2f2()
{
?>
  <script type="text/javascript" src="/wp-content/themes/base/assets/slick.min.js"></script>
<?php
}
add_action('wp_body_open', 'themeslug_enqueue_95d7e4dc_3f72_40b6_ac87_b13f8bc8d2f2');
