<?php 
/**
 * Class for for administrators configurations.
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */
class btrAdminConfigurations{

   /**
    * Configure theme in administrator
    * Loading styles and js files
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    function __construct(){
        add_action('after_setup_theme',array($this,'btr_setup_theme')); 
        add_action('admin_enqueue_scripts', array($this,'loadStylesScripts'));  
    }

   /**
    * Method for loading diferentes features of theme
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    * @uses load_theme_textdomain()
    * @uses add_editor_style()
    * @uses add_theme_support()
    * @uses register_nav_menu()
    */
    function btr_setup_theme(){
        load_theme_textdomain('buitron', BUITRON_DIRECTORY.'/languages');
        add_editor_style('editor-style.css');
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');

        //Register menu
        register_nav_menu('buitron', __('Menú principal','buitron'));
    }

    function loadStylesScripts(){
        /* CSS files */
        wp_enqueue_style('wp-color-picker'); 
        wp_enqueue_style('thickbox');
        wp_enqueue_style('btr_admin', BUITRON_URL.'/admin/css/admin-style.css', false, '1.0');

        /* JS files */
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('btr_admin',BUITRON_URL.'/admin/js/admin.js',array('jquery','media-upload','thickbox','wp-color-picker'),'1.0');
    }
}