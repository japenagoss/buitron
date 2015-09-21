<?php 
$contact_items_labels      = array(
    'name'               => __( "Datos de contacto", 'buitron' ),
    'singular_name'      => __( 'Datos de contacto', 'buitron' ),
    'menu_name'          => __( "Datos de contacto",  'buitron' ),
    'name_admin_bar'     => __( 'Datos de contacto', 'buitron' ),
    'add_new'            => __( 'Añadir nuevo', 'buitron' ),
    'add_new_item'       => __( 'Añadir nuevo dato', 'buitron' ),
    'new_item'           => __( 'Nuevo dato', 'buitron' ),
    'edit_item'          => __( 'Editar dato', 'buitron' ),
    'view_item'          => __( 'Ver dato', 'buitron' ),
    'all_items'          => __( 'Todos los datos de contacto', 'buitron' ),
    'search_items'       => __( 'Buscar datos', 'buitron' ),
    'parent_item_colon'  => __( 'Padre de datos:', 'buitron' ),
    'not_found'          => __( 'No se encontraron datos.', 'buitron' ),
    'not_found_in_trash' => __( 'No se encontraron datos en la papelera.', 'buitron')
); 

$contact_items_args = array(
    'labels'             => $contact_items_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 11,
    'supports'           => array('title', 'thumbnail','excerpt'),
    'menu_icon'          => BUITRON_URL.'/images/phone-icon.png' 
);

register_post_type('contact_items', $contact_items_args);