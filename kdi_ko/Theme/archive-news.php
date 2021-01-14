<?php

$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header-archive');
?>
<main class="templatePage newsArchive">
  <div class="container boardTable">
    <div class="row d-none d-sm-flex tableHeader">
      <div class="col">
        제목
      </div>
      <div class="col-12 col-sm-4 col-md-2 text-sm-center">
        등록일
      </div>
    </div>
    <?php
    // Define page_id
    $page_ID = get_the_ID();

    // Define paginated posts
    $page    = get_query_var('page');

    // Define custom query parameters
    $args    = array(
      'post_type'      => 'news', // post types
      'posts_per_page' => 10,
      'meta_query' => array(
        'relation' => 'OR',
        array(
          'key' => 'notice',
          'value' => '1',
          'compare' => '!='
        ),
        array(
          'key' => 'notice',
          'compare' => 'NOT EXISTS'
        )
      ),
      'paged'          => (get_query_var('paged')) ? get_query_var('paged') : 1
    );

    $noticeArgs = array(
      'post_type'      => 'news',
      'meta_query'     => array(
        array(
          'key'        => 'notice',
          'value'      => '1',
          'compare'    => '=',
        )
      )
    );

    // If is_front_page "paged" parameters as $page number
    if (is_front_page() || $noticeArgs !== 'null')
      $args['paged'] = $page;

    // Instantiate custom query
    $custom_query = new WP_Query($args);
    $notice_query = new WP_Query($noticeArgs);

    if ($notice_query->have_posts()) {
      while ($notice_query->have_posts()) :
        $notice_query->the_post();
        $_title = get_the_title();
        $_permalink = get_the_permalink();
        $_date = get_the_date('Y-m-d');
        $_isNotice = get_field('notice');
        echo <<<HTML
        <div class="row notice list">
          <div class="col">
            <span class="noticeBadge">공지</span>
            <a href="$_permalink">$_title</a>
          </div>
          <div class="col-12 col-sm-4 col-md-2 text-sm-center">
            <span class="date">$_date</span>
          </div>
        </div>
HTML;
      endwhile;
    }
    // Custom loop
    if ($custom_query->have_posts()) {
      while ($custom_query->have_posts()) :
        $custom_query->the_post();
        /**
         * Displaying content
         *
         * the_title(), the_permalink(), the_content() etc
         * Or see Twentysixteen theme page.php
         * get_template_part( 'template-parts/content', 'page' );
         *
         */
        $_title = get_the_title();
        $_permalink = get_the_permalink();
        $_date = get_the_date('Y-m-d');
        $_isNotice = get_field('notice');
        echo <<<HTML
        <div class="row list">
          <div class="col">
            <a href="$_permalink" class="title">$_title</a>
          </div>
          <div class="col-12 col-sm-4 col-md-2 text-sm-center">
            <span class="date">$_date</span>
          </div>
        </div>
HTML;
      endwhile;

      /**
       * Pagination parameters of the_posts_pagination() since: 4.1.0
       *
       * @see the_posts_pagination
       * https://codex.wordpress.org/Function_Reference/the_posts_pagination
       *
       */
      $arrow = <<<HTML
      <img src="$img_url/16.png" srcset="$img_url/16@2x.png 2x, $img_url/16@3x.png 3x">
HTML;
      $pagination_args = array(
        'mid_size'           => 5,
        'prev_text'          => __($arrow, 'theme-domain'),
        'next_text'          => __($arrow, 'theme-domain'),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'theme-domain') . ' </span>'
      );
      $GLOBALS['wp_query'] = $custom_query;
      if ($wp_query->max_num_pages != 1) {

        echo <<<HTML
        <div class="boardTablePaginationWrap">
          <a href="/news" class="start arrow">
            <img src="$img_url/1583.png" srcset="$img_url/1583@2x.png 2x, $img_url/1583@3x.png 3x">
          </a>
HTML;

        the_posts_pagination($pagination_args);
        $endPage = $wp_query->max_num_pages;

        echo <<<HTML
          <a href="/news/page/$endPage" class="end arrow">
            <img src="$img_url/1583.png" srcset="$img_url/1583@2x.png 2x, $img_url/1583@3x.png 3x">
          </a>
        </div>
HTML;
      }
    } else {
      /**
       * Empty Post
       *
       * Run your stuff here if posts empty
       * Or see Twentysixteen theme page.php
       * get_template_part( 'template-parts/content', 'none' );
       */
    }
    wp_reset_query(); // Restore the $wp_query and global post data to the original main query.
    ?>
  </div>
</main>
<?php
get_footer();
