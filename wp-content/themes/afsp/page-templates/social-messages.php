<?php
/**
 * Template Name: Social Messages
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');
				if(have_posts()) : while(have_posts()) : the_post(); ?>

<script type="text/javascript">
	window.fbAsyncInit = function(){
		FB.init({
			appId 	: '1771779836370199',
			xfbml 	: true,
			version : 'v2.7', 
		});
	};
	(function(d,s,id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if(d.getElementById(id)){return;}
		js = d.createElement(s);
		js.id = id;
		js.src = '//connect.facebook.net/en_US/sdk.js';
		fjs.parentNode.insertBefore(js,fjs);
	}(document,'script','facebook-jssdk'));
</script>
				
<div class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
	<div class="social__instructions">

				<?php the_content(); ?>

	</div>
</div>
<section class="container">

				<?php if(have_rows('smr_messages')) : while(have_rows('smr_messages')) : the_row();

				$start_date = DateTime::createFromFormat('m/d/Y', get_sub_field('smr_start'));
				$end_date 	= DateTime::createFromFormat('m/d/Y', get_sub_field('smr_end')); 
				$today_date = new DateTime('NOW');

				if($start_date <= $today_date && $today_date <= $end_date) : 

				if(get_sub_field('smr_youtube') != '') : ?>
        
	  <div class="videoEmbed">
	    <iframe width="853" height="480" src="https://youtube.com/embed/<?php echo get_sub_field('smr_youtube'); ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	  </div>			

		  	<?php endif; ?>

		<div class="social__instructions"><?php echo get_sub_field('smr_description'); ?></div>

	<div class="social__networks">
		<h2>Facebook</h2>
		<h2>Twitter</h2>
	</div>

				<?php if(have_rows('smr_message_block')) : 
					$fb_count = 0;
					while(have_rows('smr_message_block')) : the_row(); ?>

	<div class="social__messages">
		<div class="social__message">

				<?php if(get_sub_field('smr_facebook') != '') : ?>

			<p><?php echo get_sub_field('smr_facebook'); ?></p>
			<span class="features__button features__button--facebook">Post to Facebook</span>

				<?php endif; ?>

		</div>
		<div class="social__message">

				<?php if(get_sub_field('smr_twitter') != '') : ?>
			
			<p><?php echo get_sub_field('smr_twitter'); ?></p>
			<a class="features__button features__button--twitter" href="http://twitter.com/home/?status=<?php echo urlencode(get_sub_field('smr_twitter')); ?>" target="_blank">Post to Twitter</a>

				<?php endif; ?>

		</div>
	</div>

				<?php endwhile;
								endif;
							endif;
						endwhile;
					endif; ?>

</section>

<div class="modal__overlay"></div>
<div class="modal">
	<h2 class="modal__title">Facebook</h2>
	<p>Thank you for posting this message to Facebook. To post your message, simply click the "Post to Facebook" button below. If you wish, you may also edit your post below before posting.</p>
	<textarea name="facebook" id="fb_textarea"></textarea>
	<span class="modal__button" data-clipboard-target="#fb_textarea">Post to Facebook</span>
</div>

				<?php endwhile;
				endif; ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/clipboard.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.features__button--facebook').on('click',function(){
			var facebook = $(this).prev().text();
			$('#fb_textarea').val('');
			$('#fb_textarea').val(facebook);
			$('.modal__overlay, .modal').css('display','block');
			// var clipboard = new Clipboard('.modal__button');
			// clipboard.on('success',function(e){
			// 	window.open('https://facebook.com/me');
			// });
		});
		$('.modal__button').on('click', function(){
			var facebook = $('#fb_textarea').val()
			
			FB.login(function(){
				FB.api(
					'me/feed',
					'POST',
					{
						'message': facebook
					},
					function(response){
						if(response) {
							window.open('https://facebook.com/me');
							console.log(response);
						}
					}
				);
			},{scope:'publish_actions'});
		});
		$('.modal__overlay').on('click',function(){
			$('.modal__overlay, .modal').css('display','none');
		});
	});
</script>

				<?php get_footer(); ?>