<?php

/**
 * 자동적으로 풀스크린이 되는 기능을 영구적으로 비활성화
 * @link https://xomisse.com/blog/disable-fullscreen-gutenberg/
 */

if (is_admin()) {
  function jba_disable_editor_fullscreen_by_default()
  {
    $script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
    wp_add_inline_script('wp-blocks', $script);
  }
  add_action('enqueue_block_editor_assets', 'jba_disable_editor_fullscreen_by_default');
}
