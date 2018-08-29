<?php
/**
 * Template Name: Campaign - Advocacy Forum 17
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

<?php afsp_imgix('splash__image forum__feed17--splash', false, 'si', '100vw', 3000, 1000, 768, 700); ?>

	<div style="margin-left: 1rem; margin-right: 1rem; width: calc(100% - 2rem);">
		<h1><?php the_title(); ?></h1>
		<h3>Sunday, June 11 &ndash; Wednesday, June 14</h3>
	</div>
</section>
<section class="container forum__feed17">
<!--<script src="//content.jwplatform.com/players/O33HmyFU-cnYzZ3iE.js"></script>-->

	<!--<div class="forum__feed17--signup">
		<h2>The Virtual Forum begins 8:00 a.m., Monday, June 12</h2>
	</div>
	<div class="forum__feed17--live">
		<img src="//afsp.imgix.net/wp-content/uploads/2017/05/Advocacy-Days-1080p-Evergreen_Red.png"></img>
		<div class="countdown__wrapper">
			<div class="countdown__labels">
				<h4>Days</h4>
				<h4>Hours</h4>
				<h4>Minutes</h4>
			</div>
			<div class="countdown"></div>
		</div>
	</div>
	<a class="forum__feed17--virtual" href="https://www.congressweb.com/signup/?id=DED461BD-960A-786B-FD976F05831E8C05" target="_blank">Click here to register for the Virtual Forum today!</a>-->

	<!-- Begin MailChimp Signup Form -->
	<!--<div id="mc_embed_signup">
	<form action="//afsp.us1.list-manage.com/subscribe/post?u=db11a6f2940a2b3d1fa0b2fe7&amp;id=3fbf9113af&FORM_LOC=forum16" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll" class="email">
			<h2 class="email__cta">Save the date</h2>
			<input type="email" value="" name="EMAIL" class="required email__form" id="mce-EMAIL">-->   <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<!--<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_db11a6f2940a2b3d1fa0b2fe7_3fbf9113af" tabindex="-1" value=""></div>
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
	</script>-->
	<!--End mc_embed_signup-->
	</section>
<!-- <section class="container forum__feed17">
	<iframe src="//content.jwplatform.com/players/x38iEmHa-3Lz1sRMc.html" frameborder="0" scrolling="auto" allowfullscreen autoplay=1></iframe>
</section>
<section class="container">
	<a href="http://www.windrosemedia.com/windstream/doubler/"><h3>Ask a question to be answered during the feed</h3></a>
</section> -->



<section class="container forum__teaser">
  <p>Through our work at the American Foundation for Suicide Prevention, we know there are actions our nation must take to reduce the annual suicide rate and support the one in five Americans who will experience a mental health condition at some time in their lives.</p>
  <p>Each year at the annual Advocacy Forum, members of the AFSP community gather in Washington, D.C. to meet with Members of Congress and convince them to invest in real care to support strong mental health services. Tune in via the Virtual Forum and learn more about our key positions.</p>
  <h2>What We're Asking For</h2>
  <ol class="ordered--round">
    <li>Insurance coverage for mental health and substance use conditions</li>
    <li>Funding for suicide prevention research</li>
    <li>Preservation of medicaid funding and expansion</li>
    <li>Military and veteran suicide prevention</li>
    <li>Full funding of the National Violent Death Reporting System</li>
    <li>Funding of the National Suicide Prevention Lifeline and crisis centers</li>
    <li>Preservation of funding for suicide prevention programs</li>
  </ol>
	<!--<p>Our Annual Advocacy Forum brings over 200 suicide prevention advocates to Washington, D.C., in the single largest effort to educate federal officials about suicide and suicide prevention.</p>-->
</section>
<section class="container forum__highlights">
	<h2>Highlights</h2>
	<div class="forum__highlights__container container js-flickity" data-flickity-options='{"wrapAround": true, "autoPlay": true, "setGallerySize": false}'>
		<?php	$advocacy_stories = get_field('fl_advocacy_stories');
		foreach($advocacy_stories as $story) : ?>

		<a class="forum__highlight" href="<?php echo get_permalink($story->ID); ?>">

				<?php $story_type = get_post_type($story);
				$image = '';
				if($story_type == 'post') :
					$image = get_field('b_featured_image', $story->ID);
				elseif($story_type == 'page') :
					$image = get_field('si_image', $story->ID);
				endif;
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
<section class="container">
  <div class="videoEmbed">
	  <iframe src="https://www.youtube.com/embed/ptks3dhiecA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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
		var date = new Date("June 12, 2017 08:00:00");
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
