<?php
/*
Template Name: Events Page
*/

get_header(); ?>

<div class="container">
<div id="primary" class="content-container">
  <article id="post-<?php the_ID(); ?>" <?php post_class( 'eventContent' ); ?>> <!--start pageContent-->
	<?php while ( have_posts() ) : the_post(); // start WP_Query Loop ?>
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
		<div class="entry-content">
  	<?php if (!current_user_can('read_chapters')): 
  			echo "The content is for internal use only. Please login with the link above to continue. If you require access to ChapterLand, contact your supervisor. If you are looking for AFSP's public site, <a href=\"http://afsp.dev.cc\">click to visit afsp.dev.cc.</a></p>";
  			break;
  		else: 
				the_content();
			endif;
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'anything' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php endwhile // end WP_Query Loop ?>
  </article> <!-- .pageContent -->
</div>



<?php get_footer(); ?>