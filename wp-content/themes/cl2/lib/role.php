<?php

// convert access levels to numbers so that they can be compared
function role_to_number($role) {
  $number = 0;
  switch ($role) {
    case 'volunteer':
    case 'subscriber':
    case 'contributor':
      $number .= 0;
      break;
    case 'board':
      $number .= 1;
      break;
    case 'staff':
    case 'item_and_user_editor':
    case 'event_editor':
    case 'chapterland_editor':
    case 'super_admin':
    case 'administrator':
    case 'author':
    case 'editor':
      $number .= 2;
      break;
  }
  return $number;
}

// setup access levels
function role_permissions() {
  $current_user = wp_get_current_user();
  $role = $current_user->roles[0];
  $permissions = [];
  switch ($role) {
    case 'staff':
    case 'item_and_user_editor':
    case 'event_editor':
    case 'chapterland_editor':
    case 'super_admin':
    case 'administrator':
    case 'author':
    case 'editor':
        $permissions[] = 'staff'; // pass through as we want the "staff" role to inherit the board and volunteer roles.
    case 'board':
        $permissions[] = 'board'; // pass through as we want the board role to inherit the volunteer role.
    case 'volunteer':
    case 'subscriber':
    case 'contributor':
      $permissions[] = 'volunteer';
    break;
  }
  return $permissions;
}
