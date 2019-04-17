<?php
/**
 * Template Name: Campaign Toolkit
 *
 * @package afsp
 */

get_header();
if(have_posts()) : while(have_posts()) : the_post(); 
    $image = get_field( 't_hero_image_full' );
    if ( !empty( $image ) ) {
      $image_url = $image['url'];
    }
?>
<script> 
var $buoop = {required:{e:-2,f:-3,o:-3,s:-1,c:-3},insecure:true,api:2019.04 }; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
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
  background-color: #eaeaea;
  background-image: url('https://afsp.org/wp-content/uploads/2019/04/RealConvo.png');
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
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
  color: white;
  cursor: pointer;
  text-decoration: none;
  font-family: "AvenirNextLTPro-Demi";
  text-align: center;
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
    -ms-grid-row: 4;
    grid-row: 4;
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

}
</style>
<div class="background">
  <div class="full-width"></div>
  <div id="grid">
    <div class="page-description"><?php the_field( 't_page_description' ); ?></div>
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
  <div id="calendar-modal" class="grid-item-modal">
    <div><svg id="modal-close" class="modal__close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 99.082 100" enable-background="new 0 0 99.082 100" xml:space="preserve"><g><g><path d="M49.54,0C22.198-0.019,0.027,22.375,0,49.973C0.027,77.618,22.198,100.01,49.54,100    c27.352,0.01,49.521-22.382,49.542-50.027C99.062,22.375,76.892-0.019,49.54,0z M49.54,88.477    c-21.037,0-38.095-17.225-38.077-38.504C11.442,28.741,28.503,11.51,49.54,11.521c21.047-0.01,38.107,17.221,38.131,38.452    C87.647,71.252,70.587,88.477,49.54,88.477z"></path></g><polygon points="71.57,37.466 62.073,27.97 49.54,40.504 37.006,27.97 27.509,37.466 40.047,50.007 27.509,62.534 37.006,72.03    49.54,59.496 62.073,72.03 71.57,62.534 59.036,50.007  "></polygon></g></svg></div><?php echo do_shortcode( '[add_eventon_list fixed_month="5" fixed_year="2019" ux_val="0" event_type="9723" accord="yes" ]' ); ?></div> <!-- calendar modal -->
</div>

<script>
const children = document.getElementsByClassName( 'grid-children' )
const childItems = document.getElementsByClassName( 'grid-item' )
const gridItemModalButtons = document.getElementsByClassName( 'grid-button-modal' )
const calendar = document.getElementById( 'calendar' )
const calendarModal = document.getElementById( 'calendar-modal' )
const modalClose = document.getElementsByClassName( 'modal__close' )
const grid = document.getElementById( 'grid' )

for ( let i = 0; i < children.length; i++ ) {
  children[i].classList.add( 'grid-hide' )
}
for ( let i = 0; i < childItems.length; i++ ) {
  if ( !childItems[i].parentNode.classList.contains('grid-children') ) {
    childItems[i].addEventListener( 'click', event => {
      const sibling = event.target.parentNode.parentNode.nextSibling.nextSibling
      if ( !sibling.classList.contains( 'grid-hide' ) ) {
        sibling.classList.add( 'grid-hide' )
      } else {
        for ( let i = 0; i < children.length; i++ ) {
          if ( !children[i].classList.contains( 'grid-hide' ) ) {
            children[i].classList.add( 'grid-hide' )
          }
        }
        sibling.classList.remove( 'grid-hide' )
      }
    } )
  } else {
    childItems[i].addEventListener( 'mouseover', event => {
      if ( event.target.classList.contains( 'grid-image' ) ) {
        const sibling = event.target.nextSibling.nextSibling
        sibling.classList.add ( 'active' )
        const eventParent = sibling.parentNode
        const eventParentSiblings = eventParent.parentNode.children
        for (let i = 0; i < eventParentSiblings.length; i++) {
          if ( eventParentSiblings[i] != eventParent && eventParentSiblings[i].children[1].classList.contains( 'active' ) ) {
            eventParentSiblings[i].children[1].classList.remove( 'active' )
          }
        }
      }
    } )
  }
} 

for ( let i = 0; i < gridItemModalButtons.length; i++ ) {
  gridItemModalButtons[i].addEventListener( 'click', event => {
    event.target.parentNode.nextSibling.nextSibling.style.display = 'block'
  } )
}

calendar.addEventListener( 'click', event => {
  calendarModal.style.display = 'block'
})

for( let i = 0; i < modalClose.length; i++ ) {
  console.log(modalClose[i].parentNode.parentNode)
  modalClose[i].addEventListener( 'click', event => {
    modalClose[i].parentNode.parentNode.style.display = 'none'                 
  } )
}
grid.style.gridGap = '6px 25px';
</script>

<?php endwhile;
endif; // end loop
get_footer(); ?>
