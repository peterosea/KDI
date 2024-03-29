<?php
$img_url = get_home_url() . '/wp-content/uploads';
$classes = 'entry-header';
if (!empty($discussion) && absint($discussion->responses) > 0) {
  $classes = 'entry-header has-discussion';
}
?>
<header class="<?php echo $classes; ?>">
  <nav class="header-default d-none d-md-block">
    <div class="container-fluid">
      <a href="/" class="logo">
        <img src="<?php echo $img_url ?>/1573.png" srcset="<?php echo $img_url ?>/1573@2x.png 2x, <?php echo $img_url ?>/1573@3x.png 3x">
      </a>
      <?php wp_nav_menu() ?>
      <?php
      $lo_link = '/en';
      if (get_locale() == 'en_US')
        $lo_link = '/';
      ?>
      <a href="<?php echo $lo_link ?>" class="translate">
        <span>한글/Eng</span>
      </a>
    </div>
  </nav>
  <nav class="header-default-mobile d-md-none">
    <div class="headerOrigin">
      <a href="/" class="logo">
        <img src="<?php echo $img_url ?>/1573.png" srcset="<?php echo $img_url ?>/1573@2x.png 2x, <?php echo $img_url ?>/1573@3x.png 3x">
      </a>
      <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" id="icon-40-리스트" width="40" height="40" viewBox="0 0 40 40">
          <defs>
            <style>
              .cls-2 {
                fill: #fff
              }
            </style>
          </defs>
          <path id="사각형_3090" fill="none" d="M0 0H40V40H0z" />
          <g id="그룹_2810" transform="translate(-652 -2500)">
            <rect id="사각형_3964" width="16" height="4" class="cls-2" rx="1" transform="translate(664 2510)" />
            <rect id="사각형_3965" width="16" height="4" class="cls-2" rx="1" transform="translate(664 2518)" />
            <rect id="사각형_3966" width="16" height="4" class="cls-2" rx="1" transform="translate(664 2526)" />
          </g>
        </svg>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="header">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
            <path fill="none" d="M0 0H40V40H0z" />
            <path fill="#fff" d="M802.857 230l7.155-7.155a1.667 1.667 0 0 0-2.357-2.357l-7.155 7.155-7.155-7.155a1.667 1.667 0 0 0-2.357 2.357l7.155 7.155-7.155 7.155a1.667 1.667 0 0 0 2.357 2.357l7.155-7.155 7.155 7.155a1.667 1.667 0 0 0 2.357-2.357z" transform="translate(-780.5 -210)" />
          </svg>
        </div>
        <div class="menuBox">
          <ul class="menuList">
            <?php
            $primaryNav = wp_get_nav_menu_items(2);
            foreach ($primaryNav as $navItem) {
              $current = ($navItem->object_id == get_queried_object_id()) ? 'current' : '';
              if (empty($navItem->menu_item_parent)) {
                echo '<li class="dropdownItem ' . $current . '"><a href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
              }
            }
            ?>
          </ul>
          <hr>
          <ul class="translate">
            <li>
              <a href="/" class="ko <?php echo get_locale() ?>">
                <span>한글</span>
              </a>
            </li>
            <li>
              <a href="/en" class="en quickBtn <?php echo get_locale() ?>">English</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="fixedSubmenu">
      <?php wp_nav_menu() ?>
    </div>
  </nav>
</header>