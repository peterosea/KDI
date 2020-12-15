<?php

$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header-news');
the_post();
?>
<main class="templatePage boardTemplate">
  <div class="container">
    <div class="row header">
      <div class="col">
        <div class="postTitle">
          <span>
            <?php the_title() ?>
          </span>
        </div>
        <div class="info">
          <div class="author">
            <span class="label">Author</span>
            <span class="name">
              <?php the_author() ?>
            </span>
          </div>
          <div class="date">
            <span class="name">
              <?php the_date('Y-m-d') ?>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="content">
          <?php the_content() ?>
        </div>
      </div>
    </div>
    <div class="row navigation">
      <div class="col">
        <table class="navigation">
          <tbody>
            <?php
            $prev_post = get_previous_post();
            $prev_title = '';
            $prev_date = '';
            $prev_link = 'No previous posts.';
            if ($prev_post) {
              $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
              $prev_link = '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title . '">' . $prev_title . '</a>';
              $prev_date = get_the_date('Y-m-d', $prev_post->ID);
            }
            echo <<<div
            <tr class="prev">
              <td>
                <div>
                  <span>previous post</span>
                  <img src="$img_url/10-1.png" srcset="$img_url/10@2x.png 2x, $img_url/10@3x.png 3x">
                </div>
              </td>
              <td>
                $prev_link
              </td>
              <td class="date">
                $prev_date
              </td>
            </tr>
            div;

            $next_post = get_next_post();
            $next_title = '';
            $next_date = '';
            $next_link = 'No next posts.';
            if ($next_post) {
              $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
              $next_link = '<a rel="prev" href="' . get_permalink($next_post->ID) . '" title="' . $next_title . '">' . $next_title . '</a>';
              $next_date = get_the_date('Y-m-d', $prev_post->ID);
            }
            echo <<<div
            <tr class="next">
              <td>
                <div>
                  <span>next post</span>
                  <img src="$img_url/10-1.png" srcset="$img_url/10@2x.png 2x, $img_url/10@3x.png 3x">
                </div>
              </td>
              <td>
                $next_link
              </td>
              <td class="date">
                $next_date
              </td>
            </tr>
            div;
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col text-right">
        <a href="/news/" class="backList">Posts list</a>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
