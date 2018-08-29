<?php
/**
 * Template Name: Campaign - Survivor Day 2016
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');

				$now = new DateTime();
				$live = new DateTime('2016-11-19T12:50:00');

				if($live <= $now) :
					$social_video = 'https://www.youtube.com/embed/66Kl0Sn4oiA?rel=0&amp;showinfo=0';
				else :
					$social_video = 'https://www.youtube.com/embed/Jn0d-TP7KjM?rel=0&amp;showinfo=0';
				endif; ?>

<section class="container__full nspw__video isosld__video">
	<h1>International Survivors of Suicide Loss Day</h1>
	<h3>November 19, 2016</h3>
	<iframe src="<?php echo $social_video; ?>" frameborder="0" allowfullscreen></iframe>
	<h3>Survivor Day Live begins at 1 p.m. EST.<br />When prompted, <a href="https://vimeo.com/180640978" target="_blank">click here</a> to watch this year's Survivor Day documentary.</h3>
</section>
<section class="container__full isosld__container isosld__container--find">
	<h2 class="isosld__header">Find an Event Near You</h2>
	<p class="isosld__desc">Each year on International Survivors of Suicide Loss Day, those affected by suicide loss gather around the world to find comfort, gain understanding, and share stories of healing and&nbsp;hope.<br /><br />
This year’s Survivor Day events will feature a screening of <em>Life Journeys: Reclaiming Life after Loss</em>, a new documentary that traces the journey that follows a suicide loss over&nbsp;time.</p>
		<div class="container">

				<?php echo do_shortcode('[gmw form="9"]'); ?>

		</div>
</section>
<section class="container__full isosld__container">
	<h2 class="isosld__header">Stories of Loss &amp; Healing</h2>
	<p class="isosld__desc">Interested in reading about other people’s experiences following a loss? Looking for guidance on how to support a loved one? The blog posts below provide helpful advice and inspiration, while letting you know you are not&nbsp;alone.</p>
	<div class="nspw__content nspw__content--our">

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

				$image = get_field('b_featured_mobile_image') ? get_field('b_featured_mobile_image') : get_field('b_featured_image');
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
    	<img class="nspw__image" src="<?php echo $img; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php the_title(); ?>" />
			<a class="nspw__overlay" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>

		    <?php endwhile;
		    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
				endif; ?>

	</div>
</section>
<section class="container__full isosld__container">
	<h2 class="isosld__header">The Memory Quilt</h2>
	<p class="isosld__desc">AFSP has been actively involved in creating memory quilts for loss survivors for more than 20 years. We recently brought the quilt online and now have thousands of squares representing those we have lost to suicide. Below is a small sample of that quilt. Click any of the quilt squares to be taken to the quilt where you, too, can create a square in memory of a lost loved&nbsp;one.</p>

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

	<div id="home-carousel" class="gallery js-flickity everyday-heroes__carousel isosld__carousel" data-flickity-options='{ "wrapAround": true, "pageDots": false, "autoPlay": 1500 }'>

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

		<div class="gallery-cell gallery-cell__carousel">
			<a class="everyday-heroes__image-link" href="<?php the_permalink(); ?>">
				<img class="everyday-heroes__image isosld__image" src="<?php echo $sq_img; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php the_title(); ?>" />
			</a>
		</div>
				
				<?php wp_reset_postdata(); // Restore original Post Data 
				endwhile; ?>

	</div>	

				<?php endif; ?>
			
</section>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="container__full">
	<form action="//afsp.us1.list-manage.com/subscribe/post?u=db11a6f2940a2b3d1fa0b2fe7&amp;id=3fbf9113af" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll" class="email isosld__email" style="margin: 0;">
      <h2 class="email__cta">Want to Stay Involved?</h2>
      <input type="email" value="" name="EMAIL" class="email__form isosld__email" id="mce-EMAIL" placeholder="enter your email address to keep in touch" required>
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

<section class="features features--full-background isosld__cta">
	<div class="features__cta">
	  <div class="container container--flex">
  		<h2 class="features__header">You are not alone.</h2>
  		<div class="features__body">AFSP offers resources to help loss survivors cope, connect, and heal in&nbsp;time.</div>
          
		  <div class="features__button-wrapper">
  		  <a class="features__button" href="https://afsp.org/find-support/ive-lost-someone/">Learn more</a>
		  </div>
  		  
	  </div>
	</div>
</section>

<script>
	var faces = "<?php echo $show_posts; ?>";
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