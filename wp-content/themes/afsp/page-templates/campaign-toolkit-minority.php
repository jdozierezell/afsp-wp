<?php
/**
 * Template Name: Campaign Toolkit Minority Mental Health
 *
 * @package afsp
 */

get_header();
if(have_posts()) : while(have_posts()) : the_post();
    $image = get_field( 't_hero_image_full' );
    $image_url = false;
    if ( !empty( $image ) ) {
      $image_url = $image['url'];
    }
    $image_mobile = get_field( 't_hero_image_mobile' );
    $image_mobile_url = false;
    if ( !empty( $image_mobile ) ) {
        $image_mobile_url = $image_mobile['url'];
    }
?>
<script>
var $buoop = {
  required:{
    e:-2,f:-3,o:-3,s:-1,c:-3
  },
  insecure:true,
  api:2019.04,
  reminder: 0,
  reminderClosed: 1,
  text: 'This page includes functionality that requires a modern browser. Please update your browser for the best experience. <br /><a{up_but}>Update browser</a> or <a{ignore_but}>Ignore</a>'
}
function $buo_f(){
 var e = document.createElement("script");
 e.src = "//browser-update.org/update.min.js";
 document.body.appendChild(e);
}
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}
</script>
<style>
.background {
  background: -webkit-gradient(linear, left top, left bottom, from(hsl(224, 100%, 61%)), to(hsl(224, 100%, 30%)));
  background: linear-gradient(hsl(224, 100%, 61%), hsl(224, 100%, 30%));
  margin: 0;
  font-family: avenirnextltpro-regular, helvetica, arial, sans-serif;
  padding-bottom: 1px;
}

.full-width {
  height: 375px;
  background-color: #396dff;
  background-image: url(<?php echo $image_mobile_url ? $image_mobile_url : ''; ?>);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

#intro-modal {
    color: white;
}

#intro-modal .text-wrapper {
    overflow: auto;
    overflow-x: hidden;
    max-width: 960px;
    font-size: 1.5rem;
    margin: 0 auto;
}

.fixed-top {
    position: fixed;
    top:0;
    left:0;
    right:0;
}

#grid {
  display: -ms-grid;
  display: grid;
  max-width: 1100px;
  margin: auto;
  padding: 0 1em;
  grid-gap: 40px;
  background: -webkit-gradient(linear, left top, left bottom, from(hsl(224, 100%, 61%)), to(hsl(224, 100%, 30%)));
  background: linear-gradient(hsl(224, 100%, 61%), hsl(224, 100%, 30%));
  margin-bottom: 24px;
}

.grid-description,
.page-description {
  -ms-grid-row: 1;
  grid-row: 1;
  -ms-grid-column-span: 3;
  grid-column: span 3;
  color: #fff;
  font-size: 1.5em;
  padding: 1em 0;
}

.grid-item {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  width: 100%;
  border: 10px solid #fff;
  -webkit-box-shadow: 10px 10px 0;
          box-shadow: 10px 10px 0;
  background: #fff;
  position: relative;
  cursor: pointer;
  -ms-grid-column-span: 3;
  grid-column: span 3;
}

.grid-item img {
  width: 100%;
}

.grid-children {
  display: -ms-grid;
  display: grid;
  grid-gap: 0 25px;
  -webkit-animation-name: slidein;
          animation-name: slidein;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  margin: 20px 0;
  -ms-grid-column-span: 3;
  grid-column: span 3;
  grid-gap: 20px;
}

.grid-children .grid-item {
  height: 100%;
}

.grid-overlay {
  background: rgba( 255, 255, 255, 0.8 );
  position: absolute;
  top: 0;
  right: 0;
  bottom: 100%;
  left: 0;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
  overflow: hidden;
  cursor: default;
}

.grid-item-description {
  position: absolute;
  top: 0px;
  width: 80%;
  left: 10%;
  font-size: 24px;
}

.grid-button {
  position: absolute;
  bottom: 16px;
  width: 80%;
  left: 10%;
  background: #396dff;
  border: none;
  padding: 1em;
  color: #ffffff;
  cursor: pointer;
  text-decoration: none;
  font-family: "AvenirNextLTPro-Demi";
  text-align: center;
}

.grid-button:hover {
  color: #ffffff;
}

/* Dynamic classes and animations */

.grid-hide {
  display: none;
}

.active {
  bottom: 0;
}

.modal__close {
  fill: #ffffff;
}

