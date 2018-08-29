<?php
/**
 * Template Name: RealConvo
 *
 * @package afsp
 */

get_header(); 
get_template_part('template-parts/title'); ?>

<script type="text/javascript">
	window.fbAsyncInit = function(){
		FB.init({
			appId 	: '1771779836370199',
			xfbml 	: true,
			version : 'v2.7', 
		});
	};
	(function(d,s,id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if(d.getElementById(id)){return;}
		js = d.createElement(s);
		js.id = id;
		js.src = '//connect.facebook.net/en_US/sdk.js';
		fjs.parentNode.insertBefore(js,fjs);
	}(document,'script','facebook-jssdk'));
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/oauth.min.js"></script>
<script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
<link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
<?php	if(have_posts()) : while(have_posts()) : the_post(); ?>
  <main class="realConvo__container">				
    <?php if (have_rows('rc_convo_items')) : 
      $items = []; // instantiate an empty array
      while (have_rows('rc_convo_items')) : the_row();
        $image = get_sub_field('rc_item_image');
        $image_array = wp_get_attachment_image_src($image['id']);
        $src = $image_array[0];
        // if the page is loaded over ssl, we need to add the secure protocol to the source url
        $src = str_replace('http://', 'https://', $src);
        if($pos = strpos($src, '?') !== false) :
          $src = strstr($src, '?', true);
        endif;
        $indiv_item = [];
        $indiv_item['type'] = get_sub_field('rc_convo_item_type');
        $indiv_item['image'] = $src . '?w=1080';
        if ($indiv_item['type'] === 'link') : 
          $link = get_sub_field('rc_link');
          $indiv_item['url'] = $link['url'];
          $indiv_item['title'] = $link['title'];
          $indiv_item['target'] = $link['target'];
          $indiv_item['description'] = get_sub_field('rc_link_description');
        elseif ($indiv_item['type'] === 'graphic') :
          $indiv_item['message'] = get_sub_field('rc_shareable_message');
        endif; 
        if (get_sub_field('rc_item_size') == 'large') :
          $indiv_item['class'] = 'realConvo__item--2';
        else :
          $indiv_item['class'] = '';
        endif;
        $items[] = $indiv_item;
      endwhile; 
      shuffle($items); ?>
      <h1 class="realConvo__title"><?php the_title(); ?></h1>
      <h2 class="juicer__title">#RealConvo</h2>
      <div class="realConvo">
        <h3>When it comes to mental health, what we say &mdash; and how we listen &mdash; matters. Sometimes all it takes to help prevent suicide is trusting your 
          instinct, reaching out to someone you're concerned about, and having a #RealConvo.
        </h3>
        <div class="realConvo__items">
          <div class="realConvo__size"></div>
          <div class="realConvo__gutter"></div>
          <a href="https://seizetheawkward.org/" class="realConvo__item realConvo--link" target="_blank">
            <img src="https://afsp.imgix.net/wp-content/uploads/2018/01/SUI_300x250-02.jpg?w=1080" alt="">
          </a>
          <?php
          foreach ($items as $item) :
            if ($item['type'] === 'link') : ?>
              <a href="<?= $item['url']; ?>" class="realConvo__item realConvo--link <?= $item['class']; ?>" target="<?= $item['target']; ?>">
                <img src="<?= $item['image']; ?>" alt="">
                <p><?= $item['description']; ?></p>
              </a>
            <?php elseif ($item['type'] === 'graphic') : ?>
              <button class="realConvo__item realConvo--graphic <?= $item['class']; ?>">
                <img src="<?= $item['image']; ?>" alt="<?= $item['message']; ?>">
                <i class="fa fa-share-square realConvo__share" aria-hidden="true"></i>
              </button>
            <?php endif;
          endforeach; ?>
        </div>
      </div>
      <aside class="juicer__sidebar">
        <ul class="juicer-feed juicer__list" data-feed-id="realconvo" data-columns="2" data-per="15"><h1 class="referral"><a href="https://www.juicer.io">Powered by Juicer</a></h1></ul>
      </aside>
    <?php endif; ?>
  </main>

  <div class="modal__overlay" id="modal__overlay"></div>
  <div class="modal sharable__modal" id="modal">
    <h2 class="modal__title">Choose your network</h2>
    <p id="modal__message"></p>
    <span class="modal__button" id="facebook">Facebook</span>
    <span class="modal__button" id="twitter">Twitter</span>
    <a class="modal__button" id="instagram" href="#" download>Download for Instagram</a>
  </div>

<?php endwhile; 
endif; ?>
<script>
OAuth.initialize('Zw8PiMk6fP8HN49YN4I0YYI_1IE')

const container = document.querySelector('.realConvo__items')
const grid = new Masonry( container, {
    columnWidth: '.realConvo__size',
    gutter: '.realConvo__gutter',
    itemSelector: '.realConvo__item',
    fitWidth: true,
    percentPosition: true,
})

imagesLoaded( document.querySelector('.realConvo__items'), function( instance ) {
  grid.layout()
})

window.addEventListener('resize', function(e) {
  grid.layout()
})

const shareables = document.getElementsByClassName('realConvo--graphic')
for (var i = 0; i < shareables.length; i += 1) {
  shareables[i].addEventListener('click', function (){
		src = this.firstElementChild.src
		title = this.firstElementChild.alt
    document.getElementById('modal__message').innerHTML = 'Share this image with the message: <strong>' + title + '</strong>.'
		document.getElementById('modal__overlay').style.display = 'block'
		document.getElementById('modal').style.display = 'block'
		document.getElementById('instagram').href = src
  })
}

document.getElementById('modal__overlay').addEventListener('click', function (){
  document.getElementById('modal__overlay').style.display = 'none'
	document.getElementById('modal').style.display = 'none' 
})

document.getElementById('facebook').addEventListener('click', function (){
  FB.login(function(){
    FB.api(
      'me/photos',
      'POST',
      {
        'url': src,
        'caption': title,
        // 'sponsor_id': 27817332304
      },
      function(response){
        if(response) {
          window.open('https://facebook.com/me');
          console.log(response)
        }
      }
    );
  },{scope:'publish_actions'})
})

document.getElementById('twitter').addEventListener('click', function (){
  function loadXHR(url) {
    return new Promise(function(resolve, reject) {
        try {
          var xhr = new XMLHttpRequest()
          xhr.open("GET", url)
          xhr.responseType = "blob"
          xhr.onerror = function() {reject("Network error.")}
          xhr.onload = function() {
            if (xhr.status === 200) {resolve(xhr.response)}
            else {reject("Loading error:" + xhr.statusText)}
          }
          xhr.send()
        }
        catch(err) {reject(err.message)}
    })
  }
  loadXHR(src).then(function(blob) {
    // here the image is a blob
    // let reader = new FileReader()
    // reader.readAsDataURL(blob)
    // console.log(reader)
    OAuth.popup('twitter').then(function (result) {
      var data = new FormData()
      // Tweet text
      data.append('status', title)
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
  })
})

</script>
<?php get_footer(); ?>