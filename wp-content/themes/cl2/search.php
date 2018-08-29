<main class="main">
  <?php get_template_part('templates/page', 'header'); ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found. Please try your search again.', 'sage'); ?>
    </div>
  <?php else : ?>
    <ul class="item-list">
      <?php while (have_posts()) : the_post(); 
        if (!has_children($post->ID) && get_the_ID() !== 120 && get_the_ID() !== 119) : // don't display pages that have children (and thus no content) or specific favorites or what's new pages
          include(locate_template('templates/page-list-item.php')); 
        endif;
      endwhile; ?>
    </ul>
  <?php endif; ?>

  <?php the_posts_navigation(); ?>
</main>
