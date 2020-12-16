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
              <h1 class="title">차기다련장체계(천무)</h1>
              <p>보병 전력증강을 위한<br />
                장사거리/고정밀 유도로켓</p>
            </div>
            <div class="moreBtnWrap">
              <a href="/mrl/" class="moreBtn"><span>자세히보기</span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4 pb-1">
      <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="box box-2 newsBox slickBox">
          <div class="dotContainer">
            <span class="boxTitle">KDI 소식</span>
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
        <div class="box box-3 imgBg" style="background-image: url(<?php echo $img_url ?>/pc-004021816-1.jpg)">
          <div class="imgBg">
          </div>
          <div class="content">
            <div>
              <h1 class="title">230mm급무유도탄</h1>
              <p>천무 발사대에서 운용가능한 <br />
                지역제압용 무유도로켓</p>
            </div>
            <div class="moreBtnWrap">
              <a href="/mrl" class="moreBtn"><span>자세히보기</span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4 pb-1">
      <div class="col-12 col-lg-8 mb-4 mb-lg-0">
        <style>
          .sds81678273 {
            background-image: url(<?php echo $img_url ?>/2827.jpg);
          }

          @media screen and (min-width: 992px) {
            .sds81678273 {
              background-image: url(<?php echo $img_url ?>/2820.jpg);
            }
          }
        </style>
        <div class="box box-3 imgBg sds81678273">
          <div class="imgBg">
          </div>
          <div class="content">
            <div>
              <h1 class="title">전자식시한신관 등 신관류</h1>
              <p>탄약이 요구하는 시간과 <br />
                장소에서 작약을 폭발시키는 점화장치</p>
            </div>
            <div class="moreBtnWrap">
              <a href="/fuze" class="moreBtn"><span>자세히보기</span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="box box-2 noticeBox slickBox">
          <div class="dotContainer">
            <span class="boxTitle">사회공헌</span>
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