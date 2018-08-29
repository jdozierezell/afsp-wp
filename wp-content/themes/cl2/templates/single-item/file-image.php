<main class="main main--single-item">
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="img-container__main m-col-6">
    <?php $image = get_field('ii_image_upload');
    if (!empty($image)) : ?>
      <img class="img--full" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
    <?php endif; ?>
  </div>
  <div class="m-col-6">
    <?php get_template_part('templates/entry-meta'); ?>
    <?= get_field('ii_item_description'); ?>
  </div>
</main>