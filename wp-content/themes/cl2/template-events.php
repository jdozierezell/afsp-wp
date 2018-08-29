<?php
/**
 * Template Name: Events Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<main class="main">
  <?php the_content(); ?>
</main>
<?php endwhile; ?>
