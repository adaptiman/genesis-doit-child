<?php

//* Register front page widget areas
genesis_register_sidebar( array(
	'id'            => 'home-welcome',
	'name'          => __( 'Home Welcome', 'DSA-Genesis' ),
	'description'   => __( 'This is a home widget area that will show on the front page', 'DSA-Genesis' ),
) );
genesis_register_sidebar( array(
	'id'            => 'call-to-action',
	'name'          => __( 'Call to Action', 'DSA-Genesis' ),
	'description'   => __( 'This is a call to action widget area that will show on the front page', 'DSA-Genesis' ),
) );

?>
