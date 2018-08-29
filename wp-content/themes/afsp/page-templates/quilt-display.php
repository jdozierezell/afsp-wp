<?php
/**
 * Template Name: Quilt Display v2
 *
 * @package afsp
 */
 
				acf_form_head();
				get_header(); 
				get_template_part('template-parts/title'); ?>

<div id="fb-root"></div>
<script>// function facebook(d, s, id) {
//   var js, fjs = d.getElementsByTagName(s)[0];
//   if (d.getElementById(id)) return;
//   js = d.createElement(s); js.id = id;
//   js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=197494263639513";
//   fjs.parentNode.insertBefore(js, fjs);
// }
// function twitter(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}};
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/magnific-popup.min.js"></script>
<div class="quilt__gallery">
  
	      <?php	
	      // WP_Query arguments
        $args = array (
        	'post_type'              => array( 'quilt_square' ),
        	'post_status'            => array( 'publish' ),
        );
        
        // The Query
        $quilt_squares = new WP_Query( $args );
	      // The Loop
        if ( $quilt_squares->have_posts() ) :
          $counter = 0;
        	while ( $quilt_squares->have_posts() ) :
        		$quilt_squares->the_post(); $counter++;
	          $image = get_field('q_square');
	          $image_array = wp_get_attachment_image_src($image['id']);
	          $src = $image_array[0];
          	if($pos = strpos($src, '?') !== false) :
          		$src = strstr($src, '?', true);
          	endif;
          	$image_size = getimagesize($src);
	      ?>
  
  <a class="quilt__square" href="<?php echo $src; ?>"  data-image_id="<?php echo get_the_ID(); ?>" data-markup="example markup">
    <img src="<?php echo $src; ?>?fit=crop&crop=faces&w=400&h=400" alt="<?php the_title(); ?>" style="max-width: <?php echo $image_size[0]; ?>px;" />
    <h3 class="quilt__square-title"><?php the_title(); ?></h3>
  </a>
  
<script>
  function loadGalleryDeepLink()
  {
      var prefix = "#gallery-";
      var h      = location.hash;

      if (document.g_magnific_hash_loaded === undefined && h.indexOf(prefix) === 0)
      {
          h        = h.substr(prefix.length);
          var $img = jQuery('*[data-image_id="' + h + '"]');

          if ($img.length)
          {
              document.g_magnific_hash_loaded = true;
              $img.parents().find('.quilt__gallery').magnificPopup("open", $img.index() - 1);
          }
      }
  }

        
  jQuery(document).ready(function ($)
  {
      $('.quilt__gallery').magnificPopup({
          delegate:  'a',
          type:      'image',
          tLoading:  'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery:   {
              enabled:            true,
              navigateByImgClick: true,
              preload:            [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          callbacks: {
              close:  function ()
                      {
                          location.hash = "";
                      },
              change: function ()
                      {
                          console.log('Content changed');

                          location.hash = "gallery-" + this.currItem.el.data("image_id");
                      }

          }
      });
      
      loadGalleryDeepLink();
  });
</script>	
  
        <?php endwhile;
        endif; 
        // Restore original Post Data
        wp_reset_postdata(); ?>
  
</div>

			

				<?php get_footer(); ?>