<?php

/**
 * Template Name: Home
 * Template Post Type: post, page
 */

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
// funtions
include($functions_url . '/template_bootstrap.php');
include($functions_url . '/template_slickslide.php');
include($functions_url . '/template_home.php');
get_header();

// main
include($theme_url . '/template-parts/header/temp.php');
?>
<main class="homePage">
  <section class="section1">
    <div class="slider">
      <div class="slickSlideBg">
        <div>
          <img src="<?php echo $img_url ?>/10.jpg" alt="">
        </div>
        <div>
          <img src="<?php echo $img_url ?>/10.jpg" alt="">
        </div>
      </div>
      <div class="slickSlideText">
        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col">
                <h1 class="title">안정적인 고객 만족 실현으로<br />
                  신뢰받는 방산 체계업체</h1>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <span class="dimText">고객에게 신뢰받는 방산업체로서 자주국방과<br />
                  세계평화의 기틀이 되도록 하겠습니다.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col">
                <span class="title">안정적인 고객 만족 실현으로<br />
                  신뢰받는 방산 체계업체</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        $('.slickSlideBg').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.slickSlideText'
        });
        $('.slickSlideText').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: true,
          dotsClass: 'slick-dots container',
          asNavFor: '.slickSlideBg'
        });
      </script>
    </div>
  </section>
  <section class="section2">
    <div class="container">
      <div class="row mb-4 pb-1">
        <div class="col-12">
          <div class="box box-1">
            <div class="imgBg">
              <img src="<?php echo $img_url ?>/1564.jpg" alt="">
            </div>
            <div class="content">
              <h1 class="title">차기다련장체계(천무)</h1>
              <p>보병 전력증강을 위한<br />
                장사거리/고정밀 유도로켓</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4 pb-1">
        <div class="col-12 col-md-6">
          <div class="box box-2">
            <div class="imgBg">
              <img src="<?php echo $img_url ?>/1567.jpg" alt="">
            </div>
            <div class="content">
              <h1 class="title">전자식시한신관 등 신관류</h1>
              <p>탄약이 요구하는 시간과 <br />
                장소에서 작약을 폭발시키는 점화장치</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="box box-3">
            <div class="imgBg">
              <img src="<?php echo $img_url ?>/pc-004021816.jpg" alt="">
            </div>
            <div class="content">
              <h1 class="title">230mm급 무유도탄</h1>
              <p>천무 발사대에서 운용가능한 <br />
                지역제압용 무유도로켓</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4 pb-1">
        <div class="col-12">
          <div class="container introduce py-0 px-0 py-md-5 px-md-5">
            <div class="row">
              <div class="col-5">
                <img src="<?php echo $img_url ?>/1566.svg" alt="">
              </div>
              <div class="col-7 py-4">
                <h1 class="title">
                  본사/사업장 소개
                </h1>
                <p>
                  ㈜한화 방산부문은 차세대 유도무기와 탄약 지능화를 연구하는 종합연구소와
                  각 사업장 별로 특성화 품목 생산과 연구개발을 진행하고 있습니다.
                </p>
                <div class="py-4"></div>
                <ul>
                  <li>
                    <div class="number">1</div>
                    <b>본사</b>
                    <span>세종특별자치시 세종로 1229</span>
                  </li>
                  <li>
                    <div class="number">2</div>
                    <b>대전공장</b>
                    <span>대전광역시 유성구 외삼로</span>
                  </li>
                  <li>
                    <div class="number">3</div>
                    <b>연구소/개발지원실</b>
                    <span>대전광역시 유성구 유성대로</span>
                  </li>
                  <li>
                    <div class="number">4</div>
                    <b>구미공장</b>
                    <span>경상북도 구미시 산호대로</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section3">
    <div class="container">
      <div class="row mb-5">
        <div class="col">
          <h1 class="title">조직도</h1>
          <p>
            <span class="d-md-block">㈜한화 방산부문은 차세대 유도무기와 탄약 지능화를 연구하는 종합연구소와</span>
            <span class="d-md-block">각 사업장 별로 특성화 품목 생산과 연구개발을 진행하고 있습니다.</span>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img src="<?php echo $img_url ?>/1565.svg" alt="">
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
