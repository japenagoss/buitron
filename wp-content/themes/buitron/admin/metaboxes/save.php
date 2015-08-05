<?php 
/**
 * Save custom post data of meta boxes
 */
function btr_save_meta_box_data($postid){
    if (!isset($_POST['nonce_posttype_metabox'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['nonce_posttype_metabox'], 'posttypes_meta_box')){
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }

    if (!current_user_can('edit_post', $postid)){
        return;
    }

    //Save data
    if(isset($_POST["_link_home_slide"])){
        update_post_meta($postid,'_link_home_slide',$_POST["_link_home_slide"]);
    }
    if(isset($_POST["_texts_color"])){
        update_post_meta($postid,'_texts_color',$_POST["_texts_color"]);
    }
    if(isset($_POST["_text_position"])){
        update_post_meta($postid,'_text_position',$_POST["_text_position"]);
    }
    if(isset($_POST["_image_type"])){
        update_post_meta($postid,'_image_type',$_POST["_image_type"]);
    }
    if(isset($_POST["_image_background"])){
        update_post_meta($postid,'_image_background',$_POST["_image_background"]);
    }
    if(isset($_POST["_image_block"])){
        update_post_meta($postid,'_image_block',$_POST["_image_block"]);
    }
    if(isset($_POST["_slide_image"])){
        update_post_meta(
            $postid,
            '_slide_image',
            maybe_serialize($_POST["_slide_image"])
        );
    }
    if(isset($_POST["_show_in_home"])){
        update_post_meta($postid,'_show_in_home',$_POST["_show_in_home"]);
    }
}

add_action('save_post', 'btr_save_meta_box_data');