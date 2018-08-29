<?php
/**
 * Template Part: Chapter Programs Display
 *
 * Displays the featured program for the chapter
 *
 * @package afsp
 */

$selected_program = get_field( 'ch_program' );
// WP_Query arguments
$args = array(
	'post_type'      => array( 'page' ),
	'post_status'    => array( 'published' ),
	'posts_per_page' => -1,
);
// The Query
$programs = new WP_Query( $args );
// The Loop
if ( $programs->have_posts() ) :
	while ( $programs->have_posts() ) :
		$programs->the_post();
		if ( get_the_title() == $selected_program ) :
			?>
			<div class="chapter__programs">
				<h2>Featured Program</h2>
				<?php echo afsp_imgix( '', false, 'si', '100vw', 700, 350 ); // lovely piece of code resides at inc/imgix.php ?>
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
					<p>Learn more about this program &rsaquo;&rsaquo;</p>
				</a>
				<div class="program-buttons">  
					<a class="features__button" href="<?php site_url(); ?>/our-work/programs/">See all programs</a>
					<a id="features-wufoo" class="features__button features__button--request" href="https://afsp.org/localrequestform" target="_blank">Program request</a>
				</div>    
				<hr>
			</div>
		<?php
		endif;
	endwhile;
endif;
// Restore original Post Data
wp_reset_postdata();
?>
