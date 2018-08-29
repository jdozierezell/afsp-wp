<?php
/**
 * Template Name: Social Image Display
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<script>
			window.fbAsyncInit = function() {
				FB.init({
				appId      : '1771779836370199',
				xfbml      : true,
				version    : 'v3.1'
				});
				FB.AppEvents.logPageView();
			};

			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "https://connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			</script>
		<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/oauth.min.js"></script>

		<section class="container ">
			<h1 class="landing__title"><?php the_title(); ?></h1>
			<div class="sharable__instructions">

						<?php the_content(); ?>

			</div>
		</section>			
		<section class="container sharable__images">
			<?php
			if ( have_rows( 'sid_images' ) ) :
				while ( have_rows( 'sid_images' ) ) :
					the_row();
					$image 		 = get_sub_field( 'sid_image' );
					$title 		 = get_sub_field( 'sid_share_title' );
					$twitter_url = get_sub_field( 'sid_twitter_url' ) . '/photo/1'; // the /photo/1 stuff is pretty important. Actually, it's the bomb. 
					?>
					<img class="sharable__image" src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>" data-twitter="<?php echo $twitter_url; ?>"/>
				<?php
				endwhile;
			endif;
			?>
		</section>	
		<div class="modal__overlay"></div>
		<div class="modal sharable__modal">
			<h2 class="modal__title">Choose your network</h2>
			<p>We recommend sharing with the following message: </p>
			<h3 id="title"></h3>
			<!-- <span class="modal__button" id="facebook">Facebook</span> -->
			<span class="modal__button" id="twitter">Twitter</span>
			<a class="modal__button" id="facebook" href="#" download>Download for Facebook or Instagram</a>
		</div>
	<?php
	endwhile;
endif;
?>
<script>
OAuth.initialize('Zw8PiMk6fP8HN49YN4I0YYI_1IE')
var src = '',
		title = '',
		twitter = '';
jQuery(document).ready(function($){
	$('.sharable__image').on('click',function(){
		src = $(this).attr('src');
		title = $(this).attr('alt');
		// twitter = $(this).data('twitter');
		twitterImg = $(this).attr('src')
		document.getElementById('title').innerHTML = title
		$('.modal__overlay, .modal').css('display','block');
		$('#facebook').attr('href', src);
	});
	$('.modal__overlay').on('click',function(){
		$('.modal__overlay, .modal').css('display','none');
	});
	// $('#facebook').on('click',function(){
	// 	console.log('click');
	// 	FB.ui( {
	// 			method: 'share_open_graph',
	// 			action_type: 'og.likes',
	// 			action_properties: JSON.stringify( {
	// 				object: {
	// 					'og:url': 'https://afsp.org/campaigns/shareable-images/',
	// 					'og:title': 'Shareable Images',
	// 					'og:description': title,
	// 					'og:image': src,
	// 				}
	// 			} )
	// 		},
	// 		function( response ) {
	// 			console.log(response)
	// 		} 
	// 	)
	// });
	$('#twitter').on('click',function(){
		// status = twitter + ' Did you know? RT to help @afspnational #StopSuicide. afsp.org';
		// status = encodeURIComponent(status);
		// window.open('https://twitter.com/intent/tweet?text=' + status);
		console.log(twitterImg)

		function loadXHR(url) {
			return new Promise(function(resolve, reject) {
					try {
						var xhr = new XMLHttpRequest();
						xhr.open("GET", url);
						xhr.responseType = "blob";
						xhr.onerror = function() {reject("Network error.")};
						xhr.onload = function() {
							if (xhr.status === 200) {resolve(xhr.response)}
							else {reject("Loading error:" + xhr.statusText)}
						};
						xhr.send();
					}
					catch(err) {reject(err.message)}
			});
		}

		loadXHR(twitterImg).then(function(blob) {
			// here the image is a blob
			// let reader = new FileReader()
			// reader.readAsDataURL(blob)
			// console.log(reader)
			OAuth.popup('twitter').then(function (result) {
				var data = new FormData()
				// Tweet text
				data.append('status', title + ' @afspnational #StopSuicide. afsp.org')
				// Tweet image
				data.append('media[]', blob, 'image.jpeg')
				// Post to Twitter as an update with media
				return result.post('/1.1/statuses/update_with_media.json', {
					data: data,
					cache: false,
					processData: false,
					contentType: false
				})
			// Success/Error Logging
			}).done(function (data) {
				// var str = JSON.stringify(data, null, 2)
				console.log('Success')
				window.open('http://twitter.com')
			}).fail(function (e) {
				var str = JSON.stringify(e, null, 2)
				console.log('Fail: ', e)
			})
		});

	});
});
</script>

				<?php get_footer(); ?>