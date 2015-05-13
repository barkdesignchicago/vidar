<?php

$prefix = 'meta_apple_';

global $meta_boxes;

$meta_boxes = array();

// Project: The Need
$meta_boxes[] = array(
	'id' => 'project_need',
	'title' => __( 'The Need', 'rwmb' ),
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,

	// List of meta fields
	'fields' => array(
        // TEXT
        array(
            // Field name - Will be used as label
            'name'  => __( 'Title', 'rwmb' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}the_need_title",
            // Field description (optional)
            'desc'  => __( 'Title of Section', 'rwmb' ),
            'type'  => 'text',
            // Default value (optional)
            'std'   => __( '', 'rwmb' ),
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
            'clone' => false,
        ),
		// WYSIWYG/RICH TEXT EDITOR
		array(
			'name' => __( 'The Need', 'rwmb' ),
			'id'   => "{$prefix}the_need",
			'type' => 'wysiwyg',
			// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
			'raw'  => false,
			'std'  => __( '', 'rwmb' ),

			// Editor settings, see wp_editor() function: look4wp.com/wp_editor
			'options' => array(
				'textarea_rows' => 4,
				'teeny'         => false,
				'media_buttons' => false,
			),
		),
	),
	'only_on'    => array(
		'template' => array( 'page-project.php' ),
	),

);

// Project: Fiscal Constraints
$meta_boxes[] = array(
	'id' => 'fiscal_constraints',
	'title' => __( 'Fiscal Constraints', 'rwmb' ),
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,

	// List of meta fields
	'fields' => array(
        array(
            // Field name - Will be used as label
            'name'  => __( 'Title', 'rwmb' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}fiscal_constraints_title",
            // Field description (optional)
            'desc'  => __( 'Title of Section', 'rwmb' ),
            'type'  => 'text',
            // Default value (optional)
            'std'   => __( '', 'rwmb' ),
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
            'clone' => false,
        ),
		// WYSIWYG/RICH TEXT EDITOR
		array(
			'name' => __( 'Fiscal Constraints', 'rwmb' ),
			'id'   => "{$prefix}fiscal_constraints",
			'type' => 'wysiwyg',
			// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
			'raw'  => false,
			'std'  => __( '', 'rwmb' ),

			// Editor settings, see wp_editor() function: look4wp.com/wp_editor
			'options' => array(
				'textarea_rows' => 4,
				'teeny'         => false,
				'media_buttons' => false,
			),
		),
	),
	'only_on'    => array(
		'template' => array( 'page-project.php' ),
	),

);

// Project: Data Teams
$meta_boxes[] = array(
	'id' => 'data_teams',
	'title' => __( 'Data Teams', 'rwmb' ),
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,

	// List of meta fields
	'fields' => array(
        array(
            // Field name - Will be used as label
            'name'  => __( 'Title', 'rwmb' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}data_teams_title",
            // Field description (optional)
            'desc'  => __( 'Title of Section', 'rwmb' ),
            'type'  => 'text',
            // Default value (optional)
            'std'   => __( '', 'rwmb' ),
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
            'clone' => false,
        ),
		// WYSIWYG/RICH TEXT EDITOR
		array(
			'name' => __( 'Data Teams', 'rwmb' ),
			'id'   => "{$prefix}data_teams",
			'type' => 'wysiwyg',
			// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
			'raw'  => false,
			'std'  => __( '', 'rwmb' ),

			// Editor settings, see wp_editor() function: look4wp.com/wp_editor
			'options' => array(
				'textarea_rows' => 4,
				'teeny'         => false,
			),
		),
	),
	'only_on'    => array(
		'template' => array( 'page-project.php' ),
	),

);

