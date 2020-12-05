<?php

function wpa_news_posts_per_page($query)
{
  if (
    !is_admin()
    && $query->is_post_type_archive('news')
    && $query->is_main_query()
  ) {
    $query->set('posts_per_page', -1);
  }
}
add_action('pre_get_posts', 'wpa_news_posts_per_page');


function wpa_philanthropy_posts_per_page($query)
{
  if (
    !is_admin()
    && $query->is_post_type_archive('philanthropy')
    && $query->is_main_query()
  ) {
    $query->set('posts_per_page', -1);
  }
}
add_action('pre_get_posts', 'wpa_philanthropy_posts_per_page');
