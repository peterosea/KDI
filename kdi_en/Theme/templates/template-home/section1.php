<section class="section1">
  <div class="slider">
    <div class="slickSlideBg">
      <div>
        <div style="background-image: url(<?php echo $img_url ?>/10.jpg)">
          <img src="<?php echo $img_url ?>/10.jpg">
        </div>
      </div>
    </div>
    <div class="slickSlideText">
      <div class="slide">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="title">
                Defense company trusted by realizing<br />
                customer satisfaction
              </h1>
            </div>
          </div>
          <div class="row content">
            <div class="col">
              <span>
                We will become the defense company trusted by customers for independent defense and world peace.
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="/ceo-greetings/" class="btn"><span>About KDI</span></a>
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