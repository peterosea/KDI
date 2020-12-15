<section class="section2">
  <div class="container">
    <div class="row mb-4 pb-1">
      <div class="col-12">
        <div class="box box-1">
          <div class="imgBg" style="background-image:url(<?php echo $img_url ?>/1564.jpg)">
            <img src="<?php echo $img_url ?>/1564.jpg" alt="">
          </div>
          <div class="content">
            <div>
              <h1 class="title">Multi launch rocket system Chunmoo</h1>
              <p>Long range/high-precision guided rocket<br /> for enhancing infantry.</p>
            </div>
            <div class="moreBtnWrap">
              <a href="/mrl/" class="moreBtn"><span>Read more</span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
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

            foreach ($newsPosts as $np) {
              $text = get_the_excerpt($np);
              $link = get_the_permalink($np);
              $slide = <<<Slide
                  <div class="slide">
                    <div class="content">
                      <a href="$link" class="title">$np->post_title</a>
                      <p>$text...</p>
                    </div>
                  </div>
                Slide;
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
        <div class="box box-3 imgBg" style="background-image: url(<?php echo $img_url ?>/image3-min.png)">
          <div class="imgBg">
          </div>
          <div class="content">
            <div>
              <h1 class="title">230mm class unguided rocket</h1>
              <p>
                Unguided rocket for regional suppression<br /> that can be operated at the Cheonmu launcher
              </p>
            </div>
            <div class="moreBtnWrap">
              <a href="/mrl" class="moreBtn"><span>Read more</span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4 pb-1">
      <div class="col-12 col-lg-8 mb-4 mb-lg-0">
        <div class="box box-3 imgBg" style="background-image: url(<?php echo $img_url ?>/2820.jpg)">
          <div class="imgBg">
          </div>
          <div class="content">
            <div>
              <h1 class="title">Fuze</h1>
              <p>Ignition device to explode at the time and<br /> place the ammunition requires</p>
            </div>
            <div class="moreBtnWrap">
              <a href="/fuze" class="moreBtn"><span>Read more</span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
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
            $noticePosts = get_posts(array(
              'numberposts' => 3,
              'post_type' => 'philanthropy',
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

            foreach ($noticePosts as $np) {
              $text = get_the_excerpt($np);
              $link = get_the_permalink($np);
              $slide = <<<Slide
                  <div class="slide">
                    <div class="content">
                      <a href="$link" class="title">$np->post_title</a>
                      <p>$text...</p>
                    </div>
                  </div>
                Slide;
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