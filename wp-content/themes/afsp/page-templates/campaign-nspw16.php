<?php
/**
 * Template Name: Campaign - NSPW 2016
 *
 * @package afsp
 */

				get_header();
				get_template_part('template-parts/title');
				$project2025 = 'From the model built for Project 2025, AFSP shares examples of how many lives could be saved at a national level if we scaled up and made strategic investments, and applied the collective resources necessary to support these prevention areas over the next 10 years.';
				$firearm = '//afsp.imgix.net/wp-content/uploads/2016/08/iStock_35697934_MEDIUM.jpg?w=1400&h=1400&crop=faces&fit=crop';
				$emergency = '//afsp.imgix.net/wp-content/uploads/2016/08/iStock_1058411_MEDIUM.jpg?w=1400&h=1400&crop=faces&fit=crop';
				$healthcare = '//afsp.imgix.net/wp-content/uploads/2016/08/iStock_85066405_MEDIUM.jpg?w=1400&h=1400&crop=faces&fit=crop';

				// code below sets social video and image for each day of the week
				if(have_rows('nspw_social_images')) : while(have_rows('nspw_social_images')) : the_row();
						$start_date = DateTime::createFromFormat('m/d/Y', get_sub_field('nspw_start'));
						$end_date 	= DateTime::createFromFormat('m/d/Y', get_sub_field('nspw_end'));
						$today_date = new DateTime('NOW');

						if($start_date <= $today_date && $today_date <= $end_date) :
							$social_video = 'https://www.youtube.com/embed/' . get_sub_field('nspw_youtube') . '?rel=0&amp;showinfo=0';
							$social_image = get_sub_field('nspw_social_image');
							$image_url = $social_image['url'];
							$social_message = get_sub_field('nspw_social_message');
						endif;
					endwhile;

					if(!$social_video && !$image_url) :
						$social_video = 'https://www.youtube.com/embed/WFVVwLERoX4?rel=0&amp;showinfo=0';
						$image_url = 'https://afsp.org/wp-content/uploads/2016/01/13108_AFSP_SPW_SocialGraphic_d1.png';
						$social_message = 'Social Messages to #StopSuicide';
					endif;

				endif;
				 ?>

<section class="container__full nspw__video">
	<h1>Be the Voice to #StopSuicide</h1>
	<h3>National Suicide Prevention Week<br />September 5&ndash;11, 2016</h3>
	<iframe src="<?php echo $social_video; ?>" frameborder="0" allowfullscreen></iframe>
</section>
<section class="container__full">
	<h2 class="nspw__header">What you can do to #StopSuicide</h2>
	<div class="nspw__content nspw__content--you">
		<div class="nspw__large-square" id="messages">
			<img class="nspw__image" src="<?php echo $image_url; ?>" />
			<a class="nspw__overlay" href="http://afsp.org/campaigns/national-suicide-prevention-week-2016/social-messages/"><?php echo $social_message; ?></a>
		</div>
		<div>
			<div class="nspw__small-square" id="profile">
				<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/08/13336_AFSP_Twibbon_Example.jpg" />
				<a class="nspw__overlay" href="http://twibbon.com/Support/be-the-voice-to-stopsuicide" target="_blank">Filter Your<br />Profile</a>
			</div>
			<div class="nspw__small-square" id="pledge">
				<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/07/Lets_Have_A_Conversation.png" />
				<a class="nspw__overlay" href="http://afsp.org/campaigns/national-suicide-prevention-week-2016/lets-have-a-conversation">Pledge<br />to Talk</a>
			</div>
			<div class="nspw__small-square" id="sharables">
				<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/07/did_you_know11.jpg" />
				<a class="nspw__overlay" href="http://afsp.org/campaigns/sharable-images/">Social<br />Sharables</a>
			</div>
			<div class="nspw__small-square" id="merch">
				<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/08/BTV-Er-Al-light-blue-shirt.jpg?crop=faces&fit=crop&w=768&h=768" />
				<a class="nspw__overlay" href="https://store.afsp.org/afsp/catalog/Apparel">New Merchandise</a>
			</div>
		</div>
		<div class="nspw__small-square" id="advocate">
			<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/07/capitol_advocacy.jpg" />
			<a class="nspw__overlay" href="http://afsp.org/advocate/">Advocate for<br />Suicide Prevention</a>
		</div>
		<div class="nspw__small-square" id="walk">
			<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/07/AFSP-Community-Walks-Square.png" />
			<a class="nspw__overlay" href="http://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.eventList&eventType=P,T&eventGroupID=9AA117B3-F522-BB6D-359D1AA2D75A7958" target="_blank">Find a Walk<br />Near You</a>
		</div>
