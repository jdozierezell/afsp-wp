<main class="main">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php $new_number = -1;
  include(locate_template('templates/whats-new.php')); ?>
</main>