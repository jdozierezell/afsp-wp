<?php // loop over query ?>
  <ul class="item-list">
    <?php while ($items->have_posts()) : $items->the_post();
      include(locate_template('templates/page-list-item.php'));
    endwhile; ?>
  </ul>