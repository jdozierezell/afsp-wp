<?php
/**
 * Template Name: Custom Image v2
 *
 * @package afsp
 */

				get_header();
				get_template_part('template-parts/title');

				// Variables
				$loaderID 	= 'imageLoader'; // used in image-upload.php
				$canvasID 	= 'imageCanvas'; // used in image-upload.php
				$underlayID = 'underlayCanvas';
				$overlayID 	= 'overlayCanvas';
				$comboID		= 'downloadCanvas'; // used in image-download.php
				$downloadID = 'download'; // used in image-download.php
				$filename 	= 'volunteer.jpg'; // used in image-download.php

				function image_url ($field, $sub) {
					if ($sub == 1) {
						$image = get_sub_field($field);
					} else {
						$image = get_field($field);
					}
					$image_array = wp_get_attachment_image_src($image['id']);
					$image_url = $image_array[0];
					// if the page is loaded over ssl, we need to add the secure protocol to the source url
					$image_url = str_replace('http://', 'https://', $image_url);
					$image_url = str_replace('afsp.imgix.net', 'afsp.org', $image_url);
					if($pos = strpos($image_url, '?') !== false) :
						$image_url = strstr($image_url, '?', true);
					endif;
					return $image_url;
				}

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
<script src="<?php echo get_template_directory_uri(); ?>/js/load-image.all.min.js"></script>
<?php
    $backgroundImage = get_field( 'ci_background_image' );
    $backgroundAFSPUrl = $backgroundImage['url'];
    $backgroundImgixUrl = str_replace( 'afsp.org', 'afsp.imgix.net', $backgroundAFSPUrl );
?>
<div id="custom-image" style="background-image: url( '<?php echo $backgroundImgixUrl; ?>?w=1440' ); ">
	<div id="design-wrapper">
		<h1><?php the_title(); ?></h1>
		<div id="canvas-wrapper"></div>
		<input type="file" id="<?php echo $loaderID; ?>" name="<?php echo $loaderID; ?>"/>
		<label for="<?php echo $loaderID; ?>"><span class="step-number">1</span> Add an image</label>
		<a id="message"><span class="step-number">2</span> Add a message</a>
		<a id="download" class="for-social"><span class="step-number">3</span> Download and share</a>
	</div>


	<div style="background-color: rgba(5, 109, 255, 0.8); color: white; font-size: 1.1rem; padding: 1rem;">
		<div class="container">
			<?php the_field('ci_about'); ?>
			<?php the_field('ci_help'); ?>
		</div>
	</div>

	<div class="hiddencanvas">
		<canvas id="<?php echo $comboID; ?>" width="1080" height="1080"></canvas>
	</div>

				<?php if(have_rows('ci_overlay')) : ?>

	<div id="message-modal-overlay" class="modal__overlay"></div>
		<div id="message-modal" class="modal">
			<h2 class="modal__title">Choose your message</h2>

				<?php while(have_rows('ci_overlay')) : the_row();
						$image_url = image_url('ci_overlay_image', 1) ?>

			<img class="overlay" src="<?php echo $image_url; ?>">

				<?php endwhile; ?>

		</div>
	</div>

				<?php endif; ?>

</div>

<div id="download-modal-overlay" class="modal__overlay"></div>
<div id="download-modal" class="modal sharable__modal">
	<h2 class="modal__title">Choose your network</h2>
	<p style="font-size: 1.1rem">Click on Twitter to post the image to your social feed.
																If you would like to post your image to Facebook or Instagram, please choose the Download option.</p>
	<!-- <span class="modal__button" id="facebook">Facebook</span> -->
	<span class="modal__button" id="twitter">Twitter</span>
	<a class="modal__button" id="instagram">Download</a>
</div>
<!-- <div id="facebook-modal" class="modal sharable__modal">
	<h2 class="modal__title">Customize your message and send to Facebook</h2>
	<p style="font-size: 1.1rem">You may customize your message below by editing the text provided.
																Please note that clicking "Post to Facebook" will directly post the image to your social feed.
																A new window will open in your browser so that you can view the post in your feed.
																Depending on Facebook's traffic, this can take a second or two.
																Please do not click twice on the button as that will cause Facebook to post twice.</p>
	<textarea id="facebook-message" rows="5" cols="5"><?php // the_field('ci_social'); ?></textarea>
	<span class="modal__button" id="facebook-back">Back</span>
	<span class="modal__button" id="facebook-post">Post to Facebook</span>
