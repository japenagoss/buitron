<?php 
add_action('add_meta_boxes', 'meta_box_products_home');
add_action('add_meta_boxes', 'meta_box_products_texts');
add_action('add_meta_boxes', 'meta_box_products_images');
add_action('add_meta_boxes', 'meta_box_products_slides');

/**
 * Create metabox for home settings
 */
function meta_box_products_home(){
    add_meta_box(
        'mb_settings_products_home',
        __('Home', 'buitron'),
        'generate_controls_products_home',
        'products'
    );
}

/**
 * Create metabox for texts settings
 */
function meta_box_products_texts(){
    add_meta_box(
        'mb_settings_products_texts',
        __('Textos', 'buitron'),
        'generate_controls_products_texts',
        'products'
    );
}

/**
 * Create metabox for images settings
 */
function meta_box_products_images(){
    add_meta_box(
        'mb_settings_products_images',
        __('Imagenes', 'buitron'),
        'generate_controls_products_images',
        'products'
    );
}

/**
 * Create metabox for selides settings
 */
function meta_box_products_slides(){
    add_meta_box(
        'mb_settings_products_slides',
        __('Slide', 'buitron'),
        'generate_controls_products_slides',
        'products'
    );
}

/**
 * Form for home settings
 */
function generate_controls_products_home($post){
    $controls = new btrControls();
    wp_nonce_field('posttypes_meta_box', 'nonce_posttype_metabox' );

    echo $controls->create_post_type_control(
        'select',
        '_show_in_home',
        __('Mostrar en el home','buitron'),
        $post->ID,
        array(
            'no' => __('No','buitron'),
            'yes' => __('Si','buitron')
        )
    );

    echo $controls->create_post_type_control(
        'text',
        '_internal_link',
        __('Link','buitron'),
        $post->ID
    );
}

/**
 * Form for texts settings
 */
function generate_controls_products_texts($post){
    $controls = new btrControls();

    echo $controls->create_post_type_control(
        'color',
        '_texts_color',
        __('Color del texto','buitron'),
        $post->ID
    );

    echo $controls->create_post_type_control(
        'select',
        '_text_position',
        __('Posición del texto','buitron'),
        $post->ID,
        array(
            'left' => __('Left','buitron'),
            'right' => __('Right','buitron')
        )
    );

    echo $controls->create_post_type_control(
        'textarea',
        '_characteristics',
        __('Características','buitron'),
        $post->ID
    );
}

/**
 * Form for images settings
 */
function generate_controls_products_images($post){
    $controls = new btrControls();

    echo $controls->create_post_type_control(
        'select',
        '_image_type',
        __('Tipo de imagen','buitron'),
        $post->ID,
        array(
            'degrade'   => __('Degradada','buitron'),
            'block'    => __('Bloque','buitron'),
            'slide'     => __('Slide','buitron'),
        )
    );

    echo $controls->create_post_type_control(
        'image',
        '_image_background',
        __('Imagen degradada','buitron'),
        $post->ID
    );

    echo $controls->create_post_type_control(
        'image',
        '_image_block',
        __('Imagen en bloque','buitron'),
        $post->ID
    );
}

/**
 * Form for slides settings
 */
function generate_controls_products_slides($post){
    $controls = new btrControls();
     
    echo $controls->create_post_type_control(
        'slide',
        '_slide_image',
        __('Imagen','buitron'),
        $post->ID
    );
}