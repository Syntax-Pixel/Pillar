<?php

// Taxonomy (Catgeory) Portofolio Page

function pillar_portofolio_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Portofolio Categories', 'Portofolio Categories', 'pillar' ),
		'singular_name'              => _x( 'Portofolio Category', 'Portofolio Category', 'pillar' ),
		'menu_name'                  => __( 'Portofolio Category', 'pillar' ),
		'all_items'                  => __( 'All Categories', 'pillar' ),
		'parent_item'                => __( 'Parent Category', 'pillar' ),
		'pareCategory_colon'         => __( 'Parent Category:', 'pillar' ),
		'new_item_name'              => __( 'New Category Name', 'pillar' ),
		'add_new_item'               => __( 'Add New Category', 'pillar' ),
		'edit_item'                  => __( 'Edit Category', 'pillar' ),
		'update_item'                => __( 'Update Category', 'pillar' ),
		'view_item'                  => __( 'View Category', 'pillar' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'pillar' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'pillar' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'pillar' ),
		'popular_items'              => __( 'Popular Categories', 'pillar' ),
		'search_items'               => __( 'Search Categories', 'pillar' ),
		'not_found'                  => __( 'Not Found', 'pillar' ),
		'no_terms'                   => __( 'No Categories', 'pillar' ),
		'items_list'                 => __( 'Categories list', 'pillar' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'pillar' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'portofolio-category', array( 'portofolio' ), $args );
}
add_action( 'init', 'pillar_portofolio_taxonomy', 0 );

// Taxonomy (Category) Team Page

function pillar_team_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Team Roles', 'Team Roles', 'pillar' ),
		'singular_name'              => _x( 'Team Role', 'Team Role', 'pillar' ),
		'menu_name'                  => __( 'Team Role', 'pillar' ),
		'all_items'                  => __( 'All Roles', 'pillar' ),
		'parent_item'                => __( 'Parent Role', 'pillar' ),
		'pareCategory_colon'         => __( 'Parent Role:', 'pillar' ),
		'new_item_name'              => __( 'New Role Name', 'pillar' ),
		'add_new_item'               => __( 'Add New Role', 'pillar' ),
		'edit_item'                  => __( 'Edit Role', 'pillar' ),
		'update_item'                => __( 'Update Role', 'pillar' ),
		'view_item'                  => __( 'View Role', 'pillar' ),
		'separate_items_with_commas' => __( 'Separate Roles with commas', 'pillar' ),
		'add_or_remove_items'        => __( 'Add or remove Roles', 'pillar' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'pillar' ),
		'popular_items'              => __( 'Popular Roles', 'pillar' ),
		'search_items'               => __( 'Search Roles', 'pillar' ),
		'not_found'                  => __( 'Not Found', 'pillar' ),
		'no_terms'                   => __( 'No Roles', 'pillar' ),
		'items_list'                 => __( 'Roles list', 'pillar' ),
		'items_list_navigation'      => __( 'Roles list navigation', 'pillar' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'team-role', array( 'team' ), $args );
}
add_action( 'init', 'pillar_team_taxonomy', 0 );
?>