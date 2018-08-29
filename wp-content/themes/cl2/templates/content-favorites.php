<main class="main">
  <?php get_template_part('templates/page', 'header');
  // the favorites display is handled via a shortcode. To change the layout of the favorite's list, check out the favorites.php file in the lib folder ?>
    <ul class="item-list">
      <?php do_shortcode('[user_favorites]'); ?>    
    </ul>
</main>