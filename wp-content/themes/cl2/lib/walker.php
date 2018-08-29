<?php

class Primary_Navigation_Walker extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = array()) {
      $indent = str_repeat("\t", $depth);
      
      // add the dropdown CSS class
      $output .= "\n$indent<ul class=\"sub-menu\">\n
                  \t<li class=\"sub-menu__back-li\">\n
                  \t<button class=\"sub-menu__back-button\">Back</button>
                  </li>";
    }
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
      // var_dump($item);
      $classes = implode(' ', $item->classes);
      $output .= "<li class=\"$classes\"><a href=\"$item->url\">$item->title</a></li>";
    }
    public function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {

      // remove default classes from menu 
      $element->classes = array();
      
      // add the classes we want the element to have
      $element->classes[] = 'sidebar-nav__link';

      // if element is current or is an ancestor of the current element, add 'active' class to the list item
      $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';

      // if it is a root element and the menu is not flat, add 'has-dropdown' class 
      // from https://core.trac.wordpress.org/browser/trunk/src/wp-includes/class-wp-walker.php#L140
      $element->has_children = !empty($children_elements[$element->ID]);
      $element->classes[] = ($element->has_children && 1 !== $max_depth ) ? 'has-sub-menu' : '';

      // call parent method
      parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
 }