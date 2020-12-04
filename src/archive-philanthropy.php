<?php

$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header-philanthropy');
?>
<main class="templatePage newsArchive cm1200">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php
        // Define page_id
        $page_ID = get_the_ID();

        // Define paginated posts
        $page    = get_query_var('page');

        // Define custom query parameters
        $args    = array(
          'post_type'      => 'philanthropy', // post types
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
          'post_type'      => 'philanthropy',
          'meta_query'     => array(
            array(
              'key'        => 'notice',
              'value'      => '1',
              'compare'    => '=',
            )
          )
        );

        // If is_front_page "paged" parameters as $page number
        if (is_front_page())
          $args['paged'] = $page;

        // Instantiate custom query
        $custom_query = new WP_Query($args);
        $notice_query = new WP_Query($noticeArgs);

        // Custom loop
        if ($custom_query->have_posts()) {
          $renderTable = <<<render
              <table class="boardTable">
                <colgroup>
                  <col span="1" class="title">
                  <col span="1" class="date">
                </colgroup>
                <thead>
                  <th>제목</th>
                  <th>등록일</th>
                </thead>
                <tbody>
            render;
          while ($notice_query->have_posts()) :
            $notice_query->the_post();
            $_title = get_the_title();
            $_permalink = get_the_permalink();
            $_date = get_the_date('Y-m-d');
            $_isNotice = get_field('notice');
            $renderTable .= <<<render
                <tr class="notice">
                  <td class="title">
                    <span class="noticeBadge">공지</span>
                    <a href="$_permalink">$_title</a>
                  </td>
                  <td class="date">$_date</td>
                </tr>
              render;
          endwhile;
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
            $renderTable .= <<<render
                <tr>
                  <td class="title">
                    <a href="$_permalink">$_title</a>
                  </td>
                  <td class="date">$_date</td>
                </tr>
              render;
          endwhile;
          $renderTable .= <<<render
              </tbody>
            </table>
          render;
          echo $renderTable;

          /**
           * Pagination parameters of the_posts_pagination() since: 4.1.0
           *
           * @see the_posts_pagination
           * https://codex.wordpress.org/Function_Reference/the_posts_pagination
           *
           */
          $arrow = <<<link
              <img src="$img_url/16.png"
                  srcset="$img_url/16@2x.png 2x,
                          $img_url/16@3x.png 3x">
            link;
          $pagination_args = array(
            'mid_size'           => 5,
            'prev_text'          => __($arrow, 'theme-domain'),
            'next_text'          => __($arrow, 'theme-domain'),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'theme-domain') . ' </span>'
          );
          $GLOBALS['wp_query'] = $custom_query;
          if ($wp_query->max_num_pages != 1) {
            echo <<<link
              <div class="boardTablePaginationWrap">
              <a href="/news" class="start arrow">
              <img src="$img_url/1583.png"
                    srcset="$img_url/1583@2x.png 2x,
                            $img_url/1583@3x.png 3x">
              </a>
              link;
            the_posts_pagination($pagination_args);
            $endPage = $wp_query->max_num_pages;
            echo <<<link
              <a href="/news/page/$endPage" class="end arrow">
              <img src="$img_url/1583.png"
                    srcset="$img_url/1583@2x.png 2x,
                            $img_url/1583@3x.png 3x">
              </a>
              </div>
              link;
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
    </div>
    <div class="row">
    </div>
  </div>
</main>