<?php
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header-history');
?>
<main class="templatePage history">
  <div class="container">
    <h2 style="text-align:center">
      Korea Defense Industry Co., Ltd. Will grow into a leading defense company in Korea through generous investment and research and development efforts.
    </h2>
    <div class="row">
      <div class="col">
        <div class="timelineWrap">
          <ul class="timeline">
            <?php
            $historyPosts = get_posts(array(
              'post_type' => 'history',
              'post_status' => 'publish'
            ));

            foreach ($historyPosts as $hp) {
              $thumbnail = get_the_post_thumbnail($hp->post_id);
              $date = get_field('date');
              $timeline = <<<Timeline
                <li>
                  <div class="historyWrap">
                    <div class="innerWrap">
                      <div class="content">
                        <div class="date">$date</div>
                        <div class="title">$hp->post_title</div>
                      </div>
                      <div class="thumbnail">$thumbnail</div>
                    </div>
                  </div>
                </li>
              Timeline;
              echo $timeline;
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
