<?php

// Register Post Type Portofolio

function pillar_create_post_type_portofolio(){
	$args = array(
		'supports' => array( 'title' , 'editor' , 'custom-field' , 'thumbnail' ),
		'labels' => array(
			'name' => __( 'Portofolios' ),
			'singular_name' => __( 'Portofolio' ),
		),
		'public' => true,
		'rewrite' => array( 'slug' => __( 'portofolios' ) ),
		);
	register_post_type( 'portofolio' , $args );
}
add_action( 'init', 'pillar_create_post_type_portofolio' );

?>