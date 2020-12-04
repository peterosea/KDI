<?php
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header-fuse');
?>
<main class="templatePage fuseArchive cm1200">
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
