<?php

function introduce()
{
  $img_url = get_home_url() . '/wp-content/uploads';
  $container = <<<HTML
<div class="container introduce py-4 px-4 py-md-5 px-md-5">
  <div class="row">
    <div class="col d-none d-lg-block">
      <div class="imgBox">
        <img src="$img_url/1566.svg" alt="">
      </div>
    </div>
    <div class="col-12 col-lg-7 py-4">
      <div>
        <h1 class="title">
          본사/사업장 소개
        </h1>
        <div class="imgBox d-flex d-lg-none">
          <img src="$img_url/1566.svg" alt="">
        </div>
      </div>
      <div class="py-4"></div>
      <ul>
        <li>
          <div class="number"><span>1</span></div>
          <div class="content">
            <b>본사</b>
            <span>세종특별자치시 세종로 1229</span>
          </div>
        </li>
        <li>
          <div class="number"><span>2</span></div>
          <div class="content">
            <b>대전공장</b>
            <span>대전광역시 유성구 외삼로</span>
          </div>
        </li>
        <li>
          <div class="number"><span>3</span></div>
          <div class="content">
            <b>연구소/개발지원실</b>
            <span>대전광역시 유성구 유성대로</span>
          </div>
        </li>
        <li>
          <div class="number"><span>4</span></div>
          <div class="content">
            <b>구미공장</b>
            <span>경상북도 구미시 산호대로</span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
HTML;
  return $container;
}
add_shortcode('introduce_map', 'introduce');
