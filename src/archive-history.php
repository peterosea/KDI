<?php
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
?>
<header class="pageHeader d-none d-md-block">
  <div class="pageAttributeBox">
    <div class="title">KDI 연혁</div>
    <div class="description">
      천무체계 개발 노하우와 기술력으로 대한민국 안보에 기여하겠습니다.<br />
      나아가 첨단기술로 이 땅을 수호하는 방위산업의 리더가 되겠습니다.
    </div>
  </div>

  <figure class="post-thumbnail">
    <img width="1568" height="1045" src="/wp-content/uploads/milky-way-1023340_1920.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="/wp-content/uploads/milky-way-1023340_1920.jpg 1568w, /wp-content/uploads/milky-way-1023340_1920pg 300w, /wp-content/uploads/milky-way-1023340_1920jpg 1024w, /wp-content/uploads/milky-way-1023340_1920pg 768w, /wp-content/uploads/milky-way-1023340_1920.jpg 1536w, /wp-content/uploads/milky-way-1023340_1920" sizes="(max-width: 1568px) 100vw, 1568px"> </figure><!-- .post-thumbnail -->
</header>
<main class="templatePage">
  <div class="container">
    <h2 style="text-align:center">
      <span class="d-block d-lg-inline">㈜코리아 디펜스 인더스트리는</span>
      <span class="d-block d-lg-inline">아낌없는 투자와 연구개발 노력을 통해</span><br class="d-none d-lg-inline" />
      <span>국내 대표 방산기업으로 성장하겠습니다.</span>
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