.grid-item-modal {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(50, 50, 50, 0.8);
  display: none;
  padding: 2rem;
  z-index: 100;
}

.grid-modal-content,
.ajde_evcal_calendar {
    position: absolute !important;
    left: 2rem;
    right: 2rem;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    width: calc(100% - 4rem) !important;
}

.grid-modal-content {
  color: #ffffff;
  font-size: 24px;
}

.evcal_month_line {
  display: none;
}

@-webkit-keyframes slidein {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@keyframes slidein {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@media screen and (min-width: 768px) {

    #intro-modal .text-wrapper {
        height: calc(100vh - 13rem);
    }

  #grid {
    -ms-grid-columns: 1fr 40px 1fr 40px 1fr;
    grid-template-columns: repeat(3, 1fr);
  }

  .grid-desription,
  .page-description {
    -ms-grid-column-span: 3;
    grid-column: span 3;
  }

  .grid-item {
    -ms-grid-column-span: 1;
    grid-column: span 1;
  }

  .grid-item-description {
    font-size: 18px;
  }

  .grid-item:nth-child(n+7) {
    -ms-grid-row: 6;
    grid-row: 6;
  }

  .grid-children {
    -ms-grid-column-span: 3;
    grid-column: span 3;
    grid-gap: 20px;
  }

  .grid-children:nth-of-type(3) {
    -ms-grid-row: 3;
    grid-row: 3;
    margin: 16px auto -1px;
  }

  .grid-children:nth-of-type(5) {
    -ms-grid-row: 4;
    grid-row: 4;
    margin: 10px auto 5px;
  }

  .grid-children:nth-of-type(7) {
    -ms-grid-row: 5;
    grid-row: 5;
    margin: 4px auto 11px;
  }

  .grid-children:nth-of-type(9) {
    -ms-grid-row: 7;
    grid-row: 7;
    margin: 1px auto -1px;
  }

  .grid-children:nth-of-type(11) {
    -ms-grid-row: 8;
    grid-row: 8;
    margin: -5px auto 5px;
  }

  .grid-children:nth-of-type(13) {
    -ms-grid-row: 9;
    grid-row: 9;
    margin: -11px auto 11px;
  }

  .grid-children .grid-item:nth-of-type(-n+3) {
    -ms-grid-row: 1;
    grid-row: 1;
  }

  .grid-children .grid-item:nth-of-type(n+4):nth-of-type(-n+6) {
    -ms-grid-row: 2;
    grid-row: 2;
  }

  .grid-children .grid-item:nth-of-type(n+7):nth-of-type(-n+9) {
    -ms-grid-row: 3;
    grid-row: 3;
  }

  .grid-children .grid-item:nth-of-type(n+10):nth-of-type(-n+12) {
    -ms-grid-row: 4;
    grid-row: 4;
  }

  .grid-children .grid-item:nth-of-type(n+13):nth-of-type(-n+15) {
    -ms-grid-row: 5;
    grid-row: 5;
  }

  .grid-children .grid-item:nth-of-type(n+16):nth-of-type(-n+18) {
    -ms-grid-row: 6;
    grid-row: 6;
  }

  .grid-children .grid-item:nth-of-type(n+19):nth-of-type(-n+21) {
    -ms-grid-row: 7;
    grid-row: 7;
  }

  .grid-children .grid-item:nth-of-type(n+22):nth-of-type(-n+24) {
    -ms-grid-row: 8;
    grid-row: 8;
  }

  .grid-children .grid-item:nth-of-type(n+25):nth-of-type(-n+27) {
    -ms-grid-row: 9;
    grid-row: 9;
  }

  .grid-children .grid-item:nth-of-type(n+28):nth-of-type(-n+30) {
    -ms-grid-row: 10;
    grid-row: 10;
  }

  .grid-item-modal {
    top: 4rem;
    bottom: 4rem;
    left: 4rem;
    right: 4rem;
    padding: 4rem;
  }

}

