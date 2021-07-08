<?php

// Custom Post Type Team

function pillar_create_post_type_team() {
	$args = array(
		'supports' => array( 'title' , 'editor' , 'custom-field' , 'thumbnail' ),
		'labels' => array(
			'name' => __( 'Teams' ),
			'singular_name' => __( 'Team' ),
		),
		'public' => true,
		'rewrite' => array( 'slug' => __( 'teams' ) ),
		);
	register_post_type( 'team' , $args );
}
add_action( 'init', 'pillar_create_post_type_team' );

?>