<?php
$section2 = get_field('section2');
?>
<section class="section2">
  <div class="container">
    <div class="row mb-4 pb-1">
      <div class="col-12">
        <div class="box box-1">
          <div class="imgBg" style="background-image:url(<?php echo $section2['grid1']['background'] ?>)">
            <img src="<?php echo $section2['grid1']['background'] ?>" alt="">
          </div>
          <div class="content">
            <div>
              <h1 class="title"><?php echo $section2['grid1']['title'] ?></h1>
              <p><?php echo $section2['grid1']['content'] ?></p>
            </div>
            <div class="moreBtnWrap">
              <a href="<?php echo $section2['grid1']['button']['url'] ?>" class="moreBtn"><span><?php echo $section2['grid1']['button']['title'] ?></span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4 pb-1">
      <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="box box-2 newsBox slickBox">
          <div class="dotContainer">
            <span class="boxTitle">KDI News</span>
            <div id="dot"></div>
          </div>
          <div class="newsSlider">
            <?php
            $newsPosts = get_posts(array(
              'numberposts' => 3,
              'post_type' => 'news',
              'post_status' => 'publish',
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
              )
            ));

            $newsNoticePosts = get_posts(array(
              'post_type'      => 'news',
              'meta_query'     => array(
                array(
                  'key'        => 'notice',
                  'value'      => '1',
                  'compare'    => '=',
                )
              )
            ));

            if (count($newsPosts) !== 0) {
              $slidePost = $newsPosts;
            } else {
              $slidePost = $newsNoticePosts;
            }

            foreach ($slidePost as $np) {
              $text = get_the_excerpt($np);
              $link = get_the_permalink($np);
              $slide = <<<HTML
                  <div class="slide">
                    <div class="content">
                      <a href="$link" class="title">$np->post_title</a>
                      <p>$text...</p>
                    </div>
                  </div>
HTML;
              echo $slide;
            }
            ?>
          </div>
          <script>
            $('.newsSlider').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: true,
              dots: true,
              appendDots: $('.newsBox .dotContainer #dot')
            });
          </script>
        </div>
      </div>
      <div class="col-12 col-lg-8">
        <div class="box box-3 imgBg" style="background-image: url(<?php echo $section2['grid2']['background'] ?>">
          <div class="imgBg">
          </div>
          <div class="content">
            <div>
              <h1 class="title"><?php echo $section2['grid2']['title'] ?></h1>
              <p><?php echo $section2['grid2']['content'] ?></p>
            </div>
            <div class="moreBtnWrap">
              <a href="<?php echo $section2['grid2']['button']['url'] ?>" class="moreBtn"><span><?php echo $section2['grid2']['button']['title'] ?></span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4 pb-1">
      <div class="col-12 col-lg-8 mb-4 mb-lg-0">
        <div class="box box-3 imgBg" style="background-image: url(<?php echo $section2['grid3']['background'] ?>">
          <div class="imgBg">
          </div>
          <div class="content">
            <div>
              <h1 class="title"><?php echo $section2['grid3']['title'] ?></h1>
              <p><?php echo $section2['grid3']['content'] ?></p>
            </div>
            <div class="moreBtnWrap">
              <a href="<?php echo $section2['grid3']['button']['url'] ?>" class="moreBtn"><span><?php echo $section2['grid3']['button']['title'] ?></span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="box box-2 noticeBox slickBox">
          <div class="dotContainer">
            <span class="boxTitle">CSR</span>
            <div id="dot"></div>
          </div>
          <div class="noticeSlider">
            <?php
            $crsPosts = get_posts(array(
              'numberposts' => 3,
              'post_type' => 'csr-activities',
              'post_status' => 'publish',
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
              )
            ));

            $crsNoticePosts = get_posts(array(
              'post_type'      => 'csr-activities',
              'meta_query'     => array(
                array(
                  'key'        => 'notice',
                  'value'      => '1',
                  'compare'    => '=',
                )
              )
            ));

            if (count($newsPosts) !== 0) {
              $slidePost = $crsPosts;
            } else {
              $slidePost = $crsNoticePosts;
            }

            foreach ($slidePost as $np) {
              $text = get_the_excerpt($np);
              $link = get_the_permalink($np);
              $slide = <<<HTML
                  <div class="slide">
                    <div class="content">
                      <a href="$link" class="title">$np->post_title</a>
                      <p>$text...</p>
                    </div>
                  </div>
HTML;
              echo $slide;
            }
            ?>
          </div>
          <script>
            $('.noticeSlider').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: true,
              dots: true,
              appendDots: $('.noticeBox .dotContainer #dot')
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</section>