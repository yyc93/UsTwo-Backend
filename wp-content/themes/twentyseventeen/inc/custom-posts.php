<?php
/**
 * Custom Post
 *
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Add a `case_study` post type to main admin page.
 *
 * @param void.
 * @return null.
 */
function cast_study_init(){
	$labels = array(
        'name'               => _x( 'Cast Studies', 'post type general name', 'name_cast_studies' ),
        'singular_name'      => _x( 'Cast Study', 'post type singular name', 'singular_cast_study' ),
        'menu_name'          => _x( 'Cast Studies', 'admin menu', 'menu_cast_studies' ),
        'name_admin_bar'     => _x( 'Cast Study', 'add new on admin bar', 'name_admin_bar_cast_study' ),
        'add_new'            => _x( 'Add New', 'cast study', 'add_new_cast_study' ),
        'add_new_item'       => __( 'Add New Cast Study', 'add_new_item_cast_study' ),
        'new_item'           => __( 'New Cast Study', 'new_item_cast_study' ),
        'edit_item'          => __( 'Edit Cast Study', 'edit_item_cast_study' ),
        'view_item'          => __( 'View Cast Study', 'view_item_cast_study' ),
        'all_items'          => __( 'All Cast Studies', 'all_items_cast_studies' ),
        'search_items'       => __( 'Search Cast Studies', 'search_items_cast_studies' ),
        'parent_item_colon'  => __( 'Parent Cast Studies:', 'parent_cast_studies' ),
        'not_found'          => __( 'No Cast Studies found.', 'not_found_cast_studies' ),
        'not_found_in_trash' => __( 'No Cast Studies found in Trash.', 'not_found_in_trash_cast_studies' )
    );
    
    // register post type

    $args = array(
        'labels'            => $labels,
        'description'       => __( 'Description.', 'your-plugin-textdomain' ),
        'public'            => true,
        'publicly_queryable'=> true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'cast-study' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-randomize',
        'show_in_rest'      => true,
        'rest_base'         => 'cast-study',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'          => array(
                                    'title',
                                    'editor',
                                    'excerpt',
                                    'trackbacks',
                                    'custom-fields',
                                    'comments',
                                    //'revisions',
                                    'thumbnail',
                                    'author',
                                    'page-attributes'
                                )
    );
    register_post_type( 'cast_study', $args );
    
    // register taxonomy "Genres" to cast_study
/*
    $labels = array(
        'name'              => _x( 'Genres', 'taxonomy general name' ),
        'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Genres' ),
        'all_items'         => __( 'All Genres' ),
        'parent_item'       => __( 'Parent Genre' ),
        'parent_item_colon' => __( 'Parent Genre:' ),
        'edit_item'         => __( 'Edit Genre' ),
        'update_item'       => __( 'Update Genre' ),
        'add_new_item'      => __( 'Add New Genre' ),
        'new_item_name'     => __( 'New Genre Name' ),
        'menu_name'         => __( 'Genre' ),
      );
 
    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'genre' ),
        'show_in_rest'          => true,
        'rest_base'             => 'genre',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
    );
    register_taxonomy( 'genre', array( 'cast_study' ), $args );
*/
}
add_action( 'init', 'cast_study_init' );

