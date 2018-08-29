<?php
/**
 * Template Name: Campaign - NSPW 2017
 *
 * @package afsp
 */

				get_header();
				get_template_part('template-parts/title'); ?>

<style>
.nspw17-header {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
  text-align: center;
  min-height: calc(100vh - 250px);
  background-color: #396dff;
  padding-left: 1rem;
  padding-right: 1rem;
}
.nspw17-header div {
  width: 100%;
}
.nspw17-header h1, .nspw17-header p {
  flex: 1 0 100%;
  color: white;
}
.nspw17-header h1 {
  text-transform: uppercase;
  font-size: 3rem;
  font-family: 'PaulGroteskSoft-Bold';
}
/* .nspw17-header h1 span {
  color: #eb5942;
} */
.nspw17-header p {
  font-size: 2rem;
  margin: 0;
  padding: 0;
}
.nspw17-h2 {
  background-color: #f05a30;
  padding: 1rem;
  font-size: 2rem;
  color: white;
  text-align: center;
  width: 100%;
  font-family: 'AvenirNextLTPro-Regular', Arial, sans-serif;
}
.nspw17-links, .nspw17-stories {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
  justify-content: space-between;
}
.nspw17-link {
  position: relative;
  flex: 1 0 100vw;
  height: 100vw;
  overflow: hidden;
}
.nspw17-link img {
  transform: scale(1);
  transition: all 0.5s ease-in-out;
}
.nspw17-link:hover img {
  transform: scale(1.3);
  opacity: 1.3;
  max-width: none;
}
.nspw17-link a {
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
.nspw17-link:hover a {
  opacity: 1;
}
@media (min-width: 667px) {
  .nspw17-header {
    min-height: calc(100vh - 310px);
  }
  .nspw17-header h1 {
    font-size: 4rem;
  }
  .nspw17-header p, .nspw17-h2 {
    font-size: 3rem;
  }
}
@media (min-width: 768px) {
  .nspw17-link {
    flex: 1 0 49vw;
    height: 49vw;
  }
  .nspw17-header h1 {
    font-size: 5rem;
  }
}
@media (min-width: 960px) {
  .nspw17-header {
    min-height: calc(100vh - 220px);
  }
}
@media (min-width: 1024px) {
  .nspw17-link {
    flex: 1 0 24vw;
    height: 24vw;
  }
}
</style>
<section class="container__full nspw17-header">
  <div>

        <?php the_field('nspw_title_display'); ?>

  </div>
</section>
<section class="container__full nspw17-links">
  <h2 class="nspw17-h2">What you can do to #StopSuicide</h2>

        <?php if(have_rows('nspw_activities')) : while(have_rows('nspw_activities')) : the_row();
            $link = '';
            if(get_sub_field('nspw_link_type') === 'internal') :
              $post_object = get_sub_field('nspw_internal');
              if($post_object) :
                $post = $post_object;
                setup_postdata($post);
                $link = get_the_permalink();
                wp_reset_postdata();
              endif;
            elseif(get_sub_field('nspw_link_type') === 'external') :
              $link = get_sub_field('nspw_external');
            endif;
         ?>

  <div class="nspw17-link">

        <?php $image_url = '';
        $image_object = get_sub_field('nspw_link_image');
        if($image_object) :
          $image_url = $image_object['url'];
          $image_url = str_replace('afsp.org', 'afsp.imgix.net', $image_url);
          $image_url .= '?w=768&h=768&fit=crop&crop=faces';
        endif; ?>

    <img src="<?php echo $image_url; ?>" alt="Link Image" class="nspw17-link__image">
    <a href="<?php echo $link; ?>"><?php echo get_sub_field('nspw_link_title'); ?></a>
  </div>

        <?php endwhile;
        endif; ?>

</section>
<section class="container__full nspw17-stories">
  <h2 class="nspw17-h2">Having the conversation to #StopSuicide</h2>

        <?php if(have_rows('nspw_stories')) : while(have_rows('nspw_stories')) : the_row();
            $link = '';
            if(get_sub_field('nspw_story_type') === 'internal') :
              $post_object = get_sub_field('nspw_int_story');
              if($post_object) :
                $post = $post_object;
                setup_postdata($post);
                $link = get_the_permalink();
                wp_reset_postdata();
              endif;
            elseif(get_sub_field('nspw_story_type') === 'external') :
              $link = get_sub_field('nspw_ext_story');
            endif;
         ?>

  <div class="nspw17-link">

        <?php $image_url = '';
        $image_object = get_sub_field('nspw_story_image');
        if($image_object) :
          $image_url = $image_object['url'];
          $image_url = str_replace('afsp.org', 'afsp.imgix.net', $image_url);
          $image_url .= '?w=768&h=768&fit=crop&crop=faces';
        endif; ?>

    <img src="<?php echo $image_url; ?>" alt="Story Image" class="nspw17-link__image">
    <a href="<?php echo $link; ?>"><?php echo get_sub_field('nspw_story_title'); ?></a>
  </div>

        <?php endwhile;
        endif; ?>

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

<script>
	jQuery(document).ready(function($){
		$('.nspw17-links .nspw17-link:last').on('click', function(event){
			event.preventDefault()
			$('.modal__overlay, #selfie_modal').css('display','block')
    })
		$('.modal__overlay').on('click', function(){
			$('.modal__overlay, .modal').css('display','none');
		})
  })
</script>
				<?php get_footer(); ?>
