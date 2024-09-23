<?php
// Register Custom Post Type: 'Our Team'
function create_our_team_cpt() {
    $labels = array(
        'name'                  => __('Our Team', 'Post Type General Name', 'legal_services'),
        'singular_name'         => __('Team Member', 'Post Type Singular Name', 'legal_services'),
        'menu_name'             => __('Our Team', 'legal_services'),
        'name_admin_bar'        => __('Team Member', 'legal_services'),
        'archives'              => __('Team Member Archives', 'legal_services'),
        'attributes'            => __('Team Member Attributes', 'legal_services'),
        'parent_item_colon'     => __('Parent Team Member:', 'legal_services'),
        'all_items'             => __('All Team Members', 'legal_services'),
        'add_new_item'          => __('Add New Team Member', 'legal_services'),
        'add_new'               => __('Add New', 'legal_services'),
        'new_item'              => __('New Team Member', 'legal_services'),
        'edit_item'             => __('Edit Team Member', 'legal_services'),
        'update_item'           => __('Update Team Member', 'legal_services'),
        'view_item'             => __('View Team Member', 'legal_services'),
        'view_items'            => __('View Team Members', 'legal_services'),
        'search_items'          => __('Search Team Member', 'legal_services'),
        'not_found'             => __('Not found', 'legal_services'),
        'not_found_in_trash'    => __('Not found in Trash', 'legal_services'),
        'featured_image'        => __('Team Member Image', 'legal_services'),
        'set_featured_image'    => __('Set team member image', 'legal_services'),
        'remove_featured_image' => __('Remove team member image', 'legal_services'),
        'use_featured_image'    => __('Use as team member image', 'legal_services'),
        'insert_into_item'      => __('Insert into team member', 'legal_services'),
        'uploaded_to_this_item' => __('Uploaded to this team member', 'legal_services'),
        'items_list'            => __('Team Members list', 'legal_services'),
        'items_list_navigation' => __('Team Members list navigation', 'legal_services'),
        'filter_items_list'     => __('Filter team members list', 'legal_services'),
    );
    
    $args = array(
        'label'                 => __('Team Member', 'legal_services'),
        'description'           => __('Post Type for Our Team', 'legal_services'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'public'                => true,
        'hierarchical'          => false,
        'has_archive'           => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true, // Enables Gutenberg editor
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'capability_type'       => 'post',
        'rewrite'               => array('slug' => 'team'),
    );
  
    register_post_type('our-team', $args);
}
add_action('init', 'create_our_team_cpt');


// Add custom meta box for 'Designation'
function add_designation_meta_box() {
    add_meta_box(
        'designation_meta_box',    // Unique ID
        'Designation',             // Box title
        'designation_meta_box_html',  // Content callback
        'create_our_team_cpt',                // Post type
        'side',                    // Context (side, normal, etc.)
        'default'                  // Priority
    );
}
add_action('add_meta_boxes', 'add_designation_meta_box');

// HTML for the meta box
function designation_meta_box_html($post) {
    $value = get_post_meta($post->ID, '_designation', true);
    ?>
    <label for="designation_field">Designation</label>
    <input type="text" name="designation_field" id="designation_field" value="<?php echo esc_attr($value); ?>" />
    <?php
}

// Save the custom field data
function save_designation_meta_box_data($post_id) {
    // Check if the current user has permission to edit the post
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // Check if the input field is set and save the meta value
    if (isset($_POST['designation_field'])) {
        $designation = sanitize_text_field($_POST['designation_field']);
        update_post_meta($post_id, '_designation', $designation);
    }
}
add_action('save_post', 'save_designation_meta_box_data');
