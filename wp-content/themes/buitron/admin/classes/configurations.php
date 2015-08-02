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
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    function __construct(){
        add_action('after_setup_theme',array($this,'btr_setup_theme'));  
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
}