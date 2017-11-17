<?php
// Tells WordPress to load the WordPress theme and output it.
define('WP_USE_THEMES', true);

/**
 * Inelegant solution to at issue with session storage on Pantheon, coming from 
 * easy-bootstrap-shortcodes plugin
 *   @see https://www.drupal.org/node/2177647
 */
if (!ini_get('session.save_handler')) {
  ini_set('session.save_handler', 'file');
}

// Loads the WordPress Environment and Template
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
