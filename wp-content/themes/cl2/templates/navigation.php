<div class="sidebar-nav" id="sidebar">
  <div class="sidebar-nav__mobile-close" id="close-mobile">
    <a class="btn btn--rounded bg-white" href="#">Close</a>
  </div>
  <div class="sidebar-nav__buttons">
    <a class="btn color-poppy" href="<?= get_home_url() . '/your-favorites'; ?>" title="Your Favorites">
      <i class="far fa-heart"></i>
    </a>
    <a class="btn color-yellow" href="<?= get_home_url() . '/whats-new'; ?>" title="What's New on ChapterLand">
      <i class="far fa-star"></i>
    </a>
    <a class="btn color-brand-blue" href="<?= wp_logout_url(); ?>" title="Logout">
      <i class="far fa-sign-out"></i>
    </a>
  </div>
  <?php
    wp_nav_menu(array(
      'theme_location' => 'primary_navigation',
      'menu_class' => 'sidebar-nav__links',
      'menu_id' => 'primary-navigation',
      'container' => false,
      'walker' => new Primary_Navigation_Walker(),
    ));
  ?>
</div>