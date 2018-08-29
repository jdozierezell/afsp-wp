<?php
/**
 * Template Name: Our Journey
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
				<?php	if(have_posts()) : while(have_posts()) : the_post(); 
				if(post_password_required()) :
				  get_template_part('template-parts/password-protection');
        else : 
				  get_template_part( 'template-parts/splash-container'); ?>
				
<div class="container">
<section class="program-feature">
  <h2 class="program-feature__header"><?php the_field('oj_intro'); ?></h2> 
  
        <?php the_field('oj_description'); ?>
  
<!--   <table id="journey_questions" class="journey-table">
    <tr class="head">
      <td>Yes</td>
      <td>No</td>
      <td style="text-align: center;">Questions</td>
    </tr>
    <tr id="grieving">
      <td><input id="grieving_yes" type="radio" name="grieving" /></td>
      <td><input id="grieving_no" type="radio" name="grieving" /></td>
      <td>I have done most of my grieving on my own, without the help or support of friends, family members, support groups, or professionals.</td>
    </tr>
    <tr id="morning">
      <td><input id="morning_yes" type="radio" name="morning" /></td>
      <td><input id="morning_no" type="radio" name="morning" /></td>
      <td>The first thing I think of each morning and the last thing I think of each night is my loved one who died by suicide.</td>
    </tr>
    <tr id="story">
      <td><input id="story_yes" type="radio" name="story" /></td>
      <td><input id="story_no" type="radio" name="story" /></td>
      <td>It is difficult for me to watch a movie or television show when suicide is part of the story line.</td>
    </tr>
    <tr id="speaking">
      <td><input id="speaking_yes" type="radio" name="speaking" /></td>
      <td><input id="speaking_no" type="radio" name="speaking" /></td>
      <td>Speaking openly about my loss is still too painful.</td>
    </tr>
    <tr id="anger">
      <td><input id="anger_yes" type="radio" name="anger" /></td>
      <td><input id="anger_no" type="radio" name="anger" /></td>
      <td>Thinking about my loss brings up intense feelings of anger.</td>
    </tr>
    <tr id="embarrassed">
      <td><input id="embarrassed_yes" type="radio" name="embarrassed" /></td>
      <td><input id="embarrassed_no" type="radio" name="embarrassed" /></td>
      <td>I avoid speaking about suicide because I am embarrassed or ashamed, or because I have heard negative or hurtful comments about people who take their lives.</td>
    </tr>
    <tr id="painful">
      <td><input id="painful_yes" type="radio" name="painful" /></td>
      <td><input id="painful_no" type="radio" name="painful" /></td>
      <td>Talking about my loss or hearing others talk about theirs is very painful for me.</td>
    </tr>
    <tr id="overwhelming">
      <td><input id="overwhelming_yes" type="radio" name="overwhelming" /></td>
      <td><input id="overwhelming_no" type="radio" name="overwhelming" /></td>
      <td>My grief feels overwhelming to me more days than not.</td>
    </tr>
    <tr id="support">
      <td><input id="support_yes" type="radio" name="support" /></td>
      <td><input id="support_no" type="radio" name="support" /></td>
      <td>I have not attended a support group or other event specifically geared toward suicide loss, and am or would be uncomfortable listening to others share at those events.</td>
    </tr>
  </table> -->
  
  <div id="journey_yes">
  
          <?php the_field('oj_alert'); ?>
  
  </div>
  <a id="journey_conf" class="button features__button" style="display: none;" href="<?php echo get_field('oj_link'); ?>" target="_blank">Register for Our Journey Conference</a>
  <hr />
  <div><?php the_field('oj_sponsors'); ?></div>
</section>
  				
				<?php endif; endwhile;
				endif; ?>

<script>
  jQuery('document').ready(function($) {
    function show_link() {
      if ($('#grieving_no').prop('checked') == true && $('#morning_no').prop('checked') == true && $('#story_no').prop('checked') == true && $('#speaking_no').prop('checked') == true && $('#anger_no').prop('checked') == true && $('#embarrassed_no').prop('checked') == true && $('#painful_no').prop('checked') == true && $('#overwhelming_no').prop('checked') == true && $('#support_no').prop('checked') == true) {
        $('#journey_conf').fadeIn('fast');
      }
    }
    function hide_link() {
      if ($('#journey_conf').css('display') == 'inline-block' && ($('#grieving_yes').prop('checked') == true || $('#morning_yes').prop('checked') == true || $('#story_yes').prop('checked') == true || $('#speaking_yes').prop('checked') == true || $('#anger_yes').prop('checked') == true || $('#embarrassed_yes').prop('checked') == true || $('#painful_yes').prop('checked') == true || $('#overwhelming_yes').prop('checked') == true || $('#support_yes').prop('checked') == true)) {
        $('#journey_conf').fadeOut(400);
      }
    }
    function show_yes() {
      if ($('#grieving_yes').prop('checked') == true || $('#morning_yes').prop('checked') == true || $('#story_yes').prop('checked') == true || $('#speaking_yes').prop('checked') == true || $('#anger_yes').prop('checked') == true || $('#embarrassed_yes').prop('checked') == true || $('#painful_yes').prop('checked') == true || $('#overwhelming_yes').prop('checked') == true || $('#support_yes').prop('checked') == true) {
        $('#journey_yes').fadeIn('fast');
      }
    }
    function hide_yes() {
      if ($('#journey_yes').css('display') == 'block' && $('#grieving_no').prop('checked') == true && $('#morning_no').prop('checked') == true && $('#story_no').prop('checked') == true && $('#speaking_no').prop('checked') == true && $('#anger_no').prop('checked') == true && $('#embarrassed_no').prop('checked') == true && $('#painful_no').prop('checked') == true && $('#overwhelming_no').prop('checked') == true && $('#support_no').prop('checked') == true) {
        $('#journey_yes').fadeOut(400);
      }
    }
    
    $('input').change(function() {
      if($('input:checked').length == 9) {
        show_link();
        hide_link();
        show_yes();
        hide_yes();
      }
    });
    // $('#journey_questions').find('#morning, #story, #speaking, #anger, #embarrassed, #painful, #overwhelming, #support').css('color', '#ccc').find('input').attr('disabled', true);
    // $('input[name="grieving"]').change(function() {
    //   if ($('#grieving_yes').prop('checked') == true) {
    //     hide_link();
    //     show_yes();
    //   }
    //   if ($('#grieving_no').prop('checked') == true) {
    //     hide_yes();
    //     show_link();
    //     $('#morning').css('color', '#333f48').find('input').attr('disabled', false);  
    //   }
    // });
    // $('input[name="morning"]').change(function() {
    //   if ($('#morning_yes').prop('checked') == true) {
    //     hide_link();
    //     show_yes();
    //   }
    //   if ($('#morning_no').prop('checked') == true) {
    //     hide_yes();
    //     show_link();
    //     $('#story').css('color', '#333f48').find('input').attr('disabled', false);  
    //   }
    // });
    // $('input[name="story"]').change(function() {
    //   if ($('#story_yes').prop('checked') == true) {
    //     hide_link();
    //     show_yes();
    //   }
    //   if ($('#story_no').prop('checked') == true) {
    //     hide_yes();
    //     show_link();
    //     $('#speaking').css('color', '#333f48').find('input').attr('disabled', false);  
    //   }
    // });
    // $('input[name="speaking"]').change(function() {
    //   if ($('#speaking_yes').prop('checked') == true) {
    //     hide_link();
    //     show_yes();
    //   }
    //   if ($('#speaking_no').prop('checked') == true) {
    //     hide_yes();
    //     show_link();
    //     $('#anger').css('color', '#333f48').find('input').attr('disabled', false);  
    //   }
    // });
    // $('input[name="anger"]').change(function() {
    //   if ($('#anger_yes').prop('checked') == true) {
    //     hide_link();
    //     show_yes();
    //   }
    //   if ($('#anger_no').prop('checked') == true) {
    //     hide_yes();
    //     show_link();
    //     $('#embarrassed').css('color', '#333f48').find('input').attr('disabled', false);  
    //   }
    // });
    // $('input[name="embarrassed"]').change(function() {
    //   if ($('#embarrassed_yes').prop('checked') == true) {
    //     hide_link();
    //     show_yes();
    //   }
    //   if ($('#embarrassed_no').prop('checked') == true) {
    //     hide_yes();
    //     show_link();
    //     $('#painful').css('color', '#333f48').find('input').attr('disabled', false);  
    //   }
    // });
    // $('input[name="painful"]').change(function() {
    //   if ($('#painful_yes').prop('checked') == true) {
    //     hide_link();
    //     show_yes();
    //   }
    //   if ($('#painful_no').prop('checked') == true) {
    //     hide_yes();
    //     show_link();
    //     $('#overwhelming').css('color', '#333f48').find('input').attr('disabled', false);  
    //   }
    // });
    // $('input[name="overwhelming"]').change(function() {
    //   if ($('#overwhelming_yes').prop('checked') == true) {
    //     hide_link();
    //     show_yes();
    //   }
    //   if ($('#overwhelming_no').prop('checked') == true) {
    //     hide_yes();
    //     show_link();
    //     $('#support').css('color', '#333f48').find('input').attr('disabled', false);  
    //   }
    // });
    // $('input[name="support"]').change(function() {
    //   if ($('#support_yes').prop('checked') == true) {
    //     hide_link();
    //     show_yes();
    //   }
    //   if ($('#support_no').prop('checked') == true) {
    //     hide_yes();
    //     show_link();
    //   }
    // });
  });
</script>

				<?php get_footer(); ?>