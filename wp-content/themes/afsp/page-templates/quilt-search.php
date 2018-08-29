<?php
/**
 * Template Name: Quilt Search Results
 *
 * @package afsp
 */

global $post;
// retrieve our search query if applicable
$query = isset( $_REQUEST['quiltquery'] ) ? sanitize_text_field( $_REQUEST['quiltquery'] ) : '';

// retrieve our pagination if applicable
$swppg = isset( $_REQUEST['swppg'] ) ? absint( $_REQUEST['swppg'] ) : 1;

if ( class_exists( 'SWP_Query' ) ) {
	$engine = 'quilt'; // taken from the SearchWP settings screen
	$quilt_query = new SWP_Query(
		// see all args at https://searchwp.com/docs/swp_query/
		array(
			's'      => $query,
			'engine' => $engine,
      'page'   => $swppg,
      'posts_per_page' => 36,
		)
	);
	// set up pagination
	$pagination = paginate_links( array(
		'format'  => '?swppg=%#%',
		'current' => $swppg,
		'total'   => $quilt_query->max_num_pages,
	) );
}

get_header(); 
get_template_part('template-parts/title');
if (!empty($query)) : ?>
  <section class="quilt__intro">
    <h1 class="landing__title">Search results for: <?= $query; ?></h1>
  </section><!-- .page-header -->
<?php endif; 

// output results if we have any
if (!empty($query) && isset($quilt_query) && !empty($quilt_query->posts)) : ?>
  <section class="quilt__gallery2">
    <?php foreach ($quilt_query->posts as $post) :
      setup_postdata($post);
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

    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
    <?php  // pagination
    if ( $quilt_query->max_num_pages > 1 ) : ?>
      <div class="navigation pagination" style="text-align: center" role="navigation">
        <h2 class="screen-reader-text">Posts navigation</h2>
        <div class="nav-links">
          <?php echo wp_kses_post( $pagination ); ?>
        </div>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>
<!-- begin search form -->
<section class="quilt__intro">
  <div class="search-box">
    <form role="search" method="get" class="search-form" action="<?php echo get_permalink( 21526 ); ?>">
      <label>
        <span class="screen-reader-text">Search the Quilt</span>
        <input type="search" class="search-field" placeholder="Search again ..." value="" name="quiltquery" title="Search the Quilt">
      </label>
      <input type="submit" class="search-submit" value="Search">
    </form>
  </div>
</section>

