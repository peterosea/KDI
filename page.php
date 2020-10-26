<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post();

    get_template_part('templates/partials/page-top'); ?>

    <section class="page-content-section content-section" id="post-<?php the_ID(); ?>">
      <?php the_content(); ?>
    </section>

<?php endwhile;

else :
  echo "컨텐츠가 없습니다";

endif;
?>


<?php
get_footer();
