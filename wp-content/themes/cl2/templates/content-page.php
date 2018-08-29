<main class="main">
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="page-description"><?= get_field('pd_description'); ?></div>
  <?php $current_page_slug = get_post_field('post_name', get_post());
  $args = array(
    'post_type' => array('page', 'item'),
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'title',
    'tax_query' => array(
        array(
            'taxonomy' => 'active_page',
            'field' => 'slug',
            'terms' => $current_page_slug
        ),
        array(
            'taxonomy' => 'access_level',
            'field' => 'slug',
            'terms' => role_permissions()
        )
    )
  );
  $items = new WP_Query($args); ?>
  <?php if ($items->have_posts()) : ?>
    <?php include(locate_template('templates/page-list.php')); ?>
  <?php endif; ?>
</main>