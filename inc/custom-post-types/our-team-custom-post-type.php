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
			'all_items'          => esc_html__( 'All Team Members', 'legal_services' ),
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
		'show_in_menu'        => false,
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		
		'rewrite' => true
	];

	register_post_type( 'team-member', $args );
}

//---------------------Added default custom meta box with our team post type------------------------
// Hook to add meta box
add_action( 'add_meta_boxes', 'team_member_add_meta_box' );

// Function to create meta box
function team_member_add_meta_box() {
    add_meta_box(
        'team_member_designation',       // Meta box ID
        'Designation',                   // Meta box title
        'team_member_meta_box_callback', // Callback function
        'team-member',                   // Post type where to display
        'normal',                        // Context (normal/side)
        'high'                           // Priority
    );
}

// Callback function to render the meta box
function team_member_meta_box_callback( $post ) {
    // Retrieve current value of 'designation' meta field, if exists
    $designation = get_post_meta( $post->ID, '_team_member_designation', true );
    
    // Security nonce for verification
    wp_nonce_field( 'team_member_save_meta_box_data', 'team_member_meta_box_nonce' );
    ?>
    <label for="team_member_designation_field">Designation</label>
    <input type="text" id="team_member_designation_field" name="team_member_designation_field" value="<?php echo esc_attr( $designation ); ?>" size="25" />
    <?php
}

// Hook to save meta box data
add_action( 'save_post', 'team_member_save_meta_box_data' );

// Function to save meta box data
function team_member_save_meta_box_data( $post_id ) {
    // Check if nonce is valid to prevent unauthorized saving
    if ( ! isset( $_POST['team_member_meta_box_nonce'] ) ) {
        return;
    }
    if ( ! wp_verify_nonce( $_POST['team_member_meta_box_nonce'], 'team_member_save_meta_box_data' ) ) {
        return;
    }

    // Check for autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check user permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Check if the field is set
    if ( ! isset( $_POST['team_member_designation_field'] ) ) {
        return;
    }

    // Sanitize and save the data
    $designation = sanitize_text_field( $_POST['team_member_designation_field'] );
    update_post_meta( $post_id, '_team_member_designation', $designation );
}
