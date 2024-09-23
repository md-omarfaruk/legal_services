<?php
add_action( 'init', 'legal_services_our_team_register_post_type' );
function legal_services_our_team_register_post_type() {
	$args = [
		'label'  => esc_html__( 'Our Team', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Our Team', 'legal_services' ),
			'name_admin_bar'     => esc_html__( 'Our Team', 'legal_services' ),
			'add_new'            => esc_html__( 'Add Team Member', 'legal_services' ),
			'add_new_item'       => esc_html__( 'Add new Team Member', 'legal_services' ),
			'new_item'           => esc_html__( 'New Team Member', 'legal_services' ),
			'edit_item'          => esc_html__( 'Edit Team Member', 'legal_services' ),
			'view_item'          => esc_html__( 'View Team Member', 'legal_services' ),
			'update_item'        => esc_html__( 'View Team Member', 'legal_services' ),
			'all_items'          => esc_html__( 'All Team Members', 'legal_services' ),
			'search_items'       => esc_html__( 'Search Team Members', 'legal_services' ),
			'parent_item_colon'  => esc_html__( 'Parent Team Member', 'legal_services' ),
			'not_found'          => esc_html__( 'No Team Members found', 'legal_services' ),
			'not_found_in_trash' => esc_html__( 'No Team Members found in Trash', 'legal_services' ),
			'name'               => esc_html__( 'Team Members', 'legal_services' ),
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
		'hierarchical'        => true,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => true,
		'show_in_menu'        => true,
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-admin-users',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		'taxonomies' => [
			'category',
			'post_tag',
		],
		'rewrite' => true
	];

	register_post_type( 'team-member', $args );
}