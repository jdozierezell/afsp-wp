<?php
/**
 * Template Name: Campaign - Advocacy Forum 18
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		$video_source = get_field( 'af_video_source' );
		$video_id     = get_field( 'af_forum_video' );
		if ( $video_source && $video_id ) :
			if ( 'youtube' === $video_source ) :
				$video_url = 'https://www.youtube.com/embed/' . $video_id . '?rel=0&amp;showinfo=0';
			elseif ( 'vimeo' === $video_source ) :
				$video_url = 'https://player.vimeo.com/video/' . $video_id;
			elseif ( 'facebook' === $video_source ) :
				$video_url = 'https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FAFSPnational%2Fvideos%2F' . $video_id . '%2F&show_text=0&width=560';
			endif;
		else :
			$video_url = 'https://vimeo.com/album/5269921/embed';
		endif;
		?>
		<!-- <section class="splash container">
			<div class="videoEmbed">
				<iframe src=<?php // echo esc_url( $video_url ); ?> frameborder="0" allowfullscreen></iframe>
			</div>
			<h1 class="landing__title"><?php // the_title(); ?></h1>
		</section> -->
    <?php get_template_part('template-parts/splash-container'); ?>
		<section class="forum__feed17">
			<section class="container forum__teaser">
			<?php
			if ( get_field( 'af_forum_intro' ) ) :
				the_field( 'af_forum_intro' );
			endif;
			if ( have_rows( 'af_talking_points' ) ) :
			?>
				<h2>What We're Asking For</h2>
				<ol class="ordered ordered--round">
					<?php
					while ( have_rows( 'af_talking_points' ) ) :
						the_row();
						?>
							<li><?php echo esc_html( get_sub_field( 'af_talking_point' ) ); ?></li>
					<?php
					endwhile;
					?>
				</ol>
			<?php
			endif;
			if ( have_rows( 'af_forum_speakers' ) ) :
			?>
				<h2>Featured Speakers</h2>
				<ul class="unordered unordered--nobull unordered--2col">
					<?php
					while ( have_rows( 'af_forum_speakers' ) ) :
						the_row();
						?>
							<li><?php echo '<strong>' . esc_html( get_sub_field( 'af_forum_speaker' ) ) . '</strong><br />' . esc_html( get_sub_field( 'af_speaker_title' ) ); ?></li>
					<?php
					endwhile;
					?>
				</ul>
			<?php
			endif;
			?>
			</section>
			<?php
			$advocacy_stories = get_field( 'af_advocacy_stories' );
			if ( $advocacy_stories ) :
			?>
				<section class="forum__highlights">
					<h2 class="container">Advocacy Highlights</h2>
					<div class="forum__highlights__container container js-flickity" data-flickity-options='{"wrapAround": true, "autoPlay": true, "setGallerySize": false}'>
					<?php
					foreach ( $advocacy_stories as $story ) :
					?>
						<a class="forum__highlight" href="<?php echo esc_attr( get_permalink( $story->ID ) ); ?>">
						<?php
						$story_type = get_post_type( $story );
						$image      = '';
						if ( 'post' === $story_type ) :
							$image = get_field( 'b_featured_image', $story->ID );
						elseif ( 'page' === $story_type ) :
							$image = get_field( 'si_image', $story->ID );
						endif;
						$url = $image['url'];
						$url = str_replace( 'afsp.org', 'afsp.imgix.net', $url );
						?>
							<img src="<?php echo esc_attr( $url ); ?>?w=768&h=768&fit=crop&crop=faces" />
							<h3 class="point__title"><?php echo esc_html( get_the_title( $story->ID ) ); ?></h3>
						</a>
					<?php
					endforeach;
					?>
					</div>
				</section>
			<?php
			endif;
			?>
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
		<script>
			// jQuery(document).ready(function($) {
			// 	var date = new Date("June 12, 2017 08:00:00");
			// 	var now = new Date();
			// 	var diff = (date.getTime()/1000) - (now.getTime()/1000);
			// 	var countdown = $('.countdown').FlipClock(diff, {
			// 		clockFace: 'DailyCounter',
			// 		countdown: true,
			// 		showSeconds: false,
			// 		autoStart: true,

			// 	});
			// 	var $social_grid = $('.social__board').isotope({
			// 		itemSelector: '.social__card',
			// 		layoutMode: 'masonry'
			// 	});
			// 	$social_grid.imagesLoaded().progress(function(){
			// 		$grid.isotope('layout');
			// 	});
			// });
		</script>
<?php
	endwhile;
endif;
?>

<?php get_footer(); ?>
