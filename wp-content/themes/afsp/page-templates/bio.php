<?php
/**
 * Template Name: Bio
 *
 * @package afsp
 */

        get_header();
        get_template_part('template-parts/title'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog__article" role="main">

	    	<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			  <section class="bio__intro">
        <?php if(get_field('bio_image')) :
          echo afsp_imgix( 'bio__image', false, 'bio', '(min-width:768px) 10vw, 100vw', 768, 768, '', ''); 
        else : ?>
             
          <img class="bio__image" src="http://placehold.it/768/fc4c02/ffffff?text=Image+Coming+Soon" /> 
        
        <?php endif; ?>
        
          <div class="bio__info">
  	
  				<?php the_title( '<h1 class="bio__name">', '</h1>' ); ?>
			
    				<h3 class="bio__title"><?php the_field('bio_title'); ?></h3>
  			  </div>
			  </section>
			
        <?php if(have_rows('c_content')) :
          while(have_rows('c_content')) : the_row(); ?>
    
    <section class="blog__content">
      
        <?php the_sub_field('c_content_section'); ?>
        
    </section>
    
        <?php endwhile;
        endif; ?>

		    <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

				<?php get_footer(); ?>