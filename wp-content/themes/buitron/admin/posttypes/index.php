<?php 
/**
 * File for instantiate post types
 *
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */

/** 
 * This is a file with class for post types
 */
require BUITRON_DIRECTORY.'/admin/classes/post-types.php';

/** 
 * This is a file with class for meta box 
 */
require BUITRON_DIRECTORY.'/admin/classes/meta-box.php';

/* instantiate for create an object home_slides */
$home_slides  = new btrPostTypes('home_slides');
$home_slides->labels      = array(
    'name'               => __( "Home slide", 'buitron' ),
    'singular_name'      => __( 'Home slide', 'buitron' ),
    'menu_name'          => __( "Home slides",  'buitron' ),
    'name_admin_bar'     => __( 'Home slides', 'buitron' ),
    'add_new'            => __( 'Add New', 'buitron' ),
    'add_new_item'       => __( 'Add New slide', 'buitron' ),
    'new_item'           => __( 'New slide', 'buitron' ),
    'edit_item'          => __( 'Edit slide', 'buitron' ),
    'view_item'          => __( 'View slide', 'buitron' ),
    'all_items'          => __( 'All slides', 'buitron' ),
    'search_items'       => __( 'Search slides', 'buitron' ),
    'parent_item_colon'  => __( 'Parent slides:', 'buitron' ),
    'not_found'          => __( 'No slides found.', 'buitron' ),
    'not_found_in_trash' => __( 'No slides found in Trash.', 'buitron')
); 

$home_slides->features = array(
    'labels'             => $home_slides->labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'thumbnail','excerpt'),
    'menu_icon'          => BUITRON_URL.'/images/icon_webstore.png' 
);

/* Create meta box for about_us_home */
new btrMetaBox(
    'home_slides',
    'meta_box_data_home_slides',
    __('Features','buitron'),
    array(
        0 => array(
            'type'  => 'text',
            'name'  => '_link_slide',
            'label' => __('Link','buitron')
        )
    )
);