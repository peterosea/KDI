<section class="section1">
  <div class="slider">
    <div class="slickSlideBg">
      <div>
        <div style="background-image: url(<?php echo $img_url ?>/10.jpg)"></div>
      </div>
    </div>
    <div class="slickSlideText">
      <div class="slide">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="title">
                안정적인 고객 만족 실현으로<br />
                신뢰받는 방산 체계업체
              </h1>
            </div>
          </div>
          <div class="row content">
            <div class="col">
              <span class="d-md-block dimText">고객에게 신뢰받는 방산업체로서 자주국방과</span>
              <span class="d-md-block dimText">세계평화의 기틀이 되도록 하겠습니다.</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="#" class="btn"><span>회사소개 바로가기</span></a>
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