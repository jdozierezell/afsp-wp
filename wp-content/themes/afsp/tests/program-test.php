<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package afsp
 */

  define('WP_USE_THEMES', false);
  require_once('../../../../wp-load.php'); ?>
  
<?php $selectedProgram = 'Research to Practice: Suicide Prevention for LGBT+ Communities';
        // WP_Query arguments
        $args = array (
        	'post_type'              => array( 'page' ),
        	'post_status'            => array( 'published' ),
        	'posts_per_page'         => -1
        );
        
        // The Query
        $programs = new WP_Query( $args );
        // The Loop
        if ($programs->have_posts()) : while ($programs->have_posts()) : $programs->the_post(); 
        
        
        if(get_the_title() == $selectedProgram) : ?>
        
	<div class="chapter__programs">
		<h2>Featured Program</h2>

        <?php echo afsp_imgix('', false, 'si', '100vw', 700, 350, '', ''); // lovely piece of code resides at inc/imgix.php ?>
		
      <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
        <p>Learn more about this program &rsaquo;&rsaquo;</p>
      </a>
    <div class="program-buttons">  
  		<a class="features__button" href="<?php site_url(); ?>/our-work/programs/">See all programs</a>
  		<a class="features__button features__button--request" href="#">Program request</a>
    </div>    
    <hr>
	</div>
      
        <?php endif;
          endwhile;
        endif;
      
        // Restore original Post Data
        wp_reset_postdata(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
