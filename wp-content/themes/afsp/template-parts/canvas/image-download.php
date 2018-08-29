<?php // Source: https://jsfiddle.net/AbdiasSoftware/7PRNN/ ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/oauth.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/canvas-toBlob.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/file-saver.min.js"></script>
<script type="text/javascript">

/**
 * This is the function that will take care of image extracting and
 * setting proper filename for the download.
 * IMPORTANT: Call it from within a onclick event.
*/
function downloadCanvas(link, canvasId, filename) {
		console.log('clicked')
    var href = document.getElementById(canvasId).toDataURL('image/jpeg')
    console.log(href)
    link.download = filename
    console.log(link.download)
    link.href = href
    console.log(link.href)
}

/**
 * The event handler for the link's onclick event. We give THIS as a
 * parameter (=the link element), ID of the imageCanvas and a filename.
*/

var combo = document.getElementById('<?php echo $comboID; ?>')
var ctx_combo = combo.getContext('2d')
var canvases = document.querySelectorAll('#canvas-wrapper canvas')


/**
 * Most of the code below comes from gorigins.com/posting-a-canvas-image-to-facebook-and-twitter/
 *
*/

// turns the data URI into a Blob object

function dataURItoBlob(dataURI) {
  var byteString = atob(dataURI.split(',')[1])
  var ab = new ArrayBuffer(byteString.length)
  var ia = new Uint8Array(ab)
  for (var i = 0; i < byteString.length; i += 1) {
    ia[i] = byteString.charCodeAt(i)
  }
  return new Blob([ab], {type: 'image/jpeg'})
}

// Init OAuth

OAuth.initialize('Zw8PiMk6fP8HN49YN4I0YYI_1IE')

// Facebook Function

function postCanvasToFacebook(src, message) {
  // Convert Base64 to binary
  var file = dataURItoBlob(src)
  // Open a message popup and autopopulate with data
  OAuth.popup('facebook').then(function (result) {
    var data = new FormData()
    // Set access token
    data.append('access_token', result.access_token)
    // Facebook message
    data.append('caption', message)
    // Facebook image
    data.append('source', file)
    // Show in user feed
    data.append('no_story', false)
    return result.post('/me/photos', {
      data,
      cache: false,
      processData: false,
      contentType: false,
    })
  // Success/Error Logging
  }).done(function (data) {
    // var str = JSON.stringify(data, null, 2)
    console.log('Success')
    window.open('http://facebook.com/me')
  }).fail(function (e) {
    var str = JSON.stringify(e, null, 2)
    console.log('Fail: ', str)
  })
}
// END Facebook function

// Twitter Function

function postCanvasToTwitter(src, tweet) {
  // Convert Base64 to binary
  var file = dataURItoBlob(src)
  // Open a tweet popup and autopopulate with data
  OAuth.popup('twitter').then(function (result) {
    var data = new FormData()
    // Tweet text
    data.append('status', tweet)
    // Tweet image
    data.append('media[]', file, 'image.jpeg')
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
    console.log('Fail: ', str)
  })
}

// END Twitter function

document.getElementById('<?php echo $downloadID; ?>').addEventListener(
  'click',
  function() {
		for (var i = 0; i < canvases.length; i++) {
			console.log(canvases[i])
			ctx_combo.drawImage(canvases[i], 0, 0, canvas.width, canvas.height)
		}
    if (jQuery(this).hasClass('for-social')) {
      var src = document.getElementById('<?php echo $comboID; ?>').toDataURL('image/jpeg')

      jQuery('#facebook-post').on('click',function(){
        var facebookMessage = document.getElementById('facebook-message').value
        postCanvasToFacebook(src, facebookMessage)
      });
      jQuery('#twitter-post').on('click',function(){
        var twitterTweet = document.getElementById('twitter-tweet').value
        postCanvasToTwitter(src, twitterTweet)
      });
      jQuery('#instagram').on('click', function() {
        var canvas = document.getElementById('<?php echo $comboID; ?>')
        canvas.toBlob(function(blob) {
            saveAs(blob, 'my_file');
        }, {type: 'image/jpeg'});
      })
    } else {
      downloadCanvas(this, '<?php echo $comboID; ?>', '<?php echo $filename; ?>')
    }
  }, false)

</script>
