<?php

/**
 * Template Name: 채용 페이지 템플릿
 * Template Post Type: page
 */

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header');

$career_recruitment = get_field('career_recruitment');
$new_recruitment = get_field('new_recruitment');
?>
<main class="templatePage recruit">
  <div class="container">
    <div class="row class">
      <div class="col">
        <div class="borderBox">
          <div class="imgWrap">
            <img src="<?php echo $img_url ?>/1100.png" srcset="<?php echo $img_url ?>/1100@2x.png 2x, <?php echo $img_url ?>/1100@3x.png 3x">
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
      <?php foreach ($new_recruitment as $nr) : ?>
        <div class="col-12 col-md-6 col-xl processWrap">
          <?php
          $img = wp_get_attachment_image_url($nr['img']);
          $title = $nr['title'];
          $content = $nr['content'];
          // image src
          $srcset = get_field('srcset', $nr['img']);
          $srcsetInstance = array();
          if (!empty($srcset)) {
            foreach ($srcset as $src) {
              unset($src['acf_fc_layout']);
              array_push($srcsetInstance, join(' ', $src));
            }
          }
          if (count($srcsetInstance) === 0) {
            $srcsetResult = '';
          } else $srcsetResult = 'srcset="' . join(',', $srcsetInstance) . '"';
          // option render
          $list = '';
          if (!empty($nr['more'])) {
            foreach ($nr['more'] as $nr_more) :
              $more_title = $nr_more['title'];
              $url = $nr_more['url'];
              $listItem = <<<HTML
              <li>
                <a href="$url">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.997 511.997" style="enable-background:new 0 0 511.997 511.997;" xml:space="preserve">
                      <path d="M211.26,389.24l-60.331,60.331c-25.012,25.012-65.517,25.012-90.508,0.005c-24.996-24.996-24.996-65.505-0.005-90.496
                        l120.683-120.683c24.991-24.992,65.5-24.992,90.491,0c8.331,8.331,21.839,8.331,30.17,0c8.331-8.331,8.331-21.839,0-30.17
                        c-41.654-41.654-109.177-41.654-150.831,0L30.247,328.909c-41.654,41.654-41.654,109.177,0,150.831
                        c41.649,41.676,109.177,41.676,150.853,0l60.331-60.331c8.331-8.331,8.331-21.839,0-30.17S219.591,380.909,211.26,389.24z"/>
                      <path d="M479.751,30.24c-41.654-41.654-109.199-41.654-150.853,0l-72.384,72.384c-8.331,8.331-8.331,21.839,0,30.17
                        c8.331,8.331,21.839,8.331,30.17,0l72.384-72.384c24.991-24.992,65.521-24.992,90.513,0c24.991,24.991,24.991,65.5,0,90.491
                        L316.845,283.638c-24.992,24.992-65.5,24.992-90.491,0c-8.331-8.331-21.839-8.331-30.17,0s-8.331,21.839,0,30.17
                        c41.654,41.654,109.177,41.654,150.831,0l132.736-132.736C521.405,139.418,521.405,71.894,479.751,30.24z"/>
                    </svg>
                    <span>$more_title</span>
                </a>
              </li>
HTML;
              $list .= $listItem;
            endforeach;
          }
          // HTML Render
          $processHtml = <<<HTML
            <div class="round">
              <img src="$img" alt="" $srcsetResult>
            </div>
            <div class="title">$title</div>
            <p>$content</p>
            <ul>
            $list
            </ul>
  HTML;
          echo $processHtml;
          ?>
        </div>
      <?php endforeach ?>
    </div>

    <div class="row class">
      <div class="col">
        <div class="borderBox">
          <div class="imgWrap">
            <img src="<?php echo $img_url ?>/1570.png" srcset="<?php echo $img_url ?>/1570@2x.png 2x, <?php echo $img_url ?>/1570@3x.png 3x">
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
      <?php foreach ($career_recruitment as $cr) : ?>
        <div class="col-12 col-md-6 col-xl processWrap">
          <?php
          $img = wp_get_attachment_image_url($cr['img']);
          $title = $cr['title'];
          $content = $cr['content'];
          // image src
          $srcset = get_field('srcset', $cr['img']);
          $srcsetInstance = array();
          if (!empty($srcset)) {
            foreach ($srcset as $src) {
              unset($src['acf_fc_layout']);
              array_push($srcsetInstance, implode(' ', $src));
            }
          }
          if (count($srcsetInstance) === 0) {
            $srcsetResult = '';
          } else $srcsetResult = 'srcset="' . implode(',', $srcsetInstance) . '"';
          // option render
          $list = '';
          if (!empty($nr['more'])) {
            foreach ($nr['more'] as $nr_more) :
              $title = $nr_more['title'];
              $url = $nr_more['url'];
              $listItem = <<<HTML
              <li>
                <a href="$url">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.997 511.997" style="enable-background:new 0 0 511.997 511.997;" xml:space="preserve">
                      <path d="M211.26,389.24l-60.331,60.331c-25.012,25.012-65.517,25.012-90.508,0.005c-24.996-24.996-24.996-65.505-0.005-90.496
                        l120.683-120.683c24.991-24.992,65.5-24.992,90.491,0c8.331,8.331,21.839,8.331,30.17,0c8.331-8.331,8.331-21.839,0-30.17
                        c-41.654-41.654-109.177-41.654-150.831,0L30.247,328.909c-41.654,41.654-41.654,109.177,0,150.831
                        c41.649,41.676,109.177,41.676,150.853,0l60.331-60.331c8.331-8.331,8.331-21.839,0-30.17S219.591,380.909,211.26,389.24z"/>
                      <path d="M479.751,30.24c-41.654-41.654-109.199-41.654-150.853,0l-72.384,72.384c-8.331,8.331-8.331,21.839,0,30.17
                        c8.331,8.331,21.839,8.331,30.17,0l72.384-72.384c24.991-24.992,65.521-24.992,90.513,0c24.991,24.991,24.991,65.5,0,90.491
                        L316.845,283.638c-24.992,24.992-65.5,24.992-90.491,0c-8.331-8.331-21.839-8.331-30.17,0s-8.331,21.839,0,30.17
                        c41.654,41.654,109.177,41.654,150.831,0l132.736-132.736C521.405,139.418,521.405,71.894,479.751,30.24z"/>
                    </svg>
                    <span>$title</span>
                </a>
              </li>
HTML;
              $list .= $listItem;
            endforeach;
          }
          // HTML Render
          $processHtml = <<<HTML
            <div class="round">
              <img src="$img" alt="" $srcsetResult>
            </div>
            <div class="title">$title</div>
            <p>$content</p>
            <ul>
              $list
            </ul>
  HTML;
          echo $processHtml;
          ?>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</main>
<?php
get_footer();
