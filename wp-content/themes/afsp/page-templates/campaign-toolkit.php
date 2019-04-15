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
<style>
.background {
  background: linear-gradient(hsl(224, 100%, 61%), hsl(224, 100%, 30%));
  margin: 0;
  font-family: avenirnextltpro-regular, helvetica, arial, sans-serif;
  padding-bottom: 1px;
}

.full-width {
  height: 375px;
  background-color: #eaeaea;
  background-image: url('<?php echo $image_url; ?>');
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
}

#grid {
  display: grid;
  max-width: 1100px;
  margin: auto;
  padding: 0 1em;
  grid-gap: 40px;
  background: linear-gradient(hsl(224, 100%, 61%), hsl(224, 100%, 30%));
  margin-bottom: 24px;
}

.grid-description, 
.page-description {
  grid-row: 1;
  color: #fff;
  font-size: 1.5em;
  padding: 1em 0;
}

.grid-item {
  box-sizing: border-box;
  width: 100%;
  height: 120px;
  border: 10px solid #fff;
  box-shadow: 10px 10px 0;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.grid-item img {
  width: 100%;
  height: 100%;
}

.grid-children {
  display: grid;
  grid-gap: 0 25px;
  animation-name: slidein;
  animation-duration: 1s;
  margin-bottom: 4em;
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
  transition: all 0.2s;
  overflow: hidden;
  cursor: default;
}

.grid-item-description {
  position: absolute;
  top: 10px;
  width: 80%;
  left: 10%;
}

.grid-button {
  position: absolute;
  bottom: 10px;
  width: 80%;
  left: 10%;
  background: #396dff;
  border: none;
  padding: 1em;
  color: white;
  cursor: pointer;
}

/* Dynamic classes and animations */

.grid-hide {
  display:none;
}

.active {
  bottom: 0;
}

@keyframes slidein {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@media screen and (min-width: 1400px) {

  #grid {
    grid-template-columns: repeat(3, 1fr);
  }
  
  .grid-description {
    grid-column: 1 / span 3;
  }
  
  .grid-item {
    height: 100%;
  }

  .grid-item:nth-of-type(-n+6) {
    grid-row: 2;
  }

  .grid-item:nth-child(n+7) {
    grid-row: 6;
  }

  .grid-children {
    grid-template-columns: repeat(4, 1fr);
    grid-column: 1 / span 3;
  }

  .grid-children:nth-of-type(3) {
    grid-row: 3;
    margin: 1px auto -1px;
  }

  .grid-children:nth-of-type(5) {
    grid-row: 4;
    margin: -5px auto 5px;
  }

  .grid-children:nth-of-type(7) {
    grid-row: 5;
    margin: -11px auto 11px;
  }

  .grid-children:nth-of-type(9) {
    grid-row: 7;
    margin: 1px auto -1px;
  }

  .grid-children:nth-of-type(11) {
    grid-row: 8;
    margin: -5px auto 5px;
  }

  .grid-children:nth-of-type(13) {
    grid-row: 9;
    margin: -11px auto 11px;
  }

  .grid-children .grid-description {
    grid-column: 1 / span 4;
  }
  
}
</style>
<div class="background">
  <div class="full-width"></div>
  <div id="grid">
    <div class="page-description"><?php the_field( 't_page_description' ); ?></div>
    <?php if ( have_rows( 't_grid_section' ) ) : while ( have_rows( 't_grid_section' ) ) : the_row();
        $image = get_sub_field( 't_grid_image' );
        $image_mobile = get_sub_field( 't_grid_image_mobile' );
        if ( get_row_layout() === 't_grid_with_children' ) :
          $child_image = get_sub_field( 't_grid_child_image' );
    ?>
    <div class="grid-item">
      <picture>
        <source media="(max-width: 1440px)" srcset="<?php echo $image_mobile['url']; ?>">
        <img src="<?php echo $image['url']; ?>">
      </picture>
    </div>
    <div class="grid-children">
      <div class="grid-item">
        <img class="grid-image" src="<?php echo $child_image['url']; ?>" />
        <div class="grid-overlay">
          <p class="grid-item-description"><?php the_sub_field( 't_grid_child_description' ); ?></p>
          <a class="grid-button" href="<?php the_sub_field( 't_link' ) ?>"><?php the_sub_field( 't_grid_child_cta' ) ?></a>
        </div>
      </div>
    </div>
        <?php endif;
          endwhile;
        endif;
    ?>
  </div>
</div>

<script>
let children = document.getElementsByClassName( 'grid-children' )
let items = document.getElementsByClassName( 'grid-item' )
const grid = document.getElementById( 'grid' )
for ( let i = 0; i < children.length; i++ ) {
  children[i].classList.add( 'grid-hide' )
}
for ( let i = 0; i < items.length; i++ ) {
  if ( !items[i].parentNode.classList.contains('grid-children') ) {
    items[i].addEventListener( 'click', event => {
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
    items[i].addEventListener( 'click', event => {
      if ( event.target.classList.contains( 'grid-image' ) ) {
        const sibling = event.target.nextSibling.nextSibling
        sibling.classList.add ( 'active' )
      } else if ( event.target.classList.contains( 'grid-overlay' ) ) {
        event.target.classList.remove( 'active' )
      }
    } )
  }
} 
grid.style.gridGap = '6px 25px';
</script>

<?php endwhile;
endif;
get_footer(); ?>