@media screen and (min-width: 1100px) {

    .full-width {
        background-image: url(<?php echo $image_url ? $image_url : ''; ?>);
    }

  .grid-children .grid-item:nth-of-type(-n+4) {
    -ms-grid-row: 1 !important;
    grid-row: 1 !important;
  }

  .grid-children .grid-item:nth-of-type(n+5):nth-of-type(-n+8) {
    -ms-grid-row: 2 !important;
    grid-row: 2 !important;
  }

  .grid-children .grid-item:nth-of-type(n+9):nth-of-type(-n+12) {
    -ms-grid-row: 3 !important;
    grid-row: 3 !important;
  }

  .grid-children .grid-item:nth-of-type(n+13):nth-of-type(-n+16) {
    -ms-grid-row: 4 !important;
    grid-row: 4 !important;
  }

  .grid-children .grid-item:nth-of-type(n+17):nth-of-type(-n+20) {
    -ms-grid-row: 5 !important;
    grid-row: 5 !important;
  }

  .grid-children .grid-item:nth-of-type(n+21):nth-of-type(-n+24) {
    -ms-grid-row: 6 !important;
    grid-row: 6 !important;
  }

  .grid-children .grid-item:nth-of-type(n+25):nth-of-type(-n+28) {
    -ms-grid-row: 7 !important;
    grid-row: 7 !important;
  }

  .grid-children .grid-item:nth-of-type(n+29):nth-of-type(-n+32) {
    -ms-grid-row: 8 !important;
    grid-row: 8 !important;
  }

}
</style>
<div class="background">
  <div class="full-width"></div>
  <div id="grid">
    <div class="page-description">
        <p>Just as with physical health, disparities exist for minority populations for mental health as well. Such
              disparities can create greater risk for suffering and mental health problems, and can make access to
           mental health care more difficult. The American Foundation for Suicide Prevention takes this issue
           seriously: everyone deserves treatment for any mental health challenge they are experiencing, and
           successful treatment doesn’t look the same for everyone.</p>
        <p><a id="intro" href="#">Read more</a></p>
    </div>
    <?php if ( have_rows( 't_grid_section' ) ) : while ( have_rows( 't_grid_section' ) ) : the_row();
        $image = get_sub_field( 't_grid_image' );
        $image_temp = $image['url'];
        $image_temp_url = str_replace('afsp.org','afsp.imgix.net', $image_temp);
        $image_url = $image_temp_url . '?w=700&h=700&fit=fill&fill=blur';
        $image_mobile = get_sub_field( 't_grid_image_mobile' );
        $image_mobile_temp = $image_mobile['url'];
        $image_mobile_temp_url = str_replace('afsp.org','afsp.imgix.net', $image_mobile_temp);
        $image_mobile_url = $image_mobile_temp_url . '?w=700&h=240&fit=fill&fill=blur';
        if ( get_row_layout() === 't_grid_with_children' ) :
    ?>
    <div class="grid-item grid-item-with-children">
      <picture>
        <source media="(max-width: 768px)" srcset="<?php echo $image_mobile_url; ?>">
        <img src="<?php echo $image_url; ?>">
      </picture>
    </div>
    <div class="grid-children">
    <?php if ( have_rows( 't_grid_children' ) ) : while ( have_rows( 't_grid_children' ) ) : the_row();
        $child_image = get_sub_field( 't_grid_child_image' );
        $child_image_temp_url = str_replace('afsp.org','afsp.imgix.net',$child_image['url']);
        $child_image_url = $child_image_temp_url . '?w=700&h=700&fit=fill&fill=blur';
    ?>
      <div class="grid-item">
        <img class="grid-image" src="<?php echo $child_image_url; ?>" />
    <?php if ( get_sub_field( 't_has_modal' ) === 'Yes' ) : ?>
        <div class="grid-overlay">
          <div class="grid-item-description"><?php the_sub_field( 't_grid_child_description' ); ?></div>
          <a class="grid-button grid-button-modal" href="#"><?php the_sub_field( 't_grid_child_cta' ) ?></a>
        </div>
        <div class="grid-item-modal">
          <div><svg class="modal__close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 99.082 100" enable-background="new 0 0 99.082 100" xml:space="preserve"><g><g><path d="M49.54,0C22.198-0.019,0.027,22.375,0,49.973C0.027,77.618,22.198,100.01,49.54,100    c27.352,0.01,49.521-22.382,49.542-50.027C99.062,22.375,76.892-0.019,49.54,0z M49.54,88.477    c-21.037,0-38.095-17.225-38.077-38.504C11.442,28.741,28.503,11.51,49.54,11.521c21.047-0.01,38.107,17.221,38.131,38.452    C87.647,71.252,70.587,88.477,49.54,88.477z"></path></g><polygon points="71.57,37.466 62.073,27.97 49.54,40.504 37.006,27.97 27.509,37.466 40.047,50.007 27.509,62.534 37.006,72.03    49.54,59.496 62.073,72.03 71.57,62.534 59.036,50.007  "></polygon></g></svg></div>
          <div class="grid-modal-content"><?php the_sub_field( 't_modal_content' ); ?></div>
        </div>
    <?php elseif ( get_sub_field( 't_has_modal' ) === 'No' ) : ?>
        <div class="grid-overlay">
          <div class="grid-item-description"><?php the_sub_field( 't_grid_child_description' ); ?></div>
          <a class="grid-button" href="<?php the_sub_field( 't_link' ) ?>" target="_blank"><?php the_sub_field( 't_grid_child_cta' ) ?></a>
        </div>
    <?php endif; ?>
      </div>
    <?php endwhile;
        endif; // end children repeater
    ?>
    </div>
    <?php endif; // end children layout
        if ( get_row_layout() === 't_grid_without_children_link' ) :
    ?>
    <div class="grid-item grid-item-without-children-link">
      <a href="<?php the_sub_field( 't_link' ); ?>" target="_blank">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo $image_mobile['url']; ?>">
          <img src="<?php echo $image['url']; ?>">
        </picture>
      </a>
    </div>
    <?php endif; // end link layout
        if ( get_row_layout() === 't_grid_without_children_modal' ) : ?>
    <div id="calendar" class="grid-item grid-item-without-children-modal">
      <div>
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo $image_mobile['url']; ?>">
          <img src="<?php echo $image['url']; ?>">
        </picture>
      </div>
    </div>
    <?php endif; // end modal layout
      endwhile;
    endif; // end all layouts
    ?>
  </div>
    <div id="intro-modal" class="grid-item-modal">
        <div><svg id="modal-close" class="modal__close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 99.082 100" enable-background="new 0 0 99.082 100"
                  xml:space="preserve">
            <g>
                <g>
                    <path d="M49.54,0C22.198-0.019,0.027,22.375,0,49.973C0.027,77.618,22.198,100.01,49.54,100
                    c27.352,0.01,49.521-22.382,49.542-50.027C99.062,22.375,76.892-0.019,49.54,0z M49.54,88.477
                    c-21.037,0-38.095-17.225-38.077-38.504C11.442,28.741,28.503,11.51,49.54,11.521c21.047-0.01,38.107,17.221,38.131,38.452
                    C87.647,71.252,70.587,88.477,49.54,88.477z"></path>
                </g>
                <polygon points="71.57,37.466 62.073,27.97 49.54,40.504 37.006,27.97 27.509,37.466 40.047,50.007 27.509,62.534 37.006,72.03
                49.54,59.496 62.073,72.03 71.57,62.534 59.036,50.007  "></polygon>
            </g>
        </svg>
        </div>
        <div class="text-wrapper">
        <p>Just as with physical health, disparities exist for minority populations for mental health as well. Such
           disparities can create greater risk for suffering and mental health problems, and can make access to
           mental health care more difficult. The American Foundation for Suicide Prevention takes this issue
           seriously: everyone deserves treatment for any mental health challenge they are experiencing, and successful treatment doesn’t look the same for everyone.</p>

        <p>We know it’s critically important to take a proactive, culturally informed
           approach to mental health that is led by minority populations, and is mindful
           of how history, experiences and societal factors have contributed to the health
           disparities that exist today. We know there’s more to learn about why these disparities occur, and what we can do about it. AFSP is dedicated to supporting these efforts.</p>
        <p>AFSP supports research related to preventing suicide in all populations. In addition to encouraging
           representation of minority populations in all our studies, AFSP has also funded studies specific to
           minority populations within a variety of diverse communities. As one example, AFSP funded a research study
           by Dr. Jennifer Humensky, “Life is Precious: Academic-Community Partnership to Reduce Suicidal Behavior in Latina Adolescents.” This work led to additional funding for new sites where the program could be studied, in New York City. It is one example of research that has helped to develop culturally informed treatments that are both evidence-based and are made available to the populations they serve.</p>

        <p>Our advocacy efforts at the federal, state, and local levels seeks to narrow the gaps in access to health
           care for all, such as supporting legislation that would enforce mental health parity laws, expand the
           mental health workforce, and increase access to care in underserved areas. At the same time, our local
           chapters work to better understand what’s needed in terms of support to prevent suicide and address the
           impact of suicide, both in terms of suicide loss and lived experience.</p>

        <p>We invite organizations and thought leaders with an interest in preventing suicide to join us in our efforts
           increase support and care for people everywhere.</p></div></div>
  <div id="calendar-modal" class="grid-item-modal">
    <div><svg id="modal-close" class="modal__close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 99.082 100" enable-background="new 0 0 99.082 100"
              xml:space="preserve">
            <g>
                <g>
                    <path d="M49.54,0C22.198-0.019,0.027,22.375,0,49.973C0.027,77.618,22.198,100.01,49.54,100
                    c27.352,0.01,49.521-22.382,49.542-50.027C99.062,22.375,76.892-0.019,49.54,0z M49.54,88.477
                    c-21.037,0-38.095-17.225-38.077-38.504C11.442,28.741,28.503,11.51,49.54,11.521c21.047-0.01,38.107,17.221,38.131,38.452
                    C87.647,71.252,70.587,88.477,49.54,88.477z"></path>
                </g>
                <polygon points="71.57,37.466 62.073,27.97 49.54,40.504 37.006,27.97 27.509,37.466 40.047,50.007 27.509,62.534 37.006,72.03
                49.54,59.496 62.073,72.03 71.57,62.534 59.036,50.007  "></polygon>
            </g>
        </svg>
    </div><?php echo do_shortcode( '[add_eventon_list fixed_month="7" fixed_year="2019" ux_val="0" event_type="10440" accord="yes" ]' ); ?></div> <!-- calendar modal -->
