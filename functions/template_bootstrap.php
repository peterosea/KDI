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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<?php
}
add_action('wp_head', 'themeslug_enqueue_5f482825_0bfe_4f87_9ce7_aaee698a1698_head');

function themeslug_enqueue_5f482825_0bfe_4f87_9ce7_aaee698a1698_footer()
{
?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<?php
}
add_action('wp_footer', 'themeslug_enqueue_5f482825_0bfe_4f87_9ce7_aaee698a1698_footer');
