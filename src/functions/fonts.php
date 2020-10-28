<?php

/**
 * 홈페이지 폰트
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <dandan9509@gmail.com>
 **/

function header_681831b7_622b_4bd5_a39b_9856d597446c()
{
  wp_enqueue_style('fonts google', 'https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap');
}
add_action('wp_enqueue_scripts', 'header_681831b7_622b_4bd5_a39b_9856d597446c');
