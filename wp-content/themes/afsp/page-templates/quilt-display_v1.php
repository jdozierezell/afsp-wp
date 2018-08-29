<?php
/**
 * Template Name: Quilt Display
 *
 * @package afsp
 */
 
				acf_form_head();
				get_header(); 
				get_template_part('template-parts/title'); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/magnific-popup.min.js"></script>
<section class="quilt__intro">
  <h1 class="landing__title"><?php the_title(); ?></h1>
  
        <?php if(have_posts()) : while(have_posts()) : the_post(); 
            the_content();
          endwhile;
        endif; ?>
        
</section>

        <?php echo do_shortcode('[ajax_load_more post_type="quilt_square" posts_per_page="24" max_pages="0" container_type="div" css_classes="quilt__gallery"]'); ?>

<script>
  function loadGalleryDeepLink() {
    var prefix = "#quilt-square-";
    var h      = location.hash;

    if (document.g_magnific_hash_loaded === undefined && h.indexOf(prefix) === 0)
    {
      if(h.slice(-1) == '/') { // removing any trailing slash from the hash
        h = h.slice(0,-1);
      }
        h        = h.substr(prefix.length);
        var $img = jQuery('*[data-slug="' + h + '"]');
console.log(h);
console.log($img);
        if ($img.length)
        {
            document.g_magnific_hash_loaded = true;665135750409654272
            $img.parents().find('.quilt__gallery').magnificPopup("open", $img.index() / 2);
        }
    }
  }

        
  jQuery(document).ready(function ($) {
      var description = "<?php get_field('q_description'); ?>";
      $('.quilt__gallery').each(function(){
        $(this).magnificPopup({
          delegate:  'a',
          type:      'image',
          image: {
            markup: '<div class="mfp-figure quilt__detail">' + 
              '<button class="mfp-close"></button>' + 
                '<img class="mfp-img" alt="<?php the_title(); ?>" />' + 
                '<div class="mfp-bottom-bar quilt__detail-body">' + 
                  '<h2 class="quilt__detail-title"></h2>' +
                  '<p class="quilt__detail-description"></p>' + 
                  '<div class="sw-wrapper"><?php //socialWarfare(); ?></div>' +
                '</div>' + 
            '</div>',
            titleSrc: function(item) {
              return item.el.attr('title');
            },
            verticalFit: true,
          },
          tLoading:  'Loading image...',
          mainClass: 'mfp-img-mobile',
          zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out'
          },
          gallery: {enabled: false},
          callbacks: {
              open:   function ()
                      {
                          location.hash = "quilt-square-" + this.currItem.el.data("title");
                          console.log(this.currItem.el.data());
                          $('.mfp-img').css('max-width', '<?php echo $image_size[0]; ?>px');
                          $('.quilt__detail-title').text(this.currItem.el.data('title'));
                          $('.quilt__detail-description').html(this.currItem.el.data('description'));
                      },
              close:  function ()
                      {
                          location.hash = "";
                      },
              change: function ()
                      {
                          console.log('Content changed');

                          location.hash = "quilt-square-" + this.currItem.el.data("slug");
                          
                          $('.mfp-img').css('max-width', '<?php echo $image_size[0]; ?>px');
                          $('.quilt__detail-title').text(this.currItem.el.data('title'));
                          $('.quilt__detail-description').html(this.currItem.el.data('description'));
                      }

          }
      });
      
      loadGalleryDeepLink();
      });
  });
</script> 			

				<?php get_footer(); ?>