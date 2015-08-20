<?php
/** 
 * This is a file with a class for create form controls
 */
require BUITRON_DIRECTORY.'/admin/classes/controls.php';

/** 
 * This is a file with class for initial configuraton for admin panel
 */
require BUITRON_DIRECTORY.'/admin/classes/configurations.php';
$brt_settings = new btrAdminConfigurations();

/**
 * Call method for load a item menu for page configurations of theme
 */
add_action('admin_menu', array($brt_settings ,'btr_menu_item_page_settings'));

/** 
 * This is a file with post types
 */
require BUITRON_DIRECTORY.'/admin/posttypes/index.php';