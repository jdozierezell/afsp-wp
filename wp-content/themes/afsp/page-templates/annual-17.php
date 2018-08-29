<?php
/**
 * Template Name: Annual Report 2017
 *
 * @package afsp
 */
?>

<?php get_template_part( 'template-parts/head' ); ?>

<body id="ar17-body" class="stop-scrolling">

<div id="loader-wrapper">
	<div id="loader-logo"></div>
	<div class="spinner">
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
		<div class="bounce4"></div>
		<div class="bounce5"></div>
	</div>	
	<div id="loader-text">Loading Annual Report...</div>
</div>

	<div id="ar17-menu-toggle">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<ul class="ar17-menu" id="ar17-menu">
		<li class="ar17-menu-item"><a class="ar17-menu-link" href="#ar17-welcome">30 Years Strong</a></li>
		<li class="ar17-menu-item"><a class="ar17-menu-link" href="#map-1">Community</a></li>
		<li class="ar17-menu-item"><a class="ar17-menu-link" href="#timeline-embed">Milestones</a></li>
		<li class="ar17-menu-item"><a class="ar17-menu-link" href="#map-2">Conversations</a></li>
		<li class="ar17-menu-item"><a class="ar17-menu-link" href="#ar17-recognition">Achievements</a></li>
		<li class="ar17-menu-item"><a class="ar17-menu-link" href="#ar17-financials">Financials</a></li>
		<li class="ar17-menu-item"><a class="ar17-menu-link" href="#ar17-councils">Boards &amp; Councils</a></li>
		<li class="ar17-menu-item"><a class="ar17-menu-link" href="#ar17-donors">Donors</a></li>
	</ul>
	<div id="ar17-fullpage">
		<div class="ar17-section cover" id="ar17-cover">
			<img src="https://chapterland.imgix.net/wp-content/uploads/sites/13/2017/12/StackedLogoWhite.png" alt="AFSP Logo">
			<h1>Annual Report 2017</h1>
			<section class="social-icon__container social-icon__container--annual">
				<a class="wow fadeInDown" data-wow-delay="0.1s" href="https://facebook.com/afspnational" target="_blank">
					<svg class="social-icon social-icon--white facebook" viewBox="0 0 90 90">
						<g>
							<path d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998
								C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41
								h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z"/>
						</g>
					</svg>
				</a>
				<a class="wow fadeInDown" data-wow-delay="0.2s" href="https://twitter.com/afspnational" target="_blank">
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
				<a class="wow fadeInDown" data-wow-delay="0.3s" href="https://instagram.com/afspnational" target="_blank">
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
				<a class="wow fadeInDown" data-wow-delay="0.4s" href="https://youtube.com/user/afspnational" target="_blank">
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
				<a class="wow fadeInDown" data-wow-delay="0.5s" href="https://plus.google.com/+afspnational" target="_blank">
					<svg class="social-icon social-icon--white" viewBox="-297 389 16 16">
						<path d="M-282.4,389h-13c-0.8,0-1.5,0.7-1.5,1.5v13c0,0.8,0.7,1.5,1.5,1.5h13c0.8,0,1.5-0.7,1.5-1.5v-13
							C-280.9,389.7-281.6,389-282.4,389z M-290.9,401c-2.2,0-4-1.8-4-4s1.8-4,4-4c1.1,0,2,0.4,2.7,1l-1.1,1c-0.3-0.3-0.8-0.6-1.6-0.6
							c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5c1.6,0,2.2-1.1,2.3-1.7h-2.3v-1.4h3.8c0,0.2,0.1,0.4,0.1,0.7
							C-287.1,399.4-288.6,401-290.9,401L-290.9,401z M-282.9,397h-1v1h-1v-1h-1v-1h1v-1h1v1h1V397z"/>
					</svg>
				</a>
				<a class="wow fadeInDown" data-wow-delay="0.6s" href="https://linkedin.com/company/american-foundation-for-suicide-prevention" target="_blank">
					<svg class="social-icon social-icon--white" viewBox="0 0 512 512">
					<g>
						<path d="M426,0H86C38.7,0,0,38.7,0,86v340c0,47.3,38.7,86,86,86h340c47.301,0,86-38.7,86-86V86C512,38.7,473.301,0,426,0z M192,416
							h-64V192h64V416z M160,160c-17.673,0-32-14.327-32-32s14.327-32,32-32s32,14.327,32,32S177.673,160,160,160z M416,416h-64V288
							c0-17.673-14.326-32-32-32s-32,14.327-32,32v128h-64V192h64v39.736C301.199,213.604,321.377,192,344,192c39.766,0,72,35.817,72,80
							V416z"/>
					</g>
				</svg>
				</a>
			</section>
		</div>
		<div class="ar17-section bob-slide" id="ar17-welcome">
			<h2>Thirty Years Strong in the Fight to #StopSuicide</h2>
			<div class="bob-slide__content">
				<div class="videoEmbed">
					<iframe width="853" height="480" src="https://player.vimeo.com/video/246795447" frameborder="0" allowfullscreen=""></iframe>
				</div>
				<div class="bob-letter">
					<h3>"In 2017, AFSP celebrated its 30th anniversary which provided an opportunity to look back and an opportunity to look ahead at the impact we can make throughout the country. The future clearly lies in expanding our efforts in communities."</h3>
					<p><a href="https://afsp.org/wp-content/uploads/2018/01/annual-letter.pdf">Click here</a> to read a message from AFSP's CEO, Robert Gebbia, and AFSP National Board Chair, Steve Siple.</p>
				</div>
			</div>
		</div>
		<div class="ar17-section ol-map" id="map-1-wrapper">
			<h2>Growing Our Suicide Prevention Community</h2>
			<div class="ar17-map" id="map-1"></div>
			<div class="ar17-map ar17-map-ak" id="map-1-ak"></div>
			<div class="ar17-map ar17-map-hi" id="map-1-hi"></div>
			<div class="ol-map__events">
				4 Research Connection Events
			</div>
			<div class="ol-map__events">
				34 State and Federal Capitol Days
			</div>
			<div class="ol-map__events">
				41 New Interactive Screening Program Sites
			</div>
			<div class="ol-map__events">
				80 Chapter Fundraising Events
			</div>
			<div class="ol-map__events">
				341 International Survivors of Suicide Loss Day Events
			</div>
			<div class="ol-map__events">
				558 Out of the Darkness Walks
			</div>
			<div class="ol-map__events">
				1745 School and Community Education Programs
			</div>
			<div class="ol-map__events">
				2806 Total Events Worldwide
			</div>
		</div>
		<div id="timeline-embed" style="width: 100vw; height: 100vh;"></div>
		<div class="ar17-section ol-map" id="map-2-wrapper">
			<h2>Our AFSP Stories From 2017</h2>
			<div class="ar17-map" id="map-2"></div>
			<div class="ar17-map ar17-map-ak" id="map-2-ak"></div>
			<div class="ar17-map ar17-map-hi" id="map-2-hi"></div>
		</div>
		<div class="ar17-section project2025-slide" id="ar17-project-2025">
			<h2>Project 2025: Leading the Fight to Reduce the Suicide Rate</h2>
			<div class="project2025-slide__content">
				<div class="videoEmbed">
					<iframe width="853" height="480" src="https://player.vimeo.com/video/246787591" frameborder="0" allowfullscreen=""></iframe>
				</div>
				<div class="project2025-statement">
					<h3>The American Foundation for Suicide Prevention has set a bold goal to reduce the rate of suicide in the United States by the year 2025. We’ve launched <a href="https://afsp.org/campaigns/project-2025/" target="_blank">Project 2025</a> to help us attain that goal.</h3>
					<p>Thanks to our investments in science, we know more about how to prevent suicide than ever before. Through collaborations with other organizations, accrediting bodies, professional associations, and leaders in other industry sectors, AFSP is focusing its prevention efforts on the kinds of programs, policies and interventions that will save the most lives in the shortest amount of time.</p>
				</div>
			</div>
		</div>
		<?php if (have_rows('ar_recognition')) :
			$rec_count = 0; ?>
			<div class="ar17-section recognition-slide" id="ar17-recognition">
				<h2>Recognizing Our 2017 Achievements</h2>
				<?php while (have_rows('ar_recognition')) : the_row(); 
				if ($rec_count % 2 === 0) : ?>
					<div class="recognition-section">
						<?php if (have_rows('ar_recognition_images')) : ?>
						<div class="recognition-images">
							<?php while (have_rows('ar_recognition_images')) : the_row();
							$rec_image = get_sub_field('ar_recognition_image'); ?>
								<img class="recognition-image" src="<?php echo $rec_image['url']; ?>" alt="">
							<?php endwhile; ?>
						</div>
						<?php endif; ?>
						<div class="recognition-copy">
							<h3><?php echo get_sub_field('ar_recognition_title'); ?></h3>
								<?php echo get_sub_field('ar_recognition_text'); ?>
						</div>
					</div>
				<?php elseif ($rec_count % 2 === 1) : ?>
					<div class="recognition-section">
					<div class="recognition-copy">
						<h3><?php echo get_sub_field('ar_recognition_title'); ?></h3>
							<?php echo get_sub_field('ar_recognition_text'); ?>
					</div>
					<?php if (have_rows('ar_recognition_images')) : ?>
					<div class="recognition-images">
						<?php while (have_rows('ar_recognition_images')) : the_row();
						$rec_image = get_sub_field('ar_recognition_image'); ?>
							<img class="recognition-image" src="<?php echo $rec_image['url']; ?>" alt="">
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
					</div>
				<?php endif; 
				$rec_count++;
				endwhile; ?>
			</div>
		<?php endif; ?>
		<div class="ar17-section comms-achievements-slide">
			<h2>Shaping the Conversation in Media and Entertainment</h2>
			<div class="videoEmbed">
				<iframe width="853" height="480" src="https://player.vimeo.com/video/246811261" frameborder="0" allowfullscreen=""></iframe>
			</div>
		</div>
		<div class="ar17-section get-involved-slide" id="ar17-help">
			<h2>Ways You Can Get Involved</h2>
			<div class="help">
				<a href="<?= get_site_url(); ?>/about-suicide">
					<img src="https://afsp.imgix.net/wp-content/uploads/2017/10/education.svg" target="_blank" alt="">
					<p>Learn more about Suicide</p>
				</a>
				<a href="<?= get_site_url(); ?>/mentalhealth">
					<img src="https://afsp.imgix.net/wp-content/uploads/2017/10/communications.svg" target="_blank" alt="">
					<p>Start a Conversation</p>
				</a>
				<a href="<?= get_site_url(); ?>/advocacy">
					<img src="https://afsp.imgix.net/wp-content/uploads/2017/10/advocacy.svg" target="_blank" alt="">
					<p>Advocate for Suicide Prevention</p>
				</a>
				<a href="<?= get_site_url(); ?>/chapters">
					<img src="https://afsp.imgix.net/wp-content/uploads/2017/10/chapters.svg" target="_blank" alt="">
					<p>Find your Local Chapter</p>
				</a>
				<a href="<?= get_site_url(); ?>/give">
					<img src="https://afsp.imgix.net/wp-content/uploads/2017/10/fundraising.svg" target="_blank" alt="">
					<p>Donate Today</p>
				</a>
			</div>
		</div>
		<div class="ar17-section financials-slide" id="ar17-financials">
			<h2>2017 AFSP Financials</h2>
			<?php if (have_rows('ar_financials')) : ?>
				<div class="financial-highlights">
					<?php while (have_rows('ar_financials')) : the_row(); 
					$fin_image = get_sub_field('ar_financial_image');	?>
						<div class="financial-highlight">
							<img src="<?= $fin_image['url']; ?>" alt="<?= $fin_image['alt']; ?>">
							<?= get_sub_field('ar_financial_text'); ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<h3 class="financials-summary">The financial results this year are a reflection of our continual transformation and growth. The above are a few highlights from our most recent audit. For complete audited financial statements, including auditor's notes, <a href="https://afsp.org/wp-content/uploads/2016/01/American-Foundation-for-Suicide-Prevention_17-FS_Final.pdf" target="_blank">click here</a> or call <a href="tel:1-212-363-3500">(212) 363-3500</a>.</h3>
		</div>
		<?php if (have_rows('ar_councils')) : ?>
			<div class="ar17-section council-slide" id="ar17-councils">
				<h2>AFSP Leadership</h2>
				<div class="councils">
					<?php while(have_rows('ar_councils')) : the_row(); ?>
						<h3><?= get_sub_field('ar_council_name'); ?></h3>
						<?= get_sub_field('ar_council_members'); ?>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (have_rows('ar_donors')) : ?>
			<div class="ar17-section donor-slide" id="ar17-donors">
				<h2>Our Donors Make Our Mission Possible</h2>
				<div class="donors">
					<?php while(have_rows('ar_donors')) : the_row(); ?>
						<h3><?= get_sub_field('ar_donor_category'); ?></h3>
						<?= get_sub_field('ar_donor_name'); ?>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="ar17-section close" id="ar17-close">
			<img src="https://chapterland.imgix.net/wp-content/uploads/sites/13/2017/12/StackedLogoWhite.png" alt="AFSP Logo">
			<h2>Thank you for viewing.</h2>
			<h3>To learn about what we're doing today, visit our homepage at <a href="https://afsp.org">afsp.org</a>.</h3>
			<section class="social-icon__container social-icon__container--annual">
				<a class="wow fadeInDown" data-wow-delay="0.1s" href="https://facebook.com/afspnational" target="_blank">
					<svg class="social-icon social-icon--white facebook" viewBox="0 0 90 90">
						<g>
							<path d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998
								C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41
								h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z"/>
						</g>
					</svg>
				</a>
				<a class="wow fadeInDown" data-wow-delay="0.2s" href="https://twitter.com/afspnational" target="_blank">
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
				<a class="wow fadeInDown" data-wow-delay="0.3s" href="https://instagram.com/afspnational" target="_blank">
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
				<a class="wow fadeInDown" data-wow-delay="0.4s" href="https://youtube.com/user/afspnational" target="_blank">
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
				<a class="wow fadeInDown" data-wow-delay="0.5s" href="https://plus.google.com/+afspnational" target="_blank">
					<svg class="social-icon social-icon--white" viewBox="-297 389 16 16">
						<path d="M-282.4,389h-13c-0.8,0-1.5,0.7-1.5,1.5v13c0,0.8,0.7,1.5,1.5,1.5h13c0.8,0,1.5-0.7,1.5-1.5v-13
							C-280.9,389.7-281.6,389-282.4,389z M-290.9,401c-2.2,0-4-1.8-4-4s1.8-4,4-4c1.1,0,2,0.4,2.7,1l-1.1,1c-0.3-0.3-0.8-0.6-1.6-0.6
							c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5c1.6,0,2.2-1.1,2.3-1.7h-2.3v-1.4h3.8c0,0.2,0.1,0.4,0.1,0.7
							C-287.1,399.4-288.6,401-290.9,401L-290.9,401z M-282.9,397h-1v1h-1v-1h-1v-1h1v-1h1v1h1V397z"/>
					</svg>
				</a>
				<a class="wow fadeInDown" data-wow-delay="0.6s" href="https://linkedin.com/company/american-foundation-for-suicide-prevention" target="_blank">
					<svg class="social-icon social-icon--white" viewBox="0 0 512 512">
					<g>
						<path d="M426,0H86C38.7,0,0,38.7,0,86v340c0,47.3,38.7,86,86,86h340c47.301,0,86-38.7,86-86V86C512,38.7,473.301,0,426,0z M192,416
							h-64V192h64V416z M160,160c-17.673,0-32-14.327-32-32s14.327-32,32-32s32,14.327,32,32S177.673,160,160,160z M416,416h-64V288
							c0-17.673-14.326-32-32-32s-32,14.327-32,32v128h-64V192h64v39.736C301.199,213.604,321.377,192,344,192c39.766,0,72,35.817,72,80
							V416z"/>
					</g>
				</svg>
				</a>
			</section>
		</div>
	</div>
	<?php if (have_rows('ar_stories')) : ?>
	<div class="ar17-stories">
		<?php while (have_rows('ar_stories')) : the_row(); ?>
			<div class="story" id="<?= get_sub_field('ar_story_id'); ?>">
				<div class="left-panel">
					<h3>About <?= get_sub_field('ar_program_name'); ?></h3>
					<?php the_sub_field('ar_program_accomplishments'); ?>
				</div>
				<div class="right-panel">
					<h3>Volunteer Spotlight</h3>
					<h4><?= get_sub_field('ar_story_title'); ?></h4>
					<?php $image = get_sub_field(ar_main_image); ?>
					<img src="<?= $image['url']; ?>?w=1080" alt="">
					<?php the_sub_field('ar_story_body'); ?>
				</div>
				<i class="fa fa-times-circle ar17-close" aria-hidden="true"></i>
			</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	<div class="overlay">
		<div class="iconContainer">
			<div class="phone"><i class="fa fa-repeat"></i></div>
			<p>Please rotate your device.</p>
			<p>Please use a laptop or desktop computer for the best experience.</p>
		</div>
	</div>
	<?php get_template_part( 'template-parts/ar17/ar17', 'events' ); ?>
	<?php get_template_part( 'template-parts/ar17/ar17', 'recognition' ); ?>
	<?php get_template_part( 'template-parts/ar17/ar17', 'stories' ); ?>
	<script>
	const options = {
  	hash_bookmark: true
  }

  const timeline = new TL.Timeline('timeline-embed',
    'https://docs.google.com/spreadsheets/d/1fFJOOGcXqQ_VXCi0fCpeqwZbjXPMyrsCUe_SNkl6jKs/edit#gid=0', options);

	function hideLoader () {
		document.getElementById('loader-wrapper').className = 'loader-wrapper-hidden'
		document.body.classList.remove('stop-scrolling')
	}

	window.addEventListener('load', function() {
		hideLoader()
	})
	</script>
</body>

<?php wp_footer(); ?>