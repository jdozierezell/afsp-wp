	<?php
/**
 * Template part for displaying the chapter's subpages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package afsp
 */

?>

<div id="primary" class="content-area">
		<main id="main" class="site-main blog__article" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="blog__header">
					
					<div class="blog__masthead">
	
					<?php the_title( '<h1 class="blog__title">', '</h1>' ); ?>
			
						<h3 class="blog__meta">
							<?php afsp_posted_on(); ?>
						</h3><!-- .entry-meta -->
					</div>
					
					<div class="sw-wrapper">
						
				<?php 
				$url = get_permalink($post->ID);
				$title = get_the_title($post->ID);
				echo do_shortcode('[social_warfare]'); 
				?>
						
					</div>
				
				<?php $image = get_field('b_featured_image');
				if(!empty($image)) : 
					afsp_imgix('feed__image', false, 'b_featured', '100vw', 1532, 768, '', '');
				endif; ?>
				
				</header><!-- .entry-header -->
			
				<div class="chapter__content">
					
				<?php the_content(); ?>	
					
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->