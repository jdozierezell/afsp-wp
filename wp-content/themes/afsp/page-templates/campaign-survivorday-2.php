<?php
/**
 * Template Name: Campaign - Survivor Day 2016 - 2
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');
				$project2025 = 'From the model built for Project 2025, AFSP shares examples of how many lives could be saved at a national level if we scaled up and made strategic investments, and applied the collective resources necessary to support these prevention areas over the next 10 years.';
				$firearm = '//afsp.imgix.net/wp-content/uploads/2016/08/iStock_35697934_MEDIUM.jpg?w=1400&h=1400&crop=faces&fit=crop';
				$emergency = '//afsp.imgix.net/wp-content/uploads/2016/08/iStock_1058411_MEDIUM.jpg?w=1400&h=1400&crop=faces&fit=crop';
				$healthcare = '//afsp.imgix.net/wp-content/uploads/2016/08/iStock_85066405_MEDIUM.jpg?w=1400&h=1400&crop=faces&fit=crop';

				
				$social_video = 'https://www.youtube.com/embed/Jn0d-TP7KjM'; ?>

<section class="container__full nspw__video isosld__video">
	<h1>International Survivors of Suicide Loss Day</h1>
	<h3>November 19, 2016</h3>
	<iframe src="<?php echo $social_video; ?>" frameborder="0" allowfullscreen></iframe>
</section>
<section class="container__full">
	<h2 class="isosld__tag">You are not alone.</h2>
</section>
<section class="isosld__flex">
	<div class="isosld__nav">
		<h2 class="isosld__header">Stories of Loss &amp; Healing</h2>
		<h2 class="isosld__header">The Memory Quilt</h2>
    <h2 class="isosld__header">Want to Stay Involved?</h2>
  </div>
  <div class="isosld__content">
		<div class="isosld__stories">

				<?php // WP_Query arguments
				$loss_args = array (
					'post_type'              => array( 'post' ),
					'tag'                    => 'suicide-loss',
					'posts_per_page'         => '12',
				);

				// The Query
				$suicide_loss = new WP_Query( $loss_args );

				// The Loop
				if ( $suicide_loss->have_posts() ) : while ( $suicide_loss->have_posts() ) : $suicide_loss->the_post();

				$image = get_field('b_featured_image');
				$img_array = wp_get_attachment_image_src($image['id']);
				$img = $img_array[0];
				// if the page is loaded over ssl, we need to add the secure protocol to the source url
				$img = str_replace('http://', 'https://', $img);
      	if($pos = strpos($img, '?') !== false) :
      		$img = strstr($img, '?', true);
      	endif;
				$pos = strpos($img, '?');
      	if($pos !== false) :
      		$img = strstr($img, '?', true);
      	endif; ?>

	    <div>	
	    	<img class="isosld__image" src="<?php echo $img; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php the_title(); ?>" />
				<a class="isosld__overlay" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>

		    <?php endwhile;
		    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
				endif; ?>

		</div>

				<?php // WP_Query arguments
				$total_posts = wp_count_posts('quilt_square');
				$show_posts = 20;
				$offset = rand(0, $total_posts - $show_posts);
				$args = array (
					'post_type'              => array( 'quilt_square' ),
					'posts_per_page'         => $show_posts,
					'offset'                 => $offset,
				);

				// The Query
				$squares = new WP_Query( $args );

				// The Loop
				if ( $squares->have_posts() ) :	?>

		<div id="home-carousel" class="gallery js-flickity everyday-heroes__carousel" data-flickity-options='{ "wrapAround": true, "pageDots": false, "autoPlay": 1500 }'>

				<?php while ( $squares->have_posts() ) :	$squares->the_post();
				$square = get_field('q_square');
				$sq_array = wp_get_attachment_image_src($square['id']);
				$sq_img = $sq_array[0];
				// if the page is loaded over ssl, we need to add the secure protocol to the source url
				$sq_img = str_replace('http://', 'https://', $sq_img);
      	if($pos = strpos($sq_img, '?') !== false) :
      		$sq_img = strstr($sq_img, '?', true);
      	endif;
				$pos = strpos($sq_img, '?');
      	if($pos !== false) :
      		$sq_img = strstr($sq_img, '?', true);
      	endif; ?>

			<div class="gallery-cell gallery-cell__carousel survivor-day__carousel">
				<a class="everyday-heroes__image-link" href="<?php the_permalink(); ?>">
					<img class="everyday-heroes__image isosld__image" src="<?php echo $sq_img; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php the_title(); ?>" />
				</a>
			</div>
				
				<?php wp_reset_postdata(); // Restore original Post Data 
				endwhile; ?>

		</div>	

				<?php endif; ?>

	<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup" class="container__full">
			<form action="//afsp.us1.list-manage.com/subscribe/post?u=db11a6f2940a2b3d1fa0b2fe7&amp;id=3fbf9113af" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll" class="email" style="margin: 0;">
		      <input type="email" value="" name="EMAIL" class="email__form" id="mce-EMAIL" placeholder="enter your email address to keep in touch" required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true">
			    	<input type="text" name="b_db11a6f2940a2b3d1fa0b2fe7_3fbf9113af" tabindex="-1" value="">
			  	</div>
			    <div class="email__button">
			    	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
			  	</div>
		    </div>
			</form>
		</div>
<!--End mc_embed_signup-->
	
	</div>		
</section>
<script>
	var faces = "<?php echo $show_posts; ?>";

	var visibleY = function(el){
	  var rect = el.getBoundingClientRect(), top = rect.top, height = rect.height, 
	    el = el.parentNode;
	  do {
	    rect = el.getBoundingClientRect();
	    if (top <= rect.bottom === false) return false;
	    // Check if the element is out of view due to a container scrolling
	    if ((top + height) <= rect.top) return false
	    el = el.parentNode;
	  } while (el != document.body);
	  // Check its within the document viewport
	  return top <= document.documentElement.clientHeight;
	};

	jQuery('document').ready(function($){
		function carousel_number() {
			if(faces < 3 || ($(window).width() >= 768 && faces <= 5)) {
				$('#home-carousel').removeAttr('data-flickity-options');
				$('#home-carousel').attr('data-flickity-options', '{ "contain": true, "wrapAround": false, "pageDots": false, "autoPlay": false }');
			} else {
				$('#home-carousel').removeAttr('data-flickity-options');
				$('#home-carousel').attr('data-flickity-options', '{ "contain": true, "wrapAround": true, "pageDots": false, "autoPlay": true }');
			}
		}
		carousel_number();
		$(window).resize(function() {
			console.log($(window).width());
			carousel_number();
		});
		$(window).scroll(function() {
			var pos = $(document).scrollTop();
			var isVis = visibleY(document.getElementById('mc_embed_signup'));
			var footerVis = visibleY(document.getElementById('colophon'));
			console.log($('#mc_embed_signup'));
			$content = $('.isosld__content');
			if($content.offset().top > pos) {
				$('.isosld__content').addClass('isosld__noscroll');
				$('.isosld__nav').removeClass('isosld__fixed');
			}	else {
				if(isVis == true && footerVis == true) {
					$('.isosld__nav').removeClass('isosld__fixed');
				} else {
					$('.isosld__nav').addClass('isosld__fixed');
				}
				$('.isosld__content').removeClass('isosld__noscroll');
			}
		});
	});

	
</script>

<script type="text/javascript">
	// jQuery(document).ready(function($){
	// 	$('.nspw__content').hide();
	// 	$('.nspw__header').on('click', function(){
	// 		$(this).toggleClass('nspw__header--active');
	// 		$(this).next().slideToggle('fast');
	// 	});
	// 	$('#selfies').on('click', function(event){
	// 		event.preventDefault;
	// 		$('.modal__overlay, #selfie_modal').css('display','block');
	// 	});
	// 	$('#firearm').on('click', function(event){
	// 		event.preventDefault;
	// 		$('.modal__overlay, #firearm_modal').css('display','block');
	// 	});
	// 	$('#emergency').on('click', function(event){
	// 		event.preventDefault;
	// 		$('.modal__overlay, #emergency_modal').css('display','block');
	// 	});
	// 	$('#healthcare').on('click', function(event){
	// 		event.preventDefault;
	// 		$('.modal__overlay, #healthcare_modal').css('display','block');
	// 	});
	// 	$('.modal__overlay').on('click', function(){
	// 		$('.modal__overlay, .modal').css('display','none');
	// 	});
	// 	$('#healthcare a').on('click',function(event){
	// 		event.preventDefault();
	// 	});
	// });
</script>

				<?php get_footer(); ?>