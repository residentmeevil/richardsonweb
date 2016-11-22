<?php

function rw_customizer( $wp_customize ) {

  $wp_customize->add_panel( 'rw_panel', array(
   'priority'       => 10,
    'title'          => __('RW Options - Design'),
    'description'    => __('Several settings pertaining my theme'),
  ) );

  //Typography

  require_once('typography.php');
  require_once('header.php');
  require_once('colours.php');

}

add_action( 'customize_register', 'rw_customizer' );

?>
