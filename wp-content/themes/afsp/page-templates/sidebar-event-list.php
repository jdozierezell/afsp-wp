<?php
/**
 * Template Name: Sidebar Event List
 *
 * @package afsp
 */

				get_header();
				get_template_part('template-parts/title');
				if(have_posts()) : while(have_posts()) : the_post();
				  get_template_part('template-parts/splash-container');
          $counter = 0;
          $term = get_field('sef_event_type'); ?>

        <?php if(get_field('c_page_header')) : ?>

<div class="container">
  <h2 class="page__header"><?php echo get_field('c_page_header'); ?></h2>
</div>

        <?php endif; ?>

<section class="container">

        <?php if(is_page('Training Program: Facilitating a Suicide Bereavement Support Group')) : ?>

<br/>
  <!-- Begin MailChimp Signup Form -->
  <div id="mc_embed_signup" class="container__full">
    <form action="//afsp.us1.list-manage.com/subscribe/post?u=db11a6f2940a2b3d1fa0b2fe7&amp;id=3fbf9113af" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll" class="email" style="margin: 0;">
        <h2 class="email__cta">Interested in training?</h2>
        <input type="email" value="" name="EMAIL" class="email__form" id="mce-EMAIL" placeholder="enter your email address to keep in touch" required>
        <input style="display: none;" type="checkbox" value="17592186044416" name="group[77][17592186044416]" id="mce-group[77]-77-1" checked>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true">
          <input type="text" name="b_db11a6f2940a2b3d1fa0b2fe7_3fbf9113af" tabindex="-1" value="">
        </div>
        <div class="email__button">
          <input type="submit" value="Sign up" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
      </div>
    </form>
  </div>

    <!--End mc_embed_signup-->

        <?php endif; ?>

  <div class="sidebar">
    <div class="sidebar__nav-container" id="slick-container">
      <nav class="sidebar__nav" id="slick-sidebar">
        <a class="sidebar__nav-item" id="anchor0" href="#section0">Upcoming <?php echo $term->name;?> Events</a>

        <?php if(have_rows('c_content')) :
          while(have_rows('c_content')) : the_row(); $counter++; ?>

        <a class="sidebar__nav-item" id="anchor<?php echo $counter; ?>" href="#section<?php echo $counter; ?>"><?php the_sub_field('c_content_header'); ?></a>

        <?php endwhile;
        endif; ?>

      </nav>
    </div>
    <div class="sidebar__content">
      <section class="sidebar__content-section" id="section0">
        <h2 class="sidebar__content-header">Upcoming <?php echo $term->name; ?> Events</h2>

        <?php $today = date('Ymd');
        // WP_Query arguments
        $args = array (
          'post_type'  => array( 'event' ),
          'tax_query'  => array(
                            array(
                                  'taxonomy' => 'event-type',
                                  'field'    => 'slug',
                                  'terms'    => $term->slug
                            )
                          ),
          'meta_key'   => 'e_start_date',
          'orderby'    => 'meta_value_num',
          'order'      => 'ASC',
          'meta_query' => array(
                            array(
                                  'key'     => 'e_start_date',
                                  'compare' => '>=',
                                  'value'   => $today
                            )
                          )
        );

        // The Query
        $events = new WP_Query( $args );

        // The Loop
        if ( $events->have_posts() ) : while ( $events->have_posts() ) : $events->the_post();
        $date = DateTime::createFromFormat('Y-m-d', get_field('e_start_date')); ?>

          <div class="sidebar-link__container">
            <h3 class="sidebar-link__title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?> &mdash; <?php echo $date->format('F j, Y'); ?></a>
              </h3>
          </div>

        <?php endwhile;
        else :
          the_field('sef_no_events');
        endif;

        // Restore original Post Data
        wp_reset_postdata(); ?>

      </section>

        <?php if(have_rows('c_content')) :
          $counter = 0;
          while(have_rows('c_content')) : the_row(); $counter++;
          if (get_sub_field('c_is_flex') == true) :
            $flex = 'flex';
          endif; ?>

      <section class="sidebar__content-section <?php echo $flex; ?>" id="section<?php echo $counter; ?>">
        <h2 class="sidebar__content-header"><?php the_sub_field('c_content_header'); ?></h2>
        <div>

        <?php if(!get_sub_field('c_link_to_pages')) :
          the_sub_field('c_content_section');
        else :
          if(have_rows('c_page_links')) : while(have_rows('c_page_links')) : the_row();
              $post_object = get_sub_field('c_page');
              if($post_object) :
                $post = $post_object;
                setup_postdata($post); ?>

          <div class="sidebar-link__container">
            <h3 class="sidebar-link__title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
            <p class="sidebar-link__teaser"><?php the_field('t_teaser'); ?></p>
          </div>

        <?php wp_reset_postdata(); // like we were never here
              endif;
            endwhile;
          endif;
        endif; ?>

          <a class="sidebar__top" href="#slick-container">&#x25B2; Back to Top</a>
        </div>
      </section>

        <?php endwhile;
        endif; ?>

    </div>
  </div>
</section>

        <?php if(get_field('c_cta_header')) : ?>

<section class="features features--full-background">
	<div class="features__cta">
	  <div class="container container--flex">
  		<h2 class="features__header"><?php the_field('c_cta_header'); ?></h2>
  		<div class="features__body"><?php the_field('c_cta_body'); ?></div>

  		  <?php if(get_field('c_cta_button')) :
          if(get_field('c_link_type') == 'internal') :
        	  $link = get_field('c_cta_page_link');
          elseif(get_field('c_link_type') == 'email') :
            $link = 'mailto:' . get_field('c_cta_email_link');
          else :
            $link = get_field('c_cta_external_link');
          endif;?>

		  <div class="features__button-wrapper">
  		  <a class="features__button" href="<?php echo $link ?>"><?php the_field('c_cta_button'); ?></a>
		  </div>

  		  <?php endif;
  		  endif; ?>

	  </div>
	</div>
</section>
				<?php	endwhile;
				endif; ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/ScrollToPlugin.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.min.js"></script>
<script>
  jQuery(document).ready(function($) {

    $('#slick-sidebar').slicknav({
      prependTo: '#slick-container',
      label: 'View Sections'
    });
    function loadScript() {
      if ($(window).width() >= 768) {
        $.getScript('<?php echo get_template_directory_uri(); ?>/js/sidebar.js');
      }
    }
    loadScript();
    $(window).resize(function() {
      loadScript();
    });
  });
</script>

				<?php get_footer(); ?>
