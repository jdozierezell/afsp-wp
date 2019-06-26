<?php
/**
 * Template part for displaying the chapter's homepage.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package afsp
 */

?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=197494263639513&autoLogAppEvents=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/as-nav-for.js'; ?>"></script>

<?php if(have_posts()) : while(have_posts()) : the_post();

				get_template_part('template-parts/chapter-pixels');

				get_template_part('template-parts/splash-container');

				get_template_part('template-parts/chapter-email'); // chapter email signup ?>

<section class="chapter__features container">

				<?php get_template_part('template-parts/donor-drive-display'); // chapter events template ?>

				<?php get_template_part('template-parts/chapter-programs-display'); // chapter programs template ?>

</section>
<section class="container">
	<div class="state-sheet">
		<h2 class="state-sheet__cta">Suicide affects each state differently.</h2>

				<?php $file_name = get_field('caf_fact_sheet_state');
				$file_name = preg_replace("/[\s]/", "-", $file_name); ?>

		<div class="state-sheet__button"><a href="<?php get_home_url(); ?>/about-suicide/state-fact-sheets/#<?php echo $file_name; ?>">Get state facts</a></div>
	</div>
</section>
<section class="splash splash--volunteer">

				<?php echo afsp_imgix('splash__image', false, 'v', '100vw', 3000, 1000, 768, 768); // lovely piece of code resides at inc/imgix.php ?>

</section>

<section class="volunteer container__full">
	<div class="container">
		<div class="volunteer__cta">
			<p class="volunteer__body">It doesn't take much to make a big difference, and there are opportunities for all levels of commitment.<br><br>Contact us to learn how you can get involved in your community.

				<?php if(get_field('ch_use_email')) :
					$volunteer = 'mailto:' . get_field('v_staff_email') . '?subject=I\'m interested in volunteering with ' . get_the_title();
				else :
					$volunteer = get_field('ch_alternate_volunteer');
				endif;
				?>

				<a class="button features__button" href="<?php echo $volunteer; ?>">Volunteer with <?php the_title(); ?></a>
			</p>
		</div>
		<div class="volunteer__staff">

				<?php $staffImage = get_field('v_staff_image');
				$staffImage_array = wp_get_attachment_image_src($staffImage['id']);
				$staffSrc = $staffImage_array[0];
                if($staffPos = strpos($staffSrc, '?') !== false) :
                    $staffSrc = strstr($staffSrc, '?', true);
                endif;

				$secondStaffImage = get_field('v_secondStaff_image');
				$secondStaffImage_array = wp_get_attachment_image_src($secondStaffImage['id']);
				$secondStaffSrc = $secondStaffImage_array[0];
                if($secondStaffPos = strpos($secondStaffSrc, '?') !== false) :
                    $secondStaffSrc = strstr($secondStaffSrc, '?', true);
                endif;

                $thirdStaffImage = get_field('v_thirdStaff_image');
                $thirdStaffImage_array = wp_get_attachment_image_src($thirdStaffImage['id']);
                $thirdStaffSrc = $thirdStaffImage_array[0];
                if($thirdStaffPos = strpos($thirdStaffSrc, '?') !== false) :
                    $thirdStaffSrc = strstr($thirdStaffSrc, '?', true);
                endif; ?>

			<h4 class="volunteer__contact">Contact</h4>
			<!--First Contact-->
			<div class="volunteer__contact-details">

				<?php if($staffImage) : ?>

				<img class="volunteer__image" src="<?php echo $staffSrc; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php $staffImage['alt']; ?>" />

				<?php endif; ?>

				<div class="volunteer__contact">
					<h3 class="volunteer__name"><?php the_field('v_staff_name'); ?></h3>
					<h4 class="volunteer__title"><?php the_field('v_staff_title'); ?></h4>
					<a class="volunteer__email" href="mailto:<?php the_field('v_staff_email'); ?>"><?php the_field('v_staff_email'); ?></a>

				<?php if(get_field('v_staff_phone')) : ?>

					<p class="volunteer__phone"><?php the_field('v_staff_phone'); ?></p>

				<?php endif; ?>

				</div>
			</div>
            <!--Second Contact-->
			<?php if(get_field('v_second_contact') == true) : ?>

			<div class="volunteer__contact-details">

				<?php if($secondStaffImage) : ?>

				<img class="volunteer__image" src="<?php echo $secondStaffSrc; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php $secondStaffImage['alt']; ?>" />

				<?php endif; ?>

				<div class="volunteer__contact">
					<h3 class="volunteer__name"><?php the_field('v_second_staff_name'); ?></h3>
					<h4 class="volunteer__title"><?php the_field('v_second_staff_title'); ?></h4>
					<a class="volunteer__email" href="mailto:<?php the_field('v_second_staff_email'); ?>"><?php the_field('v_second_staff_email'); ?></a>

				<?php if(get_field('v_second_staff_phone')) : ?>

					<p class="volunteer__phone"><?php the_field('v_second_staff_phone'); ?></p>

				<?php endif; ?>

				</div>
			</div>
        <!--Third Contact-->
        <?php if(get_field('v_second_contact') == true) : ?>

            <div class="volunteer__contact-details">

                <?php if($secondStaffImage) : ?>

                    <img class="volunteer__image" src="<?php echo $secondStaffSrc; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php $secondStaffImage['alt']; ?>" />

                <?php endif; ?>

                <div class="volunteer__contact">
                    <h3 class="volunteer__name"><?php the_field('v_second_staff_name'); ?></h3>
                    <h4 class="volunteer__title"><?php the_field('v_second_staff_title'); ?></h4>
                    <a class="volunteer__email" href="mailto:<?php the_field('v_second_staff_email'); ?>"><?php the_field('v_second_staff_email'); ?></a>

                    <?php if(get_field('v_second_staff_phone')) : ?>

                        <p class="volunteer__phone"><?php the_field('v_second_staff_phone'); ?></p>

                    <?php endif; ?>

                </div>
            </div>

				<?php endif; ?>

		</div>
	</div>
