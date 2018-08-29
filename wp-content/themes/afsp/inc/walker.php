<?php

add_filter('nav_menu_css_class' , 'afsp_nav_classes' , 10 , 2);
function afsp_nav_classes($classes, $item){
  
  $classes[] = 'nav-list__item';

  // if(is_single() && $item->title == "Blog"){ //Notice you can change the conditional from is_single() and $item->title
  //         $classes[] = "special-class";
  // }
   return $classes;
}

?>