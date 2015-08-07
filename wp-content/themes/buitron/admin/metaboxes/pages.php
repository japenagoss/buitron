<?php 
add_action('add_meta_boxes', 'meta_box_pages');
/**
 * Create metabox for pages settings
 */
function meta_box_pages(){
    add_meta_box(
        'mb_settings_pages',
        __('Banner', 'buitron'),
        'generate_controls_pages',
        'page'
    );
}

/**
 * Form for pages settings
 */
function generate_controls_pages($post){
	$controls = new btrControls();
    wp_nonce_field('posttypes_meta_box', 'nonce_posttype_metabox' );

    echo $controls->create_post_type_control(
        'text',
        '_title_banner',
        __('Título en el banner','buitron'),
        $post->ID
    );

    echo $controls->create_post_type_control(
        'image',
        '_banner_image',
        __('Imagen del banner','buitron'),
        $post->ID
    );
}