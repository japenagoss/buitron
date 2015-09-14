<?php
$servi_slides_labels  = array(
    'name'               => __( "Slides de servicios", 'buitron' ),
    'singular_name'      => __( 'Slide', 'buitron' ),
    'menu_name'          => __( "Slides de servicios",  'buitron' ),
    'name_admin_bar'     => __( 'Slides de servicios', 'buitron' ),
    'add_new'            => __( 'Añadir nuevo', 'buitron' ),
    'add_new_item'       => __( 'Añadir nuevo slide', 'buitron' ),
    'new_item'           => __( 'Nuevo slide', 'buitron' ),
    'edit_item'          => __( 'Editar slide', 'buitron' ),
    'view_item'          => __( 'Ver slide', 'buitron' ),
    'all_items'          => __( 'Todos los slides', 'buitron' ),
    'search_items'       => __( 'Buscar slides', 'buitron' ),
    'parent_item_colon'  => __( 'Padre de slides:', 'buitron' ),
    'not_found'          => __( 'No se encontraron slides.', 'buitron' ),
    'not_found_in_trash' => __( 'No se encontraron slides en la papelera.', 'buitron')
); 

$servi_slides_args = array(
    'labels'             => $servi_slides_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 31,
    'supports'           => array('title', 'thumbnail'),
    'menu_icon'          => BUITRON_URL.'/images/icon_webstore.png' 
);

register_post_type('services_slides', $servi_slides_args);