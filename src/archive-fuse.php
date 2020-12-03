<?php
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
?>
<header class="pageHeader d-none d-md-block">
  <div class="pageAttributeBox">
    <div class="title">신관</div>
    <div class="description">
      탄약이 요구하는 시간과 장소에서<br />
      작약을 폭발시키는 점화장치
    </div>
  </div>

  <figure class="post-thumbnail">
    <img src="/wp-content/uploads/2767@3x.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="/wp-content/uploads/2767@3x.jpg 1568w, /wp-content/uploads/milky-way-1023340_1920pg 300w, /wp-content/uploads/milky-way-1023340_1920jpg 1024w, /wp-content/uploads/milky-way-1023340_1920pg 768w, /wp-content/uploads/2767@3x.jpg 1536w, /wp-content/uploads/milky-way-1023340_1920" sizes="(max-width: 1568px) 100vw, 1568px"> </figure><!-- .post-thumbnail -->
</header>
<main class="templatePage fuseArchive">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul>
          <?php
          $fusePosts = get_posts(array(
            'post_type' => 'fuse',
            'post_status' => 'publish'
          ));

          foreach ($fusePosts as $fusep) {
            $thumbnail = get_the_post_thumbnail($fusep->ID);
            $fusePost = <<<fusePost
              <li class="col-12 col-md-6">
                <div class="content">
                  <div class="id">$fusep->post_id</div>
                  <div class="title">$fusep->post_title</div>
                </div>
                <div class="thumbnail">$thumbnail</div>
              </li>
            fusePost;
            echo $fusePost;
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();