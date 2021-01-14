<?php
$data = get_field(get_post_type(), 'option');
?>
<title><?php echo post_type_archive_title('', false); ?> - KDI lnd.</title>
<header class="pageHeader d-none d-lg-block">
  <div class="pageAttributeBox">
    <div class="title">
      <?php echo post_type_archive_title('', false); ?>
    </div>
    <div class="description">
      <?php echo $data['content'] ?>
    </div>
  </div>
  <figure class="post-thumbnail">
    <?php

    $imgUrl = wp_get_attachment_image_url($data['header_img'], 'full');
    // image src
    $srcset = get_field('srcset', $data['header_img']);
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
    echo <<<HTML
  <img src="$imgUrl" alt="" $srcsetResult>
HTML;
    ?>
  </figure>
  <?php include('ieHeaderCover.php'); ?>
</header>