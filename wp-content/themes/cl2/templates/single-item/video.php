<main class="main main--single-item">
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="col-12">
    <div class="video__wrapper">
      <?php $src = 'https://';
      if (get_field('ii_video_host') === 'youtube') :
        $src .= 'www.youtube-nocookie.com/embed/' . get_field('ii_video_id');
      elseif (get_field('ii_video_host') === 'vimeo') :
        $src .= 'player.vimeo.com/video/' . get_field('ii_video_id');
      endif; ?>
      <iframe width="560" height="315" src="<?= $src; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  <div class="col-12">
    <?= get_field('ii_item_description'); ?>
  </div>
</main>