<?php 
while (have_posts()) : the_post(); 
  if (get_field('ii_item_type') === 'file-image') :
    get_template_part('templates/single-items/file-image');
  elseif (get_field('ii_item_type') === 'text-multi') :
    get_template_part('templates/single-items/text-multi');
  elseif (get_field('ii_item_type') === 'video') :
    get_template_part('templates/single-items/video');
  endif;
endwhile; ?>
