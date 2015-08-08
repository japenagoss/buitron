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


