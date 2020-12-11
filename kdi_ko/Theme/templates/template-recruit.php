<?php

/**
 * Template Name: recruit
 * Template Post Type: post, page
 */

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header');
?>
<main class="templatePage recruit">
  <div class="container">
    <div class="row class">
      <div class="col">
        <div class="borderBox">
          <div class="imgWrap">
            <img src="<? echo $img_url ?>/1100.png" srcset="<? echo $img_url ?>/1100@2x.png 2x, <? echo $img_url ?>/1100@3x.png 3x">
          </div>
          <div>
            <h2>신입채용</h2>
            <p>
              <span class="pointColor d-block">(주)코리아디펜스인더스트리의 미래를 함께 할 가슴 뜨거운 인재들을 기다리고 있습니다.</span>
              모집 시기와 인턴십 기간, 지원 대상은 부문별로 상이하니 세부 모집공고를 확인해 주시기 바랍니다.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row process">
      <div class="col-12 col-md-6 col-xl processWrap">
        <div class="round">
          <img src="<? echo $img_url ?>/1590.png" srcset="<? echo $img_url ?>/1590@2x.png 2x, <? echo $img_url ?>/1590@3x.png 3x">
        </div>
        <div class="title">
          1 원서접수
        </div>
        <p>
          채용 소요 발생시,<br />
          채용 전문사이트를 통해<br />
          원서를 접수합니다.
        </p>
      </div>

      <div class="col-12 col-md-6 col-xl processWrap">
        <div class="round">
          <img src="<? echo $img_url ?>/1588.png" srcset="<? echo $img_url ?>/1588@2x.png 2x, <? echo $img_url ?>/1588@3x.png 3x">
        </div>
        <div class="title">
          2 서류전형
        </div>
        <p>
          기본적인 자격요건과<br />
          자기소개서를 통해 1차적인<br />
          역량 검증을 진행합니다.
        </p>
      </div>

      <div class="col-12 col-md-6 col-xl processWrap">
        <div class="round">
          <img src="<? echo $img_url ?>/1587.png" srcset="<? echo $img_url ?>/1587@2x.png 2x, <? echo $img_url ?>/1587@3x.png 3x">
        </div>
        <div class="title">
          3 면접전형
        </div>
        <p>
          단계별 면접을 진행합니다.<br />
          직무역량과 인성, 조직적합성 등의<br />
          개인역량에 대해 심층 검증하는 단계입니다.<br />
          다양한 면접기법을 활용하여<br />
          모집부문에 맞는 인재를 찾기 위해 노력합니다.
        </p>
      </div>

      <div class="col-12 col-md-6 col-xl processWrap">
        <div class="round">
          <img src="<? echo $img_url ?>/1589.png" srcset="<? echo $img_url ?>/1589@2x.png 2x, <? echo $img_url ?>/1589@3x.png 3x">
        </div>
        <div class="title">
          4 최종합격
        </div>
        <p>
          건강검진 및 신원조회가 진행되며,<br />
          그 결과에 따라<br />
          최종합격을 확정합니다.
        </p>
      </div>

    </div>

    <div class="row class">
      <div class="col">
        <div class="borderBox">
          <div class="imgWrap">
            <img src="<? echo $img_url ?>/1570.png" srcset="<? echo $img_url ?>/1570@2x.png 2x, <? echo $img_url ?>/1570@3x.png 3x">
          </div>
          <div>
            <h2>경력채용</h2>
            <p>
              <span class="pointColor d-block">(주)코리아디펜스인더스트리를 더욱 뜨겁게 만들어 줄 인재들을 모집합니다.</span>
              모집 시기는 수시, 상시로 진행되며 지원 대상은 모집공고에 부합되는 경력이면 누구나 가능합니다.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row process">
      <div class="col-12 col-md-6 col-xl processWrap">
        <div class="round">
          <img src="<? echo $img_url ?>/1590.png" srcset="<? echo $img_url ?>/1590@2x.png 2x, <? echo $img_url ?>/1590@3x.png 3x">
        </div>
        <div class="title">
          1 원서접수
        </div>
        <p>
          채용 소요 발생시,<br />
          채용 전문사이트를 통해<br />
          원서를 접수합니다.
        </p>
      </div>

      <div class="col-12 col-md-6 col-xl processWrap">
        <div class="round">
          <img src="<? echo $img_url ?>/1588.png" srcset="<? echo $img_url ?>/1588@2x.png 2x, <? echo $img_url ?>/1588@3x.png 3x">
        </div>
        <div class="title">
          2 서류전형
        </div>
        <p>
          기본적인 자격요건과<br />
          자기소개서를 통해 1차적인<br />
          역량 검증을 진행합니다.
        </p>
      </div>

      <div class="col-12 col-md-6 col-xl processWrap">
        <div class="round">
          <img src="<? echo $img_url ?>/1587.png" srcset="<? echo $img_url ?>/1587@2x.png 2x, <? echo $img_url ?>/1587@3x.png 3x">
        </div>
        <div class="title">
          3 면접전형
        </div>
        <p>
          단계별 면접을 진행합니다.<br />
          직무역량과 인성, 조직적합성 등의<br />
          개인역량에 대해 심층 검증하는 단계입니다.<br />
          다양한 면접기법을 활용하여<br />
          모집부문에 맞는 인재를 찾기 위해 노력합니다.
        </p>
      </div>

      <div class="col-12 col-md-6 col-xl processWrap">
        <div class="round">
          <img src="<? echo $img_url ?>/1589.png" srcset="<? echo $img_url ?>/1589@2x.png 2x, <? echo $img_url ?>/1589@3x.png 3x">
        </div>
        <div class="title">
          4 최종합격
        </div>
        <p>
          건강검진 및 신원조회가 진행되며,<br />
          그 결과에 따라<br />
          최종합격을 확정합니다.
        </p>
      </div>

    </div>
  </div>
</main>
<?php
get_footer();
