<?php
/**
 * Template Name: Forum 16
 *
 * @package afsp
 */

				get_header(); 
				
				get_template_part('template-parts/title');
				
				if(have_posts()) : while(have_posts()) : the_post();
				
				$sizes = array(
					'full' => 3500,
					'large' => 1920,
					'medium' => 960,
					'small' => 798
				);
				
				?>

<section class="container__full forum__splash">
	<img src="//afsp.imgix.net/wp-content/uploads/2016/05/18927488600_2706d87446_o.jpg?exp=-7&fit=crop&crop=entropy&h=720&w=<?php echo $sizes['full'] ?>" srcset="//afsp.imgix.net/wp-content/uploads/2016/05/18927488600_2706d87446_o.jpg?exp=-7&fit=crop&crop=entropy&h=720&w=<?php echo $sizes['full'] . ' ' . $sizes['full']?>w, //afsp.imgix.net/wp-content/uploads/2016/05/18927488600_2706d87446_o.jpg?exp=-7&fit=crop&crop=entropy&h=720&w=<?php echo $sizes['large'] . ' ' . $sizes['large']?>w, //afsp.imgix.net/wp-content/uploads/2016/05/18927488600_2706d87446_o.jpg?exp=-7&fit=crop&crop=entropy&h=720&w=<?php echo $sizes['medium'] . ' ' . $sizes['medium']?>w, //afsp.imgix.net/wp-content/uploads/2016/05/18927488600_2706d87446_o.jpg?exp=-7&fit=crop&crop=entropy&h=720&w=<?php echo $sizes['small'] . ' ' . $sizes['small']?>w" class="imgix-fluid " alt="" sizes="100vw" />
	<div>
		<h1><?php the_title(); ?></h1>
		<h3>Sunday, June 12 &ndash; Wednesday, June 15</h3>
	</div>
</section>
<!-- <section class="container forum__feed">
	<h3>Live Feed</h3>
	<div class="forum__feed--live">
		<img src="//afsp.imgix.net/wp-content/uploads/2016/05/Advocacy-Days-1080p-Evergreen.png"></img>
		<div class="countdown__wrapper">
			<div class="countdown__labels">
				<h4>Days</h4>
				<h4>Hours</h4>
				<h4>Minutes</h4>
			</div>
			<div class="countdown"></div>
		</div>
	</div>
	<h3>8:30 a.m., Monday, June 13</h3>
</section> -->
<!-- <section class="container forum__feed">
	<iframe src="//content.jwplatform.com/players/x38iEmHa-3Lz1sRMc.html" frameborder="0" scrolling="auto" allowfullscreen autoplay=1></iframe>
</section>
<section class="container">
	<a href="http://www.windrosemedia.com/windstream/doubler/"><h3>Ask a question to be answered during the feed</h3></a>
</section> -->

<!-- Begin MailChimp Signup Form -->
<!-- <div id="mc_embed_signup" class="container">
<form action="//afsp.us1.list-manage.com/subscribe/post?u=db11a6f2940a2b3d1fa0b2fe7&amp;id=3fbf9113af&FORM_LOC=forum16" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll" class="email">
		<h2 class="email__cta">Save the date</h2>
		<input type="email" value="" name="EMAIL" class="required email__form" id="mce-EMAIL">  -->   <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
<!-- 	    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_db11a6f2940a2b3d1fa0b2fe7_3fbf9113af" tabindex="-1" value=""></div>
	    <div class="email__button"><input type="submit" value="Email me" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
	<div id="mce-responses" class="clear">
		<div class="response email" id="mce-error-response" style="display:none"></div>
		<div class="response email" id="mce-success-response" style="display:none"></div>
	</div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='date';fnames[8]='MMERGE8';ftypes[8]='text';fnames[14]='MMERGE14';ftypes[14]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='address';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';fnames[13]='MMERGE13';ftypes[13]='text';fnames[15]='MMERGE15';ftypes[15]='text';fnames[16]='MMERGE16';ftypes[16]='text';fnames[17]='MMERGE17';ftypes[17]='text';fnames[18]='MMERGE18';ftypes[18]='text';fnames[19]='MMERGE19';ftypes[19]='text';fnames[20]='MMERGE20';ftypes[20]='text';fnames[21]='MMERGE21';ftypes[21]='text';fnames[22]='MMERGE22';ftypes[22]='text';fnames[23]='MMERGE23';ftypes[23]='text';fnames[24]='MMERGE24';ftypes[24]='text';fnames[26]='MMERGE26';ftypes[26]='text';fnames[28]='MMERGE28';ftypes[28]='text';fnames[29]='MMERGE29';ftypes[29]='text';fnames[30]='MMERGE30';ftypes[30]='text';fnames[25]='FORM_LOC';ftypes[25]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
</script> -->
<!--End mc_embed_signup-->

