<?php
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
?>
<header class="pageHeader d-none d-md-block">
  <div class="pageAttributeBox">
    <div class="title">다련장</div>
    <div class="description">
      고도의 기동성, 신속한 사격, 기습적 대량 화력 집중으로 <br />
      적 중심에 대한 신속한 타격 및 밀집된 표적을 제압 가능한 무기체계
    </div>
  </div>

  <figure class="post-thumbnail">
    <img src="/wp-content/uploads/2767.png" srcset="/wp-content/uploads/2767@2x.png 2x,
              /wp-content/uploads/2767@3x.png 3x">
  </figure>
</header>
<main class="templatePage mrlArchive">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul>
          <?php
          $mrlPosts = get_posts(array(
            'post_type' => 'mrl',
            'post_status' => 'publish'
          ));

          foreach ($mrlPosts as $mrlp) {
            $thumbnail = get_the_post_thumbnail($mrlp->ID);
            $mrlPost = <<<mrlPost
              <li>
                <div class="content">
                  <div class="title">$mrlp->post_title</div>
                </div>
                <div class="thumbnail">$thumbnail</div>
              </li>
            mrlPost;
            echo $mrlPost;
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
