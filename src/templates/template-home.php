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
include($theme_url . '/template-parts/header/default.php');
?>
<main class="homePage">
  <?php include('template-home/section1.php') ?>
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
