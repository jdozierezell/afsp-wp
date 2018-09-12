<section class="landing__full">
		
				<?php if(get_the_title() == 'Education') :
						$program_title = 'Education Programs';
					endif; ?>
		
		<h2 id="program-anchor" class="landing__header"><?php echo $program_title; ?></h2>
				
	<div class="programs container">
			
				<?php // WP_Query arguments
		        $args = array (
		        	'post_parent'   => $id,
		        	'post_type'     => array( 'page' ),
		        	'orderby'				=> 'menu_order',
		        	'order'					=> 'ASC'
		        );
		        // The Query
		        $programs = new WP_Query( $args );
		        // The Loop
		        if($programs->have_posts()) : while($programs->have_posts()) : $programs->the_post();  ?>

		<a class="program__item" href="<?php the_permalink(); ?>">
			<table>
				<tr>
					<td>
						
				<?php afsp_imgix('program__image', false, 'si', '(min-width: 1200px) 23vw, (min-width: 768px) 29vw, (min-width: 667px) 42vw, 84vw', '768', '768', '', ''); ?>
						
					</td>
				</tr>
				<tr>
					<td class="program__title"><?php the_title(); ?></td>
				</tr>
			</table>
		</a>			
				
				<?php endwhile;
	        endif;
	        // Restore original Post Data
	        wp_reset_postdata(); ?>
	        
	</div>
</section>	

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>

<script>

  // var $programs = jQuery('.programs').isotope({
  //   itemSelector: '.program__item',
  //   layoutMode: 'fitRows'
  // });
  
  // jQuery('.program__filter').on('change', function() {
  // 	var filterValue = this.value;
  // 	console.log(filterValue);
  // 	$programs.isotope({filter: filterValue});
  // });
  
  // Credit to https://css-tricks.com/snippets/jquery/smooth-scrolling/
  jQuery(function($) {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

</script>