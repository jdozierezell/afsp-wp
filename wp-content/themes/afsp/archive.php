<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package afsp
 */


				get_header(); 
				get_template_part('template-parts/title'); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					
							<?php $image = get_field('b_featured_image'); 
							if(!empty($image)) : 
							
							afsp_imgix('feed__image', false, 'b_featured', '100vw', 1532, 768, 768, 768);
							
							endif; ?>
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			
					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
							<span class="posted-on">
								
					<?php $date = DateTime::createFromFormat('Y-m-d', get_field('b_date'));
					//	echo $date->format('F j, Y'); ?>
					
							</span> | 
							<span class="byline">
							
					<?php 

					$term = get_field('b_author');
					if( $term ):
						echo $term->name;
					else :
						echo 'AFSP';
					endif; ?>
							
							</span>
					</div><!-- .entry-meta -->
					
					<?php endif; ?>
					
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					
					<?php
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'afsp' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );
					?>
			
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'afsp' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			
				<footer class="entry-footer">
					<?php afsp_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->
				
				

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
