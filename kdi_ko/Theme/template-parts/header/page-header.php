<?php if (is_singular() && twentynineteen_can_show_post_thumbnail()) : ?>
  <header class="pageHeader d-none d-lg-block">
    <div class="pageAttributeBox">
      <div class="title">
        <?php single_post_title(); ?>
      </div>
      <div class="description">
        <?php echo get_field('description'); ?>
      </div>
    </div>
    <?php
    twentynineteen_post_thumbnail();
    include('ieHeaderCover.php');
    ?>
  </header>
<?php endif; ?>