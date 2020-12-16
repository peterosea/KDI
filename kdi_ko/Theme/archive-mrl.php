<?php
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header-mrl');
?>
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
            $mrlPost = <<<HTML
              <li>
                <div class="content">
                  <div class="title">$mrlp->post_title</div>
                </div>
                <div class="thumbnail">$thumbnail</div>
              </li>
HTML;
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
