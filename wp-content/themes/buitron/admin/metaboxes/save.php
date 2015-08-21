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
    if(isset($_POST["_title_banner"])){
        update_post_meta($postid,'_title_banner',$_POST["_title_banner"]);
    }
    if(isset($_POST["_banner_image"])){
        update_post_meta($postid,'_banner_image',$_POST["_banner_image"]);
    }
    if(isset($_POST["_characteristics"])){
        update_post_meta($postid,'_characteristics',$_POST["_characteristics"]);
    }
    if(isset($_POST["_internal_link"])){
        update_post_meta($postid,'_internal_link',$_POST["_internal_link"]);
    }

    if(isset($_POST["_slide_company"])){
        update_post_meta(
            $postid,
            '_slide_company',
            maybe_serialize($_POST["_slide_company"])
        );
    }

    if(isset($_POST["_show_contact_button"])){
        update_post_meta($postid,'_show_contact_button',$_POST["_show_contact_button"]);
    }
}

add_action('save_post', 'btr_save_meta_box_data');