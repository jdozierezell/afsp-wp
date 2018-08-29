<?php

// convert access levels to numbers so that they can be compared
function level_to_number ($level) {
  $number = 0;
  switch ($level) {
    case 'volunteer':
    case 'volunteer':
    case 'subscriber':
    case 'contributor':
      $number .= 0;
      break;
    case 'board':
    case 'board':
      $number .= 1;
      break;
    case 'staff':
    case 'staff':
    case 'administrator':
    case 'author':
    case 'editor':
      $number .= 2;
      break;
  }
  return $number;
}