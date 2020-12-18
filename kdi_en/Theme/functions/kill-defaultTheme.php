<?php

/**
 * Kill Themes
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <dandan9509@gmail.com>
 **/

function kill_theme_wpse_188906($themes)
{
  unset($themes['twentysixteen']);
  unset($themes['twentynineteen']);
  unset($themes['twentyseventeen']);
  unset($themes['twentytwenty']);
  return $themes;
}
add_filter('wp_prepare_themes_for_js', 'kill_theme_wpse_188906');