</section>
<section class="container">
	<h2 class="everyday-heroes__title">About the <?php the_title(); ?> chapter</h2>

				<?php if(have_rows('ch_chapter_faces')) : ?>

	<div class="gallery js-flickity everyday-heroes__carousel" data-flickity-options='{ "wrapAround": true, "pageDots": false, "autoPlay": true }'>

				<?php	while(have_rows('ch_chapter_faces')) : the_row();
						$image = get_sub_field('ch_face_image');
						$image_array = wp_get_attachment_image_src($image['id']);
						$src = $image_array[0];
          	if($pos = strpos($src, '?') !== false) :
          		$src = strstr($src, '?', true);
          	endif;
          	$post_object = get_sub_field('ch_face_link');
          	$anchor = get_sub_field('ch_face_id') != '' ? '#' . get_sub_field('ch_face_id') : '';
						if($post_object) :
							$post = $post_object;
							setup_postdata($post);
							$permalink = get_permalink(); ?>

		<div class="gallery-cell gallery-cell__carousel">
			<a class="everyday-heroes__image-link" href="<?php echo get_permalink() . $anchor; ?>">
				<img class="everyday-heroes__image" src="<?php echo $src; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php the_title(); ?>" />
			</a>
		</div>

				<?php	wp_reset_postdata(); // reset the post object
						endif;
					endwhile; ?>

	</div>

				<?php endif;
				if(get_field('ch_about')) : ?>

	<div class="chapter__about">

				<?php the_field('ch_about'); ?>

	</div>

				<?php endif;
				if(get_field('sn_facebook') || get_field('sn_twitter') || get_field('sn_instagram') || get_field('sn_flickr')) : ?>

	<hr>
	<h3 class="landing__header">Connect with us</h3>
	<section class="social-feeds">

				<?php if(get_field('sn_facebook') != '') : ?>

		<div class="facebook">
			<div class="fb-page" data-href="https://www.facebook.com/<?php echo get_field('sn_facebook'); ?>" data-width="500" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-tabs="timeline"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/<?php echo get_field('sn_facebook'); ?>"><a href="https://www.facebook.com/<?php echo get_field('sn_facebook'); ?>">American Foundation for Suicide Prevention</a></blockquote></div></div>
		</div>

				<?php endif;
				if(get_field('sn_twitter') != '') : ?>

		<div class="twitter">
			<a class="twitter-timeline" href="https://twitter.com/<?php echo get_field('sn_twitter'); ?>" data-widget-id="665135750409654272" data-screen-name="<?php echo get_field('sn_twitter'); ?>">Tweets by @<?php echo get_field('sn_twitter'); ?></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>

				<?php endif; ?>

		<div class="photo-feed">

				<?php $photo = false;

				// helpful code comes from http://code.tutsplus.com/tutorials/creating-a-simple-instagram-plugin--wp-30172
		    function afsp_instagram_embed($photo) {
		        // define outputs
		        $instagram_gallery = '';
		        $instagram_nav		 = '';
		        $instagram_display = '';
		        // get remote data
		        // $user = wp_remote_get('https://api.instagram.com/v1/users/search?q=' . $photo . '&access_token=373837289.efd0907.11b2f184a0034418bacee04dc0d3b403');
		        // $user = json_decode($user['body']);
		        // $userID = $user->data[0]->id;

						$photo_count = 12;
						$nav_width = 100 / $photo_count . '%';

		        $result = wp_remote_get('https://instagram.com/' . $photo . '/media/');

		        if ( is_wp_error( $result ) ) {
		            // error handling
		            $error_message 			= $result->get_error_message();
		            $instagram_display 	= 'Something went wrong:' . $error_message;
		        } else {
		            // processing further
		            $result    = json_decode( $result['body'] );
		            $main_data = array();
		            $n         = 0;

		            // get username and actual thumbnail
		            foreach ( $result->items as $item ) {
		                $main_data[ $n ]['user']      = $item->user->username;
		                $main_data[ $n ]['image'] = $item->images->standard_resolution->url;
		                $n++;
		            }

		 						$instagram_gallery	.= '<div class="gallery gallery--instagram js-flickity" data-flickity-options=\'{ "wrapAround": true, "pageDots": false, "autoPlay": true }\'>';

		            // create main string, pictures embedded in links
		            foreach ( $main_data as $data ) :
			 						$instagram_gallery	.=	 '<div class="gallery-cell gallery-cell__carousel">';
			 						$instagram_gallery	.=		 '<a target="_blank" href="http://instagram.com/'.$data['user'].'">';
			 						$instagram_gallery	.=			 '<img src="'.$data['image'].'" alt="'.$data['user'].' pictures">';
			 						$instagram_gallery	.=		 '</a>';
			 						$instagram_gallery	.=	 '</div>';
		 						endforeach;

		            $instagram_gallery	.= '</div>';

		            $instagram_nav 			.= '<div class="gallery-nav gallery-nav--instagram js-flickity" data-flickity-options=\'{"asNavFor": ".gallery--instagram", "contain": true, "prevNextButtons": false, "pageDots": false}\'>';

		            foreach($main_data as $data) :

			 						$instagram_nav			.=	 '<div class="gallery-cell" style="width:' . $nav_width . ';">';
			 						$instagram_nav			.=		 '<img src="'.$data['image'].'" alt="'.$data['user'].' pictures">';
			 						$instagram_nav			.=	 '</div>';
		            endforeach;

		            $instagram_nav			.= '</div>';



		            $instagram_display .= $instagram_gallery;
		            $instagram_display .= $instagram_nav;
		        }

		        echo $instagram_display;
		    }

				function afsp_flickr_embed($photo) {
	        // define outputs
	        $flickr_gallery = '';
	        $flickr_nav		 = '';
	        $flickr_display = '';

	        // define access
					$api = '238309aa246837711a82e3616d5666b1';
					$username = $photo;

					require_once(get_template_directory() . '/inc/phpFlickr.php');

					$photo_count = 20;
					$nav_width = 100 / $photo_count . '%';

					$f = new phpFlickr($api);
					$user = $f->people_findByUsername($username);

					$nsid = $user['nsid'];
					$photos = $f->people_getPublicPhotos($nsid, 1, '', $photo_count);

 					$flickr_gallery .= '<div class="gallery gallery--flickr js-flickity" data-flickity-options=\'{ "wrapAround": true, "pageDots": false, "autoPlay": true }\'>';

					foreach($photos['photos']['photo'] as $photo) :
						$src = 'https://farm' . $photo['farm'] . '.staticflickr.com/' . $photo['server'] . '/' . $photo['id'] . '_' . $photo['secret'] . '_c.jpg';
            $flickr_gallery .= '<div class="gallery-cell gallery-cell__carousel">';
            $flickr_gallery .=	 '<a target="_blank" href="https://www.flickr.com/photos/' . $nsid . '/' . $photo['id'] . '">';
						$flickr_gallery .=		 '<img src="' . $src . '" />';
						$flickr_gallery .=	 '</a>';
						$flickr_gallery .= '</div>';
					endforeach;

					$flickr_gallery .= '</div>';

 					$flickr_nav .= '<div class="gallery-nav gallery-nav--flickr js-flickity" data-flickity-options=\'{"asNavFor": ".gallery--flickr", "contain": true, "prevNextButtons": false, "pageDots": false}\'>';

					foreach($photos['photos']['photo'] as $photo) :
						$src = 'https://farm' . $photo['farm'] . '.staticflickr.com/' . $photo['server'] . '/' . $photo['id'] . '_' . $photo['secret'] . '_c.jpg';
            $flickr_nav .= '<div class="gallery-cell" style="width:' . $nav_width . ';">';
						$flickr_nav .=	 '<img src="' . $src . '" />';
						$flickr_nav .= '</div>';
					endforeach;

					$flickr_nav .= '</div>';

					$flickr_display .= $flickr_gallery;
					$flickr_display .= $flickr_nav;

					echo $flickr_display;
				}

				if(get_field('sn_instagram_or_flickr') == 'Instagram' && get_field('sn_instagram')) :
          $photo = get_field('sn_instagram');
          $access = get_field('sn_instagram_access_token');
					// afsp_instagram_embed($photo);
					echo do_shortcode( '[instagram-feed accesstoken="' . $access . '" id="' . $photo . '"]' );
				elseif(get_field('sn_instagram_or_flickr') == 'Flickr' && get_field('sn_flickr')) :
				 	$photo = get_field('sn_flickr');
					afsp_flickr_embed($photo);
				endif;
			?>

		</div>

		<!--<div class="photo-feed">-->
		<!--	<div style='position: relative; padding-bottom: 51%; height: 0; overflow: hidden;'><iframe id='iframe' src='//flickrit.com/slideshowholder<?php // echo $insta; ?>.php?height=50&size=big&userId=<?php  // echo $photo; ?>&caption=true&credit=2&trans=1&theme=1&thumbnails=0&transition=0&layoutType=responsive&sort=0' scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' ></iframe></div>-->
		<!--</div>-->

				<?php // endif; ?>

	</section>

				<?php endif; ?>

</section>

				<?php endwhile;
				endif; ?>
