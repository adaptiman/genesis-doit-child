<?php
/**
 * DSA-Genesis
 *
 * Front page template
 *
 * @package DSA-Genesis
 * @author  David Sweeney
 * @license GPL-3.0+
 * @link    http://doit.tamu.edu/
 * @copyright Copyright (c) 2017, David Sweeney
 */

add_action( 'genesis_meta', 'home_page_setup' );

function home_page_setup() {
  $home_sidebars = array(
    'home-welcome'    => is_active_sidebar( 'home-welcome' ),
    'call-to-action'  => is_active_sidebar( 'call-to-action' ),
  );

  // Return early if no sidebars are active.
  if ( ! in_array( true, $home_sidebars ) ) {
      print ("Returned early");
      return;
  }

  // Add home welcome area if "Home Welcome" widget area is active.
  if ( $home_sidebars['home_welcome']) {
    add_action( 'genesis_after_header', 'dsa_genesis_add_home_welcome');
  }

  // Add call to action area if "Call to Action" widget area is active.
  if ( $home_sidebars['call_to_action']) {
    add_action( 'genesis_after_header', 'dsa_genesis_add_call_to_action');
  }
}

/**
*
* Display content for the "Home Welcome" section.
*@since 2.3.1
*/

function dsa_genesis_add_home_welcome() {
  genesis_widget_area( 'home-welcome',
    array(
      'before' => '<div class="home-welcome"><div class="wrap">',
      'after'  => '</div></div>',
    )
  );
}

/**
*
* Display content for the "Call to Action" section.
*@since 2.3.1
*/

function dsa_genesis_add_call_to_action() {
  genesis_widget_area( 'call-to-action',
    array(
      'before' => '<div class="call-to-action"><div class="wrap">',
      'after'  => '</div></div>',
    )
  );
}

genesis();