<section class="container forum__teaser">
	<h2>Our Annual Advocacy Forum brings over 250 suicide prevention advocates to Washington, D.C., in the single largest effort to educate federal officials about suicide and suicide prevention.</h2>
</section>
<section class="container__full forum__points">
	<h2>Public Policy Talking Points</h2>
	<div class="forum__points__container container">
		<?php	$talking_points = get_field('fl_talking_points');
		foreach($talking_points as $point) : ?>
		
		<a class="forum__point" href="<?php echo get_permalink($point->ID); ?>">
				
				<?php $image = get_field('si_image', $point->ID);
				$url = $image['url'];
				$url = str_replace('afsp.org', 'afsp.imgix.net', $url); ?>
				
			<img src="<?php echo $url; ?>?w=768&h=768&fit=crop&crop=faces" />
			<h3 class="point__title"><?php echo get_the_title($point->ID); ?></h3>
				
		</a>
		
			<?php	endforeach; ?>
			
	</div>
<svg class="forum__background-svg" viewBox="0 0 1920 592.7" w="1920" h="592" preserveAspectRatio="none">
	<style type="text/css">
		.st0{fill:#00A5C1;}
		.st1{fill:#066074;}
	</style>
	<polygon class="st0" points="1920,592.7 0,592.7 0,220 1920,0 "/>
	<polygon class="st1" points="0,592.7 1920,592.7 1920,220 0,0 "/>
</svg>
</section>
<section class="container forum__highlights">
	<h2>Highlights</h2>
	<div class="forum__highlights__container container js-flickity" data-flickity-options='{"wrapAround": true, "autoPlay": true, "setGallerySize": false}'>
		<?php	$advocacy_stories = get_field('fl_advocacy_stories');
		foreach($advocacy_stories as $story) : ?>
		
		<a class="forum__highlight" href="<?php echo get_permalink($story->ID); ?>">
				
				<?php $image = get_field('b_featured_image', $story->ID);
				$url = $image['url'];
				$url = str_replace('afsp.org', 'afsp.imgix.net', $url); ?>
				
			<img src="<?php echo $url; ?>?w=768&h=768&fit=crop&crop=faces" />
			<h3 class="point__title"><?php echo get_the_title($story->ID); ?></h3>
				
		</a>
		
			<?php	endforeach; ?>
			
	</div>
</section>
<section class="container forum__highlights">
	<h2>Video from the Forum</h2>
</section>
<section class="container videoEmbed" style="padding-bottom: 42.25%">
	<iframe width="853" height="480" src="https://www.youtube.com/embed/videoseries?list=PLCfes_hEu6Wrlol4JBa8QuL4u9F8eJcMn" frameborder="0" allowfullscreen></iframe>
</section>
<section class="container__full forum__afspforum16">
	<h2>Follow <span class="forum__hash">#AFSPForum16</span> on Instagram and Twitter</h2>
	<div class="social__board">
		
				<?php $photo_count = 15;
        $hashtag = 'afspforum16';
        
        			// instagram is easy, er, sort of . . . https://github.com/Bolandish/Instagram-Grabber/blob/master/src/Instagram.php

        $parameters = urlencode("ig_hashtag($hashtag){ media.first($photo_count) { count, nodes { caption, code, comments, date, dimensions { height, width }, display_src, id, is_video, likes { count }, owner { id, username, full_name, profile_pic_url, biography }, thumbnail_src, video_views, video_url }, page_info } }");
				$url = "https://www.instagram.com/query/?q=$parameters&ref=tags%3A%3Ashow";
				$instagram = wp_remote_get($url);
				
					// twitter is oh, so complicated. thanks https://gist.github.com/m13z/6270524
				$twitter_key 		  = urlencode('YQWKwv2qJgMiykmDOwl1tGZps');
				$twitter_secret   = urlencode('X6iDdjdKuFVhyMp6kLrTRGFeZvUXRxN5qGjmAqhmNz5yyry0E1');
				$twitter_endpoint = 'https://api.twitter.com/1.1/search/tweets.json?q=%23' . $hashtag . '&result_type=recent&count=' . $photo_count;
				$twitter_basic    = base64_encode($twitter_key . ':' . $twitter_secret);

				$oauth = curl_init('https://api.twitter.com/oauth2/token');
				curl_setopt($oauth, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $twitter_basic, 'Content-Type: application/x-www-form-urlencoded;charset=UTF-8'));
				curl_setopt($oauth, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
				curl_setopt($oauth, CURLOPT_RETURNTRANSFER, true);
				$token = json_decode(curl_exec($oauth));
				
				if(isset($token->token_type) && $token->token_type === 'bearer') :
				  $endpoint = curl_init($twitter_endpoint);
				  curl_setopt($endpoint, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $token->access_token));
				  curl_setopt($endpoint, CURLOPT_RETURNTRANSFER, true);
				  $twitter = curl_exec($endpoint);
				  curl_close($endpoint);
				endif;
				
					// okay, variables are all set, now let's see if we have data
		    if ( is_wp_error( $instagram || $twitter ) ) {
      		// error handling
          $error_message 			= $result->get_error_message();
          $instagram_display 	= 'Something went wrong:' . $error_message;
        } else {
          // processing further
          $instagram 									= json_decode($instagram['body']);
          $instagram 									= $instagram->media;
          $twitter	    					= json_decode($twitter);
        }
        
    	// set the variables as arrays
    	$source = array();
    	$media_low = array();
    	$user_name = array();
    	$user_link = array();
    	$user_picture = array();
    	$user_fullname = array();
    	$text = array();
    	$social_link = array();
    	$created = array();

        	foreach($twitter->statuses as $tweet) :

        		/* REFERENCE */

        		// $tweet->entities->media[0]->media_url_https // image url
        		// $tweet->user->name // user full name
        		// $tweet->user->screen_name // username
        		// $tweet->user->url // user homepage
        		// $tweet->user->entities->profile_image_url_https // user image
        		// $tweet->id_str // user id
        		// $tweet->text // tweet
        		// $tweet->created_at // time

        		if($tweet->entities->media) :
        		$source[]					= 'twitter';
      			$media_low[] 			= $tweet->entities->media[0]->media_url_https;
	    			$user_name[] 			= $tweet->user->screen_name;
	    			$user_link[] 			= '//twitter.com/' . $tweet->user->screen_name;
	    			$user_picture[] 	= $tweet->user->profile_image_url_https;
	    			$user_fullname[] 	= $tweet->user->name;
	    			$text[] 					= $tweet->text;
	    			$social_link[] 		= '//twitter.com/' . $tweet->user->screen_name . '/status/' . $tweet->id_str;
	    			$created[]				= strtotime($tweet->created_at);
    			endif;
    		endforeach;
        
	        foreach($instagram->nodes as $photo) :
				
				/* REFERENCE */
				
				// $photo->images->low_resolution->url 			// lowres
				// $photo->thumbnail_src          					// thumb
				// $photo->display_src										  // full
				// $photo->owner->full_name									// user full name
				// $photo->owner->username									// username
				// $photo->owner->profile_pic_url						// user image
				// $photo->link															// instagram link
				// $photo->caption													// caption
				// $photo->date 														// time
				
				$source[]					= 'instagram';
				$media_low[]			= $photo->display_src;
				$social_link[]	 	= '//www.instagram.com/p/' . $photo->code;
				$user_name[] 			= $photo->owner->username;
				$user_link[] 			= '//instagram.com/' . $photo->owner->username;
				$user_picture[] 	= $photo->owner->profile_pic_url;
				$user_fullname[]	= $photo->owner->full_name;
				$text[]						= $photo->caption;			
				$created[]				= $photo->date;
			endforeach;

			arsort($created);

			foreach($created as $id=>$social) : ?>
		
		<div class="social__card">
			<div class="social__photo">

			<?php 

			if($media_low[$id] !== 0) : ?>

				<a class="social__photo-link" href="<?php echo $social_link[$id]; ?>"><img class="social__photo-image" src="<?php echo $media_low[$id]; ?>" /></a>

			<?php endif; ?>

				<a class="social__profile-link" href="<?php echo $user_link[$id]; ?>"><img class="social__profile-image" src="<?php echo $user_picture[$id]; ?>" /></a>
			</div>
			<p class="social__profile"><?php echo $user_fullname[$id]; ?><br />
				<a class="social__profile-link" href="<?php echo $user_link[$id]; ?>">@<?php echo $user_name[$id]; ?></a>
			</p>
			<p><?php echo $text[$id]; ?></p>
		</div>
		
		
			<?php endforeach; ?>
		
		<div class="clear"></div>
	</div>
</section>
<section class="features features--forum features--full-background">
	<div class="features__cta">
	  <div class="container container--flex">
  		<h2 class="features__header">Suicide prevention advocacy depends on you.</h2>
		<div class="features__button-wrapper">
  		  <a class="features__button" href="https://afsp.org/our-work/advocacy/become-an-advocate/">Become an advocate</a>
		</div>  
	  </div>
	</div>
</section>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/flipclock.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
<script>
	jQuery(document).ready(function($) {
		var date = new Date("June 13, 2016 08:30:00");
		var now = new Date();
		var diff = (date.getTime()/1000) - (now.getTime()/1000);
		var countdown = $('.countdown').FlipClock(diff, {
			clockFace: 'DailyCounter',
			countdown: true,
			showSeconds: false,
			autoStart: true,
			
		});
		var $social_grid = $('.social__board').isotope({
		    itemSelector: '.social__card',
		    layoutMode: 'masonry'
		});
		$social_grid.imagesLoaded().progress(function(){
			$grid.isotope('layout');
		});
	});
</script>

				<?php endwhile;
				endif; ?>

				<?php get_footer(); ?>