<!-- 		<div class="nspw__small-square" id="thunder">
			<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/08/Thunderclap.png?w=768" />
			<a class="nspw__overlay" href="https://www.thunderclap.it/projects/45350-be-the-voice-to-stopsuicide">Make Noise on Facebook &amp; Twitter to #StopSuicide</a>
		</div> -->
		<div class="nspw__small-square" id="donate2">
			<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/08/20x25-01.jpg" />
			<a class="nspw__overlay" href="https://afsp.donordrive.com/index.cfm?fuseaction=donate.event&eventID=4341">Donate to<br />Project 2025</a>
		</div>
		<div class="nspw__small-square" id="selfies">
			<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/07/hannah.jpg?w=768" />
			<span class="nspw__overlay">Selfies to #StopSuicide</span>
		</div>
	</div>
	<h2 class="nspw__header">What we are doing to #StopSuicide</h2>
	<div class="nspw__content nspw__content--we">
		<div class="nspw__video nspw__video--2025">
<!-- 			<img src="//afsp.imgix.net/wp-content/uploads/2016/08/Robert-Gebbia_sitting.jpg?w=1400">
			<h3>(Video Coming Soon)</h3> -->
			<iframe src="https://www.youtube.com/embed/ang04EdkTkA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="nspw__full-block" id="goal">
			<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/07/Bold-Goal.png">
			<a class="nspw__overlay" href="https://afsp.org/nations-largest-suicide-prevention-organization-releases-three-investment-opportunities-will-reduce-suicide-rate-20-percent/">Our Bold Goal:<br />Reduce the Annual Suicide Rate 20% by 2025</a>
		</div>
		<div class="nspw__bold">
			<div id="firearm">
				<img class="nspw__image" src="<?php echo $firearm; ?>" />
				<span class="nspw__overlay">Firearms &amp; Suicide Prevention</span>
			</div>
			<div id="emergency">
				<img class="nspw__image" src="<?php echo $emergency; ?>" />
				<span class="nspw__overlay">Emergency Departments</span>
			</div>
			<div id="healthcare">
				<img class="nspw__image" src="<?php echo $healthcare; ?>" />
				<span class="nspw__overlay" href="#">Large Healthcare Systems</span>
			</div>
			<div id="donate">
				<img class="nspw__image" src="//afsp.imgix.net/wp-content/uploads/2016/08/20x25-01.jpg" />
				<a class="nspw__overlay" href="https://afsp.donordrive.com/index.cfm?fuseaction=donate.event&eventID=4341">Donate to<br />Project 2025</a>
			</div>
		</div>
	</div>
	<h2 class="nspw__header">Raising our voices to #StopSuicide</h2>
	<div class="nspw__content nspw__content--our">
		<div class="nspw__video nspw__video--talk">
			<iframe src="https://player.vimeo.com/video/178517589" frameborder="0" allowfullscreen></iframe>
		</div>

				<?php $voices = get_field('nspw_voice');
				if($voices):
				foreach($voices as $post): // variable must be called $post (IMPORTANT)
				setup_postdata($post);
				$image = get_field('b_featured_image'); ?>

    <div>

    		<?php afsp_imgix('nspw__image', false, 'b_featured', '(min-width:768px) 25vw, 50vw, 100vw', 768, 768, '', ''); ?>
			<img class="nspw__image" src="<?php echo $image['url']; ?>" />
			<a class="nspw__overlay" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>

		    <?php endforeach;
		    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
				endif; ?>

	</div>
