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
                <span class="d-md-block dimText">고객에게 신뢰받는 방산업체로서 자주국방과</span>
                <span class="d-md-block dimText">세계평화의 기틀이 되도록 하겠습니다.</span>
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
          dots: false,
          dotsClass: 'slick-dots container',
          asNavFor: '.slickSlideBg'
        });
      </script>
    </div>
  </section>
  <?php include('template-home/section2.php') ?>
  <section class="section3">
    <div class="container">
      <div class="row mb-5">
        <div class="col">
          <h1 class="title">조직도</h1>
          <p>
            <span class="d-md-block">KDI는 차세대 유도무기와 탄약 지능화를 연구하는 연구소와</span>
            <span class="d-md-block">각 사업장 별로 특성화 품목 생산과 연구개발을 진행하고 있습니다.</span>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col d-none d-lg-block">
          <img src="<?php echo $img_url ?>/1565.png" alt="">
        </div>
        <div class="col d-lg-none">
          <img src="<?php echo $img_url ?>/1568.png" alt="">
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
