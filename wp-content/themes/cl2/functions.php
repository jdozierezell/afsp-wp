<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',             // Scripts and stylesheets
  'lib/extras.php',             // Custom functions
  'lib/setup.php',              // Theme setup
  'lib/titles.php',             // Page titles
  'lib/wrapper.php',            // Theme wrapper class
  'lib/customizer.php',         // Theme customizer
  'lib/walker.php',             // Theme primary navigation walker
  'lib/favorites.php',          // Custom functions for favorites plugin
  'lib/algolia.php',            // Custom functions for algolia search engine
  'lib/login.php',              // Rules for redirecting from custom login page
  'lib/children.php',           // Check whether a page has children
  'lib/role.php',               // Compare access levels to user roles
  'lib/admin-bar.php',          // Hide admin bar from non-admins
  'lib/admin-edit-users.php',   // Allow non-super-admins to edit users
  'lib/admin-redirect.php',     // Force redirect on accidental admin access
  'lib/tribe-events.php',       // Force display of next month link
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
