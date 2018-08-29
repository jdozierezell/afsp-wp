<?php

function chapterland_image_sizes() {  
  add_image_size( 'pretty-face', 233, 466, true );
  add_image_size( 'square-700', 700, 700 );
}
add_action( 'after_setup_theme', 'chapterland_image_sizes' );

?>