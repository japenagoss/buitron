<?php 
add_action('add_meta_boxes', 'meta_box_data_company');

function meta_box_data_company(){
    add_meta_box(
        'mb_settings_company',
        __('Slide', 'buitron'),
        'generate_controls_company',
        'company'
    );
}

function generate_controls_company($post){
    $controls = new btrControls();
    wp_nonce_field('posttypes_meta_box', 'nonce_posttype_metabox' );

    echo $controls->create_post_type_control(
        'slide',
        '_slide_company',
        __('Imagen','buitron'),
        $post->ID
    );
}