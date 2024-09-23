<?php
add_action( 'init', 'legal_services_our_team' );
function legal_services_our_team() {
	$args = [
		'label'  => esc_html__( 'Our Team', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Our Team', 'legal_services' ),
			'name_admin_bar'     => esc_html__( 'Team Member', 'legal_services' ),
			'add_new'            => esc_html__( 'Add Team Member', 'legal_services' ),
			'add_new_item'       => esc_html__( 'Add new Team Member', 'legal_services' ),
			'new_item'           => esc_html__( 'New Team Member', 'legal_services' ),
			'edit_item'          => esc_html__( 'Edit Team Member', 'legal_services' ),
			'view_item'          => esc_html__( 'View Team Member', 'legal_services' ),
			'update_item'        => esc_html__( 'View Team Member', 'legal_services' ),
			'all_items'          => esc_html__( 'All Our Team', 'legal_services' ),
			'search_items'       => esc_html__( 'Search Our Team', 'legal_services' ),
			'parent_item_colon'  => esc_html__( 'Parent Team Member', 'legal_services' ),
			'not_found'          => esc_html__( 'No Our Team found', 'legal_services' ),
			'not_found_in_trash' => esc_html__( 'No Our Team found in Trash', 'legal_services' ),
			'name'               => esc_html__( 'Our Team', 'legal_services' ),
			'singular_name'      => esc_html__( 'Team Member', 'legal_services' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-admin-users',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
		],
		'taxonomies' => [
			'category',
		],
		'rewrite' => true
	];

	register_post_type( 'our_team', $args );
}

// ---------------------------Default-Our-Team-Custom-Field-For-Designation------------------------