</div> -->
<div id="twitter-modal" class="modal sharable__modal">
	<h2 class="modal__title">Customize your tweet and send to Twitter</h2>
	<p style="font-size: 1.1rem">You may customize your tweet below by editing the text provided.
																Please note that clicking "Post to Twitter" will directly post the image to your social feed.
																Tweets are limited to 140 characters.
																A new window will open in your browser so that you can view the post in your feed.</p>
	<textarea id="twitter-tweet" rows="5" cols="5" maxlength="140"><?php the_field('ci_social'); ?></textarea>
	<span class="modal__button" id="twitter-back">Back</span>
	<span class="modal__button" id="twitter-post">Post to Twitter</span>
</div>

<div id="help-modal-overlay" class="modal__overlay"></div>
<div id="help-modal" class="modal sharable__modal">
	<h2 class="modal__title">Need help?</h2>
	<div class="help-modal__message"><?php the_field('ci_help'); ?></div>
</div>


<script type="text/javascript">
(function() {
	function byId (id) {
		return document.getElementById(id)
	}

	function createCanvas (id, w, h) {
		var canvas = document.createElement('canvas')
		canvas.id = id
		canvas.width = w
		canvas.height = h
		byId('canvas-wrapper').appendChild(canvas)
	}

	function drawCanvasImage (canvas, image) {
		var w = canvas.width
		var h = canvas.height
		var ctx = canvas.getContext('2d')

		var img = new Image()
		img.addEventListener(
			'load',
			function () {
				var imageRatio = img.height / img.width
				ctx.clearRect(0, 0, w, h)
				if (img.width >= img.height) {
					ctx.drawImage(img,
						0, 0, img.width, img.height,
						(w - (w / imageRatio)) / 2, 0, w / imageRatio, h)
				} else {
					ctx.drawImage(img,
						0, 0, img.width, img.height,
						0, (h - (h * imageRatio)) / 2, w, h * imageRatio)
				}
			},
			false
		)
		img.src = image
	}

	createCanvas('<?php echo $underlayID; ?>', 1080, 1080)
	drawCanvasImage(byId('<?php echo $underlayID; ?>'), '<?php echo image_url("ci_preset_image", 0); ?>')
	createCanvas('<?php echo $canvasID; ?>', 1080, 1080)
	createCanvas('<?php echo $overlayID; ?>', 1080, 1080)

	var gallery = document.querySelectorAll('.overlay')
	for (var i = 0; i < gallery.length; i += 1) {
		gallery[i].addEventListener(
			'click',
			function (e) {
				drawCanvasImage(byId('<?php echo $overlayID; ?>'), e.target.src)
			})
	}

	jQuery(document).ready(function($){
		$('#message').on('click', function() {
			$('#message-modal-overlay, #message-modal').css('display','block')
		})
		$('#download').on('click', function() {
			$('#download-modal-overlay, #download-modal').css('display','block')
		})
		$('#help').on('click', function() {
			$('#help-modal-overlay, #help-modal').css('display','block')
		})
		// $('#facebook').on('click', function() {
		// 	$('#download-modal').css('display','none')
		// 	$('#facebook-modal').css('display','block')
		// })
		$('#twitter').on('click', function() {
			$('#download-modal').css('display','none')
			$('#twitter-modal').css('display','block')
		})
		$('#facebook-back, #twitter-back').on('click', function(){
			$('#facebook-modal, #twitter-modal').css('display','none')
			$('#download-modal').css('display','block')
		})
		$('.modal__overlay, #message-modal').on('click', function() {
			$('.modal__overlay, .modal').css('display','none')
		})
	})

})()
</script>


				<?php include(locate_template('template-parts/canvas/image-upload.php'));
				include(locate_template('template-parts/canvas/image-download.php')); ?>


				<?php get_footer(); ?>