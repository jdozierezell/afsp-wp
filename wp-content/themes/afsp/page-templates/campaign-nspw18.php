<?php
/**
 * Template Name: Campaign - NSPW 2018
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
?>

<style>
.nspw18-header {
	display: flex;
	flex-flow: row wrap;
	align-items: center;
	text-align: center;
	min-height: calc(100vh - 250px);
	background-color: #396dff;
	padding-left: 1rem;
	padding-right: 1rem;
}
.nspw18-header > div {
	width: 100%;
}
.nspw18-header h1, .nspw18-header h2, .nspw18-header p {
	flex: 1 0 100%;
	color: white;
}
.nspw18-header h1, .nspw18-header h2 {
	text-transform: uppercase;
	font-size: 3rem;
	font-family: 'PaulGroteskSoft-Bold';
}
.nspw18-header p {
	font-size: 2rem;
	margin: 0;
	padding: 0;
}
.nspw18-header h3 {
	color: #fff;
	font-size: 2rem;
	margin-top: 2rem;
	margin-bottom: 1rem;
}
.nspw18-countdown__labels,
.nspw18-countdown {
	width: 340px;
	margin-left: auto;
	margin-right: auto;
}
.nspw18-countdown__labels {
	display: flex;
	justify-content: space-between;
}
.nspw18-countdown__labels > p {
	color: #fff;
	font-size: 1.25rem !important;
	flex: 0 0 100px !important;
	text-align: center;
}
.nspw-introduction {
	font-size: 1.5rem;
	line-height: 2.5rem;
}
.nspw18-h2 {
	background-color: #2ad891;
	padding: 1rem;
	font-size: 2rem;
	color: white;
	text-align: center;
	width: 100%;
	font-family: 'AvenirNextLTPro-Regular', Arial, sans-serif;
}
.nspw18-links, .nspw18-stories {
	display: flex;
	flex-flow: row wrap;
	align-items: center;
	justify-content: space-between;
}
.nspw18-link {
	position: relative;
	flex: 1 0 100vw;
	margin: -0.5vw auto;
	overflow: hidden;
}
.nspw18-link img {
	transform: scale(1);
	transition: all 0.5s ease-in-out;
}
.nspw18-link:hover img {
	transform: scale(1.3);
	opacity: 1.3;
	max-width: none;
}
.nspw18-link a {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: rgba(5, 95, 116, 0.7);
	padding: 40% 1vw 0;
	color: white;
	text-decoration: none;
	font-weight: bold;
	font-size: 2rem;
	text-align: center;
	display: block;
	opacity: 0;
	transition: opacity 0.5s ease-in-out;
}
.nspw18-link:hover a {
	opacity: 1;
}
.ajde_evcal_calendar .calendar_header {
	display: none !important;
}
@media (min-width: 667px) {
	.nspw18-header {
		min-height: calc(100vh - 310px);
	}
	.nspw18-header h1 {
		font-size: 4rem;
	}
	.nspw18-header p, .nspw18-h2 {
		font-size: 3rem;
	}
}
@media (min-width: 768px) {
	.nspw18-link {
		flex: 1 0 49vw;
	}
	.nspw18-header h1 {
		font-size: 5rem;
	}
}
@media (min-width: 960px) {
	.nspw18-header {
		min-height: calc(100vh - 220px);
	}
}
@media (min-width: 1024px) {
	.nspw18-link {
		flex: 1 0 24vw;
	}
}
</style>
<section class="container__full nspw18-header" aria-label="countdown clock">
	<div>
		<?php echo wp_kses( get_field( 'nspw_title_display' ), $GLOBALS['allowed_html'] ); ?>
		<div class="nspw18-countdown__wrapper">
			<div class="nspw18-countdown__labels">
				<p>Days</p>
				<p>Hours</p>
				<p>Minutes</p>
			</div>
			<div class="nspw18-countdown" id="countdown"></div>
			<script src="<?php echo esc_url( get_template_directory_uri() . '/js/flipclock.min.js' ); ?>" type="text/javascript"></script>
			<script>
				var date = new Date("September 9, 2018 00:00:00");
				var now = new Date();
				var diff = (date.getTime()/1000) - (now.getTime()/1000);
				var countdown = jQuery('#countdown').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true,
					showSeconds: false,
					autoStart: true,
				})
			</script>
		</div>
	</div>
</section>
<?php if (get_field('nspw_introduction' ) ) : ?>
	<section class="container nspw-introduction" aria-label="nspw introduction">
		<?php echo wp_kses( get_field( 'nspw_introduction' ), $GLOBALS['allowed_html'] ); ?> 
	</section>
<?php endif; ?>
<section class="container__full" aria-label="event calendar">
	<h2 class="nspw18-h2">Here's what's happening in September</h2>
	<?php
		echo do_shortcode( '[add_eventon_fc load_fullmonth="yes" fixed_month="9" fixed_year="2018" nexttogrid="yes" ]' );
	?>
</section>
<?php if ( have_rows( 'nspw_activities' ) ) : ?>
	<section class="container__full nspw18-links">
		<h2 class="nspw18-h2">Here's what you can do to #StopSuicide</h2>
		<?php
		while ( have_rows( 'nspw_activities' ) ) :
			the_row();
			$link = '';
			if ( 'internal' === get_sub_field( 'nspw_link_type' ) ) :
				$post_object = get_sub_field( 'nspw_internal' );
				if ( $post_object ) :
					$post = $post_object;
					setup_postdata( $post );
					$link = get_the_permalink();
					wp_reset_postdata();
				endif;
			elseif ( 'external' === get_sub_field( 'nspw_link_type' ) ) :
				$link = get_sub_field( 'nspw_external' );
			endif;
			?>
			<div class="nspw18-link">
				<?php
				$image_url    = '';
				$image_object = get_sub_field( 'nspw_link_image' );
				if ( $image_object ) :
					$image_url  = $image_object['url'];
					$image_url  = str_replace( 'afsp.org', 'afsp.imgix.net', $image_url );
					$image_url .= '?w=768&h=768&fit=crop&crop=faces';
				endif;
				?>
				<img src="<?php echo esc_url( $image_url ); ?>" alt="Link Image" class="nspw18-link__image">
				<a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( get_sub_field( 'nspw_link_title' ) ); ?></a>
			</div>
		<?php endwhile; ?>
	</section>
<?php
endif;
if ( have_rows( 'nspw_stories' ) ) :
	?>
	<section class="container__full nspw18-stories">
		<h2 class="nspw18-h2">Having the conversation to #StopSuicide</h2>
		<?php
		while ( have_rows( 'nspw_stories' ) ) :
			the_row();
			$link = '';
			if ( 'internal' === get_sub_field( 'nspw_story_type' ) ) :
				$post_object = get_sub_field( 'nspw_int_story' );
				if ( $post_object ) :
					$post = $post_object;
					setup_postdata( $post );
					$link = get_the_permalink();
					wp_reset_postdata();
				endif;
			elseif ( 'external' === get_sub_field( 'nspw_story_type' ) ) :
				$link = get_sub_field( 'nspw_ext_story' );
			endif;
			?>
			<div class="nspw18-link">
				<?php
				$image_url    = '';
				$image_object = get_sub_field( 'nspw_story_image' );
				if ( $image_object ) :
					$image_url  = $image_object['url'];
					$image_url  = str_replace( 'afsp.org', 'afsp.imgix.net', $image_url );
					$image_url .= '?w=768&h=768&fit=crop&crop=faces';
				endif;
				?>
				<img src="<?php echo esc_url( $image_url ); ?>" alt="Story Image" class="nspw18-link__image">
				<a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( get_sub_field( 'nspw_story_title' ) ); ?></a>
			</div>
		<?php endwhile; ?>
	</section>
<?php endif; ?>
<script src="https://assets.juicer.io/embed.js" type="text/javascript"></script>
<link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
<section class="container__full nspw18-stories" style="z-index: 100; position: relative;">
	<h2 class="nspw18-h2">@afspnational</h2>
	<ul class="juicer-feed" data-feed-id="afspnational-cf54dacd-aac8-450f-832b-80d59a107c1f" data-per="12" data-pages="1"></ul>
</section>
<!--All the modals!!!-->
<div class="modal__overlay"></div>
<div class="modal" id="selfie_modal">
	<h2 class="modal__title">Selfies to #StopSuicide</h2>
	<p>The buttons below will take you to your favorite social channel. Once you're there, share a photo of yourself using #StopSuicide (bonus points if you’re wearing a Be&nbsp;the&nbsp;Voice or Out of the Darkness shirt!). Make sure you tag @afspnational if you’re sharing on Twitter and Instagram.</p>
	<a class="modal__button button--selfie" href="http://facebook.com" target="_blank">Facebook</a>
	<a class="modal__button button--selfie" href="http://twitter.com" target="_blank">Twitter</a>
	<a class="modal__button button--selfie" href="http://instagram.com" target="_blank">Instagram</a>
</div>
<?php get_footer(); ?>
