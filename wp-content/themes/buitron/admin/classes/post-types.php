<?php 
/**
 * Class for post types
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */
class btrPostTypes{

    public $labels;
    public $icon;
    public $features;

   /**
    * Constructor for initialize register post types and declare post type atribute
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    function __construct($type){
       $this->post_type = $type;
        add_action('init',array($this,'register_posttype'));   
    }  

   /**
    * Method dor register post types
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    public function register_posttype(){
        register_post_type($this->post_type, $this->features);  
    } 
}