// RESOURCES Author Info
$meta_boxes[] = array(
	'id' => 'resource_author',
	'title' => __( 'Author(s)', 'rwmb' ),
	'pages' => array( 'resources' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,

	// List of meta fields
	'fields' => array(
        array(
            // Field name - Will be used as label
            'name'  => __( 'Author(s)', 'rwmb' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}resource_authors",
            // Field description (optional)
            'desc'  => __( 'Add resource authors', 'rwmb' ),
            'type'  => 'text',
            // Default value (optional)
            'std'   => __( '', 'rwmb' ),
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
            'clone' => false,
        ),
	),
);

// RESOURCES Publication Info
$meta_boxes[] = array(
	'id' => 'resource_publication_number',
	'title' => __( 'Publication Number', 'rwmb' ),
	'pages' => array( 'resources' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,

	// List of meta fields
	'fields' => array(
        array(
            // Field name - Will be used as label
            'name'  => __( 'Publication Number', 'rwmb' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}resource_publication_number",
            // Field description (optional)
            'desc'  => __( 'Add Publication number', 'rwmb' ),
            'type'  => 'text',
            // Default value (optional)
            'std'   => __( '', 'rwmb' ),
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
            'clone' => false,
        ),
	),
);

// RESOURCES File Info
$meta_boxes[] = array(
	'id' => 'resource_pdf',
	'title' => __( 'File Upload', 'rwmb' ),
	'pages' => array( 'resources' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,

	// List of meta fields
	'fields' => array(
       // FILE ADVANCED (WP 3.5+)
        array(
                'name' => __( 'PDF File Upload', 'rwmb' ),
                'id'   => "{$prefix}resource_file_upload",
                'type' => 'file_advanced',
                'max_file_uploads' => 4,
                'mime_type' => '', // Leave blank for all file types
        ),
	),
);


  



// SAMPLE WITH IMAGE
/*
$meta_boxes[] = array(
	'id' => 'what_we_do_happyhour',
	'title' => __( 'Happy Hour Section', 'rwmb' ),
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,

	// List of meta fields
	'fields' => array(
		// WYSIWYG/RICH TEXT EDITOR
		array(
			'name' => __( 'Happy Hour Content', 'rwmb' ),
			'id'   => "{$prefix}what_we_do_happyhour",
			'type' => 'wysiwyg',
			// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
			'raw'  => false,
			'std'  => __( 'Default Text', 'rwmb' ),

			// Editor settings, see wp_editor() function: look4wp.com/wp_editor
			'options' => array(
				'textarea_rows' => 4,
				'teeny'         => false,
				'media_buttons' => false,
			),
		),
		array(
			'name'             => __( 'Happy Hour Image', 'rwmb' ),
			'id'               => "{$prefix}what_we_do_happyhour_image",
			'type'             => 'image_advanced',
			'max_file_uploads' => 1,
		),

	),
	'only_on'    => array(
		'template' => array( 'page-what-we-do.php' ),
	),

);
*/


/**
 * Register meta boxes
 *
 * @return void
 */
function rw_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) ) {
		foreach ( $meta_boxes as $meta_box ) {
			if ( isset( $meta_box['only_on'] ) && ! rw_maybe_include( $meta_box['only_on'] ) ) {
				continue;
			}

			new RW_Meta_Box( $meta_box );
		}
	}
}

add_action( 'admin_init', 'rw_register_meta_boxes' );

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function rw_maybe_include( $conditions ) {
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN ) {
		return false;
	}

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return true;
	}

	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	}
	elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}
	else {
		$post_id = false;
	}

	$post_id = (int) $post_id;
	$post    = get_post( $post_id );

	foreach ( $conditions as $cond => $v ) {
		// Catch non-arrays too
		if ( ! is_array( $v ) ) {
			$v = array( $v );
		}

		switch ( $cond ) {
			case 'id':
				if ( in_array( $post_id, $v ) ) {
					return true;
				}
			break;
			case 'parent':
				$post_parent = $post->post_parent;
				if ( in_array( $post_parent, $v ) ) {
					return true;
				}
			break;
			case 'slug':
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ) ) {
					return true;
				}
			break;
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) ) {
					return true;
				}
			break;
		}
	}

	// If no condition matched
	return false;
}
