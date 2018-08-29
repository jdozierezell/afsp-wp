<main class="main">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php if (have_rows('ii_content_sections')) : while (have_rows('ii_content_sections')) : the_row(); ?>
  <div class="multi-content__wrapper">
    <h2 class="col-12"><?= get_sub_field('ii_section_title'); ?></h2>
    <div class="col-12">
      <?php if (get_sub_field('ii_section_type') === 'text') : 
        the_sub_field('ii_section_text'); 
      elseif (get_sub_field('ii_section_type') === 'list') :
        if (have_rows('ii_section_list')) : ?>
          <ul class="item-list">
            <?php while (have_rows('ii_section_list')) : the_row(); 
              include(locate_template('templates/page-list-item.php'));
            endwhile; ?>
          </ul>
      <?php endif;
      endif; ?>
    </div>
  </div>
  <?php endwhile;
  endif; ?>
</main>