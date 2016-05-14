<?php
/**
 * corporatemunk Team Post Type
 *
 * @package corporatemunk
 */

// Register Custom Post Type
function team_post_type() {

	$labels = array(
		'name'                => _x( 'Teams', 'Post Type General Name', 'corporate-munk' ),
		'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'corporate-munk' ),
		'menu_name'           => __( 'Team', 'corporate-munk' ),
		'name_admin_bar'      => __( 'Team', 'corporate-munk' ),
		'parent_item_colon'   => __( 'Parent Item:', 'corporate-munk' ),
		'all_items'           => __( 'All Items', 'corporate-munk' ),
		'add_new_item'        => __( 'Add New Item', 'corporate-munk' ),
		'add_new'             => __( 'Add New', 'corporate-munk' ),
		'new_item'            => __( 'New Item', 'corporate-munk' ),
		'edit_item'           => __( 'Edit Item', 'corporate-munk' ),
		'update_item'         => __( 'Update Item', 'corporate-munk' ),
		'view_item'           => __( 'View Item', 'corporate-munk' ),
		'search_items'        => __( 'Search Item', 'corporate-munk' ),
		'not_found'           => __( 'Not found', 'corporate-munk' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'corporate-munk' ),
	);
	$rewrite = array(
		'slug'                => 'team',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Team', 'corporate-munk' ),
		'description'         => __( 'Corporate Munk Team', 'corporate-munk' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( '', '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-businessman',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'team',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'mu_team', $args );

}
add_action( 'init', 'team_post_type', 0 );

// Register Custom Taxonomy
function team_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Team Categories', 'Taxonomy General Name', 'corporate-munk' ),
		'singular_name'              => _x( 'Team Category', 'Taxonomy Singular Name', 'corporate-munk' ),
		'menu_name'                  => __( 'Team Category', 'corporate-munk' ),
		'all_items'                  => __( 'All Items', 'corporate-munk' ),
		'parent_item'                => __( 'Parent Item', 'corporate-munk' ),
		'parent_item_colon'          => __( 'Parent Item:', 'corporate-munk' ),
		'new_item_name'              => __( 'New Item Name', 'corporate-munk' ),
		'add_new_item'               => __( 'Add New Item', 'corporate-munk' ),
		'edit_item'                  => __( 'Edit Item', 'corporate-munk' ),
		'update_item'                => __( 'Update Item', 'corporate-munk' ),
		'view_item'                  => __( 'View Item', 'corporate-munk' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'corporate-munk' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'corporate-munk' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'corporate-munk' ),
		'popular_items'              => __( 'Popular Items', 'corporate-munk' ),
		'search_items'               => __( 'Search Items', 'corporate-munk' ),
		'not_found'                  => __( 'Not Found', 'corporate-munk' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'mu_team_category', array( 'mu_team' ), $args );

}
add_action( 'init', 'team_taxonomy', 0 );