<?php
/*
Template Name: Landing Page
*/

get_header(); ?>

<div class="container">
<div id="primary" class="content-container">

<?php while ( have_posts() ) : the_post(); // start WP_Query Loop ?>

<?php
  $pageImage = get_field('page_image');
?>

  <div class="prettyFace">
    <img src="<?php echo $pageImage['sizes']['pretty-face']; ?>" alt="<?php echo $pageImage['alt']; ?>">
  </div>
  <article id="post-<?php the_ID(); ?>" <?php post_class( 'pageContent' ); ?>> <!--start pageContent-->
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
    
<?php
the_content();
$thisPage = get_the_ID();
$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order',
	'hierarchical' => 1,
	'exclude' => '',
	'include' => '',
	'meta_key' => '',
	'meta_value' => '',
	'authors' => '',
	'child_of' => $thisPage,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
); 
$pages = get_pages($args); 
foreach($pages as $page) { ?>

      <h3 class="subpage"><a class="button" href="<?php echo get_permalink( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h3>

<?php  
}
?>
    
    </div> <!-- .entry-content -->
  </article> <!-- .pageContent -->
</div>

<?php endwhile // end WP_Query Loop ?>

<?php get_footer(); ?>