</section>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="container__full">
	<form action="//afsp.us1.list-manage.com/subscribe/post?u=db11a6f2940a2b3d1fa0b2fe7&amp;id=3fbf9113af" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll" class="email" style="margin: 0;">
      <h2 class="email__cta">Want to Stay Involved?</h2>
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

<!--All the modals!!!-->
<div class="modal__overlay"></div>
<div class="modal" id="selfie_modal">
	<h2 class="modal__title">Selfies to #StopSuicide</h2>
	<p>The buttons below will take you to your favorite social channel. Once you're there, share a photo of yourself using #StopSuicide (bonus points if you’re wearing a Be&nbsp;the&nbsp;Voice or Out of the Darkness shirt!). Make sure you tag @afspnational if you’re sharing on Twitter and Instagram.</p>
	<a class="modal__button button--selfie" href="http://facebook.com">Facebook</a>
	<a class="modal__button button--selfie" href="http://twitter.com">Twitter</a>
	<a class="modal__button button--selfie" href="http://instagram.com">Instagram</a>
</div>
<div class="modal" id="firearm_modal">
	<h2 class="modal__title">Firearms &amp; Suicide Prevention</h2>
	<p><?php echo $project2025; ?></p>
	<div class="project2025__modal">
		<img src="<?php echo $firearm; ?>" />
		<p>At the national level, if 50 percent of all individuals who purchase a firearm are exposed to suicide prevention education (assuming just 20 percent effectiveness of the education), we can expect an estimated 9,500 lives saved through 2025.<br />
		<a class="modal__button" href="https://afsp.org/afsp-nssf-tremendous-potential-save-lives/">Learn More</a></p>
	</div>
</div>
<div class="modal" id="emergency_modal">
	<h2 class="modal__title">Emergency Departments</h2>
	<p><?php echo $project2025; ?></p>
	<div class="project2025__modal">
		<img src="<?php echo $emergency; ?>" />
		<p>If we do a better job of identifying people at risk for suicide (through screening) in emergency departments, and providing them with a short-term intervention like safety planning and include better follow-up care, we can expect to save an estimated 1,100 lives through 2025. <br />
		<a class="modal__button" href="https://afsp.org/nations-largest-suicide-prevention-organization-awards-4-35-million-research-grants/">Learn More</a></p>
	</div>
</div>
<div class="modal" id="healthcare_modal">
	<h2 class="modal__title">Large Healthcare Systems</h2>
	<p><?php echo $project2025; ?></p>
	<div class="project2025__modal">
		<img src="<?php echo $healthcare; ?>" />
		<p>If we do a better job of identifying people who are at risk in large healthcare systems (such as during a primary care visit), provide them with short-term intervention and include better follow-up care, we can expect an estimated 9,200 lives saved through 2025. In the area of large healthcare systems, expanding the use of the Zero Suicide approach also shows promise for reducing suicides among those seen in large healthcare systems. By fully integrating suicide prevention across an integrated healthcare system, patients at risk for suicide are identified and appropriately cared for without falling through the cracks. <br />
		<a class="modal__button" href="https://afsp.org/nations-largest-suicide-prevention-organization-awards-4-35-million-research-grants/">Learn More</a></p>
	</div>
</div>
<!--End all the modals. Haven't we had enough?-->

<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.nspw__content').hide();
		$('.nspw__header').on('click', function(){
			$(this).toggleClass('nspw__header--active');
			$(this).next().slideToggle('fast');
		});
		$('#selfies').on('click', function(event){
			event.preventDefault;
			$('.modal__overlay, #selfie_modal').css('display','block');
		});
		$('#firearm').on('click', function(event){
			event.preventDefault;
			$('.modal__overlay, #firearm_modal').css('display','block');
		});
		$('#emergency').on('click', function(event){
			event.preventDefault;
			$('.modal__overlay, #emergency_modal').css('display','block');
		});
		$('#healthcare').on('click', function(event){
			event.preventDefault;
			$('.modal__overlay, #healthcare_modal').css('display','block');
		});
		$('.modal__overlay').on('click', function(){
			$('.modal__overlay, .modal').css('display','none');
		});
		$('#healthcare a').on('click',function(event){
			event.preventDefault();
		});
	});
</script>

				<?php get_footer(); ?>
