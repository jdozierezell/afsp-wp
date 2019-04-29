<?php
/**
 * Template Name: Homepage v2
 *
 * @package afsp
 */

				get_header();

				get_template_part('template-parts/helpers/image-url');

				if(have_posts()) : while(have_posts()) : the_post();
					$poster = get_field('vh_poster');
				?>

<section class="video-hero">
	<div class="video-hero__wrapper">
		<video class="video-hero__video" src="<?php the_field('vh_video'); ?>" muted autoplay loop></video>
		<img class="video-hero__image" src="<?php echo $poster['url']; ?>" />
	</div>
	<div class="video-hero__cta">
		<h1 class="video-hero__header"><?php the_field('vh_header'); ?></h1>
		<p class="video-hero__body"><?php the_field('vh_body') ?></p>
		<a class="video-hero__button" href="<?php the_field('vh_button_link'); ?>"><?php the_field('vh_button') ?></a>
	</div>
</section>

				<?php get_template_part('template-parts/mailchimp'); ?>

				<?php if(have_rows('hp_happening')) :
				$counter = 0; ?>

<section class="container happening">
	<h2 class="happening__title">Learn what's happening</h2>
	<div class="happening__content">

				<?php while(have_rows('hp_happening')) : the_row();
						$delay = $counter/4; ?>

		<div class="happening__content--wrapper">

				<?php	if(get_row_layout() == 'hp_embed') :
							the_sub_field('hp_html');
						elseif(get_row_layout() == 'hp_internal_content') :
							$post_id = get_sub_field('hp_internal_content_page', false, false);
							$image = image_url('hp_internal_content_page_image', 1);
							if($post_id) : ?>

			<style>
			.happening__content--link-<?php echo $counter; ?> {

				<?php if(get_sub_field('hp_internal_content_page_title') === 'yes' || get_sub_field('hp_internal_content_page_title') === 'override') : ?>

				background-image:url('<?php echo $image; ?>?w=768&h=768&fit=crop&crop=faces'), linear-gradient(to bottom, transparent 50%, #2f3539);

				<?php else : ?>

				background-image:url('<?php echo $image; ?>?w=768&h=768&fit=crop&crop=faces');

				<?php endif; ?>

			}
			</style>

			<a class="wow fadeInUp happening__content--link-<?php echo $counter; ?>" data-wow-delay="<?php echo $delay; ?>s" href="<?php echo get_the_permalink($post_id); ?>" style="">

				<?php if(get_sub_field('hp_internal_content_page_title') === 'yes') : ?>

				<p><?php echo get_the_title($post_id); ?></p>

				<?php elseif(get_sub_field('hp_internal_content_page_title') === 'override' && get_sub_field('hp_internal_content_override_page_title') != '') : ?>

				<p><?php the_sub_field('hp_internal_content_override_page_title'); ?></p>

				<?php endif; ?>

			</a>

				<?php	endif;
						elseif(get_row_layout() == 'hp_external_content') :
							$url = get_sub_field('hp_external_content_page');
							$image = image_url('hp_external_content_page_image', 1);
							$title = get_sub_field('hp_external_content_page_title');
							if($url) : ?>

			<style>
			.happening__content--link-<?php echo $counter; ?> {
				background-image:url('<?php echo $image; ?>?w=768&h=768&fit=crop&crop=faces'), linear-gradient(to bottom, transparent 50%, #2f3539)
			}
			</style>

			<a class="wow fadeInUp happening__content--link-<?php echo $counter; ?>" data-wow-delay="<?php echo $delay; ?>s" href="<?php echo $url; ?>">

				<?php if($title) : ?>

				<p><?php echo $title; ?></p>

				<?php endif; ?>

			</a>

				<?php endif;
						endif; ?>

		</div>

				<?php $counter++;
				endwhile; ?>

	</div>
	<div class="happening__twitter">
		<a class="twitter-timeline"
			href="https://twitter.com/afspnational"
			data-chrome="nofooter"
			data-widget-id="372734608741113857">Tweets by @afspnational</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</section>

				<?php endif; ?>

				<?php if(get_field('sn_facebook') || get_field('sn_twitter') || get_field('sn_instagram') || get_field('sn_you_tube') || get_field('sn_google_plus') || get_field('sn_linked_in')) : ?>

<section class="social-icon__container">
	<h2>Have a conversation</h2>

				<?php if(get_field('sn_facebook')) : ?>

	<a class="wow fadeInDown" data-wow-delay="0.1s" href="https://facebook.com/<?php the_field('sn_facebook'); ?>" target="_blank">
		<svg class="social-icon social-icon--white facebook" viewBox="0 0 90 90">
			<g>
				<path d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998
					C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41
					h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z"/>
			</g>
		</svg>
	</a>

				<?php endif;
				if(get_field('sn_twitter')) : ?>

	<a class="wow fadeInDown" data-wow-delay="0.2s" href="https://twitter.com/<?php the_field('sn_twitter'); ?>" target="_blank">
		<svg class="social-icon social-icon--white" viewBox="0 0 612 612">
		<g>
			<g>
				<path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
					c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
					c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
					c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
					c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
					c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
					c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/>
			</g>
		</g>
	</svg>
	</a>

				<?php endif;
				if(get_field('sn_instagram')) : ?>

	<a class="wow fadeInDown" data-wow-delay="0.3s" href="https://instagram.com/<?php the_field('sn_instagram'); ?>" target="_blank">
		<svg class="social-icon social-icon--white" viewBox="0 0 97.395 97.395">
		<g>
			<path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895
				V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385
				h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572
				c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332
				c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188
				H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953
				c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z"/>
		</g>
	</svg>
	</a>

				<?php endif;
				if(get_field('sn_you_tube')) : ?>

	<a class="wow fadeInDown" data-wow-delay="0.4s" href="https://youtube.com/user/<?php the_field('sn_you_tube'); ?>" target="_blank">
		<svg class="social-icon social-icon--white" viewBox="0 0 90 90">
		<g>
			<path id="YouTube" d="M70.939,65.832H66l0.023-2.869c0-1.275,1.047-2.318,2.326-2.318h0.315c1.282,0,2.332,1.043,2.332,2.318
				L70.939,65.832z M52.413,59.684c-1.253,0-2.278,0.842-2.278,1.873V75.51c0,1.029,1.025,1.869,2.278,1.869
				c1.258,0,2.284-0.84,2.284-1.869V61.557C54.697,60.525,53.671,59.684,52.413,59.684z M82.5,51.879v26.544
				C82.5,84.79,76.979,90,70.23,90H19.771C13.02,90,7.5,84.79,7.5,78.423V51.879c0-6.367,5.52-11.578,12.271-11.578H70.23
				C76.979,40.301,82.5,45.512,82.5,51.879z M23.137,81.305l-0.004-27.961l6.255,0.002v-4.143l-16.674-0.025v4.073l5.205,0.015v28.039
				H23.137z M41.887,57.509h-5.215v14.931c0,2.16,0.131,3.24-0.008,3.621c-0.424,1.158-2.33,2.388-3.073,0.125
				c-0.126-0.396-0.015-1.591-0.017-3.643l-0.021-15.034h-5.186l0.016,14.798c0.004,2.268-0.051,3.959,0.018,4.729
				c0.127,1.357,0.082,2.939,1.341,3.843c2.346,1.69,6.843-0.252,7.968-2.668l-0.01,3.083l4.188,0.005L41.887,57.509L41.887,57.509z
					M58.57,74.607L58.559,62.18c-0.004-4.736-3.547-7.572-8.356-3.74l0.021-9.239l-5.209,0.008l-0.025,31.89l4.284-0.062l0.39-1.986
				C55.137,84.072,58.578,80.631,58.57,74.607z M74.891,72.96l-3.91,0.021c-0.002,0.155-0.008,0.334-0.01,0.529v2.182
				c0,1.168-0.965,2.119-2.137,2.119h-0.766c-1.174,0-2.139-0.951-2.139-2.119V75.45v-2.4v-3.097h8.954v-3.37
				c0-2.463-0.063-4.925-0.267-6.333c-0.641-4.454-6.893-5.161-10.051-2.881c-0.991,0.712-1.748,1.665-2.188,2.945
				c-0.444,1.281-0.665,3.031-0.665,5.254v7.41C61.714,85.296,76.676,83.555,74.891,72.96z M54.833,32.732
				c0.269,0.654,0.687,1.184,1.254,1.584c0.56,0.394,1.276,0.592,2.134,0.592c0.752,0,1.418-0.203,1.998-0.622
				c0.578-0.417,1.065-1.04,1.463-1.871l-0.099,2.046h5.813V9.74H62.82v19.24c0,1.042-0.858,1.895-1.907,1.895
				c-1.043,0-1.904-0.853-1.904-1.895V9.74h-4.776v16.674c0,2.124,0.039,3.54,0.102,4.258C54.4,31.385,54.564,32.069,54.833,32.732z
					M37.217,18.77c0-2.373,0.198-4.226,0.591-5.562c0.396-1.331,1.107-2.401,2.137-3.208c1.027-0.811,2.342-1.217,3.941-1.217
				c1.345,0,2.497,0.264,3.459,0.781c0.967,0.52,1.713,1.195,2.23,2.028c0.527,0.836,0.885,1.695,1.076,2.574
				c0.195,0.891,0.291,2.235,0.291,4.048v6.252c0,2.293-0.092,3.98-0.271,5.051c-0.177,1.074-0.557,2.07-1.146,3.004
				c-0.58,0.924-1.329,1.615-2.237,2.056c-0.918,0.445-1.968,0.663-3.154,0.663c-1.325,0-2.441-0.183-3.361-0.565
				c-0.923-0.38-1.636-0.953-2.144-1.714c-0.513-0.762-0.874-1.69-1.092-2.772c-0.219-1.081-0.323-2.707-0.323-4.874L37.217,18.77
				L37.217,18.77z M41.77,28.59c0,1.4,1.042,2.543,2.311,2.543c1.27,0,2.308-1.143,2.308-2.543V15.43c0-1.398-1.038-2.541-2.308-2.541
				c-1.269,0-2.311,1.143-2.311,2.541V28.59z M25.682,35.235h5.484l0.006-18.96l6.48-16.242h-5.998l-3.445,12.064L24.715,0h-5.936
				l6.894,16.284L25.682,35.235z"/>
		</g>
	</svg>
	</a>

				<?php endif;
				if(get_field('sn_google_plus')) : ?>

	<a class="wow fadeInDown" data-wow-delay="0.5s" href="https://plus.google.com/+<?php the_field('sn_google_plus'); ?>/posts" target="_blank">
		<svg class="social-icon social-icon--white" viewBox="-297 389 16 16">
			<path d="M-282.4,389h-13c-0.8,0-1.5,0.7-1.5,1.5v13c0,0.8,0.7,1.5,1.5,1.5h13c0.8,0,1.5-0.7,1.5-1.5v-13
				C-280.9,389.7-281.6,389-282.4,389z M-290.9,401c-2.2,0-4-1.8-4-4s1.8-4,4-4c1.1,0,2,0.4,2.7,1l-1.1,1c-0.3-0.3-0.8-0.6-1.6-0.6
				c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5c1.6,0,2.2-1.1,2.3-1.7h-2.3v-1.4h3.8c0,0.2,0.1,0.4,0.1,0.7
				C-287.1,399.4-288.6,401-290.9,401L-290.9,401z M-282.9,397h-1v1h-1v-1h-1v-1h1v-1h1v1h1V397z"/>
		</svg>
	</a>

				<?php endif;
				if(get_field('sn_linked_in')) : ?>

	<a class="wow fadeInDown" data-wow-delay="0.6s" href="https://linkedin.com/company/<?php the_field('sn_linked_in'); ?>" target="_blank">
		<svg class="social-icon social-icon--white" viewBox="0 0 512 512">
		<g>
			<path d="M426,0H86C38.7,0,0,38.7,0,86v340c0,47.3,38.7,86,86,86h340c47.301,0,86-38.7,86-86V86C512,38.7,473.301,0,426,0z M192,416
				h-64V192h64V416z M160,160c-17.673,0-32-14.327-32-32s14.327-32,32-32s32,14.327,32,32S177.673,160,160,160z M416,416h-64V288
				c0-17.673-14.326-32-32-32s-32,14.327-32,32v128h-64V192h64v39.736C301.199,213.604,321.377,192,344,192c39.766,0,72,35.817,72,80
				V416z"/>
		</g>
	</svg>
	</a>

				<?php endif;
				if(get_field('sn_mighty')) : ?>

	<a class="wow fadeInDown" data-wow-delay="0.7s" href="http://themighty.com/partner/<?php the_field('sn_mighty'); ?>" target="_blank">
		<svg class="social-icon social-icon--white" viewBox="-135 311.7 339.3 171.3">
			<g>
				<g>
					<path class="st0" d="M47.2,318.1c-0.9-1.2-2.4-1.9-4.1-1.9c-3.2,0-6.3,2.4-7.1,5.4l-0.8,3.2H14c-4.2,0-8.4,3.4-9.5,7.5
						c-0.5,2.2-0.2,4.3,1.1,5.9c1.2,1.5,3,2.4,5.2,2.4c2.8,0,5.7-1.5,7.6-3.8c0.5-0.6,0.4-1.6-0.2-2.1c-0.6-0.5-1.6-0.4-2.1,0.2
						c-1.4,1.7-3.4,2.7-5.3,2.7c-1.2,0-2.2-0.4-2.8-1.2c-0.7-0.8-0.8-2-0.5-3.3c0.7-2.8,3.8-5.3,6.6-5.3h9.7l-5.9,23.6
						c-0.3,1.1-0.1,2.2,0.6,3c0.6,0.8,1.6,1.2,2.7,1.2c0.8,0,1.5-0.7,1.5-1.5c0-0.8-0.7-1.5-1.5-1.5c-0.1,0-0.3,0-0.3-0.1
						c0-0.1-0.1-0.2,0-0.4l6.1-24.3h7.7l-6.5,25.9c-0.2,0.8,0.3,1.6,1.1,1.8c0.1,0,0.2,0,0.4,0c0.7,0,1.3-0.5,1.5-1.1l3-11.8v-0.1
						c0.6-2.4,3.1-4.4,5.5-4.4c1,0,1.8,0.4,2.3,1c0.5,0.7,0.7,1.7,0.4,2.7l-2.4,9.4c-0.3,1.1-0.1,2.2,0.6,3c0.6,0.8,1.6,1.2,2.7,1.2
						c0.8,0,1.5-0.7,1.5-1.5c0-0.8-0.7-1.5-1.5-1.5c-0.1,0-0.3,0-0.3-0.1s-0.1-0.2,0-0.4l2.4-9.4c0.5-2,0.1-3.9-1-5.3s-2.7-2.2-4.7-2.2
						c-1.4,0-2.7,0.4-3.9,1.1l2.1-8.4h3.4c3.2,0,6.3-2.4,7.1-5.4C48.4,320.8,48.1,319.3,47.2,318.1z M45.1,321.7
						c-0.4,1.7-2.4,3.2-4.2,3.2h-2.7l0.6-2.4c0.4-1.7,2.4-3.2,4.2-3.2c0.8,0,1.4,0.3,1.8,0.7C45.1,320.4,45.2,321,45.1,321.7z"/>
					<path class="st0" d="M65.9,338.8c-0.7-2.1-3.1-4-6.9-3.6c-4.8,0.5-9.2,4.6-10.5,9.8c-0.8,3.1-0.3,6.1,1.2,8.1
						c1.2,1.6,3,2.4,5.1,2.4c2.6,0,5.3-1.4,7.4-3.7c0.6-0.6,0.5-1.6-0.1-2.1c-0.6-0.6-1.6-0.5-2.1,0.1c-1.6,1.7-3.5,2.8-5.2,2.8
						c-1.1,0-2.1-0.4-2.7-1.3c-1-1.3-1.2-3.3-0.7-5.5c1.1-4.4,4.9-7.2,7.9-7.5c2.1-0.2,3.4,0.6,3.7,1.5s-0.3,2-1.7,2.8
						c-3,1.7-4.9,1.1-5,1c-0.8-0.3-1.6,0-2,0.8c-0.3,0.8,0,1.6,0.8,2c0.3,0.1,3.3,1.3,7.6-1.2C65.4,343.6,66.6,341.1,65.9,338.8z"/>
				</g>
				<g>
					<g>
						<g>
							<path class="st0" d="M112.8,386v74c0,2.6-0.4,5.9-1.8,7.4c5.7,0.4,11.3,0.9,16.7,1.4c-1.3-1.5-1.7-4.7-1.7-7.3V386h7.3
								c2.7,0,5.1,0.5,6.6,1.9V386v-12.5h-6.6h-27.1h-7.5l0,0v14.4c1.4-1.4,4.8-1.9,7.6-1.9C106.3,386,112.8,386,112.8,386z"/>
						</g>
						<g>
							<path class="st0" d="M-53,468h0.2c5.9-0.5,11.9-0.9,18.1-1.3c-1.3-1.3-1.8-4.3-1.9-7v-79.2c0.1-2.6,0.5-5.6,1.9-7h-1.9l0,0
								h-14.5l0,0H-53c1.3,1.4,1.8,4.4,1.9,7.1v80.3C-51.2,463.6-51.7,466.6-53,468z"/>
						</g>
						<g>
							<path class="st0" d="M-127.6,471.1c0,2.7-0.5,6.1-1.9,7.5c4.4-0.9,10.1-1.8,14.9-2.7v-7.5v-53.9l10.9,54.2
								c0.3,2,0.6,4.7-0.1,5.2c3.6-0.6,7.3-1.1,11.1-1.6c-0.5-0.7-0.3-2.9,0-4.6l10.7-54.2v57.3c4.6-0.5,10.4-1.1,15.2-1.5h0.1
								c-1.4-1.4-1.9-4.8-1.9-7.6v-80.6c0-2.7,0.5-6.1,1.9-7.6h-1.9h-12.3h-5l-11.8,61.2l-12-61.2h-5.1h-12.8h-1.7
								c0.9,1,1.5,2.8,1.7,4.7C-127.6,378.2-127.6,471.1-127.6,471.1z"/>
						</g>
						<g>
							<path class="st0" d="M40.2,381.1v76.1l0,0c0,2.7-0.4,6-1.8,7.5c6.1,0,12.1,0.1,18.1,0.3c-1.1-1.3-1.6-3.9-1.7-6.3v-32.2h15.4
								v31.2l0,0c0,2.7-0.5,6-1.8,7.5c6.1,0.2,12.2,0.4,18.2,0.7c-1.2-1.3-1.7-3.9-1.8-6.3V380c0.1-2.5,0.6-5.2,1.9-6.4h-1.9l0,0H70.3
								l0,0h-1.9c1.4,1.4,1.9,4.8,1.9,7.6l0,0v32H54.9V380c0.1-2.5,0.6-5.2,1.9-6.4h-1.9l0,0H40.4l0,0h-1.9
								C39.8,375,40.2,378.3,40.2,381.1L40.2,381.1z"/>
						</g>
					</g>
					<g>
						<path class="st0" d="M23.7,452.3v-35.8H8.9H1.3v11.7v1.9c1.4-1.4,4.8-1.9,7.6-1.9h1.9v16c0,4.3-2.3,8.9-8.8,8.9s-8.8-4.6-8.8-8.9
							v-51.3c0-4.3,2.7-8.6,8.8-8.6c6.2,0,8.4,4.4,8.4,8.5v8.3c-0.1,1.4-0.2,2.7-0.5,3h0.5l0,0H23l0,0h1.9c-1.4-1.4-1.9-4.8-1.9-7.6
							v-2.2c0-14.2-7.7-22.3-21-22.3c-13.2,0-22.1,9-22.1,22.3v48.5c0,13.6,8,22.3,20.3,22.3c5.1,0,9.2-1.4,12.2-3.9
							c1.9,2.4,5.2,3.4,10.2,3.4h0.9h0.1h1.9c-1.4-1.4-1.9-4.8-1.9-7.6v-4.7H23.7z"/>
					</g>
					<g>
						<path class="st0" d="M183.7,373.5l-9.5,36.2l-9.7-36.2h-14.8l0,0h-1.6c1.3,0.8,2.3,2.7,3,4.8l15,49.7v38.1c0,2.6-0.4,5.6-1.7,7.1
							c6.1,0.9,12,1.8,17.6,2.8c-1-1.4-1.4-3.9-1.4-6.1V428l15.9-49.7l0,0c0.7-2,1.8-4,3.1-4.8C199.6,373.5,183.7,373.5,183.7,373.5z"
							/>
					</g>
				</g>
			</g>
			</svg>
	</a>

				<?php endif; ?>

</section>

				<?php endif; ?>


				<?php get_template_part('template-parts/highlight-pages'); ?>

				<?php endwhile; ?>
				<?php endif; ?>

				<?php $today = new DateTime();
				$date = $today->format('Y-m-d');
				$day_of_week = $today->format('N');
				$this_week = $today->format('W');
				$givingTuesday = new DateTime('2018-11-27');
				$givingTuesday = $givingTuesday->format('Y-m-d');

				if($date == $givingTuesday) : // is it Giving Tuesday?
					require(locate_template('template-parts/modals/modal-giving-tuesday-2018.php'));
				elseif($day_of_week == '3') : // is it wednesday?
					require(locate_template('template-parts/modals/weekly-modals-wednesday.php'));
				endif; ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/svg4everybody.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>

				<?php get_footer(); ?>
