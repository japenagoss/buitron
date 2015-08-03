<?php 
add_action('add_meta_boxes', 'meta_box_data_home_slides');

function meta_box_data_home_slides(){
    add_meta_box(
        'mb_settings_home_slides',
        __('Configuración', 'buitron'),
        'generate_controls_home_slides',
        'home_slides'
    );
}

function generate_controls_home_slides($post){
    $controls = new btrControls();
    wp_nonce_field('posttypes_meta_box', 'nonce_posttype_metabox' );

    echo $controls->create_post_type_control(
        'text',
        '_link_home_slide',
        'Link',
        $post->ID
    );
}