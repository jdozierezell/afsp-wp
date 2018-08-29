<?php
/**
 * Template Name: Quilt Display v2
 *
 * @package afsp
 */
 
get_header(); 
get_template_part('template-parts/title'); ?>

<section class="quilt__intro">
  <h1 class="landing__title"><?php the_title(); ?></h1>
  <?php if(have_posts()) : while(have_posts()) : the_post(); 
      the_content();
    endwhile;
  endif; ?>
  <div class="search-box">
    <form role="search" method="get" class="search-form" action="<?php echo get_permalink( 21526 ); ?>">
      <label>
        <span class="screen-reader-text">Search the Quilt</span>
        <input type="search" class="search-field" placeholder="Click to search ..." value="" name="quiltquery" title="Search the Quilt">
      </label>
      <input type="submit" class="search-submit" value="Search">
    </form>
  </div>
</section>		
<?php // Current Page
$quilt_default = get_permalink();
$current_page = get_query_var('page') ? get_query_var('page') : 1;

// WP_Query arguments
$args = array(
	'post_type'              => array('quilt_square'),
	'post_status'            => array('publish'),
	'paged'                  => get_query_var('page'),
	'posts_per_page'         => '24',
	'order'                  => 'DESC',
	'orderby'                => 'date',
);

// The Query
$quilt_query = new WP_Query($args);

// The Loop
if ($quilt_query->have_posts()) : ?>
  <section class="quilt__gallery2">
	<?php while ($quilt_query->have_posts()) : $quilt_query->the_post();
    $image = get_field('q_square');
    $image_array = wp_get_attachment_image_src($image['id']);
    $src = $image_array[0];
    if($pos = strpos($src, '?') !== false) :
      $src = strstr($src, '?', true);
    endif;?>
    <div class="quilt__square">
      <a href="<?= get_the_permalink(); ?>" class="quilt__link">
        <img src="<?php echo $src; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php the_title(); ?>" />
        <h3 class="quilt__square-title"><?php the_title(); ?></h3>
      </a>
    </div>
  <?php endwhile; ?>
  </section>
  <section class="quilt__navigation">
    <?php if ($current_page > 1) : ?>
      <a href="<?= $quilt_default . ($current_page - 1); ?>"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;View Previous Quilt Squares</a>
    <?php endif;
    if ($current_page < $quilt_query->max_num_pages) : ?>
      <a href="<?= $quilt_default . ($current_page + 1); ?>">View Next Quilt Squares&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
    <?php endif; ?>
  </section>
<?php endif;

// Restore original Post Data
wp_reset_postdata(); ?>

<?php get_footer(); ?>