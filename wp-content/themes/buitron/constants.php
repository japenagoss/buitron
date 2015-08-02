<?php 
/**
 * Constant for directory of template files
 *
 * @since Buitron 1.0
 * @var string with template directory
 */
define('BUITRON_DIRECTORY',get_template_directory());

/**
 * Constant for url template
 *
 * @since Buitron 1.0
 * @var string with template url
 */
define('BUITRON_URL',get_template_directory_uri());

/**
 * Constant for template info
 *
 * @since Buitron 1.0
 * @var object with template info
 */
define('TEMPLATE',wp_get_theme());

/**
 * Constant for assets url
 *
 * @since Buitron 1.0
 * @var string with assets url
 */
define('BUITRON_ASSETS_URL',BUITRON_URL.'/assets/');