<?php

if (function_exists('acf_add_options_page')) {
  acf_add_options_sub_page(array(
    'page_title'   => 'history',
    'menu_title'   => 'history',
    'parent_slug'  => 'edit.php?post_type=history',
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'mrl',
    'menu_title'   => 'mrl',
    'parent_slug'  => 'edit.php?post_type=mrl',
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'fuze',
    'menu_title'   => 'fuze',
    'parent_slug'  => 'edit.php?post_type=fuze',
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'news',
    'menu_title'   => 'news',
    'parent_slug'  => 'edit.php?post_type=news',
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'csr-activities',
    'menu_title'   => 'csr-activities',
    'parent_slug'  => 'edit.php?post_type=csr-activities',
  ));
}
