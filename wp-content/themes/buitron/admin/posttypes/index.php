<?php 
/**
 * File for create custom post types
 *
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */

/** 
 * This is a file with a hook when I save a post
 */
require BUITRON_DIRECTORY.'/admin/metaboxes/save.php';

/** 
 * This is a file for create metabox for pages
 */
require BUITRON_DIRECTORY.'/admin/metaboxes/pages.php';

function register_post_types_btr(){
    /** 
     * This is a file for home slides custom post type
     */
    require BUITRON_DIRECTORY.'/admin/posttypes/home-slides.php';

    /** 
     * This is a file for products custom post type
     */
    require BUITRON_DIRECTORY.'/admin/posttypes/products.php';

    /** 
     * This is a file for contact items custom post type
     */
    require BUITRON_DIRECTORY.'/admin/posttypes/contact-items.php';

    /** 
     * This is a file for blocks of company
     */
    require BUITRON_DIRECTORY.'/admin/posttypes/company.php';

    /** 
     * This is a file for services slides
     */
    require BUITRON_DIRECTORY.'/admin/posttypes/services-slides.php';
}

add_action('init', 'register_post_types_btr');

