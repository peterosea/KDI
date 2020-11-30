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
              <a href="#" class="moreBtn"><span>자세히보기</span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4 pb-1">
      <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="box box-2 newsBox slickBox">
          <div class="dotContainer">
            <span>news</span>
            <div id="dot"></div>
          </div>
          <div class="newsSlider">
            <?php
            $newsPosts = get_posts(array(
              'numberposts' => 3,
              'post_type' => 'news',
              'post_status' => 'publish'
            ));

            foreach ($newsPosts as $np) {
              $text = get_the_excerpt($np);
              $slide = <<<Slide
                  <div class="slide">
                    <div class="content">
                      <h1 class="title">$np->post_title</h1>
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
        <div class="box box-3 imgBg" style="background-image: url(<?php echo $img_url ?>/pc-004021816-1.jpg)">
          <div class="imgBg">
          </div>
          <div class="content">
            <div>
              <h1 class="title">230mm급 무유도탄</h1>
              <p>천무 발사대에서 운용가능한 <br />
                지역제압용 무유도로켓</p>
            </div>
            <div class="moreBtnWrap">
              <a href="#" class="moreBtn"><span>자세히보기</span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
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
              <h1 class="title">230mm급 무유도탄</h1>
              <p>천무 발사대에서 운용가능한 <br />
                지역제압용 무유도로켓</p>
            </div>
            <div class="moreBtnWrap">
              <a href="#" class="moreBtn"><span>자세히보기</span> <img src="<?php echo $img_url ?>/10.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="box box-2 noticeBox slickBox">
          <div class="dotContainer">
            <span>news</span>
            <div id="dot"></div>
          </div>
          <div class="noticeSlider">
            <?php
            $noticePosts = get_posts(array(
              'numberposts' => 3,
              'post_type' => 'notice',
              'post_status' => 'publish'
            ));

            foreach ($noticePosts as $np) {
              $text = get_the_excerpt($np);
              $slide = <<<Slide
                  <div class="slide">
                    <div class="content">
                      <h1 class="title">$np->post_title</h1>
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
    <div class="row mb-4 pb-1 d-none">
      <div class="col-12">
        <div class="container introduce py-4 px-4 py-md-5 px-md-5">
          <div class="row">
            <div class="col-12 col-md-5 d-none d-sm-block">
              <div class="imgBox">
                <img src="<?php echo $img_url ?>/1566.svg" alt="">
              </div>
            </div>
            <div class="col-12 col-md-7 py-4">
              <div>
                <h1 class="title">
                  본사/사업장 소개
                </h1>
                <p>
                  <span class="d-lg-block">KDI는 차세대 유도무기와 탄약 지능화를 연구하는 연구소와</span>
                  <span class="d-lg-block"> 각 사업장 별로 특성화 품목 생산과 연구개발을 진행하고 있습니다.</span>
                </p>
                <div class="imgBox d-flex d-sm-none">
                  <img src="<?php echo $img_url ?>/1566.svg" alt="">
                </div>
              </div>
              <div class="py-4"></div>
              <ul>
                <li>
                  <div class="number">1</div>
                  <div class="content">
                    <b>본사</b>
                    <span>세종특별자치시 세종로 1229</span>
                  </div>
                </li>
                <li>
                  <div class="number">2</div>
                  <div class="content">
                    <b>대전공장</b>
                    <span>대전광역시 유성구 외삼로</span>
                  </div>
                </li>
                <li>
                  <div class="number">3</div>
                  <div class="content">
                    <b>연구소/개발지원실</b>
                    <span>대전광역시 유성구 유성대로</span>
                  </div>
                </li>
                <li>
                  <div class="number">4</div>
                  <div class="content">
                    <b>구미공장</b>
                    <span>경상북도 구미시 산호대로</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>