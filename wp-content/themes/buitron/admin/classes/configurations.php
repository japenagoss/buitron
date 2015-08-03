<?php 
/**
 * Class for for administrators configurations.
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */
class btrAdminConfigurations extends btrControls{

   /**
    * Configure theme in administrator
    * Loading styles and js files
    * hook for reply ajax call
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    function __construct(){
        add_action('after_setup_theme',array($this,'btr_setup_theme')); 
        add_action('admin_enqueue_scripts', array($this,'loadStylesScripts'));  
        add_action('wp_ajax_btr_save', array($this,'btr_save_settings'));
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

   /**
    * Method for load styles and scripts js
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    * @uses wp_enqueue_style()
    */
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

   /**
    * Method for show item for admin page of configurations of theme
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron Cip 1.0
    */
    public function btr_menu_item_page_settings(){
        add_menu_page(
            'Buitron', 
            'Buitron', 
            'manage_options', 
            'buitron-options', 
            array($this,'btr_page_settings')
        );  
    }

   /**
    * Method for show page with options for buitron theme settings
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    * @uses current_user_can()
    */
    function btr_page_settings(){
        if (!current_user_can('manage_options')){
            wp_die(__('You do not have sufficient permissions to access this page.','buitron'));
        }

        /*Generate sections and controls*/
        $sections = $this->btr_generate_sections();

        /** 
         * This is a file with html for index page administrator
         */
        require BUITRON_DIRECTORY.'/admin/pages/index.php';
    }

    function btr_generate_sections(){
        $sections[0]    = array(
            'name'  => __('Encabezado','buitron'),
            'id'    => 'btr-header-settings',
            'controls'  => array()
        );

        $sections[1]    = array(
            'name'  => __('Home','buitron'),
            'id'    => 'btr-home-settings',
            'controls'  => array()
        );

        $sections[2]    = array(
            'name'  => __('Servicios home','buitron'),
            'id'    => 'btr-home-services-settings',
            'controls'  => array()
        );

        $sections[3]    = array(
            'name'  => __('Productos','buitron'),
            'id'    => 'btr-products-settings',
            'controls'  => array()
        );

        $sections[4]    = array(
            'name'  => __('Footer','buitron'),
            'id'    => 'btr-footer-settings',
            'controls'  => array()
        );

        array_push(
            $sections[0]['controls'],
            $this->create_settings_control(
                'image',
                'btr_header_logo',
                __('Logo','buitron')
            )
        );

        array_push(
            $sections[1]['controls'],
            $this->create_settings_control(
                'image',
                'btr_home_logo',
                __('Logo en el home','buitron')
            )
        );

        array_push(
            $sections[1]['controls'],
            $this->create_settings_control(
                'editor',
                'btr_home_text',
                __('Texto','buitron')
            )
        );

        array_push(
            $sections[1]['controls'],
            $this->create_settings_control(
                'text',
                'btr_home_link',
                __('Link','buitron')
            )
        );

        array_push(
            $sections[2]['controls'],
            $this->create_settings_control(
                'editor',
                'btr_home_services_text',
                __('Texto','buitron')
            )
        );

        array_push(
            $sections[2]['controls'],
            $this->create_settings_control(
                'text',
                'btr_home_services_link',
                __('Link','buitron')
            )
        );

        array_push(
            $sections[2]['controls'],
            $this->create_settings_control(
                'image',
                'btr_home_services_image',
                __('Imagen','buitron')
            )
        );

        array_push(
            $sections[3]['controls'],
            $this->create_settings_control(
                'text',
                'btr_products_home_title',
                __('Título en el home','buitron')
            )
        );

        array_push(
            $sections[3]['controls'],
            $this->create_settings_control(
                'editor',
                'btr_products_home_text',
                __('Texto en el home','buitron')
            )
        );

        array_push(
            $sections[3]['controls'],
            $this->create_settings_control(
                'text',
                'btr_products_home_link',
                __('Link en el home','buitron')
            )
        );

        array_push(
            $sections[4]['controls'],
            $this->create_settings_control(
                'text',
                'btr_contact_footer_title',
                __('Título de contacto en el formulario de subscripción ','buitron')
            )
        );

        array_push(
            $sections[4]['controls'],
            $this->create_settings_control(
                'editor',
                'btr_contact_footer_text',
                __('Texto de contacto en el formulario de subscripción ','buitron')
            )
        );

        return $sections;
    }

   /**
    * Save data settings
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    public function btr_save_settings(){
        if(!current_user_can('manage_options')){
            _e('You do not have sufficient permissions to access this page.','buitron');
        }
        else{
            if (!isset($_POST['nonce_save_options'])) {
                _e('Sorry, your nonce did not verify.','buitron');
            }
            else{
                if (!wp_verify_nonce($_POST['nonce_save_options'], 'save_admin_options')){
                    _e('Sorry, your nonce did not verify.','buitron');
                }
                else{
                    if(count($_POST) > 0){
                        foreach ($_POST as $key => $value) {
                            update_option($key,stripslashes($value));
                        }
                    }
                }
            }
        }
        wp_die();
    }
}