<?php

/**
 * Bootstrap
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <dandan9509@gmail.com>
 **/

function themeslug_enqueue_5f482825_0bfe_4f87_9ce7_aaee698a1698_head()
{
?>
  <link rel="stylesheet" href="/wp-content/themes/base/assets/bootstrap.min.css">
  <script src="/wp-content/themes/base/assets/jquery-3.5.1.slim.min.js"></script>
<?php
}
add_action('wp_head', 'themeslug_enqueue_5f482825_0bfe_4f87_9ce7_aaee698a1698_head');

function themeslug_enqueue_5f482825_0bfe_4f87_9ce7_aaee698a1698_footer()
{
?>
  <script src="/wp-content/themes/base/assets/popper.min.js"></script>
  <script src="/wp-content/themes/base/assets/bootstrap.min.js"></script>
<?php
}
add_action('wp_body_open', 'themeslug_enqueue_5f482825_0bfe_4f87_9ce7_aaee698a1698_footer');
