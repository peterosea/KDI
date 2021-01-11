<?php
$section1 = get_field('section1');
?>
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
                <?php echo $section1['title'] ?>
              </h1>
            </div>
          </div>
          <div class="row content">
            <div class="col dimText">
              <?php echo $section1['content'] ?>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="<?php echo $section1['button']['url'] ?>" class="btn"><span><?php echo $section1['button']['title'] ?></span></a>
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