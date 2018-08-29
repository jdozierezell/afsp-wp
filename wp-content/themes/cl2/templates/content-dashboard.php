<main class="main">
  <?php get_template_part('templates/page', 'header'); ?>
  <h2>What's New</h2>
    <?php $new_number = 4;
    include(locate_template('templates/whats-new.php')); ?>
    <h3><a href="<?= get_home_url(); ?>/whats-new">See More of What's New</a></h3>
  <h2>Your Favorites</h2>
  <ul class="item-list">
    <?php do_shortcode('[user_favorites]'); ?>    
  </ul>
  <h3><a href="<?= get_home_url(); ?>/your-favorites">See More of Your Favorites</a></h3>
  <?php if (have_rows('fi_featured_items')) : ?>
    <h2>Featured Items</h2>
    <ul class="item-list">
    <?php while (have_rows('fi_featured_items')) : the_row();
      include(locate_template('templates/featured.php')); 
    endwhile; ?>
    </ul>
  <?php endif; ?>

</main>