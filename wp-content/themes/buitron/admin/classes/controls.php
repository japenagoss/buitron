<?php 
/**
 * Class for generate controls for forms
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */
class btrControls{

   /**
    * Method for generate form controls
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    public function create_control($type,$name,$label,$id,$options = ""){

        $value       = get_post_meta($id, $name,true);
        $control     = '';
        $add_remove  = '';

        if($type == "slide"){
            $add_remove  = '<span class="button button_add">+</span>';
            $add_remove .= '<span class="button button_remove">–</span>';
        }
    
        switch ($type) {
            case 'text':
                $control .= '<div class="fieldset">';
                $control .= '<label for="'.$name.'"><b>'.$label.': </b></label><br />';
                $control .= '<input type="text" class="regular-text" name="'.$name.'" value="'.$value.'">';
                $control .= '</div>';
            break;
            case 'select':
                $control .= '<div class="fieldset">';
                $control .= '<label for="'.$name.'"><b>'.$label.': </b></label><br />';
                $control .= '<select name="'.$name.'">';

                foreach($options as $key => $val) {
                    $selected = ($value == $key)?'selected':'';
                    $control .= '<option value="'.$key.'" '.$selected.' >'.$val.'</option>';
                }
                
                $control .= '</select>';
                $control .= '</div>';
            break;
            case 'color':
                $control .= '<div class="fieldset">';
                $control .= '<label for="'.$name.'"><b>'.$label.': </b></label><br />';
                $control .= '<input type="text" class="regular-text btr-color-field" name="'.$name.'" value="'.$value.'">';
                $control .= '</div>';
            break;
            case 'image':
                $control .= $this->generateImageControl($label,$name,$value,$add_remove);
            break;
            case 'slide':
                if(empty($value)){
                    $control .= $this->generateImageControl($label,$name."[]","",$add_remove);
                }
                else{
                    $value = maybe_unserialize($value);
                    foreach ($value as $key => $val){
                        $control .= $this->generateImageControl($label,$name."[]",$val,$add_remove);
                    }
                }
            break;
            default:
                
            break;
        }

        echo $control;
    }

   /**
    * Method for create images controls
    *
    * @package WordPress
    * @subpackage Buitron
    * @since Buitron 1.0
    */
    function generateImageControl($label,$name,$value,$add_remove){
        $control .= '<div class="fieldset">';
        $control .= '<label for="'.$name.'"><b>'.$label.':</b></label>';
        $control .= '<div class="controls">';
        $control .= '<input type="text" class="upload regular-text" name="'.$name.'" value="'.$value.'">';
        $control .= $add_remove;
        $control .= '</div>';
        $control .= '<div class="upload_button_div">';
        $control .= '<span class="button media_upload_button">';
        $control .= __('Seleccionar','buitron');
        $control .= '</span>';
        $control .= '<span class="button mlu_remove_button">';
        $control .= __('Remover','buitron');
        $control .= '</span>';
        $control .= '</div>';

        if(!empty($value)):
            $control .= '<div class="screenshot" style="display:block;">';
            $control .= '<img src="'.$value.'">';
            $control .= '</div>';
        else:
            $control .= '<div class="screenshot">';
            $control .= '</div>';
        endif;
        $control .= '</div>';

        return $control;
    }
}