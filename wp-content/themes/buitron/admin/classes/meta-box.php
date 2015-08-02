<?php 
/**
 * Class for meta box
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */
class btrMetaBox{

    private $post_type      = '';
    private $meta_box_id    = '';
    private $meta_box_title = '';
    private $controls       = array();
    private $postid         = '';
    private $options        = array();
    private $optionsselect;

   /**
    * Constructor for initialize hook for register meta box. Declare atributes to. 
    * Action when I save the post type
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    function __construct($type,$metaboxid,$metaboxtitle,$controls){

        $this->post_type        = $type;
        $this->meta_box_id      = $metaboxid;
        $this->meta_box_title   = $metaboxtitle;
        $this->controls         = $controls;

        foreach($controls as $key => $value) {
            array_push($this->options, $value['name']);
            if($value['type'] == 'select'){
                $this->optionsselect = $value['options'];
            }
        }

        add_action('add_meta_boxes', array($this,'create_metabox'));
        add_action('save_post', array( $this, 'save_post_type'));
    }

   /**
    * Method for create a meta box
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    function create_metabox(){
        add_meta_box(
            $this->meta_box_id,
            __($this->meta_box_title, 'buitron'),
            array($this,'form_metaBox'),
            $this->post_type
        );
    }

   /**
    * Method for create a form with controls for meta box
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    function form_metaBox($post){
        $this->postid = $post->ID;

        wp_nonce_field('posttypes_meta_box', 'nonce_posttype_metabox' );

        foreach ($this->controls as $key => $value) {
            echo $this->create_control($value['type'],$value['name'],$value['label']);
        }
    }

   /**
    * Method for generate form controls
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    private function create_control($type,$name,$label){
        $value      = get_post_meta($this->postid, $name, true);
        $control    = '';

        switch ($type) {
            case 'text':
                $control .= '<p>';
                $control .= '<label for="'.$name.'"><b>'.$label.': </b></label><br />';
                $control .= '<input type="text" class="regular-text" name="'.$name.'" value="'.$value.'">';
                $control .= '</p>';
            break;
            case 'select':
                $control .= '<p>';
                $control .= '<label for="'.$name.'"><b>'.$label.': </b></label><br />';
                $control .= '<select name="'.$name.'">';
                
                if(!empty($this->optionsselect)){
                    foreach ($this->optionsselect as $key => $val) {
                        $selected = ($value == $key)?'selected':'';
                        $control .= '<option value="'.$key.'" '.$selected.' >'.$val.'</option>';
                    }
                }
                
                $control .= '</select>';
                $control .= '</p>';
            break;
            default:
                
            break;
        }
        return $control;
    }

   /**
    * Method for save options of meta box
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    function save_post_type($postid){

         // Check if our nonce is set.
        if (!isset($_POST['nonce_posttype_metabox'])) {
            return;
        }

        // Verify that the nonce is valid.
        if (!wp_verify_nonce($_POST['nonce_posttype_metabox'], 'posttypes_meta_box')){
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
            return;
        }

        // Check the user's permissions.
        if (isset($_POST['post_type']) && $this->post_type == $_POST['post_type']) {
            if (!current_user_can('edit_post', $postid)){
                return;
            }
        }

        foreach ($_POST as $key => $value) {
            if(in_array($key,$this->options)){
                $my_data = sanitize_text_field($value);
                update_post_meta($postid, $key, $my_data);
            }
        }
    }
}