</div>

<script>
var children = document.getElementsByClassName( 'grid-children' )
var childItems = document.getElementsByClassName( 'grid-item' )
var gridItemModals = document.getElementsByClassName( 'grid-item-modal' )
var gridItemModalButtons = document.getElementsByClassName( 'grid-button-modal' )
var calendar = document.getElementById( 'calendar' )
var calendarModal = document.getElementById( 'calendar-modal' )
var intro = document.getElementById( 'intro' )
var introModal = document.getElementById( 'intro-modal' )
var modalClose = document.getElementsByClassName( 'modal__close' )
var grid = document.getElementById( 'grid' )

for ( var i = 0; i < children.length; i++ ) {
  children[i].classList.add( 'grid-hide' )
}
for ( var i = 0; i < childItems.length; i++ ) {
  if ( !childItems[i].parentNode.classList.contains('grid-children') ) {
    childItems[i].addEventListener( 'click', function (event) {
      var sibling = event.target.parentNode.parentNode.nextSibling.nextSibling
      if ( !sibling.classList.contains( 'grid-hide' ) ) {
        sibling.classList.add( 'grid-hide' )
      } else {
        for ( var i = 0; i < children.length; i++ ) {
          if ( !children[i].classList.contains( 'grid-hide' ) ) {
            children[i].classList.add( 'grid-hide' )
          }
        }
        sibling.classList.remove( 'grid-hide' )
      }
    } )
  } else {
    childItems[i].addEventListener( 'mouseover', function (event) {
      if ( event.target.classList.contains( 'grid-image' ) ) {
        var sibling = event.target.nextSibling.nextSibling
        sibling.classList.add ( 'active' )
        var eventParent = sibling.parentNode
        var eventParentSiblings = eventParent.parentNode.children
        for ( var i = 0; i < eventParentSiblings.length; i++ ) {
          if ( eventParentSiblings[i] != eventParent && eventParentSiblings[i].children[1].classList.contains( 'active' ) ) {
            eventParentSiblings[i].children[1].classList.remove( 'active' )
          }
        }
      }
    } )
  }
}

for ( var i = 0; i < gridItemModalButtons.length; i++ ) {
  gridItemModalButtons[i].addEventListener( 'click', function (event) {
    event.target.parentNode.nextSibling.nextSibling.style.display = 'block'
  } )
}

intro.addEventListener( 'click', function (event) {
    introModal.style.display = 'block'
    document.body.classList.add('fixed-top')
})

calendar.addEventListener( 'click', function (event) {
  calendarModal.style.display = 'block'
})

for ( var i = 0; i < modalClose.length; i++ ) {
  modalClose[i].addEventListener( 'click', function (event) {
    for ( var i = 0; i < gridItemModals.length; i++ ) {
      gridItemModals[i].style.display = 'none'
        if (document.body.classList.contains('fixed-top')) {
            document.body.classList.remove('fixed-top')
        }
    }
  } )
}
grid.style.gridGap = '6px 25px'
</script>

<?php endwhile;
endif; // end loop
get_footer(); ?>
