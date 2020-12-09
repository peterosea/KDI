<?php
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page', 'header-fuze');
?>
<main class="templatePage fuzeArchive">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul>
          <?php
          $fuzePosts = get_posts(array(
            'post_type' => 'fuze',
            'post_status' => 'publish'
          ));

          foreach ($fuzePosts as $fuzep) {
            $thumbnail = get_the_post_thumbnail($fuzep->ID);
            $fuzePost = <<<fuzePost
              <li class="col-12 col-md-6">
                <div class="content">
                  <div class="id">$fuzep->post_id</div>
                  <div class="title">$fuzep->post_title</div>
                </div>
                <div class="thumbnail">$thumbnail</div>
              </li>
            fuzePost;
            echo $fuzePost;
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
