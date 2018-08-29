<?php

// check whether a page has children
function has_children($postID) {

  $children = get_pages(array('child_of' => $postID));
  if(count($children) == 0) {
    return false;
  } else {
    return true;
  }
}