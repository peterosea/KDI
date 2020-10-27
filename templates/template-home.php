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
</main>
<?php
get_footer();